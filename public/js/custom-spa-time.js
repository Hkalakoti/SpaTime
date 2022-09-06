$(window).scroll(function () {
	 "use strict";
	if ($(this).scrollTop() > 70) {
		$('header').addClass('small-header');
	} else {		   
		$('header').removeClass('small-header');
	}
});
wow = new WOW({
	animateClass: 'animated',
	offset:       100,
	callback:     function(box) {
	  console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
	}
  });
wow.init(); 
$(".noValue").on("keypress keyup blur",function (event) {
	"use strict";
   $(this).val($(this).val().replace(/[^\d].+/, ""));
	if ((event.which < 48 || event.which > 57)) {
		event.preventDefault();
	}
});
var no_of_bottle = 1;
var roleId=1;
var idNum=1;
$(document).ready(function(){
	"use strict";
	$('.navigate a').click(function(){
		if(!$(this).hasClass('active')){
			$('.navigate a').removeClass('active');
			$('.tabs-container').find('#'+roleId).hide();
			roleId = $(this).attr('role');
			$('.tabs-container').find('#'+roleId).fadeIn(1000);
			$(this).addClass('active');
		}
		else{
			
		}
	});
	
	$('.bars').click(function(){
		$(this).parents('.menu-main').toggleClass('opened');
	});
	
	$('.user-link').click(function(){
		$(this).toggleClass('active');
		$('.login-register-main').toggleClass('activated');
		$('.cart-main').removeClass('activated');
		$('.cart-link').removeClass('active');
	});
	$('.cart-link').click(function(){
		$(this).toggleClass('active');
		$('.cart-main').toggleClass('activated');
	});
	$('.minusBtn').click(function(){
		no_of_bottle = parseInt($(this).parent('.plus-minus').find('.noValue').val());		
		if(no_of_bottle > 1){
			no_of_bottle = no_of_bottle - 1;
			$(this).parent('.plus-minus').find('.noValue').val(no_of_bottle);
		}
	});
	$('.plusBtn').click(function(){
		no_of_bottle =  parseInt($(this).parent('.plus-minus').find('.noValue').val());
		no_of_bottle = no_of_bottle + 1;
		$(this).parent('.plus-minus').find('.noValue').val(no_of_bottle);
	});
	
	$('.edit-address-btn .button').click(function(){
		$(this).parents('.address-edit').find('.addressform').slideDown();
		$(this).parent('.edit-address-btn').slideUp();
	});
	$('.addressform .close-btn').click(function(){
		$(this).parents('.address-edit').find('.addressform').slideUp();
		$(this).parents('.address-edit').find('.edit-address-btn').slideDown();
	});
	$('.close-btn').click(function(){
		$('.cart-link').removeClass('active');
		$('.cart-main').removeClass('activated');
	});	 
	$('.bundle-list li input[type=radio][name=payment]').change(function() {
		 console.log('aa: '+this.value);
	   if (this.value == 'PayNow') {
		//write your logic here
		   	$('.k-net-main').slideDown()
		}
	  else if (this.value == 'PayLater') {
		//write your logic here
		  $('.k-net-main').slideUp();
	 }
		 });
	$('.change-btn').click(function () {
        $(this).parents('.myprofile-main').find('.profiledata').slideUp();
        $(this).parents('.myprofile-main').find('.profileform').slideDown();
    });
    $('.closebutton').click(function () {
        $(this).parents('.myprofile-main').find('.profiledata').slideDown();
        $(this).parents('.myprofile-main').find('.profileform').slideUp();
    });
	
	$('.tabs-links li a').click(function () {
		if(!$(this).hasClass('active')){
			$('.tabs-links li a').removeClass('active');
			$('.tabs-container').find('#'+idNum).slideUp();
			idNum = $(this).attr('role');
			$('.tabs-container').find('#'+idNum).slideDown();
			$(this).addClass('active');
			setTimeout(function(){ 
				$('.appointment-wrapper').css({'margin-left':0});
			}, 500);
		}
	});
	$('.addToBag').click(function () {
		$('.cart-main').addClass('viewCart');
		setTimeout(function(){
			$('.cart-main').removeClass('viewCart');
		},2000);
	});
	$('.cart-close').click(function () {
		$('.cart-link').removeClass('active');
		$('.cart-main').removeClass('activated');
	});
	$('.profile-link').click(function () {
		$(this).parent('.profile-column').toggleClass('opened');
	});
	$(".make-an-appointment").click(function(){		
		$('html,body').animate({scrollTop: $("#services").offset().top-50},1000);
	});
	$('.print-link').on('click', function() {
		//Print ele2 with default options
		$.print("#ele2");
	});
	firstTime();
});
var login_register;
function login_register_main(){
	"use strict";
	login_register = $('.login-register-main').height();
	if(login_register > win_height){
	   $('.login-register-main').css({'height':(win_height-50)});
	 }
	else{
		$('.login-register-main').css({'height':'auto'});
	}
	
}
function firstTime(){
	"use strict";
	$('.tabs-container').find('#'+roleId).slideDown();
}
$(document).mouseup(function(e)
{
	"use strict";
	var user1 = $('.login-register-main');
	var user2 = $('.user-link');
	if (!user1.is(e.target) && user1.has(e.target).length === 0) 
	{
		if (!user2.is(e.target) && user2.has(e.target).length === 0) 
		{
			$('.login-register-main').removeClass('activated');
			$('.user-link').removeClass('active');
		}
	}
	/*var cart1 = $('.cart-main');
	var cart2 = $('.cart-link');
	if (!cart1.is(e.target) && cart1.has(e.target).length === 0) 
	{
		if (!cart2.is(e.target) && cart2.has(e.target).length === 0) 
		{
			$('.cart-main').removeClass('activated');
			$('.cart-link').removeClass('active');
		}
	}*/
	var bars1 = $('.navigation');
	var bars2 = $('.bars');
	if (!bars1.is(e.target) && bars1.has(e.target).length === 0) 
	{
		if (!bars2.is(e.target) && bars2.has(e.target).length === 0) 
		{
			$('.menu-main').removeClass('opened');
			$('.bars').removeClass('active');
		}
	} 
});

