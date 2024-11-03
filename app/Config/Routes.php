<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Login::index'); 
$routes->get('register','Register::index');
$routes->get('/register','Register::index');



