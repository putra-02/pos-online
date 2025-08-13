<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');

$routes->get('/', 'Home::index');

$routes->group('', ['namespace' => 'App\Controllers'], function ($routes) {
    $routes->get('login', 'AuthController::login', ['as' => 'login']);
    $routes->post('login', 'AuthController::attemptLogin');
    $routes->get('register', 'AuthController::register', ['as' => 'register']);
    $routes->post('register', 'AuthController::attemptRegister');
    $routes->get('logout', 'AuthCOntroller::logout');
});