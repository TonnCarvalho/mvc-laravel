<?php

use core\library\Router;
use app\controller\HomeController;
use app\controller\LoginController;
use app\controller\ProductController;

try {
    $router = new Router;
    $router->add('GET', '/', [HomeController::class, 'index']);
    $router->add('GET', '/product/([a-z\-]+)', [ProductController::class, 'index']);
    $router->add('GET', '/product/([a-z\-]+)/category/([a-z0-9]+)', [ProductController::class, 'index']);
    $router->add('GET', '/login', [LoginController::class, 'index']);
    $router->add('POST', '/login', [LoginController::class, 'store']);
    $router->execute();

} catch (\Throwable $e) {
    # code...
}