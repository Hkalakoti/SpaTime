<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\ContactUs;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = [];
        $data = Auth::user();

        return view('home',['data' => $data]);
    }

    //Admin banner manage functions
    public function bannerAdd()
    {
        return view('backend.banner.add');
    }


    public function add(Request $request)
    {
        $dataPacket = [];
        $dataPacket['name'] = $request->name;
        $dataPacket['description'] = $request->description;
        $dataPacket['date'] = Carbon::now();
        $dataPacket['status'] = $request->status;

        $validate = $request->validate([

            'name' => ['required'],
            'description' => ['required'],
            'status' => ['required'],
        ]);

        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdH') . $file->getClientOriginalName();
            $file->move(public_path('public/Image'), $filename);
            $dataPacket['image'] = $filename;
        }

        Banner::where('status', 1)->update(['status' => '0']);


        Banner::create($dataPacket);

        return redirect()->route('bannerManage');
    }

    public function manage(Request $request)
    {
        $data = [];
        $data = Banner::get();
        //  Banner::whereIn('status', [$request->status])->update(['status' => '0']); //updates status iteratively

        return view('backend.banner.manage', ['data' => $data]);
    }

    public function edit(Request $request, $id)
    {
        $dataPacket = [];
        $dataPacket = Banner::get();
        $dataPacket = Banner::where('id', $id)->first(); //send specific id entry from DB (first()-> takes a row from db)

        return view('backend.banner.edit', ['id' => $id, 'data' => $dataPacket]); //routes to edit.blade.php
    }

    public function updateData(Request $request)
    {
        $dataPacket = [];
        $dataPacket['name'] = $request->name;
        $dataPacket['description'] = $request->description;
        $dataPacket['status'] = $request->status;

        //img upload fn

        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdH') . $file->getClientOriginalName();
            $file->move(public_path('public/Image'), $filename);
            $dataPacket['image'] = $filename;
        }

        //updates status iteratively
        if ($dataPacket['status'] == 0) {

            return redirect()->route('bannerManage')->with('error', 'At least one banner must be active', array('timeout' => 3));
        } else {
            $test = Banner::where('status', 1)->update(['status' => '0']);
            $data =  Banner::where('id', $request->id)->update($dataPacket);
        }
        return redirect()->route('bannerManage')->with('success', 'Record edited successfully!', array('timeout' => 3));
    }

    public function destroy($id)
    {
        Banner::find($id)->delete();
        return redirect()->back()->with('error', 'Record deleted successfully');
    }
    //Admin banner manage functions--end

    public function home(Request $request)
    {
        $data = [];
        $id = auth()->user()->id;
        $data = Banner::where('status', '=', 1)->first();
        $cart = Cart:: where('user_id', $id)
                       ->get();

        $count = sizeof($cart);

        $request->session()->put('key', $count);

        return view('frontend.index', ['id' => $request->id, 'data' => $data]);
    }
   
    public function ContactUs(Request $request)
    {
        return view('frontend.contactUs');
    }

    public function Contact_Us(Request $request)
    {
        $data = [];
        $data['fname'] = $request->fname;
        $data['lname'] = $request->lname;
        $data['phone'] = $request->phone;
        $data['email'] = $request->email;
        $data['message'] = $request->message;

        $data = ContactUs::create($data);

        return redirect()->route('contactUs');
    }
}
