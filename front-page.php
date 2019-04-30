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
	<div class="jumbotron text-center parallax">
		<div class="container">
			<h1 class="display-2">MILWAUKEE TO MADISON,<br/> FARM COUNTRY TO LAKE COUNTRY,</h1>
			<p class="lead">Frontier Title's Team of Top Industry Pros Services a 10 County Area.</p>
			<p class="lead">
				<a class="btn btn-primary btn-lg" href="<?php echo site_url() . '/contact-us'; ?>" role="button">LEARN MORE</a>
			</p>
		</div>
	</div>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		<div class="container text-center">
			<?php
				while ( have_posts() ) : the_post();
					the_title( '<h1 class="entry-title display-4">', '</h1>' );
					the_content();
				endwhile; // End of the loop.
			?>
		</div>
		
		</main><!-- #main -->
	</div><!-- #primary -->

	<div class="jumbotron text-center parallax" style="background-image: url(https://startupnation.com/wp-content/uploads/2005/09/Screen-Shot-2017-01-18-at-11.11.00-AM.png);">
		<div class="container">
			<h2 class="display-2 text-body">WHO WE ARE</h2>
			<p class="lead text-body">Frontier Title &amp; Closing Services is staffed with seasoned professionals,<br/> the majority with 10+ years of experience.</p>
			<p class="lead">
				<a class="btn btn-primary btn-lg" href="<?php echo site_url() . '/contact-us'; ?>" role="button">LEARN MORE</a>
			</p>
		</div>
	</div>

	<div class="container-fluid text-center">
		<div class="row">
			<div class="col-md-4">
				<div class="card">
					<img src="https://placehold.it/300x180" class="card-img-top" alt="...">
					<div class="card-body">
						<h3 class="card-title display-4">PURCHASE</h3>
						<p class="card-text">We’ve built our reputation and business through excellent customer service.</p>
						<a href="#" class="btn btn-secondary">Go somewhere</a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
					<img src="https://placehold.it/300x180" class="card-img-top" alt="...">
					<div class="card-body">
						<h3 class="card-title display-4">REFINANCE</h3>
						<p class="card-text">We can help you complete the refinance of your property.</p>
						<a href="#" class="btn btn-secondary">Go somewhere</a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
					<img src="https://placehold.it/300x180" class="card-img-top" alt="...">
					<div class="card-body">
						<h3 class="card-title display-4">CONSTRUCTION</h3>
						<p class="card-text">The most respected and experienced Construction Escrow Managers in all of Southeastern Wisconsin.</p>
						<a href="#" class="btn btn-secondary">Go somewhere</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid text-center">
		<div class="row">
			<div class="col-md-4">
				<div class="card">
					<img src="https://placehold.it/300x180" class="card-img-top" alt="...">
					<div class="card-body">
						<h3 class="card-title display-4">REPORT</h3>
						<p class="card-text">An explanation of what we find in doing a search of the public records.</p>
						<a href="#" class="btn btn-secondary">Go somewhere</a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
					<img src="https://placehold.it/300x180" class="card-img-top" alt="...">
					<div class="card-body">
						<h3 class="card-title display-4">F.S.B.O.</h3>
						<p class="card-text">More and more people like you are successfully marketing and selling properties by yourselves.</p>
						<a href="#" class="btn btn-secondary">Go somewhere</a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
					<img src="https://placehold.it/300x180" class="card-img-top" alt="...">
					<div class="card-body">
						<h3 class="card-title display-4">CLOSING</h3>
						<p class="card-text">Closing is the culmination of all the hard work put in by the lender, real estate agent, attorney and customer.</p>
						<a href="#" class="btn btn-secondary">Go somewhere</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="jumbotron text-center parallax" style="background-image: url(https://www.incimages.com/uploaded_files/image/970x450/handshake-pano_19966.jpg); margin-bottom: 0;">
		<div class="container">
			<h1 class="display-2">MILWAUKEE TO MADISON,<br/> FARM COUNTRY TO LAKE COUNTRY,</h1>
			<p class="lead">Frontier Title’s Team of Top Industry Pros Services a 10 County Area.</p>
			<p class="lead">
				<a class="btn btn-primary btn-lg" href="<?php echo site_url() . '/contact-us'; ?>" role="button">LEARN MORE</a>
			</p>
		</div>
	</div>

<?php
get_footer();
