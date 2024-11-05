<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return view('/dashbord/mainlayout');
    }

    public function ajouterExam()
    {
        return view('dashbord/ajouter_exam');
    }

    public function confirmationPaiement()
    {
        return view('/dashbord/confirmation_paiement');
    }

    public function listeExamen()
    {
        return view('/dashbord/liste_examen');
    }

    public function listeClients()
    {
        return view('/dashbord/liste_clients');
    }
}
