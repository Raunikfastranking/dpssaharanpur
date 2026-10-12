<?php


if (!function_exists('dps_api_fetch_multi')) {
    /**
     * Fetch many endpoints in parallel. Returns ['key' => decodedJson|null].
     */
    function dps_api_fetch_multi(array $endpoints, string $baseUrl = "https://dps.allenhouseschools.com/api"): array
    {
        $mh = curl_multi_init();
        $curlHandles = [];
        $responses = [];

        foreach ($endpoints as $key => $endpoint) {
            $ch = curl_init();
            curl_setopt_array($ch, [
                CURLOPT_URL => $baseUrl . $endpoint,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_CONNECTTIMEOUT => 5,
                CURLOPT_TIMEOUT => 20,
                CURLOPT_ENCODING => '', // accept gzip/deflate
                CURLOPT_SSL_VERIFYPEER => false,
                CURLOPT_SSL_VERIFYHOST => false,
                CURLOPT_HTTPHEADER => api_auth_headers(),
            ]);
            curl_multi_add_handle($mh, $ch);
            $curlHandles[$key] = $ch;
        }

        $running = null;
        do {
            $status = curl_multi_exec($mh, $running);
            if ($status > CURLM_OK) {
                break;
            }
            curl_multi_select($mh);
            usleep(10000);
        } while ($running > 0);

        foreach ($curlHandles as $key => $ch) {
            $content = curl_multi_getcontent($ch);
            $responses[$key] = ($content === false || $content === '') ? null : json_decode($content, true);
            curl_multi_remove_handle($mh, $ch);
            curl_close($ch);
        }
        curl_multi_close($mh);

        return $responses;
    }
}

if (!function_exists('dps_api_read_cache')) {
    /** Read the cache file; returns ['key' => ['time' => int, 'data' => mixed]] or []. */
    function dps_api_read_cache(string $cacheFile): array
    {
        if (!is_file($cacheFile)) {
            return [];
        }
        $decoded = json_decode((string) @file_get_contents($cacheFile), true);
        if (is_array($decoded) && isset($decoded['endpoints']) && is_array($decoded['endpoints'])) {
            return $decoded['endpoints'];
        }
        return [];
    }
}

if (!function_exists('dps_api_cached_fetch')) {
    /**
     * Return endpoint data, preferring the file cache.
     *
     * - Entries younger than $ttl seconds are served straight from disk.
     * - Expired/missing entries are fetched in parallel and merged into the cache.
     * - If the API fails for an entry, the stale cached data is kept (retry ~30s later).
     * - A lock file ensures only one request pays the refresh cost; concurrent
     *   requests serve stale data immediately instead of stampeding the API.
     * - $forceRefresh bypasses the TTL (used by warm-cache.php / cache-clear.php?warm=1).
     *
     * @return array ['key' => decodedJson|null]
     */
    function dps_api_cached_fetch(array $endpoints, string $cacheFile, int $ttl = 60, bool $forceRefresh = false): array
    {
        $lockFile = $cacheFile . '.lock';
        $cache = dps_api_read_cache($cacheFile);
        $now = time();

        $data = [];
        $toFetch = [];
        foreach ($endpoints as $key => $endpoint) {
            $entry = $cache[$key] ?? null;
            $data[$key] = is_array($entry) ? ($entry['data'] ?? null) : null;
            if ($forceRefresh || !is_array($entry) || ($now - (int) ($entry['time'] ?? 0)) >= $ttl) {
                $toFetch[$key] = $endpoint;
            }
        }

        if (!$toFetch) {
            return $data;
        }

        // Only one process refreshes; others serve whatever stale data they have.
        $lock = @fopen($lockFile, 'c');
        $gotLock = $lock !== false && flock($lock, LOCK_EX | LOCK_NB);
        if (!$gotLock) {
            if ($lock) {
                fclose($lock);
            }
            return $data;
        }

        // Re-check under the lock: another process may have just refreshed.
        if (!$forceRefresh) {
            $cache = dps_api_read_cache($cacheFile);
            $now = time();
            $toFetch = [];
            foreach ($endpoints as $key => $endpoint) {
                $entry = $cache[$key] ?? null;
                $data[$key] = is_array($entry) ? ($entry['data'] ?? null) : null;
                if (!is_array($entry) || ($now - (int) ($entry['time'] ?? 0)) >= $ttl) {
                    $toFetch[$key] = $endpoint;
                }
            }
        }

        if ($toFetch) {
            $responses = dps_api_fetch_multi($toFetch);
            $writeTime = time();
            foreach ($toFetch as $key => $endpoint) {
                $resp = $responses[$key] ?? null;
                if (is_array($resp)) {
                    $cache[$key] = ['time' => $writeTime, 'data' => $resp];
                } elseif (isset($cache[$key]) && is_array($cache[$key])) {
                    // Fetch failed — keep stale data, retry after ~30s, not on every hit.
                    $cache[$key]['time'] = $writeTime - $ttl + 30;
                } else {
                    $cache[$key] = ['time' => $writeTime, 'data' => $resp];
                }
                $data[$key] = is_array($cache[$key] ?? null) ? ($cache[$key]['data'] ?? null) : null;
            }

            $dir = dirname($cacheFile);
            if (!is_dir($dir)) {
                @mkdir($dir, 0755, true);
            }
            $tmp = $cacheFile . '.tmp';
            if (@file_put_contents($tmp, json_encode(['endpoints' => $cache])) !== false) {
                @rename($tmp, $cacheFile);
            } else {
                @unlink($tmp);
            }
        }

        flock($lock, LOCK_UN);
        fclose($lock);

        return $data;
    }
}
