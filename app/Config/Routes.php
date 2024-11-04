<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Hello::index'); 
$routes->get('/', 'Home::index');
$routes->get('/calendrie', 'Home::calendrie');
$routes->get('/inscription', 'Home::inscription');
$routes->get('/login', 'Login::index'); 
$routes->get('/register','Register::index');



