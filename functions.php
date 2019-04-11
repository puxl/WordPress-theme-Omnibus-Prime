<?php
/*
 * Omnibus Prime functions and definitions: functions.php
 *
 * @package Omnibus Prime
 * @since 1.0
 * @version 1.0
 */

function omnibus_prime_register_menus() {
  register_nav_menus( array(
    'primary' => __( 'Header: Primary navigation' ),
    'social'  => __( 'Footer: Social links' )
  ) );
}

function omnibus_prime_content_more() {
  global $post;
	return
    '<div class="go-to"><a class="btn" href="' .
    get_permalink( $post->ID ) .
    '">' .
    __( 'Read more', 'omnibus-prime' ) .
    '<span class="sr">' .
    __( 'about ', 'omnibus-prime' ) .
    get_the_title() .
    '</span></a></div>';
}

function omnibus_prime_excerpt_more() {
  global $post;
	return
    '...<div class="go-to"><a class="btn" href="' .
    get_permalink( $post->ID ) .
    '">' .
    __( 'Go to post', 'omnibus-prime' ) .
    '<span class="sr">' . get_the_title() .
    '</span></a></div>';
}

function omnibus_prime_oembed_wrap( $html ) {
  $html = '<div class="responsive-embed">' . $html . '</div>';
  return $html;
}

function omnibus_prime_oembed_title_to_iframe( $iframe ){
  if( $iframe ) {
    $title = 'title="' . __( 'Embedded iframe', 'omnibus-prime' ) . '"';
    $iframe = str_replace( '></iframe>', ' ' . $title . '></iframe>', $iframe );

    return $iframe;
  }

  return false;
}

function omnibus_prime_oembed_html( $html ) {
  if ( $html ) {
    return omnibus_prime_oembed_title_to_iframe( $html );
  }

  return false;
}

function omnibus_prime_password_form() {
  global $post;
  $label = 'pwbox-' . ( empty( $post->ID ) ? rand() : $post->ID );
  $password_form = '<form class="protected-post-form" action="' . get_option('siteurl') . '/wp-pass.php" method="post">' . '<div class="alert info" role="alert">' . __( 'This content is password protected. To access it please enter your password:', 'omnibus-prime' ) . '</div><div class="group" aria-label="' .  __( 'Content password form', 'omnibus-prime' ) . '" role="group"><label class="pass-label txt text--hide block" for="' . $label . '"><span>' . __( 'Enter password', 'omnibus-prime' ) . '</span><input id="' . $label . '" name="post_password" placeholder="' . __( 'Password', 'omnibus-prime' ) . '" size="20" type="password"></label><input class="btn solid primary" name="Submit" value="' . __( 'Enter', 'omnibus-prime' ) . '" type="submit"></div></form>';
  return $password_form;
}

function omnibus_prime_widgets_init() {

  if ( function_exists( 'register_sidebar' ) ) {

    register_sidebar( array(
      'name'          => __( 'Widget area 1', 'omnibus-prime' ),
      'id'            => 'widgets-1',
      'description'   => 'This is the first widget area, on the lateral side of the site.',
      'before_widget' => '<section id="widgets-1__%1$s" class="widget %1$s">',
      'after_widget'  => '</section>',
      'before_title'  => '<h3>',
      'after_title'   => '</h3>'
    ) );

    register_sidebar( array(
      'name'          => __( 'Widget area 2', 'omnibus-prime' ),
      'id'            => 'widgets-2',
      'description'   => 'This is the second widget area, on the bottom side of the site.',
      'before_widget' => '<section id="widgets-2__%1$s" class="widget %1$s col-xs-12 col-md-4">',
      'after_widget'  => '</section>',
      'before_title'  => '<h3>',
      'after_title'   => '</h3>'
    ) );
  }

}

function omnibus_prime_scripts() {
//  wp_enqueue_style( 'puxl', 'https://www.kanuel.com/pruebas/puxl.css', false, '1-beta' );
////  wp_enqueue_style( 'puxl_framework', get_template_directory_uri() . '/assets/css/puxl.min.css', puxl, '1.0', 'all' );
//  wp_enqueue_style( 'omnibus_prime_style', get_template_directory_uri() . '/style.css', puxl, '1.0', 'all' );
//  wp_enqueue_script( 'puxl_app_bar', get_template_directory_uri() . '/assets/js/puxl-js/appBar.js', array(), 1.0, true );
////  wp_enqueue_script( 'puxlAppBar', 'https://puxl.io/js/puxl-js/appBar.js', array(), 1.0, true );
////  wp_enqueue_script( 'omnibus_prime_script', get_template_directory_uri() . '/assets/js/script.js', array( 'puxlAppBar' ), 1.0, true );

  wp_enqueue_style( 'puxl_framework_style', get_template_directory_uri() . '/assets/puxl-framework_1-beta/css/puxl.css', puxl, '1.0', 'all' );
  wp_enqueue_style( 'omnibus_prime_style', get_template_directory_uri() . '/style.css', puxl, '1.0', 'all' );
  wp_enqueue_script( 'puxl_app_bar', get_template_directory_uri() . '/assets/puxl-framework_1-beta/js/puxl-js/appBar.js', array(), 1.0, true );

  if ( is_singular() ) {
    wp_enqueue_script( 'comment-reply' );
  }
}

function omnibus_prime_theme_setup() {
  add_theme_support( 'align-wide' );
  add_theme_support( 'custom-logo' );
  add_theme_support( 'post-formats', array( 'aside', 'gallery', 'quote', 'image', 'video' ) );
  add_theme_support( 'post-thumbnails' );

  add_filter( 'the_content_more_link', 'omnibus_prime_content_more');
  add_filter( 'excerpt_more', 'omnibus_prime_excerpt_more');
  add_filter( 'embed_oembed_html', 'omnibus_prime_oembed_wrap', 99, 4 );
  add_filter( 'embed_oembed_html', 'omnibus_prime_oembed_html', 99, 4 );
  add_filter( 'the_password_form', 'omnibus_prime_password_form' );

	remove_filter( 'excerpt_more', 'omnibus-prime' ); 
	remove_filter( 'get_the_excerpt', 'omnibus-prime' );
}

require get_template_directory() . '/inc/commentlist.php';

add_action( 'init', 'omnibus_prime_register_menus' );
add_action( 'widgets_init', 'omnibus_prime_widgets_init' );
add_action( 'wp_enqueue_scripts', 'omnibus_prime_scripts' );
add_action( 'after_setup_theme', 'omnibus_prime_theme_setup' );

?>
