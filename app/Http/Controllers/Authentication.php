<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Authentication extends Controller
{
    //navigate to the login page
    public function login(){
        return view('auth.login'); 
        // redirect to the dashboard
    }

    //navigate to the register page for common user
    public function register(){
        return view('auth.register');
        // redirect to the login page
    }
}
