<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//main page route
 $routes->get('/', 'Home::index');
//calendrier et inscription view routes
$routes->get('/calendrie', 'SessionsController::calendar');
$routes->get('/inscriptionPage', 'SessionsController::Inscription');
$routes->get('/inscriptionDetails','Home::inscriptionDetails');


//login et register routes
$routes->get('/login', 'Login::index'); 
//$routes->get('/logout', 'Login::index'); 
$routes->get('/register','Register::index'); // Passe cin et exam_id via GET
//$routes->post('/login/validateLogin', 'Login::validateLogin');
//route for registration
$routes->post('/register/store', 'Register::store');// Enregistre les données utilisateur et inscription
$routes->post('/saveCin', 'Home::saveCin'); // Gère CIN et exam_id via POST


//new routes login
$routes->post('/login/authenticate', 'Login::authenticate');
$routes->get('/logout', 'Login::logout');



//new route login for Mohamed Client
$routes->get('/dashboardClient', 'DashboardClient::welcomeDashboard', ['filter' => 'authClient']);


// routes from inscription details to dashboard welcome
$routes->post('/inscriptionDetails', 'Home::inscriptionDetails');




//dashboard client routes
//$routes->get('/dashboardClient', 'DashboardClient::welcomeDashboard');
$routes->get('/dashboardClient/profile',to: 'DashboardClient::profile');
$routes->get('/dashboardClient/paiement',to: 'DashboardClient::paiement');
$routes->get('/dashboardClient/convocation',to: 'DashboardClient::convocation');

// Dashboard Admin Routes
$routes->get('/dashboardYassine', 'DashboardController::index'); // Admin dashboard (Yassine-specific)
$routes->get('/dashbord', 'DashboardController::rapport'); // Admin dashboard main
$routes->get('/dashbord/liste_examen', 'DashboardController::listeExamen'); // Exam list
$routes->get('/dashbord/rapport', 'DashboardController::rapport'); // Report view
$routes->get('/dashbord/modifier_profil', 'DashboardController::modifierProfil'); // Edit admin profile

// Exam CRUD Routes
$routes->get('/dashbord/ajouter_exam', 'ExamsController::index'); // Add exam form
$routes->post('/ExamsController/addExam', 'ExamsController::addExam'); // Save new exam
$routes->get('/ExamsController/fetchExams', 'ExamsController::fetchExams'); // Fetch exams data (AJAX)
$routes->delete('/ExamsController/deleteExam/(:num)', 'ExamsController::deleteExam/$1'); // Delete specific exam
$routes->get('/ExamsController/editExam/(:num)', 'ExamsController::editExam/$1'); // Edit specific exam
$routes->post('/ExamsController/updateExam/(:num)', 'ExamsController::updateExam/$1'); // Update exam details

// Payment Confirmation Routes
$routes->get('/dashbord/confirmation_paiement', 'PaymentsController::index'); // Payment confirmations
$routes->get('/PaymentsController/confirm/(:num)', 'PaymentsController::confirm/$1'); // Confirm payment
$routes->get('/PaymentsController/refuse/(:num)', 'PaymentsController::refuse/$1'); // Refuse payment

// Clients Management Routes
$routes->get('/dashbord/liste_clients', 'ClientsController::index'); // Clients list view

// Charts Data Route
$routes->get('/exams/getChartData', 'ExamsController::getChartData'); // Fetch data for charts (e.g., exam stats)

// Admin Profile Management
$routes->get('/profile', 'ProfileController::index'); // Profile page
$routes->post('/profile/updatePassword', 'ProfileController::updatePassword'); // Change admin password
