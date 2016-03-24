<?php the_post(); get_header(); ?>
				
		<div id="content">
			<div class="one">
				<!-- COLUMNS CONTAINER STARTS-->
                    	<?php $portfolio = adv_get_portfolio_page(); ?>
					<?php if (adv_show_title($portfolio) || adv_show_subtitle($portfolio)) { ?>
				<div class="intro-pages">
					<!-- INTRO DIV STARTS-->
						<?php if (adv_show_title($portfolio)) { ?><h1><?php echo $portfolio->post_title; ?></h1><?php } ?>
						<?php if (adv_show_subtitle($portfolio)) { ?><h3><?php adventure_the_subtitle($portfolio); ?></h3><?php } ?>
				</div><!-- INTRO ENDS-->
					<?php } ?>
			</div><!-- COLUMNS CONTAINER ENDS-->
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
                   <ul>
                    
                    <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
						<?php $item_details = adventure_item_details(get_the_id()); ?>
						<li class="one-third <?php $cats = array_values(get_the_terms(get_the_id(), 'adv_portfolio_cat')); echo $cats[0]->slug; ?>">
						<p class="portfolio-img">
                        	<?php if ($item_details['bg_img']) { ?>
                        	<a href="<?php echo $item_details['video-link']; ?>" title="<?php echo $item_details['video-title']; ?>" class="portfolio-item-preview video" rel="prettyPhoto"><span class="video-image" style="background: url(<?php echo $item_details['bg_img']; ?>) center no-repeat;">&nbsp;</span></a>
                        	<?php } else { ?>
                        	<a href="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>" class="portfolio-item-preview" rel="prettyPhoto"><?php the_post_thumbnail('portfolio-three'); ?></a>
                        	<?php } ?>
                        </p>
						<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
						<div class="portfolio-excerpt"><p><?php the_excerpt(); ?></p></div>
						</li>
					<?php endwhile; ?>
					</ul>
					<!--END ul-->
				</div>
				<!--END portfolio-wrap-->
			</div>
			<!--END portfolio ID-->
		</div><!-- CONTENT ENDS-->
		
		<!-- Grab the footer. -->
		<?php get_footer(); ?>