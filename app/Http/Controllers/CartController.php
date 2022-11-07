<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Coupon;
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

        return view('frontend.shopping-cart',['data' => $data],['coupon'=> $coupon]);
    }

    public function cartAdd(Request $request)
    {
        $id = $request->id;

        if(isset($data[$id])) {
            $data[$id]['quantity']++;
        } else {
        $data['product_id'] = $request->id;
        $data['quantity'] = 1;
        $data['user_id'] = auth()->user()->id;
        }
        Cart::create($data);
        
        return redirect()->back()->with('success', 'Product added to cart successfully!');

}

    public function update(Request $request)
    {
        $id = auth()->user()->id;
        $data = Cart::where('user_id', $id)->where('id', $request->id)->first();


        if ($request->quantity == 0) {
            exit;
        }else{
        if(isset($request->id)) {
                if ($request->quantity < $data['quantity']) {
                    $data['quantity'] = $request->quantity;
                }else{
                $data['quantity'] = $request->quantity;
            }
                $new = Cart:: where('id', $data->id)->update(['quantity' => $data['quantity']]);
            } 
        }        
        return redirect()->back()->with('success','Cart updated');
    }

    public function destroy(Request $request){

             Cart::find($request->id)->delete($request->id);
             return redirect()->back()->with('error','Item removed');
    }
}
