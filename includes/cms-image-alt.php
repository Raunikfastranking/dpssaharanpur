<?php

/**
 * Normalize image alt text from Microsoft/API payloads (fields vary by resource).
 */
if (!function_exists('cms_image_alt')) {
function cms_image_alt(?array $item, string $fallback = ''): string
{
    if ($item === null) {
        return htmlspecialchars($fallback, ENT_QUOTES, 'UTF-8');
    }
    $alt = $item['media_alt_text'] ?? $item['image_alt'] ?? $item['image_alt_text'] ?? '';
    if ($alt === '' || $alt === null) {
        $alt = $fallback;
    }
    return htmlspecialchars((string) $alt, ENT_QUOTES, 'UTF-8');
}
}
