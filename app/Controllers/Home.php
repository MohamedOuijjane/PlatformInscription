<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        // Charge la vue index.php située directement dans app/Views
        return view('index');
    }
    public function calendrie()
    {
        // Charge la vue calendar.php située dans app/Views
        return view('calendrie');
    }
    public function inscription(){
        return view('inscription');
    }
}
