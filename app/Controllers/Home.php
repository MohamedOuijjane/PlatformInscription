<?php

namespace App\Controllers;

class Home extends BaseController

{
    public function index(){
        return view('index');
    }

    public function inscription()
    {
        // Load the inscription view
        return view('inscription');
    }

    public function inscriptionDetails()
    {
        // Récupérer l'exam_level de la requête GET
        $examLevel = $this->request->getGet('exam_level');

        // Vérifier si exam_level est présent
        if (!$examLevel) {
            return redirect()->to('/inscriptionPage')->with('error', 'Veuillez sélectionner un examen.');
        }

        return view('inscriptionDetails/inscriptionDetails', ['exam_level' => $examLevel]);
    }

    public function saveCin()
    {
        // Vérifier que c'est une requête POST
        if ($this->request->getMethod() === 'POST') {
            // Récupérer les valeurs postées
            $cin = $this->request->getPost('cin');
            $examLevel = $this->request->getPost('exam_level');
    
            // Nettoyer les données (trim, stripslashes, htmlspecialchars)
            $cin = htmlspecialchars(trim(stripslashes($cin)));
    
            // Valider que les champs ne sont pas vides
            if (empty($cin)) {
                return redirect()->back()->with('error', 'CIN est requis.');
            }
    
            // Valider le format de CIN
            if (!preg_match('/^[A-Za-z]{2}\d{4,8}$/', $cin)) {
                return redirect()->back()->with('error', 'Le CIN doit être composé de 2 lettres suivies de 4 à 8 chiffres (ex: JK663322).');
            }
    
            // Rediriger avec les données dans l'URL (GET)
            return redirect()->to('/register?cin=' . $cin . '&exam_level=' . $examLevel);
        }
    }
}
