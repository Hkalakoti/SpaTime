@extends('frontend.layout')

<section class="breadcrumb-inner breadcrumb-inner-page">
    <div class="padding-left-right">
        <div class="container-fluid">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
            </ol>
        </div>
    </div>
</section>

<section class="services-listing confirmation-page">

    <div class="padding-left-right">
        <div class="container text-center">
            <h1 class="wow fadeInLeft" data-wow-duration="1.5s">CONTACT US</h1>
            <form id="regnFrm" name="regnFrm" class="clearfix" method="post" novalidate="" action="{{route('contact_us')}}">
                @csrf

                <div class="form-group-contact row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <label for="FirstName" class="form-label">First Name</label>
                        <div class="inputbox">
                            <input type="text" class="form-control" id="FirstName" name="fname">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <label for="LastName" class="form-label">Last Name</label>
                        <div class="inputbox">
                            <input type="text" class="form-control" id="LastName" name="lname">
                        </div>
                    </div>
                </div>
                <div class="form-group-contact row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <label for="Phone" class="form-label">Phone</label>
                        <div class="inputbox">
                            <input type="text" class="form-control" id="Phone" name="phone">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <label for="Email" class="form-label">Email</label>
                        <div class="inputbox">
                            <input type="text" class="form-control" id="email" name="email">
                        </div>
                    </div>
                </div>
                <div class="form-group-contact row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <label for="Email" class="form-label">Message</label>
                        <div class="inputbox">
                            <textarea class="form-control" id="textarea" name="message" rows="3" placeholder="Write your Message here..."></textarea>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-light btn-lg submit-btn-contact">Submit</button>
                </div>
            </form>
        </div>
    </div>

    <div>
        <form>

            ABC

        </form>

    </div>
</section>

<section class="section section-location wow fadeInUp">
    <div class="padding-left-right">
        <div class="container">
            <h1 class="wow fadeInLeft" data-wow-duration="1.5s"> Our Locations </h1>
            <div class="row">
                <div class="col-lg-6 col-md-6 store-box">
                    <div class="product-store">
                        <div class="product-locator-img"><img src="images/avenues.jpg" alt="products"></div>
                        <div class="store-dtl">
                            <h2>The Avenues</h2>
                            <p>Phase-2, Level-1</p>
                            <p><a href="javascript:void(0)"> Get Directions <i class="fas fa-map-marker-alt map-marker"></i></a></p>
                            <p>Phone:</p><span><a href="tel:+96522628010">+965 22628010</a><br><a href="tel:+96522629010">+965 22629010</a></span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 store-box">
                    <div class="product-store">
                        <div class="product-locator-img"><img src="images/al-mohalab.jpg" alt="products"></div>
                        <div class="store-dtl">
                            <h2>Al-Mohallab Mall</h2>
                            <p>1st Floor</p>
                            <p><a href="javascript:void(0)">Get Directions <i class="fas fa-map-marker-alt map-marker"></i></a></p>
                            <p>Phone:</p><span><a href="tel:+96522628010">+965 22628010</a><br><a href="tel:+96522629010">+965 22629010</a></span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 store-box">
                    <div class="product-store">
                        <div class="product-locator-img"><img src="images/kipco.jpg" alt="products"></div>
                        <div class="store-dtl">
                            <h2>Kipco Tower</h2>
                            <p>38th Floor</p>
                            <p><a href="javascript:void(0)">Get Directions <i class="fas fa-map-marker-alt map-marker"></i></a></p>
                            <p>Phone:</p><span><a href="tel:+96522943210">+965 22943210</a><br><a href="tel:+96522943220">+965 22943220</a></span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 store-box">
                    <div class="product-store">
                        <div class="product-locator-img"><img src="images/al-kout.jpg" alt="products"></div>
                        <div class="store-dtl">
                            <h2>Al-Kout Mall</h2>
                            <p>Phase-16, Level-1, Gate-18</p>
                            <p><a href="javascript:void(0)">Get Directions <i class="fas fa-map-marker-alt map-marker"></i></a></p>
                            <p>Phone:</p><span><a href="tel:+96522286333">+965 22286333</a><br><a href="tel:+96522286287">+965 22286287</a></span>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</section>

<section class="footer-main wow fadeInUp">
<div class="padding-left-right">
<div class="container">	
<div class="row d-flex justify-content-center text-center">

