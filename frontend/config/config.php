<?php
defined('APP_PATH') || define('APP_PATH', realpath('.'));

$config = new \Phalcon\Config(array(
    'database' => array(
        'adapter' => 'Mysql',
        'host' => 'localhost',
        'username' => 'root',
        'password' => '',
        'dbname' => 'test',
        'charset' => 'utf8',
    ),
    'application' => array(
        'controllersDir' => BASE_PATH . '/controllers/',
        'viewsDir' => BASE_PATH . '/views/',

        'modelsDir' => APP_PATH . '/models/',
        'pluginsDir' => APP_PATH . '/plugins/',
        'libraryDir' => APP_PATH . '/library/',
        'langDir' => APP_PATH . '/lang/',

        'migrationsDir' => APP_PATH . '/migrations/',
        'cacheDir' => APP_PATH . '/cache/',

        'staticUri' => '/phalcon/',
    )
));

$config->merge(new \Phalcon\Config(include __DIR__ . DIRECTORY_SEPARATOR . ENVIRONMENT . DIRECTORY_SEPARATOR . 'config.php'));
return $config;