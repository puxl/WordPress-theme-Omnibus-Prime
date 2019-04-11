<?php
/*
 * Omnibus Prime header: header.php
 *
 * @package Omnibus Prime
 * @since 1.0
 * @version 1.0
 */
?>

<!doctype html>
<html class="no-js" dir="<?php echo ( is_rtl() ? 'rtl' : 'ltr' ); ?>" lang="<?php bloginfo( 'language' ); ?>">
<head>

  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <title><?php bloginfo( 'name' ); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="<?php bloginfo( 'description' ); ?>">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <?php wp_head(); ?>

</head>
<body <?php body_class( 'app-bar--top' ); ?>>

  <div class="jump-links" role="navigation">

    <ul>
      <li>

        <a class="jump-link" href="#main__content"><?php _e( 'Jump to main content', 'omnibus-prime' ); ?></a>

      </li>
      <li>

        <button class="jump-link" onclick="document.getElementById('s').focus();" type="button">
          <?php _e( 'Jump to search', 'omnibus-prime' ); ?>
        </button>

      </li>
    </ul>

  </div>

  <div id="app-bar" class="app bar top">

    <header>

      <h1>
        <a class="h-card vcard u-url url home" href="<?php echo home_url(); ?>">

          <?php if ( function_exists( 'the_custom_logo' )  && has_custom_logo() ) { ?>

            <img class="u-logo logo" alt="" src="<?php echo wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ) , 'full' )[0]; ?>">
            <span class="p-name fn"><?php bloginfo( 'name' ); ?></span>

          <?php } else { ?>

            <span class="p-name fn"><?php bloginfo( 'name' ); ?></span>

          <?php } ?>

        </a>
      </h1>

      <?php if ( has_nav_menu( 'primary' ) ) { ?>

        <button class="bar-btn-icn toggler mobile--down space--before" aria-expanded="true">
          <img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/images/puxl-icons/menu--burger.svg" aria-hidden="true">
          <span><?php _e( 'Open navigation menu', 'omnibus-prime' ); ?></span>
        </button>

      <?php } ?>

    </header>

    <?php if ( has_nav_menu( 'primary' ) ) { ?>

      <nav role="navigation">
        <?php wp_nav_menu( array(
          'container_class'  => 'subheading',
          'container_id'     => 'app-bar__menu',
          'depth'            => 1,
          'theme_location'   => 'primary'
        ) ); ?>
      </nav>

    <?php } ?>

  </div>
