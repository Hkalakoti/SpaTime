<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function products(Request $request)
    {   
        $data = Product::first();

        return view('products.products',['data'=> $data]);
    }

    public function add()
    {   
        return view('products.add');
    }

    public function adding(Request $request)
    {
        $data = [];
        $data['name'] = $request->name;
        $data['description'] = $request->description;
        $data['date'] = Carbon::now();

        Product::insert($data);

        return redirect()->route('productsManage');
    }


    public function manage()
    {   
        $data = Product::get();

        return view('products.manage',['data' => $data]);
    }

    public function edit()
    {   
        return view('products.edit');
    }

    public function update()
    {   
        return view('products.update');
    }

    public function destroy()
    {   
        return view('products.destroy');
    }
}
