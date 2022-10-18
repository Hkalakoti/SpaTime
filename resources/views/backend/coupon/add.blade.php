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
                            <label for="code">Code</label>
                            <input type="text" class="form-control" id="code" name="code" placeholder="Code">
                        </div>

                        <!-- No of times -->
                        <div class="form-group">
                            <label for="no_of_times">No of times</label>
                            <input type="text" class="form-control" id="no_of_times" name="no_of_times" placeholder="No of times">
                        </div>

                        <!-- code -->
                        <div class="form-group">
                            <label for="no_of_users">No of users</label>
                            <input type="text" class="form-control" id="no_of_users" name="no of users" placeholder="No of users">
                        </div>

                        <!-- Amount: -->
                        <div class="mb-3">
                            <label for="amount" class="form-label">Amount </label>
                            <input type="text" class="form-control" id="amount" name="amount" placeholder="Amount (In KWD or %)" >
                        </div>

                        <!-- Min Amount: -->
                        <div class="mb-3">
                            <label for="min_amount" class="form-label">Min Amount </label>
                            <input type="text" class="form-control" id="min_amount" name="min_amount" placeholder="Min Amount (In KWD)">
                        </div>

                        <!-- Status: -->
                        <label for="status" class="form-label">Status</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="active" value="1">
                            <label class="form-check-label" for="status">Active</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="inactive" name="status" value="0">
                            <label class="form-check-label" for="status">Inactive</label>
                        </div>

                        <!-- Discount_type: -->
                        <label for="discount_type">Discount Type</label>
                        <select name="discount_type" id="discount_type">
                            <option value="percentage"> Percentage</option>
                            <option value="flat">Flat</option>
                        </select>
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