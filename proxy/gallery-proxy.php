<?php
require_once dirname(__DIR__) . '/proxy/config.php';

header('Content-Type: application/json; charset=utf-8');

$branchId = isset($_GET['branch']) ? (int) $_GET['branch'] : (int) DPS_SAHARANPUR_BRANCH_ID;
$year = isset($_GET['year']) ? (string) $_GET['year'] : '';

if ($branchId !== (int) DPS_SAHARANPUR_BRANCH_ID) {
    http_response_code(403);
    echo json_encode(['success' => false, 'message' => 'Invalid branch']);
    exit;
}

if ($year === 'all') {
    $url = 'https://dps.allenhouseschools.com/api/galleries/branch/' . $branchId;
} elseif (strlen($year) === 4) {
    $url = 'https://dps.allenhouseschools.com/api/galleries/branch/' . $branchId . '/year/' . $year;
} else {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Invalid year']);
    exit;
}

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_TIMEOUT, 30);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, api_auth_headers());

$response = curl_exec($ch);
$status = (int) curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

// Debug logging
error_log('[DEBUG gallery-proxy] URL: ' . $url);
error_log('[DEBUG gallery-proxy] Branch ID: ' . $branchId);
error_log('[DEBUG gallery-proxy] Year: ' . $year);
error_log('[DEBUG gallery-proxy] HTTP Status: ' . $status);
if ($response !== false) {
    error_log('[DEBUG gallery-proxy] Raw Response: ' . $response);
    $decoded = json_decode($response, true);
    if ($decoded && isset($decoded['data']) && is_array($decoded['data'])) {
        error_log('[DEBUG gallery-proxy] Total records returned: ' . count($decoded['data']));
        if (count($decoded['data']) > 0) {
            error_log('[DEBUG gallery-proxy] First record sample: ' . json_encode($decoded['data'][0]));
        }
    } else {
        error_log('[DEBUG gallery-proxy] Response structure: ' . json_encode($decoded));
    }
} else {
    error_log('[DEBUG gallery-proxy] Response is false');
}

http_response_code($status > 0 ? $status : 502);
echo $response !== false ? $response : json_encode(['success' => false, 'message' => 'API request failed']);
