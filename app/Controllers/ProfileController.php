<?php
namespace App\Controllers;

use App\Models\UsersModel;
use CodeIgniter\Controller;

class ProfileController extends Controller
{
    public function index()
    {
        // Supposons que l'utilisateur connecté est récupéré via la session
        // $session = session();
        // $userId = $session->get('user_id');

         $userModel = new UsersModel();
        $user = $userModel->find(10);

        if ($user) {
            return view('dashbord/modifier_profil', ['user' => $user]);
        } else {
            return redirect()->to('/dashboard')->with('error', 'Utilisateur non trouvé.');
        }
    }

    public function updatePassword()
    {
        // $session = session();
        // $userId = $session->get('user_id');
        $userId=10;
        $userModel = new UsersModel();

        // Vérifier que l'utilisateur existe
        $user = $userModel->find(10);
        if (!$user) {
            return redirect()->back()->with('error', 'Utilisateur non trouvé.');
        }

        // Récupérer les données du formulaire
        $newPassword = $this->request->getPost('new_password');
        $confirmPassword = $this->request->getPost('confirm_password');

        // Valider les données
        if (empty($newPassword) || $newPassword !== $confirmPassword) {
            return redirect()->to('/profile')->with('error', 'Les mots de passe ne correspondent pas.');

        }

        // Mettre à jour le mot de passe
        $userModel->update(10, [
            'password' => password_hash($newPassword, PASSWORD_DEFAULT),
        ]);

        return redirect()->to('/profile')->with('success', 'Mot de passe mis à jour avec succès.');
    }
}