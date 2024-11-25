<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel; // Make sure you have a UserModel

class Register extends BaseController
{
    public function index()
    {
        return view('register/register');
    }

    public function store()
    {
        $userModel = new UserModel();
        $validation = \Config\Services::validation();

        // Define validation rules
        $validation->setRules([
            'username' => 'required|min_length[3]|max_length[20]|is_unique[users.username]',
            'email'    => 'required|valid_email|is_unique[users.email]',
            'password' => 'required|min_length[8]|max_length[255]',
        ], [
            'username' => [
                'required' => 'Le nom d\'utilisateur est obligatoire.',
                'min_length' => 'Le nom d\'utilisateur doit contenir au moins 3 caractères.',
                'is_unique' => 'Ce nom d\'utilisateur est déjà utilisé.',
            ],
            'email' => [
                'required' => 'L\'email est obligatoire.',
                'valid_email' => 'Veuillez saisir une adresse email valide.',
                'is_unique' => 'Cet email est déjà utilisé.',
            ],
            'password' => [
                'required' => 'Le mot de passe est obligatoire.',
                'min_length' => 'Le mot de passe doit contenir au moins 8 caractères.',
            ],
        ]);

        // Validate inputs
        if (!$this->validate($validation->getRules())) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        // Hash the password
        $hashedPassword = password_hash($this->request->getPost('password'), PASSWORD_DEFAULT);

        // Prepare user data
        $userData = [
            'username' => $this->request->getPost('username'),
            'email'    => $this->request->getPost('email'),
            'password' => $hashedPassword,
            'role'     => 'client', // All registered users are clients
        ];

        // Save user to database
        if ($userModel->insert($userData)) {
            return redirect()->to('/login')->with('success', 'Votre compte a été créé avec succès.');
        } else {
            return redirect()->back()->with('error', 'Une erreur est survenue lors de l\'enregistrement.');
        }
    }
}
