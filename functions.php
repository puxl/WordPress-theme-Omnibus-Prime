<?php
/*
 * WordPress PUXL Blog classic functions and definitions: functions.php
 *
 * @package WordPress PUXL Blog classic
 * @since 1.0
 * @version 1.0
 */

function wp_puxl_blog_classic_register_menus() {
  register_nav_menus(
    array(
      'primary'    => __( 'Header: Primary navigation' ),
      'social'     => __( 'Footer: Social links' )
    )
  );
}

function wp_puxl_blog_classic_content_more() {
  global $post;
	return '<div class="go-to"><a class="btn" href="' . get_permalink( $post->ID ) . '">' . __( 'Read more', 'wp-puxl-blog-classic' ) . '<span class="sr">' . __( 'about ', 'wp-puxl-blog-classic' ) . get_the_title() . '</span></a></div>';
}

function wp_puxl_blog_classic_excerpt_more() {
  global $post;
	return '...<div class="go-to"><a class="btn" href="' . get_permalink( $post->ID ) . '">' . __( 'Go to post', 'wp-puxl-blog-classic' ) . '<span class="sr">' . get_the_title() . '</span></a></div>';
}

function wp_puxl_blog_classic_oembed_wrap( $html ) {
  $html = '<div class="responsive-embed">' . $html . '</div>';
  return $html;
}

function wp_puxl_blog_classic_oembed_title_to_iframe( $iframe ){
  if( $iframe ) {
    $title = 'title="' . __( 'Embedded iframe', 'wp-puxl-blog-classic' ) . '"';
    $iframe = str_replace( '></iframe>', ' ' . $title . '></iframe>', $iframe );

    return $iframe;
  }

  return false;
}

function wp_puxl_blog_classic_oembed_html( $html ) {
  if ( $html ) {
    return wp_puxl_blog_classic_oembed_title_to_iframe( $html );
  }

  return false;
}

function wp_puxl_blog_classic_password_form() {
  global $post;
  $label = 'pwbox-' . ( empty( $post->ID ) ? rand() : $post->ID );
  $password_form = '<form class="protected-post-form" action="' . get_option('siteurl') . '/wp-pass.php" method="post">' .
    '<div class="alert info" role="alert">' .
      __( 'This content is password protected. To access it please enter your password:', 'wp-puxl-blog-classic' ) .
    '</div><div class="group" aria-label="' .  __( 'Content password form', 'wp-puxl-blog-classic' ) . '" role="group"><label class="pass-label txt text--hide block" for="' . $label . '"><span>' . __( 'Enter password', 'wp-puxl-blog-classic' ) . '</span><input id="' . $label . '" name="post_password" placeholder="' . __( 'Password', 'wp-puxl-blog-classic' ) . '" size="20" type="password"></label><input class="btn solid primary" name="Submit" value="' . __( 'Enter', 'wp-puxl-blog-classic' ) . '" type="submit"></div></form>';
  return $password_form;
}

function wp_puxl_blog_classic_widgets_init() {

  if ( function_exists( 'register_sidebar' ) ) {
    register_sidebar( array(
      'name' => __( 'Widget area 1' ),
      'id'   => 'widgets-1',
      'description'   => 'This is the first widget area, on the lateral side of the site.',
      'before_widget' => '<section id="widgets-1__%1$s" class="widget %1$s">',
      'after_widget'  => '</section>',
      'before_title'  => '<h4>',
      'after_title'   => '</h4>'
    ) );

    register_sidebar( array(
      'name' => __( 'Widget area 2' ),
      'id'   => 'widgets-2',
      'description'   => 'This is the second widget area, on the bottom side of the site.',
      'before_widget' => '<section id="widgets-2__%1$s" class="widget %1$s col-xs-12 col-md-4">',
      'after_widget'  => '</section>',
      'before_title'  => '<h4>',
      'after_title'   => '</h4>'
    ) );
  }

}

function wp_puxl_blog_classic_scripts() {
//  wp_enqueue_style( 'puxl', get_template_directory_uri() . '/css/puxl.min.css', false, '1-beta', 'all' );
//  wp_enqueue_style( 'puxl', 'https://www.puxl.io/css/puxl.min.css', false, '1-beta', 'all' );
  wp_enqueue_style( 'puxl', 'https://www.kanuel.com/pruebas/puxl.css', false, '1-beta' );
  wp_enqueue_style( 'wp_puxl_blog_classic_style', get_template_directory_uri() . '/style.css', puxl, '1.0', 'all' );
//  wp_enqueue_script( 'puxlAppBar', get_template_directory_uri() . '/js/puxl-js/appBar.js', array(), 1.0, true );
  wp_enqueue_script( 'puxlAppBar', 'https://puxl.io/js/puxl-js/appBar.js', array(), 1.0, true );
//  wp_enqueue_script( 'wp_puxl_blog_classic_script', get_template_directory_uri() . '/assets/js/script.js', array( 'puxlAppBar' ), 1.0, true );
  if ( is_singular() ) { wp_enqueue_script('comment-reply'); }
}

function wp_puxl_blog_classic_theme_setup() {
  add_theme_support( 'custom-logo' );
  add_theme_support( 'post-formats',  array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );
  add_theme_support( 'post-thumbnails' );

  add_filter( 'the_content_more_link'  , 'wp_puxl_blog_classic_content_more');
  add_filter( 'excerpt_more'           , 'wp_puxl_blog_classic_excerpt_more');
  add_filter( 'embed_oembed_html'      , 'wp_puxl_blog_classic_oembed_wrap', 99, 4 );
  add_filter( 'embed_oembed_html'      , 'wp_puxl_blog_classic_oembed_html', 99, 4 );
  add_filter( 'the_password_form'      , 'wp_puxl_blog_classic_password_form' );

	remove_filter( 'excerpt_more'     , 'wp-puxl-blog-classic' ); 
	remove_filter( 'get_the_excerpt'  , 'wp-puxl-blog-classic' );
}

require get_template_directory() . '/inc/commentlist.php';

add_action( 'init'                , 'wp_puxl_blog_classic_register_menus' );
add_action( 'widgets_init'        , 'wp_puxl_blog_classic_widgets_init' );
add_action( 'wp_enqueue_scripts'  , 'wp_puxl_blog_classic_scripts' );
add_action( 'after_setup_theme'   , 'wp_puxl_blog_classic_theme_setup' );

?>
