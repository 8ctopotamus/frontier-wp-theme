<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package frontiertitle
 */

?>

	</div><!-- #content -->

	<div class="partner-logos-container">
		<div class="container text-center">
			<div class="partner-logos">
				<img src="<?php echo get_stylesheet_directory_uri() . '/images/partner-logos/cawr.jpg'; ?>" alt="CAWR logo" />
				<img src="<?php echo get_stylesheet_directory_uri() . '/images/partner-logos/fatic.jpg'; ?>" alt="Fatic logo" />
				<img src="<?php echo get_stylesheet_directory_uri() . '/images/partner-logos/fidelity.png'; ?>" alt="Fidelity logo" />
				<img src="<?php echo get_stylesheet_directory_uri() . '/images/partner-logos/metropolitan-builders-association.png'; ?>" alt="MBA logo" />
				<img src="<?php echo get_stylesheet_directory_uri() . '/images/partner-logos/wltalogo.png'; ?>" alt="WLTA logo" />
			</div>
		</div>
	</div>

	<footer id="colophon" class="site-footer">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<a href="<?php echo site_url(); ?>">
						<img class="footer-logo" src="<?php echo get_template_directory_uri() . '/images/frontier-logo-vertical.svg'; ?>" alt="Frontier Title LLC - Logo" />
					</a>
				</div>
				<?php if ( is_active_sidebar( 'footer-1' ) ) { ?>
					<aside id="secondary" class="widget-area col-md-3">
						<?php dynamic_sidebar( 'footer-1' ); ?>
					</aside><!-- #secondary -->
				<?php } ?>
				<?php if ( is_active_sidebar( 'footer-2' ) ) { ?>
					<aside id="secondary" class="widget-area col-md-3">
						<?php dynamic_sidebar( 'footer-2' ); ?>
					</aside><!-- #secondary -->
				<?php } ?>
				<?php if ( is_active_sidebar( 'footer-3' ) ) { ?>
					<aside id="secondary" class="widget-area col-md-3">
						<?php dynamic_sidebar( 'footer-3' ); ?>
					</aside><!-- #secondary -->
				<?php } ?>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
