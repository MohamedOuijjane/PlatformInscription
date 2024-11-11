<?php
namespace App\Controllers;

class DashboardClient extends BaseController{
    public function welcomeDashboard(){
        return view('/dashboardClient/welcomeDashboard');
    }
    public function profile(){
        return view('/dashboardClient/profile');
    }
    public function paiement(){
        return view('/dashboardClient/paiement');
    }
    public function convocation(){
        return view('/dashboardClient/convocation');
    }
}