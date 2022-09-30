<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    // Admin category manage functions

    public function category(Request $request)
    {  
        $data = []; 
        $data['category'] = Category::where('status', '=', 1)->get();
        $data['product'] = Product::with('category')->get();

        return view('frontend.category',['data'=> $data]);
    }

    public function add(Request $request)
    {
        return view('backend.category.add');
    }

    public function adding(Request $request)
    {
        $data = [];
        $data['name'] = $request->name;
        $data['category_slug'] = $request->slug;
        $data['date'] = Carbon::now();


        $validate = $request->validate([
            'category_slug' => ['required'],
            'name' => ['required'],
        ]);

        Category::create($data);
        return redirect()->route('categoryManage');
    }

    public function manage()
    {
        $data = [];
        $data = Category::get();

        return view('backend.category.manage', ['data' => $data]);
    }

    public function edit($id)
    {
        $data = [];
        $data = Category::get();
        $data = Category::where('id', $id)->first(); //send specific id entry from DB (first()-> takes a row from db)


        return view('backend.category.edit', ['id' => $id,'data' => $data]);
    }

    public function update(Request $request)
    {
        $data = [];
        $data['name'] = $request->name;
        $data['category_slug'] = $request->slug;
        $data['status'] = $request->status;

        $data =  Category::where('id', $request->id)->update($data);

        return redirect()->route('categoryManage')->with('success', 'Record edited successfully!', array('timeout' => 3));
    }

    public function destroy($id)
    {   
        Category::find($id)->delete();
        return redirect()->back()->with('error', 'Record deleted successfully');
    }

    // Admin category manage functions end
}
