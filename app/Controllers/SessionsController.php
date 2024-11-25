<?php 
namespace App\Controllers;

use App\Models\ExamModel;

class SessionsController extends BaseController
{
    public function calendar()
    {
        $examModel = new ExamModel();
        
        // Récupérer toutes les sessions (examens)
        $sessions = $examModel->findAll();

        // Passer les données des sessions à la vue
        return view('calendrie', ['sessions' => $sessions]);
    }
    public function Inscription()
    {
        $examModel = new ExamModel();
        
        // Récupérer toutes les sessions (examens)
        $sessions = $examModel->findAll();

        // Passer les données des sessions à la vue
        return view('inscription', ['sessions' => $sessions]);
    }
}
