<?php

namespace App\Controllers;

use App\Models\ExamModel;
use App\Models\PaymentModel;
use App\Models\RegistrationsModel;
use App\Models\UsersModel;
use CodeIgniter\Controller;
use Dompdf\Dompdf;
use Dompdf\Options;

class ExamsController extends Controller
{
public function index()

{
    return view('dashbord/ajouter_exam');
}

    public function addExam()
{
    $rules = [
        'niveauExam' => 'required',
        'adresse' => 'required|max_length[255]',
        'ville' => 'required|max_length[100]',
        'dateExam' => 'required|valid_date',
        'heureExam' => 'required',
        'dateDebut' => 'required|valid_date',
        'dateLimite' => 'required|valid_date'
    ];

    
        if (!$this->validate($rules)) {
            return redirect()->to('/dashbord/ajouter_exam')
                             ->withInput()
                             ->with('fieldErrors', $this->validator->getErrors())
                             ->with('error', 'SVP rempliir les chmaps corectement');
        }
        

  
    

    $data = [
        'level' => $this->request->getPost('niveauExam'),
        'adresse' => $this->request->getPost('adresse'),
        'ville' => $this->request->getPost('ville'),
        'exam_date' => $this->request->getPost('dateExam'),
        'heure' => $this->request->getPost('heureExam'),
        'start_date' => $this->request->getPost('dateDebut'),
        'end_date' => $this->request->getPost('dateLimite')
    ];

    $examModel = new ExamModel();

    if ($examModel->insert($data)) {
        return redirect()->to('/dashbord/ajouter_exam')->with('success', 'Examen ajouté avec succès.');
    }

    return redirect()->to('/dashbord/ajouter_exam')->with('error', 'Échec de l\'ajout de l\'examen.');
}

public function listeExamen()
{
    return view('/dashbord/liste_examens');
}
     // Récupérer les examens avec recherche et filtrage (AJAX)
public function fetchExams()
{
    $examModel = new ExamModel();
    $search = $this->request->getGet('search');
    $type = $this->request->getGet('type');

    // Construire la requête de recherche
    $query = $examModel->select('*');

    // Ajouter la recherche sur 'adresse' ou 'ville'
    if ($search) {
        $query->groupStart()
              ->like('adresse', $search)
              ->orLike('ville', $search)
              ->groupEnd();
    }

    // Filtrer par niveau (type)
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
                <td>' . $exam['level'] . '</td>
                <td>' . $exam['exam_date'] . ' à ' . $exam['heure'] . '</td>
                <td>' . $exam['adresse'] . ', ' . $exam['ville'] . '</td>
                <td>
                    <button class="btn btn-primary btn-sm edit-btn" data-id="' . $exam['id'] . '">Modifier</button>
                    <button class="btn btn-danger btn-sm delete-btn" data-id="' . $exam['id'] . '">Supprimer</button>
                </td>
            </tr>
        ';
    }

    // Retourner le HTML généré
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
        return redirect()->to('/dashbord/liste_examen')->with('error', 'Examen non trouvé.');
    }
}

 
     // Mettre à jour un examen
  
public function updateExam($id)
{
    $examModel = new ExamModel();

    // Règles de validation des données
    $rules = [
        'niveauExam' => 'required',
        'adresse' => 'required|max_length[255]',
        'ville' => 'required|max_length[100]',
        'dateExam' => 'required|valid_date',
        'heureExam' => 'required',
        'dateDebut' => 'required|valid_date',
        'dateLimite' => 'required|valid_date'
    ];
    
    if (!$this->validate($rules)) {
        return redirect()->to('/ExamsController/editExam/' . $id)->with('error', 'Veuillez corriger les erreurs ci-dessous.');
    }
  

    // Récupérer les données du formulaire
    $data = [
        'level' => $this->request->getPost('niveauExam'),
        'adresse' => $this->request->getPost('adresse'),
        'ville' => $this->request->getPost('ville'),
        'exam_date' => $this->request->getPost('dateExam'),
        'heure' => $this->request->getPost('heureExam'),
        'start_date' => $this->request->getPost('dateDebut'),
        'end_date' => $this->request->getPost('dateLimite')
    ];

    // Mettre à jour les données et vérifier le succès
    if ($examModel->update($id, $data)) {
        return redirect()->to('/dashbord/liste_examen')->with('success', 'Examen mis à jour avec succès.');
    } else {
        return redirect()->to('/dashbord/liste_examen')->with('error', 'Échec de la mise à jour de l\'examen.');
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

    // Nombre des paiements en attente
    $NombrePaymentenattente = $paymentModel->where('status', 'pending')->countAllResults();

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
        'paymentStatus' => $paymentStatus,
        'NombrePaymentenattente' => $NombrePaymentenattente // Ajouter cette ligne
    ];

    return $this->response->setJSON($data);
}





public function imprimer()
{
    // Charger les données pour le rapport
    $examModel = new ExamModel();
    $paymentModel = new PaymentModel();

    $data = [
        'totalExams' => $examModel->countAll(),
        'totalRevenue' => $paymentModel->selectSum('amount')->where('status', 'paid')->get()->getRow()->amount,
        'monthlyStats' => $paymentModel->select("MONTHNAME(payment_date) AS month, SUM(amount) AS revenue")
                                        ->groupBy("MONTH(payment_date)")
                                        ->orderBy("MONTH(payment_date)")
                                        ->get()
                                        ->getResultArray()
    ];

    // Charger la vue
    $html = view('dashbord/printrapport', $data);

    // Initialize Dompdf
    $options = new \Dompdf\Options();
    $options->set('defaultFont', 'Poppins');
    $dompdf = new \Dompdf\Dompdf($options);

    // Charger le contenu HTML
    $dompdf->loadHtml($html);

    // Configurer la taille et l'orientation de la page
    $dompdf->setPaper('A4', 'portrait');

    // Rendre le HTML en PDF
    $dompdf->render();

    // Télécharger le PDF
    $dompdf->stream("rapport.pdf", ["Attachment" => true]);
}



}
