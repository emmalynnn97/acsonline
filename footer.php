<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
			<footer id="site-footer" role="contentinfo" class="header-footer-group">
				<a style="display:flex;justify-content:center;align-items:center;font-weight:700;" href="mailto:webmaster@example.com">Contact | Registrar Kathy Munoz</a>
<div class="campus-links">	
	
					<div class="campus-link">
						<a href="https://ltsarizona.org/" target="_blank">
							<img src="https://arizonaonlinecharterschool.org/wp-content/uploads/2021/01/Arizona-Online-Charter-School-01.png" alt="LTS logo"/>
							<h3>LTS</h3>
						</a>
					</div>
					<div class="campus-link">
						<a href="http://lpatucson.org/" target="_blank">
							<img src="https://arizonaonlinecharterschool.org/wp-content/uploads/2021/03/logo.png" alt="LPA logo"/>
							<h3>LPA</h3>
						</a>
					</div>
					<div class="campus-link">
						<a href="https://ltsarizona.org/" target="_blank">
							<img src="https://arizonaonlinecharterschool.org/wp-content/uploads/2021/03/logo-1.png" alt="HES Logo"/>
							<h3>HES</h3>
						</a>
					</div>
				</div>
				<div class="section-inner">

					<div class="footer-credits">
	
						<p class="footer-copyright">&copy;
							<?php
							echo date_i18n(
								/* translators: Copyright date format, see https://www.php.net/manual/datetime.format.php */
								_x( 'Y', 'copyright date format', 'twentytwenty' )
							);
							?>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
						</p><!-- .footer-copyright -->

						<p class="powered-by-wordpress">
							<!--<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'twentytwenty' ) ); ?>">
								<?php _e( 'Powered by WordPress', 'twentytwenty' ); ?>
							</a>-->
							
						</p><!-- .powered-by-wordpress -->

					</div><!-- .footer-credits -->
					<a class="footer-phone" href="tel:5203055002">(520) 305-5002</a>
					<a class="to-the-top" href="#site-header">
						<span class="to-the-top-long">
							<?php
							/* translators: %s: HTML character for up arrow. */
							printf( __( 'To the top %s', 'twentytwenty' ), '<span class="arrow" aria-hidden="true">&uarr;</span>' );
							?>
						</span><!-- .to-the-top-long -->
						<span class="to-the-top-short">
							<?php
							/* translators: %s: HTML character for up arrow. */
							printf( __( 'Up %s', 'twentytwenty' ), '<span class="arrow" aria-hidden="true">&uarr;</span>' );
							?>
						</span><!-- .to-the-top-short -->
					</a><!-- .to-the-top -->
				
				</div><!-- .section-inner -->

			</footer><!-- #site-footer -->

		<?php wp_footer(); ?>

	</body>
</html>
