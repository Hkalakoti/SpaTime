<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cart(Request $request)
    {
        $id = auth()->user()->id;
        $data = Cart::where('user_id', $id)
            ->with('product')
            ->get();

            function total($data)
            {   
                foreach ($data as $key => $data) {
                    foreach ($data['product'] as $product) {
                        }
                    }
                }
                // return $total;
        $total =  total($data);  
        // dd($data[0]['product'][0]['status']);
        return view('frontend.shopping-cart', ['data' => $data],['total' => $total]);
    }

    public function cartAdd(Request $request)
    {
        $data = [];
        $data['product_id'] = $request->id;
        $data['user_id'] = auth()->user()->id;

        $query = Cart::create($data);

        
        return 'Added to cart';
    }

    public function adding(Request $request)
    {
    }

    public function destroy($id){

        Cart::find($id)->delete($id);
        return back()->with('error','Item removed');
    }

}
