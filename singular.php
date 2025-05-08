<?php
/**
 * Template Name: Singular
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
    <?php
    while ( have_posts() ) :

    the_post();
    ?>

    <article <?php post_class(); ?>>

	  <?php the_post_thumbnail( 'my-custom-image-size' ); ?>

      <header class="entry-header">
        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
      </header><!-- .entry-header -->

      <div class="entry-content-wrapper">
          <div class="entry-content">
            <?php the_content(); ?>
          </div>
      </div><!-- .entry-content -->
    </article><!-- #post-## -->

    <?php endwhile; ?>
	</div><!-- .site-content -->
<?php
get_footer();
