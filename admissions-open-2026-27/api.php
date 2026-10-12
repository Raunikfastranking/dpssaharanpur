<?php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/../includes/cms-image-alt.php';
require_once __DIR__ . '/../includes/api-cache.php';
$api_url = "https://dps.allenhouseschools.com";

if (!function_exists('fetchMultipleApiData')) {
    function fetchMultipleApiData($endpoints)
    {
        return dps_api_fetch_multi($endpoints);
    }
}
$endpoints = [
    'landing_data'   => '/pages/landing-page-saharanpur',
    'header_footer_data' => '/public/branches/7/layout-parts/',
    'thankyou_data' => '/pdf/branch/7',
  ];

$forceRefresh = defined('DPS_API_FORCE_REFRESH') && DPS_API_FORCE_REFRESH;
$cacheTtl = defined('DPS_API_CACHE_TTL') ? (int) DPS_API_CACHE_TTL : 60;
$data = dps_api_cached_fetch($endpoints, __DIR__ . '/cache/apis_cache.json', $cacheTtl, $forceRefresh);
$landing_data   = $data['landing_data'];
$header_footer_data = $data['header_footer_data'];
$thankyou_data = $data['thankyou_data'];
?>
