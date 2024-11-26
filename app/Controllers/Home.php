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

    public function inscription()
    {
        // Load the inscription view
        return view('inscription');
    }

    public function inscriptionDetails()
    {
        // Load the inscriptionDetails view for GET requests
        return view('inscriptionDetails/inscriptionDetails');
    }
}
