@extends('frontend.layout')

<body>
    <section class="breadcrumb-inner breadcrumb-inner-page">
        <div class="padding-left-right">
            <div class="container-fluid">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
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

                                    @foreach($data['category'] as $row)
                                    <div class="swiper-slide scrollmove">
                                        <a href="javascript:void(0);" role="1" id="{{$row->id}}" class="active">{{$row->name}}</a>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <!-- Add Pagination -->
                            <div class="swiper-button-next subs-navi-button-next"><i class="fa fa-caret-right"></i></div>
                            <div class="swiper-button-prev subs-navi-button-prev"><i class="fa fa-caret-left"></i></div>
                        </div>
                        <div class="special-pricing tabs-container wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1.5s">
                            <div class="tabs-cont" id="1">
                                <div class="row d-flex justify-content-center text-center">
                                    @foreach ($data['product'] as $row)
                                    <div class="col-6 col-lg-3 col-md-4 col-sm-6 category-listing-row">
                                        <div class="category-listing category-listing-pro">
                                            <a href="{{route('products')}}"><img src="{{asset('Image/.$row->image')}}" class="img-fluid" alt="">
                                                <p>{{$row->name}}</p>
                                            </a>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

</body>
