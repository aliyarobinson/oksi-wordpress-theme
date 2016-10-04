<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Oksana_T.
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(['item-page', 'category','non-homepage']); ?>>
	<div class="wrapper">
      <header>
      	<?php if ( function_exists('yoast_breadcrumb') ) {
			yoast_breadcrumb('<p id="breadcrumbs">','</p>');
		} ?>
        <!-- <ul class="breadcrumbs">
          <li><a href="#">home</a></li>
          <li><a href="#">collections</a></li>
          <li class="active">dollar art 15/16</li>
        </ul> -->
      </header>
      <section class="content-mod">
        <div class="overlay-bkgd"></div>
        <div class="img-wrapper">
          <img src="<?php the_field('full-image'); ?>" alt="whist">
          <button class="expand-btn btn" aria-hidden="true">
            <span class="icon fa fa-arrows-alt"></span>
          </button>
        </div>
        <div class="content">
          <h1 class="title"><?php the_title(); ?></h1>
          <div class="desc"><?php the_excerpt(); ?></div>
        </div>
      </section>
      <div class="share-mod vertical">
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
          <li class="social-item">
            <a href="#"> 
              <span aria-hidden="true" class="icon fa-instagram"></span>
              <span class="hide-copy" aria-label="Share on Instagram">  
               Instagram
              </span>
            </a>
          </li>
        </ul>
      </div>
    </div>
</article><!-- #post-## -->
