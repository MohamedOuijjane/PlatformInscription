<?php
namespace App\Controllers;

use App\Models\UserModel;
use App\Models\RegistrationsModel;

class Register extends BaseController
{
    public function index()
    {
        // Récupérer CIN et Exam ID depuis les paramètres GET
        $cin = $this->request->getGet('cin');
        $examLevel = $this->request->getGet('exam_level');
        $examId = $this->request->getGet('exam_id');
        return view('register/register', [
            'cin' => $cin,
            'exam_level' => $examLevel,
            'exam_id' => $examId
            ]);
    }
    
    public function store()
    {
        $session = session();
        $userModel = new UserModel();
        $registrationModel = new RegistrationsModel();
        $validation = \Config\Services::validation();

        // Récupérer les données depuis le formulaire
        $cin = $this->request->getPost('cin');
        $examId = $this->request->getPost('exam_id');
        $examLevel = $this->request->getPost('exam_level');
        $username = $this->request->getPost('username');
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        // Valider les champs
        $validation->setRules([
            'username' => 'required|min_length[3]|max_length[20]|is_unique[users.username]',
            'email'    => 'required|valid_email|is_unique[users.email]',
            'password' => 'required|min_length[8]|max_length[255]',
        ]);

       /* if (!$this->validate($validation->getRules())) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }*/
        if (!$this->validate($validation->getRules())) {
            $errors = $validation->getErrors(); // Retrieve errors explicitly
            return redirect()->back()->withInput()->with('errors', $errors);
        }
        

        // Hasher le mot de passe
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        // Sauvegarder l'utilisateur dans la table Users
        $userData = [
            'username' => $username,
            'email'    => $email,
            'password' => $hashedPassword,
            'CIN'      => $cin,
            'role'     => 'client',
        ];

        $userId = $userModel->insert($userData);

        if (!$userId) {
            return redirect()->back()->with('error', 'Erreur lors de l\'enregistrement de l\'utilisateur.');
        }

        // Sauvegarder l'inscription dans la table Registrations
        $registrationData = [
            'user_id'           => $userId,
            'exam_id'           => $examId,
            'registration_date' => date('Y-m-d'),
        ];

        if (!$registrationModel->insert($registrationData)) {
            return redirect()->back()->with('error', 'Erreur lors de l\'enregistrement de l\'inscription.');
        }

        return redirect()->to('/dashboardClient')->with('success', 'Inscription réussie.');
    }
}





















    // public function store()
    // {
    //     $userModel = new UserModel();
    //     $validation = \Config\Services::validation();

    //     // Define validation rules
    //     $validation->setRules([
    //         'username' => 'required|min_length[3]|max_length[20]|is_unique[users.username]',
    //         'email'    => 'required|valid_email|is_unique[users.email]',
    //         'password' => 'required|min_length[8]|max_length[255]',
    //     ], [
    //         'username' => [
    //             'required' => 'Le nom d\'utilisateur est obligatoire.',
    //             'min_length' => 'Le nom d\'utilisateur doit contenir au moins 3 caractères.',
    //             'is_unique' => 'Ce nom d\'utilisateur est déjà utilisé.',
    //         ],
    //         'email' => [
    //             'required' => 'L\'email est obligatoire.',
    //             'valid_email' => 'Veuillez saisir une adresse email valide.',
    //             'is_unique' => 'Cet email est déjà utilisé.',
    //         ],
    //         'password' => [
    //             'required' => 'Le mot de passe est obligatoire.',
    //             'min_length' => 'Le mot de passe doit contenir au moins 8 caractères.',
    //         ],
    //     ]);

    //     // Validate inputs
    //     if (!$this->validate($validation->getRules())) {
    //         return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
    //     }

    //     // Hash the password
    //     $hashedPassword = password_hash($this->request->getPost('password'), PASSWORD_DEFAULT);

    //     // Prepare user data
    //     $userData = [
    //         'username' => $this->request->getPost('username'),
    //         'email'    => $this->request->getPost('email'),
    //         'password' => $hashedPassword,
    //         'role'     => 'client', // All registered users are clients
    //     ];

    //     // Save user to database
    //     if ($userModel->insert($userData)) {
    //         return redirect()->to('/dashboardClient');
    //     } else {
    //         return redirect()->back()->with('error', 'Une erreur est survenue lors de l\'enregistrement.');
    //     }
    // }

