<?php
/**
 * The header for our theme.
 *
 * @package Inhabitent_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
 
	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php echo esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">

			<div class="main-logo">
				<a href="<?php echo home_url(); ?>">
				<h1 class="header-logo">Inhabitent</h1></a>
			</div>
						<!-- src="<?php echo get_stylesheet_directory_uri(); ?>" -->
			
			<nav id="site-navigation" class="main-navigation" role="navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php echo esc_html( 'Primary Menu' ); ?></button>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
			</nav><!-- #site-navigation -->

			<div class="search-form-container"><?php get_search_form(); ?></div>
			
		</header><!-- #masthead -->

			<div id="content" class="site-content">
