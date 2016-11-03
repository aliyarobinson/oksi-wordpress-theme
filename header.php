<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Oksana_T.
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<!--[if lte IE 9 ]>    <html dir="ltr" <?php language_attributes(); ?> class="no-js oldie"> <![endif]-->
<!--[if IE 9 ]>    <html dir="ltr" <?php language_attributes(); ?> class="no-js ie9"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]>
<!--><html dir="ltr" <?php language_attributes(); ?> class="no-js">
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<title><?php bloginfo( 'name' ); ?> | <?php bloginfo( 'description' ); ?></title>
<!-- <link rel="stylesheet" href="<?php echo STYLES; ?>/font-awesome.min.css"> -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo STYLES; ?>/jquery.mCustomScrollbar.css">
<!-- <link rel="stylesheet" href="css/style.css"> -->
<!-- <script src="js/prefixfree.min.js"></script> -->
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<![endif]-->
<link rel="icon" type="image/png" href="<?php echo IMAGES; ?>/favicon.png" />
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'oksanat' ); ?></a>

	<header class="site-header" role="banner">
	  <div class="wrapper">
	    <?php
	      if ( is_front_page() && is_home() ) : ?>
	        <h1 class="logo-wrapper">
	          <span class="hide-copy">
	            <?php bloginfo( 'name' ); ?>
	          </span>
	          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="nav-trigger">
	            <img src="img/logo-short.svg" alt="">
	          </a>
	        </h1>
	        <h2 class="full-name">Oksana Tanasiv</h2>
	      <?php else : ?>
	        <p class="logo-wrapper">
	          <span class="hide-copy">
	            <?php bloginfo( 'name' ); ?>
	          </span>
	          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="nav-trigger">
	            <img src="<?php echo IMAGES; ?>/logo-short-3.svg" alt="">
	          </a>
	        </p>
	        <p class="full-name">Oksana Tanasiv</p>
	      <?php
	      endif;
	    ?>
	    <button class="menu-btn hide-copy">
	      menu
	      <span class="menu-nav-btn__bar"></span>
	      <span class="menu-nav-btn__bar"></span>
	      <span class="menu-nav-btn__bar"></span>
	    </button>
	    <nav id="site-navigation" class="site-nav" role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav> 
	  </div>
	</header>

	<main id="main" class="site-content" role="main">
