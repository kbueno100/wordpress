			<div class="one">
					<div id="video-block">
						<?php echo of_get_option('homepage_video', 'No video code entered'); ?>
					</div>
				</div>
			
			<!-- COLUMNS CONTAINER ENDS-->
 				<div class="one">
					<!-- COLUMNS CONTAINER STARTS-->
					<?php if (adv_show_title($post) || adv_show_subtitle($post)) { ?>
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
