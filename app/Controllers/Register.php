<?php
namespace App\Controllers;

use App\Models\UserModel;
use App\Models\RegistrationsModel;

class Register extends BaseController
{
    public function store()
    {
        $session = session();
        $userModel = new UserModel();
        $registrationModel = new RegistrationsModel();
        $validation = \Config\Services::validation();

        // Get CIN and Exam ID from session
        $cin = $session->get('cin');
        $examId = $session->get('exam_id');

        if (!$cin || !$examId) {
            return redirect()->to('/inscription')->with('error', 'Session expired. Please start again.');
        }

        // Validate input fields
        $validation->setRules([
            'username' => 'required|min_length[3]|max_length[20]|is_unique[users.username]',
            'email'    => 'required|valid_email|is_unique[users.email]',
            'password' => 'required|min_length[8]|max_length[255]',
        ]);

        if (!$this->validate($validation->getRules())) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        // Hash the password
        $hashedPassword = password_hash($this->request->getPost('password'), PASSWORD_DEFAULT);

        // Save user to the Users table
        $userData = [
            'username' => $this->request->getPost('username'),
            'email'    => $this->request->getPost('email'),
            'password' => $hashedPassword,
            'CIN'      => $cin, // Save CIN from session
            'role'     => 'client',
        ];

        $userId = $userModel->insert($userData);

        if (!$userId) {
            return redirect()->back()->with('error', 'Failed to register user.');
        }

        // Save registration to the Registrations table
        $registrationData = [
            'user_id'           => $userId,
            'exam_id'           => $examId, // Save Exam ID from session
            'registration_date' => date('Y-m-d'),
        ];

        if (!$registrationModel->insert($registrationData)) {
            return redirect()->back()->with('error', 'Failed to save registration.');
        }

        // Clear the session variables
        $session->remove(['cin', 'exam_id']);

        return redirect()->to('/dashboardClient')->with('success', 'Registration successful.');
    }
}
