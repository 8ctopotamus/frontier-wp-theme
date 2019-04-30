<?php
/**
 * Template Name: Sidebar
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package frontiertitle
 */

get_header();
?>
	<div id="primary" class="content-area">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<main id="main" class="site-main">
					<?php
						while ( have_posts() ) : the_post();

							get_template_part( 'template-parts/content', 'page' );

							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;

						endwhile; // End of the loop.
					?>
					</main><!-- #main -->				
				</div>
				<div class="col-md-3">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>
	</div><!-- #primary -->

<?php
get_footer();
