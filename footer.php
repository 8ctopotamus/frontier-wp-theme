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

	<footer id="colophon" class="site-footer">
		<div class="container">
			<div class="row">
			<a href="<?php echo site_url(); ?>">
						<img class="footer-logo" src="<?php echo get_template_directory_uri() . '/images/frontier-logo-vertical.svg'; ?>" alt="Frontier Title LLC - Logo" />
					</a>
				<?php if ( is_active_sidebar( 'footer-1' ) ) { ?>
					<aside id="secondary" class="widget-area col-md-4">
						<?php dynamic_sidebar( 'footer-1' ); ?>
					</aside><!-- #secondary -->
				<?php } ?>
				<?php if ( is_active_sidebar( 'footer-2' ) ) { ?>
					<aside id="secondary" class="widget-area col-md-4">
						<?php dynamic_sidebar( 'footer-2' ); ?>
					</aside><!-- #secondary -->
				<?php } ?>
				<?php if ( is_active_sidebar( 'footer-3' ) ) { ?>
					<aside id="secondary" class="widget-area col-md-4">
						<?php dynamic_sidebar( 'footer-3' ); ?>
					</aside><!-- #secondary -->
				<?php } ?>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="site-info text-center">
						<?php
							/* translators: 1: Theme name, 2: Theme author. */
							printf( esc_html__( 'Theme: %1$s by %2$s.', 'frontiertitle' ), 'frontiertitle', '<a href="https://icshelpsyou.com" target="_blank" rel="noopener noreferrer">ICS, LLC.</a>' );
						?>
					</div><!-- .site-info -->
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
