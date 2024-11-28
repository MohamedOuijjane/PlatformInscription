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
            // Get the POST data
            $cin = $this->request->getPost('cin');
            $examLevel = $this->request->getPost('exam_level');
    
            // Sanitize input
            $cin = trim($cin); // Remove extra spaces
            $cin = htmlspecialchars($cin, ENT_QUOTES, 'UTF-8'); // Convert special characters to HTML entities
            $cin = stripslashes($cin); // Remove slashes if magic quotes are enabled (rare nowadays)
    
            // Validate input
            $validation = \Config\Services::validation(); // Load validation service
    
            $validation->setRules([
                'cin' => [
                    'label' => 'CIN',
                    'rules' => 'required|alpha_numeric|min_length[5]|max_length[00]', // Adjust length as per your requirements
                    'errors' => [
                        'required' => 'Le champ CIN est obligatoire.',
                        'alpha_numeric' => 'Le CIN ne doit contenir que des lettres et des chiffres.',
                        'min_length' => 'Le CIN doit contenir au moins {param} caractères.',
                        'max_length' => 'Le CIN ne doit pas dépasser {param} caractères.',
                    ],
                ],
            ]);
    
            // Check if validation passes
            if (!$validation->withRequest($this->request)->run()) {
                // Return with errors
                return redirect()->back()->withInput()->with('validation', $validation);
            }
    
            // Redirect with sanitized and validated data in the URL
            return redirect()->to('/register?cin=' . urlencode($cin) . '&exam_level=' . urlencode($examLevel));
        }
    
        // If not a POST request, show an error or redirect
        return redirect()->back()->with('error', 'Invalid request.');
    }
    
}
