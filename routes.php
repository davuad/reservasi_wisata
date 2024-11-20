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
} else {
    http_response_code(404);
    echo "404 Not Found";
}