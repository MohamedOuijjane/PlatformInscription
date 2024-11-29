<?php

namespace App\Controllers;

use App\Models\UsersModel;
use App\Models\ExamModel;
use App\Models\RegistrationsModel;
use App\Models\PaymentModel;
use CodeIgniter\Controller;

class ClientsController extends Controller
{
    public function index()
    {
        // Charger les modèles nécessaires
        $usersModel = new UsersModel();
        $examsModel = new ExamModel();
        $registrationsModel = new RegistrationsModel();
        $paymentsModel = new PaymentModel();
      

        // Extraire les données des clients avec jointures pour récupérer toutes les informations
        $clients = $registrationsModel->select('exams.level as level, users.username as student_name, users.email, users.phone_number, payments.status as payment_status')
            ->join('users', 'registrations.user_id = users.id')
            ->join('exams', 'registrations.exam_id = exams.id')
            ->join('payments', 'registrations.id = payments.registration_id')
            ->findAll();

        // Passer les données à la vue
        return view('dashbord/liste_clients', ['clients' => $clients]);
    }
}
