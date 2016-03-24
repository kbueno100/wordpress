<?php 
get_header(); 
the_post();
if (isset($_GET['slider'])) { 
	get_template_part('home', $_GET['slider']);
	get_footer('empty');
} else {
 ?>
			<!-- MAIN CONTAINER -->
			<div id="content">
				<?php get_template_part('home', of_get_option('home_type', 'simple-slider')); ?>
				<div class="one">
					<?php if (adv_show_title($post) || adv_show_subtitle($post)) { ?>
					<!-- COLUMNS CONTAINER STARTS-->
					<div class="intro-pages">
						<!-- INTRO DIV STARTS-->
						<?php if (adv_show_title($post)) { ?><h1><?php the_title(); ?></h1><?php } ?>
						<?php if (adv_show_subtitle($post)) { ?><h3><?php adventure_the_subtitle($post); ?></h3><?php } ?>
					</div>
					<!-- INTRO ENDS-->
					<?php } ?>
				</div>
				<!-- COLUMNS CONTAINER ENDS-->
				<?php if (is_active_sidebar('adventure-home-first')) { ?>
                <div class="one widgets">
                    <?php dynamic_sidebar('adventure-home-first'); ?>
                </div>
               <?php } ?>
     
                <?php if (is_active_sidebar('adventure-home-second')) { ?>
                <div class="one widgets">
                <div class="horizontal-line"></div>
                    <?php dynamic_sidebar('adventure-home-second'); ?>
                </div>
               <?php } ?>
     
                <?php if (is_active_sidebar('adventure-home-third')) { ?>
                <div class="one widgets">
                <div class="horizontal-line"></div>
                    <?php dynamic_sidebar('adventure-home-third'); ?>
                </div>
               <?php } ?>

		<!-- Grab the footer. -->
		<?php get_footer(); } ?>