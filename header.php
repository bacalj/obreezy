<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package obreezy
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href='https://fonts.googleapis.com/css?family=Lora:400,400italic,700' rel='stylesheet' type='text/css'>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'obreezy' ); ?></a>

	<header id="masthead" class="site-header" role="banner">

		<?php if ( is_active_sidebar( 'sidebar-1' ) || has_nav_menu( 'top-menu' ) || has_nav_menu ( 'social' ) ) : ?>
			<button class="menu-toggle animated" aria-expanded="false" ><span class="screen-reader-text"><?php _e( 'Menu', 'obreezy' ); ?></span><span class="action-text"><?php _e( 'Menu', 'obreezy' ); ?></span></button>
			<div class="slide-panel animated closed">
				<?php obreezy_social_menu(); ?>

				<?php if ( has_nav_menu( 'top-menu' ) ) : ?>
					<nav id="site-navigation" class="main-navigation" role="navigation">
						<?php wp_nav_menu( array( 'theme_location' => 'top-menu' ) ); ?>
					</nav><!-- #site-navigation -->
				<?php endif; ?>


				<?php if ( is_active_sidebar( 'sidebar-1' ) ) {
					get_sidebar();
				} ?>
			</div>
		<?php endif; ?>
		<?php if ( get_header_image() ) : ?>
			<div class="feature-header" style="background-image: url(<?php header_image(); ?>);">
				<div class="site-branding header-wrapper">
					<div class="header-inner">
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<!-- <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2> -->
					</div>
				</div><!-- .site-branding -->
			</div>
		<?php else : ?>
			<div class="site-branding">
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<!-- <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2> -->
			</div><!-- .site-branding -->
		<?php endif; ?>

	</header><!-- #masthead -->

	<div id="content" class="site-content">
