<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Oksana_T.
 */
wpb_set_post_views(get_the_ID());
?>
<?php
$classes = array(
    'item-page',
    'category',
    'non-homepage'
);

$title = get_the_title();
?>
<article id="post-<?php the_ID(); ?>" <?php post_class($classes); ?>>

	<div class="wrapper">
      <header>
      	<?php
          if ( function_exists('yoast_breadcrumb') ) {
          yoast_breadcrumb('
          <p id="breadcrumbs">','</p>
          ');
          }
        ?>
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

          <?php if( get_field('purchase_status') == 'forSale' ): ?>
            <div class="price">$<?php the_field('price'); ?></div>
            <?php echo do_shortcode('[wpecpp name="'.$title.'" price="'.get_field("price").'"]'); ?>
          <?php endif; ?>

          <?php if( get_field('purchase_status') == 'available' ): ?>
            <div class="price small">Available for purchase</div>
          <?php endif; ?>
          <?php if( get_field('purchase_status') == 'sold' ): ?>
            <div class="price small">Sold</div>
          <?php endif; ?>
        </div>
      </section>
      <div class="share-mod vertical">
        <ul class="social-icons">
          <li class="social-item">
            <a href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>" title="Share on Facebook.">
              <span aria-hidden="true" class="icon fa-facebook"></span>
              <span class="hide-copy" aria-label="Share on Facebook">  
                Facebook
              </span>
            </a>
          </li>
          <li class="social-item">
            <a href="http://twitter.com/home/?status=<?php the_title(); ?> - <?php the_permalink(); ?>" title="Tweet this!">
              <span aria-hidden="true" class="icon fa-twitter"></span>
              <span class="hide-copy" aria-label="Tweet">  
                Twitter
              </span>
            </a>
          </li>
          <li class="social-item">
            <a href="http://pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>&media=<?php the_post_thumbnail_url(); ?>&description=Oksana T. | <?php the_title(); ?>"> 
              <span aria-hidden="true" class="icon fa-pinterest-p"></span>
              <span class="hide-copy" aria-label="Pin It">  
                Pinterest
              </span>
            </a>
          </li>
        </ul>
      </div>
    </div>
</article><!-- #post-## -->
