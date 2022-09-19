@extends('frontend.layout')

<section class="breadcrumb-inner breadcrumb-inner-page">
    <div class="padding-left-right">
        <div class="container-fluid">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"> Our Services</li>
            </ol>
        </div>
    </div>
</section>

<section class="services-listing">
<div class="padding-left-right">
<div class="container">
		<div class="row wow fadeInUp">
			<div class="col-12 carousel-div">
				<h1 class="wow fadeInDown" data-wow-delay="0.2s" data-wow-duration="1.5s">Our Services</h1>
				<div class="subsnavi-container-main tabs wow fadeInDown" data-wow-delay="0.4s" data-wow-duration="1s">
					<div class="subsNaviContainer swiper-container">
						<div class="swiper-wrapper navigate text-center">
							<div class="swiper-slide scrollmove"><a href="javascript:void(0);" role="1" class="active">Massages</a></div>
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
									<h3>Balinese Massage by SPA TIME <span class="spa-price">29 KD | 24 KD</span></h3>
									<p>The Ultimate Relaxing Therapy & Immunity Boost </p>	
									</div>
									<div class="service-right1"><a class="btn btn-view-details-arrow" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"><img src="images/arrow-down.svg" class="img-fluid"></a>	
									</div>
									<div class="collapse collapse-details spa-collapse-details" id="collapseExample">
                                    <div class="card card-body">
									<!--<ul class="unstyled select-prep-time anim5">
		                            <li>
			                        <input class="styled-checkbox-time" id="balinese1" name="time" type="radio" value="">
			                        <label for="balinese1"><span>90 Mins</span></label>
		                            </li>
		                            <li>
			                        <input class="styled-checkbox-time" id="Balinese2" name="time" type="radio" value="">
			                        <label for="Balinese2"><span>60 Mins</span></label>
		                            </li>
	                                </ul>-->	
									<div class="prepration-time">
									<div class="row">	
                                    <div class="col-6 col-lg-8 col-md-7 col-sm-6">
                                    <a href="#booknow" data-fancybox="" class="btn btn-selection-next black-button"> Add To Cart</a>
                                    </div>
									<div class="col-6 col-lg-4 col-md-5 col-sm-6">
                                    <a class="btn btn-view-details black-button" href="gifts-voucher.html">Gifts</a>
                                    </div>
									</div>	
									</div>	
									<p><strong style="font-style:italic;">Recommendation: 1 treatment / week</strong></p>
									<p>Although Balinese massage is popular everywhere, SPA TIME has upgraded this massage and re-modified strokes & movements in this medium pressure massage for the ultimate relaxation and for the Immunity Boost. During which specialized strokes are applied with the aromatic oils to reduce stress in order to release tension and stimulate blood circulation to eliminate fatigue and to strengthen immunity to improve ability to resist microbes. This immuno-boost massage begins without the use of oil in order to warm the body and then flows into an oil massage. Various blends of oils are used depending on the needs of the client.</p>	
                                    </div>
									</div>	
								</div>
								<div class="service-title-dtl">
									<div class="service-left">
									<h3>Sport Remedial Massage<span class="spa-price">29 KD | 24 KD</span></h3>
									<p>To Soothe Muscles Tensions – Medium to Deep Pressure</p>
									</div>
									<div class="service-right1"><a class="btn btn-view-details-arrow" data-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample"><img src="images/arrow-down.svg" class="img-fluid"></a>	
									</div>
									<div class="collapse collapse-details spa-collapse-details" id="collapseExample1">
                                    <div class="card card-body">
									<!--<ul class="unstyled select-prep-time anim5">
		                            <li>
			                        <input class="styled-checkbox-time" id="sport1" name="time" type="radio" value="">
			                        <label for="sport1"><span>90 Mins</span></label>
		                            </li>
		                            <li>
			                        <input class="styled-checkbox-time" id="sport2" name="time" type="radio" value="">
			                        <label for="sport2"><span>60 Mins</span></label>
		                            </li>
	                                </ul>-->	
									<div class="prepration-time">
									<div class="row">	
                                    <div class="col-6 col-lg-8 col-md-7 col-sm-6">
                                    <a href="#booknow" data-fancybox="" class="btn btn-selection-next black-button"> Add To Cart</a>
                                    </div>
									<div class="col-6 col-lg-4 col-md-5 col-sm-6">
                                    <a class="btn btn-view-details black-button" href="gifts-voucher.html">Gifts</a>
                                    </div>
									</div>	
									</div>	
									<p><strong style="font-style:italic;">Recommendation: 1 treatment / 2 weeks</strong></p>
									<p>A massage technique targeting the whole body with emphasis on large muscle groups such as thighs, lower back and back muscles. This massage releases the sluggish blood flow and toxins that gather in tired overworked muscles resulting in increased circulation and warm muscles preventing strains and relieving aches and pains.</p>
                                    </div>
									</div>
									</div>
							        </li>
							<li>
								<div class="service-title-dtl">
									<div class="service-left">
									<h3>Lomi Lomi Massage <span class="spa-price">29 KD</span></h3>
									<p>The Ultimate Relaxing Therapy & Immunity Boost </p>	
									</div>
									<div class="service-right1"><a class="btn btn-view-details-arrow" data-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample"><img src="images/arrow-down.svg" class="img-fluid"></a>	
									</div>
									<div class="collapse collapse-details spa-collapse-details" id="collapseExample2">
                                    <div class="card card-body">
									<!--<ul class="unstyled select-prep-time anim5">
		                            <li>
			                        <input class="styled-checkbox-time" id="lomi1" name="time" type="radio" value="">
			                        <label for="lomi1"><span>90 Mins</span></label>
		                            </li>
	                                </ul>-->	
									<div class="prepration-time">
									<div class="row">	
                                    <div class="col-6 col-lg-8 col-md-7 col-sm-6">
                                    <a href="#booknow" data-fancybox="" class="btn btn-selection-next black-button"> Add To Cart</a>
                                    </div>
									<div class="col-6 col-lg-4 col-md-5 col-sm-6">
                                    <a class="btn btn-view-details black-button" href="gifts-voucher.html">Gifts</a>
                                    </div>
									</div>	
									</div>
                                    <p><strong style="font-style:italic;">Uses both forearms – The Queen of Remedies</strong></p>
									<p>Hawaiian healers believed that illness results from suppressed emotions, mental disturbance, disharmony and tension caused by blocked energy within the body. “ Lomi Lomi” means the forearms in Hawaii, which are used primarily in this technique to focus on dispersing energy blockages by way of moving the palm, thumbs, knuckles and forearms in rhythmic, dance-like sweeping motion. This massage improves circulation, reduces muscle tension, stimulates the removal of impurities from the body and is especially useful to aid recovery from injury to the ligaments and tendons while it releases you from anxiety, worry and fear.</p>	
                                    </div>
									</div>	
								</div>
								<div class="service-title-dtl">
									<div class="service-left">
									<h3>Thai Massage by SPA TIME<span class="spa-price">29 KD | 24 KD</span></h3>
									<p>To Soothe Muscles Tensions – Medium to Deep Pressure</p>
									</div>
									<div class="service-right1"><a class="btn btn-view-details-arrow" data-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample"><img src="images/arrow-down.svg" class="img-fluid"></a>	
									</div>
									<div class="collapse collapse-details spa-collapse-details" id="collapseExample3">
                                    <div class="card card-body">
									<!--<ul class="unstyled select-prep-time anim5">
		                            <li>
			                        <input class="styled-checkbox-time" id="thai1" name="time" type="radio" value="">
			                        <label for="thai1"><span>90 Mins</span></label>
		                            </li>
		                            <li>
			                        <input class="styled-checkbox-time" id="thai2" name="time" type="radio" value="">
			                        <label for="thai2"><span>60 Mins</span></label>
		                            </li>
	                                </ul>-->	
									<div class="prepration-time">
									<div class="row">	
                                    <div class="col-6 col-lg-8 col-md-7 col-sm-6">
                                    <a href="#booknow" data-fancybox="" class="btn btn-selection-next black-button"> Add To Cart</a>
                                    </div>
									<div class="col-6 col-lg-4 col-md-5 col-sm-6">
                                    <a class="btn btn-view-details black-button" href="gifts-voucher.html">Gifts</a>
                                    </div>
									</div>	
									</div>	
									<p><strong style="font-style:italic;">Uses both forearms – The Queen of Remedies</strong></p>
									<p>Hawaiian healers believed that illness results from suppressed emotions, mental disturbance, disharmony and tension caused by blocked energy within the body. “ Lomi Lomi” means the forearms in Hawaii, which are used primarily in this technique to focus on dispersing energy blockages by way of moving the palm, thumbs, knuckles and forearms in rhythmic, dance-like sweeping motion. This massage improves circulation, reduces muscle tension, stimulates the removal of impurities from the body and is especially useful to aid recovery from injury to the ligaments and tendons while it releases you from anxiety, worry and fear.</p>
                                    </div>
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
									<h3>Herbal Lavender Repair Facial <span class="spa-price">32 KD</span></h3>
									<p>For Combination and Oily skin</p>	
									</div>
									<div class="service-right1"><a class="btn btn-view-details-arrow" data-toggle="collapse" href="#collapseExample4" role="button" aria-expanded="false" aria-controls="collapseExample"><img src="images/arrow-down.svg" class="img-fluid"></a>	
									</div>
									<div class="collapse collapse-details spa-collapse-details" id="collapseExample4">
                                    <div class="card card-body">
									<!--<ul class="unstyled select-prep-time anim5">
		                            <li>
			                        <input class="styled-checkbox-time" id="herbal1" name="time" type="radio" value="">
			                        <label for="herbal1"><span>75 Mins</span></label>
		                            </li>
	                                </ul>-->	
									<div class="prepration-time">
									<div class="row">	
                                    <div class="col-6 col-lg-8 col-md-7 col-sm-6">
                                    <a href="#booknow" data-fancybox="" class="btn btn-selection-next black-button"> Add To Cart</a>
                                    </div>
									<div class="col-6 col-lg-4 col-md-5 col-sm-6">
                                    <a class="btn btn-view-details black-button" href="gifts-voucher.html">Gifts</a>
                                    </div>
									</div>	
									</div>	
									<p><strong style="font-style:italic;">Recommendation 1 Treatment / 2 weeks</strong></p>
									<p>Cellular Recovery Skin Bliss Capsules delivering the highest concentration of the Tanzanian Antioxidant-Moringa Oil, are used in this gentle and effective cleansing & toning therapy. Combining exceptional skin conditioning plant actives with premium grade Essential Oils, thoroughly deep-cleanse and remove everyday impurities without aggression. Specialized Eastern Face Massage helps to leave your skin fresh, nourished & moisturized, whilst renewing radiance. These Moringa-Rich Capsules help counteract the damaging effect of pollution. Herbal Lavender Mask is then applied to balance and calm sensitive, blemish prone skin. Clarifying and soothing Rosemary, Thyme and Lavender Essential Oils are blended with Kaolin to purify dull, blemished and congested complexions. You may experience an active tingling sensation as the mask gently but deeply cleanses, rebalances and nourishes.</p>	
                                    </div>
									</div>	
								</div>
								<div class="service-title-dtl">
									<div class="service-left">
									<h3>S.O.S. Purify Skin Calm Facial<span class="spa-price">44 KD</span></h3>
									<p>For Oily and Congested Face & Eyes – uses 2 Masks</p>
									</div>
									<div class="service-right1"><a class="btn btn-view-details-arrow" data-toggle="collapse" href="#collapseExample5" role="button" aria-expanded="false" aria-controls="collapseExample"><img src="images/arrow-down.svg" class="img-fluid"></a>	
									</div>
									<div class="collapse collapse-details spa-collapse-details" id="collapseExample5">
                                    <div class="card card-body">
									<!--<ul class="unstyled select-prep-time anim5">
		                            <li>
			                        <input class="styled-checkbox-time" id="sos1" name="time" type="radio" value="">
			                        <label for="sos1"><span>90 Mins</span></label>
		                            </li>
	                                </ul>-->	
									<div class="prepration-time">
									<div class="row">	
                                    <div class="col-6 col-lg-8 col-md-7 col-sm-6">
                                    <a href="#booknow" data-fancybox="" class="btn btn-selection-next black-button"> Add To Cart</a>
                                    </div>
									<div class="col-6 col-lg-4 col-md-5 col-sm-6">
                                    <a class="btn btn-view-details black-button" href="gifts-voucher.html">Gifts</a>
                                    </div>
									</div>	
									</div>	
									<p><strong style="font-style:italic;">Recommendation: 1 treatment / 3 weeks</strong></p>
									<p>This powerful purifying face treatment helps to absorb excess sebum, regulate and balance the function of the skin, whilst helping to repair scarring. Purifying massage techniques & Skin Buff Scrub combined with the unique Hydra Active Soothing Gel Mask for Face & Eye help to calm irritated skin and rebalance oil-rich pores, followed by a second Herbal Lavender Mask, leaving a beautiful matt skin. This Specialized Eastern treatment is further enhanced by a luxurious hand, arm and de-stress scalp massage for the ultimate advanced skin-therapy.</p>
                                    </div>
									</div>
									</div>
							        </li>
							<li>
								<div class="service-title-dtl">
									<div class="service-left">
									<h3>Visible Active Brilliance Facial <span class="spa-price">44 KD</span></h3>
									<p>For Ageing and Stressed Face & Eyes – uses 2 Masks</p>	
									</div>
									<div class="service-right1"><a class="btn btn-view-details-arrow" data-toggle="collapse" href="#collapseExample6" role="button" aria-expanded="false" aria-controls="collapseExample"><img src="images/arrow-down.svg" class="img-fluid"></a>	
									</div>
									<div class="collapse collapse-details spa-collapse-details" id="collapseExample6">
                                    <div class="card card-body">
									<!--<ul class="unstyled select-prep-time anim5">
		                            <li>
			                        <input class="styled-checkbox-time" id="visible1" name="time" type="radio" value="">
			                        <label for="visible1"><span>90 Mins</span></label>
		                            </li>
	                                </ul>-->	
									<div class="prepration-time">
									<div class="row">	
                                    <div class="col-6 col-lg-8 col-md-7 col-sm-6">
                                    <a href="#booknow" data-fancybox="" class="btn btn-selection-next black-button"> Add To Cart</a>
                                    </div>
									<div class="col-6 col-lg-4 col-md-5 col-sm-6">
                                    <a class="btn btn-view-details black-button" href="gifts-voucher.html">Gifts</a>
                                    </div>
									</div>
									</div>	
                                    <p><strong style="font-style:italic;">Recommended as 1 treatment every 3 weeks – Course of 6</strong></p>
									<p>Hawaiian healers believed that illness results from suppressed emotions, mental disturbance, disharmony and tension caused by blocked energy within the body. “ Lomi Lomi” means the forearms in Hawaii, which are used primarily in this technique to focus on dispersing energy blockages by way of moving the palm, thumbs, knuckles and forearms in rhythmic, dance-like sweeping motion. This massage improves circulation, reduces muscle tension, stimulates the removal of impurities from the body and is especially useful to aid recovery from injury to the ligaments and tendons while it releases you from anxiety, worry and fear.</p>	
                                    </div>
									</div>	
								</div>
								<div class="service-title-dtl">
									<div class="service-left">
									<h3>Exotic Moisture Dew Facial<span class="spa-price">32 KD</span></h3>
									<p>For Dull & Dry Skin</p>
									</div>
									<div class="service-right1"><a class="btn btn-view-details-arrow" data-toggle="collapse" href="#collapseExample7" role="button" aria-expanded="false" aria-controls="collapseExample"><img src="images/arrow-down.svg" class="img-fluid"></a>	
									</div>
									<div class="collapse collapse-details spa-collapse-details" id="collapseExample7">
                                    <div class="card card-body">
									<!--<ul class="unstyled select-prep-time anim5">
		                            <li>
			                        <input class="styled-checkbox-time" id="excotic1" name="time" type="radio" value="">
			                        <label for="excotic1"><span>75 Mins</span></label>
		                            </li>
	                                </ul>-->	
									<div class="prepration-time">
									<div class="row">	
                                    <div class="col-6 col-lg-8 col-md-7 col-sm-6">
                                    <a href="#booknow" data-fancybox="" class="btn btn-selection-next black-button"> Add To Cart</a>
                                    </div>
									<div class="col-6 col-lg-4 col-md-5 col-sm-6">
                                    <a class="btn btn-view-details black-button" href="gifts-voucher.html">Gifts</a>
                                    </div>
									</div>	
									</div>	
									<p><strong style="font-style:italic;">Uses both forearms – The Queen of Remedies</strong></p>
									<p>Gentle cleansing & toning therapy recommended for dry skin. Using Rehydrating Set rich in essential minerals & Cellular Recovery Skin Bliss Capsules rich in Moringa Oil acting as nutritional boost designed to pack stressed, dull skin with energizing & renewing radiance. Gentle Rose Exfoliate Scrub & Exotic Cream Moisturizing Mask will work in harmony in this scientifically proven anti-aging therapy leading to healthy cell renewal while protecting against environmental skin damage.</p>
                                    </div>
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
									<h3>Body & Under Arm Glow Again <span class="spa-price">44 KD</span></h3>
									<p>For Un-deniably Glowing body</p>	
									</div>
									<div class="service-right1"><a class="btn btn-view-details-arrow" data-toggle="collapse" href="#collapseExample8" role="button" aria-expanded="false" aria-controls="collapseExample"><img src="images/arrow-down.svg" class="img-fluid"></a>	
									</div>
									<div class="collapse collapse-details spa-collapse-details" id="collapseExample8">
                                    <div class="card card-body">
									<!--<ul class="unstyled select-prep-time anim5">
		                            <li>
			                        <input class="styled-checkbox-time" id="glow1" name="time" type="radio" value="">
			                        <label for="glow1"><span>150 Mins</span></label>
		                            </li>
	                                </ul>-->	
									<div class="prepration-time">
									<div class="row">	
                                    <div class="col-6 col-lg-8 col-md-7 col-sm-6">
                                    <a href="#booknow" data-fancybox="" class="btn btn-selection-next black-button"> Add To Cart</a>
                                    </div>
									<div class="col-6 col-lg-4 col-md-5 col-sm-6">
                                    <a class="btn btn-view-details black-button" href="gifts-voucher.html">Gifts</a>
                                    </div>
									</div>	
									</div>	
									<p><strong style="font-style:italic;">Includes: Scrub, Mask, Underarm Detox & Massage</strong></p>
									<p>Scrub away your worries and mask your soul with happiness in one go. This magnificent Ritual is Body Scrub and Mask in one time for deeper nourishment and moisturizing to gain the undeniable skin glow. It includes a specialized Under Arm detoxification therapy, targeting the hidden area congested with old deodorant residues. The Under Arm is scrubbed & masked with white clay composed of guava leaf, liquorices and tamarind before it is soothed with Skin Toner for the optimum cleanliness. Simultaneously the Glow Again Nourishing Body Scrub & Mask containing Turmeric, Ylang Ylang & Lemongrass provide gentle body scrubs to remove old skin cells. This extract is left on the body to form the Glow-Again Mask which provide extensive nourishments resulting in bright and silky skin allowing you to glow-again followed by a luxurious relaxing massage with the finest oils.</p>		
                                    </div>
									</div>	
								</div>
								<div class="service-title-dtl">
									<div class="service-left">
									<h3>Romantic Mood Calming Ritual<span class="spa-price">44 KD</span></h3>
									<p>Calming Upset Mood</p>
									</div>
									<div class="service-right1"><a class="btn btn-view-details-arrow" data-toggle="collapse" href="#collapseExample9" role="button" aria-expanded="false" aria-controls="collapseExample"><img src="images/arrow-down.svg" class="img-fluid"></a>	
									</div>
									<div class="collapse collapse-details spa-collapse-details" id="collapseExample9">
                                    <div class="card card-body">
									<!--<ul class="unstyled select-prep-time anim5">
		                            <li>
			                        <input class="styled-checkbox-time" id="romantic1" name="time" type="radio" value="">
			                        <label for="romantic1"><span>150 Mins</span></label>
		                            </li>
	                                </ul>-->	
									<div class="prepration-time">
									<div class="row">	
                                    <div class="col-6 col-lg-8 col-md-7 col-sm-6">
                                    <a href="#booknow" data-fancybox="" class="btn btn-selection-next black-button"> Add To Cart</a>
                                    </div>
									<div class="col-6 col-lg-4 col-md-5 col-sm-6">
                                    <a class="btn btn-view-details black-button" href="gifts-voucher.html">Gifts</a>
                                    </div>
									</div>	
									</div>	
									<p><strong style="font-style:italic;">Without Tropical Bubble Bath 120min 38KD</strong></p>
									<p>When you are feeling down and need an urgent emotional uplift, this ritual is the remedy. It is an ancient tradition that re-awakens your senses, takes control of your emotion and balances your soul. Starts with a Tropical Bubble Bath to provide you with a sense of self-satisfaction and calm your upset mood. Then calms your tired body with Specialized Upgraded Balinese Massage for the ultimate satisfaction. Followed by a scrub with the finest aromatic oils scrubbing gel.</p>
                                    </div>
									</div>
									</div>
							        </li>
							<li>
								<div class="service-title-dtl">
									<div class="service-left">
									<h3>Dynamic Deep Detox Ritual <span class="spa-price">44 KD</span></h3>
									<p>To Purify& Adjust Skin PH</p>	
									</div>
									<div class="service-right1"><a class="btn btn-view-details-arrow" data-toggle="collapse" href="#collapseExample10" role="button" aria-expanded="false" aria-controls="collapseExample"><img src="images/arrow-down.svg" class="img-fluid"></a>	
									</div>
									<div class="collapse collapse-details spa-collapse-details" id="collapseExample10">
                                    <div class="card card-body">
									<!--<ul class="unstyled select-prep-time anim5">
		                            <li>
			                        <input class="styled-checkbox-time" id="dynamic1" name="time" type="radio" value="">
			                        <label for="dynamic1"><span>150 Mins</span></label>
		                            </li>
	                                </ul>-->	
									<div class="prepration-time">
									<div class="row">	
                                    <div class="col-6 col-lg-8 col-md-7 col-sm-6">
                                    <a href="#booknow" data-fancybox="" class="btn btn-selection-next black-button"> Add To Cart</a>
                                    </div>
									<div class="col-6 col-lg-4 col-md-5 col-sm-6">
                                    <a class="btn btn-view-details black-button" href="gifts-voucher.html">Gifts</a>
                                    </div>
									</div>
									</div>	
                                    <p><strong style="font-style:italic;">Includes Scrub, Mask, Underarm Detox & Massage</strong></p>
									<p>Total body dynamic detoxification ritual. Starts with deep skin exfoliation with Spice & Shine Gel Body Scrub followed by a cleansing mask formulated with Kaolin clay rich in Silica to adjust skin PH. Simultaneously a specialized Under Arm detoxification application with white clay composed of guava leaf, liquorices and tamarind removing old deodorant residues from this hidden area is performed . A Skin Toner is applied for the optimum cleanliness. This dynamic treatment allows Lymphatic drainage to get rid of toxins and impurities. The result is firmed, purified and thoroughly rejuvenated body. This ritual ends with a luxurious relaxing massage with the finest oils for the ultimate relaxation.</p>	
                                    </div>
									</div>	
								</div>
								<div class="service-title-dtl">
									<div class="service-left">
									<h3>'Plai' Body Brightening Ritual<span class="spa-price">44 KD</span></h3>
									<p>For Dull & Dry Skin</p>
									</div>
									<div class="service-right1"><a class="btn btn-view-details-arrow" data-toggle="collapse" href="#collapseExample11" role="button" aria-expanded="false" aria-controls="collapseExample"><img src="images/arrow-down.svg" class="img-fluid"></a>	
									</div>
									<div class="collapse collapse-details spa-collapse-details" id="collapseExample11">
                                    <div class="card card-body">
									<!--<ul class="unstyled select-prep-time anim5">
		                            <li>
			                        <input class="styled-checkbox-time" id="plai1" name="time" type="radio" value="">
			                        <label for="plai1"><span>150 Mins</span></label>
		                            </li>
	                                </ul>-->	
									<div class="prepration-time">
									<div class="row">	
                                    <div class="col-6 col-lg-8 col-md-7 col-sm-6">
                                    <a href="#booknow" data-fancybox="" class="btn btn-selection-next black-button"> Add To Cart</a>
                                    </div>
									<div class="col-6 col-lg-4 col-md-5 col-sm-6">
                                    <a class="btn btn-view-details black-button" href="gifts-voucher.html">Gifts</a>
                                    </div>
									</div>
									</div>	
									<p><strong style="font-style:italic;">Includes Scrub, Mask, Underarm Detox & Massage</strong></p>
									<p>An ancient beauty recipe providing brightening and nourishment with enriched cleansing mask of honey, Fresh Yogurt and ‘Plai’ (the Thai Ginger Root) which is left on the body to form a mask for deeper nourishment . Simultaneously a specialized Under Arm detoxification application with white clay composed of guava leaf, liquorices and tamarind removing old deodorant residues from this hidden area. A Skin Toner is applied for the skin to breath. The result is smooth, brightened and moisturized skin. This ritual ends with a luxurious relaxing massage with the finest oils.</p>
                                    </div>
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
									<h3>Charcoal Deep Detox Scrub <span class="spa-price">24 KD</span></h3>
									<p>For Un-deniably Glowing body</p>	
									</div>
									<div class="service-right1"><a class="btn btn-view-details-arrow" data-toggle="collapse" href="#collapseExample12" role="button" aria-expanded="false" aria-controls="collapseExample"><img src="images/arrow-down.svg" class="img-fluid"></a>	
									</div>
									<div class="collapse collapse-details spa-collapse-details" id="collapseExample12">
                                    <div class="card card-body">
									<!--<ul class="unstyled select-prep-time anim5">
		                            <li>
			                        <input class="styled-checkbox-time" id="charcoal1" name="time" type="radio" value="">
			                        <label for="charcoal1"><span>60 Mins</span></label>
		                            </li>
	                                </ul>-->	
									<div class="prepration-time">
									<div class="row">	
                                    <div class="col-6 col-lg-8 col-md-7 col-sm-6">
                                    <a href="#booknow" data-fancybox="" class="btn btn-selection-next black-button"> Add To Cart</a>
                                    </div>
									<div class="col-6 col-lg-4 col-md-5 col-sm-6">
                                    <a class="btn btn-view-details black-button" href="gifts-voucher.html">Gifts</a>
                                    </div>
									</div>	
									</div>	
									<p><strong style="font-style:italic;">Recommendation: 1 treatment / 3 weeks</strong></p>
									<p>Experience the benefits of this essential Charcoal Salt Scrub treatment that deeply detoxifies skin pores by binding to impurities and drag them out. Your skin will be thoroughly cleansed and re-energized with brilliant complexion leaving it clear, soft and nourished. After the scrub a natural herbal aromatic lotion is applied to leave you with a relaxing effect.</p>		
                                    </div>
									</div>	
								</div>
								<div class="service-title-dtl">
									<div class="service-left">
									<h3>Turmeric Stimulating Scrub<span class="spa-price">24 KD</span></h3>
									<p>For Healthy and Hydrated body</p>
									</div>
									<div class="service-right1"><a class="btn btn-view-details-arrow" data-toggle="collapse" href="#collapseExample13" role="button" aria-expanded="false" aria-controls="collapseExample"><img src="images/arrow-down.svg" class="img-fluid"></a>	
									</div>
									<div class="collapse collapse-details spa-collapse-details" id="collapseExample13">
                                    <div class="card card-body">
									<!--<ul class="unstyled select-prep-time anim5">
		                            <li>
			                        <input class="styled-checkbox-time" id="turmeric1" name="time" type="radio" value="">
			                        <label for="turmeric1"><span>60 Mins</span></label>
		                            </li>
	                                </ul>-->	
									<div class="prepration-time">
									<div class="row">	
                                    <div class="col-6 col-lg-8 col-md-7 col-sm-6">
                                    <a href="#booknow" data-fancybox="" class="btn btn-selection-next black-button"> Add To Cart</a>
                                    </div>
									<div class="col-6 col-lg-4 col-md-5 col-sm-6">
                                    <a class="btn btn-view-details black-button" href="gifts-voucher.html">Gifts</a>
                                    </div>
									</div>	
									</div>	
									<p><strong style="font-style:italic;">Recommendation: 1 treatment / 3 weeks</strong></p>
									<p>Turmeric is a natural antiseptic with anti-inflammatory properties and numerous benefits. This Turmeric Salt Scrub treatment reduces acne, removes bacteria from the skin, reduces dark circles, protects against sun damage and decrease age-appearing stretch marks. It is an excellent remedy to soothe skin dryness and to restore skin vitality to its natural look. It firms the skin while stimulating blood circulation. Following the scrub treatment a natural herbal aromatic lotion is applied to leave you with a relaxing effect.</p>
                                    </div>
									</div>
									</div>
							        </li>
							<li>
								<div class="service-title-dtl">
									<div class="service-left">
									<h3>Tamarind Whitening Scrub <span class="spa-price">24 KD</span></h3>
									<p>For Skin Whitening</p>	
									</div>
									<div class="service-right1"><a class="btn btn-view-details-arrow" data-toggle="collapse" href="#collapseExample14" role="button" aria-expanded="false" aria-controls="collapseExample"><img src="images/arrow-down.svg" class="img-fluid"></a>	
									</div>
									<div class="collapse collapse-details spa-collapse-details" id="collapseExample14">
                                    <div class="card card-body">
									<!--<ul class="unstyled select-prep-time anim5">
		                            <li>
			                        <input class="styled-checkbox-time" id="tamarind1" name="time" type="radio" value="">
			                        <label for="tamarind1"><span>60 Mins</span></label>
		                            </li>
	                                </ul>-->	
									<div class="prepration-time">
									<div class="row">	
                                    <div class="col-6 col-lg-8 col-md-7 col-sm-6">
                                    <a href="#booknow" data-fancybox="" class="btn btn-selection-next black-button"> Add To Cart</a>
                                    </div>
									<div class="col-6 col-lg-4 col-md-5 col-sm-6">
                                    <a class="btn btn-view-details black-button" href="gifts-voucher.html">Gifts</a>
                                    </div>
									</div>	
									</div>	
                                    <p><strong style="font-style:italic;">Recommendation: 1 treatment / 3 weeks</strong></p>
									<p>Asian treatment using natural Tamarind Salts rich in alpha hydroxy acids (AHA) that act as strong skin exfoliate. Tamarind Salt Scrub posses strong anti-aging effect to unclogs skin pores, reduces age-related spots to blemish and maintain the skin resulting in lighter complexion, fresher and whiter than before. Following the scrub treatment a natural herbal aromatic lotion is applied to leave you with a relaxing effect.</p>	
                                    </div>
									</div>	
								</div>
								<div class="service-title-dtl">
									<div class="service-left">
									<h3>Exotic Lime & Ginger Salt Scrub<span class="spa-price">24 KD</span></h3>
									<p>For cleansed and polished Skin</p>
									</div>
									<div class="service-right1"><a class="btn btn-view-details-arrow" data-toggle="collapse" href="#collapseExample15" role="button" aria-expanded="false" aria-controls="collapseExample"><img src="images/arrow-down.svg" class="img-fluid"></a>	
									</div>
									<div class="collapse collapse-details spa-collapse-details" id="collapseExample15">
                                    <div class="card card-body">
									<!--<ul class="unstyled select-prep-time anim5">
		                            <li>
			                        <input class="styled-checkbox-time" id="plaiginger1" name="time" type="radio" value="">
			                        <label for="plaiginger1"><span>60 Mins</span></label>
		                            </li>
	                                </ul>-->	
									<div class="prepration-time">
									<div class="row">	
                                    <div class="col-6 col-lg-8 col-md-7 col-sm-6">
                                    <a href="#booknow" data-fancybox="" class="btn btn-selection-next black-button"> Add To Cart</a>
                                    </div>
									<div class="col-6 col-lg-4 col-md-5 col-sm-6">
                                    <a class="btn btn-view-details black-button" href="gifts-voucher.html">Gifts</a>
                                    </div>
									</div>	
									</div>	
									<p><strong style="font-style:italic;">Recommendation: 1 treatment / 3 weeks</strong></p>
									<p>An exotic exfoliation ritual to invigorate and bring vitality to your body. After light body brush, warm oil is dripped luxuriously over your body before our Lime and Ginger Salt Scrub is applied. A mini facial scrub is done before your warm shower. Your body is intensively moisturized with Premium Nurturing Cream. Your skin will be deeply cleansed and moisturized leaving it glowing and vibrant while looking replenished and flawless.</p>
                                    </div>
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
									<h3>Back Massage <span class="spa-price">14 KD</span></h3>	
									</div>
									<div class="service-right1"><a class="btn btn-view-details-arrow" data-toggle="collapse" href="#collapseExample16" role="button" aria-expanded="false" aria-controls="collapseExample"><img src="images/arrow-down.svg" class="img-fluid"></a>	
									</div>
									<div class="collapse collapse-details spa-collapse-details" id="collapseExample16">
                                    <div class="card card-body">
									<!--<ul class="unstyled select-prep-time anim5">
		                            <li>
			                        <input class="styled-checkbox-time" id="back1" name="time" type="radio" value="">
			                        <label for="back1"><span>30 Mins</span></label>
		                            </li>
	                                </ul>-->	
									<div class="prepration-time">
									<div class="row">	
                                    <div class="col-6 col-lg-8 col-md-7 col-sm-6">
                                    <a href="#booknow" data-fancybox="" class="btn btn-selection-next black-button"> Add To Cart</a>
                                    </div>
									<div class="col-6 col-lg-4 col-md-5 col-sm-6">
                                    <a class="btn btn-view-details black-button" href="gifts-voucher.html">Gifts</a>
                                    </div>
									</div>	
									</div>	
									<p><strong style="font-style:italic;">Recommended with Sport Remedial Massage</strong></p>
									<p>Focusing purely on the back and shoulder area to relieve tension and aching muscles, the fundamental elements of the relaxing massage are experienced in this mini-massage.</p>			
                                    </div>
									</div>	
								</div>
								<div class="service-title-dtl">
									<div class="service-left">
									<h3>Underarm Detox & Whitening Therapy<span class="spa-price">14 KD</span></h3>
									</div>
									<div class="service-right1"><a class="btn btn-view-details-arrow" data-toggle="collapse" href="#collapseExample17" role="button" aria-expanded="false" aria-controls="collapseExample"><img src="images/arrow-down.svg" class="img-fluid"></a>	
									</div>
									<div class="collapse collapse-details spa-collapse-details" id="collapseExample17">
                                    <div class="card card-body">
									<!--<ul class="unstyled select-prep-time anim5">
		                            <li>
			                        <input class="styled-checkbox-time" id="underarm1" name="time" type="radio" value="">
			                        <label for="underarm1"><span>30 Mins</span></label>
		                            </li>
	                                </ul>-->	
									<div class="prepration-time">
									<div class="row">	
                                    <div class="col-6 col-lg-8 col-md-7 col-sm-6">
                                    <a href="#booknow" data-fancybox="" class="btn btn-selection-next black-button"> Add To Cart</a>
                                    </div>
									<div class="col-6 col-lg-4 col-md-5 col-sm-6">
                                    <a class="btn btn-view-details black-button" href="gifts-voucher.html">Gifts</a>
                                    </div>
									</div>	
									</div>	
									<p><strong style="font-style:italic;">Recommended with Body Scrubs</strong></p>
									<p>The underarm area, always hidden or covered with clothes that can be an overlooked part of the body where the skin becomes congested with old deodorant residues blocking the follicles. This area is scrubbed with Spice and Shine Gel rich with Vitamins & Tamarind. An Underarm Detox Mask rich in Tamarind and clay mousse is then applied to exfoliate and remove sweat toxins and red of residues. A soothing Underarm Skin Toner is later applied allowing a feel of optimum cleanliness and letting the underarm skin to breath, it is indeed an absolute under arm whitening therapy. This superior treatment is further enhanced by a luxurious leg massage for the ultimate advanced detoxification.</p>
                                    </div>
									</div>
									</div>
							        </li>
							    <li>
								<div class="service-title-dtl">
									<div class="service-left">
									<h3>Exotic Enriching Milk Bath <span class="spa-price">12 KD</span></h3>	
									</div>
									<div class="service-right1"><a class="btn btn-view-details-arrow" data-toggle="collapse" href="#collapseExample18" role="button" aria-expanded="false" aria-controls="collapseExample"><img src="images/arrow-down.svg" class="img-fluid"></a>	
									</div>
									<div class="collapse collapse-details spa-collapse-details" id="collapseExample18">
                                    <div class="card card-body">
									<!--<ul class="unstyled select-prep-time anim5">
		                            <li>
			                        <input class="styled-checkbox-time" id="milk1" name="time" type="radio" value="">
			                        <label for="milk1"><span>30 Mins</span></label>
		                            </li>
	                                </ul>-->	
									<div class="prepration-time">
									<div class="row">	
                                    <div class="col-6 col-lg-8 col-md-7 col-sm-6">
                                    <a href="#booknow" data-fancybox="" class="btn btn-selection-next black-button"> Add To Cart</a>
                                    </div>
									<div class="col-6 col-lg-4 col-md-5 col-sm-6">
                                    <a class="btn btn-view-details black-button" href="gifts-voucher.html">Gifts</a>
                                    </div>
									</div>	
									</div>	
                                    <p><strong style="font-style:italic;">Recommended with Balinese Massage</strong></p>
									<p>Rediscover the child within yourself as you are immersed in this sweet rich Exotic Enriching milk bath. Just as Cleopatra loved to bathe in milk, now you too can indulge in this pleasure. This unique bath leaves your skin feeling nourished, soft and smelling wonderfully. Pure Bliss.</p>	
                                    </div>
									</div>	
								</div>
								<div class="service-title-dtl">
									<div class="service-left">
									<h3>Warming Ocean Bath<span class="spa-price">12 KD</span></h3>
									</div>
									<div class="service-right1"><a class="btn btn-view-details-arrow" data-toggle="collapse" href="#collapseExample19" role="button" aria-expanded="false" aria-controls="collapseExample"><img src="images/arrow-down.svg" class="img-fluid"></a>	
									</div>
									<div class="collapse collapse-details spa-collapse-details" id="collapseExample19">
                                    <div class="card card-body">
									<!--<ul class="unstyled select-prep-time anim5">
		                            <li>
			                        <input class="styled-checkbox-time" id="warming1" name="time" type="radio" value="">
			                        <label for="warming1"><span>30 Mins</span></label>
		                            </li>
	                                </ul>-->	
									<div class="prepration-time">
									<div class="row">	
                                    <div class="col-6 col-lg-8 col-md-7 col-sm-6">
                                    <a href="#booknow" data-fancybox="" class="btn btn-selection-next black-button"> Add To Cart</a>
                                    </div>
									<div class="col-6 col-lg-4 col-md-5 col-sm-6">
                                    <a class="btn btn-view-details black-button" href="gifts-voucher.html">Gifts</a>
                                    </div>
									</div>	
									</div>	
									<p><strong style="font-style:italic;">Recommended with Balinese Massage</strong></p>
									<p>Discover the healing and energizing effect of sea water, combined with the powerful muscle warming synergy of sea salts. Renew your sense of wellness and escape from the world, inspiring dreams to the sound of the sea.</p>
                                    </div>
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
									<h3>SPA TIME Pre-Wedding Signatures<span class="spa-price">115 KD</span></h3>	
									</div>
									<div class="service-right1"><a class="btn btn-view-details-arrow" data-toggle="collapse" href="#collapseExample20" role="button" aria-expanded="false" aria-controls="collapseExample"><img src="images/arrow-down.svg" class="img-fluid"></a>	
									</div>
									<div class="collapse collapse-details spa-collapse-details" id="collapseExample20">
                                    <div class="card card-body">
									<!--<ul class="unstyled select-prep-time anim5">
		                            <li>
			                        <input class="styled-checkbox-time" id="prewedding1" name="time" type="radio" value="">
			                        <label for="prewedding1"><span>3.30 hrs</span></label>
		                            </li>
	                                </ul>-->	
									<div class="prepration-time">
									<div class="row">	
                                    <div class="col-6 col-lg-8 col-md-7 col-sm-6">
                                    <a href="#booknow" data-fancybox="" class="btn btn-selection-next black-button"> Add To Cart</a>
                                    </div>
									<div class="col-6 col-lg-4 col-md-5 col-sm-6">
                                    <a class="btn btn-view-details black-button" href="gifts-voucher.html">Gifts</a>
                                    </div>
									</div>	
									</div>	
									<p>Embark on a journey of tranquillity & luxury. From head to toe you will be immersed into a pampering magic of Specialized Massage, Exclusive Scrub & Mask personally prescribed to your skin, Herbal Back Cleanse, Underarm Detox & Whitening Therapy to ensure you walk up the aisle with beautiful, glowing skin. Complimentary Gifts are included perfect for your new home.</p>	
                                    </div>
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