<?php

namespace App\Controllers;

class Home extends BaseController

{
    public function index(){
        return view('index');
    }

    public function inscriptionDetails()
    {
        // Load the index view
        return view('inscriptionDetails/inscriptionDetails');
    }

    public function inscriptionbutton()
    {
        $session = session();
        $examId = $this->request->getGet('exam_id'); // Get exam ID from query parameters

        if (!$examId) {
            return redirect()->to('/loadexam')->with('error', 'Please select an exam.');
        }

        // Save exam ID in the session
        $session->set('exam_id', $examId);
        return view('inscriptionDetails/inscriptionDetails');
    }

    public function saveCin()
    {
        $session = session();

        if ($this->request->getMethod() === 'post') {
            $cin = $this->request->getPost('cin'); // Retrieve CIN from the form

            if (empty($cin)) {
                return redirect()->back()->with('error', 'CIN is required.');
            }

            // Save CIN to session
            $session->set('cin', $cin);
            return redirect()->to('/register');
        }
        return redirect()->to('/register');
    }

}
