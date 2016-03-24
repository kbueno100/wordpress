            <div class="one">
                <?php 	$slider = adventure_get_slider_images(); ?>
                <div id="grid">
                    <?php 	$i = 0;
                            $classes = array('one-third', 'one-third', 'one-third last-grid', 'one-fourth', 'one-fourth', 'one-fourth', 'one-fourth', 'one-fourth',
                                                'one-fourth', 'one-fifth', 'one-fifth', 'one-fifth', 'one-fifth last-grid', 'one-half', 'one-half last-grid');
                            $thumbtypes = array( 'grid-318', 'grid-318', 'grid-318', 'grid-238', 'grid-238', 'grid-238', 'grid-238', 'grid-238', 'grid-238', 
                                                    'grid-118', 'grid-118', 'grid-118', 'grid-118', 'grid-478', 'grid-478');
                            foreach ($slider as $type => $posts) {
                                if ($i > 14) break;
                                foreach ($posts as $img) { 
                                    if ($i > 14) break;
                                    $att_ID = ($type == 'images' || $type == 'unattached') ? $img->ID : adv_get_slideshow_image_id($img->ID, 'grid');
									if ($att_ID) {
										$slide_meta = adv_get_slide_meta($att_ID); ?>
										<div class="<?php echo $classes[$i]; ?>">
											<div class="item-hover">
												<div class="portfolio-thumbnail">
													<div class="thumb-text">
														<h4><a href="<?php echo $slide_meta['link']; ?>" style="color: #E64135 !important;">
															<?php echo $slide_meta['caption']; ?>
														 </a></h4>
														<p><?php echo $slide_meta['title']; ?></p>
														<?php if ($slide_meta['link'] != '#') echo '<a href="' . $slide_meta['link'] . '">Read More</a>'; ?>
													</div>
												</div>
												<?php echo wp_get_attachment_image($att_ID, $thumbtypes[$i]); ?>
											</div>
										</div>
									  <?php $i++; 
									} 
								} 
							} ?>
                </div>
                <!--END portfolio-wrap-->
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
			
