<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */
?><!DOCTYPE html>
<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
<script type="text/javascript" src="<?php bloginfo('url'); ?>/wp-content/themes/pizzaspecial/dev/zurb/bower_components/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('url'); ?>/wp-content/themes/pizzaspecial/dev/zurb/bower_components/foundation-sites/dist/foundation.js"></script>
<script type="text/javascript" src="<?php bloginfo('url'); ?>/wp-content/themes/pizzaspecial/dev/zurb/js/app.js"></script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


<div id="page" class="site">

	<header id="masthead" class="full" role="banner">
      <div class="main-container bg-white">
         <div id="header-top" class="flex--row-sbw guide">

            <div class="site-branding guide">
               <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
               <!-- logo -->
               <!-- <a href="<?php echo esc_url(home_url('/'));  ?>" rel="home">
                     <div class="logo-cont"></div>
               </a> -->
               <!-- logo -->
            </div><!-- SITE BRANDING -->

            <div class="header-info-cont flex--column">
               <div id="header-contact" class="flex--row-sbw flex--align-center guide">
                  <?php get_template_part('template-parts/cart-panel'); ?>
                  <?php dynamic_sidebar('infopanel'); ?>
               </div><!-- header-contact -->

               <div id="header-banner" class="guide">
                  <a href="+36 20 46 99 550">+36 20 46 99 550</a>
               </div><!-- header-banner -->
            </div><!-- header-info -->

         </div><!-- header-top -->
      </div><!-- main-container -->






         <!-- #site-navigation -->
         <nav id="site-navigation" class="main-navigation" role="navigation">
   			<?php wp_nav_menu(array('theme_location' => 'primary', 'menu_id' => 'primary-menu')); ?>
   		</nav>
         <!-- #site-navigation -->


	</header><!-- #masthead -->

	<div id="content" class="site-content">
