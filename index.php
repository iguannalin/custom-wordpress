<?php
/**
 * Template Name: Index
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
    if ( have_posts() ) :

      while ( have_posts() ) :

        the_post();
        ?>

        <article <?php post_class(); ?>>

		  <?php the_post_thumbnail( 'my-custom-image-size' ); ?>

          <header class="entry-header">
			  <?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '">', '</a></h2>' ); ?>
          </header><!-- .entry-header -->

          <div class="entry-content">
            <?php the_content( esc_html__( 'Continue reading &rarr;', 'my-custom-theme' ) ); ?>
          </div><!-- .entry-content -->

        </article><!-- #post-## -->

        <?php endwhile;

    else :
      get_template_part( 'content-none' );
    endif;
	?>
	</div><!-- .site-content -->
<?php
get_footer();
