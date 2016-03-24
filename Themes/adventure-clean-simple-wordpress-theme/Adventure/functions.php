<?php
function add_more_buttons($buttons) {
 $buttons[] = 'hr';
 $buttons[] = 'del';
 $buttons[] = 'sub';
 $buttons[] = 'sup';
 $buttons[] = 'fontselect';
 $buttons[] = 'fontsizeselect';
 $buttons[] = 'cleanup';
 $buttons[] = 'styleselect';
 return $buttons;
}
add_filter("mce_buttons_3", "add_more_buttons");

if ( STYLESHEETPATH == TEMPLATEPATH ) {
	define('OF_FILEPATH', TEMPLATEPATH);
	define('OF_DIRECTORY', get_template_directory_uri());
} else {
	define('OF_FILEPATH', STYLESHEETPATH);
	define('OF_DIRECTORY', get_stylesheet_directory_uri());
}

require_once (OF_FILEPATH . '/admin/tinymce/shortcodes-generator.php');
global $available_fonts, $default_fonts;
$available_fonts = array('names' => array(	'shanti'				=> 'Shanti',
											'mako'					=> 'Mako',
											'crimson-text'			=> 'Crimson Text',
											'droid-sans'			=> 'Droid Sans',
											'play'					=> 'Play',
											'terminal-dosis-light'	=> 'Terminal Dosis Light',
											'pacifico'				=> 'Pacifico',
											'crushed'				=> 'Crushed',
											'puritan'				=> 'Puritan',
											'yanone-kaffeesatz'		=> 'Yanone Kaffeesatz',
											'oswald'				=> 'Oswald',
											'anonymous-pro'			=> 'Anonymous Pro',
											'vollkorn'				=> 'Vollkorn',
											'ofl-sorts-mill-goudy'	=> 'OFL Sorts Mill Goudy TT',
											'nobile'				=> 'Nobile',
											'molegno'				=> 'Molegno',
											'allerta'				=> 'Allerta',
											'metrophobic'			=> 'Metrophobic',
											'annie-use-your'		=> 'Annie Use Your Telescope',
											'francois-one'			=> 'Francois One',
											'rokkitt'				=> 'Rokkitt',
											'didact-gothic'			=> 'Didact Gothic',
											'news-cycle'			=> 'News Cycle',
											'special-elite'			=> 'Special Elite',
											'kreon'					=> 'Kreon',
											'orbitron'				=> 'Orbitron',
											'radley'				=> 'Radley',
											'bentham'				=> 'Bentham',
											'josefin-sans'			=> 'Josefin Sans',
											'love-ya'				=> 'Love Ya Like A Sister',
											'forum'					=> 'Forum',
											'bowlby-one'			=> 'Bowlby One SC',
											'lobster-two'			=> 'Lobster Two',
											'redressed'				=> 'Redressed',
											'goblin-one'			=> 'Goblin One',
											'aclonica'				=> 'Aclonica',
											'jura'					=> 'Jura',
											'caudex'				=> 'Caudex',
											'kameron'				=> 'Kameron',
											'podkova'				=> 'Podkova',
											'sigmar-one'			=> 'Sigmar One',
											'unifrakturcook'		=> 'UnifrakturCook',
											'nova-round'			=> 'Nova Round',
											'raleway'				=> 'Raleway',
											'shadows-into-light'	=> 'Shadows Into Light',
											'artifika'				=> 'Artifika',
											'nunito'				=> 'Nunito',
											'cabin-sketch'			=> 'Cabin Sketch',
											'lobster'				=> 'Lobster',
											'michroma'				=> 'Michroma',
											'waiting-for-the-sun'	=> 'Waiting for the Sunrise',
											'bevan'					=> 'Bevan',
											'arial'     => 'Arial',
											'verdana'   => 'Verdana, Geneva',
											'trebuchet' => 'Trebuchet',
											'georgia'   => 'Georgia',
											'times'     => 'Times New Roman',
											'tahoma'    => 'Tahoma, Geneva',
											'palatino'  => 'Palatino',
											'helvetica' => 'Helvetica*'
										),
						'urls' => array(	'shanti'				=> 'http://fonts.googleapis.com/css?family=Shanti',
											'mako'					=> 'http://fonts.googleapis.com/css?family=Mako',
											'crimson-text'			=> 'http://fonts.googleapis.com/css?family=Crimson+Text:regular,regularitalic,600,600italic,bold,bolditalic',
											'droid-sans'			=> 'http://fonts.googleapis.com/css?family=Droid+Sans:regular,bold',
											'play'					=> 'http://fonts.googleapis.com/css?family=Play',
											'terminal-dosis-light'	=> 'http://fonts.googleapis.com/css?family=Terminal+Dosis+Light',
											'pacifico'				=> 'http://fonts.googleapis.com/css?family=Pacifico',
											'crushed'				=> 'http://fonts.googleapis.com/css?family=Crushed',
											'puritan'				=> 'http://fonts.googleapis.com/css?family=Puritan',
											'yanone-kaffeesatz'		=> 'http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz',
											'oswald'				=> 'http://fonts.googleapis.com/css?family=Oswald',
											'anonymous-pro'			=> 'http://fonts.googleapis.com/css?family=Anonymous+Pro',
											'vollkorn'				=> 'http://fonts.googleapis.com/css?family=Vollkorn',
											'ofl-sorts-mill-goudy'	=> 'http://fonts.googleapis.com/css?family=OFL+Sorts+Mill+Goudy+TT',
											'nobile'				=> 'http://fonts.googleapis.com/css?family=Nobile',
											'molegno'				=> 'http://fonts.googleapis.com/css?family=Molengo',
											'allerta'				=> 'http://fonts.googleapis.com/css?family=Allerta',
											'metrophobic'			=> 'http://fonts.googleapis.com/css?family=Metrophobic',
											'annie-use-your'		=> 'http://fonts.googleapis.com/css?family=Annie+Use+Your+Telescope',
											'francois-one'			=> 'http://fonts.googleapis.com/css?family=Francois+One',
											'rokkitt'				=> 'http://fonts.googleapis.com/css?family=Rokkitt',
											'didact-gothic'			=> 'http://fonts.googleapis.com/css?family=Didact+Gothic',
											'news-cycle'			=> 'http://fonts.googleapis.com/css?family=News+Cycle',
											'special-elite'			=> 'http://fonts.googleapis.com/css?family=Special+Elite',
											'kreon'					=> 'http://fonts.googleapis.com/css?family=Kreon',
											'orbitron'				=> 'http://fonts.googleapis.com/css?family=Orbitron',
											'radley'				=> 'http://fonts.googleapis.com/css?family=Radley',
											'bentham'				=> 'http://fonts.googleapis.com/css?family=Bentham',
											'josefin-sans'			=> 'http://fonts.googleapis.com/css?family=Josefin+Sans',
											'love-ya'				=> 'http://fonts.googleapis.com/css?family=Love+Ya+Like+A+Sister&v1',
											'forum'					=> 'http://fonts.googleapis.com/css?family=Forum&v1',
											'bowlby-one'			=> 'http://fonts.googleapis.com/css?family=Bowlby+One+SC&v1',
											'lobster-two'			=> 'http://fonts.googleapis.com/css?family=Lobster+Two&v1',
											'redressed'				=> 'http://fonts.googleapis.com/css?family=Redressed&v1',
											'goblin-one'			=> 'http://fonts.googleapis.com/css?family=Goblin+One&v1',
											'aclonica'				=> 'http://fonts.googleapis.com/css?family=Aclonica&v1',
											'jura'					=> 'http://fonts.googleapis.com/css?family=Jura&v1',
											'caudex'				=> 'http://fonts.googleapis.com/css?family=Caudex&v1',
											'kameron'				=> 'http://fonts.googleapis.com/css?family=Kameron&v1',
											'podkova'				=> 'http://fonts.googleapis.com/css?family=Podkova&v1',
											'sigmar-one'			=> 'http://fonts.googleapis.com/css?family=Sigmar+One&v1',
											'unifrakturcook'		=> 'http://fonts.googleapis.com/css?family=UnifrakturCook:bold&v1',
											'nova-round'			=> 'http://fonts.googleapis.com/css?family=Nova+Round&v1',
											'raleway'				=> 'http://fonts.googleapis.com/css?family=Raleway:100&v1',
											'shadows-into-light'	=> 'http://fonts.googleapis.com/css?family=Shadows+Into+Light&v1',
											'artifika'				=> 'http://fonts.googleapis.com/css?family=Artifika&v1',
											'nunito'				=> 'http://fonts.googleapis.com/css?family=Nunito&v1',
											'cabin-sketch'			=> 'http://fonts.googleapis.com/css?family=Cabin+Sketch:bold&v1',
											'lobster'				=> 'http://fonts.googleapis.com/css?family=Lobster&v1',
											'michroma'				=> 'http://fonts.googleapis.com/css?family=Michroma&v1',
											'waiting-for-the-sun'	=> 'http://fonts.googleapis.com/css?family=Waiting+for+the+Sunrise&v1',
											'bevan'					=> 'http://fonts.googleapis.com/css?family=Bevan&v1'
										)
					);
