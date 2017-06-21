<?php
$router->map('GET|POST', '/api/[a:apiName]/[a:actionName]', function ($apiName, $actionName) {
    runAction($apiName, $actionName, [],'Api');
});

$router->map('GET|POST', '/api/[a:apiName]/[a:actionName]/?[**:]', function ($apiName, $actionName) {
    $args = explode('/', $_SERVER['REQUEST_URI']);
    $args = array_slice($args, 3);
    runAction($apiName, $actionName, $args,'Api');
});