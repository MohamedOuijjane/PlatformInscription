<?php
namespace App\Controllers;
use App\Models\UserModel;
use App\Models\RegistrationsModel;
use App\Models\PaymentModel;
use Dompdf\Dompdf;
use Dompdf\Options;

class DashboardClient extends BaseController{
    public function welcomeDashboard()
    {
        $session = session();
        $userId = $session->get('id');

        if (!$userId) {
            return redirect()->to('/login')->with('error', 'Vous devez être connecté pour accéder à cette page.');
        }

        $userModel = new UserModel();
        $registrationModel = new RegistrationsModel();
        $paymentModel = new PaymentModel();

        $user = $userModel->find($userId);
        $registration = $registrationModel
            ->select('registrations.*, exams.level, exams.exam_date')
            ->join('exams', 'exams.id = registrations.exam_id')
            ->where('registrations.user_id', $userId)
            ->orderBy('registrations.registration_date', 'DESC')
            ->first();

        $payment = $paymentModel->where('registration_id', $registration['id'])->first();

        $paymentMessage = '';
        if ($payment) {
            if ($payment['status'] === 'unpaid') {
                $paymentMessage = 'Vous devez effectuer le paiement pour finaliser votre inscription.';
            } elseif ($payment['status'] === 'pending') {
                $paymentMessage = 'Votre paiement est en attente d\'approbation par l\'administrateur.';
            } elseif ($payment['status'] === 'paid') {
                $paymentMessage = 'Votre paiement a été approuvé. Votre convocation est prête.';
            }
        } else {
            $paymentMessage = 'Aucune information de paiement trouvée.';
        }

        return view('dashboardClient/welcomeDashboard', [
            'username' => $user['username'],
            'CIN' => $user['CIN'],
            'date' => $registration['registration_date'],
            'examLevel' => $registration['level'],
            'examDate' => $registration['exam_date'],
            'reference' => $registration['id'],
            'paymentMessage' => $paymentMessage,
        ]);
    }
    public function profileDisplayer(){
        $session = session();
        $userId = $session->get('id'); // Obtenez l'ID de l'utilisateur connecté

        $userModel = new UserModel();

        // Vérifiez que l'utilisateur existe
        $user = $userModel->find($userId);
        if (!$user) {
            return redirect()->to('/dashboardClient')->with('error', 'Utilisateur introuvable.');
        }
        return view('/dashboardClient/profile', ['user' => $user]);
    }
    public function profile()
    {
        $session = session();
        $userId = $session->get('id'); // Obtenez l'ID de l'utilisateur connecté

        $userModel = new UserModel();

        // Si une requête POST est soumise
        if ($this->request->getMethod() === 'POST') {
            // Validez les données du formulaire
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

            // Préparez les données pour la mise à jour
            $updatedData = [
                'lastname' => $this->request->getPost('nom'),
                'firstname' => $this->request->getPost('prenom'),
                'date_naissance' => $this->request->getPost('date_naissance'),
                'phone_number' => $this->request->getPost('telephone'),
                'address' => $this->request->getPost('adresse'),
            ];

            // Mettez à jour les informations utilisateur
            if ($userModel->update($userId, $updatedData)) {
                return redirect()->to('/dashboardClient/profileDisplayer')->with('success', 'Profil mis à jour avec succès.');
            } else {
                return redirect()->to('/dashboardClient/profileDisplayer')->with('error', 'Erreur lors de la mise à jour du profil.');
            }
       }

    }
    
        
    public function paiementDisplayer(){

        return view('/dashboardClient/paiement');
    }
    public function paiement()
    {
        $paymentModel = new PaymentModel();
        $registrationModel = new RegistrationsModel();

        // Récupérer les données depuis le formulaire
        $reference = $this->request->getPost('reference');
        $paymentDate = $this->request->getPost('payment_date');

        // Validation des champs
        if (empty($reference) || empty($paymentDate)) {
            return redirect()->back()->with('error', 'Tous les champs sont obligatoires.');
        }

        // Récupérer l'utilisateur connecté
        $session = session();
        $userId = $session->get('id');

        if (!$userId) {
            return redirect()->to('/login')->with('error', 'Veuillez vous connecter.');
        }

        // Vérifier l'inscription de l'utilisateur
        $registration = $registrationModel->where('user_id', $userId)->first();

        if (!$registration) {
            return redirect()->back()->with('error', 'Aucune inscription trouvée.');
        }

        // Enregistrer le paiement
        $paymentData = [
            'registration_id' => $registration['id'],
            'amount'          => 100.00, // Remplacez par le montant approprié
            'status'          => 'pending',
            'reference'       => $reference,
            'payment_date'    => $paymentDate,
        ];

        if ($paymentModel->insert($paymentData)) {
            return redirect()->to('/dashboardClient')->with('success', 'Paiement enregistré avec succès.');
        } else {
            return redirect()->back()->with('error', 'Une erreur est survenue lors de l\'enregistrement du paiement.');
        }
    }

    public function convocation()
    {
        $session = session();
        $userId = $session->get('id');

        if (!$userId) {
            return redirect()->to('/login')->with('error', 'Vous devez être connecté pour accéder à cette page.');
        }

        $userModel = new UserModel();
        $registrationModel = new RegistrationsModel();
        $paymentModel = new PaymentModel();

        $user = $userModel->find($userId);
        $registration = $registrationModel
            ->select('registrations.*, exams.level, exams.adresse, exams.ville, exams.exam_date')
            ->join('exams', 'exams.id = registrations.exam_id')
            ->where('registrations.user_id', $userId)
            ->orderBy('registrations.registration_date', 'DESC')
            ->first();

        $payment = $paymentModel->where('registration_id', $registration['id'])->first();
        $canDownloadConvocation = $payment && $payment['status'] === 'paid';

        return view('dashboardClient/convocation', [
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
            'canDownloadConvocation' => $canDownloadConvocation,
        ]);
    }
    public function convocationDownloader() {
        $session = session();
        $userId = $session->get('id');

        if (!$userId) {
            return redirect()->to('/login')->with('error', 'Vous devez être connecté pour accéder à cette page.');
        }

        $userModel = new UserModel();
        $registrationModel = new RegistrationsModel();

        $user = $userModel->find($userId);
        $registration = $registrationModel
                        ->select('registrations.*, exams.level, exams.adresse, exams.ville, exams.exam_date, exams.heure')
                        ->join('exams', 'exams.id = registrations.exam_id')
                        ->where('registrations.user_id', $userId)
                        ->orderBy('registrations.registration_date', 'DESC')
                        ->first();

        if (!$user || !$registration) {
            return redirect()->to('/login')->with('error', 'Impossible de charger vos données.');
        }

        // Prepare HTML content
        $html = view('/dashboardClient/convocationDownloader', [
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

        // Initialize Dompdf
        $options = new Options();
        $options->set('defaultFont', 'Poppins');
        $dompdf = new Dompdf($options);

        // Load HTML content
        $dompdf->loadHtml($html);

        // Set paper size and orientation
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF
        $dompdf->stream("convocation.pdf", ["Attachment" => true]);     
    }
    
}