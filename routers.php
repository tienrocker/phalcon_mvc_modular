<?php
use Phalcon\Mvc\Router;

// Create the router
$router = new Router();
$router->removeExtraSlashes(true);
$router->setDefaultNamespace(ucfirst(BASE_NAME) . '\\Controllers');
$router->setDefaultController('index');
$router->setDefaultAction('index');

$router->notFound(array(
    'controller' => 'test',
    'action' => 'show404'
));

$router->handle();
return $router;