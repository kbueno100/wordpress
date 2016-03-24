				<div id="footer-wrapper">
					<!-- FOOTER WRAPPER STARTS-->
					<div id="footer-container">
						<!-- FOOTER CONTAINER STARTS-->
						<div id="footer">
							<!-- FOOTER STARTS-->
							<?php if (is_active_sidebar('adventure-footer-sidebar')) { ?>
                            <div class="one widgets">
                                <?php dynamic_sidebar('adventure-footer-sidebar'); ?>
                            </div>
                           <?php } ?>
							<!-- COLUMN CONTAINER ENDS-->
						</div>
						<!-- FOOTER ENDS-->
					</div>
					<!-- FOOTER CONTAINER ENDS-->
				</div>
				<!-- FOOTER WRAPPER ENDS-->
				<div id="copyright-wrapper">
					<!-- COPYRIGHTS WRAPPER STARTS-->
					<div id="copyright">
						<a id="copyright-logo" title="<?php echo htmlspecialchars(get_bloginfo('name')); ?>" href="<?php echo home_url(); ?>"><img src="<?php echo of_get_option('footer_logo', get_template_directory_uri() . '/images/logo-bottom.png'); ?>" alt="<?php echo htmlspecialchars(get_bloginfo('name')); ?>" height="50"/></a>
						<div class="right">
							<?php wp_nav_menu( array( 'theme_location' => 'footer', 'container' => 'div', 'container_class' => 'footer-menu', 'container_id' => 'footer-navigation', 'menu_class' => '', 'depth' => 1 ) ); ?>
							<?php echo wpautop(do_shortcode(of_get_option('copyright_content', 'Copyright...'))); ?>
						</div>
					</div>
					<!-- COPYRIGHTS ENDS-->
				</div>
				<!-- COPYRIGHTS WRAPPER ENDS-->
			</div>
		</div>
	</div>
</div>
<?php echo of_get_option('footer_code'); wp_footer(); ?>
</div>
</body>
<!--BODY ENDS  -->
</html>
<!--HTML ENDS  -->
<!--Copyright by trendyWebStar  -->