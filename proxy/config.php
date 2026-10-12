<?php
// Central config for API base URL, branch ID, and JWT auth
define('API_BASE_URL', 'https://allenp.superhouseerp.com');
define('DPS_SAHARANPUR_BRANCH_ID', 7);
define('API_JWT_TOKEN', 'hgutuyg758374tg5f3738y87gusdfjhgjh$@.hgjgjhikj');

// Secret key for cache-clear.php / warm-cache.php (change anytime, keep private)
define('DPS_CACHE_CLEAR_KEY', 'dps-596a9c8d90f57fb6de37810135c44aeab8d4f1ba');

// Seconds a cached CMS API response is served before refreshing (default used if unset)
define('DPS_API_CACHE_TTL', 60);

if (!function_exists('api_auth_headers')) {
    /**
     * @param string[] $extra e.g. ['Content-Type: application/json']
     * @return string[]
     */
    function api_auth_headers(array $extra = []): array
    {
        $headers = ['Authorization: Bearer ' . API_JWT_TOKEN];
        foreach ($extra as $header) {
            $headers[] = $header;
        }
        return $headers;
    }
}
