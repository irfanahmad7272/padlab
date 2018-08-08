jQuery(document).ready(function($) {

	//INDIVIDUAL LISTING PAGE - FUNCTIONS FOR AGENT & SCHEDULE SLIDER

	var sliderWidth = $('.c9-list').width();
	var agentCard = $('.agent-sched').height();
	var $agentSched = $('.agent-sched');

	$(window).on('scroll resize',function() {

	    var scroll = $(window).scrollTop();
	    var dockPoint =  $('.sim-list-container').offset().top - agentCard - 156;

	    if (scroll < 547) {

	    	$('.listing-address-row').removeClass('fixed');
		    $agentSched.removeClass('fixedAgentCard');
		    $agentSched.removeAttr('style');

	    } else if (scroll > 547 && scroll < dockPoint) {

	    	var sliderLeft = $('.c9-list').offset().left;
	    	sliderWidth = $('.c9-list').width();

	      	$('.listing-address-row').addClass('fixed');
	      	$agentSched.addClass('fixedAgentCard');
	     	$agentSched.css({left: sliderLeft + sliderWidth + 16, top: 135});
	     	// $('.listing-body').css({marginTop: $('.listing-address-row').height() + 15});

	    } else if (scroll >= dockPoint) {

	    	$agentSched.removeAttr('style');
	    	$agentSched.removeClass('fixedAgentCard');
	    	$agentSched.css({top: dockPoint + 77});

	    }
	})
});