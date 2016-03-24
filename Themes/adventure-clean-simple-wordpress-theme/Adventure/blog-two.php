				<div class="inner-content">

                <!-- Grab the posts. -->

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

                $wp_query->query('paged='.$paged.'&posts_per_page=' . of_get_option('posts_per_page', 10));

                ?>

                

                <?php $i = 0; while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

                

                

                <?php global $more; $more = 0; ?>

                <div class="one-third-big<?php if ($i%2) echo ' last'; ?>">

                    <div <?php post_class('article'); ?>>

                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

                        <!--POST TITLE-->

                        <?php if (has_post_thumbnail()) { ?>

                            <p class="image">

                                <?php the_post_thumbnail('blog-two'); ?>

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

                        <?php the_content('Read This Article'); ?>

                        <!--POST LINK-->

                    </div><!-- /.article -->

                </div>

                <?php if ($i++%2) { ?>

                <div class="horizontal-line">

                </div>

                <?php } ?>

				<?php endwhile; ?>

					<!--PAGINATION-->

					<ul class="blog-pagination">

						<li><?php previous_posts_link('&laquo; Previous Page') ?></li>

						<li><?php next_posts_link('Next Page &raquo;') ?></li>

					</ul>

					<!--PAGINATION ENDS-->

				</div>