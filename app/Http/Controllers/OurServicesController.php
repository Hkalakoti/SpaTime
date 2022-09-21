<?php

namespace App\Http\Controllers;

use App\Models\Services;
use Illuminate\Http\Request;

class OurServicesController extends Controller
{
    public function view(){

        return view('frontend.ourServices');
    }

    public function add(Request $request)
    {
        $data = [];
        $data['service'] = Services:: get(); 

        return route('ServiceAdd');
    }
}
