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

         <header class="fp-banner" style="background: linear-gradient(180deg,rgba(0,0,0,.4),rgba(0,0,0,.4)), url(<?php echo get_the_post_thumbnail_url(); ?>); background-size: cover;" >
         
         <img class="full-logo" src="<?= get_stylesheet_directory_uri(); ?>/images/logos/inhabitent-logo-full.svg"/>
         
         </header>

      <?php } ?>
				
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>


         <?php endwhile; // End of the loop. ?>
         


         <!-- Front Page Shop Links  -->

         <h2>Shop Stuff</h2>

         <div class='shop-stuff-container'>
         <?php 
               $args = array(
                  'order' => 'DESC',
                  'posts_per_page' => 4,
                  'post_type' => 'product' 
               );
               ?>
            <?php $journal_posts = new WP_Query( $args ); ?>

               <?php if ( $journal_posts->have_posts() ) : ?>
               <?php while ( $journal_posts->have_posts() ) : $journal_posts->the_post(); ?>
                  <article class='front-page-journal-post'>
                     <div><?php the_post_thumbnail([360, 240]); ?></div>
                     <div class='journal-info-wrapper'>
                        <div class='front-page-journal-info'><a href="<?php the_permalink()?>"><h3 class="journal-title"><?php the_title(); ?></h3></a></div>
                        <div class='journal-button-box'><a href="<?php the_permalink()?>"><h3 class="journal-button">Read Entry</h3></a></div>
                     </div>
                  </article>

               <?php endwhile; ?>
               <?php the_posts_navigation(); ?>
               <?php wp_reset_postdata(); ?>
               <?php else : ?>
                  <h2>Nothing found!</h2>
               <?php endif; ?>
         </div>


         <!-- Front Page Journal Entries  -->

         <h2>Inhabitent Journal</h2>

         <div class='front-page-journal-container'>
         <?php 
               $args = array(
                  'order' => 'DESC',
                  'posts_per_page' => 3,
                  'post_type' => 'post' 
               );
               ?>
            <?php $journal_posts = new WP_Query( $args ); ?>
      
               <?php if ( $journal_posts->have_posts() ) : ?>
               <?php while ( $journal_posts->have_posts() ) : $journal_posts->the_post(); ?>
                  <article class='front-page-journal-post'>
                     <div><?php the_post_thumbnail([360, 240]); ?></div>
                     <div class='journal-info-wrapper'>
                        <div class='front-page-journal-info'><p><?= get_the_date(); ?> / <?php comments_number(); ?></p></div>
                        <div class='front-page-journal-info'><a href="<?php the_permalink()?>"><h3 class="journal-title"><?php the_title(); ?></h3></a></div>
                        <div class='journal-button-box'><a href="<?php the_permalink()?>"><h3 class="journal-button">Read Entry</h3></a></div>
                     </div>
                  </article>

               <?php endwhile; ?>
               <?php the_posts_navigation(); ?>
               <?php wp_reset_postdata(); ?>
               <?php else : ?>
                  <h2>Nothing found!</h2>
               <?php endif; ?>
         </div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>