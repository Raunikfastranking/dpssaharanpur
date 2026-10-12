<?php
// Keeps the CMS API cache warm so visitors never wait on the remote API.
// Run every minute from cron (cPanel -> Cron Jobs):
//   * * * * * php /home/USER/public_html/warm-cache.php >/dev/null 2>&1
// Or via URL (key required):
//   https://dpssaharanpur.com/warm-cache.php?key=YOUR_KEY
require_once __DIR__ . '/proxy/config.php';

$isCli = (PHP_SAPI === 'cli');
$key = isset($_GET['key']) ? (string) $_GET['key'] : '';
if (!$isCli && (!defined('DPS_CACHE_CLEAR_KEY') || !hash_equals(DPS_CACHE_CLEAR_KEY, $key))) {
    http_response_code(403);
    exit('Forbidden');
}

if (!defined('DPS_API_FORCE_REFRESH')) {
    define('DPS_API_FORCE_REFRESH', true);
}
include __DIR__ . '/includes/apis.php';

$msg = '[' . date('c') . '] API cache refreshed';
if ($isCli) {
    fwrite(STDOUT, $msg . PHP_EOL);
} else {
    header('Content-Type: text/plain');
    echo $msg . "\n";
}
