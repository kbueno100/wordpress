				<div class="one">
					<div class="slideshow">
						<!-- COLUMNS CONTAINER STARTS-->
						<div class="one-third">
							<!--COLUMN STARTS -->
							<?php the_content(); ?>
						</div>
						<!-- COLUMN ENDS-->
						<div id="slider-small">
							<div class="slides_container small-slider">
                                <!-- SLIDER STARTS-->
                                <!-- SLIDER CONTENT STARTS-->
								<?php 	the_post_thumbnail('simple-slider');   ?>
							</div>
							<!-- SLIDESHOW CONTAINER ENDS-->
						</div>
					</div>
					<!-- SLIDESHOW ENDS-->
				</div>
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
