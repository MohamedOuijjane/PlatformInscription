<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        // Charge la vue index.php située directement dans app/Views
        return view('index');
    }
}
