<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index' , ['filter' =>\App\Filters\AuthenticatedFilter::class]);
$routes->get('/home', 'Home::index',['filter' =>\App\Filters\AuthenticatedFilter::class]);
$routes->get('/login', 'Connection::index');
$routes->get('/abonnes', 'Abonnes::index');
$routes->get('/emprunts', 'Emprunts::index');
$routes->get('/livres', 'Exemplaires::index');
$routes->get('/exemplaires', 'Livres::index');
$routes->post('/login', 'Connection::attemptLogin');
