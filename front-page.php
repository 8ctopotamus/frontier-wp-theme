<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package frontiertitle
 */

get_header();
?>
	<div class="jumbotron text-center">
		<h1 class="display-2">MILWAUKEE TO MADISON,<br/> FARM COUNTRY TO LAKE COUNTRY,</h1>
		<p class="lead">Frontier Title’s Team of Top Industry Pros Services a 10 County Area.</p>
		<p class="lead">
			<a class="btn btn-primary btn-lg" href="<?php echo site_url() . '/contact-us'; ?>" role="button">Learn more</a>
		</p>
	</div>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		<div class="container text-center">
			<?php
				while ( have_posts() ) : the_post();
					the_title( '<h1 class="entry-title">', '</h1>' );
					the_content();
				endwhile; // End of the loop.
			?>
		</div>
		
		</main><!-- #main -->
	</div><!-- #primary -->

	<div class="jumbotron text-center">
		<h1 class="display-4">MILWAUKEE TO MADISON,<br/> FARM COUNTRY TO LAKE COUNTRY,</h1>
		<p class="lead">Frontier Title’s Team of Top Industry Pros Services a 10 County Area.</p>
		<p class="lead">
			<a class="btn btn-primary btn-lg" href="<?php echo site_url() . '/contact-us'; ?>" role="button">Learn more</a>
		</p>
	</div>

	<div class="container-fluid text-center">
		<div class="row">
			<div class="col-md-4">
				<div class="card">
					<img src="https://placehold.it/300x200" class="card-img-top" alt="...">
					<div class="card-body">
						<h3 class="card-title display-4">Card title</h3>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						<a href="#" class="btn btn-primary">Go somewhere</a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
					<img src="https://placehold.it/300x200" class="card-img-top" alt="...">
					<div class="card-body">
						<h3 class="card-title display-4">Card title</h3>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						<a href="#" class="btn btn-primary">Go somewhere</a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
					<img src="https://placehold.it/300x200" class="card-img-top" alt="...">
					<div class="card-body">
						<h3 class="card-title display-4">Card title</h3>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						<a href="#" class="btn btn-primary">Go somewhere</a>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php
get_footer();
