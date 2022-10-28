@extends('frontend.layout')

<body>
	@if ($data->status == 1)
	<section class="banner-main">
		<div class="bxslider bxslider-mobile-hide">
			<div>
				<img src="{{asset(url('public/Image/'.$data->image))}}" class="img-fluid" alt="">
				<div class="banner-text">
					<h3> {{$data->name}} </h3>
					<p> {{$data->description}} </p>
					<div class="banner-btns">
						<a href="services-listing.html" class="rituals-btn black-button">View Rituals</a>
						<a href="gifts-voucher.html" class="gifts-btn black-button">Gift Vouchers</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	@endif

	<section class="section services-main wow fadeInUp">
		<div class="padding-left-right">
			<div class="container text-center">
				<div class="row wow fadeInUp">
					<div class="col-12 carousel-div">
						<div class="spa-iconx text-center">
							<img src="images/iconx.png" class="img-fluid">
							<h1>Our Services</h1>
						</div>
						<div class="subsnavi-container-main tabs wow fadeInDown" data-wow-delay="0.4s" data-wow-duration="1s">
							<div class="subsNaviContainer swiper-container">
								<div class="swiper-wrapper navigate text-center">
									<div class="swiper-slide scrollmove">
										<a href="javascript:void(0);" role="1" class="active">Massages</a></div>
									<div class="swiper-slide scrollmove"><a href="javascript:void(0);" role="2">Facial</a></div>
									<div class="swiper-slide scrollmove"><a href="javascript:void(0);" role="3">Body Treatments</a></div>
									<div class="swiper-slide scrollmove"><a href="javascript:void(0);" role="4">Body Scrubs</a></div>
									<div class="swiper-slide scrollmove"><a href="javascript:void(0);" role="5">Additional Program</a></div>
									<div class="swiper-slide scrollmove"><a href="javascript:void(0);" role="6">Bridal Program</a></div>
								</div>
							</div>
							<!-- Add Pagination -->
							<div class="swiper-button-next subs-navi-button-next"><i class="fa fa-caret-right"></i></div>
							<div class="swiper-button-prev subs-navi-button-prev"><i class="fa fa-caret-left"></i></div>
						</div>
						<div class="special-pricing tabs-container wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1.5s">
							<div class="tabs-cont" id="1">
								<ul class="service-list">
									<li>
										<div class="service-title-dtl">
											<div class="service-left">
												<h3>Balinese Massage by SPA TIME</h3>
											</div>
										</div>
										<div class="service-title-dtl">
											<div class="service-left">
												<h3>Sport Remedial Massage</h3>
											</div>
										</div>
									</li>
									<li>
										<div class="service-title-dtl">
											<div class="service-left">
												<h3>Lomi Lomi Massage</h3>
											</div>
										</div>
										<div class="service-title-dtl">
											<div class="service-left">
												<h3>Thai Massage by SPA TIME</h3>
											</div>
										</div>
									</li>

								</ul>
							</div>
							<div class="tabs-cont" id="2">
								<ul class="service-list">
									<li>
										<div class="service-title-dtl">
											<div class="service-left">
												<h3>Herbal Lavender Repair Facial</h3>
											</div>
										</div>
										<div class="service-title-dtl">
											<div class="service-left">
												<h3>S.O.S. Purify Skin Calm Facial</h3>
											</div>
										</div>
									</li>
									<li>
										<div class="service-title-dtl">
											<div class="service-left">
												<h3>Visible Active Brilliance Facial</h3>
											</div>
										</div>
										<div class="service-title-dtl">
											<div class="service-left">
												<h3>Exotic Moisture Dew Facial</h3>
											</div>
										</div>
									</li>

								</ul>
							</div>
							<div class="tabs-cont" id="3">
								<ul class="service-list">
									<li>
										<div class="service-title-dtl">
											<div class="service-left">
												<h3>Body & Under Arm Glow Again</h3>
											</div>
										</div>
										<div class="service-title-dtl">
											<div class="service-left">
												<h3>Romantic Mood Calming Ritual</h3>
											</div>
										</div>
									</li>
									<li>
										<div class="service-title-dtl">
											<div class="service-left">
												<h3>Dynamic Deep Detox Ritual</h3>
											</div>
										</div>
										<div class="service-title-dtl">
											<div class="service-left">
												<h3>'Plai' Body Brightening Ritual</h3>
											</div>
										</div>
									</li>

								</ul>
							</div>
							<div class="tabs-cont" id="4">
								<ul class="service-list">
									<li>
										<div class="service-title-dtl">
											<div class="service-left">
												<h3>Charcoal Deep Detox Scrub</h3>
											</div>
										</div>
										<div class="service-title-dtl">
											<div class="service-left">
												<h3>Turmeric Stimulating Scrub</h3>
											</div>
										</div>
									</li>
									<li>
										<div class="service-title-dtl">
											<div class="service-left">
												<h3>Tamarind Whitening Scrub</h3>
											</div>
										</div>
										<div class="service-title-dtl">
											<div class="service-left">
												<h3>Exotic Lime & Ginger Salt Scrub</h3>
											</div>
										</div>
									</li>

								</ul>
							</div>
							<div class="tabs-cont" id="5">
								<ul class="service-list">
									<li>
										<div class="service-title-dtl">
											<div class="service-left">
												<h3>Back Massage</h3>
											</div>
										</div>
										<div class="service-title-dtl">
											<div class="service-left">
												<h3>Underarm Detox & Whitening Therapy</h3>
											</div>
										</div>
									</li>
									<li>
										<div class="service-title-dtl">
											<div class="service-left">
												<h3>Exotic Enriching Milk Bath </h3>
											</div>
										</div>
										<div class="service-title-dtl">
											<div class="service-left">
												<h3>Warming Ocean Bath</h3>
											</div>
										</div>
									</li>

								</ul>
							</div>
							<div class="tabs-cont" id="6">
								<ul class="service-list">
									<li>
										<div class="service-title-dtl">
											<div class="service-left">
												<h3>SPA TIME Pre-Wedding Signatures</h3>
											</div>
										</div>
									</li>

								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section class="section section-deals wow fadeInUp">
		<div class="container-fluid container-gifts">
			<div class="row no-gutters">
				<div class="col-lg-6 col-md-12">
					<div class="deals-gift-col">
						<h1>Gifts </h1>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
						<span><a class="section-deals-gifts black-button" href="gifts-voucher.html">View Gifts</a></span>
					</div>
				</div>
				<div class="col-lg-6 col-md-12">
					<a href="javascript:void(0)">
						<img src="images/spa-time-gift.png" class="img-fluid" alt="">
					</a>
				</div>
			</div>
		</div>
		<img src="images/lady-gifts.png" class="img-fluid section-deals-mobile-img">
	</section>

	<section class="section section-deals-mobile wow fadeInUp">
		<img src="images/spa-time-gift.png" class="img-fluid" alt="">
	</section>

	<!-- new arrival -->
	<section class="section new-arrival-main wow fadeInUp">
		<!--<div class="arrival-left"><img src="images/arrival-left.png" class="img-fluid" alt="Arrival"></div>-->
		<div class="padding-left-right">
			<div class="container">
				<div class="spa-iconx text-center">
					<img src="images/iconx.png" class="img-fluid">
					<h1>Our Products</h1>
				</div>
				<div class="col-12 products-listing-section">
					<div class="pt owl-carousel product-carousel">
						<div class="item">
							<div class="products-block">
								<div class="products-block-in">
									<a href="products-listing.html">
										<div class="products-holder wow fadeInUp" data-wow-delay="0.2s">
											<div class="products-img"><img src="images/products/product-01.png" alt="products" />
											</div>
										</div>
									</a>
								</div>
								<span class="products">Category - 1</span>
							</div>
						</div>

						<div class="item">
							<div class="products-block">
								<div class="products-block-in">
									<a href="products-listing.html">
										<div class="products-holder wow fadeInUp" data-wow-delay="0.2s">
											<div class="products-img"><img src="images/products/product-02.png" alt="products" />
											</div>
										</div>
									</a>
								</div>
								<span class="products">Category - 2</span>
							</div>
						</div>

						<div class="item">
							<div class="products-block">
								<div class="products-block-in">
									<a href="products-listing.html">
										<div class="products-holder wow fadeInUp" data-wow-delay="0.2s">
											<div class="products-img"><img src="images/products/product-03.png" alt="products" />
											</div>
										</div>
									</a>
								</div>
								<span class="products">Category - 3</span>
							</div>
						</div>

						<div class="item">
							<div class="products-block">
								<div class="products-block-in">
									<a href="products-listing.html">
										<div class="products-holder wow fadeInUp" data-wow-delay="0.2s">
											<div class="products-img"><img src="images/products/product-04.png" alt="products" />
											</div>
										</div>
									</a>
								</div>
								<span class="products">Category - 4</span>
							</div>
						</div>

						<div class="item">
							<div class="products-block">
								<div class="products-block-in">
									<a href="products-listing.html">
										<div class="products-holder wow fadeInUp" data-wow-delay="0.2s">
											<div class="products-img"><img src="images/products/product-05.png" alt="products" />
											</div>
										</div>
									</a>
								</div>
								<span class="products">Category - 5</span>
							</div>
						</div>

						<div class="item">
							<div class="products-block">
								<div class="products-block-in">
									<a href="products-listing.html">
										<div class="products-holder wow fadeInUp" data-wow-delay="0.2s">
											<div class="products-img"><img src="images/products/product-06.png" alt="products" />
											</div>
										</div>
									</a>
								</div>
								<span class="products">Category - 6</span>
							</div>
						</div>
					</div>
					<div class="text-center"><a class="btn btn-book-now-products black-button" href="products-listing.html" role="button">Explore</a></div>
				</div>
			</div>
		</div>
		<!--<div class="arrival-right"><img src="images/arrival-right.png" class="img-fluid" alt="Arrival"></div>-->
	</section>

	<!-- location -->
	<section class="section section-location wow fadeInUp">
		<div class="padding-left-right">
			<div class="container">
				<div class="spa-iconx text-center">
					<img src="images/iconx.png" class="img-fluid">
					<h1>Find Us</h1>
				</div>
				<div class="row">
					<div class="col-lg-6 col-md-6 store-box">
						<div class="product-store">
							<div class="product-locator-img"><img src="images/avenues.jpg" alt="products"></div>
							<div class="store-dtl">
								<h2>The Avenues</h2>
								<p>Phase-2, Level-1</p>
								<p><a href="javascript:void(0)">Get Directions <i class="fas fa-map-marker-alt map-marker"></i></a></p>
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

	<!-- footer -->
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

	<!-- <div class="shape-popup-wrapper"></div> -->
	<!-- <div class="shape-quick-wrapper"></div>	 -->

	<script src="js/jquery.bxslider.min.js"></script>

	<script>
		$(function() {
			$('.bxslider').bxSlider({
				mode: 'vertical',
				auto: false,
				controls: true,
				captions: false,
				autoHover: true,
				speed: 2000,
				pause: 4000,
				touchEnabled: false
			});
		});
	</script>

	<script src="js/owl.carousel.js"></script>
	<script>
		jQuery(document).ready(function($) {
			$('.whatsnew').owlCarousel({
				items: 1,
				loop: true,
				autoplay: true,
				margin: 10,
			});

			$('.tp').owlCarousel({
				loop: true,
				margin: 24,
				autoplay: true,
				nav: true,
				dots: false,
				responsiveClass: true,
				responsive: {
					0: {
						items: 3,
						nav: true
					},
					600: {
						items: 5,
						nav: true
					},
					1000: {
						items: 5,
					}
				}
			});

			$('.pt').owlCarousel({
				loop: true,
				margin: 24,
				autoplay: true,
				nav: true,
				dots: false,
				responsiveClass: true,
				responsive: {
					0: {
						items: 1,
						nav: true
					},
					600: {
						items: 3,
						nav: true
					},
					1000: {
						items: 4,
					}
				}
			});
		});
	</script>
	<!-- Carousel -->


	<!-- BANNER -->
	<script>
		$('#buttonsearch').click(function() {
			$('#formsearch').slideToggle("fast", function() {
				$('#content').toggleClass("moremargin");
			});
			$('#searchbox').focus()
			$('.openclosesearch').toggle();
		});
	</script>
	<script>
		$(document).ready(function() {
			$(".search .search__btn").click(function() {
				$(".search").addClass("search--visible");
			});
			$(document).on("click", function(e) {
				if ($(e.target).closest(".search").length === 0) {
					$(".search").removeClass("search--visible");
				}
			});
		});
	</script>

</body>

</html>