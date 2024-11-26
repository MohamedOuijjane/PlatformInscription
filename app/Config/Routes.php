<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//main page route
 $routes->get('/', 'Home::index');
//calendrier et inscription view routes
$routes->get('/calendrie', 'SessionsController::calendar');
$routes->get('/inscription', 'SessionsController::Inscription');
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


// routes from inscription details to dashboard welcome
$routes->post('/inscriptionDetails', 'Home::inscriptionDetails');




//dashboard client routes
//$routes->get('/dashboardClient', 'DashboardClient::welcomeDashboard');
$routes->get('/dashboardClient/profile',to: 'DashboardClient::profile');
$routes->get('/dashboardClient/paiement',to: 'DashboardClient::paiement');
$routes->get('/dashboardClient/convocation',to: 'DashboardClient::convocation');

//dashboard admin routes
$routes->get('/dashbord', 'DashboardController::rapport');

// $routes->get('/dashbord/confirmation_paiement', 'DashboardController::confirmationPaiement');
$routes->get('/dashbord/liste_examen', 'DashboardController::listeExamen');
// $routes->get('/dashbord/liste_clients', 'DashboardController::listeClients');
$routes->get('/dashbord/rapport', 'DashboardController::rapport');
$routes->get('/dashbord/modifier_profil', 'DashboardController::modifierProfil');

$routes->get('/dashbord/ajouter_exam', 'ExamsController::index');
$routes->post('/ExamsController/addExam', 'ExamsController::addExam');

// Dans app/Config/Routes.php
$routes->get('dashbord/liste_examens', 'ExamsController::index');

// Route qui concere Exam CRUD
$routes->get('/ExamsController/fetchExams', 'ExamsController::fetchExams');
$routes->delete('/ExamsController/deleteExam/(:num)', 'ExamsController::deleteExam/$1');
$routes->get('/ExamsController/editExam/(:num)', 'ExamsController::editExam/$1');
$routes->post('/ExamsController/updateExam/(:num)', 'ExamsController::updateExam/$1');

// CRUD de confirmations de paiment
$routes->get('/dashbord/confirmation_paiement', 'PaymentsController::index');
$routes->get('/PaymentsController/confirm/(:num)', 'PaymentsController::confirm/$1');
$routes->get('/PaymentsController/refuse/(:num)', 'PaymentsController::refuse/$1');


// la liste de clients avec leur stituation de paiment
$routes->get('/dashbord/liste_clients', 'ClientsController::index');
// la collection des donne des Graphe 
$routes->get('/exams/getChartData', 'ExamsController::getChartData');

// la modification de mot de pass de Admin
$routes->get('/profile', 'ProfileController::index');
$routes->post('/profile/updatePassword', 'ProfileController::updatePassword');
