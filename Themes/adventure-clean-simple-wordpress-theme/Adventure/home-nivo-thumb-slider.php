			<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/nivo-slider/jquery.nivo.slider.js"></script>
            <script type="text/javascript">
                /***************************************************
                        Nivo Slider
                ***************************************************/
                jQuery.noConflict()(function($){
                    jQuery(document).ready(function($){
                    $(window).load(function() {
                        $('#slider4').nivoSlider({
                            effect: '<?php echo of_get_option('nivo_effect', 'random'); ?>',
                            slices: <?php echo of_get_option('nivo_slices', 15); ?>,
                            boxCols: <?php echo of_get_option('nivo_boxcols', 8); ?>,
                            boxRows: <?php echo of_get_option('nivo_boxrows', 4); ?>,
                            animSpeed: <?php echo (float)of_get_option('nivo_animspeed', 0.5) * 1000; ?>,
                            pauseTime: <?php echo (float)of_get_option('nivo_pausetime', 3) * 1000; ?>,
                            startSlide: <?php echo (int)of_get_option('nivo_startslide', 1) - 1; ?>,
                            directionNav: <?php echo of_get_option('nivo_directionnav', 1) ? 'true' : 'false'; ?>,
                            directionNavHide: <?php echo of_get_option('nivo_directionnavhide', 1) ? 'true' : 'false'; ?>,
                            controlNavThumbs: true,
                            controlNavThumbsFromRel: true,
                            keyboardNav: <?php echo of_get_option('nivo_keyboardnav', 1) ? 'true' : 'false'; ?>,
                            pauseOnHover: <?php echo of_get_option('nivo_pauseonhover', 1) ? 'true' : 'false'; ?>,
                            manualAdvance: <?php echo of_get_option('nivo_manualadvance', 1) ? 'true' : 'false'; ?>,
                            prevText: '<?php echo of_get_option('nivo_prevtext', 'Prev'); ?>',
                            nextText: '<?php echo of_get_option('nivo_nexttext', 'Next'); ?>'								
                        });
                    });
                });
                });
            </script>
			<?php 	$slider = adventure_get_slider_images(); ?>
            <div id="slider4" class="nivoSlider">
						<?php 	if (isset($slider['images'])) foreach ($slider['images'] as $img) {
									$slide_meta = adv_get_slide_meta($img->ID);
									$img_src = wp_get_attachment_image_src($img->ID, 'accordion-slider');
									$thumb_src = wp_get_attachment_image_src($img->ID, 'slider-thumb');
									echo '<a href="' . $slide_meta['link'] . '" title="' . $slide_meta['title'] . '">' 
										. '<img src="' . $img_src[0] . '" width="' . $img_src[1] . '" height="' . $img_src[2]
										. '" title="' . $slide_meta['title'] . '" alt="' . $slide_meta['alt'] . '" rel="' . $thumb_src[0] . '" /></a>';
                        		} 
								if (isset($slider['unattached'])) foreach ($slider['unattached'] as $img) {
									$slide_meta = adv_get_slide_meta($img->ID);
									$img_src = wp_get_attachment_image_src($img->ID, 'accordion-slider');
									$thumb_src = wp_get_attachment_image_src($img->ID, 'slider-thumb');
									echo '<a href="' . $slide_meta['link'] . '" title="' . $slide_meta['title'] . '">' 
										. '<img src="' . $img_src[0] . '" width="' . $img_src[1] . '" height="' . $img_src[2]
										. '" title="' . $slide_meta['title'] . '" alt="' . $slide_meta['alt'] . '" rel="' . $thumb_src[0] . '" /></a>';
                        		}
								if (isset($slider['pages'])) foreach ($slider['pages'] as $pge) {
									if ($att_ID = adv_get_slideshow_image_id($pge->ID, 'nivo')) {
										$slide_meta = adv_get_slide_meta($att_ID);
										$img_src = wp_get_attachment_image_src($att_ID, 'accordion-slider');
										$thumb_src = wp_get_attachment_image_src($att_ID, 'slider-thumb');
										echo '<a href="' . $slide_meta['link'] . '" title="' . $slide_meta['title'] . '">' 
											. '<img src="' . $img_src[0] . '" width="' . $img_src[1] . '" height="' . $img_src[2]
											. '" title="' . $slide_meta['title'] . '" alt="' . $slide_meta['alt'] . '" rel="' . $thumb_src[0] . '" /></a>';
									}
                        		}  
								if (isset($slider['posts'])) foreach ($slider['posts'] as $pst) {
									if ($att_ID = adv_get_slideshow_image_id($pst->ID, 'nivo')) {
										$slide_meta = adv_get_slide_meta($att_ID);
										$img_src = wp_get_attachment_image_src($att_ID, 'accordion-slider');
										$thumb_src = wp_get_attachment_image_src($att_ID, 'slider-thumb');
										echo '<a href="' . $slide_meta['link'] . '" title="' . $slide_meta['title'] . '">' 
											. '<img src="' . $img_src[0] . '" width="' . $img_src[1] . '" height="' . $img_src[2]
											. '" title="' . $slide_meta['title'] . '" alt="' . $slide_meta['alt'] . '" rel="' . $thumb_src[0] . '" /></a>';
									}
                        		}  
								if (isset($slider['portfolio'])) foreach ($slider['portfolio'] as $ptf) {
									if ($att_ID = adv_get_slideshow_image_id($ptf->ID, 'nivo')) {
										$slide_meta = adv_get_slide_meta($att_ID);
										$img_src = wp_get_attachment_image_src($att_ID, 'accordion-slider');
										$thumb_src = wp_get_attachment_image_src($att_ID, 'slider-thumb');
										echo '<a href="' . $slide_meta['link'] . '" title="' . $slide_meta['title'] . '">' 
											. '<img src="' . $img_src[0] . '" width="' . $img_src[1] . '" height="' . $img_src[2]
											. '" title="' . $slide_meta['title'] . '" alt="' . $slide_meta['alt'] . '" rel="' . $thumb_src[0] . '" /></a>';
									}
                        		}  
						?>
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
            <div class="one">
                <?php the_content(); ?>
            </div>
