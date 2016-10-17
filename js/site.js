function news_slider_init(){
	$('.news-list.slider').slick({
		dots: true,
		autoplay: false,
		prevArrow: false,
		nextArrow: false,
	});
}

$(document).ready(function(){
	
	$(".open-menu").click(function(e){
		e.preventDefault();
		var id = $(this).data("id");

		if($(this).hasClass("active")) {
			$(this).removeClass("active");
			$(".section-header").removeClass("with-open-menu");
		} else {
			$(".open-menu").removeClass("active");
			$(this).addClass("active");
			$(".section-header").addClass("with-open-menu");
		}

		$(".menu[data-id="+id+"]").slideToggle();

		if ($(".section-header").hasClass('with-open-menu')) {
			$('.preloader-wrap').fadeOut(250);
		} else {
			$('.preloader-wrap').fadeIn(600);
		}

	});

	$(".menu .close").click(function(){
		$(this).parent().slideToggle();
		$(".open-menu").removeClass("active");

		$(".section-header").removeClass("with-open-menu");
		$('.preloader-wrap').fadeIn(600);
	});



	$(".with-dropdown").click(function(e){
		e.preventDefault();
		var id = $(this).data("id");

		$(".dropdown-item[data-id="+id+"]").slideToggle();
	});


	$(".with-dropdown-mobile").click(function(e){
		e.preventDefault();

		var id = $(this).data("id");

		if($(this).hasClass("open")) $(this).removeClass("open");
		else {
			$('.with-dropdown-mobile.open').each(function () {
				$(this).removeClass("open");
				$(".dropdown-item-mobile[data-id="+$(this).data("id")+"]").slideToggle();
			});
			$(this).addClass("open");
		}

		$(".dropdown-item-mobile[data-id="+id+"]").slideToggle();
	});


	if($('.section-header .preloader').length > 0) {
		//setTimeout(function() {$(".section-header .preloader").fadeOut(5000);}, 20000);
	}

	if($('.owl-gallery').length > 0) {
		$('.owl-gallery').slick({
			dots: true,
			autoplay: true,
			vertical: true,
			autoplaySpeed: 3000,
			prevArrow: false,
			nextArrow: false,
		});
    }

    
	news_slider_init();
	
	
	$(".ham").click(function(){
		if($(".ham").hasClass("active")) $(".ham").removeClass("active");
		else $(".ham").addClass("active");	
		
		$(".mobile-menu-wrap").slideToggle();
		$(".section-header.mobiledshow .lang").slideToggle();
	})

});


/*
$('.responsive').slick({
  dots: true,
  infinite: false,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 4,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});
*/