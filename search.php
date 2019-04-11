<?php
/*
 * Omnibus Prime search template file: search.php
 *
 * @package Omnibus Prime
 * @since 1.0
 * @version 1.0
 */
get_header(); ?>

  <div class="grid">

    <main id="main__content" class="h-feed col-xs-12 col-md-8" role="main">

      <h2><?php _e( 'Search results', 'omnibus-prime' ); ?></h2>

      <?php
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

        <button class="btn solid primary" onclick="document.getElementById('s').focus();" type="button">
          <?php _e( 'Search again', 'omnibus-prime' ); ?>
        </button>

      <?php } ?>

    </main>

    <?php get_sidebar(); ?>

  </div>

<?php get_footer(); ?>
