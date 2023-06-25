<?php

spl_autoload_register(function (string $className) {
    require_once __DIR__ . '/' . $className . '.php';
});

$route = $_GET['route'] ?? '';
$routes = require __DIR__ . '/route.php';

$isRouteFound = false;
foreach ($routes as $pattern => $controllerAndAction) {
    preg_match($pattern, $route, $matches);
    if (!empty($matches)) {
        $isRouteFound = true;
        break;
    }
}

if (!$isRouteFound) {
    echo 'Сторінка не знайдена!';
    return;
}

unset($matches[0]);

$controllerName = $controllerAndAction[0];
$actionName = $controllerAndAction[1];

$controller = new $controllerName();
$actionParams = array_values($matches); 
$controller->$actionName(...$actionParams);

