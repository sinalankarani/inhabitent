<?php
/**
 * The template for displaying all product posts.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		
		<?php while ( have_posts() ) : the_post(); ?>
		
		<div class="product-items">

		<div class='product-image'><a href="<?php the_permalink()?>"><?php the_post_thumbnail([500]); ?></a></div>
		<ul class='product-description'>
			<li class="product-title"><?php the_title(); ?></li>
			<li class="product-price">$<?php the_field('price'); ?>.00</li>
			<li class='product-info'><?php the_content(); ?></li>
		</ul>
		

		</div>
	
			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>
			

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
