<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        // Load the index view
        return view('index');
    }

    public function calendrie()
    {
        // Load the calendar view
        return view('calendrie');
    }

        public function inscriptionbutton()
    {
        $session = session();
        $examId = $this->request->getGet('exam_id'); 
        
        // Save exam_id in session
        $session->set([
            'exam_id' => $examId,
        ]);

        return redirect()->to('/inscriptionDetails'); // Redirect to CIN input page
    }


    public function inscriptionDetails()
    {
    
        return view('inscriptionDetails/inscriptionDetails');
    }
        public function saveCin()
    {
        $session = session();

        if ($this->request->getMethod() === 'post') {
            $cin = $this->request->getPost('cin');

            // Save the CIN to the session
            $session->set(['cin' => $cin]);

            // Redirect to the registration form
            return redirect()->to('/register');
        }

        return redirect()->to('/inscriptionDetails'); // Redirect back if no POST data
    }

}
