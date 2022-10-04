<?php

namespace App\Http\Controllers;

use App\Models\Coupon;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    public function add()
    {
        return view('backend.coupon.add');
    }

    public function adding(Request $request)
    {
        $data = [];
        $data['name'] = $request->name;
        $data['code'] = $request->code;
        $data['discount_type'] = $request->discount_type;
        $data['min_amount'] = $request->min_amount;
        $data['status'] = $request->status;

        $validate= $request->validate([
            'name' => 'required',
            'code' => 'required|unique:user',
            'discount_type' => 'required',
            'min_amount' => 'required',
            'status' => 'required'
        ]);

        Coupon::insert($data);
        return route('couponManage',['data' => $data]);
    }

    public function manage()
    {
        $data = Coupon::get();
    }
}
