<?php
/*
 * Omnibus Prime article pagination template part: article-pagination.php
 *
 * @package Omnibus Prime
 * @since 1.0
 * @version 1.0
 */
?>

  <nav class="pagination" aria-label="<?php _e( 'Posts pagination', 'omnibus-prime' ); ?>" role="navigation">

    <ul>
      <li>

        <?php if ( get_next_posts_link() ) { ?>
          <a class="btn-icn-txt" href="<?php echo get_next_posts_page_link(); ?>">

            <?php if ( is_rtl() ) { ?>

              <svg viewBox="0 0 32 32" aria-hidden="true">
                <path d="M24.414,17.414l-13.999,14c-0.781,0.781-2.048,0.781-2.828,0c-0.781-0.781-0.781-2.048,0-2.828L20.172,16L7.586,3.414c-0.781-0.781-0.781-2.047,0-2.828c0.781-0.781,2.047-0.781,2.828,0l14,14C25.195,15.367,25.195,16.633,24.414,17.414z"/>
              </svg>
              <span><?php _e( 'Older', 'omnibus-prime' ); ?></span>

            <?php } else { ?>

              <svg viewBox="0 0 32 32" aria-hidden="true">
                <path d="M7.586,14.586l14-14c0.779-0.781,2.047-0.781,2.828,0c0.781,0.781,0.781,2.048,0,2.828L11.828,16l12.586,12.586c0.781,0.781,0.781,2.047,0,2.828s-2.047,0.781-2.828,0l-14-14C6.805,16.633,6.805,15.367,7.586,14.586z"/>
              </svg>
              <span><?php _e( 'Older', 'omnibus-prime' ); ?></span>

            <?php } ?>

          </a>
        <?php } ?>

      </li>

      <li>

        <?php if ( get_previous_posts_link() ) { ?>
          <a class="btn-icn-txt" href="<?php echo get_previous_posts_page_link(); ?>">

            <?php if ( is_rtl() ) { ?>

              <span><?php _e( 'Newer', 'omnibus-prime' ); ?></span>
              <svg viewBox="0 0 32 32" aria-hidden="true">
                <path d="M7.586,14.586l14-14c0.779-0.781,2.047-0.781,2.828,0c0.781,0.781,0.781,2.048,0,2.828L11.828,16l12.586,12.586c0.781,0.781,0.781,2.047,0,2.828s-2.047,0.781-2.828,0l-14-14C6.805,16.633,6.805,15.367,7.586,14.586z"/>
              </svg>

            <?php } else { ?>

              <span><?php _e( 'Newer', 'omnibus-prime' ); ?></span>
              <svg viewBox="0 0 32 32" aria-hidden="true">
                <path d="M24.414,17.414l-13.999,14c-0.781,0.781-2.048,0.781-2.828,0c-0.781-0.781-0.781-2.048,0-2.828L20.172,16L7.586,3.414c-0.781-0.781-0.781-2.047,0-2.828c0.781-0.781,2.047-0.781,2.828,0l14,14C25.195,15.367,25.195,16.633,24.414,17.414z"/>
              </svg>

            <?php } ?>

          </a>
        <?php } ?>

      </li>
    </ul>

  </nav>
