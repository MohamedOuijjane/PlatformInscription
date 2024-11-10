<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Hello::index'); 
$routes->get('/', 'Home::index');
$routes->get('/calendrie', 'Home::calendrie');
$routes->get('/inscription', 'Home::inscription');
$routes->get('/inscriptionDetails','Home::inscriptionDetails');
$routes->get('/login', 'Login::index'); 
$routes->get('/register','Register::index');
$routes->get('/dashboardClient','DashboardClient::dashboardClient');






