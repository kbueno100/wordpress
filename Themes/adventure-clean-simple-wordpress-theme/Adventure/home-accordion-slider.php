			<div class="one">
					<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/kwicks/jquery.kwicks-1.5.1.pack.js"></script>
                    <script type="text/javascript">
							/***************************************************
								KWICKS SLIDER PRELOAD  & FEATURES
							***************************************************/
							jQuery.noConflict()(function($){
							jQuery(window).bind("load", function() {
									jQuery('.slideimage:hidden').fadeIn(800);
									jQuery(".kwicks.horizontal li").css('background', '#FFF');
									jQuery('.accordian-slider-caption').show();
									jQuery('.accordian-slider-captiontitle').show();
						
								jQuery('.kwicks').kwicks({
									max : 960,
									spacing : 0,
									sticky : <?php echo of_get_option('acc_sticky', 0) ? 'true' : 'false'; ?>,
									defaultKwick: <?php echo (int)of_get_option('acc_defaultkwick', 1) - 1; ?>,
									event : '<?php echo of_get_option('acc_event', 'mouseover'); ?>',
									duration : <?php echo (float)of_get_option('acc_duration', 0.2) * 1000; ?>									
								});
							/***************************************************
								KWICKS  SLIDER CAPTION
							***************************************************/
								jQuery(function(){
									jQuery(".accordian-slider-caption").fadeTo(1, 0);
									jQuery(".slide-minicaption").fadeTo(1, 0.9);
									jQuery(".kwicks").each(function () {
										jQuery(".kwicks").hover(function() {
										jQuery('.accordian-slider-caption').stop().animate({opacity: 0.9, left: '50'}, 900 );
										
										},function(){
										jQuery('.accordian-slider-caption').stop().animate({opacity: 0, left: '940'}, 900 );
										
										});
									});
								});
							});
							});
                    </script>
                	<?php 	$slider = adventure_get_slider_images(); ?>
					<div class="kiwcks-container">
						<ul class="kwicks horizontal">
						<?php 	$i = 0; 
								foreach ($slider as $type => $posts) {
									foreach ($posts as $img) { 
										$att_ID = ($type == 'images' || $type == 'unattached') ? $img->ID : adv_get_slideshow_image_id($img->ID, 'accordion');
										if ($att_ID) {
											$slide_meta = adv_get_slide_meta($att_ID); ?>
								<li id="kwick-slide-<?php echo ++$i; ?>">
									<div>
										   <a href="<?php echo $slide_meta['link']; ?>" title="<?php echo $slide_meta['title']; ?>">
											<?php echo wp_get_attachment_image($att_ID, 'accordion-slider'); ?>
											</a>
											<p class="accordian-slider-caption">
												<span class="accordian-slider-captiontitle">
												<a href="<?php echo $slide_meta['link']; ?>"><?php echo $slide_meta['caption']; ?></a>
												</span>
												<a href="<?php echo $slide_meta['link']; ?>" title="<?php echo $slide_meta['title']; ?>"><?php echo substr(strip_shortcodes(strip_tags($img->post_content)), 0, 200); ?></a>
											</p>
									</div>
								</li>
							  <?php 	} 
								} 
							 } ?>
						</ul>
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
