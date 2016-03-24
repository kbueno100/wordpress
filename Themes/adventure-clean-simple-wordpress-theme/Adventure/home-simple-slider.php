            <div class="one">
                <div class="slideshow">
					<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/slides/slides.min.jquery.js"></script>
                    <script type="text/javascript">
						/***************************************************
							SLIDER  NAV FADE OUT & FADE IN
						***************************************************/	
						jQuery.noConflict()(function($){	
							$(document).ready(function() {
							if (jQuery().slides) {
								
								jQuery("#slides").hover( function() {
									jQuery('.slides-nav').fadeIn(400);
								}, function () {
									jQuery('.slides-nav').fadeOut(400);
								});
								
							}
							});	
							});	
                        /*-----------------SLIDES WITH CAPTION---------------*/
                        jQuery.noConflict()(function($){	
                            $(function(){
                                    $('#slides').slides({
                                        preload: true,
                                        preloadImage: '<?php echo get_template_directory_uri(); ?>/images/loading.gif',
                                        effect: '<?php echo of_get_option('ss_effects', 'slide'); ?>',
                                        generateNextPrev: <?php echo of_get_option('ss_generatenextprev', 0) ? 'true' : 'false'; ?>,
                                        generatePagination: <?php echo of_get_option('ss_generatepagination', 0) ? 'true' : 'false'; ?>,
                                        fadeSpeed: <?php echo (float)of_get_option('ss_fadespeed', 3.5) * 1000; ?>,
                                        slideSpeed: <?php echo (float)of_get_option('ss_slidespeed', 3.5) * 1000; ?>,
                                        start: <?php echo of_get_option('ss_start', 1); ?>,
                                        crossfade: <?php echo of_get_option('ss_crossfade', 0) ? 'true' : 'false'; ?>,
                                        randomize: <?php echo of_get_option('ss_randomize', 0) ? 'true' : 'false'; ?>,
                                        play: <?php echo (float)of_get_option('ss_play', 5) * 1000; ?>,
                                        pause: <?php echo (float)of_get_option('ss_pause', 2.5) * 1000; ?>,
                                        hoverPause: <?php echo of_get_option('ss_hoverpause', 0) ? 'true' : 'false'; ?>,
                                        bigTarget: <?php echo of_get_option('ss_bigtarget', 0) ? 'true' : 'false'; ?>,
										animationStart: function(current){
											$('.caption').animate({
												bottom:0
											},100);
											if (window.console && console.log) {
												// example return of current slide number
												console.log('animationStart on slide: ', current);
											};
										},
										animationComplete: function(current){
											$('.caption').animate({
												bottom:0
											},200);
											if (window.console && console.log) {
												// example return of current slide number
												console.log('animationComplete on slide: ', current);
											};
										},
										slidesLoaded: function() {
											$('.caption').animate({
												bottom:0
											},200);
										}
                                    });
                                });
                                });
                    </script>
					<?php 	$slider = adventure_get_slider_images(); ?>
                    <div id="slides">
                    <div id="slider-big">
                                <div class="slides_container big-slider">
								<?php 	$i = 0; 
                                        foreach ($slider as $type => $posts) {
                                            foreach ($posts as $img) { 
                                                $att_ID = ($type == 'images' || $type == 'unattached') ? $img->ID : adv_get_slideshow_image_id($img->ID, 'simple');
												if ($att_ID) {
													$slide_meta = adv_get_slide_meta($att_ID);
													$img_src = wp_get_attachment_image_src($att_ID, 'slider'); ?>
										<div class="slide">
										   <a href="<?php echo $slide_meta['link']; ?>" title="<?php echo $slide_meta['title']; ?>">
											<img src="<?php echo $img_src[0]; ?>" width="<?php echo $img_src[1]; ?>" height="<?php echo $img_src[2]; ?>" title="<?php echo $slide_meta['title']; ?>" alt="<?php echo $slide_meta['alt'];; ?>" />
											</a>
											<div class="caption">
												<p><?php echo $slide_meta['caption'] ?></p>
											</div>
										</div>
                                      <?php		} 
											} 
										} ?>
                                </div>
                                <!-- SLIDESHOW CONTAINER ENDS-->
                            </div>
                    </div>
				</div><!-- SLIDER ENDS-->	<!-- SLIDESHOW ENDS-->
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
