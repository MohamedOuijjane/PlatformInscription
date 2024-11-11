<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/calendrie', 'Home::calendrie');
$routes->get('/inscription', 'Home::inscription');
$routes->get('/inscriptionDetails','Home::inscriptionDetails');
$routes->get('/login', 'Login::index'); 
$routes->get('/logout', 'Login::index'); 
$routes->get('/register','Register::index');
$routes->get('/dashboardClient','DashboardClient::dashboardClient');
$routes->get('/dashbord', 'DashboardController::rapport');
$routes->get('/dashbord/ajouter_exam', 'DashboardController::ajouterExam');
$routes->get('/dashbord/confirmation_paiement', 'DashboardController::confirmationPaiement');
$routes->get('/dashbord/liste_examen', 'DashboardController::listeExamen');
$routes->get('/dashbord/liste_clients', 'DashboardController::listeClients');
$routes->get('/dashbord/rapport', 'DashboardController::rapport');


