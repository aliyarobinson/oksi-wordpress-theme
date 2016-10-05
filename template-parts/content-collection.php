<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Oksana_T.
 */

?>
<?php $i = 0; ?>
<?php //$i = 2; ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(['category','non-homepage']); ?>>
  <div class="wrapper">
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
                            <?php //echo "i: ". $i ?>
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
                        <?php } ?>
                      
                  <?php endforeach; ?>
                  </ul>
                  <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
            <?php endif; ?>
          </div>
        </header>
        <div class="grid">

        <?php if(get_field('items')): $i = 0; while(has_sub_field('items')): $i++; if ($i != 1): ?>
          Blah Blah Blah
        <?php endif; endwhile; endif; ?>



        <?php 
          $posts = get_field('items');

          if( $posts ): ?>
              <ul>
              <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
                  <?php setup_postdata($post); ?>
                    <div class="grid-item small">
                          <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                          <div class="hover-content">
                            <h2 class="title"><?php the_title(); ?></h2>
                            <p class="desc"><?php the_excerpt(); ?></p>
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
              <?php endforeach; ?>
              </ul>
              <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
        <?php endif; ?>
        </div>
      </div>
      <aside class="sidebar">
        <div class="sidebar-module subscribe">
          <h2>Subscribe</h2>
          <div class="content">
            <input type="text" placeholder="Email Address">
          </div>
        </div>
        <div class="sidebar-module popular">
          <h2>Popular</h2>
          <div class="content">
            <ul>
              <li class="popular-item">
                <a href="#">
                  <img src="img/category/dollar-art/whist.jpg" alt="">
                  <span class="item-info">
                    <span class="title">Whist</span>
                    <span class="desc">Oil, Acrylic on Canvas</span>
                  </span>
                </a>
              </li>
              <li class="popular-item">
                <a href="#">
                  <img src="img/category/dollar-art/cube.jpg" alt="">
                  <div class="item-info">
                    <h3 class="title">Cube</h3>
                    <div class="desc">Oil, Acrylic on Canvas</div>
                  </div>
                </a>
              </li>
              <li class="popular-item">
                <a href="#">
                  <img src="img/category/dollar-art/mask.jpg" alt="">
                  <div class="item-info">
                    <h3 class="title">Mask</h3>
                    <div class="desc">Oil, Acrylic on Canvas</div>
                  </div>
                </a>
              </li>
              <li class="popular-item">
                <a href="#">
                  <img src="img/category/dollar-art/sighted.jpg" alt="">
                  <div class="item-info">
                    <h3 class="title">Sighted</h3>
                    <div class="desc">Oil, Acrylic on Canvas</div>
                  </div>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </aside>
    </div>
</article><!-- #post-## -->
