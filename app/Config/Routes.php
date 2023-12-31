<?php

use App\Controllers\Home;
use App\Controllers\UserController;

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/profile/(:any)/(:any)/(:any)', 'Home::profile/$1/$2/$3');
$routes->get('/user/profile', 'UserController::profile');
$routes->get('/user/create', 'UserController::create');
$routes->post('/user/store', 'UserController::store');
$routes->get('/user', 'UserController::index');

$routes->get('user/(:any)/edit', [UserController::class, 'edit']);
$routes->put('user/(:any)', [UserController::class, 'update']);
$routes->delete('user/(:any)', [UserController::class, 'destroy']);

$routes->get('user/(:any)', [UserController::class, 'show']);