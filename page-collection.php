<?php /* Template Name: Collection Page Template */ ?>
<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Oksana_T.
 */

get_header(); ?>

	<div id="primary" class="content-area category category-page">
		<main id="main" class="site-main" role="main">

<?php $i = 0; ?>
<?php
$classes = array(
    'category',
    'non-homepage'
);
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
      <div class="grid-module">
        <header class="grid-header">
          <div class="grid-item large cat-hero">
            <h2><?php the_title(); ?></h2>
            <blockquote>
              <div class="content">
                <?php the_field('description'); ?>
              </div>
              <cite class="hide-copy">Oksana T.</cite>
            </blockquote>
          </div>
          <div class="side-items">

            <?php 
              $posts = get_field('items');

              if( $posts ): ?>
                  <ul>
                  <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
                      <?php $i++; ?>

                      <?php setup_postdata($post); ?>
                        <?php if($i<=2){ ?>
                        <div class="grid-item small">
                              <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="collapsed">
                              <div class='uil-reload-css' style='-webkit-transform:scale(0.6)'><div></div></div>
                              <div class="hover-content">
                                <h2 class="title">
                                  <?php the_title(); ?>
                                </h2>
                                <?php the_excerpt(); ?>
                                <a href="<?php the_permalink(); ?>" class="view fa fa-search icon"></a>
                                <div class="share-mod">
                                  <ul class="social-icons">
                                    <li class="social-item">
                                      <a href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>" title="Share on Facebook.">
                                        <span aria-hidden="true" class="icon fa-facebook"></span>
                                        <span class="hide-copy" aria-label="Share on Facebook">  Facebook
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
                        </div>
                        <?php } ?>
                      
                  <?php endforeach; ?>
                  </ul>
                  <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
              <?php endif; ?>
          </div>
        </header>
        <div class="grid">

        <?php 
		$counter = 0; 

          $posts = get_field('items');

          if( $posts ): ?>
              <ul>
              <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) 
          			$counter++; 
					?>
                  <?php if($counter>2){ 
                  	setup_postdata($post); ?>
                    <div class="grid-item small">
                      <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="collapsed">
                      <div class='uil-reload-css' style='-webkit-transform:scale(0.6)'><div></div></div>

                      <div class="hover-content">
                        <h2 class="title"><?php the_title(); ?></h2>
                        <?php the_excerpt(); ?>
                        <a href="<?php the_permalink(); ?>" class="view fa fa-search icon"></a>
                        <div class="share-mod">
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
                    </div>
                  <?php } ?> 

              <?php endforeach; ?>
              </ul>
              <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
        <?php endif; ?>



        </div>
      </div>
      <aside class="sidebar">
        <div class="sidebar-module popular">
          <h2>Popular</h2>
          <div class="content">
            <ul>
            <?php 
              $popularpost = new WP_Query( array( 'posts_per_page' => 4, 'meta_key' => 'wpb_post_views_count', 'orderby' => 'meta_value_num', 'order' => 'DESC'  ) );
              while ( $popularpost->have_posts() ) : $popularpost->the_post(); ?>
              <li class="popular-item">
                <a href="<?php the_permalink(); ?>">
                  <span class="img-wrapper">
                    <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                  </span>
                  <span class="item-info">
                    <span class="title"><span><?php the_title(); ?></span></span>
                    <span class="desc"><?php the_excerpt(); ?></span>
                  </span>
                </a>
              </li>
            <?php
              endwhile;
            ?>
            </ul>
          </div>
        </div>
      </aside>
    </div>
</article><!-- #post-## -->


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
