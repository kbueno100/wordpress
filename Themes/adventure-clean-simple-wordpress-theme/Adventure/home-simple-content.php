				<div class="one">
					<div class="slideshow">
						<!-- COLUMNS CONTAINER STARTS-->
						<div class="one-third" id="simple-content-intro">
							<!--COLUMN STARTS -->
							<?php the_content(); ?>
						</div>
						<!-- COLUMN ENDS-->
						<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/slides/slides.min.jquery.js"></script>
                        <script type="text/javascript">
                            jQuery.noConflict()(function($){	
                            jQuery("#slider-small").slides({
                                        preload: true,
                                        preloadImage: '<?php echo get_template_directory_uri(); ?>/images/loading.gif',
                                        effect: '<?php echo of_get_option('shs_effects', 'slide'); ?>',
                                        generateNextPrev: <?php echo of_get_option('shs_generatenextprev', 0) ? 'true' : 'false'; ?>,
                                        generatePagination: <?php echo of_get_option('shs_generatepagination', 0) ? 'true' : 'false'; ?>,
                                        fadeSpeed: <?php echo (float)of_get_option('shs_fadespeed', 3.5) * 1000; ?>,
                                        slideSpeed: <?php echo (float)of_get_option('shs_slidespeed', 3.5) * 1000; ?>,
                                        start: <?php echo of_get_option('shs_start', 1); ?>,
                                        crossfade: <?php echo of_get_option('shs_crossfade', 0) ? 'true' : 'false'; ?>,
                                        randomize: <?php echo of_get_option('shs_randomize', 0) ? 'true' : 'false'; ?>,
                                        play: <?php echo (float)of_get_option('shs_play', 5) * 1000; ?>,
                                        pause: <?php echo (float)of_get_option('shs_pause', 2.5) * 1000; ?>,
                                        hoverPause: <?php echo of_get_option('shs_hoverpause', 0) ? 'true' : 'false'; ?>,
                                        bigTarget: <?php echo of_get_option('shs_bigtarget', 0) ? 'true' : 'false'; ?>
                                    });
                                });
                        </script>
						<div id="slider-small">
						<?php 	$slider = adventure_get_slider_images(); ?>
							<div class="slides_container small-slider">
                                <!-- SLIDER STARTS-->
                                <!-- SLIDER CONTENT STARTS-->
								<?php 	if (isset($slider['images'])) foreach ($slider['images'] as $img) {
											$slide_meta = adv_get_slide_meta($img->ID);
                                            echo '<a href="' . $slide_meta['link'] . '" title="' . $slide_meta['title'] . '">' 
                                                . wp_get_attachment_image($img->ID, 'simple-slider') . '</a>';
                                        } 
										if (isset($slider['unattached'])) foreach ($slider['unattached'] as $img) {
											$slide_meta = adv_get_slide_meta($img->ID);
                                            echo '<a href="' . $slide_meta['link'] . '" title="' . $slide_meta['title'] . '">' 
                                                . wp_get_attachment_image($img->ID, 'simple-slider') . '</a>';
                                        } 
                                        if (isset($slider['pages'])) foreach ($slider['pages'] as $pge) {
											if ($att_ID = adv_get_slideshow_image_id($pge->ID, 'sc')) {
												$img_src = wp_get_attachment_image_src($att_ID, 'simple-slider');
												$slide_meta = adv_get_slide_meta($att_ID);
												echo '<a href="' . $slide_meta['link'] . '" title="' . $slide_meta['title'] . '">' 
													. '<img src="' . $img_src[0] . '" width="' . $img_src[1] . '" height="' . $img_src[2]
													. '" title="' . $slide_meta['title'] . '" alt="' . $slide_meta['alt'] . '" /></a>';
											}
                                        }  
                                        if (isset($slider['posts'])) foreach ($slider['posts'] as $pst) {
											if ($att_ID = adv_get_slideshow_image_id($pst->ID, 'sc')) {
												$img_src = wp_get_attachment_image_src($att_ID, 'simple-slider');
												$slide_meta = adv_get_slide_meta($att_ID);
												echo '<a href="' . $slide_meta['link'] . '" title="' . $slide_meta['title'] . '">' 
													. '<img src="' . $img_src[0] . '" width="' . $img_src[1] . '" height="' . $img_src[2]
													. '" title="' . $slide_meta['title'] . '" alt="' . $slide_meta['alt'] . '" /></a>';
											}
                                        }  
                                        if (isset($slider['portfolio'])) foreach ($slider['portfolio'] as $ptf) {
											if ($att_ID = adv_get_slideshow_image_id($ptf->ID, 'sc')) {
												$img_src = wp_get_attachment_image_src($att_ID, 'simple-slider');
												$slide_meta = adv_get_slide_meta($att_ID);
												echo '<a href="' . $slide_meta['link'] . '" title="' . $slide_meta['title'] . '">' 
													. '<img src="' . $img_src[0] . '" width="' . $img_src[1] . '" height="' . $img_src[2]
													. '" title="' . $slide_meta['title'] . '" alt="' . $slide_meta['alt'] . '" /></a>';
											}
                                        }  
                                ?>
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
				