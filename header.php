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
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">
<!-- <link rel="stylesheet" href="css/style.css"> -->
<!-- <script src="js/prefixfree.min.js"></script> -->
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<![endif]-->
<link rel="icon" type="image/png" href="img/favicon.png" />
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
	            <img src="img/logo-path-2.svg" alt="">
	          </a>
	        </h1>
	      <?php else : ?>
	        <p class="logo-wrapper">
	          <span class="hide-copy">
	            <?php bloginfo( 'name' ); ?>
	          </span>
	          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="nav-trigger">
	            <img src="<?php echo IMAGES; ?>/logo-path-2.svg" alt="">
	          </a>
	        </p>
	      <?php
	      endif;
	    ?>
	    <button class="menu-btn hide-copy">
	      menu
	      <span class="menu-nav-btn__bar"></span>
	      <span class="menu-nav-btn__bar"></span>
	      <span class="menu-nav-btn__bar"></span>
	    </button>
	    <nav class="site-nav" role="navigation">
	      <ul>
	        <li><a href="about.html" class="nav-trigger">About Artist</a></li>
	        <li><a href="exhibitions.html" class="nav-trigger">Exhibitions</a></li>
	        <li><a href="dealer-info.html" class="nav-trigger">Dealer Info</a></li>
	        <li><a href="contact.html" class="nav-trigger">Contact</a></li>
	        <li class="drop-down">
	          <a href="collections.html" class="nav-trigger">Collections</a>
	          <ul class="sub-nav">
	            <li>
	              <a href="#" class="nav-trigger"><span>Code "U"</span></a>
	            </li>
	            <li>
	              <a href="#" class="nav-trigger"><span>Dollar Art 15/16</span></a>
	            </li>
	            <li class="shop">
	              <a href="#" class="nav-trigger"><span>Fashion Illustrations</span></a>
	            </li>
	            <li>
	              <a href="#" class="nav-trigger"><span>Reincarnation</span></a>
	            </li>
	            <li>
	              <a href="#" class="nav-trigger"><span>Couture Art</span></a>
	            </li>
	            <li>
	              <a href="#" class="nav-trigger"><span>Odeur de Chanel</span></a>
	            </li>
	            <li>
	              <a href="#" class="nav-trigger"><span>Dollar Art</span></a>
	            </li>
	          </ul>
	        </li>
	        <li class="drop-down">
	          <a href="archives.html" class="nav-trigger">Archives</a>
	          <ul class="sub-nav">
	            <li>
	              <a href="#" class="nav-trigger"><span>Fashion Art</span></a>
	            </li>
	            <li class="shop">
	              <a href="#" class="nav-trigger"><span>Fashionista</span></a>
	            </li>
	            <li>
	              <a href="#" class="nav-trigger"><span>Faberge Collection</span></a>
	            </li>
	            <li>
	              <a href="#" class="nav-trigger"><span>Voice of Ukraine</span></a>
	            </li>
	            <li>
	              <a href="#" class="nav-trigger"><span>Fav Dress</span></a>
	            </li>
	            <li>
	              <a href="#" class="nav-trigger"><span>Ukraine.No War.</span></a>
	            </li>
	          </ul>
	        </li>
	        <li class="drop-down">
	          <a href="press.html" class="nav-trigger"><span>Press</span></a>
	          <ul class="sub-nav">
	            <li><a href="tv-interviews.html" class="nav-trigger"><span>TV Interviews</span></a></li>
	            <li><a href="publications.html" class="nav-trigger"><span>Publications</span></a></li>
	          </ul>
	        </li>
	        <li class="shop"><a href="art-post-card.html" class="nav-trigger">Art Post Cards</a></li>
	      </ul>
	    </nav>
	    <!-- <nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'oksanat' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav> -->
	  </div>
	</header>

	<main id="main" class="site-content" role="main">
