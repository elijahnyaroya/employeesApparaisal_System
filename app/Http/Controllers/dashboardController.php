<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardController extends Controller
{
    //

    function dashboardArea(){
        return view('/dashboard');
    }
}
