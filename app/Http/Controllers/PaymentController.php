<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function payment()
    {
        $data= [];
        $data['amount'] = 1;
        $data['currency'] = "KWD";
        $data['customer']['firstname'] = "Mustafa";
        $data['customer']['email'] = "mustafa99@gmail.com";
        $data['customer']['phone']['country_code'] = "91";
        $data['customer']['phone']['number'] = "1234567890";
        $data['source']['id'] = "src_card";
        $data['redirect']['url'] = "http://localhost:8000/callback";

        $headers = [
            "Content-Type: application/json",
            "Authorization: Bearer sk_test_XKokBfNWv6FIYuTMg5sLPjhJ",
        ];

        $ch = curl_init();
        $url = "https://api.tap.company/v2/charges";
        curl_setopt($ch, CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_POST,true);
        curl_setopt($ch, CURLOPT_POSTFIELDS,json_encode($data));
        curl_setopt($ch, CURLOPT_HTTPHEADER,$headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
        
        $output = curl_exec($ch);

        curl_close($ch);
        $response = json_decode($output);

        return redirect()->to($response->transaction->url);
    }

    public function callback(Request $request)
    {
        $input = $request->all();

        $headers = [
            "Content-Type: application/json",
            "Authorization: Bearer sk_test_XKokBfNWv6FIYuTMg5sLPjhJ",
        ];
        $ch = curl_init();
        $url = "https://api.tap.company/v2/charges/".$input['tap_id'];
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER,$headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
        
        $output = curl_exec($ch);

        curl_close($ch);

        $response = json_decode($output);
        dd($response);

    }
}