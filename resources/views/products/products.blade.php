@extends('frontend.layout')

<section class="breadcrumb-inner breadcrumb-inner-page">
	<div class="padding-left-right">
		<div class="container-fluid">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
				<li class="breadcrumb-item active" aria-current="page">{{$data->first()->name}} by SPA TIME</li>
			</ol>
		</div>
	</div>
</section>


<section class="services-listing details-page">
	<div class="padding-left-right">
		<div class="container-fluid text-center">
			<h1 class="wow fadeInDown" data-wow-delay="0.2s" data-wow-duration="1.5s">{{$data->name}}</h1>
			<div class="row">
				<div class="col-lg-5 col-md-12 col-sm-12">
					<div class="gallery-main">
						<div class="swiper-container gallery-top">
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<div class="gallery-large" data-src="images/details/01.jpg" data-fancybox="gallery">
										<img src="images/details/01.jpg" alt="gallery">
									</div>
								</div>

								<div class="swiper-slide">
									<div class="gallery-large" data-src="images/details/02.jpg" data-fancybox="gallery">
										<img src="images/details/02.jpg" alt="gallery">
									</div>
								</div>

								<div class="swiper-slide">
									<div class="gallery-large" data-src="images/details/03.jpg" data-fancybox="gallery">
										<img src="images/details/03.jpg" alt="gallery">
									</div>
								</div>

								<div class="swiper-slide">
									<div class="gallery-large" data-src="images/details/04.jpg" data-fancybox="gallery">
										<img src="images/details/04.jpg" alt="gallery">
									</div>
								</div>

								<div class="swiper-slide">
									<div class="gallery-large" data-src="images/details/05.jpg" data-fancybox="gallery">
										<img src="images/details/05.jpg" alt="gallery">
									</div>
								</div>

								<div class="swiper-slide">
									<div class="gallery-large" data-src="images/details/06.jpg" data-fancybox="gallery">
										<img src="images/details/06.jpg" alt="gallery">
									</div>
								</div>

								<div class="swiper-slide">
									<div class="gallery-large" data-src="images/details/01.jpg" data-fancybox="gallery">
										<img src="images/details/01.jpg" alt="gallery">
									</div>
								</div>

								<div class="swiper-slide">
									<div class="gallery-large" data-src="images/details/02.jpg" data-fancybox="gallery">
										<img src="images/details/02.jpg" alt="gallery">
									</div>
								</div>

								<div class="swiper-slide">
									<div class="gallery-large" data-src="images/details/03.jpg" data-fancybox="gallery">
										<img src="images/details/03.jpg" alt="gallery">
									</div>
								</div>

								<div class="swiper-slide">
									<div class="gallery-large" data-src="images/details/04.jpg" data-fancybox="gallery">
										<img src="images/details/04.jpg" alt="gallery">
									</div>
								</div>

								<div class="swiper-slide">
									<div class="gallery-large" data-src="images/details/05.jpg" data-fancybox="gallery">
										<img src="images/details/05.jpg" alt="gallery">
									</div>
								</div>
								<!--<div class="swiper-slide"><iframe width="100%" height="720" src="https://www.youtube.com/embed/ot0ih9zDZBo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>-->
							</div>
							<div class="swiper-button-next gallery-button-next"></div>
							<div class="swiper-button-prev gallery-button-prev"></div>
						</div>
					</div>

					<div class="gallery-thumnail-gallery">
						<div class="thumnail-gallery">
							<div class="swiper-container gallery-thumbs">
								<div class="swiper-wrapper">
									<div class="swiper-slide"><img src="images/details/01.jpg" alt="gallery"></div>
									<div class="swiper-slide"><img src="images/details/02.jpg" alt="gallery"></div>
									<div class="swiper-slide"><img src="images/details/03.jpg" alt="gallery"></div>
									<div class="swiper-slide"><img src="images/details/04.jpg" alt="gallery"></div>
									<div class="swiper-slide"><img src="images/details/05.jpg" alt="gallery"></div>
									<div class="swiper-slide"><img src="images/details/06.jpg" alt="gallery"></div>
									<div class="swiper-slide"><img src="images/details/01.jpg" alt="gallery"></div>
									<div class="swiper-slide"><img src="images/details/02.jpg" alt="gallery"></div>
									<div class="swiper-slide"><img src="images/details/03.jpg" alt="gallery"></div>
									<div class="swiper-slide"><img src="images/details/04.jpg" alt="gallery"></div>
								</div>
							</div>
						</div>
						
						<div class="swiper-button-next thumbs-button-next"></div>
						<div class="swiper-button-prev thumbs-button-prev"></div>
					</div>
				</div>

				<div class="col-lg-7 col-md-12 col-sm-12">
					<div class="product-description">
						<h2>{{$data->first()->name}} by SPA TIME</h2>
						<div class="price-detail">180 KWD</div>

						<h4>Select Size</h4>
						<ul class="unstyled select-delivery select-qty-spa-time anim5">
							<li>
								<input class="styled-checkbox" id="qty1" name="time" type="radio" value="">
								<label for="qty1"><span>100 ML</span></label>
							</li>
							<li>
								<input class="styled-checkbox" id="qty2" name="time" type="radio" value="">
								<label for="qty2"><span>150 ML</span></label>
							</li>
						</ul>

						<h4>Description</h4>
						<p>Although Balinese massage is popular everywhere, SPA TIME has upgraded this massage and re-modified strokes & movements in this medium pressure massage for the ultimate relaxation and for the Immunity Boost. During which specialized strokes are applied with the aromatic oils to reduce stress in order to release tension and stimulate blood circulation to eliminate fatigue and to strengthen immunity to improve ability to resist microbes. This immuno-boost massage begins without the use of oil in order to warm the body and then flows into an oil massage. Various blends of oils are used depending on the needs of the client.</p>

						<div class="add-to-favourite"><a href="javascript:void(0);" class="add-to-favourite-link fav-detail-btn featured-button-container w-313"><span class="featured-button-line"></span></a></div>
						<div class="cart-buy-btns"><button class="button detail-addtocart w-153"><a href="shopping-cart.html">Add to Cart</a></button> <button class="button detail-addtocart w-153"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"></path>
								</svg> Add to Wishlist</button></div>

					</div>
				</div>
			</div>
		</div>
	</div>
</section>

