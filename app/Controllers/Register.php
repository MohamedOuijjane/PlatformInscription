<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Register extends BaseController
{
    public function index()
    {
        return view('register/register');
    }
}
