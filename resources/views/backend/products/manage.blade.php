@extends('layouts.app')

@section('content')
@include('users')

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            @include('flash-messages')

            <table class="table" style="text-align: center !important;">
                <caption> Product list </caption>
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Categoryid</th>
                        <th scope="col">name</th>
                        <th scope="col">status</th>
                        <th scope="col">price</th>
                        <th scope="col">size(In ML)</th>
                        <th scope="col">image</th>
                        <th scope="col">action</th>
                        <th scope="col">action</th>
                    </tr>
                    <tr>
                        @foreach ($data as $i => $row)
                        <!-- loop to enter data recursively into the table rows-->
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $row->category_id }}</td>
                        <td>{{ $row->name }}</td>
                        <td>
                            <button class="{{ $row->status ? 'btn btn-success active-button' : 'btn btn-danger active-button' }}" role="button" data-onstyle="activated" data-offstyle="deactivated" data-bs-toggle="button"> {{ $row->status ? 'Active' : 'Inactive' }} </a></button>
                        <td>{{ $row->price }}</td>
                        <td>{{ $row->size }}</td>
                        <td> <img src="{{ url('public/Image/'.$row->image) }}" 
                         style="height: 100px; width: 150px;"> </td>

                         <td> <button type="button" role="button" class="btn btn-warning"> <a href="{{route('productsEdit',['id' => $row->id])}}" style="text-decoration: none; color: #ffffff;font-weight: 300;"> Edit </a></button> </td>
                        <td> <button type="button" role="button" class="btn btn-danger"> <a href="{{route('productsDestroy',['id' => $row->id])}}" style="text-decoration: none; color: #ffffff;"> Delete </a> </button> </td>
                    </tr>
                    @endforeach
            </table>
        </div>
    </div>
</div>
@include('layouts.sidebar')
@include('layouts.footer')
@endsection


<script>
    $(function() {
        $('.active-button').change(function() {
            var status = $(this).prop('checked') == true ? 1 : 0;
            var user_id = $(this).data('id');

            $.ajax({
                type: "GET",
                dataType: "json",
                url: '/changeStatus',
                data: {
                    'status': status,
                    'user_id': user_id
                },
                success: function(data) {
                    console.log(data.success)
                }
            });
        })
    })
</script>