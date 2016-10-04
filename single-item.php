<?php /* WP Post Template: Collection Item Template */ ?>

<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Oksana_T.
 */

get_header(); ?>
	<div class="overlay">
	  <div class="img-wrapper">
	    
	  </div>
	  <button class="close icon fa-compress"></button>
	</div>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', 'item' );

			// the_post_navigation();

			
		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
