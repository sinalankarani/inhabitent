<?php
/**
 * The template for displaying archive pages.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

<br>

	<div class='product-header'>

		<h1 class="page-title">Shop Stuff</h1>
		
		<?php
               $terms = get_terms( array(
                   'taxonomy' => 'product_type',
                   'hide_empty' => 0,
               ) );
               if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) :
            ?>
               <div class="product-type-blocks">
                  <?php foreach ( $terms as $term ) : ?>
                     <div class="product-type-block-wrapper">

                        <p><a href="<?php echo get_term_link( $term ); ?>" class="btn"><?php echo $term->name; ?></a></p>
					 
					</div>
                  <?php endforeach; ?>
               </div>
            <?php endif; ?>

	</div>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		
		
		<div class='product-grid'>

			<?php 
				$args = array(
					'order' => 'ASC',
					'posts_per_page' => 16,
					'post_type' => 'product' 
				);
				?>
			<?php $product_items = new WP_Query( $args ); ?>

				<?php if ( $product_items->have_posts() ) : ?>
				<?php while ( $product_items->have_posts() ) : $product_items->the_post(); ?>
					<div class='product-items'>
						<div class='product-image'><a href="<?php the_permalink()?>"><?php the_post_thumbnail(); ?></a></div>
						<div class='product-description'><div class="product-title"><?php the_title();  ?></div>&nbsp; <div class="product-price">$<?php the_field('price'); ?>.00</div></div>
					</div>

				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
				<?php else : ?>
					<h2>Nothing found!</h2>
				<?php endif; ?>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
