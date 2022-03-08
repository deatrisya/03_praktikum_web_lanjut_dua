<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FoodMenu;

class FoodMenuController extends Controller
{
    public function foodMenu(){
        $data = foodMenu::all();
        return view ('foodMenu',['daftarmenu'=>$data]);
    }

}
