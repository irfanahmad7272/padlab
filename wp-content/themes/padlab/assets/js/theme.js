jQuery(document).ready(function($) {

// ALL PAGES

	// SUB MENU FUNCTIONS
		$('.menu-item-has-children').on('mouseover', function() {
			$('.sub-menu').addClass('item-active');
			$(this).add('.sub-menu').on('mouseleave', function() {
				$(this).removeClass('item-active');
			});
		});

	// SHARE MODAL

        $('.open-share').on('click', function() {
            $('.share-modal').addClass('share-modal-open');
            $('body').css({"overflow":"hidden"});
        });

    	$('.share-modal-close').add('.share-modal').on('click', function() {
            $('.share-modal').removeClass('share-modal-open');
            $('body').removeAttr('style');
        });

        $('.share-modal-inner').on('click', function(e) {
            e.stopPropagation();
        });



	// CONTACT FORM POPUP

		$('.contact-popup-header').on('click', function() {
			$('.contact-popup').toggleClass('form-open');
			$('.contact-popup-close i').toggleClass('btn-carrot-active');
		});

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

	// IMG: Checks if <img> is portrait or landscape and fills div 100%
	// TURNED OFF: runs after page loads and may effect load time or appearance unless script loaded in header

		// $('img').each( function() {

		// 	var $imgWidth = $(this).width();
		// 	var $imgHeight = $(this).height();

		// 	if( $imgWidth > $imgHeight ) {
		// 		$(this).addClass('landscape');
		// 	} else {
		// 		$(this).addClass('portrait');
		// 	}

		// });

// FRONT PAGE
	
	// MODAL: Get Started Button
	
		$('button#get-started').on('click', function() {
			var $getStartedModal = $('.get-started-modal')
			var $body = $('body')

			$getStartedModal.addClass('modal-open');
			$body.css({ "overflow": "hidden" });
			$('.navbar-fixed').css('display','none');
			$getStartedModal.add( $('.modalclose') ).on('click', function() {
				$getStartedModal.removeClass('modal-open');
				$body.removeAttr('style');
				if ( $(document).scrollTop() >= 100 ) {
					$('.navbar-fixed').css('display','block');
				}
			});
		});

	// TILES: managing grid & horizontal scroll layouts

		$(window).on('resize',function() {

		// Horizontal Tile Slider Width < 480px - RESPONSIVE
			if ( $(window).width() < 481 ) {

			// calculate total width of children + margins 
				$('.row-scrollable').each(function() {	
					var $childrenWidth = $(this).children().outerWidth(true);
					var $childrenNum = $(this).children().length;
					var $childrenTotal = $childrenWidth * $childrenNum;

					$(this).width( $childrenTotal + 5 );
				});

			} else {
				// remove width when a page/window/document is widened larger than 480px
				// this would probably never happen unless someone is resizing their browser
				$('.row-scrollable').removeAttr('style');
			}

		 }).resize();

// SINGLE NEIGHBORHOOD PAGE



// INDIVIDUAL AGENT PAGE
	
	// READ MORE, READ LESS AGENT BIO

		var $bio = $('.agent-bio-wrap p');
		// var bioHeight = $('.agent-bito-wrap p').height();

		// bio.height(230);

		if ( $bio.height() > 230 ) {
			$bio.height(230);
			$('.agent-bio-wrap span').addClass('read-more');
		}

		// if ( bioHeight > 230 ) {
		// 	bio.height(230);
		// }
		// else { 
		// 	bio.height('auto');
		// }

// MAIN SEARCH BAR FILTERS 
	
	// MAP VIEW TOGGLE - GRID, LIST OR MAP

		var $tilesWrap = $('.search-tiles-column');
		var $mapWrap = $('.poop');
		var $bothMapWrap = $('.poop').add($('.search-map-inner'));

		// Swap Active states for view buttons
		$('.search-view-btn').on('click', function() {
			if ( $(this).siblings().hasClass('view-active') ) {
				$(this).siblings().removeClass('view-active');
			}
			$(this).addClass('view-active');
		});

		// Full tile view
		$('.search-grid-view').on('click', function() {
			if ( $bothMapWrap.hasClass('full-width') ) {
				$(this).removeClass('full-width');
			}
			$mapWrap.addClass('display-none');

			if ( $tilesWrap.hasClass('display-none') ) {
				$tilesWrap.removeClass('display-none');
			}
			$tilesWrap.addClass('full-width');
		});

		// List view (1/2 tiles, 1/2 map)
		$('.search-list-view').on('click', function() {
			$tilesWrap.add($bothMapWrap).removeClass('display-none full-width');
		});

		// Full map view
		$('.search-map-view').on('click', function() {			
			if ( $tilesWrap.hasClass('full-width') ) {
				$(this).removeClass('full-width');
			}
			$tilesWrap.addClass('display-none');
			if ( $bothMapWrap.hasClass('display-none') ) {
				$bothMapWrap.removeClass('display-none');
			}
			$bothMapWrap.addClass('full-width');
		});

	// DROPDOWNS - BUDGET, BEDS, BATHS, MORE & SORT

		// ADDS/REMOVES VIEW-ACTIVE AND OPENS AND CLOSES OTHER DROPDOWNS
		$('.search-bar-filters-wrap').on('click', '.drop-down-btn', function() {
			if ( !$(this).hasClass('view-active')) {

				var $dropDownButtons = $('.search-bar-filters .drop-down-btn');

				$dropDownButtons.removeClass('view-active');
				// $dropDownButtons.next().removeClass('drop-active').removeAttr('style');
				$dropDownButtons.next().slideUp(200);
				$dropDownButtons.find('.fa-sort-desc').removeClass('btn-carrot-active');

				$(this).addClass('view-active');
				$(this).next().slideDown(200);
				$(this).find('.fa-sort-desc').addClass('btn-carrot-active');
			} 
			else {
				$(this).removeClass('view-active');
				$(this).next().slideUp(200);
				$(this).find('.fa-sort-desc').removeClass('btn-carrot-active');
			}
		});

		// need to make it so that on click outside of div window closes

		// need to close an open dropdown when another dropdown is toggled
		$('.search-bar-sort').on('click', function() {

			var $dropDownButtons = $('.search-bar-filters .drop-down-btn');

			if ( $dropDownButtons.hasClass('view-active') ) {
				$dropDownButtons.removeClass('view-active');
				$dropDownButtons.next().slideUp(200);
				$dropDownButtons.find('.fa-sort-desc').removeClass('btn-carrot-active');
			}
			$('.search-bar-sort-text').toggleClass('view-active');
			$('.sort-options-wrap').slideToggle(200);
		});

	// SWAPS BUDGET OPTIONS LIST WHEN MIN/MAX INPUTS ARE FOCUSED

		// needs to be simplified but works
		$('.budget-max').on('focus', function() {
			$('.max-options-list').addClass('item-active');
			$('.min-options-list').removeClass('item-active');
		});

		$('.budget-min').on('focus', function() {
			$('.min-options-list').addClass('item-active');
			$('.max-options-list').removeClass('item-active');
		});

	// FORMATS INPUT NUMBERS WITH COMMAS
	
		$('.min-max-input input').keyup(function(event) {

			// allows use of left/right arrow keys within number input
			if(event.which >= 37 && event.which <= 40) return;

			// formats numbers with commas
			$(this).val(function(index, value) {
			return value
			.replace(/\D/g, "")
			.replace(/\B(?=(\d{3})+(?!\d))/g, ",")
			;
			});
		});

	// SCROLLS MAP COLUMN UP ON TOP OF FOOTER - search, neighborhoods, developments pages

		$(window).on('scroll resize',function() {

			// figure out the height of $('.search-tile-map-inner').height();
			// or when top of footer hits bottom of vh

			var pScroll = $(window).scrollTop();
			var windowHeight = $(window).height();
			var footerTop = $('footer').offset().top;
			var dPoint = (footerTop - windowHeight);

			if ( pScroll >= dPoint) {
				$('.poop').addClass('map-column-scroll');
				$('.poop').removeClass('search-map-column');
				$('.search-map-inner').addClass('map-inner-scroll');
			} 
			else if ( pScroll < dPoint) {
				$('.poop').removeClass('map-column-scroll');
				$('.poop').addClass('search-map-column');
				$('.search-map-inner').removeClass('map-inner-scroll');
			}
		});


		//     var dockPoint =  $('.sim-list-container').offset().top - agentCard - 156;

		//     if (scroll < 547) {

		//     	$('.listing-address-row').removeClass('fixed');
		// 	    $agentSched.removeClass('fixedAgentCard');
		// 	    $agentSched.removeAttr('style');

		//     } else if (scroll > 547 && scroll < dockPoint) {

		//     	var sliderLeft = $('.c9-list').offset().left;
		//     	sliderWidth = $('.c9-list').width();

		//       	$('.listing-address-row').addClass('fixed');
		//       	$agentSched.addClass('fixedAgentCard');
		//      	$agentSched.css({left: sliderLeft + sliderWidth + 16, top: 135});
		//      	// $('.listing-body').css({marginTop: $('.listing-address-row').height() + 15});

		//     } else if (scroll >= dockPoint) {

		//     	$agentSched.removeAttr('style');
		//     	$agentSched.removeClass('fixedAgentCard');
		//     	$agentSched.css({top: dockPoint + 77});

		//     }
		// })

// CAREERS PAGE

	// TOGGLE CAREER DESCRIPTIONS AND TOGGLES PLUS/MINUS ICON

		$('.career-position-title').click( function() {
			$(this).siblings('.career-position-description').slideToggle(250);
			$(this).children('i').toggleClass('fa-plus-circle fa-minus-circle');
		});

//INDIVIDUAL LISTING PAGE

// SINGLE NEIGHBORHOOD PAGE

	// SIDE BAR FIXED ON SCROLL
		// Set variable for trigger points

		$(window).on('scroll resize', function() {

			// Variable Calculations 
			var $scroll = $(window).scrollTop();
			// var $sidebarHeight = $('.neighborhood-sidebar').height();
			// var $mapOffset = $('.neighborhood-map').offset().top;
			// var $mapHeight = $('.neighborhood-map').height();
			var $bottomPoint = $('.neighborhood-map').offset().top + $('.neighborhood-map').height();
			var $dockPoint = $bottomPoint - $('.neighborhood-sidebar').height();
			var $windowWidth = $(window).width();
			var $rightWidth = ($windowWidth - 1010)/2;
			var $sidebar = $('.neighborhood-sidebar');

			if ($scroll <= 580) {
				$sidebar.removeClass('sidebar-fixed').removeAttr('style');
			} else if ($scroll > 580 && $scroll < $dockPoint) {
				$sidebar.removeAttr('style');
				$sidebar.addClass('sidebar-fixed');
				if ($windowWidth >= 1040) {
					$sidebar.css({"right": $rightWidth});
				} else {
					$sidebar.css({"right": 15});
				}
			} else if ($scroll >= $dockPoint) {
				$sidebar.removeClass('sidebar-fixed').removeAttr('style');
				$sidebar.css({"bottom": 0});
			}
		});

	// AGENT & SCHEDULE CARD: fixed & scroll functions

		// var sliderWidth = $('.c9-list').width();
		// var agentCard = $('.agent-sched').height();
		// var $agentSched = $('.agent-sched');

		// $(window).on('scroll resize',function() {

		//     var scroll = $(window).scrollTop();
		//     var dockPoint =  $('.sim-list-container').offset().top - agentCard - 156;

		//     if (scroll < 547) {

		//     	$('.listing-address-row').removeClass('fixed');
		// 	    $agentSched.removeClass('fixedAgentCard');
		// 	    $agentSched.removeAttr('style');

		//     } else if (scroll > 547 && scroll < dockPoint) {

		//     	var sliderLeft = $('.c9-list').offset().left;
		//     	sliderWidth = $('.c9-list').width();

		//       	$('.listing-address-row').addClass('fixed');
		//       	$agentSched.addClass('fixedAgentCard');
		//      	$agentSched.css({left: sliderLeft + sliderWidth + 16, top: 135});
		//      	// $('.listing-body').css({marginTop: $('.listing-address-row').height() + 15});

		//     } else if (scroll >= dockPoint) {

		//     	$agentSched.removeAttr('style');
		//     	$agentSched.removeClass('fixedAgentCard');
		//     	$agentSched.css({top: dockPoint + 77});

		//     }
		// })
});