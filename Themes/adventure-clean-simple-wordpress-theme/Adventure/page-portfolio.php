<?php 
/* 
Template Name: Portfolio
*/ 
?>

<?php the_post(); get_header(); ?>
				
		<div id="content" class="portfolio">
			<div class="one">
				<!-- COLUMNS CONTAINER STARTS-->
				<?php if (adv_show_title($post) || adv_show_subtitle($post)) { ?>
				<div class="intro-pages">
					<!-- INTRO DIV STARTS-->
						<?php if (adv_show_title($post)) { ?><h1><?php the_title(); ?></h1><?php } ?>
						<?php if (adv_show_subtitle($post)) { ?><h3><?php adventure_the_subtitle($post); ?></h3><?php } ?>
				</div><!-- INTRO ENDS-->
				<?php } ?>
			</div><!-- COLUMNS CONTAINER ENDS-->

			<?php get_template_part('portfolio', of_get_option('portfolio_type', 'three')); ?>

			<div class="one">
			<!--PAGINATION-->
				<ul class="blog-pagination">
					<li><?php previous_posts_link('&laquo; Previous Page') ?></li>
					<li><?php next_posts_link('Next Page &raquo;') ?></li>
				</ul>
				<!--PAGINATION ENDS-->
			</div>
		</div><!-- CONTENT ENDS-->
		
		<!-- Grab the footer. -->
		<?php get_footer(); ?>