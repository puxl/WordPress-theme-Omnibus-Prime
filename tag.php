<?php
/*
 * Omnibus Prime tag file: tag.php
 *
 * @package Omnibus Prime
 * @since 1.0
 * @version 1.0
 */

  get_header();
?>

  <div class="grid">

    <main id="main__content" class="h-feed col-xs-12 col-md-8" role="main">

      <h2>
        <?php
          $tag = get_queried_object();
          echo
            __( 'Entries with the tag', 'omnibus-prime' ) .
            ' <b>' .
            $tag->slug .
            ' </b>:';
        ?>
      </h2>

      <?php
        if ( is_tag() ) {

          get_template_part( 'loop' );

        }
      ?>

    </main>

    <?php get_sidebar(); ?>

  </div>

<?php get_footer(); ?>
