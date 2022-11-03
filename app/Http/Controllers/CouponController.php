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
        $data['no_of_users'] = $request->no_of_users;
        $data['no_of_times'] = $request->no_of_users;
        $data['code'] = $request->code;
        $data['discount_type'] = $request->discount_type;
        $data['amount'] = $request->amount;
        $data['min_amount'] = $request->min_amount;
        $data['status'] = $request->status;

        $dataPacket =  Coupon::create($data);

        return redirect()->route('couponManage');
    }

    public function manage()
    {
        $data = Coupon::get();
        return view('backend.coupon.manage', ['data' => $data]);
    }

    public function edit(Request $request)
    {   
        $data = Coupon::where('id',$request->id)->first();
        return view('backend.coupon.edit',['data' => $data]);
    }

    public function update(Request $request)
    {
        $data = [];
        $data['name'] = $request->name;
        $data['no_of_users'] = $request->no_of_users;
        $data['no_of_times'] = $request->no_of_users;
        $data['code'] = $request->code;
        $data['discount_type'] = $request->discount_type;
        $data['amount'] = $request->amount;
        $data['min_amount'] = $request->min_amount;
        $data['status'] = $request->status;

        $dataPacket = Coupon:: where('id',$request->id)->update($data);

        return redirect()->route('couponManage')->with('success', 'Record edited successfully!', array('timeout' => 3));
    }

    public function destroy($id)
    {
      Coupon:: find($id)->delete($id);
      return back()->with('error','Item deleted Successfully');
    }

    public function applyCoupon(Request $request)
    {
        dd($request->all());

    }
}
