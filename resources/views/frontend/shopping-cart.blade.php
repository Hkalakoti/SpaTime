@extends('frontend.layout')
@include('flash-messages')
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
				@php
				$total = 0;
				@endphp
				@foreach($data as $id => $row)
				@php
				$total += $row['product']['price'] * $row['quantity'];
				@endphp
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 cart-row">
					<table width="100%" cellpadding="0" cellspacing="0">
						<tbody>
							<tr>
								<td>
									<div class="cart-des">
										<a href="{{ url('public/Image/'.$row['product']['image']) }}" data-fancybox="images" class="cart-img"><img src="{{ url('public/Image/'.$row['product']['image']) }}" alt="SPA-TIME">
										</a>
										<div class="item-title-cart">{{$row['product']['name']}}</div>
									</div>
									<div class="cart-qnty-price">
										<div class="plusminus-div">
											<div class="plus-minus">
												<a onclick="update(<?php echo $row['id'] ?>,<?php echo $row['quantity'] - 1 ?>,<?php echo $row['product_id'] ?>)" class="minusBtn"><span>-</span></a>
												<input type="text" class="form-control noValue" value="{{$row['quantity']}}">
												<a onclick="update(<?php echo $row['id'] ?>,<?php echo $row['quantity'] + 1 ?>,<?php echo $row['product_id'] ?>)" class="plusBtn"><span>+</span></a>
											</div>
										</div>
										<div class="price-kd price-kd-display">{{$row['product']['price'] * $row['quantity']}} KWD </div>
										<div class="delete-div">
											<a id="delete" class="remove-del-item" title="Remove Item From Cart"><img src="images/trash.svg" alt="trash"></a>
											<input type="hidden" id="delete-id" value="{{$row['id']}}">
										</div>
									</div>
								</td>
							</tr>
						</tbody>
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
								<option selected>Select Coupon</option>
								@php
								$test = 0;
								@endphp
								@foreach($coupon as $row)
								<option id="coupon_id" value="{{$row->id}}">
									@php
									$test = $row;
									@endphp
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
							<h6 id="total-price"> {{ $total }} <?php echo "KWD" ?> </h6>
						</div>
					</div>
					<div class="row d-flex justify-content-center text-center shopping-cart-total-discount">
						<div class="col-6 col-lg-3 col-md-8">
							<h5>Coupon Discount</h5>
						</div>

						<div class="col-6 col-lg-3 col-md-4">
							<h6 style="display:inline" id="coupon-discount"> 0 </h6> <span> KWD </span>
						</div>
					</div>
					<hr>
					@foreach ($data as $row )
					@php
					$subTotal = 0;
					$subTotal += $total;
					@endphp
					@endforeach
					<!-- onclick="couponSend()" -->
					<?php #echo $subTotal?>, <?php #echo $coupon[0]['amount']?>
					<div class="cart-row cart-total"> Sub Total : <span id="sub-total">{{ $subTotal }}</span> KWD </div>
					<div class="cart-btn-div">
						<button>
							<a href="{{route('check_out')}}" class="black-button"> Check Out Now </a>
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<script>
	$("#delete").click(function(e) {
		e.preventDefault();
		var ele = $(this);
		var del_id = $('#delete-id').val()
		if (confirm("Are you sure want to remove?")) {
			$.ajax({
				url: "{{ route('cartDestroy') }}",
				method: "GET",
				data: {
					_token: '{{ csrf_token() }}',
					id: del_id
				},
				success: function(response) {
					window.location.reload();
				}
			});
		}
	});

	function update(id, quantity, product_id) {
		console.log(id, quantity, product_id)
		$.ajax({
			url: "{{ route('cartUpdate') }}",
			method: "GET",
			data: {
				_token: '{{ csrf_token() }}',
				id: id,
				quantity: quantity,
				product_id: product_id,
			},
			success: function(response) {
				window.location.reload();
			}
		});
	}


	function coupon() {
		let arr = <?php echo $coupon ?>; //should be defined globally
		let val = $("#apply-coupon").val();
		let isfound = arr.filter(item => item.id === parseInt(val))

		if (isfound) {
			let couponDiscount = $('#coupon-discount');
			let discount = couponDiscount.html(parseInt(isfound[0].amount))
			let tPrice = $('#total-price')
			let tempPrice = tPrice.html().replace("KWD", "")
			let subTotalPrice = $('#sub-total')

			subTotalPrice.html(parseInt(tempPrice) - parseInt(isfound[0].amount))
			// couponSend(subTotalPrice, discount);
		}
	}

	function couponSend(subTotalPrice, discount) {

		// let checkoutSubtotal = subTotalPrice.html()
		// let checkoutDiscount = discount.html()
		console.log(discount,subTotalPrice)

		$.ajax({

			url: "{{route('check_out')}}",
			method: "GET",
			data: {
				"_token": "{{ csrf_token() }}",
				"subtotal": subTotalPrice,
				'discount': discount,
			}
		});

	}
</script>