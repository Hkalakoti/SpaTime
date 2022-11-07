@extends('frontend.layout')

<section class="innerpages-top-banner">
    <!--<img src="images/innerpages-banner.jpg" class="img-fluid" alt="SPA-TIME">-->
</section>

<section class="breadcrumb-inner breadcrumb-inner-page">
    <div class="padding-left-right">
        <div class="container-fluid">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Order Confirmation</li>
            </ol>
        </div>
    </div>
</section>

<section class="services-listing confirmation-page">
    <div class="padding-left-right">
        <div class="container-fluid text-center">
            <div class="row wow fadeInUp">
                <div class="col-12 carousel-div">
                    <h1 class="wow fadeInDown" data-wow-delay="0.2s" data-wow-duration="1.5s">Thank You</h1>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="order-confirm1">
                        <h4>Order Confirmation</h4>
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <th scope="row">Booking ID</th>
                                    <td>SPA02941001</td>
                                </tr>
                                <tr>
                                    <th scope="row">Venue</th>
                                    <td>Avenue Branch <i class="fas fa-map-marker-alt map-marker"></i></td>
                                </tr>
                                <tr>
                                    <th scope="row">Date</th>
                                    <td>20/02/2022 | Time: 04:00 PM</td>
                                </tr>
                                <tr>
                                    <th scope="row">E-Mail</th>
                                    <td><a href="mailto:moiz@design-master.com" style="font-family: 'Quicksand', sans-serif;">moiz@design-master.com</a></td>
                                </tr>
                                <tr>
                                    <th scope="row">Payment Mode</th>
                                    <td><img src="images/visa.png" class="img-fluid payment-img-order"></td>
                                </tr>
                                <tr>
                                    <th scope="row">Transaction Status</th>
                                    <td class="delivered">Delivered</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="cart-btn-div"><a href="javascript:void(0)" class="black-button">Book Now</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>