<?php
/**
 * The template for displaying the footer.
 *
 * @package
 */

?>

		</div><!-- #content -->

		<footer id="colophon" class="site-footer" role="contentinfo" style="background: url(<?php echo get_stylesheet_directory_uri(); ?>/images/dark-wood.png)"; >

			<!-- contact-footer -->
			<div class="contact-socialmedia-logo">
				<ul class="contact-footer">
					<li class="footer-title"><h3>Contact Info</h3></li>
					<li><i class="fa fa-envelope"></i> &nbsp; <a href="mailto:info@inhabitent.com"> info@inhabitent.com</a></li>
					<li><i class="fa fa-phone"></i> &nbsp; <a href="tel:+778-456-7891"> 778-456-7891</a></li>
					<li>
						<a href="#"><i class="fab fa-facebook-f"></i></a>
						<a href="#"><i class="fab fa-twitter"></i></a>
						<a href="#"><i class="fab fa-google-plus"></i></a>
					</li>
				</ul>
				
				<!-- business hours -->
				<ul class="business-hours">
					<li class="footer-title"><h3>Business Hours</h3></li>
					<li>Monday-Friday: 9am to 5pm</li>
					<li>Saturday: 10am to 2pm</li>
					<li>Sunday: Closed</li>
				</ul>	
				
				<div class="footer-logo-container">
					<div class="footer-logo">
						<a href="<?php echo home_url(); ?>"><img class="footer-logo-img" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logos/inhabitent-logo-text.svg" />
					</div>	
				</div>
			
			</div>
			

			<div class="copyright-info">
				<?php printf( esc_html('Copyright © 2019 Inhabitent')); ?></a>
			</div>
			
		</footer><!-- #colophon -->
	
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
