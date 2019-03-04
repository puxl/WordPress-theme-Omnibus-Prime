<?php
/*
 * WordPress PUXL Blog classic footer: footer.php
 *
 * @package WordPress PUXL Blog classic
 * @since 1.0
 * @version 1.0
 */
?>

  <footer id="main__footer" aria-label="<?php __( 'Main footer', 'wp-puxl-blog-classic' ); ?>" role="contentinfo">

    <?php if ( function_exists( 'dynamic_sidebar' ) && is_active_sidebar( 'widgets-2' ) ) { ?>
    <div id="widgets-2">
      <div class="grid" aria-label="<?php _e( 'Footer widgets area', 'wp-puxl-blog-classic' ); ?>" role="complementary">

        <?php dynamic_sidebar( 'widgets-2' ); ?>

        

      </div>
    </div>
    <?php } ?>

    <div id="colophon" class="grid">

      <?php if ( has_nav_menu( 'social' ) ) { ?>
      <nav class="col-xs-12" role="navigation">
        <?php wp_nav_menu( array(
          'theme_location'  => 'social',
          'menu_class'      => 'unlisted h',
          'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>'
        ) ); ?>
      </nav>
      <?php } ?>

      <div id="ik_signature" class="col-xs-12 text--center">
        <?php _e( 'WP PUXL Blog Classic theme', 'wp-puxl-blog-classic' ); ?>
        <br>
        <?php _e( 'made with', 'wp-puxl-blog-classic' ); ?> <span id="ik_love" style="display:inline-block;background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/ik_project__heart--512.svg);background-position:center;background-repeat:no-repeat;"><span style="opacity:0;overflow:hidden;"><?php _e( 'love', 'wp-puxl-blog-classic' ); ?></span></span> <?php _e( 'by', 'wp-puxl-blog-classic' ); ?> <a href="https://puxl.io/">PUXL</a> <?php _e( 'for', 'wp-puxl-blog-classic' ); ?> <a href="https://wordpress.org/">WordPress</a>
      </div>

    </div>

  </footer>

  <?php wp_footer(); ?>

  <script>
    (function() {
      'use strict';

      // If <html> tag contains class="no-js".
      if (document.documentElement.classList.contains('no-js')) {
        // Replace from <html> class="no-js" with class="js".
        document.documentElement.classList.replace('no-js', 'js');
      }

      // Initialize app bar.
      puxl_appBar(
        // id
        'app-bar',
        // iconPath
        '<?php echo get_template_directory_uri(); ?>/assets/images/puxl-icons/',
        // iconOpened
        'cross.svg',
        // iconClosed
        'menu-burger.svg',
        // txtOpened
        'Close navigation menu',
        // txtClosed
        'Open navigation menu'
      );
    })();
  </script>

</body>
</html>
