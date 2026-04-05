<?php
/**
 * DIGI9 — Global Configuration
 */

// Site Info
define('SITE_NAME', 'DIGI9');
define('SITE_TAGLINE', 'AI Software & Custom Engineering Company');
define('SITE_URL', 'https://digi9.co.in');
define('SITE_EMAIL', 'hello@digi9.co.in');
define('SITE_PHONE', '+91-XXX-XXX-XXXX');
define('SITE_ADDRESS', 'Bangalore, India');

// Paths
define('BASE_PATH', dirname(__DIR__) . '/');
define('INCLUDES_PATH', BASE_PATH . 'includes/');
define('ASSETS_PATH', 'assets/');
define('CSS_PATH', ASSETS_PATH . 'css/');
define('JS_PATH', ASSETS_PATH . 'js/');
define('IMG_PATH', ASSETS_PATH . 'images/');

// Current year
define('CURRENT_YEAR', date('Y'));

// Active page helper
function isActivePage($page) {
    $current = basename($_SERVER['PHP_SELF']);
    return $current === $page ? 'active' : '';
}

// Page title helper  
function pageTitle($title = '') {
    return $title ? $title . ' — ' . SITE_NAME : SITE_NAME . ' — ' . SITE_TAGLINE;
}
