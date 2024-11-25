<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//main page route
$routes->get('/', 'Home::index');
//calendrier et inscription view routes
$routes->get('/calendrie', 'Home::calendrie');
$routes->get('/inscription', 'Home::inscription');
$routes->get('/inscriptionDetails','Home::inscriptionDetails');

//login et register routes
$routes->get('/login', 'Login::index'); 
//$routes->get('/logout', 'Login::index'); 
$routes->get('/register','Register::index');
//$routes->post('/login/validateLogin', 'Login::validateLogin');
//route for registration
$routes->post('/register/store', 'Register::store');


//new routes login
$routes->post('/login/authenticate', 'Login::authenticate');
$routes->get('/logout', 'Login::logout');


//new route login for yassine Admin
$routes->get('/dashboardYassine', 'Dashboard::index');
//new route login for Mohamed Client
$routes->get('/dashboardClient', 'DashboardClient::welcomeDashboard', ['filter' => 'authClient']);

//dashboard client routes
//$routes->get('/dashboardClient', 'DashboardClient::welcomeDashboard');
$routes->get('/dashboardClient/profile',to: 'DashboardClient::profile');
$routes->get('/dashboardClient/paiement',to: 'DashboardClient::paiement');
$routes->get('/dashboardClient/convocation',to: 'DashboardClient::convocation');

//dashboard admin routes
$routes->get('/dashbord', 'DashboardController::rapport');
$routes->get('/dashbord/ajouter_exam', 'DashboardController::ajouterExam');
$routes->get('/dashbord/confirmation_paiement', 'DashboardController::confirmationPaiement');
$routes->get('/dashbord/liste_examen', 'DashboardController::listeExamen');
$routes->get('/dashbord/liste_clients', 'DashboardController::listeClients');
$routes->get('/dashbord/rapport', 'DashboardController::rapport');
$routes->get('/dashbord/modifier_profil', 'DashboardController::modifierProfil');
