<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html <?php language_attributes(); ?> xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" /> 
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
	
<title><?php

	/*

	 * Print the <title> tag based on what is being viewed.

	 */

	global $page, $paged;



	wp_title( '|', true, 'right' );



	// Add the blog name.

	bloginfo( 'name' );



	// Add the blog description for the home/front page.

	$site_description = get_bloginfo( 'description', 'display' );

	if ( $site_description && ( is_home() || is_front_page() ) )

		echo " | $site_description";



	// Add a page number if necessary:

	if ( $paged >= 2 || $page >= 2 )

		echo ' | ' . sprintf( __( 'Page %s', 'adventure' ), max( $paged, $page ) );



	?></title>
	
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
		
    <link media="all" rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() . '/css/' . of_get_option('color_theme', 'style') . '.css'; ?>" />
	<link media="all" rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	
<!-- META KEYWORDS -->
<meta name="author" content="trendyWebstar"/>
<meta name="copyright" content="(c) 2011 trendyWebstar"/>
<!--CSS FILES STARTS-->
<link rel="shortcut icon" type="image/gif" href="<?php echo get_template_directory_uri(); ?>/images/favicon.gif"/>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/prettyPhoto.css" type="text/css" media="screen"/>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/nivo-slider.css" type="text/css" media="screen"/>
	<!-- Grab the jQuery and header scripts. -->
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); wp_head(); ?>

<?php 	global $available_fonts; 
		global $default_fonts;
		
		$h1_font = of_get_option('h1_font', $default_fonts['h1']);
		$h2_font = of_get_option('h2_font', $default_fonts['h2']);
		$h3_font = of_get_option('h3_font', $default_fonts['h3']);
		$h4_font = of_get_option('h4_font', $default_fonts['h4']);
		$h5_font = of_get_option('h5_font', $default_fonts['h5']);
		$h6_font = of_get_option('h6_font', $default_fonts['h6']);
		$body_font = of_get_option('body_font', $default_fonts['body']);
	
		$bckg = of_get_option('background', ''); ?>
<style type="text/css">
	<?php if ($bckg) {
				echo 'body { '; 
				foreach ($bckg as $name => $value) {
					if ($name == 'image') { if (!$value) echo 'background-image: none;'; else echo 'background-image: url(' . $value . '); '; }
					else if ($value) echo 'background-' . $name . ': ' . $value . '; ';
				}
				echo ' }';
			} ?>
	
	h1, h1 a, h1 a:hover { 	font: <?php echo $h1_font['style'] . ' ' .  $h1_font['size'] . '/130% "' . $available_fonts['names'][$h1_font['face']]; ?>", Arial, sans-serif !important;
							color: <?php echo $h1_font['color']; ?> !important;
						}
	h2, h2 a, h2 a:hover { 	font: <?php echo $h2_font['style'] . ' ' .  $h2_font['size'] . '/130% "' . $available_fonts['names'][$h2_font['face']]; ?>", Arial, sans-serif !important;
							color: <?php echo $h2_font['color']; ?> !important;
						}
	h3, h3 a, h3 a:hover { 	font: <?php echo $h3_font['style'] . ' ' .  $h3_font['size'] . '/130% "' . $available_fonts['names'][$h3_font['face']]; ?>", Arial, sans-serif !important;
							color: <?php echo $h3_font['color']; ?> !important;
						}
	h4, h4 a, h4 a:hover, #comments-title, .heading-font p { 	font: <?php echo $h4_font['style'] . ' ' .  $h4_font['size'] . '/130% "' . $available_fonts['names'][$h4_font['face']]; ?>", Arial, sans-serif !important;
							color: <?php echo $h4_font['color']; ?> !important;
						}
	h5, h5 a, h5 a:hover { 	font: <?php echo $h5_font['style'] . ' ' .  $h5_font['size'] . '/130% "' . $available_fonts['names'][$h5_font['face']]; ?>", Arial, sans-serif !important;
							color: <?php echo $h5_font['color']; ?> !important;
						}
	h6, h6 a, h6 a:hover { 	font: <?php echo $h6_font['style'] . ' ' .  $h6_font['size'] . '/130% "' . $available_fonts['names'][$h6_font['face']]; ?>", Arial, sans-serif !important;
							color: <?php echo $h6_font['color']; ?> !important;
						}
	body { font: <?php echo $body_font['style'] . ' ' .  $body_font['size'] . '/170% "' . $available_fonts['names'][$body_font['face']]; ?>", Arial, sans-serif !important;
						color: <?php echo $body_font['color']; ?> !important;
					}
	.main-menu { 	font-family: '<?php echo $available_fonts['names'][$body_font['face']]; ?>', Arial, sans-serif !important; }
</style>
<!--JS FILES STARTS-->
<?php wp_enqueue_script("jquery"); ?>
<?php wp_head(); ?>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/custom.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/cycle-slider/cycle.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/tabify/jquery.tabify.js"></script>
<script src="http://cdn.jquerytools.org/1.2.5/tiny/jquery.tools.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/prettyPhoto/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/twitter/jquery.tweet.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/scrolltop/scrolltopcontrol.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/portfolio/filterable.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/modernizr/modernizr-2.0.3.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/easing/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/swfobject/swfobject.js"></script>

</head>
<!-- HEADER ENDS HERE -->
<body <?php body_class(); ?>>
<div id="wrapper">
	<div class="center">
		<div id="container">
			<!--WRAPPER-->
			<div id="header">
				<!-- HEADER  -->
				<!-- LOGO -->
			<a id="logo" title="<?php echo htmlspecialchars(get_bloginfo('name')); ?>" href="<?php echo home_url(); ?>"><img src="<?php echo of_get_option('logo', get_template_directory_uri() . '/images/logo.png'); ?>" alt="<?php echo htmlspecialchars(get_bloginfo('name')); ?>" height="60"/></a>
			<!--LOGO ENDS  -->
			<nav id="access" role="navigation">

				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => 'div', 'container_class' => 'main-menu', 'container_id' => 'main_navigation', 'menu_class' => '' ) ); ?>

			</nav><!-- #access -->
            <form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                       <fieldset class="search-place">
                        <input name="s" id="s" class="search-input" type="text" onBlur="if(this.value=='')this.value='Type and hit enter';" onFocus="if(this.value=='Type and hit enter')this.value='';" value="Type and hit enter"  />
                    </fieldset>
            </form>

		</div><!-- HEADER ENDS-->
		<!--  HEADER ENDS-->
