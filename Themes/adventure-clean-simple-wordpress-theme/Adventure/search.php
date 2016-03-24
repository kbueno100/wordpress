<?php get_header(); ?>
				
		<div id="content">
			<div class="one">
				<!-- COLUMNS CONTAINER STARTS-->
				<div class="intro-pages">
					<!-- INTRO DIV STARTS-->
                    	<?php $home_page = get_page(get_option('page_on_front')); ?>
						<h1>Search Results</h1>
						<?php if (adv_show_subtitle($home_page)) { ?><h3><?php adventure_the_subtitle($home_page); ?></h3><?php } ?>
				</div><!-- INTRO ENDS-->
			</div><!-- COLUMNS CONTAINER ENDS-->
			<div class="one">
				<div class="inner-content">
                <!-- Grab the posts. -->
                <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
                
                
                <?php global $more; $more = 0; ?>
                    <div <?php post_class('article'); ?>>
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <!--POST TITLE-->
                        <?php if (has_post_thumbnail()) { ?>
                            <p class="image">
                                <?php the_post_thumbnail('blog'); ?>
                            </p>
                        <?php } ?>
                        <!--POST IMAGE-->
                        <p class="entry-meta">
                
                            <?php adventure_posted_on(); ?>
                
                            <?php if ( comments_open() ) : ?>
                
                            <span class="sep"> | </span>
                
                            <span class="comments-link"><?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a comment', 'portablestudio' ) . '</span>', __( '<b>1</b> Comment', 'portablestudio' ), __( '<b>%</b> Comments', 'portablestudio' ) ); ?></span>
                
                            <?php endif; // End if comments_open() ?>
                
                            <?php edit_post_link( __( 'Edit', 'portablestudio' ), ' | <span class="edit-link">', '</span>' ); ?>
                
                        </p><!-- .entry-meta -->
                        <!--POST DETAILS-->
                        <!--POST INTRO-->
                        <?php the_excerpt(); ?>
                        <!--POST LINK-->
                        <div class="horizontal-line">
                        </div>
                    </div><!-- /.article -->
				<?php endwhile; ?>
					<!--PAGINATION-->
					<ul class="blog-pagination">
						<li><?php previous_posts_link('&laquo; Previous Page') ?></li>
						<li><?php next_posts_link('Next Page &raquo;') ?></li>
					</ul>
					<!--PAGINATION ENDS-->
				</div>
				<div class="one-fourth last">
                	<?php get_sidebar('blog'); ?>
				</div>
				<!-- COLUMNS CONTAINER ENDS-->
			</div>
		</div><!-- CONTENT ENDS-->
		
		<!-- Grab the footer. -->
		<?php get_footer(); ?>