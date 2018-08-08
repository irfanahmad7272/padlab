jQuery(document).ready(function($) {

// NAVIGATION: Shows Fixed Nav Menu on Scroll

	var lastScrollTop = 0;

	$(window).scroll(function(event){
	   var $st = $(this).scrollTop();

	   if ($st > lastScrollTop || $(this).scrollTop() <= 10) {
			$('.main-nav').removeClass('navbar-fixed');
			} else {
	      	$('.main-nav').addClass('navbar-fixed');
	   }

	   lastScrollTop = $st;
	});
	
});