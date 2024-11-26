<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class Login extends BaseController
{
    public function index()
    {
        return view('login/login');
    }
        public function authenticate()
    {
        $session = session();
        $userModel = new UserModel();

        $username = $this->request->getPost('username'); // Retrieve username input
        $password = $this->request->getPost('password'); // Retrieve password input

        // Fetch the user by username
        $user = $userModel->where('username', $username)->first();

        if ($user) {
            // Verify the hashed password
            if (password_verify($password, $user['password'])) {
                // Store user information in the session
                $session->set([
                    'id' => $user['id'],
                    'username' => $user['username'],
                    'role' => $user['role'],
                    'isLoggedIn' => true,
                ]);

                // Redirect based on the user's role
                if ($user['role'] === 'client') {
                    return redirect()->to('/dashboardClient');
                } elseif ($user['role'] === 'admin') {
                    return redirect()->to('/dashboard');
                }
            } else {
                // Incorrect password
                return redirect()->to('/login')->with('error', 'Mot de passe incorrect.');
            }
        } else {
            // User not found
            return redirect()->to('/login')->with('error', 'Utilisateur introuvable.');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
}
