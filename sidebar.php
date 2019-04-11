<?php
/*
 * Omnibus Prime sidebar: sidebar.php
 *
 * @package Omnibus Prime
 * @since 1.0
 * @version 1.0
 */
?>

    <?php if ( function_exists( 'dynamic_sidebar' ) && is_active_sidebar( 'widgets-1' ) ) { ?>
    <aside id="widgets-1" class="col-xs-10 col-xs-offset-1 col-md-4 col-md-offset-0" aria-label="<?php _e( 'Main widgets area', 'omnibus-prime' ); ?>" role="complementary">

      <?php dynamic_sidebar( 'widgets-1' ); ?>

    </aside>
    <?php } ?>
