<!-- Journal -->

<?php
/**
 * The main template file.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<?php 
			$args = array(
				'order' => 'DESC',
				'posts_per_page' => 10,
				'post_type' => 'post' 
			);
		?>
		<?php $journal_posts = new WP_Query( $args ); ?>
	
			<?php if ( $journal_posts->have_posts() ) : ?>
			<?php while ( $journal_posts->have_posts() ) : $journal_posts->the_post(); ?>
				
				<article >
					<div class='journal-post'><?php the_post_thumbnail(); ?>
					
					<div  class='journal-title-box'><a href="<?php the_permalink()?>">
					<h1 class='journal-title-text'><?php the_title(); ?></h1></a></div>

					<div class='journal-info'><p><?= get_the_date(); ?> / <?php comments_number();  ?> / By: <?php the_author(); ?></div</p>

					</div>

				</article>

					<div class='journal-text'><p><?= wp_trim_words (get_the_content(), 50, ' [...]' )?> </p></div>

					<p class="read-more-text"><a href="<?php the_permalink()?>" class="read-more-btn">Read more →</a></p>

			<?php endwhile; ?>
			<?php the_posts_navigation(); ?>
			<?php wp_reset_postdata(); ?>
			<?php else : ?>
				<h2>Nothing found!</h2>
			<?php endif; ?>
		</div>

		<?php get_sidebar(); ?>
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
