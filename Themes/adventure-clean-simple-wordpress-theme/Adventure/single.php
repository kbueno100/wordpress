<?php get_header(); the_post(); ?>

		<div id="content">
			<div class="one">
				<!-- COLUMNS CONTAINER STARTS-->
                    	<?php $blog_page = adv_get_blog_page(); ?>
					<?php if ($blog_page && (adv_show_title($blog_page) || adv_show_subtitle($blog_page))) { ?>
				<div class="intro-pages">
					<!-- INTRO DIV STARTS-->
						<?php if (adv_show_title($blog_page)) { ?><h1><?php echo $blog_page->post_title; ?></h1><?php } ?>
						<?php if (adv_show_subtitle($blog_page)) { ?><h3><?php adventure_the_subtitle($blog_page); ?></h3><?php } ?>
				</div><!-- INTRO ENDS-->
					<?php } ?>
			</div><!-- COLUMNS CONTAINER ENDS-->
			<div class="one">
				<div class="inner-content">
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
                        <?php the_content(); ?>
                        <!--POST LINK-->
                    </div><!-- /.article -->
					<div class="horizontal-line"></div>
					<?php if ($tags = get_the_tag_list( '', __( ', ', 'adventure' ) )) { ?>
					<p><strong>Tags:</strong> <?php echo $tags; ?></p>
					<?php } ?>
					<?php wp_link_pages( array(	'before' => '<div class="horizontal-line"></div><div class="blog-pagination"><h5>Pages:</h5>',
												'after' => '</div>',
												'link_before' => '<span>',
												'link_after' => '</span>',
												'nextpagelink'     => __('Next page'),
												'previouspagelink' => __('Previous page')
										));
					?>
					<div class="horizontal-line"></div>
					<div class="inner-content">
					<?php comments_template( '', true ); ?>
					</div>
				</div>
				<div class="one-fourth last">
                	<?php get_sidebar('blog'); ?>
				</div>
				<!-- COLUMNS CONTAINER ENDS-->
			</div>
		</div><!-- CONTENT ENDS-->
		
		<!-- Grab the footer. -->
		<?php get_footer(); ?>