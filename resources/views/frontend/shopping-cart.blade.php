@extends('frontend.layout')


<section class="breadcrumb-inner breadcrumb-inner-page">
<div class="padding-left-right">	
<div class="container-fluid">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a></li>
<li class="breadcrumb-item active" aria-current="page">Balinese Massage by SPA TIME</li>
</ol>	
</div>
</div>	
</section>

<section class="services-listing details-page">
<div class="container text-center">
<h1 class="wow fadeInDown" data-wow-delay="0.2s" data-wow-duration="1.5s">Shopping Cart</h1>
<div class="cart-items-main">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 cart-row-title">
						<div class="cart-des">
							<h5 class="cart-desc">Description</h5>
						</div>
						<div class="cart-qnty-price">
							<div class="qntly">Qnty</div>
							<div class="price-kd">Price</div>
							<div class="delete-div">&nbsp;</div>
						</div>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 cart-row">
						<table width="100%" cellpadding="0" cellspacing="0">
							<tr>
								<td>
									<div class="cart-des">										
										<a href="images/products/product-04.png" data-fancybox="images" class="cart-img"><img src="images/products/product-04.png" alt="SPA-TIME"/>										
										</a>
										<div class="item-title-cart">Exotic Moisture Dew Facial
										</div>
										
									</div>
									<div class="cart-qnty-price">
							              <div class="plusminus-div">
								             <div class="plus-minus">
									             <a href="javascript:void(0);" class="minusBtn"><span>-</span></a>
									             <input type="text" class="form-control noValue" value="2">
									             <a href="javascript:void(0);" class="plusBtn"><span>+</span></a>
								             </div>
							              </div>
										<div class="price-kd price-kd-display">32.000 KD  </div>
										<div class="delete-div"><a href="javascript:void(0);" class="remove-del-item" title="Remove Item From Cart"><img src="images/trash.svg" alt="trash"></a></div>
									</div>
								</td>
							</tr>								
						</table>
					</div>
				
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 cart-row">
						<table width="100%" cellpadding="0" cellspacing="0">
							<tr>
								<td>
									<div class="cart-des">										
										<a href="images/products/product-07.png" data-fancybox="images" class="cart-img"><img src="images/products/product-07.png" alt="SPA-TIME"/>										
										</a>
										<div class="item-title-cart">Charcoal Deep Detox Scrub
										</div>
										
									</div>
									<div class="cart-qnty-price">
							              <div class="plusminus-div">
								             <div class="plus-minus">
									             <a href="javascript:void(0);" class="minusBtn"><span>-</span></a>
									             <input type="text" class="form-control noValue" value="2">
									             <a href="javascript:void(0);" class="plusBtn"><span>+</span></a>
								             </div>
							              </div>
										<div class="price-kd price-kd-display">24.000 KD  </div>
										<div class="delete-div"><a href="javascript:void(0);" class="remove-del-item" title="Remove Item From Cart"><img src="images/trash.svg" alt="trash"></a></div>
									</div>
								</td>
							</tr>								
						</table>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 rd-point-total">
						<div class="line-gold"></div>
                        <div class="form-group discount-cont discount-cont-inner">
		                <button class="button">APPLY</button>
		                <div class="inputbox"><input type="text" class="form-control" placeholder="Enter Coupon Code" value=""></div>
	                    </div>
						
						<div class="row d-flex justify-content-center text-center shopping-cart-total-discount">
						<div class="col-6 col-lg-3 col-md-8">
					    <h5>Cart Total</h5> 
						</div>
						<div class="col-6 col-lg-3 col-md-4">
					    <h6>56.00 KWD</h6> 
						</div>	
						</div>
						<div class="row d-flex justify-content-center text-center shopping-cart-total-discount">
						<div class="col-6 col-lg-3 col-md-8">
					    <h5>Coupon Discount</h5> 
						</div>
						<div class="col-6 col-lg-3 col-md-4">
					    <h6>5.00 KWD</h6> 
						</div>	
						</div>
	<hr>
					<div class="cart-row cart-total">Grand Total : <span class="price-amt">51.400</span> KD</div>
					<div class="cart-btn-div"><a href="{{route('checkOut')}}" class="black-button">Check Out Now</a></div>
					</div>	
				</div>
			</div>	
</div>	
</section>				
