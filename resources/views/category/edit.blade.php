@extends('layouts.app')
<head>
<meta charset="utf-8" />

<link class="jsbin" href="{{asset('http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css')}}" rel="stylesheet" type="text/css"/>
</head>
@section('content')
<div class="container">
<div class="row ml-auto">
<div class="col-lg-6">
<div class="card">
  <div class="card-header" style="background-color: #007bff; padding:0 !important; padding-left:15px !important; padding-top:10px !important; color:white;">
  <h3>Update Category</h3>
  </div>
  <div class="card-body">
    <form method="POST" action="{{route('updateCategory', ['id' => $id])}}"  enctype="multipart/form-data" >
    @csrf
    <!-- Name: -->
    <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="{{$data->name}}">
  </div>

    <!-- Status: -->
   <label for="formFileSm" class="form-label">Status</label> 
    <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="status" id="active" value="1" {{ $data->status == 1 ? 'checked' : null }}> <!-- Ternary operator for status -->
  <label class="form-check-label" for="status">Active</label>
  </div>
  <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" id="inactive" name="status" value="0" {{ $data->status == 0 ? 'checked' : null }}>
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
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
    <!--[if IE]>
      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

 <script> 
   var loadFile = function(event) {
    var reader = new FileReader();
    reader.onload = function(){
      var output = document.getElementById('output');
      output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
  };
</script>

