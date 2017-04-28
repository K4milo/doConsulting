(function ($) {
	
	"use strict";

	$(document).ready(function() {

		// Comments
		$(".commentlist li").addClass("panel panel-default");
		$(".comment-reply-link").addClass("btn btn-default");
	
		// Forms
		$('select, input[type=text], input[type=email], input[type=password], textarea').addClass('form-control');
		$('input[type=submit]').addClass('btn btn-primary');
		
		// You can put your own code in here

		//SLIDER
		$('.slide-listing').bxSlider({});

		$('.carousel').slick({
		  dots: true,
		  infinite: true,
		  slidesToShow: 3,
		  slidesToScroll: 3,
		  responsive: [
		    {
		      breakpoint: 600,
		      settings: {
		        slidesToShow: 2,
		        slidesToScroll: 2,
		        dots: false,
		        arrows: false
		      }
		    },
		    {
		      breakpoint: 480,
		      settings: {
		        slidesToShow: 1,
		        slidesToScroll: 1,
		        dots: false,
		        arrows: false
		      }
		    }
		    // You can unslick at a given breakpoint now by adding:
		    // settings: "unslick"
		    // instead of a settings object
		  ]
		});

		$('.navbar-collapse .fa-search').click(function(event) {
			$('.tog-search').toggle(400);
		});

		//scroll navigation

		$(window).scroll(function() {
			
			var navBar = $('.navbar').height();

			if($(window).scrollTop() > navBar){

				$('.navbar').addClass('navbar-fixed-top');
			
			} else {
				
				$('.navbar').removeClass('navbar-fixed-top');
			
			}
		});

	});

}(jQuery));
