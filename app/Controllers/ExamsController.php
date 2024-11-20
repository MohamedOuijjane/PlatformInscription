<?php

namespace App\Controllers;

use App\Models\ExamModel;
use App\Models\PaymentModel;
use App\Models\RegistrationsModel;
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
     // Récupérer les examens avec recherche et filtrage (AJAX)
     public function fetchExams()
     {
         $examModel = new ExamModel();
         $search = $this->request->getGet('search');
         $type = $this->request->getGet('type');
 
         // Construire la requête de recherche
         $query = $examModel->select('*');
 
         if ($search) {
             $query->like('location', $search);
         }
 
         if ($type) {
             $query->where('level', $type);
         }
 
         $exams = $query->findAll();
 
         // Générer la sortie HTML pour les examens
         $output = '';
         foreach ($exams as $exam) {
             $output .= '
                 <tr>
                     <td>' . $exam['id'] . '</td>
                     <td>' . $exam['name'] . '</td>
                     <td>' . $exam['exam_date'] . '</td>
                     <td>' . $exam['location'] . '</td>
                     <td>
                         <button class="btn btn-primary btn-sm edit-btn" data-id="' . $exam['id'] . '">Modifier</button>
                         <button class="btn btn-danger btn-sm delete-btn" data-id="' . $exam['id'] . '">Supprimer</button>
                     </td>
                 </tr>
             ';
         }
 
         return $this->response->setBody($output);
     }
 
     // Supprimer un examen
     public function deleteExam($id)
     {
         $examModel = new ExamModel();
 
         if ($examModel->delete($id)) {
             return $this->response->setJSON(['message' => 'Examen supprimé avec succès.']);
         } else {
             return $this->response->setJSON(['message' => 'Échec de la suppression de l\'examen.'], 500);
         }
     }
 
     // Afficher la page de modification d'un examen
     public function editExam($id)
     {
         $examModel = new ExamModel();
         $exam = $examModel->find($id);
 
         if ($exam) {
             return view('dashbord/modifier_exam', ['exam' => $exam]);
         } else {
             return redirect()->to('/dashbord/liste_examens')->with('error', 'Examen non trouvé.');
         }
     }
 
     // Mettre à jour un examen
     public function updateExam($id)
     {
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
 
         // Mettre à jour les données et vérifier le succès
         if ($examModel->update($id, $data)) {
             return redirect()->to('/dashbord/liste_examens')->with('success', 'Examen mis à jour avec succès.');
         } else {
             return redirect()->to('/dashbord/liste_examens')->with('error', 'Échec de la mise à jour de l\'examen.');
         }
     }

     public function getChartData()
    {
        $registrationModel = new RegistrationsModel();
        $paymentModel = new PaymentModel();
        $examModel = new ExamModel();

        // Calculer les statistiques clés
        $studentCount = $registrationModel->countAllResults();
        $totalRevenue = $paymentModel->selectSum('amount')->where('status', 'paid')->get()->getRow()->amount;
        $examsCompleted = $examModel->where('end_date <', date('Y-m-d'))->countAllResults();

        // Récupérer les inscriptions par mois
        $monthlyInscriptions = $registrationModel->select("MONTHNAME(registration_date) as month, COUNT(*) as count")
                                                 ->groupBy('month')
                                                 ->orderBy('MONTH(registration_date)')
                                                 ->findAll();

        $months = array_column($monthlyInscriptions, 'month');
        $inscriptions = array_column($monthlyInscriptions, 'count');

        // Récupérer les revenus par mois
        $monthlyRevenue = $paymentModel->select("MONTHNAME(payment_date) as month, SUM(amount) as revenue")
                                       ->where('status', 'paid')
                                       ->groupBy('month')
                                       ->orderBy('MONTH(payment_date)')
                                       ->findAll();

        $revenue = array_column($monthlyRevenue, 'revenue');

        // Répartition des étudiants par niveau
        $studentDistribution = $registrationModel->select("exams.level, COUNT(*) as count")
                                                 ->join('exams', 'exams.id = registrations.exam_id')
                                                 ->groupBy('exams.level')
                                                 ->findAll();

        $labels = array_column($studentDistribution, 'level');
        $values = array_column($studentDistribution, 'count');

        // Statut des paiements
        $paymentStatus = [
            $paymentModel->where('status', 'paid')->countAllResults(),
            $paymentModel->where('status', 'pending')->countAllResults(),
            $paymentModel->where('status', 'unpaid')->countAllResults()
        ];

        // Préparer les données pour les graphiques
        $data = [
            'studentCount' => $studentCount,
            'totalRevenue' => $totalRevenue,
            'examsCompleted' => $examsCompleted,
            'months' => $months,
            'monthlyInscriptions' => $inscriptions,
            'monthlyRevenue' => $revenue,
            'studentDistribution' => [
                'labels' => $labels,
                'values' => $values
            ],
            'paymentStatus' => $paymentStatus
        ];

        return $this->response->setJSON($data);
    }
}
