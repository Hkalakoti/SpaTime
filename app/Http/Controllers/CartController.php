<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Coupon;
use App\Models\Price;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cart(Request $request)
    {
        $id = auth()->user()->id;
        $data = Cart::where('user_id', $id)
            ->with('product')
            ->get();
        
        $coupon = Coupon::get();

        return view('frontend.shopping-cart', ['data' => $data],['coupon'=> $coupon]);
    }

    public function cartAdd(Request $request)
    {
        $data = [];
        $data['product_id'] = $request->id;
        $data['user_id'] = auth()->user()->id;

        $query = Cart::create($data);
        
        return 'Added to cart';
    }

    public function update(Request $request)
    {   
        $cart = session()->get('cart');
        dd($cart);
    }

    public function destroy(Request $request){

        Cart::find($request->id)->delete($request->id);
        return back()->with('error','Item removed');
    }

}
