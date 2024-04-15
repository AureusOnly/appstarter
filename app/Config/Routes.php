<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index' , ['filter' =>\App\Filters\AuthenticatedFilter::class]);
$routes->get('/login', 'Connection::index', ['filter' =>\App\Filters\AuthenticatedFilter::class]);
$routes->post('/login', 'Connection::attemptLogin');
$routes->get('/home', 'Home::index');