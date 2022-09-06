@extends('frontend.layout')


@section('content')
<form>
@csrf
<div class="col-lg-6 col-md-12 col-sm-12">
<div class="login-part">
<div id="signupModal" class="">
	<span><img src="images/spa-time-new.svg" class="img-fluid"></span>
	<h2 class="anim1">Sign Up</h2>
	<p class="anim2">Create an account on Spa Time.com to share and save your selection.</p>
	<div class="reg-form">
	<div class="form-group anim3">
	<input type="name" class="form-control" placeholder="Full Name..." value=""/>
	</div>
	<div class="form-group anim4">
	<input type="text" class="form-control" placeholder="Mobile Number..." value=""/>
	</div>
	<div class="form-group anim4">
	<input type="email" class="form-control" placeholder="Email Address..." value=""/>
	</div>	
	<div class="form-group anim5">
	<input type="password" class="form-control" placeholder="Password" value=""/>
	</div>
	<div class="form-group anim5">
	<input type="password" class="form-control" placeholder="Confirm password" value=""/>
	</div>	
	<div class="form-group anim6 signup-btn"><button type="submit" class="button-line">Sign Up</button> <p class="forgot-reg already-mem"><span>Already member?</span> <a href="login.html">Login</a></p></div>
	</div>
</div>




</form>
@endsection