<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Main Page Route
$routes->get('/', 'Home::index');

// Calendar and Inscription Routes
$routes->get('/calendrie', 'SessionsController::calendar'); // View calendar
$routes->get('/loadexam', 'SessionsController::Inscription'); 

$routes->get('/inscriptionDetails', 'Home::inscriptionDetails'); // CIN entry page
$routes->get('/inscriptionbutton', 'Home::inscriptionbutton'); // Save exam ID and redirect to CIN page
$routes->post('/saveCin', 'Home::saveCin'); // Save CIN and redirect to registration form

// Login and Register Routes
$routes->get('/login', 'Login::index'); // Login page
$routes->post('/login/authenticate', 'Login::authenticate'); // Handle login
$routes->get('/logout', 'Login::logout'); // Logout user

$routes->get('/register', 'Register::register'); // Registration form page
$routes->post('/register/store', 'Register::store'); // Save user registration and exam details

// Dashboard Client Routes
$routes->get('/dashboardClient', 'DashboardClient::welcomeDashboard', ['filter' => 'authClient']); // Client dashboard
$routes->get('/dashboardClient/profile', 'DashboardClient::profile'); // Profile page
$routes->get('/dashboardClient/paiement', 'DashboardClient::paiement'); // Payment page
$routes->get('/dashboardClient/convocation', 'DashboardClient::convocation'); // Convocation page

// Dashboard Admin Routes
$routes->get('/dashboardYassine', 'Dashboard::index'); // Admin dashboard (Yassine-specific)
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
