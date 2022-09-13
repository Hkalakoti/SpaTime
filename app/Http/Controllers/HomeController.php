<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Category;
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
        $data = [];
        $data = Auth::user();

        return view('home', ['data' => $data]);
    }

    //Admin banner manage functions

    public function bannerAdd()
    {

        return view('admin.add');
    }


    public function add(Request $request)
    {
        $dataPacket = [];
        $dataPacket['name'] = $request->name;
        $dataPacket['description'] = $request->description;
        $dataPacket['date'] = Carbon::now();
        $dataPacket['status'] = $request->status;


        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdH') . $file->getClientOriginalName();
            $file->move(public_path('public/Image'), $filename);
            $dataPacket['image'] = $filename;
        }
        $data = Banner::create($dataPacket);

        return redirect()->route('bannerManage');
    }

    public function manage(Request $request)
    {
        $data = [];
        $data = Banner::get();

        //  Banner::whereIn('status', [$request->status])->update(['status' => '0']); //updates status iteratively


        return view('admin.manage', ['data' => $data]);
    }

    public function edit(Request $request, $id)
    {

        $dataPacket = [];
        $dataPacket = Banner::get();
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

        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdH') . $file->getClientOriginalName();
            $file->move(public_path('public/Image'), $filename);
            $dataPacket['image'] = $filename;
        }
        
        //updates status iteratively
        Banner::where('status', 1)->update(['status' => '0']); 

        $data =  Banner::where('id', $request->id)->update($dataPacket);



        return redirect()->route('bannerManage')->with('success', 'Record edited successfully!', array('timeout' => 3));
    }

    public function destroy($id)
    {
        Banner::find($id)->delete();
        return redirect()->back()->with('error', 'Record deleted successfully');
    }
    //Admin banner manage functions--end


    // Admin category manage functions

    public function category()
    {
        return view('category.category');
    }

    public function products()
    {
        return view('category.products');
    }

    public function categoryAdd(Request $request)
    {
        return view('category.add');
    }

    public function categoryAdding(Request $request)
    {
        $data = [];
        $data['name'] = $request->name;
        $data['date'] = Carbon::now();

        Category::create($data);

        return redirect()->route('categoryManage');
    }

    public function categoryManage()
    {
        $data = [];
        $data = Category::get();

        return view('category.manage', ['data' => $data]);
    }

    public function categoryEdit()
    {
        $data = [];
        $data = Category::get();

        return view('category.edit', ['data' => $data]);
    }

    public function updateCategory(Request $request)
    {
        $data = [];
        $data['name'] = $request->name;
        $dataPacket['status'] = $request->status;
        
        //updates status iteratively
        Category::where('status', 1)->update(['status' => '0']); 

        $data =  Category::where('id', $request->id)->update($dataPacket);

        return redirect()->route('categoryManage')->with('success', 'Record edited successfully!', array('timeout' => 3));
   
    }

    // Admin category manage functions end

    public function home(Request $request)
    {

        $data = [];
        $data = Banner::where('status', '=', 1)->first();

        return view('frontend.index', ['id' => $request->id, 'data' => $data]);
    }
}
