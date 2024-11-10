<?php
namespace App\Controllers;

class DashboardClient extends BaseController{
    public function dashboardClient(){
        return view('/dashboardClient/dashboardClient');
    }
}