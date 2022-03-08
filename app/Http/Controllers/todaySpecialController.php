<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class todaySpecialController extends Controller
{
    public function today(){
        return view ('today');
    }
}
