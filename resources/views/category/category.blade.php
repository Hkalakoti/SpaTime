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
                                    <div class="swiper-slide scrollmove"><a href="javascript:void(0);" role="1" class="active">Category-1</a></div>
                                    <div class="swiper-slide scrollmove"><a href="javascript:void(0);" role="2">Category-2</a></div>
                                    <div class="swiper-slide scrollmove"><a href="javascript:void(0);" role="3">Category-3</a></div>
                                    <div class="swiper-slide scrollmove"><a href="javascript:void(0);" role="4">Category-4</a></div>
                                    <div class="swiper-slide scrollmove"><a href="javascript:void(0);" role="5">Category-5</a></div>
                                    <div class="swiper-slide scrollmove"><a href="javascript:void(0);" role="6">Category-6</a></div>
                                </div>
                            </div>
                            <!-- Add Pagination -->
                            <div class="swiper-button-next subs-navi-button-next"><i class="fa fa-caret-right"></i></div>
                            <div class="swiper-button-prev subs-navi-button-prev"><i class="fa fa-caret-left"></i></div>
                        </div>
                        <div class="special-pricing tabs-container wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1.5s">
                            <div class="tabs-cont" id="1">
                                <div class="row d-flex justify-content-center text-center">
                                    <div class="col-6 col-lg-3 col-md-4 col-sm-6 category-listing-row">
                                        <div class="category-listing category-listing-pro">
                                            <a href="{{route('products')}}"><img src="images/products/product-01.png" class="img-fluid" alt="">
                                                <p>Product-1</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-3 col-md-4 col-sm-6 category-listing-row">
                                        <div class="category-listing category-listing-pro">
                                            <a href="{{route('products')}}"><img src="images/products/product-02.png" class="img-fluid" alt="">
                                                <p>Product-2</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-3 col-md-4 col-sm-6 category-listing-row">
                                        <div class="category-listing category-listing-pro">
                                            <a href="details.html"><img src="images/products/product-03.png" class="img-fluid" alt="">
                                                <p>Product-3</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-3 col-md-4 col-sm-6 category-listing-row">
                                        <div class="category-listing category-listing-pro">
                                            <a href="details.html"><img src="images/products/product-04.png" class="img-fluid" alt="">
                                                <p>Product-4</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-3 col-md-4 col-sm-6 category-listing-row">
                                        <div class="category-listing category-listing-pro">
                                            <a href="details.html"><img src="images/products/product-05.png" class="img-fluid" alt="">
                                                <p>Product-5</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-3 col-md-4 col-sm-6 category-listing-row">
                                        <div class="category-listing category-listing-pro">
                                            <a href="details.html"><img src="images/products/product-06.png" class="img-fluid" alt="">
                                                <p>Product-6</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-3 col-md-4 col-sm-6 category-listing-row">
                                        <div class="category-listing category-listing-pro">
                                            <a href="details.html"><img src="images/products/product-07.png" class="img-fluid" alt="">
                                                <p>Product-7</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-3 col-md-4 col-sm-6 category-listing-row">
                                        <div class="category-listing category-listing-pro">
                                            <a href="details.html"><img src="images/products/product-08.png" class="img-fluid" alt="">
                                                <p>Product-8</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tabs-cont" id="2">
                                <div class="row d-flex justify-content-center text-center">
                                    <div class="col-6 col-lg-3 col-md-4 col-sm-6 category-listing-row">
                                        <div class="category-listing category-listing-pro">
                                            <a href="details.html"><img src="images/products/product-08.png" class="img-fluid" alt="">
                                                <p>Product-1</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-3 col-md-4 col-sm-6 category-listing-row">
                                        <div class="category-listing category-listing-pro">
                                            <a href="details.html"><img src="images/products/product-07.png" class="img-fluid" alt="">
                                                <p>Product-2</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-3 col-md-4 col-sm-6 category-listing-row">
                                        <div class="category-listing category-listing-pro">
                                            <a href="details.html"><img src="images/products/product-06.png" class="img-fluid" alt="">
                                                <p>Product-3</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-3 col-md-4 col-sm-6 category-listing-row">
                                        <div class="category-listing category-listing-pro">
                                            <a href="details.html"><img src="images/products/product-05.png" class="img-fluid" alt="">
                                                <p>Product-4</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-3 col-md-4 col-sm-6 category-listing-row">
                                        <div class="category-listing category-listing-pro">
                                            <a href="details.html"><img src="images/products/product-04.png" class="img-fluid" alt="">
                                                <p>Product-5</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-3 col-md-4 col-sm-6 category-listing-row">
                                        <div class="category-listing category-listing-pro">
                                            <a href="details.html"><img src="images/products/product-03.png" class="img-fluid" alt="">
                                                <p>Product-6</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-3 col-md-4 col-sm-6 category-listing-row">
                                        <div class="category-listing category-listing-pro">
                                            <a href="details.html"><img src="images/products/product-02.png" class="img-fluid" alt="">
                                                <p>Product-7</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-3 col-md-4 col-sm-6 category-listing-row">
                                        <div class="category-listing category-listing-pro">
                                            <a href="details.html"><img src="images/products/product-01.png" class="img-fluid" alt="">
                                                <p>Product-8</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tabs-cont" id="3">
                                <div class="row d-flex justify-content-center text-center">
                                    <div class="col-6 col-lg-3 col-md-4 col-sm-6 category-listing-row">
                                        <div class="category-listing category-listing-pro">
                                            <a href="details.html"><img src="images/products/product-04.png" class="img-fluid" alt="">
                                                <p>Product-1</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-3 col-md-4 col-sm-6 category-listing-row">
                                        <div class="category-listing category-listing-pro">
                                            <a href="details.html"><img src="images/products/product-03.png" class="img-fluid" alt="">
                                                <p>Product-2</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-3 col-md-4 col-sm-6 category-listing-row">
                                        <div class="category-listing category-listing-pro">
                                            <a href="details.html"><img src="images/products/product-02.png" class="img-fluid" alt="">
                                                <p>Product-3</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-3 col-md-4 col-sm-6 category-listing-row">
                                        <div class="category-listing category-listing-pro">
                                            <a href="details.html"><img src="images/products/product-01.png" class="img-fluid" alt="">
                                                <p>Product-4</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-3 col-md-4 col-sm-6 category-listing-row">
                                        <div class="category-listing category-listing-pro">
                                            <a href="details.html"><img src="images/products/product-08.png" class="img-fluid" alt="">
                                                <p>Product-5</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-3 col-md-4 col-sm-6 category-listing-row">
                                        <div class="category-listing category-listing-pro">
                                            <a href="details.html"><img src="images/products/product-07.png" class="img-fluid" alt="">
                                                <p>Product-6</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-3 col-md-4 col-sm-6 category-listing-row">
                                        <div class="category-listing category-listing-pro">
                                            <a href="details.html"><img src="images/products/product-06.png" class="img-fluid" alt="">
                                                <p>Product-7</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-3 col-md-4 col-sm-6 category-listing-row">
                                        <div class="category-listing category-listing-pro">
                                            <a href="details.html"><img src="images/products/product-05.png" class="img-fluid" alt="">
                                                <p>Product-8</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tabs-cont" id="4">
                                <div class="row d-flex justify-content-center text-center">
                                    <div class="col-6 col-lg-3 col-md-4 col-sm-6 category-listing-row">
                                        <div class="category-listing category-listing-pro">
                                            <a href="details.html"><img src="images/products/product-01.png" class="img-fluid" alt="">
                                                <p>Product-1</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-3 col-md-4 col-sm-6 category-listing-row">
                                        <div class="category-listing category-listing-pro">
                                            <a href="details.html"><img src="images/products/product-02.png" class="img-fluid" alt="">
                                                <p>Product-2</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-3 col-md-4 col-sm-6 category-listing-row">
                                        <div class="category-listing category-listing-pro">
                                            <a href="details.html"><img src="images/products/product-03.png" class="img-fluid" alt="">
                                                <p>Product-3</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-3 col-md-4 col-sm-6 category-listing-row">
                                        <div class="category-listing category-listing-pro">
                                            <a href="details.html"><img src="images/products/product-04.png" class="img-fluid" alt="">
                                                <p>Product-4</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-3 col-md-4 col-sm-6 category-listing-row">
                                        <div class="category-listing category-listing-pro">
                                            <a href="details.html"><img src="images/products/product-05.png" class="img-fluid" alt="">
                                                <p>Product-5</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-3 col-md-4 col-sm-6 category-listing-row">
                                        <div class="category-listing category-listing-pro">
                                            <a href="details.html"><img src="images/products/product-06.png" class="img-fluid" alt="">
                                                <p>Product-6</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-3 col-md-4 col-sm-6 category-listing-row">
                                        <div class="category-listing category-listing-pro">
                                            <a href="details.html"><img src="images/products/product-07.png" class="img-fluid" alt="">
                                                <p>Product-7</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-3 col-md-4 col-sm-6 category-listing-row">
                                        <div class="category-listing category-listing-pro">
                                            <a href="details.html"><img src="images/products/product-08.png" class="img-fluid" alt="">
                                                <p>Product-8</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tabs-cont" id="5">
                                <div class="row d-flex justify-content-center text-center">
                                    <div class="col-6 col-lg-3 col-md-4 col-sm-6 category-listing-row">
                                        <div class="category-listing category-listing-pro">
                                            <a href="details.html"><img src="images/products/product-08.png" class="img-fluid" alt="">
                                                <p>Product-1</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-3 col-md-4 col-sm-6 category-listing-row">
                                        <div class="category-listing category-listing-pro">
                                            <a href="details.html"><img src="images/products/product-07.png" class="img-fluid" alt="">
                                                <p>Product-2</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-3 col-md-4 col-sm-6 category-listing-row">
                                        <div class="category-listing category-listing-pro">
                                            <a href="details.html"><img src="images/products/product-06.png" class="img-fluid" alt="">
                                                <p>Product-3</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-3 col-md-4 col-sm-6 category-listing-row">
                                        <div class="category-listing category-listing-pro">
                                            <a href="details.html"><img src="images/products/product-05.png" class="img-fluid" alt="">
                                                <p>Product-4</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-3 col-md-4 col-sm-6 category-listing-row">
                                        <div class="category-listing category-listing-pro">
                                            <a href="details.html"><img src="images/products/product-04.png" class="img-fluid" alt="">
                                                <p>Product-5</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-3 col-md-4 col-sm-6 category-listing-row">
                                        <div class="category-listing category-listing-pro">
                                            <a href="details.html"><img src="images/products/product-03.png" class="img-fluid" alt="">
                                                <p>Product-6</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-3 col-md-4 col-sm-6 category-listing-row">
                                        <div class="category-listing category-listing-pro">
                                            <a href="details.html"><img src="images/products/product-02.png" class="img-fluid" alt="">
                                                <p>Product-7</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-3 col-md-4 col-sm-6 category-listing-row">
                                        <div class="category-listing category-listing-pro">
                                            <a href="details.html"><img src="images/products/product-01.png" class="img-fluid" alt="">
                                                <p>Product-8</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tabs-cont" id="6">
                                <div class="row d-flex justify-content-center text-center">
                                    <div class="col-6 col-lg-3 col-md-4 col-sm-6 category-listing-row">
                                        <div class="category-listing category-listing-pro">
                                            <a href="details.html"><img src="images/products/product-04.png" class="img-fluid" alt="">
                                                <p>Product-1</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-3 col-md-4 col-sm-6 category-listing-row">
                                        <div class="category-listing category-listing-pro">
                                            <a href="details.html"><img src="images/products/product-03.png" class="img-fluid" alt="">
                                                <p>Product-2</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-3 col-md-4 col-sm-6 category-listing-row">
                                        <div class="category-listing category-listing-pro">
                                            <a href="details.html"><img src="images/products/product-02.png" class="img-fluid" alt="">
                                                <p>Product-3</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-3 col-md-4 col-sm-6 category-listing-row">
                                        <div class="category-listing category-listing-pro">
                                            <a href="details.html"><img src="images/products/product-01.png" class="img-fluid" alt="">
                                                <p>Product-4</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-3 col-md-4 col-sm-6 category-listing-row">
                                        <div class="category-listing">
                                            <a href="details.html"><img src="images/products/product-08.png" class="img-fluid" alt="">
                                                <p>Product-5</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-3 col-md-4 col-sm-6 category-listing-row">
                                        <div class="category-listing category-listing-pro">
                                            <a href="details.html"><img src="images/products/product-07.png" class="img-fluid" alt="">
                                                <p>Product-6</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-3 col-md-4 col-sm-6 category-listing-row">
                                        <div class="category-listing category-listing-pro">
                                            <a href="details.html"><img src="images/products/product-06.png" class="img-fluid" alt="">
                                                <p>Product-7</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-3 col-md-4 col-sm-6 category-listing-row">
                                        <div class="category-listing category-listing-pro">
                                            <a href="details.html"><img src="images/products/product-05.png" class="img-fluid" alt="">
                                                <p>Product-8</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>