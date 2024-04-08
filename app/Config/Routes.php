<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/login', 'Connection::index');
$routes->get('/login', 'Connection::attemptLogin');