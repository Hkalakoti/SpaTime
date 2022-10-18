@extends('frontend.layout')
@include('flash-messages')

<section class="breadcrumb-inner breadcrumb-inner-page">
  <div class="padding-left-right">
    <div class="container-fluid">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{$data->name}} by SPA TIME</li>
      </ol>
    </div>
  </div>
</section>

<section class="services-listing details-page">
  <div class="padding-left-right">
    <div class="container-fluid text-center">
      <h1 class="wow fadeInDown" data-wow-delay="0.2s" data-wow-duration="1.5s">{{$data->name}}</h1>
      <div class="row">
        <!-- <div class="col-lg-5 col-md-12 col-sm-12" id="gallery"> -->
        <!-- <img src="{{url('public/Image/'.$data->image)}}" alt="gallery"> -->
        <div class="col-lg-5 col-md-12 col-sm-12" id="gallery">
          <div class="gallery-main">
            <div class="swiper-container gallery-top">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="gallery-large" data-src="" data-fancybox="gallery"><img src="{{url('public/Image/'.$data->image)}}" alt="gallery"></div>
                </div>
              </div>
              <div class="swiper-button-next gallery-button-next"></div>
              <div class="swiper-button-prev gallery-button-prev"></div>
            </div>
          </div>
          <div class="gallery-thumnail-gallery">
            <div class="thumnail-gallery">
              <div class="swiper-container gallery-thumbs">
                <div class="swiper-wrapper">
                  <div class="swiper-slide"><img src="{{url('public/Image/'.$data->image)}}" alt="gallery"></div>
                </div>
              </div>
            </div>
            <div class="swiper-button-next thumbs-button-next"></div>
            <div class="swiper-button-prev thumbs-button-prev"></div>
          </div>
        </div>
        <div class="col-lg-7 col-md-12 col-sm-12" id="info">
          <div class="product-description">
            <h2>{{$data->name}} by SPA TIME</h2>
            <div id="price" class="price-detail">{{$data->price}} KWD</div>
            <h4>Select Size</h4>
            <ul class="unstyled select-delivery select-qty-spa-time anim5">
              @foreach ($datas as $row)
              <li>
                <input onclick="document.getElementById('price').innerHTML='{{$row->price}} KWD'" class="styled-checkbox" id="{{$row->id}}" name="time" type="radio" >
                <label for="{{$row->id}}"><span>{{$row->size}} ML</span></label>
              </li>
              @endforeach
            </ul>
            <h4>Description</h4>
            <p> {{$data->description}} </p>
            <div class="add-to-favourite">
              <a href="javascript:void(0);" class="add-to-favourite-link fav-detail-btn featured-button-container w-313">
                <span class="featured-button-line"></span>
              </a>
            </div>
            <div class="cart-buy-btns">
              <button class="button detail-addtocart w-153" onclick="cart()">
                <a>Add to Cart</a>
              </button>

              <!-- !important -->
              <input type="hidden" id="product_id" value="{{$data->id}}">
              <!-- data sent via ajax using this input to cart controller(cartAdd) -->

              <button class="button detail-addtocart w-153">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"></path>
                </svg> Add to Wishlist</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script src="{{asset('https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js')}}"></script>

<script>
  function cart() {
    var id = $('#product_id').val();
    $.ajax({
      url: "{{ route('cartAdd')}}",
      data: {
        "id": id
      },
      type: 'get',
      success: function(result) {
        alert(result);
      }
    });
  }
</script>