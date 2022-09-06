// JavaScript Document
var banner_main_ht,howitwork_main_ht,competition_main_ht,total_sec_ht;
$(window).ready(function(){	
	$('body').jpreLoader({
		splashID:"#jSplash",
		loaderVPos:'50%',
		autoClose:true,
		closeBtnText:"Let's Begin!",
		splashFunction:function(){ 
		}
	}, function() {//callback function
		$('header,section,.innerpages,footer').animate({'opacity':1});
		wow.init();
		var swiperSlideshow = new Swiper('.slideshow-container',{
	slidesPerView:1,
	effect:'slide',
	speed:700,
	loop:true,
	pagination:{
		el:'.slideshow-pagination',
		clickable:true,
	  },
	autoplay:{
	delay:5000,
  },
	navigation: {
		nextEl: '.slideshow-button-next',
		prevEl: '.slideshow-button-prev',
	},
});
	});
});