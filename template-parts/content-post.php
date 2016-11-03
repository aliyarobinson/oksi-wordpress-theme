<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Oksana_T.
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="grid-item small">
	      <img src="<?php the_post_thumbnail_url(); ?>" alt="">
	      <div class="hover-content">
	        <h2 class="title"><?php the_title(); ?></h2>
	        <p class="desc">Oil, Canvas, Acrylic. 2016</p>
	        <a href="<?php the_permalink(); ?>" class="view fa fa-search icon"></a>
	        <div class="share-mod">
	          <ul class="social-icons">
	            <li class="social-item">
	              <a href="#">
	                <span aria-hidden="true" class="icon fa-facebook"></span>
	                <span class="hide-copy" aria-label="Share on Facebook">  
	                  Facebook
	                </span>
	              </a>
	            </li>
	            <li class="social-item">
	              <a href="#">
	                <span aria-hidden="true" class="icon fa-twitter"></span>
	                <span class="hide-copy" aria-label="Tweet">  
	                  Twitter
	                </span>
	              </a>
	            </li>
	            <li class="social-item">
	              <a href="#"> 
	                <span aria-hidden="true" class="icon fa-pinterest-p"></span>
	                <span class="hide-copy" aria-label="Pin It">  
	                  Pinterest
	                </span>
	              </a>
	            </li>
	          </ul>
	        </div>
	      </div>
	</div>
</article><!-- #post-## -->
