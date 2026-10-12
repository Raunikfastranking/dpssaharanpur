<?php
// Clears the CMS API cache so fresh data is fetched on the next request.
// Call this after updating content in the CMS, or hook it to the CMS save webhook:
//   https://dpssaharanpur.com/cache-clear.php?key=YOUR_KEY
// Add &warm=1 to rebuild the cache immediately instead of waiting for a visitor:
//   https://dpssaharanpur.com/cache-clear.php?key=YOUR_KEY&warm=1
require_once __DIR__ . '/proxy/config.php';

$key = isset($_GET['key']) ? (string) $_GET['key'] : '';
if (!defined('DPS_CACHE_CLEAR_KEY') || !hash_equals(DPS_CACHE_CLEAR_KEY, $key)) {
    http_response_code(403);
    exit('Forbidden');
}

$files = [
    __DIR__ . '/includes/cache/apis_cache.json',
    __DIR__ . '/admissions-open-2026-27/cache/apis_cache.json',
];
$cleared = [];
foreach ($files as $f) {
    if (is_file($f) && @unlink($f)) {
        $cleared[] = basename(dirname(dirname($f))) . '/' . basename(dirname($f)) . '/' . basename($f);
    }
}

header('Content-Type: text/plain');
echo "Cache cleared" . ($cleared ? ': ' . implode(', ', $cleared) : ' (nothing to clear)') . "\n";

if (isset($_GET['warm'])) {
    define('DPS_API_FORCE_REFRESH', true);
    include __DIR__ . '/includes/apis.php';
    echo "Cache rebuilt.\n";
}
