<?php
/**
 * Template Name: 404
 * PHP version 8

 * @category Theme
 * @package  CustomThemeName
 * @author   AuthorName
 * @license  GNU GPLv2
 * @link     https://github.com/iguannalin/custom-wordpress
 * @since    CustomThemeName 0.0.1
 **/

get_header(); ?>
  <div class="site-content">
	  <article class="no-results">

	    <header class="entry-header">
	      <h1 class="page-title"><?php esc_html_e( 'Nothing Found Here', 'my-custom-theme' ); ?></h1>
	    </header><!-- .entry-header -->

	    <div class="entry-content">
			<p><?php esc_html_e( 'It looks like nothing was found at this location.', 'my-custom-theme' ); ?></p>
	    </div><!-- .entry-content -->

	  </article><!-- .no-results -->
	</div><!-- .site-content -->
<?php
get_footer();
