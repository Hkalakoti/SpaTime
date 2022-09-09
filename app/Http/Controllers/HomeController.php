<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
        return view('home');

    }

    //Admin banner manage functions
    public function add(Request $request)
    {
        $dataPacket = [];
        $dataPacket['name'] = $request->name;
        $dataPacket['description'] = $request->description;
        $dataPacket['date'] = Carbon::now();
        $dataPacket['status'] = $request->status;

        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdH').$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
            $dataPacket['image']= $filename;
        }
        $data = Banner::create($dataPacket);

            return redirect()->route('bannerManage');                
    }
  
    public function manage()
    {
         $data=[];
         $data= Banner:: get();
         return view('admin.manage',['data'=>$data]);
    }

    public function edit(Request $request, $id) {
        
        $dataPacket = [];

        $dataPacket = Banner:: get(); 
        $dataPacket = Banner::where('id', $id)->first(); //send specific id entry from DB (first()-> takes a row from db)

        return view('admin.edit', ['id' => $id, 'data' => $dataPacket]); //routes to edit.blade.php
    }

   public function updateData(Request $request)
   {
        $dataPacket = [];
        $dataPacket['name'] = $request->name;
        $dataPacket['description'] = $request->description;
        $dataPacket['status'] = $request->status;

        //img upload fn
        
        if($request->file('image')){
        $file= $request->file('image');
        $filename= date('YmdH').$file->getClientOriginalName();
        $file-> move(public_path('public/Image'), $filename);
        $dataPacket['image']= $filename;
    }
        $data =  Banner::where('id', $request->id)->update($dataPacket);


       return redirect()->route('bannerManage');
   }

        Public function destroy($id){

            Banner::find($id)->delete();
            return redirect()->back();
        }
        //Admin banner manage functions--end

        Public function home(Request $request){

        $data = [];
        $data = Banner:: get(); 
        $data = Banner::where('id', $request->id)->first();

            return view('frontend.index', ['id'=> $request->id, 'data' => $data]);

}

}