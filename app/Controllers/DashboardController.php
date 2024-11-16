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

    // public function confirmationPaiement()
    // {
    //     return view('/dashbord/confirmation_paiement');
    // }

    public function listeExamen()
    {
        return view('/dashbord/liste_examens');
    }

    public function listeClients()
    {
        return view('/dashbord/liste_clients');
    }
    public function rapport()
    {
        return view('/dashbord/rapport');
    }
    public function modifierProfil(){
        return view('dashbord/modifier_profil');
    }
}