var win_width;
var win_height;
var thumb_width;
var thumb_height;
var team_slide_wt;
var login_cart_ht;
var cart_main_ht;
var navi_height;
var appointment_links;
var appointment_wrpr;
var galley_ht;
/*var bundle_thumb_ht;
var spets_length;
var spets_width;
var spets_tot_wd;*/
function addRemoveStyle(){
	"use strict";
	win_width = $(window).width();	
	win_height = $(window).height();
	thumb_width = $('.thumbsnail').width();
	thumb_height = $('.thumbsnail').height();
	$('.thumbsnail-div').css({'width':thumb_width});
	$('.thumbsnail-div').css({'height':thumb_height});
	if(win_width < 781 ){
	  	//$('.navigation').css({'width':win_width}); 
		//$('.navigation').css({'height':win_height - 50});
		navi_height = win_height - 50;
		$('head').append('<style type="text/css">.opened .navigation,.opened .navigation-div{height:'+navi_height+'px}</style>');
	}
	else{
	   $('.navigation').removeAttr('style');
		$('.banner-img').css({'height':(win_height-50)});
	}
	
	team_slide_wt = $('.team-container .swiper-slide').width();
	$('.team-container .swiper-slide .flipper,.team-container .flip-container .front,.team-container .flip-container .back').css({'height':team_slide_wt});
	
	login_cart_ht = $('.login-register-main').height();
	if(login_cart_ht > win_height){
	   	$('.login-register-main').css({'height':(win_height-50)});
		$('.login-register-main').css({'overflow':'auto'});
	 }
	else{
		$('.login-register-main').removeAttr('style');
	}
	
	cart_main_ht = $('.cart-main').height();
	if(cart_main_ht > win_height){
	   	$('.cart-main').css({'height':(cart_main_ht-50)});
		$('.cart-main').css({'overflow':'auto'});
	 }
	else{
		$('.cart-main').removeAttr('style');
	}
	
	appointment_links = $('.appointment-links').width();
	appointment_wrpr = appointment_links * 2;
	$('.appointment-item,.appointment-cont').css({'width':appointment_links});
	$('.appointment-wrapper').css({'width':appointment_wrpr});
	
	galley_ht = $('.galley-main li').width()/1.3;
	$('.galley-main li a').css({'height':galley_ht});
	
	/*var offer_width = $('.special-offer-left').height();
	var offer_width = $('.special-offer-left').height();*/
	
	var offer_height = $('.special-offer-detail').height();
	if(win_width > 575){
	 	$('.special-offer-left').css({'height':offer_height});  
	 }
	else{
		$('.special-offer-left').css({'height':'auto'});
	}
		
	$('.cart-close').css({'height':win_height+50});
	
	if(win_width > win_height){
		$('.slideshow-container .img-holder').css({'width': win_width});
		$('.slideshow-container .img-holder').css({'height': win_height});
	}
	else{
		$('.slideshow-container .img-holder').css({'width':'auto'});
		$('.slideshow-container .img-holder').css({'height':'auto'});
	}
	/*spets_width = $('.steps-main').width();	
	spets_length = $('.steps-main').find('li').length;	
	spets_tot_wd = spets_width/spets_length;
	$('.steps-main').find('li').css({'width':spets_tot_wd});*/
	
	/*bundle_thumb_ht = $('.bundle-thumb').width();
	$('.bundle-dtl').css({'height':bundle_thumb_ht});*/
}

$(window).load(function() {
	"use strict";
	addRemoveStyle();
});
$(window).resize(function() {
	"use strict";
	addRemoveStyle();
});