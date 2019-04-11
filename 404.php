<?php
/*
 * Omnibus Prime error 404 file: 404.php
 *
 * @package Omnibus Prime
 * @since 1.0
 * @version 1.0
 */

  get_header();
?>

  <div class="grid">

    <main id="main__content" class="h-feed col-xs-12 col-md-8" role="main">

      <h2 class="text--center"><?php _e( 'Sorry, 404 - Not found', 'omnibus-prime' ); ?></h2>

      <p><?php _e( 'You can do the following:', 'omnibus-prime' ); ?></p>

      <div class="error404--options">

        <button class="btn-icn-txt v" onclick="document.getElementById('s').focus();" type="button">
          <svg viewbox="0 0 32 32" aria-hidden="true">
            <path d="M31.122,26.88l-5.979-5.981c-0.922-0.92-2.291-1.104-3.406-0.565l-2.275-2.287c3.604-4.321,3.387-10.756-0.684-14.812c-4.292-4.296-11.25-4.296-15.543,0s-4.296,11.261,0,15.543c4.057,4.062,10.491,4.277,14.813,0.685l2.287,2.287c-0.523,1.104-0.354,2.479,0.564,3.396l5.98,5.979c1.17,1.17,3.073,1.17,4.243,0C32.294,29.95,32.291,28.05,31.122,26.88z M17.363,17.363c-3.513,3.513-9.212,3.515-12.727,0c-3.515-3.515-3.515-9.214,0-12.729c3.515-3.514,9.213-3.514,12.727,0C20.879,8.15,20.879,13.849,17.363,17.363z M30.414,30.415c-0.78,0.778-2.048,0.778-2.828,0l-5.98-5.979c-0.771-0.771-0.771-2.05,0-2.83c0.781-0.771,2.049-0.771,2.83,0l5.979,5.981C31.193,28.366,31.195,29.634,30.414,30.415z"/>
          </svg>
          <span><?php _e( 'Try searching', 'omnibus-prime' ); ?></span>
        </button>

        <button class="btn-icn-txt v" onclick="history.back();" type="button">
          <svg viewbox="0 0 32 32" aria-hidden="true">
            <path d="M7.586,14.586l14-14c0.779-0.781,2.047-0.781,2.828,0c0.781,0.781,0.781,2.048,0,2.828L11.828,16l12.586,12.586c0.781,0.781,0.781,2.047,0,2.828s-2.047,0.781-2.828,0l-14-14C6.805,16.633,6.805,15.367,7.586,14.586z"/>
          </svg>
          <span><?php _e( 'Back to previous page', 'omnibus-prime' ); ?></span>
        </button>

        <a class="btn-icn-txt v" href="<?php echo home_url(); ?>">
          <svg viewbox="0 0 32 32" aria-hidden="true">
            <path d="M27.707,15.293l-11-11c-0.391-0.391-1.023-0.391-1.414,0l-11,11C4.105,15.48,4,15.734,4,16v15c0,0.553,0.448,1,1,1h7c0.552,0,1-0.447,1-1V21h6v10c0,0.553,0.447,1,1,1h7c0.553,0,1-0.447,1-1V16C28,15.734,27.895,15.48,27.707,15.293z M27,31h-7V21c0-0.552-0.447-1-1-1h-6c-0.552,0-1,0.448-1,1v10H5V16L16,5l11,11V31z"/><path d="M31.854,15.646l-15.5-15.5c-0.195-0.196-0.512-0.196-0.707,0L8,7.793V5c0-0.552-0.448-1-1-1H5C4.448,4,4,4.448,4,5v6.793l-3.854,3.853c-0.195,0.195-0.195,0.512,0,0.707s0.512,0.195,0.707,0L16,1.208l15.146,15.146c0.193,0.195,0.512,0.195,0.707,0C32.048,16.159,32.049,15.842,31.854,15.646z M7,8.793l-2,2V5h2V8.793z"/>
          </svg>
          <span><?php _e( 'Go to home page', 'omnibus-prime' ); ?></span>
        </a>

        <a class="btn-icn-txt v" href="mailto:<?php echo get_bloginfo( 'admin_email' ); ?>">
          <svg viewbox="0 0 32 32" aria-hidden="true">
            <circle cx="29.5" cy="12.5" r="0.5"/>
            <circle cx="27.5" cy="12.5" r="0.5"/>
            <circle cx="4.5" cy="12.5" r="0.5"/>
            <circle cx="2.5" cy="12.5" r="0.5"/>
            <path d="M31.605,11.642L27,8.126V5c0-0.552-0.447-1-1-1h-4.406l-4.971-3.794c-0.344-0.275-0.904-0.275-1.248,0L10.405,4H6C5.448,4,5,4.448,5,5v3.126l-4.606,3.516C0.149,11.829,0.003,12.118,0,12.426V31c0,0.553,0.448,1,1,1h30c0.553,0,1-0.447,1-1V12.426C31.996,12.118,31.852,11.829,31.605,11.642z M16,1l3.936,3h-7.87L16,1z M16,24.438l-10-8V5h20v11.438L16,24.438z M5,9.388v6.25l-4-3.2L5,9.388z M31,31H1V13.718L15.375,25.23c0.344,0.271,0.904,0.271,1.248,0L31,13.719V31zM27,15.638v-6.25l4,3.05L27,15.638z"/>
          </svg>
          <span><?php _e( 'Contact us', 'omnibus-prime' ); ?></span>
        </a>

      </div>

      <?php
        $recent_posts = wp_get_recent_posts( array(
          'numberposts' => '5',
          'post_status' => 'publish'
        ) );

        if ( $recent_posts ) {
      ?>

        <h3>Recent Posts</h3>

        <ul>
          <?php
            foreach( $recent_posts as $recent ) {
              echo '<li><a href="' . get_permalink( $recent['ID'] ) . '">' . $recent['post_title'] . '</a>.</li>';
            }
          ?>
        </ul>

      <?php
        }

        wp_reset_query();
      ?>

    </main>

    <?php get_sidebar(); ?>

  </div>

<?php get_footer(); ?>
