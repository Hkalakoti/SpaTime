@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      @include('flash-messages')
      <table class="table" style="text-align: center !important ;">
        <caption> Coupon list </caption>
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">name</th>
            <th scope="col">code</th>
            <th scope="col">No. of users</th>
            <th scope="col">No. of times</th>
            <th scope="col">Discount type</th>
            <th scope="col">Amount</th>
            <th scope="col">Min amount</th>
            <th scope="col">status</th>
            <th scope="col">action</th>
            <th scope="col">action</th>
          </tr>
          <tr>
            @foreach ($data as $key => $row)
            <!-- loop to enter data recursively into the table rows-->
            <td>{{ ++$key }}</td>
            <td>{{ $row->name }}</td>
            <td>{{ $row->code }}</td>
            <td>{{ $row->no_of_users }}</td>
            <td>{{ $row->no_of_times }}</td>
            <td>{{ $row->discount_type }}</td>
            <td> 
            @if($row->discount_type == 'flat')
                {{$row->amount}} @php echo "KWD" @endphp 
                @else
              {{$row->amount}} @php
                echo "%"
              @endphp
            @endif
           </td>
            <td>{{ $row->min_amount }}</td>
            <td><button type="button" role="button" class=" {{ $row->status ? 'btn btn-success active-button' : 'btn btn-danger active-button' }}" data-onstyle="activated" data-offstyle="deactivated" data-bs-toggle="button"> {{ $row->status ? 'Active' : 'Inactive' }}</td>
            <td> <button type="button" role="button" class="btn btn-warning"> <a href="{{route('couponEdit',['id' => $row->id])}}" style="text-decoration: none; color: #ffffff;font-weight: 300;"> Edit </a></button> </td>
            <td> <button type="button" role="button" class="btn btn-danger"> <a href="{{route('couponDestroy',['id' => $row->id])}}" style="text-decoration: none; color: #ffffff;"> Delete </a> </button> </td>
          </tr>
          @endforeach
      </table>
    </div>
  </div>
</div>
@include('layouts.sidebar')
@include('layouts.footer')
@endsection
