<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Oksana_T.
 */

?>
<?php
$classes = array(
    'list-page',
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
      <section class="content-mod">
        <aside>
          <nav class="time-nav">
            <ul>              
              <li><button class="all">All</button></li>
            </ul>
          </nav>
        </aside>

		<?php

		// check if the repeater field has rows of data
		if( have_rows('interview') ): ?>
        	<ul class="list media">
			<?php
		 	// loop through the rows of data
		    while ( have_rows('interview') ) : the_row();

		    	$fulldate = get_sub_field('date');
		    	$fdArr = explode("/", $fulldate);
		    	$year = array_pop($fdArr);
		      ?>

		        <li data-year="<?php echo $year; ?>">
              <div class="main-content">
                <div class="meta">
                  <date><?php the_sub_field('date'); ?></date>
                  <div class="location"><?php the_sub_field('location'); ?></div>
                </div>
                <h2 class="title"><a href="https://youtu.be/<?php the_sub_field('video_id'); ?>" target="_blank"><?php the_sub_field('title'); ?></a></h2>
              </div>
              <div class="media video-wrapper responsive-embed">
                <div class="video responsive-embed" 
                   id="<?php the_sub_field('video_id'); ?>" 
                   data-params="rel=0&modestbranding=1&showinfo=0&controls=0&vq=hd720">
                   <img src="http://img.youtube.com/vi/<?php the_sub_field('video_id'); ?>/0.jpg">
                 <a href="https://youtu.be/<?php the_sub_field('video_id'); ?>" itemprop="trailer" class="play-vid"><span class="icon st-icon-triangle-down st-shape-icon"></span></a>
                </div>
              </div>
		        </li>

		        <?php

		    endwhile;

		else :

		    echo "<h3>No Inteviews Listed</h3>"
		?>

		</ul>

		<?php

		endif;

		?>

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
          	<a href="http://twitter.com/home/?status=<?php the_title(); ?> - <?php the_permalink(); ?>" title="Tweet this!"></a>
              <span aria-hidden="true" class="icon fa-twitter"></span>
              <span class="hide-copy" aria-label="Tweet">  
                Twitter
              </span>
            </a>
          </li>
          <li class="social-item">
            <a href="https://plus.google.com/share?url=<?php the_permalink(); ?>"> 
              <span aria-hidden="true" class="icon fa-google-plus"></span>
              <span class="hide-copy" aria-label="Share on Google Plus">  
               Google Plus</span>
            </a>
          </li>
        </ul>
      </div>
</article><!-- #post-## -->
