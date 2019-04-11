<?php
/*
 * Omnibus Prime loop template part: loop.php
 *
 * @package Omnibus Prime
 * @since 1.0
 * @version 1.0
 */

  if ( have_posts() ) {

    while ( have_posts() ) {

      the_post();

      get_template_part( 'article' );

    }

    if ( paginate_links() ) {

      get_template_part( 'article-pagination' );

    }

  } else {
?>

  <div class="alert info" role="alert">
    <?php _e( 'Sorry, no posts matched your criteria.', 'omnibus-prime' ); ?>
  </div>

<?php } ?>
