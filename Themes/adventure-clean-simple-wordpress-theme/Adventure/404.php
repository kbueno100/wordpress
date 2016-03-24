<?php get_header(); ?>

			<!-- MAIN CONTAINER -->
			<div id="content">
				<div class="one">
					<!-- COLUMNS CONTAINER STARTS-->
					<?php $home_page = get_posts(array('post_type' => 'page', 'meta_key' => '_wp_page_template', 'meta_value' => 'home.php', 'meta_compare' => '=', 'posts_per_page' => 1)); ?>
					<?php if (adv_show_title($home_page[0]) || adv_show_subtitle($home_page[0])) { ?>
						<div class="intro-pages">
							<!-- INTRO DIV STARTS-->
								<?php if (adv_show_title($home_page[0])) { ?><h1><?php echo $home_page[0]->post_title; ?></h1><?php } ?>
								<?php if (adv_show_subtitle($home_page[0])) { ?><h3><?php adventure_the_subtitle($home_page[0]); ?></h3><?php } ?>
						</div><!-- INTRO ENDS-->
					<?php } ?>
				</div>
				<!-- COLUMNS CONTAINER ENDS-->
				<div class="one">
			<div class="one-fourth">
				<?php get_sidebar(); ?>
			</div>
					<div class="inner-content last">
						<h1><span class="colored"> 404 Error</span></h1>
						<div id="message" class="heading-font"><?php echo wpautop(do_shortcode(of_get_option('404_text', 'Page not found.'))); ?></div>
					</div>
				</div>
		
		<!-- Grab the footer. -->
		<?php get_footer(); ?>