<div class="col-12 col-lg-4 col-md-6 col-sm-12">
<div class="footer-info">
<!--<h3>Quick Links</h3>-->	
<img src="images/spa-time-new.svg" class="img-fluid spatime-footer" alt="SPA-TIME">	
</div>
<div class="newsletter">
<div class="newsletter-sub"><input type="text" name="" id="" class="form-control" placeholder="Enter Your email here"><button class="button">Subscribe</button></div>
</div>	
</div>	
	
<div class="col-12 col-lg-4 col-md-6 col-sm-12">
<div class="footer-info">
<div class="row d-flex justify-content-center text-center">
<div class="col-6 col-lg-6 col-md-6 col-sm-6 col-footer-links">	
<ul class="footer-link">
<!--<h6>Quick Links</h6>-->	
<li><a href="javascript:void(0)">Massage</a></li>
<li><a href="javascript:void(0)">Facials</a></li>
<li><a href="javascript:void(0)">Body Treatment</a></li>
<li><a href="javascript:void(0)">Body Scrub</a></li>
<li><a href="javascript:void(0)">Additional Programs</a></li> 
<li><a href="javascript:void(0)">Bridal</a></li> 	
</ul>
</div>
<div class="col-6 col-lg-6 col-md-6 col-sm-6">	
<ul class="footer-link">
<!--<h6>My Account</h6>-->	
<li><a href="javascript:void(0)">My Account</a></li>
<li><a href="javascript:void(0)">Checkout</a></li>
<li><a href="javascript:void(0)">Cart</a></li>
<li><a href="javascript:void(0)">Gift Voucher</a></li>	
</ul>
</div>	
</div>
<div class="col-12 social-links">
<ul class="social aos-init" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1800">
    <li class="d-inline">
    <a href="javascript:void (0)" target="_blank"><i class="fab fa-instagram img-social img-instagram"></i></a>
    </li>
    <li class="d-inline">
    <a href="javascript:void (0)" target="_blank"><i class="fab fa-facebook-square img-social img-facebook"></i></a>
    </li>
	<li class="d-inline">
    <a href="javascript:void (0)" target="_blank"><i class="fab fa-twitter img-social img-twitter"></i></a>
    </li>	
    <li class="d-inline">
    <a href="javascript:void (0)" target="_blank"><i class="fab fa-youtube img-social img-youtube"></i></a>
    </li>
	
</ul>
</div>	
</div>
</div>	
	
<div class="col-lg-4 col-md-12 col-sm-12">
<div class="footer-info">
<!--<h3>Instagram</h3>-->
<div class="instagram-feed">	
<div class="row no-gutters">
	      <div class="col-12 col-sm-12 col-md-6 col-lg-6">
			  <div class="row no-gutters">
				<div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="insta-thumb">
                        <img src="images/insta-feed/insta-01.png" class="img-fluid" alt="GUST">
                    </div>	
				</div>
				<div class="col-6 col-sm-6 col-md-6 col-lg-6">
                    <div class="insta-thumb">
                    <img src="images/insta-feed/insta-03.png" class="img-fluid" alt="GUST">
                    </div>	
				</div>	
				<div class="col-6 col-sm-6 col-md-6 col-lg-6">
                    <div class="insta-thumb">
                    <img src="images/insta-feed/insta-04.png" class="img-fluid" alt="GUST">
                    </div>	
				</div>
	            </div>
	            </div>
				<div class="col-12 col-sm-12 col-md-6 col-lg-6 insta-mobile-hide">
				<div class="row no-gutters">
				<div class="col-6 col-sm-6 col-md-6 col-lg-6">
                    <div class="insta-thumb">
                    <img src="images/insta-feed/insta-05.png" class="img-fluid" alt="GUST">
                    </div>	
					</div>
					<div class="col-6 col-sm-6 col-md-6 col-lg-6">
                    <div class="insta-thumb">
                    <img src="images/insta-feed/insta-06.png" class="img-fluid" alt="GUST">
                    </div>	
					</div>		
					<div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="insta-thumb">
                       <img src="images/insta-feed/insta-02.png" class="img-fluid" alt="GUST">
                    </div>	
				</div>	
				</div>
					
			</div>
			</div>
</div>
</div>
</div>	
	
</div>
<hr style="border-color: #fff;">	
</div>
</div>
</section>

