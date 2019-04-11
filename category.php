<?php
/*
 * Omnibus Prime category file: category.php
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
          $category = get_queried_object();
          echo
            __( 'Entries with the category', 'omnibus-prime' ) .
            ' <b>' .
            $category->slug .
            ' </b>:';
        ?>
      </h2>

      <?php
        if ( is_category() ) {

          get_template_part( 'loop' );

        }
      ?>

    </main>

    <?php get_sidebar(); ?>

  </div>

<?php get_footer(); ?>
