<?php

namespace App\Http\Controllers;

use App\Models\Coupon;
use DOMDocument;
use DOMXPath;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function checkout(Request $request)
    {
        $final = [];
        $final['subTotal'] = $request->subtotal;
        $final['discount'] = $request->discount;
        // $request->session()->put('test',implode($test));
        $test = json_decode(file_get_contents('http://localhost:8001/Shopping-cart'));
        dd($test);
        $dom = new DOMDocument();
        $dom->loadHTML(implode($test));

        $xpath = new DOMXPath($dom);
        $divContent = $xpath->query('//div[@id="product_list"]');
        dd($dom);

        return view('frontend.checkout', ['final' => $final]);
    }
}
