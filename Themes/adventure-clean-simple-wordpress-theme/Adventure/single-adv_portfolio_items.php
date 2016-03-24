<?php the_post(); get_header(); ?>

		<div id="content">
			<div class="one">
				<!-- COLUMNS CONTAINER STARTS-->
                    	<?php $portfolio = adv_get_portfolio_page(); ?>
					<?php if (adv_show_title($portfolio) || adv_show_subtitle($portfolio)) { ?>
				<div class="intro-pages">
					<!-- INTRO DIV STARTS-->
						<?php if (adv_show_title($portfolio)) { ?><h1><?php echo $portfolio->post_title; ?></h1><?php } ?>
						<?php if (adv_show_subtitle($portfolio)) { ?><h3><?php adventure_the_subtitle($portfolio); ?></h3><?php } ?>
				</div><!-- INTRO ENDS-->
					<?php } ?>
			</div><!-- COLUMNS CONTAINER ENDS-->
	
			<div class="one">
				<?php the_content(); ?>
				<?php wp_link_pages( array(	'before' => '<div class="horizontal-line"></div><div class="blog-pagination"><h5>Pages:</h5>',
							'after' => '</div>',
							'link_before' => '<span>',
							'link_after' => '</span>',
							'nextpagelink'     => __('Next page'),
							'previouspagelink' => __('Previous page')
					));
				?>
                <div class="horizontal-line"></div>
                <div class="portfolio-details-nav">
                    <!-- COLUMN STARTS-->
                    <?php next_post_link( '%link', __( '<span id="next">Next Project</span>', 'portablestudio' ) ); ?>
                    <?php previous_post_link( '%link', __( '<span id="prev">Previous Project</span>', 'portablestudio' ) ); ?>
                </div>
            </div>
        </div><!-- CONTENT ENDS-->

		<!-- Grab the footer. -->
		<?php get_footer(); ?>