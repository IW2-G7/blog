jQuery(document).ready(function(){
	"use strict";
	
	/* ---------------------------------------------------------------------- */
	/*	Click to Top 
	/* ---------------------------------------------------------------------- */
	if($('.flexslider').length){
		jQuery('.flexslider').flexslider({
			animation: "slide",
			start: function(slider){
			  jQuery('body').removeClass('loading');
			}
		});
	}
	
	
	
	/* ---------------------------------------------------------------------- */
	/*	BxSlider
	/* ---------------------------------------------------------------------- */
	if($('.bxslider').length){
		$('.bxslider').bxSlider({
		   mode: 'fade',
		   pagerCustom: '#bx-pager'
		});
	}
	
	if($('.top_slider_bxslider').length){
		$('.top_slider_bxslider').bxSlider({
		   auto:true,
		    pagerCustom: '#bx-pager'
		});
	}
	
	
	/* ---------------------------------------------------------------------- */
	/*	Sticky header
	/* ---------------------------------------------------------------------- */
	if($('.pg-header-absolute').length){
		// grab the initial top offset of the navigation 
		//var stickyNavTop = $('#mainbanner').offset().top;
		var stickyNavTop = 40;
		// our function that decides weather the navigation bar should have "fixed" css position or not.
		var stickyNav = function(){
			var scrollTop = $(window).scrollTop(); // our current vertical position from the top
			// if we've scrolled more than the navigation, change its position to fixed to stick to top,
			// otherwise change it back to relative
			if (scrollTop > stickyNavTop) { 
				$('.pg-header-absolute').addClass('kf_sticky');
			} else {
				$('.pg-header-absolute').removeClass('kf_sticky'); 
			}
		};
		stickyNav();
		// and run it again every time you scroll
		$(window).scroll(function() {
			stickyNav();
		});
	}
	


});	