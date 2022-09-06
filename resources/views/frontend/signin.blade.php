@extends('frontend.layout')

@section('content')

<div id="loginModel">
	<span><img src="images/spa-time-new.svg" class="img-fluid"></span>
	<h2 class="anim1">Login</h2>
	<p class="anim2">If you already have a Spa Time account, submit your personal information to sign in.</p>

<form method="POST" action="{{ route('test')}}" >
@csrf
This is a form


    <div class="form-group anim3 username-password"><input type="text" class="form-control" placeholder="Mobile / Email" value=""/>
    </div>
	<div class="form-group anim3 username-password"><input type="password" class="form-control" placeholder="Password" value=""/>
</div>
	<div class="form-group anim4">
        <button type="submit" class="button-line button-line-login-page">Sign In</a></button> 
        <a href="javascript:void(0);" class="forgot-link">Forgot Password?</a>
    </div>
	<div class="forgot-main">
	<div class="form-group"><div class="forgot-div">
        <input type="text" class="form-control" placeholder="Enter mobile or email" value=""/>
        <button type="submit" class="button-line button-line-login-page-reset">Reset Password</button>
    </div></div>
	</div>
	<p class="forgot-reg anim5"><span>Create an account on Spa Time.com to share and save your selection.</span>
     <a href="{{route('signup')}}" class="register-spa-time-btn">Register</a></p>
</div>
</div>
</div>	




</form>

@endsection