<?php
namespace App\Controllers;
use App\Models\UserModel;
use App\Models\RegistrationsModel;
use Dompdf\Dompdf;
use Dompdf\Options;

class DashboardClient extends BaseController{
    public function welcomeDashboard(){

        $session = session();
        //$mainDashboardClientSession = session();
    
        $userId = $session->get('id');

        if (!$userId) {
            return redirect()->to('/login')->with('error', 'Vous devez être connecté pour accéder à cette page.');
        }

        $userModel = new UserModel();
        $registrationModel = new RegistrationsModel();

        // Récupérer les informations de l'utilisateur
        $user = $userModel->find($userId);

        // Récupérer la dernière inscription de l'utilisateur
        $registration = $registrationModel
                        ->select('registrations.*, exams.level, exams.adresse, exams.ville, exams.exam_date, exams.heure, exams.start_date, exams.end_date')
                        ->join('exams', 'exams.id = registrations.exam_id')
                        ->where('registrations.user_id', $userId)
                        ->orderBy('registrations.registration_date', 'DESC')
                        ->first();

        // Vérifier si les données nécessaires sont disponibles
        if (!$user || !$registration) {
            return redirect()->to('/login')->with('error', 'Impossible de charger vos données.');
        }

        return view('dashboardClient/welcomeDashboard', [
            'username' => $user['username'],
            'CIN' => $user['CIN'],
            'date' => $registration['registration_date'],
            'examId' => $registration['exam_id'],
            'examLevel' => $registration['level'], // Correct key for the exam level
            'examDate' => $registration['exam_date'],
            'reference' => $registration['id'], // Registration reference
        ]);
    }

    public function profile()
    {
        $session = session();
    
        // Handle POST request
        if ($this->request->getMethod() === 'POST') {
            // Load UserModel
            $userModel = new UserModel();
    
            // Validate input data
            $validation = $this->validate([
                'nom' => 'required|string|max_length[255]',
                'prenom' => 'required|string|max_length[255]',
                'date_naissance' => 'required|valid_date',
                'telephone' => 'required|numeric|min_length[10]|max_length[15]',
                'adresse' => 'required|string|max_length[255]',
            ]);
    
            if (!$validation) {
                return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
            }
    
            // Fetch data
            $data = [
                'nom' => $this->request->getPost('nom'),
                'prenom' => $this->request->getPost('prenom'),
                'date_naissance' => $this->request->getPost('date_naissance'),
                'telephone' => $this->request->getPost('telephone'),
                'adresse' => $this->request->getPost('adresse'),
            ];
    
            // Get the user ID from session
            $userId = $session->get('id');
            if ($userId) {
                // Update the user record
                if ($userModel->update($userId, $data)) {
                    // Redirect with success message
                    return redirect()->to('/dashboardClient/profile')->with('success', 'Profil mis à jour avec succès.');
                } else {
                    // Redirect with error message
                    return redirect()->to('/dashboardClient/profile')->with('error', 'Une erreur s\'est produite lors de la mise à jour.');
                }
            }
    
            // If user ID is not found in session
            return redirect()->to('/dashboardClient/profile')->with('error', 'Utilisateur introuvable.');
        }
    
        // Render the profile view for GET request
        return view('/dashboardClient/profile');
    }
        
    public function paiement(){
        return view('/dashboardClient/paiement');
    }
    public function convocation(){
       
        $session = session();    
        $userId = $session->get('id');

        if (!$userId) {
            return redirect()->to('/login')->with('error', 'Vous devez être connecté pour accéder à cette page.');
        }

        $userModel = new UserModel();
        $registrationModel = new RegistrationsModel();

        // Récupérer les informations de l'utilisateur
        $user = $userModel->find($userId);

        // Récupérer la dernière inscription de l'utilisateur
        $registration = $registrationModel
                        ->select('registrations.*, exams.level, exams.adresse, exams.ville, exams.exam_date, exams.heure, exams.start_date, exams.end_date')
                        ->join('exams', 'exams.id = registrations.exam_id')
                        ->where('registrations.user_id', $userId)
                        ->orderBy('registrations.registration_date', 'DESC')
                        ->first();

        // Vérifier si les données nécessaires sont disponibles
        if (!$user || !$registration) {
            return redirect()->to('/login')->with('error', 'Impossible de charger vos données.');
        }

        return view('/dashboardClient/convocation', [
            'username' => $user['username'],
            'prenom' => $user['firstname'],
            'nom' => $user['lastname'],
            'email' => $user['email'],
            'telephone' => $user['phone_number'],
            'CIN' => $user['CIN'],
            'adresse' => $user['address'],
            'reference' => $registration['id'],
            'examDate' => $registration['exam_date'],
            'examAddress' => $registration['adresse'],
            'ville' => $registration['ville'],

        ]);
    }
    public function convocationDisplayer() {
        
        return view('dashboardClient/convocationDownloader');
    }
    public function generatePDF() {
        // Load necessary models and session data
        $session = session();
        $userId = $session->get('id');
        
        if (!$userId) {
            return redirect()->to('/login')->with('error', 'Vous devez être connecté pour accéder à cette page.');
        }
    
        $userModel = new UserModel();
        $registrationModel = new RegistrationsModel();
    
        // Fetch user and registration details
        $user = $userModel->find($userId);
        $registration = $registrationModel
                        ->select('registrations.*, exams.level, exams.adresse, exams.ville, exams.exam_date, exams.heure, exams.start_date, exams.end_date')
                        ->join('exams', 'exams.id = registrations.exam_id')
                        ->where('registrations.user_id', $userId)
                        ->orderBy('registrations.registration_date', 'DESC')
                        ->first();
    
        // Check if the required data is available
        if (!$user || !$registration) {
            return redirect()->to('/login')->with('error', 'Impossible de charger vos données.');
        }
    
        // Initialize DomPDF
        $dompdf = new Dompdf\Dompdf();
    
        // Render the view as HTML
        $html = view('dashboardClient/convocationPDF', [
            'username' => $user['username'],
            'prenom' => $user['firstname'],
            'nom' => $user['lastname'],
            'email' => $user['email'],
            'telephone' => $user['phone_number'],
            'CIN' => $user['CIN'],
            'adresse' => $user['address'],
            'reference' => $registration['id'],
            'examDate' => $registration['exam_date'],
            'examAddress' => $registration['adresse'],
            'ville' => $registration['ville'],
        ]);
    
        // Load HTML to DomPDF
        $dompdf->loadHtml($html);
        
        // (Optional) Set paper size
        $dompdf->setPaper('A4', 'portrait');
    
        // Render PDF (first pass)
        $dompdf->render();
    
        // Stream the generated PDF (force download)
        return $dompdf->stream("convocation.pdf", array("Attachment" => 1));
    }
    
}