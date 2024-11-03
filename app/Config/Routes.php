<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Hello::index'); 
$routes->get('/', 'Home::index');
$routes->get('/calendrie', 'Home::calendrie');



