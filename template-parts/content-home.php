<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Oksana_T.
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="hero content-wrapper wrapper">
	  <div id="gallery" class="cycle-slideshow" 
	      data-delay="1000"
	      data-speed="2000"
	      data-timeout="1500"
	      data-cycle-fx="fadeout"
	      data-cycle-pause-on-hover=true
	      data-cycle-swipe=true
	      data-cycle-slides="> a"
	      data-cycle-swipe-fx=scrollHorz
	      data-cycle-overlay-template="<div class='slide-title'>{{title}}</div>"
	      >
	      <!-- <a class="cycle-slide" style="background-image:url(<?php echo IMAGES; ?>/hero/img1-reincarnation.jpg)" href="#" data-title="Reincarnations"></a>
	      <a class="cycle-slide" style="background-image:url(<?php echo IMAGES; ?>/hero/img2-code-u.jpg)" href="#" data-title='Code "U"'></a>
	      <a class="cycle-slide" style="background-image:url(<?php echo IMAGES; ?>/hero/img3-couture-art-2.jpg)" href="#" data-title="Couture Art"></a>
	      <a class="cycle-slide" style="background-image:url(<?php echo IMAGES; ?>/hero/img4-dollar-art-15-16.jpg)" href="#" data-title="Dollar Art 15/16" data-cycle-desc="Dollar Art 15/16"></a> -->

		<?php

		// check if the repeater field has rows of data
		if( have_rows('slide') ):

		 	// loop through the rows of data
		    while ( have_rows('slide') ) : the_row();

		        // display a sub field value
		        // the_sub_field('sub_field_name');
		        ?>

		        <a class="cycle-slide" style="background-image:url(<?php the_sub_field('image'); ?>" href="<?php the_sub_field('page'); ?>" data-title="<?php the_sub_field('title'); ?>" data-cycle-desc="<?php the_sub_field('title'); ?>"></a>

		        <?php

		    endwhile;

		else :

		    // no rows found

		endif;

		?>


	      <div class="cycle-overlay custom"></div>
	      <div class="progress-module">
	        <div id="progress-back"></div>
	        <div id="progress"></div>
	      </div>
	  </div>
	</div>
</article><!-- #post-## -->
