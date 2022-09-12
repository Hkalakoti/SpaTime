@extends('layouts.app')

<body>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                @if ($data->is_admin == 1)
               <p>  it's working </p>

               <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('You are logged in admin!') }}
                </div>
            </div>
            @elseif ($data->is_admin == 0)
            <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('You are logged in user!') }}
                </div>
                @endif
        </div>
    </div>
</div>
@endsection
@include('layouts.sidebar')
</body>
@include('layouts.footer')


