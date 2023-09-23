<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dashboard extends Controller
{
    // navigate to the user dashboard
    public function userDashboard(){
        return view('dashboard.user-dashboard');
    }


    // navigate to the admin dashboard
    public function adminDashboard(){
        return view('dashboard.admin-dashboard');
    }
}

