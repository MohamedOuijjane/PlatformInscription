<?php

namespace App\Controllers;

use App\Models\ExamModel;
use CodeIgniter\Controller;

class ExamsController extends Controller
{
    public function index()
    {
        // Charger la vue du formulaire
        return view('dashbord/ajouter_exam');
    }

    public function addExam()
    {
        // Charger le modèle de l'examen
        $examModel = new ExamModel();

        // Récupérer les données du formulaire
        $data = [
            'name' => $this->request->getPost('nomExam'),
            'level' => $this->request->getPost('niveauExam'),
            'location' => $this->request->getPost('lieuExam'),
            'exam_date' => $this->request->getPost('dateExam'),
            'start_date' => $this->request->getPost('dateDebut'),
            'end_date' => $this->request->getPost('dateLimite'),
        ];

        // Valider et insérer les données
        if ($examModel->insert($data)) {
            // Rediriger avec un message de succès
            return redirect()->to('/dashbord/ajouter_exam')->with('success', 'Examen ajouté avec succès.');
        } else {
            // Rediriger avec un message d'erreur
            return redirect()->to('/dashbord/ajouter_exam')->with('error', 'Échec de l\'ajout de l\'examen.');
        }
    }
    public function searchByCity()
    {
        // Charger le modèle de l'examen
        $examModel = new ExamModel();

        // Récupérer la ville passée par AJAX
        $city = $this->request->getVar('city');
        $level = $this->request->getVar('level');

        // Rechercher les examens en fonction de la ville et du niveau
        $query = $examModel->where('location', $city);

        if ($level) {
            $query = $query->where('level', $level);
        }

        $exams = $query->findAll();

        // Retourner les résultats en JSON
        return $this->response->setJSON($exams);
    }
}
