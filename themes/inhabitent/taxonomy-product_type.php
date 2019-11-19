<?php
/**
 * The template for displaying archive pages.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

<br>

<header class="product-type-header">
   <p class="page-title"><?php single_term_title(); ?></p>
   <p class="product-type-description"><?php the_archive_description(); ?></p>
</header>

<section class="product-grid">

         <?php
            $terms = get_terms( array(
                  'taxonomy' => 'product_type',
                  'hide_empty' => 0,
            ) );
         ?>

               <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
                  <div class="product-items">

                  <div class='product-image'><a href="<?php the_permalink()?>"><?php the_post_thumbnail(); ?></a></div>
                  <div class='product-description'><div class="product-title"><?php the_title();  ?></div>&nbsp; <div class="product-price">$<?php the_field('price'); ?>.00</div></div>

                  
                  </div>
               <?php endwhile; ?>
         <?php endif; ?>
      </section>

<?php get_footer(); ?>