<?php

error_reporting(E_ALL);

define('APP_PATH', realpath('..'));
define('BASE_NAME', 'frontend');
define('BASE_PATH', APP_PATH . DIRECTORY_SEPARATOR . BASE_NAME);

/**
 * Read the configuration
 */
$config = include APP_PATH . "/config.php";

/**
 * Read auto-loader
 */
include APP_PATH . "/loader.php";

/**
 * Read services
 */
include APP_PATH . "/services.php";

new \Snowair\Debugbar\Whoops\WhoopsServiceProvider();

/**
 * Handle the request
 */
$application = new \Phalcon\Mvc\Application($di);

$di['app'] = $application;
(new Snowair\Debugbar\ServiceProvider())->start();

echo $application->handle()->getContent();