$default_fonts = array(
					'h1' => array(
						'size' => '34px',
						'face' => 'crimson-text',
						'style' => 'normal',
						'color' => '#272727'
					),
					'h2' => array(
						'size' => '28px',
						'face' => 'crimson-text',
						'style' => 'normal',
						'color' => '#272727'
					),
					'h3' => array(
						'size' => '24px',
						'face' => 'crimson-text',
						'style' => 'normal',
						'color' => '#272727'
					),
					'h4' => array(
						'size' => '20px',
						'face' => 'crimson-text',
						'style' => 'normal',
						'color' => '#272727'
					),
					'h5' => array(
						'size' => '16px',
						'face' => 'crimson-text',
						'style' => 'normal',
						'color' => '#272727'
					),
					'h6' => array(
						'size' => '14px',
						'face' => 'crimson-text',
						'style' => 'normal',
						'color' => '#272727'
					),
					'body' => array(
						'size' => '12px',
						'face' => 'droid-sans',
						'style' => 'normal',
						'color' => '#666666'
					),
					'menu' => array(
						'size' => '11px',
						'face' => 'droid-sans',
						'style' => 'normal',
						'color' => '#3D4753'
					)
				);

/**

 * Tell WordPress to run adventure_setup() when the 'after_setup_theme' hook is run.

 */

add_action( 'after_setup_theme', 'adventure_setup' );



if ( ! function_exists( 'adventure_setup' ) ):

/**

 * Sets up theme defaults and registers support for various WordPress features.

 *

 * Note that this function is hooked into the after_setup_theme hook, which runs

 * before the init hook. The init hook is too late for some features, such as indicating

 * support post thumbnails.

 *

 * To override adventure_setup() in a child theme, add your own adventure_setup to your child theme's

 * functions.php file.

 *

 * @uses load_theme_textdomain() For translation/localization support.

 * @uses add_editor_style() To style the visual editor.

 * @uses add_theme_support() To add support for post thumbnails, automatic feed links, and Post Formats.

 * @uses register_nav_menus() To add support for navigation menus.

 * @uses add_custom_background() To add support for a custom background.

 * @uses set_post_thumbnail_size() To set a custom post thumbnail size.

 *

 * @since Portable Studio 1.0

 */

