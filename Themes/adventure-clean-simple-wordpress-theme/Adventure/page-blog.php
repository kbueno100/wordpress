<?php 
/* 
Template Name: Blog
*/ 
?>

<?php get_header(); ?>
				
		<div id="content">
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

			<div class="one">
			<?php get_template_part('blog', of_get_option('blog_type', 'one')); ?>
				<div class="one-fourth last">
                	<?php get_sidebar('blog'); ?>
				</div>
				<!-- COLUMNS CONTAINER ENDS-->
			</div>
		</div><!-- CONTENT ENDS-->
		
		<!-- Grab the footer. -->
		<?php get_footer(); ?>