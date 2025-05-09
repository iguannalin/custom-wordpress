<?php
/**
 * Template Name: Header
 * PHP version 8

 * @category Theme
 * @package  CustomThemeName
 * @author   AuthorName
 * @license  GNU GPLv2
 * @link     https://github.com/iguannalin/custom-wordpress
 * @since    CustomThemeName 0.0.1
 **/?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
      <meta charset="<?php bloginfo('charset'); ?>">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta property="og:type" content="website">
      <meta property="og:url" content="SITE_URL_HERE">
      <meta property="og:title" content="<?php bloginfo( 'name' ); ?>">
      <meta property="og:description" content="<?php bloginfo( 'description' ); ?>">
      <meta property="og:image" content="assets/favicon.png">
      <?php wp_head(); ?>
    </head>
  <body>
  <header class="site-header">
    <h1 class="site-title">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
        <?php bloginfo( 'name' ); ?>
      </a>
    </h1>
    <p class="site-description"><?php bloginfo( 'description' ); ?></p>
  </header><!-- .site-header -->
