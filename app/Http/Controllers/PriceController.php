<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PriceController extends Controller
{
    public function add(Request $request)
    {
        $data = [];
        $data['title'] = $request->title;
        $data['name'] = $request->name;
        $data['price'] = $request->price;
        $data['description'] = $request->description;

        dd($data);
    }
}
