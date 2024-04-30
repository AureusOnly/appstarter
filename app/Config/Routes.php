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
$routes->get('/livres', 'Livres::index');
$routes->get('/exemplaires', 'Exemplaires::index');
$routes->get('/demandes', 'Demandes::index');
$routes->get('/retours', 'Retours::index');
$routes->post('/login', 'Connection::attemptLogin');
$routes->get('/deconnexion', 'Deconnexion::deconnexion');
$routes->get('/', 'Connection::attemptLogin');