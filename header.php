<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package frontiertitle
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link sr-only sr-only" href="#content"><?php esc_html_e( 'Skip to content', 'frontiertitle' ); ?></a>

	<header id="masthead" class="site-header">
		<!-- <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
			<div class="site-branding">	
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="navbar-brand">
					<img src="<?php echo get_template_directory_uri() . '/images/frontier-logo-horizontal.svg'?>" alt="Frontier Title LLC - logo">
					<span class="sr-only"><?php bloginfo( 'name' ); ?></span>
				</a>
			</div>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs4navbar" aria-controls="bs4navbar" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<?php
				wp_nav_menu([
					'menu'            => 'menu-1',
					'theme_location'  => 'primary',
					'container'       => 'div',
					'container_id'    => 'bs4navbar',
					'container_class' => 'collapse navbar-collapse',
					'menu_id'         => false,
					'menu_class'      => 'navbar-nav ml-auto',
					'depth'           => 2,
					'fallback_cb'     => 'bs4navwalker::fallback',
					'walker'          => new bs4navwalker()
				]);
		  ?>
		</nav> -->
		<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary">
			<div class="site-branding">	
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="navbar-brand">
					<img src="<?php echo get_template_directory_uri() . '/images/frontier-logo-horizontal.svg'?>" alt="Frontier Title LLC - logo">
					<span class="sr-only"><?php bloginfo( 'name' ); ?></span>
				</a>
			</div>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs4navbar" aria-controls="bs4navbar" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<?php
				wp_nav_menu([
					'menu'            => 'menu-1',
					'theme_location'  => 'primary',
					'container'       => 'div',
					'container_id'    => 'bs4navbar',
					'container_class' => 'collapse navbar-collapse',
					'menu_id'         => false,
					'menu_class'      => 'navbar-nav ml-auto',
					'depth'           => 2,
					'fallback_cb'     => 'bs4navwalker::fallback',
					'walker'          => new bs4navwalker()
				]);
		  ?>
		</nav>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
