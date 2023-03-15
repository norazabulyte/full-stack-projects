
<?php
session_start();

require_once 'vendor/autoload.php';

$klein = new \Klein\Klein();

$klein->respond('GET', '/', function () {
    Controllers\Homepage::index();
});

$klein->respond('GET', '/category/[:id]', function ($request) {
    return Controllers\Homepage::byCategory($request);
});


$klein->respond('GET', '/login', function () {
    return Controllers\Auth::loginIndex();
});


$klein->respond('POST', '/login', function () {
    return Controllers\Auth::processLogin();
});

$klein->respond('GET', '/register', function () {
    return Controllers\Auth::registerIndex();
});

$klein->respond('POST', '/register', function () {
    return Controllers\Auth::processRegistration();
});

$klein->dispatch();


$page = isset($_GET['page']) ? $_GET['page'] : '';

switch ($page) {
    case 'category':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            Controllers\Homepage::byCategory($_GET['id']);
        } else {
            Controllers\Homepage::byCategory($_GET['id']);
        }
        break;
    default:
        Controllers\Homepage::index();
}
