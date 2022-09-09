@extends('frontend.layout')

@section('content')
<section class="breadcrumb-inner breadcrumb-inner-page">
<div class="padding-left-right">	
<div class="container-fluid">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
<li class="breadcrumb-item active" aria-current="page">Login</li>
</ol>	
</div>
</div>	
</section>

<section class="login-page details-page">
<div class="padding-left-right">
<div class="container-fluid">
<!--<h1 class="wow fadeInDown" data-wow-delay="0.2s" data-wow-duration="1.5s">Login</h1>-->	
<div class="row">
<div class="col-lg-6">
</div>

<div class="col-lg-6 col-md-12 col-sm-12">
<div class="login-part">
<div id="loginModel">
	<span><img src="images/spa-time-new.svg" class="img-fluid"></span>
	<h2 class="anim1">Login</h2>
	<p class="anim2">If you already have a Spa Time account, submit your personal information to sign in.</p>

    <form method="POST" action="{{ route('login') }}">
                        @csrf
	<div class="form-group anim3 username-password">
        <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Mobile / Email" value="{{ old('email') }}" autocomplete="email" autofocus/>

        @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

    </div>
	<div class="form-group anim3 username-password">
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password"  autocomplete="current-password"/>

        @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
    </div>

	<div class="form-group anim4">
        <button type="submit" class="button-line button-line-login-page">
        <a>Sign In</a></button>
         <a href="javascript:void(0);" class="forgot-link">Forgot Password?</a>
    </div>
	
    <div class="forgot-main">
                <div class="form-group">
                    <div class="forgot-div">
                <input type="text" class="form-control" placeholder="Enter mobile or email" value=""/>
                <button type="submit" class="button-line button-line-login-page-reset">Reset Password</button>
            </div>
            </div>
            </div>
                <p class="forgot-reg anim5">
                    <span>Create an account on Spa Time.com to share and save your selection.</span> 
                    <a href="{{route('register')}}" class="register-spa-time-btn">Register</a>
                </p>
</div>
</div>
</div>	
</div>
</div>
</div>	
</section>				

@endsection
