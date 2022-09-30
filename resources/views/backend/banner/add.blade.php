@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row ml-auto">
    <div class="col-lg-6">
      <div class="card">
      @include('flash-messages')
        <div class="card-header" style="background-color: #007bff; padding:0 !important; padding-left:15px !important; padding-top:10px !important; color:white;">
          <h3>Add Banner</h3>
        </div>
        <div class="card-body">
          <form method="POST" action="{{route('adding')}}" enctype="multipart/form-data">
            @csrf
            <!-- Name: -->
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="Name">
            </div>

            <!-- Description: -->
            <div class="mb-3">
              <label for="description" class="form-label">Description</label>
              <textarea class="form-control" name="description" id="description" rows="8"></textarea>
            </div>

            <!-- Image: -->
            <div class="mb-3">
              <label for="image" class="form-label">Image</label>
              <input class="form-control form-control-sm" name="image" id="image" style="padding: 10px 20px 10px 20px; height:100%;" type="file">
            </div>
            <br>

            <!-- Status: -->
            <label for="formFileSm" class="form-label">Status</label>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="status" id="active" value="1">
              <label class="form-check-label" for="status">Active</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" id="inactive" name="status" value="0">
              <label class="form-check-label" for="status">Inactive</label>
            </div>
            <br>
            <br>
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