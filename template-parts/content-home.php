<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Oksana_T.
 */

?>
<ul class='hero-images'>
    <li><img src="http://localhost/oksanat/wp-content/themes/oksanat/img/hero/img_1.jpg" /></li>
    <li><img src="http://localhost/oksanat/wp-content/themes/oksanat/img/hero/img_2.jpg" /></li>
    <li><img src="http://localhost/oksanat/wp-content/themes/oksanat/img/hero/img_3.jpg" /></li>
    <li><img src="http://localhost/oksanat/wp-content/themes/oksanat/img/hero/img_4.jpg" /></li>
    <li><img src="http://localhost/oksanat/wp-content/themes/oksanat/img/hero/img_5.jpg" /></li>
    <li><img src="http://localhost/oksanat/wp-content/themes/oksanat/img/hero/img_6.jpg" /></li>
</ul>
<div class="loader-wrapper">
	<img src="<?php echo IMAGES; ?>/oksana-signature-light.png" alt="logo">
	<div class="loader">
		<div class="progress-bar"></div>
	</div>
	<div class="percentage">0%</div>
</div>
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

		<?php
		if( have_rows('slide') ):
		    while ( have_rows('slide') ) : the_row();?>
		        <a class="cycle-slide" style="background-image:url(<?php the_sub_field('image'); ?>" href="<?php the_sub_field('page'); ?>" data-title="<?php the_sub_field('title'); ?>" data-cycle-desc="<?php the_sub_field('title'); ?>">
		        	<img src="<?php the_sub_field('image'); ?>" alt="<?php the_sub_field('title'); ?>">
		        </a>
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
