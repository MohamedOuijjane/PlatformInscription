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
        // Récupérer l'exam_id de la requête GET
        $examId = $this->request->getGet('exam_id');

        // Vérifier si exam_id est présent
        if (!$examId) {
            return redirect()->to('/inscriptionPage')->with('error', 'Veuillez sélectionner un examen.');
        }

        return view('inscriptionDetails/inscriptionDetails', ['exam_id' => $examId]);
    }

    public function saveCin()
    {
        // Vérifier que c'est une requête POST
        if ($this->request->getMethod() === 'POST') {
            $cin = $this->request->getPost('cin');
            $examId = $this->request->getPost('exam_id'); // Récupérer exam_id depuis le formulaire

            // Valider que les champs ne sont pas vides
            if (empty($cin) || empty($examId)) {
                return redirect()->back()->with('error', 'CIN et Exam ID sont requis.');
            }

            // Rediriger avec les données dans l'URL (GET)
            return redirect()->to('/register?cin=' . $cin . '&exam_id=' . $examId);
        }

      
    }

}
