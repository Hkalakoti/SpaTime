@extends('frontend.layout')

<section class="breadcrumb-inner breadcrumb-inner-page">
    <div class="padding-left-right">
        <div class="container-fluid">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Our Products</li>
            </ol>
        </div>
    </div>
</section>

<section class="services-listing">
    <div class="padding-left-right">
        <div class="container">
            <div class="row wow fadeInUp">
                <div class="col-12 carousel-div">
                    <h1 class="wow fadeInDown" data-wow-delay="0.2s" data-wow-duration="1.5s">Our Products</h1>
                    <div class="subsnavi-container-main tabs wow fadeInDown" data-wow-delay="0.4s" data-wow-duration="1s">
                        <div class="subsNaviContainer swiper-container">
                            <div class="swiper-wrapper navigate text-center">
                                @foreach ($data['category'] as $row)
                                <div class="swiper-slide scrollmove">
                                    <a href="#" id="test" role="1" class="{{$row->id === 1 ? 'active' : '' }}"> {{$row->name}}</a>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="tabs-cont1" id="1">
        <div class="row d-flex justify-content-center text-center">
            @foreach ($data['product'] as $row)
            @if ($row->status == 1)
            <div class="col-lg-4 col-md-4 col-sm-6 category-listing-row" >
                <div class="category-listing category-listing-pro" >
                    <a href="{{route('productsID', ['id' => $row->id])}}">
                        <img src="{{url('public/Image/'.$row->image)}}" class="img-fluid" alt="Error">
                        <p>{{$row->name}}</p>
                    </a>
                </div>
            </div>
            @endif
            @endforeach
        </div>
    </div>
    </div>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>



<script>
$(document).ready(function(){
    $("#category-listing").fadeTo("slow", 0.15);
    $("#div2").fadeTo("slow", 0.4);
    $("#div3").fadeTo("slow", 0.7);
  });
</script>

<script>
    $(document).ready(function() {
        $("div").children("special-pricing.tabs-cont1");
    });
</script>