
var swiperservice = new Swiper('.service-container', {
	slidesPerView:8,
	speed:700,
	spaceBetween:0,
	navigation: {
		nextEl: '.service-button-next',
		prevEl: '.service-button-prev',
	},
	// Responsive breakpoints
	breakpoints: {
		// when window width is <= 480px
		300: {
			slidesPerView:2			
		},
		480: {
			slidesPerView:2
		},
		575: {
			slidesPerView:3
		},
		780: {
			slidesPerView:4
		},
		1024: {
			slidesPerView:6
		},
		1200: {
			slidesPerView:8
		}
	},
});

var galleryTop = new Swiper('.gallery-top', {
  spaceBetween: 10,
  navigation: {
	nextEl: '.gallery-button-next',
	prevEl: '.gallery-button-prev',
  },
	loop: true,
	loopedSlides: 6
});
var galleryThumbs = new Swiper('.gallery-thumbs', {
  spaceBetween: 10,
  centeredSlides: true,
  slidesPerView: 6,
	navigation: {
	nextEl: '.thumbs-button-next',
	prevEl: '.thumbs-button-prev',
  },
  touchRatio: 0.2,
  slideToClickedSlide: true,
	loop: true,
	loopedSlides: 6
});
galleryTop.controller.control = galleryThumbs;
galleryThumbs.controller.control = galleryTop;

var subsNavi = new Swiper('.subsNaviContainer', {
		slidesPerView:'auto',
      	spaceBetween:0,
     	freeMode: true,
  		navigation: {
			nextEl: '.subs-navi-button-next',
			prevEl: '.subs-navi-button-prev',
		},
	});

var swiperserContents = new Swiper('.serContents-container',{
	slidesPerView:1,
	effect:'fade',
	speed:700,
      thumbs: {
        swiper: swiperservice
      },
	navigation: {
		nextEl: '.serContents-button-next',
		prevEl: '.serContents-button-prev',
	},
});
var swipershowcase = new Swiper('.showcase-container',{
	slidesPerView:4,
	effect:'slide',
	speed:700,
	navigation: {
		nextEl: '.showcase-button-next',
		prevEl: '.showcase-button-prev',
	},
	breakpoints: {
		// when window width is <= 480px
		300: {
			slidesPerView:2			
		},
		480: {
			slidesPerView:2
		},
		575: {
			slidesPerView:3
		},
		780: {
			slidesPerView:4
		}
	},
});
var swipernews = new Swiper('.news-container', {
	effect: 'coverflow',     
		loop: true,
      centeredSlides: true,
	speed:700,
      slidesPerView:2,
      coverflowEffect: {
        rotate: 10,
        stretch: 0,
        depth: 375,
        modifier:1,
        slideShadows : true,
      },
	navigation: {
		nextEl: '.news-button-next',
		prevEl: '.news-button-prev',
	},
	// Responsive breakpoints
	breakpoints: {
		// when window width is <= 480px
		300: {
			slidesPerView:1,
			spaceBetween:0
		},
		480: {
			slidesPerView:1,
			spaceBetween:0
		},500: {
			slidesPerView:2,
			spaceBetween:10
		}
	},
});
var swipergallery = new Swiper('.gallery-container', {
	slidesPerView:3,
	slidesPerColumn:1,
	speed:1000,
	spaceBetween:20,
	navigation: {
		nextEl: '.gallery-button-next',
		prevEl: '.gallery-button-prev',
	},
	// Responsive breakpoints
	breakpoints: {
		// when window width is <= 320px
		320: {
			slidesPerView:2,
			spaceBetween:5
		},
		// when window width is <= 480px
		480: {
			slidesPerView:2,
			spaceBetween:5
		},
		// when window width is <= 640px
		640: {
			slidesPerView:3,
			spaceBetween:10
		},
		780: {
			slidesPerView:3,
			spaceBetween:10
		}
	},
});

	var swiperabout = new Swiper('.categories-container', {
		slidesPerView:4,
		slidesPerColumn:2,
		speed:1000,
		spaceBetween:0,
		// Responsive breakpoints
		breakpoints: {
			// when window width is <= 320px
			320: {
				slidesPerView:2
			},
			// when window width is <= 480px
			480: {
				slidesPerView:2
			},
			// when window width is <= 640px
			768: {
				slidesPerView:3
			},
			
			1000: {
				slidesPerView:4
			},
			
			1280: {
				slidesPerView:4
			},
			
			1326: {
				slidesPerView:6
			},
			
			1366: {
				slidesPerView:6
			},
			
			1440: {
				slidesPerView:6
			},
			
			1880: {
				slidesPerView:6
			}
		},
		pagination:{
			el:'.categories-pagination',
			clickable:true,
		  },
		navigation: {
			nextEl: '.categories-button-next',
			prevEl: '.categories-button-prev',
		},
	}); 
	var swiperarrival = new Swiper('.arrival-container', {
		slidesPerView:4,
		slidesPerColumn:1,
		speed: 1000,
		spaceBetween:20,
		// Responsive breakpoints
		breakpoints: {
			360: {
				slidesPerView:2,
				spaceBetween:0,
			},
			375: {
				slidesPerView:2,
				spaceBetween:0,
			},
			// when window width is <= 480px
			475: {
				slidesPerView:2,
				spaceBetween:0,
			},
			// when window width is <= 640px
			640: {
				slidesPerView:3,
				spaceBetween:0,
			},
			780: {
				slidesPerView:3,
				spaceBetween:0,
			},
			1024: {
				slidesPerView:3,
				spaceBetween:10,
			},
			1280: {
				slidesPerView:3
			}
		},
		pagination:{
			el:'.arrival-pagination',
			clickable:true,
		  },
		navigation: {
			nextEl: '.arrival-button-next',
			prevEl: '.arrival-button-prev',
		},
		on: {
			init: function () {
				//$('.guest-icon').css({'height':$('.guest-icon').width()});
			},
		}
	});
	var swipertopsellers = new Swiper('.topsellers-container', {
		slidesPerView:4,
		slidesPerColumn:1,
		speed: 1000,
		spaceBetween:30,
		// Responsive breakpoints
		breakpoints: {
			479: {
				slidesPerView:2,
				spaceBetween:0,
			},
			// when window width is <= 480px
			480: {
				slidesPerView:2,
				spaceBetween:0,
			},
			// when window width is <= 640px
			640: {
				slidesPerView:3,
				spaceBetween:0,
			},
			780: {
				slidesPerView:3,
				spaceBetween:0,
			},
			1024: {
				slidesPerView:4,
				spaceBetween:10,
			},
			1280: {
				slidesPerView:4
			}
		},
		navigation: {
			nextEl: '.topsellers-button-next',
			prevEl: '.topsellers-button-prev',
		},
		on: {
			init: function () {
				//$('.guest-icon').css({'height':$('.guest-icon').width()});
			},
		}
	});
	var productdetailPageswiper = new Swiper('.productdetail-container', {
		slidesPerView:1,
		navigation: {
			nextEl: '.productdetail-button-next',
			prevEl: '.productdetail-button-prev',
		}
	});
	var swiperListing = new Swiper('.listing-container', {
      pagination: {
        el: '.listing-pagination',
		  clickable:true,
      },
    });

