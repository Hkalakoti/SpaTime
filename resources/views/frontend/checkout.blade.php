@extends('frontend.layout')
<section class="breadcrumb-inner breadcrumb-inner-page">
    <div class="padding-left-right">
        <div class="container-fluid">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Checkout</li>
            </ol>
        </div>
    </div>
</section>
@php
    print_r($final);
@endphp
<section class="services-listing">
    <div class="padding-left-right">
        <div class="container text-center">
            <h1 class="wow fadeInDown" data-wow-delay="0.2s" data-wow-duration="1.5s">Checkout</h1>
            <div class="row row-spa-time-cart">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
@include('flash-messages')
                    <div class="cart-row-divider">
                        <h4 class="cart-summary-cart">Cart Summary</h4>
                        <div class="cart-summary">
                            <ul>
                                <li class="coupon-main">
                                    <div class="coupon-div">
                                        <div class="coupon-left"><img src="{{asset('images/icon-percentage.png')}}" alt=""> Coupon Code / Voucher Code</div>
                                        <div class="coupon-right">
                                            <input type="text" class="form-control" name="" id="" value="" disabled>
                                            <button class="button">Applied</button>
                                        </div>
                                    </div>
                                </li>
                                <li><label>Subtotal</label>
                                    <div class="cart-amnt"> {{ request()->session()->get('test') }} KWD</div>
                                </li>
                                <li><label>
                                        <div class="coupon-code coupon-code-my-cart">Discount: </div>
                                    </label>
                                    <div class="cart-amnt"> {{ request()->session()->get('test') }} KWD</div>
                                </li>
                                <li><label>Grand Total</label>
                                    <div class="cart-amnt"> KWD</div>
                                </li>
                            </ul>
                            <hr>
                        </div>

                        <div class="selectdate">
                            <ul class="unstyled color-radios pro-collect">
                                <li class="white">
                                    <input class="styled-checkbox styled-checkbox-out" id="terms" checked="" name="size" type="radio" value="1">
                                    <label for="terms">
                                        <h4 class="date-select">Terms & Conditions</h4>
                                    </label>
                                </li>
                            </ul>
                        </div>

                        <div class="payment-method payment-method-spa">
                            <h4>Payment Method</h4>
                            <ul>
                                <li>
                                    <input type="radio" class="styled-checkbox" id="knet" name="payment" value="{{route('payment')}}">
                                    <label for="knet" title="K-Net">
                                        <img src="images/knet-logo.png" alt="k net">
                                    </label>
                                </li>

                                <li>
                                    <input type="radio" class="styled-checkbox" id="visa" name="payment" value="">
                                    <label for="visa" title="Credit Card">
                                        <img src="images/creditcard.png" alt="Credit Card">
                                    </label>
                                </li>

                                <li>
                                    <input type="radio" class="styled-checkbox" id="master" name="payment" value="">
                                    <label for="master" title="Cash on Delivery">
                                        <img src="images/cash-delivery.png" alt="Cash on Delivery">
                                    </label>

                                </li>
                            </ul>
                        </div>

                        <div class="cart-btn-div">
                        <a href="{{route('payment')}}" class="btn btn-success"> Knet</a>
                        </div>

                        <div class="cart-btn-div">
                            <a href="confirmation.html" class="black-button">Pay Now</a>
                        </div>

                    </div>
                </div>
                <br>
                <div class="row row-checkout">


                </div>

            </div>
        </div>
</section>