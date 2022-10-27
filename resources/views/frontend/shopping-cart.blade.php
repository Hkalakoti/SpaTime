@extends('frontend.layout')

<section class="breadcrumb-inner breadcrumb-inner-page">
	<div class="padding-left-right">
		<div class="container-fluid">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
				<li class="breadcrumb-item active" aria-current="page">SPA TIME</li>
			</ol>
		</div>
	</div>
</section>

@include('flash-messages')
<section class="services-listing details-page">
	<div class="container text-center">
		<h1 class="wow fadeInDown" data-wow-delay="0.2s" data-wow-duration="1.5s">Shopping Cart</h1>
		<div class="cart-items-main">
			<div class="row">
				<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 cart-row-title">
					<div class="cart-des">
						<h5 class="cart-desc">Product</h5>
					</div>
					<div class="cart-qnty-price">
						<div class="qntly">Quantity</div>
						<div class="price-kd">Price</div>
						<div class="delete-div">&nbsp;</div>
					</div>
				</div>
				@if(count($data) > 0)
				@foreach ($data as $row)
				<div class="col-lg-12 col-md-11 col-sm-11 col-xs-11 cart-row" id="delete-{{$row['id']}}">
					<table width="100%" cellpadding="0" cellspacing="0">
						<tr>
							<td>
								<div class="cart-des">
									<a href="{{ url('public/Image/'.$row['product']['image']) }}" data-fancybox="images" class="cart-img">
										<img src="{{ url('public/Image/'.$row['product']['image']) }}" alt="SPA-TIME" />
									</a>
									<div class="item-title-cart">{{$row['product']['name']}}</div>
								</div>

								<div class="cart-qnty-price">
									<div class="plusminus-div">
										<div class="plus-minus">

											<!-- sending parameters to the below JS functions respectively: decvtn and incbtn -->
											<button onclick="decbtn('<?php echo $row['product']['id'] ?>','<?php echo $row['product']['price'] ?>')" id="minusBtn" class="minusBtn"><span>-</span></button>

											<input readonly type="text" class="form-control noValue" id="{{$row['product']['id']}}" value="1">

											<button onclick="incbtn('<?php echo $row['product']['id'] ?>','<?php echo $row['product']['price'] ?>')" id="plusBtn" class="plusBtn"><span>+</span></button>
										</div>
									</div>
									<div id="finalPrice-<?php echo $row['product']['id'] ?>" class="price-kd price-kd-display">{{ $row['product']['price'] }} KWD
									</div>

									<div class="delete-div">
										<button onclick="update('<?php echo $row['id'] ?>')" class="remove-del-item" title="Remove Item From Cart" id="delete_id"><a>
												<img src="{{asset('images/trash.svg')}}" alt="trash"></a></button>
									</div>
								</div>

							</td>
						</tr>
					</table>
				</div>

				@endforeach
				@else
				<br>
				<h6 style="margin-left: 45%;"> Your cart is empty </h6>
				<br>
				@endif


				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 rd-point-total">
					<div class="line-gold"></div>
					<div class="form-group discount-cont discount-cont-inner">
						<!-- <button class="button">APPLY</button> -->
						<label> Choose a coupon (if any):</label> <br><br>
							<div class="form-group">
								<select class="form-control" id="apply-coupon" style="width: 100%; text-align: center;" onclick="coupon()">
									<option>Select Coupon</option>
									@foreach($coupon as $row)
									<option value="{{$row->id}}">
										{{$row->code}}
										@endforeach
								</select>
							</div>
					</div>

					<div class="row d-flex justify-content-center text-center shopping-cart-total-discount">
						<div class="col-6 col-lg-3 col-md-8">

							<h5>Cart Total</h5>
						</div>

						<div class="col-6 col-lg-3 col-md-4">

							@php
							$total = 0
							@endphp

							@foreach ($data as $row )
							@php
							$total += $row['product']['price']

							@endphp
							@endforeach
							<h6 id="total-price"> {{ $total }} <?php echo "KWD" ?> </h6>
						</div>
					</div>

					<div class="row d-flex justify-content-center text-center shopping-cart-total-discount">
						<div class="col-6 col-lg-3 col-md-8">
							<h5>Coupon Discount</h5>
						</div>
						@php
						$discount= 0;
						@endphp
						<div class="col-6 col-lg-3 col-md-4">
							<h6 style="display:inline" id="coupon-discount">0 </h6> <span> KWD </span>
						</div>
					</div>
					<hr>

					<div class="cart-row cart-total"> Sub Total : <span class="price-amt" id="sub-total"> {{$total}} </span> KWD </div>
					<div class="cart-btn-div">
						<a href="{{route('check_out')}}" class="black-button"> Check Out Now </a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<script>
	function update(delete_id) {
		const ele = document.getElementById('delete-' + delete_id)
		$.ajax({
			type: 'GET',
			url: "{{route('cartDestroy')}}",
			data: {
				id: delete_id
			},
			success: function(error) {
				alert('item deleted');
				ele.remove()
			}
		});
	}
	
	function decbtn(productId, price) {

		let val = $("#" + productId).val();
		if (val <= 1) {
			val = 1;
		} else {
			val = val - 1;
			handleTotalPrice(-price)
		}
		const currentPrice = price * val;
		$("#finalPrice-" + productId).html(currentPrice + ' KWD');
	}

	function incbtn(productId, price) {
		let val = $("#" + productId).val();

		val = parseInt(val) + 1;
		const currentPrice = price * val;

		$("#finalPrice-" + productId).html(currentPrice + ' KWD');
		handleTotalPrice(price)
	}

	function handleTotalPrice(givenPrice) {
		let tPrice = $('#total-price')
		let newPrice = parseInt(tPrice.html()) + parseInt(givenPrice)
		tPrice.html(newPrice + " KWD")

		let couponDiscount = $('#coupon-discount').html()

		let subTotalPrice = $('#sub-total')

		subTotalPrice.html(newPrice - parseInt(couponDiscount))


	}

	function coupon() {
		let arr = <?php echo $coupon ?>;

		let val = $("#apply-coupon").val();

		let isfound = arr.filter(item => item.id === parseInt(val))

		if (isfound) {
			let couponDiscount = $('#coupon-discount');

			let discount = couponDiscount.html(parseInt(isfound[0].amount))

			let tPrice = $('#total-price')

			let tempPrice = tPrice.html().replace("KWD","")

			let subTotalPrice = $('#sub-total')

			subTotalPrice.html(parseInt(tempPrice) - parseInt(isfound[0].amount))

		}
	}
</script>