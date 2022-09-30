@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row ml-auto">
    <div class="col-lg-6">
      <div class="card">
        @include('flash-messages')
        <div class="card-header" style="background-color: #007bff; padding:0 !important; padding-left:15px !important; padding-top:10px !important; color:white;">
          <h3>Add Category</h3>
        </div>
        <div class="card-body">
          <form method="POST" action="{{route('categoryAdding')}}" enctype="multipart/form-data">
            @csrf
            <!-- Name: -->
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="Name">
            </div>

            <div class="form-group">
              <label for="name">Category slug</label>
              <input type="text" class="form-control" id="slug" name="slug" placeholder="Category slug">
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