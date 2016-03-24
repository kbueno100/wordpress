			<div id="portfolio">
                <ul id="filterable">
                    <li class="first">
                    <h5>Filter by</h5>
                    </li>
					<li class="current"><a class="all" href="#all">All</a></li>
                    <?php 
						$cats = get_categories(array('taxonomy' => 'adv_portfolio_cat', 'hierarchical' => 0)); 
						foreach ($cats as $cat) {
							echo '<li><a class="' . $cat->slug . '" href="#' . $cat->slug . '">' . $cat->name . '</a></li>';
						}					
					?>
                </ul>
				<!--END filtering-nav-->
				<div class="portfolio-container">
					<?php
                    global $paged, $wp_query, $wp;
                        if  ( empty($paged) ) {
                            if ( !empty( $_GET['paged'] ) ) {
                                $paged = $_GET['paged'];
                            } elseif ( !empty($wp->matched_query) && $args = wp_parse_args($wp->matched_query) ) {
                                if ( !empty( $args['paged'] ) ) {
                                    $paged = $args['paged'];
                                }
                            }
                            if ( !empty($paged) )
                                $wp_query->set('paged', $paged);
                        }
                    
                    $temp = $wp_query;
                    $wp_query= null;
                    $wp_query = new WP_Query();
                    $wp_query->query('paged='.$paged.'&post_type=adv_portfolio_items&posts_per_page=' . of_get_option('portfolio_per_page', 10));
                    ?>
                    <ul>
                    
                    <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
						<?php $item_details = adventure_item_details(get_the_id()); ?>
						<li class="one-fifth <?php $cats = array_values(get_the_terms(get_the_id(), 'adv_portfolio_cat')); echo $cats[0]->slug; ?>">
						<p class="portfolio-img">
                        	<?php if (isset($item_details['bg_img'])) { ?>
                        	<a href="<?php echo $item_details['video-link']; ?>" title="<?php echo $item_details['video-title']; ?>" class="portfolio-item-preview video" rel="prettyPhoto"><span class="video-image" style="background: url(<?php echo $item_details['bg_img']; ?>) center no-repeat;">&nbsp;</span></a>
                        	<?php } else { ?>
                        	<a href="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>" class="portfolio-item-preview" rel="prettyPhoto"><?php the_post_thumbnail('portfolio-five'); ?></a>
                        	<?php } ?>
                        </p>
						</li>
					<?php endwhile; ?>
					</ul>
	<!--END ul-->
				</div>
				<!--END portfolio-wrap-->
			</div>
			<!--END portfolio ID-->