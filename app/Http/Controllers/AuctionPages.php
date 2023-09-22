<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuctionPages extends Controller
{
    // the index page
    public function index(){
        return view('index');
    }

    # navigate to the why-sell page-- give information about the auction procedure
    public function whySell(){
        return view('why-sell');
    }

    # navigate to the form for filling the property available for sales
    public function sellForm(){
        return view('sale-form');
    }

    // navigate to the support page
    public function support(){
        return view('layouts.support');
    }
}
