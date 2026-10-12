<?php
// Dev router for `php -S localhost:8000 router.php`
// Emulates the Apache .htaccess clean-URL rules for local development.
$uri  = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
$root = __DIR__;

// Serve real files (assets, proxy/*.php, etc.) as-is
if ($uri !== '/' && is_file($root . $uri)) {
    return false;
}

// Friendly routes (from .htaccess)
if (preg_match('#^/home/?$#', $uri)) {
    require $root . '/index.php';
    return true;
}
if (preg_match('#^/blog/([A-Za-z0-9-]+)$#', $uri, $m)) {
    $_GET['slug'] = $m[1];
    require $root . '/detail.php';
    return true;
}
if (preg_match('#^/view/([A-Za-z0-9-]+)$#', $uri, $m)) {
    $_GET['slug'] = $m[1];
    require $root . '/detail-view.php';
    return true;
}

// Clean URL → matching .php file
$path = rtrim($uri, '/');
if ($path === '') {
    require $root . '/index.php';
    return true;
}
if (is_file($root . $path . '.php')) {
    require $root . $path . '.php';
    return true;
}

http_response_code(404);
require $root . '/404.php';
return true;
