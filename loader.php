<?php

$loader = new \Phalcon\Loader();

$loader->registerNamespaces(
    array(
        'Phalcon' => APP_PATH . '/vendor/phalcon/incubator/Library/Phalcon/',
        ucfirst(BASE_NAME) . '\\Controllers' => $config->application->controllersDir,
    )
);

$loader->registerDirs(
    array(
        $config->application->controllersDir,
        $config->application->modelsDir,
        $config->application->pluginsDir,
        $config->application->libraryDir,
    )
)->register();