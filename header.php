<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<title><?php
/*
   * Print the <title> tag based on what is being viewed.
   */
global $page, $paged;

wp_title( '|', true, 'right' );

// Add the blog name.
bloginfo( 'name' );

// Add the blog description for the home/front page.
$site_description = get_bloginfo( 'description', 'display' );
if ( $site_description && ( is_home() || is_front_page() ) )
  echo " | $site_description";

?></title>
<meta charset="<?php bloginfo( 'charset' ); ?>" />

<!-- css default -->
<link href="<?php echo get_stylesheet_directory_uri(); ?>/stylesheets/screen.css" media="screen, projection" rel="stylesheet" type="text/css" />

<link href="<?php echo get_stylesheet_directory_uri(); ?>/fancyBox/source/jquery.fancybox.min.css" media="screen" rel="stylesheet" type="text/css" />


<!-- Optionally add helpers - button, thumbnail and/or media -->
<!--<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/fancyBox/source/helpers/jquery.fancybox-buttons.css?v=1.0.3" type="text/css" media="screen" />
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/fancyBox/source/helpers/jquery.fancybox-buttons.js?v=1.0.3"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/fancyBox/source/helpers/jquery.fancybox-media.js?v=1.0.3"></script>

<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/fancyBox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.6" type="text/css" media="screen" />
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/fancyBox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.6"></script>-->

  <!--[if IE]>
    <link href="/stylesheets/ie.css" media="screen, projection" rel="stylesheet" type="text/css" />
  <![endif]-->



<style>
.fancybox-close {
    top: 0;
    right: 0;
}​
</style>
  </head>
  <body class="default">
    <div id="extra-decoration" class="extra-decoration"></div>

<header id="header" class="header">
  <div class="header-content">
    <a id="logo" href="<?php echo site_url() ?>" class="logo">
      Painto.net
    </a><!--#logo-->
    <nav id="access" role="navigation">

      <?php 
      $defaults = array(
  'theme_location'  => 'primary',
  'items_wrap'      => '<div class="menu">%3$s</div>',

); ?>
      <?php 
      wp_nav_menu($defaults); ?>
    </nav><!-- #access -->
  </div><!--.header-content-->
</header><!--#header-->

<div class="content">
