			<div class="one">
				<?php echo do_shortcode('[piecemaker id="' . of_get_option('piecemaker_id', '') . '"]'); ?>
			</div>
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
            <div class="one">
                <?php the_content(); ?>
            </div>
