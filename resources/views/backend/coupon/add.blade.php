@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row ml-auto">
        <div class="col-lg-6">
            @include('flash-messages')
            <div class="card">
                <div class="card-header" style="background-color: #007bff; padding:0 !important; padding-left:15px !important; padding-top:10px !important; color:white;">
                    <h3>Add Coupon</h3>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{route('couponAdding')}}" enctype="multipart/form-data">
                        @csrf

                        <!-- Name: -->
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                        </div>

                        <!-- code -->
                        <div class="form-group">
                            <label for="slug">Code</label>
                            <input type="text" class="form-control" id="code" name="code" placeholder="Code">
                        </div>

                        <!-- Discount_type: -->
                        <div class="mb-3">
                            <label for="description" class="form-label">Discount Type</label>
                            <input type="text" class="form-control" id="discount_type" name="discount_type" placeholder="Discount Type">
                        </div>

                        <!-- Min Amount: -->
                        <div class="mb-3">
                            <label for="description" class="form-label">Min Amount </label>
                            <input type="text" class="form-control" id="min_amount" name="min_amount" placeholder="Min Amount">
                        </div>

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