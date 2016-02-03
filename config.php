<?php

$debug_ips = array('14.160.25.214', '113.190.242.248');
$debug_ips = array();

/**
 * END CUSTOM CODE HERE
 */
ini_set('display_errors', false);
error_reporting(1);

defined('APP_PATH') || define('APP_PATH', realpath('.'));
if (!file_exists(APP_PATH . '/vendor/autoload.php')) {
    echo "The 'vendor' folder is missing. You must run 'composer update' to resolve application dependencies.\nPlease see the README for more information.\n";
    exit(1);
}

/**
 * Autoload class vendor
 */
include APP_PATH . '/vendor/autoload.php';


if (!defined('ENVIRONMENT')) {
    if (preg_match('/(.*?)\.(admin|dev|local|localhost)$/', $_SERVER['HTTP_HOST']) || in_array($_SERVER['HTTP_HOST'], array('localhost', '127.0.0.1'))) {
        define('ENVIRONMENT', 'development');
    } elseif (preg_match('/(.*?)\.(test)$/', $_SERVER['HTTP_HOST'])) {
        define('ENVIRONMENT', 'test');
    } else {
        define('ENVIRONMENT', 'production');
    }
}

/** Server variable */
if (ENVIRONMENT != 'production' || in_array($_SERVER['REMOTE_ADDR'], $debug_ips)) {
    ini_set('display_errors', true);
    error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
}

return include BASE_PATH . '/config/config.php';