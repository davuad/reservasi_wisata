<?php
// routes.php


require_once 'app/controllers/DestinationsController.php';

$controller = new DestinasiController();
$url = $_SERVER['REQUEST_URI'];
$requestMethod = $_SERVER['REQUEST_METHOD'];

if ($url == '/destinasi/index' || $url == '/') {
    $controller->index();
} elseif ($url == '/destinasi/create' && $requestMethod == 'GET') {
    $controller->create();
} elseif ($url == '/destinasi/store' && $requestMethod == 'POST') {
    $controller->store();
} elseif (preg_match('/\/destinasi\/edit\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $destinasiId = $matches[1];
    $controller->edit($destinasiId);
} elseif (preg_match('/\/destinasi\/update\/(\d+)/', $url, $matches) && $requestMethod == 'POST') {
    $destinasiId = $matches[1];
    $controller->update($destinasiId, $_POST);
} elseif (preg_match('/\/destinasi\/delete\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $destinasiId = $matches[1];
    $controller->delete($destinasiId);

require_once 'app/controllers/UserController.php';

$controller = new UserController();
$url = $_SERVER['REQUEST_URI'];
$requestMethod = $_SERVER['REQUEST_METHOD'];

if ($url == '/user/index' || $url == '/') {
    $controller->index();
} elseif ($url == '/user/create' && $requestMethod == 'GET') {
    $controller->create();
} elseif ($url == '/user/store' && $requestMethod == 'POST') {
    $controller->store();
} elseif (preg_match('/\/user\/edit\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $userId = $matches[1];
    $controller->edit($userId);
} elseif (preg_match('/\/user\/update\/(\d+)/', $url, $matches) && $requestMethod == 'POST') {
    $userId = $matches[1];
    $controller->update($userId, $_POST);
} elseif (preg_match('/\/user\/delete\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $userId = $matches[1];
    $controller->delete($userId);

} else {
    http_response_code(404);
    echo "404 Not Found";
}