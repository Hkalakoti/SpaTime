@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row ml-auto">
        <div class="col-lg-6">
@include('flash-messages')
            <div class="card">
                <div class="card-header" style="background-color: #007bff; padding:0 !important; padding-left:15px !important; padding-top:10px !important; color:white;">
                    <h3>Add Product</h3>
                </div> 
                <div class="card-body">
                    <form method="POST" action="{{route('productsAdding')}}" enctype="multipart/form-data">
                        @csrf

                        <!-- title: -->
                        <div class="form-group">
                            <label for="name">Title</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Title">
                        </div>

                        <!-- Name: -->
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                        </div>

                        <!-- slug -->
                         <div class="form-group">
                            <label for="slug">Category Slug</label>
                            <input type="text" class="form-control" id="slug" name="slug" placeholder="Category Slug">
                        </div>
                        <!-- Price: -->
                        <div class="form-group">
                            <label for="name">Price</label>
                            <input type="text" class="form-control" id="price" name="price" placeholder="Price(In KWD)">
                        </div>

                        <!-- Description: -->
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" name="description" id="description" placeholder="Description" rows="8"></textarea>
                        </div>

                        <!-- category id -->
                        <label for="categoryid">Category_ID</label>
                        <select name="categoryid" id="categoryid">
                            @foreach ($data as $row )
                            <option value="{{$row->id}}">{{$row->id}}</option>
                            @endforeach
                        </select>

                        <!-- Drop Down: -->
                            <label for="size">Size</label>
                        <select name="size" id="size">
                            <option value="100">100ML</option>
                            <option value="150">150ML</option>
                        </select>
                        <br>
                        <!-- Image: -->
                        <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" class="form-control form-control-sm" name="image" id="image" style="padding: 10px 20px 10px 20px; height:100%;">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@include('layouts.sidebar')
@include('layouts.footer')
@endsection