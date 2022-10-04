<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\VarDumper\Cloner\Data;

class CartController extends Controller
{
    public function cart(Request $request)
    {   
        $data = Cart:: get();

        return view('frontend.shopping-cart',['data' => $data]);                                                                      
    }      
    
    public function add(Request $request)
    {
        $data = [];
        $data['product_id'] = $request->id;
        $data['user_id'] = Auth()->user()->id;

        $data = Cart::create($data);

    }

    public function adding(Request $request)
    {

    }
}
