@extends('frontend.layout')

@section('content')
<section class="login-page details-page">
<div class="padding-left-right">
<div class="container-fluid">
<!--<h1 class="wow fadeInDown" data-wow-delay="0.2s" data-wow-duration="1.5s">Login</h1>-->	
<div class="row">
<div class="col-lg-6">
</div>
<div class="col-lg-6 col-md-12 col-sm-12">
<div class="login-part">
<div id="signupModal" class="">
	<span><img src="images/spa-time-new.svg" class="img-fluid"></span>
	<h2 class="anim1">Sign Up</h2>
	<p class="anim2">Create an account on Spa Time.com to share and save your selection.</p>

    <form method="POST" action="{{ route('register') }}">
    @csrf

	<div class="reg-form">
	<div class="form-group anim3">
	<input id="name" type="name" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Full Name..." value="{{ old('name') }}" required autocomplete="name" autofocus />
    
    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

    </div>
	<div class="form-group anim4">
	<input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" placeholder="Mobile Number..." value="{{old('phone')}}"/>
    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
    </div>
	<div class="form-group anim4">
	<input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email Address..." value="{{ old('email') }}" required autocomplete="email"/>
	
    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
    </div>	
	<div class="form-group anim5">
	<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="new-password"/>
	

    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

    </div>
	<div class="form-group anim5">
	<input id="password-confirm" type="password" class="form-control" placeholder="Confirm password" name="password_confirmation" required autocomplete="new-password"/>
	</div>	
	<div class="form-group anim6 signup-btn"><button type="submit" class="button-line">Sign Up</button> 
    <p class="forgot-reg already-mem">
        <span>Already member?</span>
         <a href="{{route('login')}}">Login</a>
        </p>
    </div>
	</div>
</div>
</div>
</div>	
</div>
</div>
</div>	
</section>
@endsection
