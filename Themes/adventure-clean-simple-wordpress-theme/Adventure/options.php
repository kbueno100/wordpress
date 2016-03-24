<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 * By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.
 * If the identifier changes, it'll appear as if the options have been reset.
 * 
 */

function optionsframework_option_name() {

	// This gets the theme name from the stylesheet (lowercase and without spaces)
	$themename = get_theme_data(STYLESHEETPATH . '/style.css');
	$themename = $themename['Name'];
	$themename = preg_replace("/\W/", "", strtolower($themename) );
	
	$optionsframework_settings = get_option('optionsframework');
	$optionsframework_settings['id'] = $themename;
	update_option('optionsframework', $optionsframework_settings);
	
	// echo $themename;
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the "id" fields, make sure to use all lowercase and no spaces.
 *  
 */

function optionsframework_options() {
	
		
	$options = array();
		
	/*********** GENERAL SETTINGS TAB ******************/
	
	$options[] = array( "name" => "General",
						"type" => "heading");
							
	$options[] = array( "name" => "Logo",
						"desc" => "Upload an image you want to use as the logo.",
						"id" => "logo",
						"std" => get_template_directory_uri() . '/images/logo.png',
						"type" => "upload");
							
	$options[] = array( "name" => "Footer logo",
						"desc" => "Upload an image you want to use as the logo in the footer.",
						"id" => "footer_logo",
						"std" => get_template_directory_uri() . '/images/logo-bottom.png',
						"type" => "upload");

	$options[] = array( "name" => "Default page subtitle",
						"desc" => "Text to appear as the default subtitle for all pages. Custom subtitles will be shown on the pages they are enabled and defined for.",
						"id" => "default_subtitle",
						"class" => "editor",
						"std" => 'Welcome to <span class="colored">PortableStudio</span>, Clean &amp; Simple  <span class="colored">HTML5 </span> template. Feel free to browse through all the pages and see what\'s "PortableStudio" capable to do for You. Enjoy!',
						"type" => "textarea"); 

	$options[] = array( "name" => "Footer Copyright box",
						"desc" => "Text to be used as the footer copyright content.",
						"id" => "copyright_content",
						"class" => "editor",
						"std" => "&copy; Copyright 2011. All Rights Reserved.",
						"type" => "textarea"); 
						
	$options[] = array( "name" => "Contact info details",
						"desc" => "Phone number",
						"id" => "contact_info_phone",
						"std" => "0123 456 789",
						"type" => "text");
						
	$options[] = array( "desc" => "Fax number",
						"id" => "contact_info_fax",
						"std" => "0123 456 789",
						"type" => "text");
						
	$options[] = array( "desc" => "Email",
						"id" => "contact_info_email",
						"std" => get_bloginfo('admin_email'),
						"type" => "text");
						
	$options[] = array( "name" => "Social network links",
						"desc" => "Facebook link",
						"id" => "social_link_facebook",
						"std" => "http://facebook.com/",
						"type" => "text");
						
	$options[] = array( "desc" => "Twitter link",
						"id" => "social_link_twitter",
						"std" => "http://twitter.com/",
						"type" => "text");
						
	$options[] = array( "desc" => "RSS feed link",
						"id" => "social_link_feed",
						"std" => get_bloginfo('rss2_url'),
						"type" => "text");

	$options[] = array( "name" => "404 Error Page",
						"desc" => "Text to be used as the 404 Error Page content.",
						"id" => "404_text",
						"class" => "editor",
						"std" => "Page not found.",
						"type" => "textarea"); 
						
	$options[] = array( "name" => "Footer Code",
						"desc" => "Code to be inserted in the footer.",
						"id" => "footer_code",
						"std" => "",
						"class" => 'script',
						"type" => "textarea"); 



	/*********** HOME PAGE SETTINGS TAB ******************/

	$options[] = array( "name" => "Homepage",
						"type" => "heading");
	
	$home_types = array(	'simple-slider'		=> 'Simple Slider (Default)',
							'nivo-slider' 		=> 'Nivo Slider',
							'nivo-thumb-slider' => 'Nivo Thumb Slider',
							'simple-content'	=> 'Simple Content Slider',
							'3d-slider'			=> '3D Slider',
							'accordion-slider'	=> 'Accordion Slider',
							'video-homepage'	=> 'Video Homepage',
							'grid-homepage'		=> 'Grid Homepage',
							'static-homepage'	=> 'Static Homepage',
							'cycle-slider'		=> 'Cycle Slider'
						);
		
	// If using image radio buttons, define a directory path
	$imagepath =  get_stylesheet_directory_uri() . '/admin/images/';

	$options[] = array( "name" => "Homepage type",
						"desc" => "Select the type of homepage you want.",
						"id" => "home_type",
						"std" => "simple-slider",
						"type" => "select",
						"class" => "mini", //mini, tiny, small
						"options" => $home_types);
	
	// Home templates
	$home_templates = array(	'simple-slider'		=> 'home-simple-slider.php',
								'nivo-slider' 		=> 'home-nivo-slider.php',
								'nivo-thumb-slider' => 'home-nivo-thumb-slider.php',
								'simple-content'	=> 'home-simple-content.php',
								'3d-slider'			=> 'home-3d-slider.php',
								'accordion-slider'	=> 'home-accordion-slider.php',
								'video-homepage'	=> 'home-video-homepage.php',
								'grid-homepage'		=> 'home-grid-homepage.php',
								'static-homepage'	=> 'home-static-homepage.php',
								'cycle-slider'		=> 'home-cycle-slider.php'
						);

	$options[] = array( "name" => "Slider options",
						'type' => 'optiongroup',
						'class' => 'nivo-slider nivo-thumb-slider simple-content simple-slider accordion-slider grid-homepage cycle-slider');

	// Content types
	$content_types = array( 'homeimages' => "Homepage images", 'unattached' => 'Media library unattached images', "pages" => "Pages", "posts" => "Blog posts", "portfolio" => "Portfolio items");
	
	// Default slider conent types
	$default_types = array('homeimages' => '1');
								
	$options[] = array( "desc" => "Select the types of content you want to include in the slider.",
						"id" => "slider_include",
						"std" => $default_types,
						"type" => "multicheck",
						'class' => 'nivo-slider nivo-thumb-slider simple-homepage simple-slider 3d-slider accordion-slider',
						"options" => $content_types);
						
	// Pull all the home page attachments
	$options_atts = array();  
    $args = array(
		'post_type' => 'attachment',
		'numberposts' => -1,
		'post_status' => null,
		'post_parent' => get_option('page_on_front'),
		'orderby' => 'menu_order',
		'order' => 'ASC'
		); 
	$options_atts_obj = get_posts($args);
//	$options_atts['all'] = 'All';
	foreach ($options_atts_obj as $att) {
    	$options_atts[$att->ID] = $att->post_title;
		$default_atts[$att->ID] = '1';
	}

	$options[] = array( "name" => "Homepage images to include in the slideshow",
						"desc" => "Select the images attached to the Homepage you want to include in the slider.",
						"id" => "homepage_images",
						"std" => $default_atts,
						"options" => $options_atts,
						'class' => 'nivo-slider nivo-thumb-slider simple-homepage simple-slider 3d-slider accordion-slider hidden',
						"type" => "multicheck");

	$options[] = array( "name" => "Unattached images to include in the slideshow",
						"desc" => "Number of images to include. Only the latest images for the selected slideshow will be included.",
						"id" => "unattached_images",
						"std" => '3',
						"type" => "text",
						'class' => 'nivo-slider nivo-thumb-slider simple-homepage simple-slider 3d-slider accordion-slider mini hidden');
	
	// Pull all the pages into an array
	$options_pages = array();  
	$options_pages_obj = get_pages('sort_column=post_parent,menu_order');
	foreach ($options_pages_obj as $page) {
    	$options_pages[$page->ID] = $page->post_title;
		$default_pages[$page->ID] = '1';
	}

	$options[] = array( "name" => "Pages to include in the slideshow",
						"desc" => "Select the pages you want to include in the slider (featured images are used for the slideshow).",
						"id" => "slider_pages",
						"options" => $options_pages,
						'class' => 'nivo-slider nivo-thumb-slider simple-homepage simple-slider 3d-slider accordion-slider hidden',
						"type" => "multicheck");
	
	// Pull all the categories into an array
	$options_categories = array();  
	$options_categories_obj = get_categories();
	foreach ($options_categories_obj as $category) {
    	$options_categories[$category->cat_ID] = $category->cat_name;
		$default_categories[$category->cat_ID] = '1';
	}

	$options[] = array( "name" => "Blog categories to include posts from in the slideshow",
						"desc" => "Select the categories you want to include posts from in the slider (featured images are used for the slideshow).",
						"id" => "slider_categories",
						"options" => $options_categories,
						'class' => 'nivo-slider nivo-thumb-slider simple-homepage simple-slider 3d-slider accordion-slider hidden',
						"type" => "multicheck");
	
	$options[] = array( "desc" => "Number of posts to include. Only the latest posts from the selected categories will be included.",
						"id" => "slider_posts_num",
						"type" => "text",
						'class' => 'nivo-slider nivo-thumb-slider simple-homepage simple-slider 3d-slider accordion-slider mini hidden');
						
	// Pull all the portfolio categories into an array
	$options_pc = array();  
	$options_pc_obj = get_categories(array('taxonomy' => 'adv_portfolio_cat', 'hierarchical' => 0));
	foreach ($options_pc_obj as $category) {
    	$options_pc[$category->term_id] = $category->name;
		$default_pc[$category->term_id] = '1';
	}

	$options[] = array( "name" => "Portfolio categories to include items from in the slideshow",
						"desc" => "Select the categories you want to include portfolio items from in the slider (featured images are used for the slideshow).",
						"id" => "slider_pcats",
						"options" => $options_pc,
						'class' => 'nivo-slider nivo-thumb-slider simple-homepage simple-slider 3d-slider accordion-slider hidden',
						"type" => "multicheck");
	
	$options[] = array( "desc" => "Number of portfolio items to include. Only the latest items from the selected portfolio categories will be included.",
						"id" => "slider_portfolio_num",
						"type" => "text",
						'class' => 'nivo-slider nivo-thumb-slider simple-homepage simple-slider 3d-slider accordion-slider mini hidden');
						
	$options[] = array( 'type' => 'endoptiongroup' );					
							
	$options[] = array( "name" => "3D slider options",
						'type' => 'optiongroup',
						'class' => '3d-slider');

	$options[] = array( "name" => "3D Slider ID",
						"desc" => "Enter the ID of the Piecemaker slideshow.",
						"id" => "piecemaker_id",
						"std" => '',
						'class' => 'mini',
						"type" => "text"); 

	$options[] = array( 'type' => 'endoptiongroup' );
							
	$options[] = array( "name" => "Video slider options",
						'type' => 'optiongroup',
						'class' => 'video-homepage');
							
	$options[] = array( "name" => "Video embed code",
						"desc" => "Enter video embed code to be shown if you select the Video Homepage type. Full-width video should be 1020px wide.",
						"id" => "homepage_video",
						"std" => '<iframe src="http://player.vimeo.com/video/7449107?title=0&amp;byline=0&amp;portrait=0" width="1020" height="570" ></iframe>',
						"type" => "textarea"); 

	$options[] = array( 'type' => 'endoptiongroup' );
					
	// Nivo slider options
	$options[] = array( "name" => "Nivo Slider Options",
						"type" => "optiongroup",
						"class" => "nivo-slider nivo-thumb-slider"
						);	
					
	$nivo_effects = array(	'sliceDown'		=> 'Slice Down',
							'sliceDownLeft'	=> 'Slice Down Left',
							'sliceUp'		=> 'Slice Up',
							'sliceUpLeft'	=> 'Slice Up Left',
							'sliceUpDown'	=> 'Slice Up Down',
							'sliceUpDownLeft'	=> 'Slice Up Down Left',
							'fold'			=> 'Fold',
							'fade'			=> 'Fade',
							'random'		=> 'Random',
							'slideInRight'	=> 'Slide In Right',
							'slideInLeft'	=> 'Slide In Left',
							'boxRandom'		=> 'Box Random',
							'boxRain'		=> 'Box Rain',
							'boxRainReverse'=> 'Box Rain Reverse',
							'boxRainGrow'	=> 'Box Rain Grow',
							'boxRainGrowReverse' => 'Box Rain Grow Reverse'
						);
						
	ksort($nivo_effects);
	
	$options[] = array( "desc" => "Transition Effects",
						"id" => "nivo_effect",
						"std" => "random",
						"type" => "select",
						"class" => "mini", //mini, tiny, small
						"options" => $nivo_effects);
	
	$options[] = array( "desc" => "Slices (for slice animations)",
						"id" => "nivo_slices",
						"std" => '15',
						'class' => 'mini',
						"type" => "text"); 
	
	$options[] = array( "desc" => "Box Columns (for box animations)",
						"id" => "nivo_boxcols",
						"std" => '8',
						'class' => 'mini',
						"type" => "text"); 
	
	$options[] = array( "desc" => "Box Rows (for box animations)",
						"id" => "nivo_boxrows",
						"std" => '4',
						'class' => 'mini',
						"type" => "text"); 
	
	$options[] = array( "desc" => "Slide transition speed (seconds)",
						"id" => "nivo_animspeed",
						"std" => '0.5',
						'class' => 'mini',
						"type" => "text"); 
	
	$options[] = array( "desc" => "How long each slide will show (seconds)",
						"id" => "nivo_pausetime",
						"std" => '3',
						'class' => 'mini',
						"type" => "text"); 
	
	$options[] = array( "desc" => "Starting slide",
						"id" => "nivo_startslide",
						"std" => '1',
						'class' => 'mini',
						"type" => "text"); 
											
	$options[] = array( "desc" => "Next & Prev navigation",
						"id" => "nivo_directionnav",
						"std" => "1",
						"type" => "checkbox");
	
	$options[] = array( "desc" => "Prev navigation text",
						"id" => "nivo_prevtext",
						"std" => 'Prev',
						'class' => 'mini',
						"type" => "text"); 
	
	$options[] = array( "desc" => "Next navigation text",
						"id" => "nivo_nexttext",
						"std" => 'Next',
						'class' => 'mini',
						"type" => "text"); 
	
	$options[] = array( "desc" => "Starting slide",
						"id" => "nivo_startSlide",
						"std" => '1',
						'class' => 'mini',
						"type" => "text"); 
											
	$options[] = array( "desc" => "Show Next & Prev navigation only on hover",
						"id" => "nivo_directionnavhide",
						"std" => "1",
						"type" => "checkbox");
											
	$options[] = array( "desc" => "Control (1, 2, 3...) navigation",
						"id" => "nivo_controlnav",
						"std" => "1",
						"type" => "checkbox");
											
	$options[] = array( "desc" => "Keyboard left & right arrow navigation",
						"id" => "nivo_keyboardnav",
						"std" => "1",
						"type" => "checkbox");
											
	$options[] = array( "desc" => "Stop animation while hovering",
						"id" => "nivo_pauseonhover",
						"std" => "1",
						"type" => "checkbox");
											
	$options[] = array( "desc" => "Force manual transitions",
						"id" => "nivo_manualadvance",
						"std" => "0",
						"type" => "checkbox");

	$options[] = array( 'type' => 'endoptiongroup');
	
	// Simple content slider options
	$options[] = array( "name" => "Simple Content Slider Options",
						"type" => "optiongroup",
						"class" => "simple-content"
						);	
					
	$shs_effects = array(	'slide'	=> 'Slide',
							'fade'	=> 'Fade'
						);
						
	$options[] = array( "desc" => "Transition effects",
						"id" => "shs_effects",
						"std" => "slide",
						"type" => "select",
						"class" => "mini", //mini, tiny, small
						"options" => $shs_effects);
											
	$options[] = array( "desc" => "Show next/prev buttons",
						"id" => "shs_generatenextprev",
						"std" => "0",
						"type" => "checkbox");
											
	$options[] = array( "desc" => "Show pagination",
						"id" => "shs_generatepagination",
						"std" => "1",
						"type" => "checkbox");

	$options[] = array( "desc" => "Speed of the fading animation (seconds)",
						"id" => "shs_fadespeed",
						"std" => '0.5',
						'class' => 'mini',
						"type" => "text"); 

	$options[] = array( "desc" => "Speed of the sliding animation (seconds)",
						"id" => "shs_slidespeed",
						"std" => '0.5',
						'class' => 'mini',
						"type" => "text"); 

	$options[] = array( "desc" => "Starting slide",
						"id" => "shs_start",
						"std" => '1',
						'class' => 'mini',
						"type" => "text"); 
											
	$options[] = array( "desc" => "Crossfade images",
						"id" => "shs_crossfade",
						"std" => "0",
						"type" => "checkbox");
											
	$options[] = array( "desc" => "Randomize slides",
						"id" => "shs_randomize",
						"std" => "0",
						"type" => "checkbox");

	$options[] = array( "desc" => "Pause between slides in autoplay (seconds - set to 0 to disable autoplay)",
						"id" => "shs_play",
						"std" => '0',
						'class' => 'mini',
						"type" => "text"); 

	$options[] = array( "desc" => "Pause between slides on click of next/prev or pagination (seconds)",
						"id" => "shs_pause",
						"std" => '0',
						'class' => 'mini',
						"type" => "text"); 
								
	$options[] = array( "desc" => "Stop animation while hovering",
						"id" => "shs_hoverpause",
						"std" => "0",
						"type" => "checkbox");
								
	$options[] = array( "desc" => "Move to next slide on click",
						"id" => "shs_bigtarget",
						"std" => "0",
						"type" => "checkbox");

	$options[] = array( 'type' => 'endoptiongroup');

	// Simple slider options
	$options[] = array( "name" => "Simple Slider Options",
						"type" => "optiongroup",
						"class" => "simple-slider"
						);	
					
	$ss_effects = array(	'slide'	=> 'Slide',
							'fade'	=> 'Fade'
						);
						
	$options[] = array( "desc" => "Transition effects",
						"id" => "ss_effects",
						"std" => "slide",
						"type" => "select",
						"class" => "mini", //mini, tiny, small
						"options" => $ss_effects);
											
	$options[] = array( "desc" => "Show next/prev buttons",
						"id" => "ss_generatenextprev",
						"std" => "0",
						"type" => "checkbox");
											
	$options[] = array( "desc" => "Show pagination",
						"id" => "ss_generatepagination",
						"std" => "1",
						"type" => "checkbox");

	$options[] = array( "desc" => "Speed of the fading animation (seconds)",
						"id" => "ss_fadespeed",
						"std" => '0.5',
						'class' => 'mini',
						"type" => "text"); 

	$options[] = array( "desc" => "Speed of the sliding animation (seconds)",
						"id" => "ss_slidespeed",
						"std" => '0.5',
						'class' => 'mini',
						"type" => "text"); 

	$options[] = array( "desc" => "Starting slide",
						"id" => "ss_start",
						"std" => '1',
						'class' => 'mini',
						"type" => "text"); 
											
	$options[] = array( "desc" => "Crossfade images",
						"id" => "ss_crossfade",
						"std" => "0",
						"type" => "checkbox");
											
	$options[] = array( "desc" => "Randomize slides",
						"id" => "ss_randomize",
						"std" => "0",
						"type" => "checkbox");

	$options[] = array( "desc" => "Pause between slides in autoplay (seconds - set to 0 to disable autoplay)",
						"id" => "ss_play",
						"std" => '4',
						'class' => 'mini',
						"type" => "text"); 

	$options[] = array( "desc" => "Pause between slides on click of next/prev or pagination (seconds)",
						"id" => "ss_pause",
						"std" => '2',
						'class' => 'mini',
						"type" => "text"); 
								
	$options[] = array( "desc" => "Stop animation while hovering",
						"id" => "ss_hoverpause",
						"std" => "0",
						"type" => "checkbox");
								
	$options[] = array( "desc" => "Move to next slide on click",
						"id" => "ss_bigtarget",
						"std" => "0",
						"type" => "checkbox");

	$options[] = array( 'type' => 'endoptiongroup');

	// Kwicks slider options
	$options[] = array( "name" => "Accordion Slider Options",
						"type" => "optiongroup",
						"class" => "accordion-slider"
						);	
											
	$options[] = array( "desc" => "One slide is always expanded",
						"id" => "acc_sticky",
						"std" => "0",
						"type" => "checkbox");

	$options[] = array( "desc" => "The initially expanded slide",
						"id" => "acc_defaultkwick",
						"std" => '1',
						'class' => 'mini',
						"type" => "text"); 
					
	$acc_triggs = array(	'mouseover'	=> 'Mouseover',
							'click'	=> 'Click',
							'dblclick' => 'Double click'
						);
						
	$options[] = array( "desc" => "Trigger for the slide expanding effect",
						"id" => "acc_event",
						"std" => "mouseover",
						"type" => "select",
						"class" => "mini", //mini, tiny, small
						"options" => $acc_triggs);

	$options[] = array( "desc" => "Duration of the animation effect (seconds)",
						"id" => "acc_duration",
						"std" => '0.2',
						'class' => 'mini',
						"type" => "text"); 

	$options[] = array( 'type' => 'endoptiongroup');
	
	// Cycle slider options
	$options[] = array( "name" => "Cycle Slider Options",
						"type" => "optiongroup",
						"class" => "cycle-slider"
						);	
					
	$cycle_effects = array(	'blindX'		=> 'Blind X',
							'blindY'		=> 'Blind Y',
							'blindZ'		=> 'Blind Z',
							'cover'			=> 'Cover',
							'curtainX'		=> 'Curtain X',
							'curtainY'		=> 'Curtain Y',
							'fade'			=> 'Fade',
							'fadeZoom'		=> 'Fade Zoom',
							'growX'			=> 'Grow X',
							'growY'			=> 'Grow Y',
							'none'			=> 'None',
							'random'		=> 'Random',
							'scrollUp'		=> 'Scroll Up',
							'scrollDown'	=> 'Scroll Down',
							'scrollLeft'	=> 'Scroll Left',
							'scrollRight'	=> 'Scroll Right',
							'scrollHorz'	=> 'Scroll Horizontally',
							'scrollVert'	=> 'Scroll Vertically',
							'shuffle'		=> 'Shuffle',
							'slideX'		=> 'Slide X',
							'slideY'		=> 'Slide Y',
							'toss'			=> 'Toss',
							'turnUp'		=> 'Turn Up',
							'turnDown'		=> 'Turn Down',
							'turnLeft'		=> 'Turn Left',
							'turnRight'		=> 'Turn Right',
							'uncover'		=> 'Uncover',
							'wipe'			=> 'Wipe',
							'zoom'			=> 'Zoom'
						);
						
	ksort($cycle_effects);
	
	$options[] = array( "desc" => "Transition Effects",
						"id" => "cycle_fx",
						"std" => "random",
						"type" => "select",
						"class" => "mini", //mini, tiny, small
						"options" => $cycle_effects);
											
	$options[] = array( "desc" => "Pause while hovering",
						"id" => "cycle_pause",
						"std" => "1",
						"type" => "checkbox");
											
	$options[] = array( "desc" => "Randomize slides (not applicable to Shuffle effect)",
						"id" => "cycle_random",
						"std" => "0",
						"type" => "checkbox");
	
	$options[] = array( "desc" => "Slide transition speed (seconds)",
						"id" => "cycle_speed",
						"std" => '0.5',
						'class' => 'mini',
						"type" => "text"); 
	
	$options[] = array( "desc" => "How long each slide will show (seconds)",
						"id" => "cycle_timeout",
						"std" => '3',
						'class' => 'mini',
						"type" => "text"); 
	
	$options[] = array( "desc" => "Starting slide",
						"id" => "cycle_startingslide",
						"std" => '1',
						'class' => 'mini',
						"type" => "text"); 

	$options[] = array( 'type' => 'endoptiongroup');
	
	// Preview
	$options[] = array( 'name' => 'Preview',
						'desc' => 'Save new settings to update the preview.',
						'id' => 'home_preview',
						'std' => 'simple-slider',
						'type' => 'include',
						'options' => $home_templates
					);

	/*********** POSTS SETTINGS TAB ******************/
	
	$options[] = array( "name" => "Blog",
						"type" => "heading");
						
	$imagepath =  get_template_directory_uri() . '/images/';
	
							
	$options[] = array( "name" => "Blog type",
						"desc" => "Select the type of layout to be used on the blog.",
						"id" => "blog_type",
						"std" => "one",
						"type" => "images",
						"options" => array(
							'one' => $imagepath . 'blog-one.png',
							'two' => $imagepath . 'blog-two.png')
						);
							
	$options[] = array( "name" => "Blog posts",
						"desc" => "Number of blog posts per page",
						"id" => "posts_per_page",
						"std" => "10",
						"class" => "mini",
						"type" => "text");
	
	/*********** PORTFOLIO SETTINGS TAB ******************/
	
	$options[] = array( "name" => "Portfolio",
						"type" => "heading");
							
							
	$options[] = array( "name" => "Portfolio type",
						"desc" => "Select the type of layout to be used on the portfolio page.",
						"id" => "portfolio_type",
						"std" => "one",
						"type" => "images",
						"options" => array(
							'one' => $imagepath . 'pf-one.png',
							'two' => $imagepath . 'pf-two.png',
							'three' => $imagepath . 'pf-three.png',
							'four' => $imagepath . 'pf-four.png',
							'four-two' => $imagepath . 'pf-four-two.png',
							'five' => $imagepath . 'pf-five.png'
							)
						);
						
	$options[] = array( "name" => "Portfolio items",
						"desc" => "Number of portfolio items per page",
						"id" => "portfolio_per_page",
						"std" => "10",
						"class" => "mini",
						"type" => "text");

	/*********** COLORS AND TYPOGRAPHY SETTINGS TAB ******************/

	$options[] = array( "name" => "Colors and Fonts",
						"type" => "heading");
		
	$available_styles = array(	'style' 			=> 'Default',
								'blue-theme' 		=> 'Blue',
								'blue-theme-new' 	=> 'Blue (New)',
								'brown-theme'		=> 'Brown',
								'brown-theme-new' 	=> 'Brown (New)',
								'dark-blue-theme' 	=> 'Dark Blue',
								'dark-green-theme'	=> 'Dark Green',
								'dark-orange-theme'	=> 'Dark Orange',
								'dark-purple-theme' => 'Dark Purple',
								'dark-red-theme'	=> 'Dark Red',
								'dark-theme-new'	=> 'Dark Theme (New)',
								'dark-yellow-theme'	=> 'Dark Yellow',
								'green-theme'		=> 'Green',
								'light-brown-theme'	=> 'Light Brown',
								'light-purple-theme'=> 'Light Purple',
								'orange-theme'		=> 'Orange',
								'pure-red-theme'	=> 'Pure Red',
								'purple-theme'		=> 'Purple',
								'purple-theme-new'	=> 'Purple (New)',
								'yellow-theme'		=> 'Yellow'
						);					
	
	$options[] = array( 'name' => 'Color Themes',
						'desc' => 'Select a color theme to be applied across the website.',
						'id' => 'color_theme',
						'type' => 'select',
						'std' => 'style',
						'options' => $available_styles
					);

	global $default_fonts;
	
	$options[] = array( 'name' => 'Fonts',
						'desc' => 'H1',
						'id' => 'h1_font',
						'type' => 'typography',
						'std' => $default_fonts['h1'],
					);
	$options[] = array(	'desc' => 'H2',
						'id' => 'h2_font',
						'type' => 'typography',
						'std' => $default_fonts['h2'],
					);
	$options[] = array(	'desc' => 'H3',
						'id' => 'h3_font',
						'type' => 'typography',
						'std' => $default_fonts['h3'],
					);
	$options[] = array(	'desc' => 'H4',
						'id' => 'h4_font',
						'type' => 'typography',
						'std' => $default_fonts['h4'],
					);
	$options[] = array(	'desc' => 'H5',
						'id' => 'h5_font',
						'type' => 'typography',
						'std' => $default_fonts['h5'],
					);
	$options[] = array(	'desc' => 'H6',
						'id' => 'h6_font',
						'type' => 'typography',
						'std' => $default_fonts['h6'],
					);
	$options[] = array( 'desc' => 'Body text',
						'id' => 'body_font',
						'type' => 'typography',
						'std' => $default_fonts['body'],
					);
	
						
	// Background Defaults
	
	$background_defaults = array('color' => '#FFF', 'image' => get_template_directory_uri() . '/images/body-bg-1.png', 'repeat' => 'repeat','position' => '','attachment'=>'');

	$options[] = array( "name" =>  "Background",
						"desc" => "Change the background color and image.",
						"id" => "background",
						"std" => $background_defaults, 
						"type" => "background");

	return $options;
}