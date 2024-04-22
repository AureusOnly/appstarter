<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index' , ['filter' =>\App\Filters\AuthenticatedFilter::class]);
$routes->get('/home', 'Home::index',['filter' =>\App\Filters\AuthenticatedFilter::class]);
$routes->get("/abonnes","Abonne::index", ["filter"  => "isAdmin]):
$routes->post("/abonnes/(:num)", "Abonne::updateAbonne", ["filter" => "isAdmin]);




$routes->get('/login', 'Connection::index');
$routes->post('/login', 'Connection::attemptLogin');
