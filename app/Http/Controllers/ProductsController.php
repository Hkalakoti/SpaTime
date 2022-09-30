<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductsController extends Controller
{
    public function products($id)
    {
        $data = Product::get();
        $data = Product::where('id', $id)->first();
        $datas = Product::select('price', 'size', 'id')->where('name', $data->name, $id)->get();

        return view('frontend.products', ['id' => $id, 'data' => $data, 'datas' => $datas]);
    }

    public function add()
    {
        $data = Category::get();
        return view('backend.products.add', ['data' => $data]);
    }

    public function adding(Request $request)
    {
        $data = [];
        $data['title'] = $request->title;
        $data['slug'] = $request->slug;
        $data['name'] = $request->name;
        $data['price'] = $request->price;
        $data['size'] = $request->size;
        $data['category_id'] = $request->categoryid;
        $data['description'] = $request->description;

        // default image if image is not uploaded
        $data['image'] = '2022092805upload-error.png';

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = date('YmdH') . $file->getClientOriginalName();
            $file->move(public_path('public/Image'), $filename);
            $data['image'] = $filename;
        }

        $db = Product::select('size')->where('name', $request->name)->get();

        foreach ($db as $row) {
            if ($data['size'] === $row->size) {
                echo $row->size;
                return redirect()->route('productsAdd')->with('error', 'Product size already exists in the database');
            }
        }

        $validate = $request->validate([
            'title' => ['required'],
            'slug' => ['required'],
            'name' => ['required'],
            'description' => ['required', 'max:255'],
        ]);

        Product::insert($data);
        return redirect()->route('productsManage');
    }

    public function manage()
    {
        $data = Product::get();
        return view('backend.products.manage', ['data' => $data]);
    }

    public function edit($id)
    {
        $data = [];
        $data = Product::get();
        $test = Category::get();
        $data = Product::where('id', $id)->first(); //send specific id entry from DB (first()-> takes a row from db)

        return view('backend.products.edit', ['id' => $id, 'data' => $data, 'test' => $test]);
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

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = date('YmdH') . $file->getClientOriginalName();
            $file->move(public_path('public/Image'), $filename);
            $data['image'] = $filename;
        }

        $data =  Product::where('id', $request->id)->update($data);

        return redirect()->route('productsManage')->with('success', 'Record edited successfully!', array('timeout' => 3));
    }

    public function destroy($id)
    {
        Product::find($id)->delete();
        return redirect()->back()->with('error', 'Record deleted successfully');
    }
}
