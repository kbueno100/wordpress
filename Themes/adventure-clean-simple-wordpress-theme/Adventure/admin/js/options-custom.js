/**
 * Prints out the inline javascript needed for the colorpicker and choosing
 * the tabs in the panel.
 */

jQuery(document).ready(function($) {
	
	// Fade out the save message
	$('.fade').delay(1000).fadeOut(1000);
	
	// Color Picker
	$('.colorSelector').each(function(){
		var Othis = this; //cache a copy of the this variable for use inside nested function
		var initialColor = $(Othis).next('input').attr('value');
		$(this).ColorPicker({
		color: initialColor,
		onShow: function (colpkr) {
		$(colpkr).fadeIn(500);
		return false;
		},
		onHide: function (colpkr) {
		$(colpkr).fadeOut(500);
		return false;
		},
		onChange: function (hsb, hex, rgb) {
		$(Othis).children('div').css('backgroundColor', '#' + hex);
		$(Othis).next('input').attr('value','#' + hex);
	}
	});
	}); //end color picker
	
	// Switches option sections
	$('.group').hide();
	var activetab = '';
	if (typeof(localStorage) != 'undefined' ) {
		activetab = localStorage.getItem("activetab");
	}
	if (activetab != '' && $(activetab).length ) {
		$(activetab).fadeIn();
	} else {
		$('.group:first').fadeIn();
	}
	$('.group .collapsed').each(function(){
		$(this).find('input:checked').parent().parent().parent().nextAll().each( 
			function(){
				if ($(this).hasClass('last')) {
					$(this).removeClass('hidden');
						return false;
					}
				$(this).filter('.hidden').removeClass('hidden');
			});
	});
	
	if (activetab != '' && $(activetab + '-tab').length ) {
		$(activetab + '-tab').addClass('nav-tab-active');
	}
	else {
		$('.nav-tab-wrapper a:first').addClass('nav-tab-active');
	}
	$('.nav-tab-wrapper a').click(function(evt) {
		$('.nav-tab-wrapper a').removeClass('nav-tab-active');
		$(this).addClass('nav-tab-active').blur();
		var clicked_group = $(this).attr('href');
		if (typeof(localStorage) != 'undefined' ) {
			localStorage.setItem("activetab", $(this).attr('href'));
		}
		$('.group').hide();
		$(clicked_group).fadeIn();
		evt.preventDefault();
	});
           					
	$('.group .collapsed input:checkbox').click(unhideHidden);
				
	function unhideHidden(){
		if ($(this).attr('checked')) {
			$(this).parent().parent().parent().nextAll().removeClass('hidden');
		}
		else {
			$(this).parent().parent().parent().nextAll().each( 
			function(){
				if ($(this).filter('.last').length) {
					$(this).addClass('hidden');
					return false;		
					}
				$(this).addClass('hidden');
			});
           					
		}
	}
	
	// Image Options
	$('.of-radio-img-img').click(function(){
		$(this).parent().parent().find('.of-radio-img-img').removeClass('of-radio-img-selected');
		$(this).addClass('of-radio-img-selected');		
	});
		
	$('.of-radio-img-label').hide();
	$('.of-radio-img-img').show();
	$('.of-radio-img-radio').hide();

	if (show = jQuery('#home_type').children('option:selected').val()) {
		jQuery('.include.' + show + ',.optiongroup.' + show).show().removeClass('hidden').addClass('visible');
	}

	jQuery('#home_type').change(function() {
		show = jQuery(this).children('option:selected').val();
		jQuery('.include.visible, .optiongroup.visible').fadeOut(400, function() { 
			jQuery('.include.' + show + ',.optiongroup.' + show).fadeIn(400).removeClass('hidden').addClass('visible');
			document.getElementById(show + '-frame').contentDocument.location.reload(true);
		}).removeClass('visible').addClass('hidden');
	});

	jQuery('#adventure-slider_include-homeimages').click(function() {
		jQuery('#section-homepage_images').fadeToggle(400);
	});

	jQuery('#adventure-slider_include-unattached').click(function() {
		jQuery('#section-unattached_images').fadeToggle(400);
	});

	jQuery('#adventure-slider_include-pages').click(function() {
		jQuery('#section-slider_pages').fadeToggle(400);
	});

	jQuery('#adventure-slider_include-posts').click(function() {
		jQuery('#section-slider_categories, #section-slider_posts_num').fadeToggle(400);
	});

	jQuery('#adventure-slider_include-portfolio').click(function() {
		jQuery('#section-slider_pcats, #section-slider_portfolio_num').fadeToggle(400);
	});
	
	if ((!jQuery('#section-slider_include').hasClass('hidden')) && (jQuery('#adventure-slider_include-homeimages:checked').val() !== undefined)) {
		jQuery('#section-homepage_images').show().removeClass('hidden').addClass('visible');
	} else {
		jQuery('#section-homepage_images').hide().removeClass('visible').addClass('hidden');
	}
	
	if ((!jQuery('#section-slider_include').hasClass('hidden')) && (jQuery('#adventure-slider_include-unattached:checked').val() !== undefined)) {
		jQuery('#section-unattached_images').show().removeClass('hidden').addClass('visible');
	} else {
		jQuery('#section-unattached_images').hide().removeClass('visible').addClass('hidden');
	}
	
	if ((!jQuery('#section-slider_include').hasClass('hidden')) && (jQuery('#adventure-slider_include-pages:checked').val() !== undefined)) {
		jQuery('#section-slider_pages').show().removeClass('hidden').addClass('visible');
	} else {
		jQuery('#section-slider_pages').hide().removeClass('visible').addClass('hidden');
	}
	
	if ((!jQuery('#section-slider_include').hasClass('hidden')) && (jQuery('#adventure-slider_include-posts:checked').val() !== undefined)) {
		jQuery('#section-slider_categories, #section-slider_posts_num').show().removeClass('hidden').addClass('visible');
	} else {
		jQuery('#section-slider_categories, #section-slider_posts_num').hide().removeClass('visible').addClass('hidden');
	}
	
	if ((!jQuery('#section-slider_include').hasClass('hidden')) && (jQuery('#adventure-slider_include-portfolio:checked').val() !== undefined)) {
		jQuery('#section-slider_pcats, #section-slider_portfolio_num').show().removeClass('hidden').addClass('visible');
	} else {
		jQuery('#section-slider_pcats, #section-slider_portfolio_num').hide().removeClass('visible').addClass('hidden');
	}
	
//	jQuery('#adventure-homepage_images-all').click(function() {
//		jQuery('#section-homepage_images input.checkbox').check();
//	});
});	