            <div class="one">
				<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/cycle-slider/cycle.js"></script>
                <script type="text/javascript">
					/***************************************************
							CYCLE SLIDER
					***************************************************/
					<?php 	$cycle_effects = array(	'blindX'		=> 'Blind X',
							'blindY'		=> 'Blind Y',
							'blindZ'		=> 'Blind Z',
							'cover'			=> 'Cover',
							'curtainX'		=> 'Curtain X',
							'curtainY'		=> 'Curtain Y',
							'fade'			=> 'Fade',
							'fadeZoom'		=> 'Fade Zoom',
							'growX'			=> 'Grow X',
							'growY'			=> 'Grow Y',
							'none'			=> 'None',
							'scrollUp'		=> 'Scroll Up',
							'scrollDown'	=> 'Scroll Down',
							'scrollLeft'	=> 'Scroll Left',
							'scrollRight'	=> 'Scroll Right',
							'scrollHorz'	=> 'Scroll Horizontally',
							'scrollVert'	=> 'Scroll Vertically',
							'shuffle'		=> 'Shuffle',
							'slideX'		=> 'Slide X',
							'slideY'		=> 'Slide Y',
							'toss'			=> 'Toss',
							'turnUp'		=> 'Turn Up',
							'turnDown'		=> 'Turn Down',
							'turnLeft'		=> 'Turn Left',
							'turnRight'		=> 'Turn Right',
							'uncover'		=> 'Uncover',
							'wipe'			=> 'Wipe',
							'zoom'			=> 'Zoom'
						);
						$fx = of_get_option('cycle_fx', 'random');
						if (!$fx || $fx == 'random') $fx = implode(',', array_keys($cycle_effects)); 
					?>
					jQuery.noConflict()(function($){
						$(document).ready(function() {
							$('#cycle-slider').cycle({
								fx:     '<?php echo $fx; ?>',
								pause:   <?php echo of_get_option('cycle_pause', 1) ? 'true' : 'false'; ?>,
								random: <?php echo of_get_option('cycle_random', 0) ? 'true' : 'false'; ?>,
								speed: <?php echo (float)of_get_option('cycle_speed', 0.5) * 1000; ?>,
								timeout: <?php echo (float)of_get_option('cycle_timeout', 3) * 1000; ?>,
                                startingSlide: <?php echo (int)of_get_option('cycle_startingslide', 1) - 1; ?>,
								prev:    '#prev',
								next:    '#next',
								sync: 1, 		
								delay:  -2000 
							});
						});
					});
                </script>
            <?php 	$slider = adventure_get_slider_images(); ?>
            <div id="cycle-slider">
                <?php 	$i = 0; 
                        foreach ($slider as $type => $posts) {
                            foreach ($posts as $img) { 
                                $att_ID = ($type == 'images' || $type == 'unattached') ? $img->ID : adv_get_slideshow_image_id($img->ID, 'cycle');
								if ($att_ID) {
									$slide_meta = adv_get_slide_meta($att_ID);
									$img_src = wp_get_attachment_image_src($att_ID, 'slider'); ?>
						<div class="slide">
						   <a href="<?php echo $slide_meta['link']; ?>" title="<?php echo $slide_meta['title']; ?>'">
							<img src="<?php echo $img_src[0]; ?>" width="<?php echo $img_src[1]; ?>" height="<?php echo $img_src[2]; ?>" title="<?php echo $slide_meta['title']; ?>" alt="<?php echo $slide_meta['alt']; ?>" />
							</a>
							<div class="caption">
								<p><?php echo $slide_meta['caption']; ?></p>
							</div>
						</div>
                      <?php		}
							} 
                     } ?>
            </div><br/>
            <div class="portfolio-details-nav">
                <a href="#"><span id="next">Next</span></a>   
                <a href="#"><span id="prev">Prev</span></a> 
            </div>	
            
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
