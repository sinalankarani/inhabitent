<?php
/**
 * The template for displaying all pages.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
				if ( has_post_thumbnail() ) { ?>

			<header class="about-banner" style="background: linear-gradient(180deg,rgba(0,0,0,.4),rgba(0,0,0,.4)), url(<?php echo get_the_post_thumbnail_url(); ?>);  background-size: cover;">

			<h1><?php the_title() ?></h1>
		
			</header>
			<?php } ?>
			
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>


			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
