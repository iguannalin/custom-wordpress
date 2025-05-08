<?php
/**
 * Functions
 * PHP version 8

 * @category Theme
 * @package  CustomThemeName
 * @author   AuthorName
 * @license  GNU GPLv2
 * @link     https://github.com/iguannalin/custom-wordpress
 * @since    CustomThemeName 0.0.1
 **/

// Add featured image functionality.
add_theme_support('post-thumbnails');

// Add title tag functionality.
add_theme_support('title-tag');

/**
 * Enqueue a stylesheet.
 *
 * @return none
 */
function GA_Theme_enqueue() {
//     wp_enqueue_style( 'rtl', get_template_directory_uri() . '/rtl.css' );
    wp_enqueue_style( 'normalize', get_template_directory_uri() . '/normalize.css' );
    wp_enqueue_style('fonts', get_stylesheet_directory_uri() . '/fonts.css', array(), '0.0.1', 'all');
    wp_enqueue_style('CustomThemeName', get_stylesheet_uri(), array(), '0.0.1', 'all');
    wp_enqueue_script('index', get_template_directory_uri() . '/scripts/index.js', array(), '0.0.1', true);
}
add_action('wp_enqueue_scripts', 'GA_Theme_enqueue');
