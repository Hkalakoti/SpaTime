@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row ml-auto">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header" style="background-color: #007bff; padding:0 !important; padding-left:15px !important; padding-top:10px !important; color:white;">
                    <h3>Add Product</h3>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{route('productsAdding')}}">
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


                        <!-- Drop Down: -->
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Size
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                <button class="dropdown-item" type="button">100ML</button>
                                <button class="dropdown-item" type="button">150ML</button>
                            </div>
                        </div>

                        <br>
                        <!-- Image: -->
                        <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input class="form-control form-control-sm" name="image" id="image" style="padding: 10px 20px 10px 20px; height:100%;" type="file">
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