function adventure_setup() {



	/* Make Portable Studio available for translation.

	 * Translations can be added to the /languages/ directory.

	 * If you're building a theme based on Portable Studio, use a find and replace

	 * to change 'adventure' to the name of your theme in all the template files.

	 */

	load_theme_textdomain( 'adventure', TEMPLATEPATH . '/languages' );



	$locale = get_locale();

	$locale_file = TEMPLATEPATH . "/languages/$locale.php";

	if ( is_readable( $locale_file ) )

		require_once( $locale_file );



	// This theme styles the visual editor with editor-style.css to match the theme style.

	add_editor_style();



	// Load up our theme options page and related code.
	if ( !function_exists( 'optionsframework_init' ) ) {
	
	/*-----------------------------------------------------------------------------------*/
	/* Options Framework Theme
	/*-----------------------------------------------------------------------------------*/
	
	/* Set the file path based on whether the Options Framework Theme is a parent theme or child theme */
	
	if ( STYLESHEETPATH == TEMPLATEPATH ) {
		define('OPTIONS_FRAMEWORK_URL', TEMPLATEPATH . '/admin/');
		define('OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/admin/');
	} else {
		define('OPTIONS_FRAMEWORK_URL', STYLESHEETPATH . '/admin/');
		define('OPTIONS_FRAMEWORK_DIRECTORY', get_stylesheet_directory_uri() . '/admin/');
	}
	
	require_once (OPTIONS_FRAMEWORK_URL . 'options-framework.php');
	
	}
	
	/* 
	 * This is an example of how to add custom scripts to the options panel.
	 * This one shows/hides the an option when a checkbox is clicked.
	 */
	
	add_action('optionsframework_custom_scripts', 'optionsframework_custom_scripts');
	
	function optionsframework_custom_scripts() { ?>
	
	<script type="text/javascript">
	jQuery(document).ready(function() {
	
		jQuery('#example_showhidden').click(function() {
			jQuery('#section-example_text_hidden').fadeToggle(400);
		});
		
		if (jQuery('#example_showhidden:checked').val() !== undefined) {
			jQuery('#section-example_text_hidden').show();
		}
		
	});
	</script>
	
	<?php
	}



	// Add default posts and comments RSS feed links to <head>.

	add_theme_support( 'automatic-feed-links' );



	// This theme uses wp_nav_menu() in one location.

	register_nav_menu( 'primary', __( 'Primary Menu', 'adventure' ) );
	register_nav_menu( 'footer', __( 'Footer Menu', 'adventure' ) );


	// This theme uses Featured Images (also known as post thumbnails) for per-post/per-page Custom Header images

	add_theme_support( 'post-thumbnails' );

	add_image_size( 'blog', 710, 210, true ); // Used for blog posts
	add_image_size( 'blog-two', 340, 175, true);
	add_image_size( 'portfolio', 710, 210, true);
	add_image_size( 'portfolio-two', 455, 220, true); // Portfoliio two columns
	add_image_size( 'portfolio-three', 290, 165, true); // Portfolio three columns
	add_image_size( 'portfolio-four', 210, 145, true); // Four columns
	add_image_size( 'portfolio-five', 158, 100, true);
	add_image_size( 'simple-slider', 620, 350, true);
	add_image_size( 'slider', 950, 350, true);
	add_image_size( 'slider-thumb', 70, 50, true);
	add_image_size( 'accordion-slider', 1020, 550, true);
	add_image_size( 'project_slideshow', 711, 350, true);
	add_image_size( 'grid-318', 318, 150, true);
	add_image_size( 'grid-238', 238, 150, true);
	add_image_size( 'grid-118', 118, 150, true);
	add_image_size( 'grid-478', 478, 150, true);
	


	// Column shortcodes.
	function adventure_one_column( $atts, $content = null ) {
		   return '<div class="one">' . do_shortcode($content) . '</div>';
		}
		add_shortcode('one_column', 'adventure_one_column');
	
	function adventure_one_third( $atts, $content = null ) {
	   return '<div class="one-third">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('one_third', 'adventure_one_third');
	
	function adventure_one_third_last( $atts, $content = null ) {
	   return '<div class="one-third last">' . do_shortcode($content) . '</div><div class="clearboth"></div>';
	}
	add_shortcode('one_third_last', 'adventure_one_third_last');
	
	
	function adventure_one_third_big( $atts, $content = null ) {
	   return '<div class="one-third-big">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('one_third_big', 'adventure_one_third_big');
	
	function adventure_one_third_big_last( $atts, $content = null ) {
	   return '<div class="one-third-big last">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('one_third_big_last', 'adventure_one_third_big_last');
	
	
	function adventure_two_third( $atts, $content = null ) {
	   return '<div class="two-third">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('two_third', 'adventure_two_third');
	
	function adventure_two_third_last( $atts, $content = null ) {
	   return '<div class="two-third last">' . do_shortcode($content) . '</div><div class="clearboth"></div>';
	}
	add_shortcode('two_third_last', 'adventure_two_third_last');
	
	function adventure_one_half( $atts, $content = null ) {
	   return '<div class="one-half">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('one_half', 'adventure_one_half');
	
	function adventure_one_half_last( $atts, $content = null ) {
	   return '<div class="one-half last">' . do_shortcode($content) . '</div><div class="clearboth"></div>';
	}
	add_shortcode('one_half_last', 'adventure_one_half_last');
	
	function adventure_one_fourth( $atts, $content = null ) {
	   return '<div class="one-fourth">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('one_fourth', 'adventure_one_fourth');
	
	function adventure_one_fourth_last( $atts, $content = null ) {
	   return '<div class="one-fourth last">' . do_shortcode($content) . '</div><div class="clearboth"></div>';
	}
	add_shortcode('one_fourth_last', 'adventure_one_fourth_last');
	
	function adventure_three_fourth( $atts, $content = null ) {
	   return '<div class="inner-content">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('inner_content', 'adventure_three_fourth');
	
	function adventure_three_fourth_last( $atts, $content = null ) {
	   return '<div class="inner-content last">' . do_shortcode($content) . '</div><div class="clearboth"></div>';
	}
	add_shortcode('inner_content_last', 'adventure_three_fourth_last');
	
	function adventure_one_fifth( $atts, $content = null ) {
	   return '<div class="one-fifth">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('one_fifth', 'adventure_one_fifth');
	
	function adventure_one_fifth_last( $atts, $content = null ) {
	   return '<div class="one-fifth last">' . do_shortcode($content) . '</div><div class="clearboth"></div>';
	}
	add_shortcode('one_fifth_last', 'adventure_one_fifth_last');
	
	function adventure_two_fifth( $atts, $content = null ) {
	   return '<div class="two-fifth">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('two_fifth', 'adventure_two_fifth');
	
	function adventure_two_fifth_last( $atts, $content = null ) {
	   return '<div class="two-fifth last">' . do_shortcode($content) . '</div><div class="clearboth"></div>';
	}
	add_shortcode('two_fifth_last', 'adventure_two_fifth_last');
	
	function adventure_three_fifth( $atts, $content = null ) {
	   return '<div class="three-fifth">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('three_fifth', 'adventure_three_fifth');
	
	function adventure_three_fifth_last( $atts, $content = null ) {
	   return '<div class="three-fifth last">' . do_shortcode($content) . '</div><div class="clearboth"></div>';
	}
	add_shortcode('three_fifth_last', 'adventure_three_fifth_last');
	
	function adventure_four_fifth( $atts, $content = null ) {
	   return '<div class="four-fifth">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('four_fifth', 'adventure_four_fifth');
	
	function adventure_four_fifth_last( $atts, $content = null ) {
	   return '<div class="four-fifth last">' . do_shortcode($content) . '</div><div class="clearboth"></div>';
	}
	add_shortcode('four_fifth_last', 'adventure_four_fifth_last');
	
	function adventure_one_sixth( $atts, $content = null ) {
	   return '<div class="one-sixth">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('one_sixth', 'adventure_one_sixth');
	
	function adventure_one_sixth_last( $atts, $content = null ) {
	   return '<div class="one-sixth last">' . do_shortcode($content) . '</div><div class="clearboth"></div>';
	}
	add_shortcode('one_sixth_last', 'adventure_one_sixth_last');
	
	function adventure_five_sixth( $atts, $content = null ) {
	   return '<div class="five-sixth">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('five_sixth', 'adventure_five_sixth');
	
	function adventure_five_sixth_last( $atts, $content = null ) {
	   return '<div class="five-sixth last">' . do_shortcode($content) . '</div><div class="clearboth"></div>';
	}
	add_shortcode('five_sixth_last', 'adventure_five_sixth_last');

	function adventure_horizontal_line( $atts, $content = null ) {
	   return '<div class="horizontal-line"></div>';
	}
	add_shortcode('horizontal_line', 'adventure_horizontal_line');
	
	function adventure_simple_notice( $atts, $content = null ) {
	   return '<div class="simple-notice">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('simple_notice', 'adventure_simple_notice');
	
	function adventure_simple_error( $atts, $content = null ) {
	   return '<div class="simple-error">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('simple_error', 'adventure_simple_error');
	
	function adventure_simple_info( $atts, $content = null ) {
	   return '<div class="simple-info">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('simple_info', 'adventure_simple_info');
	
	function adventure_simple_success( $atts, $content = null ) {
	   return '<div class="simple-success">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('simple_success', 'adventure_simple_success');
	
	function adventure_cancel_list( $atts, $content = null ) {
	   return '<div class="cancel-list">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('cancel_list', 'adventure_cancel_list');
	
	function adventure_checklist_list( $atts, $content = null ) {
	   return '<div class="checklist-list">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('checklist_list', 'adventure_checklist_list');
	
	function adventure_check_list( $atts, $content = null ) {
	   return '<div class="check-list">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('check_list', 'adventure_check_list');
	
	function adventure_round_list( $atts, $content = null ) {
	   return '<div class="round-list">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('round_list', 'adventure_round_list');
	
	function adventure_social_facebook( $atts, $content = null ) {
		$content = do_shortcode($content);
	   return '<a class="social-link facebook" href="' . of_get_option('social_link_facebook', '') . '"  title="' . $content . '">' . $content . '</a>';
	}
	add_shortcode('social_facebook', 'adventure_social_facebook');
	
	function adventure_social_twitter( $atts, $content = null ) {
		$content = do_shortcode($content);
	   return '<a class="social-link twitter" href="' . of_get_option('social_link_twitter', '') . '"  title="' . $content . '">' . $content . '</a>';
	}
	add_shortcode('social_twitter', 'adventure_social_twitter');
	
	function adventure_social_feed( $atts, $content = null ) {
		$content = do_shortcode($content);
	   return '<a class="social-link feed" href="' . of_get_option('social_link_feed', '') . '"  title="' . $content . '">' . $content . '</a>';
	}
	add_shortcode('social_feed', 'adventure_social_feed');
	
	function adventure_contact_phone( $atts, $content = null ) {
	   return '<span class="contact phone">' . of_get_option('contact_info_phone', '') . '</span>';
	}
	add_shortcode('contact_phone', 'adventure_contact_phone');
	
	function adventure_contact_fax( $atts, $content = null ) {
	   return '<span class="contact fax">' . of_get_option('contact_info_fax', '') . '</span>';
	}
	add_shortcode('contact_fax', 'adventure_contact_fax');
	
	function adventure_contact_email( $atts, $content = null ) {
		$content = of_get_option('contact_info_email', '');
	   return '<a class="contact phone" href="mailto:' . $content . '"  title="Contact Email">' . $content . '</a>';
	}
	add_shortcode('contact_email', 'adventure_contact_email');
	
	
	function adventure_text_align_left( $atts, $content = null ) {
	   return '<div class="text-align-left">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('text_align_left', 'adventure_text_align_left');
	
	function adventure_img_align_left( $atts, $content = null ) {
	   return '<img class="img-align-left"' . do_shortcode($content) . 'alt=" " > ' . '</img>';
	}
	add_shortcode('img_align_left', 'adventure_img_align_left');
	
	function adventure_image_source( $atts, $content = null ) {
    extract(shortcode_atts(array(
        'source'      => '#',
        'align' => ''
    ), $atts));
  
	  switch ($align) {
		case "left" :
		  $class="img-align-left";
		break;
		case "right" :
		  $class="img-align-right";
		break;
		case "center" :
		  $class="img-align-center";
		break;
  }
  
	return "<img class=\"".$class." \" src=\"" .$source. "\" alt=\"\">";
    
}
add_shortcode('image', 'adventure_image_source');
	
	function adventure_project_video( $atts, $content = null) {
		global $post;
		$portfolio_details = maybe_unserialize(get_post_meta($post->ID, '_adventure_portfolio_details', true));
		$embed_code = '';
		if ($portfolio_details['video-link']) {
			$matches = array();
			preg_match("#(?<=v=)[a-zA-Z0-9-]+(?=&)|(?<=v\/)[^&\n]+|(?<=v=)[^&\n]+|(?<=youtu.be/)[^&\n]+#", $portfolio_details['video-link'], $matches);
			if ($matches) {
				$embed_code = '<iframe  width="711" height="350" src="http://www.youtube.com/embed/' . $matches[0] . '" frameborder="0" allowfullscreen></iframe>';
			} else {
				preg_match("#(?<=vimeo.com/)[^&\n]+#", $portfolio_details['video-link'], $matches);
				if ($matches) {
					$embed_code = '<iframe  width="711" height="350" src="http://player.vimeo.com/video/' . $matches[0] . '?title=0&amp;byline=0&amp;portrait=0"></iframe>';
				}
			}
		}
		return $embed_code;
	}
	add_shortcode('project_video', 'adventure_project_video');
	
	function adventure_project_slideshow( $atts, $content = null) {
		global $post;
		$args = array(
			'post_type' => 'attachment',
			'numberposts' => -1,
			'post_status' => null,
			'post_parent' => $post->ID,
			'orderby' => 'menu_order',
			'order' => 'ASC'
			); 
		$slider_imgs = get_posts($args);
		$embed_code = '<div id="slides"><div class="slides_container portfolio-details-slider">';
		if ($slider_imgs) {
			foreach ($slider_imgs as $img) {
				$embed_code .= '<a href="' . wp_get_attachment_url($img->ID) . '" title="' . $img->post_title . '" rel="prettyPhoto">' 
					. wp_get_attachment_image($img->ID, 'project_slideshow') . '</a>';
			}
		}
		$embed_code .= '</div></div>';
		return $embed_code;
	}
	add_shortcode('project_slideshow', 'adventure_project_slideshow');
	
	function adventure_button( $atts, $content = null) {
		extract( shortcode_atts( array(
			  'color' => 'blue',
			  'size' => 'small',
			  'type' => 'normal'
		  ), $atts ) );
		  
		$button = str_replace('<a', '<a class="button ' . $color . ' ' . $size . ' ' . $type . '"', $content);
		return $button;
	}
	add_shortcode('button', 'adventure_button');
	
	function adventure_pricing_box( $atts, $content = null) {
		extract( shortcode_atts( array(
			  'color' => 'blue',
			  'title' => 'Pricing Box',
			  'price' => '$99 per month'
		  ), $atts ) );

		$content = do_shortcode( $content );
		
		$content = '<div class="list-box"><div class="box-header ' . $color . '"><h3 class="title-box">' . $title . '</h3></div><div class="pricing-box-container"><div class="text-price ' 
			. $color . '"><h3>' . $price . '</h3></div><div class="list-box-content">' . $content . '</div></div></div>';
		
		return $content;
	}
	add_shortcode('pricing_box', 'adventure_pricing_box');
	
	/*
	* jQuery Tools - Tabs shortcode
	*/
	function adventure_tab_group( $atts, $content ){
		$GLOBALS['tab_count'] = 0;
		
		do_shortcode( $content );
		
		if( is_array( $GLOBALS['tabs'] ) ){
			foreach( $GLOBALS['tabs'] as $tab ){
				$tabs[] = '<li><a class="" href="#">'.$tab['title'].'</a></li>';
				$panes[] = '<div class="pane content"><h3>'.$tab['title'].'</h3>'.$tab['content'].'</div>';
			}
			$return = "\n".'<!-- the tabs --><ul class="tabs menu">'.implode( "\n", $tabs ).'</ul>'."\n".'<!-- tab "panes" --><div class="panes">'.implode( "\n", $panes ).'</div>'."\n";
		}
		return $return;
	}
	add_shortcode( 'tabgroup', 'adventure_tab_group' );
		
	function adventure_tab( $atts, $content ){
		extract(shortcode_atts(array(
			'title' => 'Tab %d'
			), $atts));
		
		$x = $GLOBALS['tab_count'];
		$GLOBALS['tabs'][$x] = array( 'title' => sprintf( $title, $GLOBALS['tab_count'] ), 'content' =>  $content );
		
		$GLOBALS['tab_count']++;
	}
	add_shortcode( 'tab', 'adventure_tab' );
	
	function adventure_formatter($content) {
		$new_content = '';
	
		/* Matches the contents and the open and closing tags */
		$pattern_full = '{(\[raw\].*?\[/raw\])}is';
	
		/* Matches just the contents */
		$pattern_contents = '{\[raw\](.*?)\[/raw\]}is';
	
		/* Divide content into pieces */
		$pieces = preg_split($pattern_full, $content, -1, PREG_SPLIT_DELIM_CAPTURE);
	
		/* Loop over pieces */
		foreach ($pieces as $piece) {
			/* Look for presence of the shortcode */
			if (preg_match($pattern_contents, $piece, $matches)) {
	
				/* Append to content (no formatting) */
				$new_content .= $matches[1];
			} else {
	
				/* Format and append to content */
				$new_content .= wptexturize(wpautop($piece));
			}
		}
	
		return $new_content;
	}
	
	// Remove the 2 main auto-formatters
	remove_filter('the_content', 'wpautop');
	remove_filter('the_content', 'wptexturize');
	
	// Before displaying for viewing, apply this function
	add_filter('the_content', 'adventure_formatter', 99);
	add_filter('widget_text', 'adventure_formatter', 99);

}

endif; // adventure_setup

function adventure_posted_on() {

	printf( __( '<span class="sep">Posted<span class="by-author"> <span class="sep"> by: </span> <span class="author vcard"><a class="url fn n" href="%5$s" title="%6$s" rel="author">%7$s</a></span></span> on <a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s" pubdate>%4$s</time></a></span>', 'adventure' ),

		get_permalink(),

		get_the_time(),

		get_the_date( 'c' ),

		get_the_date(),

		get_author_posts_url( get_the_author_meta( 'ID' ) ),

		sprintf( __( 'View all posts by %s', 'adventure' ), get_the_author() ),

		get_the_author()

	);

}

function adventure_comment( $comment, $args, $depth ) {

	$GLOBALS['comment'] = $comment;

	switch ( $comment->comment_type ) :

		case 'pingback' :

		case 'trackback' :

	?>

	<li class="post pingback">

		<p><?php _e( 'Pingback:', 'adventure' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( __( 'Edit', 'adventure' ), '<span class="edit-link">', '</span>' ); ?></p>

	<?php

			break;

		default :

	?>

	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">

		<article id="comment-<?php comment_ID(); ?>" class="comment">

			<footer class="comment-meta">

				<div class="comment-author vcard">

					<?php

						/* translators: 1: comment author, 2: date and time */

						printf( __( '%1$s on %2$s <span class="says">said:</span>', 'adventure' ),

							sprintf( '<h4>%s</h4>', get_comment_author_link() ),

							sprintf( '<a href="%1$s"><time pubdate datetime="%2$s">%3$s</time></a>',

								esc_url( get_comment_link( $comment->comment_ID ) ),

								get_comment_time( 'c' ),

								/* translators: 1: date, 2: time */

								sprintf( __( '%1$s at %2$s', 'adventure' ), get_comment_date(), get_comment_time() )

							)

						);


						$avatar_size = 60;

						if ( '0' != $comment->comment_parent )

							$avatar_size = 30;



						echo get_avatar( $comment, $avatar_size );


					?>



					<?php edit_comment_link( __( 'Edit', 'adventure' ), '<span class="edit-link">', '</span>' ); ?>

				</div><!-- .comment-author .vcard -->



				<?php if ( $comment->comment_approved == '0' ) : ?>

					<em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'adventure' ); ?></em>

					<br />

				<?php endif; ?>



			</footer>



			<div class="comment-content"><?php comment_text(); ?></div>



			<div class="reply">

				<?php comment_reply_link( array_merge( $args, array( 'reply_text' => __( 'Reply <span>&darr;</span>', 'adventure' ), 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>

			</div><!-- .reply -->

		</article><!-- #comment-## -->



	<?php

			break;

	endswitch;

}


function adventure_widgets_init() {



	register_sidebar( array(

		'name' => __( 'Homepage First Row', 'adventure' ),

		'id' => 'adventure-home-first',

		'description' => __( 'Widget area in the first row below the slideshow on the homepage.', 'adventure' ),

		'before_widget' => '<div id="%1$s" class="widget one-third %2$s">',

		'after_widget' => "</div>",

		'before_title' => '<h4 class="widget-title">',

		'after_title' => '</h4>',

	) );

	register_sidebar( array(

		'name' => __( 'Homepage Second Row', 'adventure' ),

		'id' => 'adventure-home-second',

		'description' => __( 'Widget area in the second row below the slideshow on the homepage.', 'adventure' ),

		'before_widget' => '<div id="%1$s" class="widget one-fourth %2$s">',

		'after_widget' => "</div>",

		'before_title' => '<h4 class="widget-title">',

		'after_title' => '</h4>',

	) );

	register_sidebar( array(

		'name' => __( 'Homepage Third Row', 'adventure' ),

		'id' => 'adventure-home-third',

		'description' => __( 'Widget area in the third row below the slideshow on the homepage.', 'adventure' ),

		'before_widget' => '<div id="%1$s" class="widget one-fourth %2$s">',

		'after_widget' => "</div>",

		'before_title' => '<h4 class="widget-title">',

		'after_title' => '</h4>',

	) );

	register_sidebar( array(

		'name' => __( 'Main Page Sidebar', 'adventure' ),

		'id' => 'adventure-main-page-sidebar',

		'description' => __( 'Widget area in the sidebar of each page.', 'adventure' ),

		'before_widget' => '<div id="%1$s" class="widget %2$s">',

		'after_widget' => "</div>",

		'before_title' => '<h3 class="widget-title">',

		'after_title' => '</h3>',

	) );


	register_sidebar( array(

		'name' => __( 'Main Blog Sidebar', 'adventure' ),

		'id' => 'adventure-main-blog-sidebar',

		'description' => __( 'Widget area in the sidebar of the blog pages and posts.', 'adventure' ),

		'before_widget' => '<div id="%1$s" class="widget %2$s">',

		'after_widget' => "</div>",

		'before_title' => '<h4 class="widget-title">',

		'after_title' => '</h4>',

	) );


	register_sidebar( array(

		'name' => __( 'Footer Widgets', 'adventure' ),

		'id' => 'adventure-footer-sidebar',

		'description' => __( 'Widgets area in the footer of every page.', 'adventure' ),

		'before_widget' => '<div id="%1$s" class="widget one-fourth %2$s">',

		'after_widget' => "</div>",

		'before_title' => '<h4 class="widget-title">',

		'after_title' => '</h4>',

	) );
	
	class Adv_Contact extends WP_Widget
	{
		function Adv_Contact()
		{
			$widget_ops = array('classname' => 'adv-contact', 'description' => 'Displays the website contact details.');
			$control_ops = array('id_base' => 'adv-contact');
			$this->WP_Widget('adv-contact', 'Adventure Contact Details', $widget_ops, $control_ops);
		}
		
		function widget($args, $instance)
		{
			extract($args);
			
			/* User-selected settings. */
			$title = $instance['title'];
			$intro = $instance['intro'];
			
			/* Before widget (defined by themes) */
			echo $before_widget;
			/*Title of widget (before and after defined by themes). */
			echo $before_title . $title . $after_title;
				echo do_shortcode(wpautop($intro));
			echo $after_widget;
		}
		
		function update($new_instance, $old_instance)
		{
			$instance = $old_instance;
			
			$instance['title'] = strip_tags($new_instance['title']);
			$instance['intro'] = strip_tags($new_instance['intro']);
			
			return $instance;
		}
		
		function form($instance)
		{
			/* Default widget settings */
			$defaults = array(	'title' => 'Contact Us', 
								'intro' => "Phone: [contact_phone] \n\n"
											. "Fax: [contact_fax] \n\n"
											. "Email: [contact_email] \n\n"
											. "[social_facebook]Our Facebook page[/social_facebook] \n\n"
											. "[social_twitter]Follow us on Twitter[/social_twitter] \n\n"
											. "[social_feed]Our RSS Feeds[/social_feed]"
							);
			$instance = wp_parse_args((array)$instance, $defaults);
			
			echo '<p><label for="' . $this->get_field_id('title') . '">Title:</label>';
			echo '<input id="' . $this->get_field_id('title') . '" name="' . $this->get_field_name('title') . '" value="' . $instance['title'] . '" class="widefat" /></p>';
			echo '<p><label for="' . $this->get_field_id('intro') . '">Text:</label>';
			echo '<textarea id="' . $this->get_field_id('intro') . '" name="' . $this->get_field_name('intro') . '" class="widefat" rows="10">' . $instance['intro'] . '</textarea></p>';
		}
	}

	register_widget('Adv_Contact');

}

add_action( 'widgets_init', 'adventure_widgets_init' );

// Admin interface customization

add_action('admin_init', 'adventure_admin_actions');

function adventure_admin_actions()
{
	wp_register_style('adventure_admin_style', get_template_directory_uri() . '/css/adventure-wp-admin.css');
	
	add_action('admin_print_styles', 'adventure_enqueue_admin_style');
	
	add_meta_box('adventure-portfolio-fields', 'Portfolio Details', 'adventure_portfolio_fields', 'adv_portfolio_items', 'normal', 'high');
	add_action('save_post', 'adventure_save_portfolio_fields');

	add_meta_box('adventure-page-fields', 'Page options', 'adventure_page_fields', 'page', 'normal', 'high');
	add_action('save_post', 'adventure_save_page_fields');
}

function adventure_enqueue_admin_style()
{
	wp_enqueue_style('adventure_admin_style');
}

function adventure_portfolio_fields()
{
	global $post;
	
	$portfolio_details	= maybe_unserialize(get_post_meta($post->ID, '_adventure_portfolio_details', true));
	
	echo '<input type="hidden" name="adventure-portfolio-nonce" id="adventure-portfolio-nonce" value="' . wp_create_nonce('adventure-portfolio-safety') . '" />';
	echo '<p><label for="adventure-portfolio-video-title">Video title:</label>'
		. '<input type="text" class="text" id="adventure-portfolio-video-title" name="adventure-portfolio-video-title" value="' . $portfolio_details['video-title'] . '" /></p>';
	echo '<p><label for="adventure-portfolio-video-link">Video link (YouTube or Vimeo):</label>'
		. '<input type="text" class="text" id="adventure-portfolio-video-link" name="adventure-portfolio-video-link" value="' . $portfolio_details['video-link'] . '" /></p>';
}

function adventure_save_portfolio_fields($post_id)
{
	if (!isset($_POST['adventure-portfolio-nonce']) || !wp_verify_nonce($_POST['adventure-portfolio-nonce'], 'adventure-portfolio-safety')) return $post_id;
	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return $post_id;
	
	$portfolio_details = maybe_unserialize(get_post_meta($post->ID, '_adventure_portfolio_details', true));
	
	$portfolio_details['video-title'] = trim($_POST['adventure-portfolio-video-title']);
	$portfolio_details['video-link'] = trim($_POST['adventure-portfolio-video-link']);

	update_post_meta($post_id, '_adventure_portfolio_details', $portfolio_details);
}

function adventure_page_fields()
{
	global $post;
	
	$page_subtitle 	= get_post_meta($post->ID, '_adventure_page_subtitle', true);
	
	echo '<input type="hidden" name="adventure-page-nonce" id="adventure-page-nonce" value="' . wp_create_nonce('adventure-page-safety') . '" />';
	echo '<div><p><label for="adventure-page-subtitle">Subtitle:</label></p>';
	wp_tiny_mce( false , // true makes the editor "teeny"
			array(
				"editor_selector" => "adventure-page-subtitle",
				'height'	=> '200px'
			)
		);
	echo '<textarea id="adventure-page-subtitle" name="adventure-page-subtitle" class="theEditor">'
		. wpautop($page_subtitle) . '</textarea></div>';

	echo '<p class="checks"><label for="adventure-page-show-title">'
		. '<input class="checkbox" type="checkbox" id="adventure-page-show-title" name="adventure-page-show-title"';
	if (!(bool)$checked = get_post_meta($post->ID, '_adventure_hide_title', true)) echo ' checked="checked"';
	echo ' /> Show title</label> ';
	echo '<label for="adventure-page-show-subtitle">'
		. '<input class="checkbox" type="checkbox" id="adventure-page-show-subtitle" name="adventure-page-show-subtitle"';
	if (!(bool)$checked = get_post_meta($post->ID, '_adventure_hide_subtitle', true)) echo ' checked="checked"';
	echo ' /> Show subtitle</label></p>';
}

function adventure_save_page_fields($post_id)
{
	if (!isset($_POST['adventure-page-nonce']) || !wp_verify_nonce($_POST['adventure-page-nonce'], 'adventure-page-safety')) return $post_id;
	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE || wp_is_post_revision($post_id)) return $post_id;
	
	if (isset($_POST['adventure-page-subtitle']) && ($page_subtitle = trim(stripslashes($_POST['adventure-page-subtitle']))) ) {
		update_post_meta($post_id, '_adventure_page_subtitle', ($page_subtitle));
	}
	else {
		delete_post_meta($post_id, '_adventure_page_subtitle');
	}
	
	if (isset($_POST['adventure-page-show-title'])) update_post_meta($post_id, '_adventure_hide_title', '');
	else update_post_meta($post_id, '_adventure_hide_title', '1');
	if (isset($_POST['adventure-page-show-subtitle'])) update_post_meta($post_id, '_adventure_hide_subtitle', '');
	else update_post_meta($post_id, '_adventure_hide_subtitle', '1');
}

define('ADV_IMG_TYPE_NONE', 1);
define('ADV_IMG_TYPE_SIMPLE', 2);
define('ADV_IMG_TYPE_NIVO', 3);
define('ADV_IMG_TYPE_SIMPLE_CONTENT', 4);
define('ADV_IMG_TYPE_ACCORDION', 5);
define('ADV_IMG_TYPE_GRID', 6);
define('ADV_IMG_TYPE_CYCLE', 7);

function adventure_register_post_types()
{
	register_taxonomy('adv_portfolio_cat', 'adv_portfolio_items',
		array(	'hierarchical' => true, 
				'label' => 'Portfolio Categories', 
				'query_var' => true, 
				'rewrite' => array('slug' => 'portfolio-category')
			)
		);
	
	$adv_post_types = array(
		'adv_portfolio_items'	=>	array(
			'labels'		=> array(
				'name'				=> 'Portfolio Items',
				'singular_name'		=> 'Portfolio Item',
				'add_new'			=> 'Add New',
				'add_new_item'		=> 'Add New Portfolio Item',
				'edit'				=> 'Edit',
				'edit_item'			=> 'Edit Portfolio Item',
				'new_item'			=> 'New Portfolio Item',
				'view'				=> 'View Portfolio Item',
				'view_item'			=> 'View Portfolio Item',
				'search_items'		=> 'Search Portfiolio Items',
				'not_found'			=> 'No portfolio items found',
				'not_found_in_trash'=> 'No portfolio items found in thrash'),
			'public'		=> true,
			'menu_position'	=> 5,
			'supports'		=> array('title', 'editor', 'thumbnail', 'custom-fields', 'excerpt'),
			'taxonomies'	=> array('adv_portfolio_cat', 'post_tag'),
			'rewrite'		=> array('slug' => 'portfolio-item', 'with_front' => false)
		)
	);
	
	foreach ($adv_post_types as $post_type => $args) {
		register_post_type($post_type, $args);
	}		
	
		
	function adv_attachment_fields_to_edit($form_fields, $post)
	{
		$checked = array();
		$checked['simple'] = 		(get_post_meta($post->ID, '_adv_slider_simple', true)) ? ' checked="checked"' : '';
		$checked['nivo'] = 			(get_post_meta($post->ID, '_adv_slider_nivo', true)) ? ' checked="checked"' : ''; 
		$checked['simple-content'] =(get_post_meta($post->ID, '_adv_slider_sc', true)) ? ' checked="checked"' : '';
		$checked['accordion'] = 	(get_post_meta($post->ID, '_adv_slider_accordion', true)) ? ' checked="checked"' : '';
		$checked['grid'] = 			(get_post_meta($post->ID, '_adv_slider_grid', true)) ? ' checked="checked"' : ''; 
		$checked['cycle'] = 		(get_post_meta($post->ID, '_adv_slider_cycle', true)) ? ' checked="checked"' : ''; 
		
		$form_fields['adv_slider_type']['label'] = 'Slider type';
		$form_fields['adv_slider_type']['input'] = 'html';
		$form_fields['adv_slider_type']['html'] = "
			<input type='hidden' name='attachments[{$post->ID}][adv_slider_type]' id='attachments[{$post->ID}][adv_slider_type]' value='1' />
			<input type='checkbox' name='attachments[{$post->ID}][simple]' id='attachments[{$post->ID}][simple]' " . $checked['simple'] . " /> Simple Slider <br />
			<input type='checkbox' name='attachments[{$post->ID}][nivo]' id='attachments[{$post->ID}][nivo]' " . $checked['nivo'] . " /> Nivo (Thumb) Slider <br />
			<input type='checkbox' name='attachments[{$post->ID}][simple-content]' id='attachments[{$post->ID}][simple-content]' " . $checked['simple-content'] . " /> Simple Content <br />
			<input type='checkbox' name='attachments[{$post->ID}][accordion]' id='attachments[{$post->ID}][accordion]' " . $checked['accordion'] . " /> Accordion Slider <br />
			<input type='checkbox' name='attachments[{$post->ID}][grid]' id='attachments[{$post->ID}][grid]' " . $checked['grid'] . " /> Grid <br />
			<input type='checkbox' name='attachments[{$post->ID}][cycle]' id='attachments[{$post->ID}][cycle]' " . $checked['cycle'] . " /> Cycle <br />
			";
		$form_fields['adv_slideshow_link']['label'] = 'Slide link';
		$form_fields['adv_slideshow_link']['input'] = 'text';
		$form_fields['adv_slideshow_link']['value'] = get_post_meta($post->ID, "_adv_slideshow_link", true);		
		return $form_fields;  			
	} 
	
	function adv_attachment_fields_to_save($post, $attachment)
	{
		// die(var_dump($attachment));
		if (isset($attachment['simple'])) {
			update_post_meta($post['ID'], '_adv_slider_simple', $attachment['simple']);
		} else {
			delete_post_meta($post['ID'], '_adv_slider_simple');
		}
		if (isset($attachment['nivo'])) {
			update_post_meta($post['ID'], '_adv_slider_nivo', $attachment['nivo']);
		} else {
			delete_post_meta($post['ID'], '_adv_slider_nivo');
		}
		if (isset($attachment['simple-content'])) {
			update_post_meta($post['ID'], '_adv_slider_sc', $attachment['simple-content']);
		} else {
			delete_post_meta($post['ID'], '_adv_slider_sc');
		}
		if (isset($attachment['accordion'])) {
			update_post_meta($post['ID'], '_adv_slider_accordion', $attachment['accordion']);
		} else {
			delete_post_meta($post['ID'], '_adv_slider_accordion');
		}
		if (isset($attachment['grid'])) {
			update_post_meta($post['ID'], '_adv_slider_grid', $attachment['grid']);
		} else {
			delete_post_meta($post['ID'], '_adv_slider_grid');
		}
		if (isset($attachment['cycle'])) {
			update_post_meta($post['ID'], '_adv_slider_cycle', $attachment['cycle']);
		} else {
			delete_post_meta($post['ID'], '_adv_slider_cycle');
		}
		if (isset($attachment['adv_slideshow_link']) && $link = $attachment['adv_slideshow_link']) {
			update_post_meta($post['ID'], '_adv_slideshow_link', $link);
		} else {
			delete_post_meta($post['ID'], '_adv_slideshow_link');
		}
		return $post;
		
	}
	
	add_filter('attachment_fields_to_edit', 'adv_attachment_fields_to_edit', null, 2);
	add_filter('attachment_fields_to_save', 'adv_attachment_fields_to_save', null, 2);
}

// Setting up new post types
add_action('init', 'adventure_register_post_types');

// Extract portfolio item details
function adventure_item_details($post_ID) 
{
	$portfolio_details = maybe_unserialize(get_post_meta($post_ID, '_adventure_portfolio_details', true));
	$item_details = $portfolio_details;
	if (isset($portfolio_details['video-title']) && isset($portfolio_details['video-link'])) {
		$matches = array();
		preg_match("#(?<=v=)[a-zA-Z0-9-]+(?=&)|(?<=v\/)[^&\n]+|(?<=v=)[^&\n]+|(?<=youtu.be/)[^&\n]+#", $portfolio_details['video-link'], $matches);
		if ($matches) {
			$item_details['bg_img'] = 'http://img.youtube.com/vi/' . $matches[0] . '/0.jpg';
		} else {
			preg_match("#(?<=vimeo.com/)[^&\n]+#", $portfolio_details['video-link'], $matches);
			if ($matches) {
				$hash = unserialize(file_get_contents("http://vimeo.com/api/v2/video/$matches[0].php"));
				$item_details['bg_img'] = $hash[0]['thumbnail_large'];
			}
		}
	}
	if (isset($portfolio_details['client']) && isset($portfolio_details['client-website'])) {
		$item_details['client'] = '<a href="' . $portfolio_details['client-website'] 
			. '" title="' . $portfolio_details['client'] . '">' . $portfolio_details['client'] . '</a>'; 
	}
	return $item_details;
}

// Setting up new post types
add_action('init', 'adventure_init_actions');

function adventure_init_actions()
{
	global $available_fonts;
	global $default_fonts;
	
	$h1_font = of_get_option('h1_font', $default_fonts['h1']);
	$h2_font = of_get_option('h2_font', $default_fonts['h2']);
	$h3_font = of_get_option('h3_font', $default_fonts['h3']);
	$h4_font = of_get_option('h4_font', $default_fonts['h4']);
	$h5_font = of_get_option('h5_font', $default_fonts['h5']);
	$h6_font = of_get_option('h6_font', $default_fonts['h6']);
	$body_font = of_get_option('body_font', $default_fonts['body']);

	if (isset($available_fonts['urls'][$h1_font['face']])) {
		wp_register_style('adventure_h1_font', $available_fonts['urls'][$h1_font['face']]);
	}
	if (isset($available_fonts['urls'][$h2_font['face']])) {
		wp_register_style('adventure_h2_font', $available_fonts['urls'][$h2_font['face']]);
	}
	if (isset($available_fonts['urls'][$h3_font['face']])) {
		wp_register_style('adventure_h3_font', $available_fonts['urls'][$h3_font['face']]);
	}
	if (isset($available_fonts['urls'][$h4_font['face']])) {
		wp_register_style('adventure_h4_font', $available_fonts['urls'][$h4_font['face']]);
	}
	if (isset($available_fonts['urls'][$h5_font['face']])) {
		wp_register_style('adventure_h5_font', $available_fonts['urls'][$h5_font['face']]);
	}
	if (isset($available_fonts['urls'][$h6_font['face']])) {
		wp_register_style('adventure_h6_font', $available_fonts['urls'][$h6_font['face']]);
	}
	if (isset($available_fonts['urls'][$body_font['face']])) {
		wp_register_style('adventure_body_font', $available_fonts['urls'][$body_font['face']]);
	}
	
	add_action('wp_print_styles', 'adventure_enqueue_styles');
}

function adventure_enqueue_styles()
{
	wp_enqueue_style('adventure_h1_font');
	wp_enqueue_style('adventure_h2_font');
	wp_enqueue_style('adventure_h3_font');
	wp_enqueue_style('adventure_h4_font');
	wp_enqueue_style('adventure_h5_font');
	wp_enqueue_style('adventure_h6_font');
	wp_enqueue_style('adventure_body_font');
}

function adventure_get_slider_images()
{
	$slider_include = of_get_option('slider_include', '');
	$slider = array();
	if ($slider_include) {
		if ($slider_include['homeimages']) {
			$selected = of_get_option('homepage_images', array());
			$include = array();
			if (is_array($selected)) {
				foreach ($selected as $cat => $on) if ($on) $include[] = $cat;
			}
			$args = array(
				'post_type' => 'attachment',
				'post__in' => $include,
				'posts_per_page' => -1,
				'orderby' => 'menu_order',
				'order' => 'ASC'
				); 
			$slider['images'] = get_posts($args);
		}
		if ($slider_include['unattached']) {
			$att_meta_keys = array(	'simple-slider' => 'simple',
									'nivo-slider' => 'nivo',
									'nivo-thumb-slider' => 'nivo',
									'simple-content' => 'sc',
									'accordion-slider' => 'accordion',
									'grid-homepage' => 'grid',
									'cycle-slider' => 'cycle'
								);
			$active_slider = $att_meta_keys[of_get_option('home_type', 'simple-slider')];
			$limit = of_get_option('unattached_images', '3');
			$args = array(
				'post_parent' 	=> 0,
				'post_type'		=> 'attachment',
				'meta_query'	=> array(
					array(
						'key'		=> '_adv_slider_' . $active_slider,
						'value' 	=> 'on',
						'compare'	=> 'LIKE'
					)
				),
				'posts_per_page' => $limit,
				'orderby'		=> 'date',
				'order'			=> 'DESC'
				); 
			$slider['unattached'] = get_posts($args);
		}		
		if ($slider_include['pages']) {
			$selected = of_get_option('slider_pages', array());
			$include = array();
			if (is_array($selected)) {
				foreach ($selected as $cat => $on) if ($on) $include[] = $cat;
			}
			$args = array(
				'post_type' => 'page',
				'post__in' => $include,
				'posts_per_page' => -1,
				'orderby' => 'menu_order',
				'order' => 'ASC'
				); 
			$slider['pages'] = get_posts($args);
		}
		if ($slider_include['posts']) {
			$selected = of_get_option('slider_categories', array());
			$include = array();
			if (is_array($selected)) {
				foreach ($selected as $cat => $on) if ($on) $include[] = $cat;
			}
			$args = array(
				'post_type' => 'post',
				'category__in' => $include,
				'posts_per_page' => of_get_option('slider_posts_num', 2)
				); 
			$slider['posts'] = get_posts($args);
		}
		if ($slider_include['portfolio']) {
			$selected = of_get_option('slider_pcats', array());
			$include = array();
			if (is_array($selected)) {
				foreach ($selected as $cat => $on) if ($on) $include[] = $cat;
			}
			$args = array(
				'post_type' => 'adv_portfolio_items',
				'tax_query' => array(
					array(
						'taxonomy' => 'adv_portfolio_cat',
						'field' => 'id',
						'terms' => $include,
						'operator' => 'IN'
					)
				),
				'posts_per_page' => of_get_option('slider_portfolio_num', 2)
				); 
			$slider['portfolio'] = get_posts($args);
		}
	}
	return $slider;
}

function adv_get_blog_page()
{
	$blog = get_posts(array('post_type' => 'page', 'meta_query' => array( 'relation' => 'OR', array('key' => '_wp_page_template', 'value' => 'page-blog.php', 'compare' => '='), array('key' => '_wp_page_template', 'value' => 'page-blog-two.php', 'compare' => '=')), 'posts_per_page' => 1));
	return isset($blog[0]) ? $blog[0] : false;
}

function adv_get_portfolio_page()
{
	$portfolio = get_posts(array('post_type' => 'page', 'meta_query' => array( 'relation' => 'OR', array('key' => '_wp_page_template', 'value' => 'page-portfolio.php', 'compare' => '='), array('key' => '_wp_page_template', 'value' => 'page-portfolio-two.php', 'compare' => '='), array('key' => '_wp_page_template', 'value' => 'page-portfolio-three.php', 'compare' => '='), array('key' => '_wp_page_template', 'value' => 'page-portfolio-four.php', 'compare' => '='), /*array('key' => '_wp_page_template', 'value' => 'page-portfolio-fourtwo.php', 'compare' => '='),*/ array('key' => '_wp_page_template', 'value' => 'page-portfolio-five.php', 'compare' => '=')), 'posts_per_page' => 1));
	return isset($portfolio[0]) ? $portfolio[0] : false;
}

function adv_show_title($page = NULL)
{
	global $post;
	if (!$page) $page = $post;
	return !(bool)get_post_meta($page->ID, '_adventure_hide_title', true);
}

function adv_show_subtitle($page = NULL)
{
	global $post;
	if (!$page) $page = $post;
	return !(bool)get_post_meta($page->ID, '_adventure_hide_subtitle', true);
}

function adventure_the_subtitle($page = NULL)
{
	global $post;
	if (!$page) $page = $post;
	if ($subtitle = get_post_meta($page->ID, '_adventure_page_subtitle', true))
		echo wpautop(do_shortcode($subtitle));
	else echo of_get_option('default_subtitle', 'Adventure Default Subtitle');
}

function adv_get_slideshow_image_id($post_id, $slider = 'simple')
{
	$attachment = get_posts( array(
		'post_parent' 	=> $post_id,
		'post_type'		=> 'attachment',
		'meta_query'	=> array(
			array(
				'key'		=> '_adv_slider_' . $slider,
				'value' 	=> 'on',
				'compare'	=> 'LIKE'
			)
		),
		'posts_per_page' => 1,
		'orderby'		=> 'date',
		'order'			=> 'DESC'
	));

	if ($attachment && is_array($attachment)) {
		return $attachment[0]->ID;
	}
	else return false;
}

function adv_get_slide_meta($att_id)
{
	$att = get_post($att_id);
	if (!$link = esc_url(get_post_meta( $att_id, '_adv_slideshow_link', true))) $link = '#';
	$title = $att->post_content ? esc_attr(substr(strip_shortcodes(strip_tags($att->post_content)), 0, 100)) : esc_attr($att->post_title);
	if (!$alt = esc_attr(get_post_meta($att_id, '_wp_attachment_image_alt', true))) $alt = esc_attr($att->post_title);
	$caption = $att->post_excerpt ? esc_attr($att->post_excerpt) : esc_attr($att->post_title);
	
	return array('link' => $link, 'title' => $title, 'alt' => $alt, 'caption' => $caption);
}

if ( ! isset( $content_width ) ) $content_width = 900; // ??

?>