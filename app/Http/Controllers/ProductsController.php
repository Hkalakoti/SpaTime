<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function products(Request $request)
    {   
        $data = Product::first();

        return view('frontend.products',['data'=> $data]);
    }

    public function add()
    {   
        $data = Category::get();
        return view('backend.products.add',['data' => $data]);
    }

    public function adding(Request $request)
    {   
        $data = [];
        $data['title'] = $request->title;
        $data['name'] = $request->name;
        $data['price'] = $request->price;
        $data['size'] = $request->size;
        $data['category_id'] = $request->categoryid;
        $data['description'] = $request->description;

        Product::insert($data);

        return redirect()->route('productsManage');
    }

    public function manage()
    {   
        $data = Product::get();
        return view('backend.products.manage',['data' => $data]);
    }

    public function edit($id)
    {   
        $data = [];
        $data = Product::get();
        $test = Category::get();
        $data = Product::where('id', $id)->first(); //send specific id entry from DB (first()-> takes a row from db)
        
        return view('backend.products.edit' , ['id' => $id,'data' => $data, 'test' => $test]);
    }

    public function update(Request $request)
    {   
        $data = [];
        $data['title'] = $request->title;
        $data['name'] = $request->name;
        $data['price'] = $request->price;
        $data['description'] = $request->description;
        $data['category_id'] = $request->categoryid;
        $data['size'] = $request->size;
        $data['status'] = $request->status;

        // $data['status'] = $request->status;

        //updates status iteratively
        // Category::where('status', 1)->update(['status' => '0']);

        $data =  Product::where('id', $request->id)->update($data);

        return redirect()->route('productsManage')->with('success', 'Record edited successfully!', array('timeout' => 3));
    }

    public function destroy($id)
    {   
        Product::find($id)->delete();
        return redirect()->back()->with('error', 'Record deleted successfully');
    }
}
