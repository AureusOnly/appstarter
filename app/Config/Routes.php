<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index' , ['filter' =>\App\Filters\AuthenticatedFilter::class]);
$routes->get('/home', 'Home::index',['filter' =>\App\Filters\AuthenticatedFilter::class]);
$routes->get("/abonnes","Abonne::index", ["filter"  => "isAdmin"]);
$routes->post("/abonnes/(:num)", "Abonne::updateAbonne", ["filter" => "isAdmin"]);




$routes->get('/login', 'Connection::index');
$routes->get('/abonnes', 'Abonnes::index');
$routes->get('/emprunts', 'Emprunts::index');
$routes->get('/livres', 'Livres::index');
$routes->get('/exemplaires', 'Exemplaires::index');
$routes->get('/demandes', 'Demandes::index');
$routes->get('/retours', 'Retours::index');
$routes->get('/deconnexion', 'Deconnexion::deconnexion');
$routes->post('/login', 'Connection::attemptLogin');
