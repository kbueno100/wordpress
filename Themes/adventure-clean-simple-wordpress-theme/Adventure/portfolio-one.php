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
                    
                    <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
						<?php $item_details = adventure_item_details(get_the_id()); ?>
                    <div class="one">
						<div class="inner-content <?php $cats = array_values(get_the_terms(get_the_id(), 'adv_portfolio_cat')); echo $cats[0]->slug; ?>">
                            <p class="portfolio-img">
                                <?php if (isset($item_details['bg_img'])) { ?>
                                <a href="<?php echo $item_details['video-link']; ?>" title="<?php echo $item_details['video-title']; ?>" class="portfolio-item-preview video" rel="prettyPhoto"><span class="video-image" style="background: #000 url(<?php echo $item_details['bg_img']; ?>) center no-repeat;">&nbsp;</span></a>
                                <?php } else { ?>
                                <a href="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>" class="portfolio-item-preview" rel="prettyPhoto"><?php the_post_thumbnail('portfolio'); ?></a>
                                <?php } ?>
                            </p>
                        </div>
                        <div class="one-fourth last">
                            <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                            <div class="portfolio-excerpt"><p><?php the_excerpt(); ?></p></div>
						</div>
                   </div>
                        <div class="horizontal-line"></div>
					<?php endwhile; ?>