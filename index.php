<?php
/*
 * Omnibus Prime main template file: index.php
 *
 * @package Omnibus Prime
 * @since 1.0
 * @version 1.0
 */

  get_header();
?>

  <div class="grid">

    <main id="main__content" class="h-feed col-xs-12 col-md-8" aria-label="<?php _e( 'Main content', 'omnibus-prime' ); ?>" role="main">

      <?php get_template_part( 'loop' ); ?>

    </main>

    <?php get_sidebar(); ?>

  </div>

<?php get_footer(); ?>
