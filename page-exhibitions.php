<?php /* Template Name: Exhibitions Page Template */ ?>
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
<?php
$classes = array(
    'list-page',
    'category',
    'exhibitions',
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
		if( have_rows('exhibition') ): ?>
        	<ul class="list">
			<?php
		 	// loop through the rows of data
		    while ( have_rows('exhibition') ) : the_row();

		    	$fulldate = get_sub_field('date_start');
		    	$fdArr = explode("/", $fulldate);
		    	$year = array_pop($fdArr);
		        ?>
		        <li data-year="<?php echo $year; ?>">
			        <div class="main-content">
		              <div class="meta">
		                <date class="start"><?php the_sub_field('date_start'); ?></date>
                    <?php if( get_sub_field('date_end') ) { ?>
		                  <date class="end"><?php the_sub_field('date_end'); ?></date>
                    <?php } ?>
		                <div class="location"><?php the_sub_field('location'); ?></div>
                    <?php if( get_sub_field('type') ) { ?>
		                  <div class="type"><?php the_sub_field('other'); ?></div>
                    <?php } ?>
		              </div>
		              <h2 class="title"><?php the_sub_field('title'); ?></h2>
		            </div>
		            <div class="additonal-content"><?php the_sub_field('additional_content'); ?></div>
				</li>

		        <?php

		    endwhile;

		else :

		    echo "<h3>No Exhibitions Listed</h3>"
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
          	<a href="http://twitter.com/home/?status=<?php the_title(); ?> - <?php the_permalink(); ?>" title="Tweet this!">
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

<?php
get_footer();
