<?php
// Routing untuk Halaman Utama
require_once 'app/controllers/HomeController.php';

// Routing 
require_once 'app/controllers/ReservationController.php';
require_once 'app/controllers/DestinationsController.php';
require_once 'app/controllers/UserController.php';

$userController = new UserController();
$destinasiController = new DestinasiController();
$reservasiController = new ReservationController();

$url = $_SERVER['REQUEST_URI'];
$requestMethod = $_SERVER['REQUEST_METHOD'];

// Menampilkan halaman utama / home
if ($url == '/') {
    new HomeController();
}elseif ($url == '/user/index' || $url == '/user') {
    $userController->index();
} elseif ($url == '/user/create' && $requestMethod == 'GET') {
    $userController->create();
} elseif ($url == '/user/store' && $requestMethod == 'POST') {
    $userController->store();
} elseif (preg_match('/\/user\/edit\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $userId = $matches[1];
    $userController->edit($userId);
} elseif (preg_match('/\/user\/update\/(\d+)/', $url, $matches) && $requestMethod == 'POST') {
    $userId = $matches[1];
    $userController->update($userId, $_POST);
} elseif (preg_match('/\/user\/delete\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $userId = $matches[1];
    $userController->delete($userId);
}elseif ($url == '/destinasi/index' || $url == '/destinasi') {
    $destinasiController->index();
} elseif ($url == '/destinasi/create' && $requestMethod == 'GET') {
    $destinasiController->create();
} elseif ($url == '/destinasi/store' && $requestMethod == 'POST') {
    $destinasiController->store();
} elseif (preg_match('/\/destinasi\/edit\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $destinasiId = $matches[1];
    $destinasiController->edit($destinasiId);
} elseif (preg_match('/\/destinasi\/update\/(\d+)/', $url, $matches) && $requestMethod == 'POST') {
    $destinasiId = $matches[1];
    $destinasiController->update($destinasiId, $_POST);
} elseif (preg_match('/\/destinasi\/delete\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $destinasiId = $matches[1];
    $destinasiController->delete($destinasiId);
}elseif ($url == '/reservasi/index' || $url == '/') {
    $reservasiController->index();
} elseif ($url == '/reservasi/create' && $requestMethod == 'GET') {
    $reservasiController->create();
} elseif ($url == '/reservasi/store' && $requestMethod == 'POST') {
    $reservasiController->store();
} elseif (preg_match('/\/reservasi\/edit\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $reservation_id = $matches[1];
    $reservasiController->edit($reservation_id);
} elseif (preg_match('/\/reservasi\/update\/(\d+)/', $url, $matches) && $requestMethod == 'POST') {
    $reservation_id = $matches[1];
    $reservasiController->update($reservation_id);
} elseif (preg_match('/\/reservasi\/delete\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $reservation_id = $matches[1];
    $reservasiController->delete($reservation_id);
} else {
    http_response_code(404);
    echo "404 Not Found";
}