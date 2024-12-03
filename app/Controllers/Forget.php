<?php

namespace App\Controllers;


class Forget extends BaseController
{
    public function forgetpassword()
    {
        return view('forgetpassword/forgetpassword');
    }
}
