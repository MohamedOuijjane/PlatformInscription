<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Login extends BaseController
{
    public function index()
    {
        return view('login/login');//login
    }
}
