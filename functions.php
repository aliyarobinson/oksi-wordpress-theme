<?php
/**
 * Oksana T. functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Oksana_T.
 */

if ( ! function_exists( 'oksanat_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function oksanat_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Oksana T., use a find and replace
	 * to change 'oksanat' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'oksanat', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'oksanat' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'oksanat_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'oksanat_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function oksanat_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'oksanat_content_width', 640 );
}
add_action( 'after_setup_theme', 'oksanat_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function oksanat_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'oksanat' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'oksanat' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'oksanat_widgets_init' );


/**
 * ----------------------------------------------------------------------------------------
 * Define Site Variables
 * ----------------------------------------------------------------------------------------
 */

define( 'THEMEROOT', get_stylesheet_directory_uri());
define( 'IMAGES', THEMEROOT. '/img' );
define( 'FONTS', THEMEROOT. '/fonts' );
define( 'SCRIPTS', THEMEROOT. '/js' );
define( 'STYLES', THEMEROOT. '/css' );
//define( 'SITEROOT', home_url());
//define( 'UPLOADS', SITEROOT.'/wp-content/uploads/2014/04');


/**
 * ----------------------------------------------------------------------------------------
 * Include the generated CSS in the page header.
 * ----------------------------------------------------------------------------------------
 */
if ( ! function_exists( 'load_css_head' ) ) {
	function load_css_head() {
		$header_bkgd = IMAGES . '/header-bkgd.jpg';
		$signature_bkgd = IMAGES . '/oksana-signature-light.png';
		?>
		
		<!-- CSS Background Images -->
		<style type="text/css">

			.category .grid-header cite {
				background-image: url(<?php echo $signature_bkgd; ?>);
			}
			
			@font-face {
		    	font-family: 'bodoni';
			    src: url('<?php echo FONTS; ?>/bodoni-mt/BOD_MT.woff') format('woff'), 
				    url('<?php echo FONTS; ?>/bodoni-mt/BOD_MT.woff2') format('woff2'), 
				    url('<?php echo FONTS; ?>/bodoni-mt/BOD_MT.ttf') format('truetype'); 
			    font-weight: 100;
			    font-style: normal;
			}

			@font-face {
		    	font-family: 'bodoni';
			    src: url('<?php echo FONTS; ?>/bodoni-mt/BOD_R.woff') format('woff'), 
				    url('<?php echo FONTS; ?>/bodoni-mt/BOD_R.woff2') format('woff2'), 
				    url('<?php echo FONTS; ?>/bodoni-mt/BOD_R.ttf') format('truetype'); 
			    font-weight: 400;
			    font-style: normal;
			}

			@font-face {
		    	font-family: 'bodoni';
			    src: url('<?php echo FONTS; ?>/bodoni-mt/BOD_I.woff') format('woff'), 
				    url('<?php echo FONTS; ?>/bodoni-mt/BOD_I.woff2') format('woff2'), 
				    url('<?php echo FONTS; ?>/bodoni-mt/BOD_I.ttf') format('truetype'); 
			    font-weight: 400;
			    font-style: italic;
			}

			@font-face {
		    	font-family: 'bodoni';
			    src: url('<?php echo FONTS; ?>/bodoni-mt/BOD_B.woff') format('woff'), 
				    url('<?php echo FONTS; ?>/bodoni-mt/BOD_B.woff2') format('woff2'), 
				    url('<?php echo FONTS; ?>/bodoni-mt/BOD_B.ttf') format('truetype'); 
			    font-weight: 600;
			    font-style: normal;
			}

			@font-face {
		    	font-family: 'bodoni';
			    src: url('<?php echo FONTS; ?>/bodoni-mt/BOD_BI.woff') format('woff'), 
				    url('<?php echo FONTS; ?>/bodoni-mt/BOD_BI.woff2') format('woff2'), 
				    url('<?php echo FONTS; ?>/bodoni-mt/BOD_BI.ttf') format('truetype'); 
			    font-weight: 600;
			    font-style: italic;
			}

			@font-face {
		    	font-family: 'khula';
			    src: url('<?php echo FONTS; ?>/khula/khula-light-webfont.woff') format('woff'), 
				    url('<?php echo FONTS; ?>/khula/khula-light-webfont.woff2') format('woff2'), 
				    url('<?php echo FONTS; ?>/khula/khula-light-webfont.ttf') format('truetype'); 
			    font-weight: 100;
			    font-style: normal;
			}

			@font-face {
		    	font-family: 'khula';
			    src: url('<?php echo FONTS; ?>/khula/khula-regular-webfont.woff') format('woff'), 
				    url('<?php echo FONTS; ?>/khula/khula-regular-webfont.woff2') format('woff2'), 
				    url('<?php echo FONTS; ?>/khula/khula-regular-webfont.ttf') format('truetype'); 
			    font-weight: 400;
			    font-style: normal;
			}

			@font-face {
		    	font-family: 'khula';
			    src: url('<?php echo FONTS; ?>/khula/khula-bold-webfont.woff') format('woff'), 
				    url('<?php echo FONTS; ?>/khula/khula-bold-webfont.woff2') format('woff2'), 
				    url('<?php echo FONTS; ?>/khula/khula-bold-webfont.ttf') format('truetype'); 
			    font-weight: 600;
			    font-style: normal;
			}

			@font-face {
		    	font-family: 'khula';
			    src: url('<?php echo FONTS; ?>/khula/khula-semibold-webfont.woff') format('woff'), 
				    url('<?php echo FONTS; ?>/khula/khula-semibold-webfont.woff2') format('woff2'), 
				    url('<?php echo FONTS; ?>/khula/khula-semibold-webfont.ttf') format('truetype'); 
			    font-weight: 800;
			    font-style: normal;
			}

			@font-face {
		    	font-family: 'khula';
			    src: url('<?php echo FONTS; ?>/khula/khula-extrabold-webfont.woff') format('woff'), 
				    url('<?php echo FONTS; ?>/khula/khula-extrabold-webfont.woff2') format('woff2'), 
				    url('<?php echo FONTS; ?>/khula/khula-extrabold-webfont.ttf') format('truetype'); 
			    font-weight: 900;
			    font-style: normal;
			}

			@font-face {
		    	font-family: 'fontawesome';
			    src: url('<?php echo FONTS; ?>/fontawesome/fontawesome-webfont.woff') format('woff'), 
				    url('<?php echo FONTS; ?>/fontawesome/fontawesome-webfont.woff2') format('woff2'), 
				    url('<?php echo FONTS; ?>/fontawesome/fontawesome-webfont.ttf') format('truetype'); 
			    font-weight: 100;
			    font-style: normal;
			}
		</style>

		<?php
	}

	add_action( 'wp_head', 'load_css_head' );
}


function wpb_set_post_views($postID) {
    $count_key = 'wpb_post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
//To keep the count accurate, lets get rid of prefetching
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

function wpb_get_post_views($postID){
    $count_key = 'wpb_post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 View";
    }
    return $count.' Views';
}


 
/**
 * Updated 26.05.2011!
 * In your functions.php:
 */
 
function add_excerpt_class( $excerpt )
{
    $excerpt = str_replace( "<p", "<p class=\"desc\"", $excerpt );
    return $excerpt;
}
 
add_filter( "the_excerpt", "add_excerpt_class" );
 


/**
 * Enqueue scripts and styles.
 */
function oksanat_scripts() {
	wp_enqueue_style( 'oksanat-style', get_stylesheet_uri() );

	wp_enqueue_script( 'preload', get_template_directory_uri() . '/js/preload.js', array('jquery'), '1.0', true );

	wp_enqueue_script( 'oksanat-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'oksanat-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_enqueue_script( 'custom-scrollbar', get_template_directory_uri() . '/js/custom_scrollbar.js', array('jquery'), '1.0', true );

	wp_enqueue_script( 'images-loaded', get_template_directory_uri() . '/js/imagesloaded.js', array('jquery'), '1.0', true );

	wp_enqueue_script( 'jq-cycle', get_template_directory_uri() . '/js/jquery_cycle.js', array('jquery'), '1.0', true );

	wp_enqueue_script( 'buynow-script', get_template_directory_uri() . '/js/buynow-script.js', array('jquery'), '1.0', true );

	wp_enqueue_script( 'main-script', get_template_directory_uri() . '/js/script.js', array('jquery'), '1.0', true );

	wp_enqueue_script( 'analytics', get_template_directory_uri() . '/js/analytics.js', array(), '1.0', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'oksanat_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
