<?php
/*
 * WordPress PUXL Blog classic comment list file: inc/commentlist.php
 *
 * @package WordPress PUXL Blog classic
 * @since 1.0
 * @version 1.0
 */

  if ( ! function_exists( 'wp_puxl_blog_classic_commentlist' ) ) {
    function wp_puxl_blog_classic_commentlist($comment, $args, $depth) {
?>

      <li class="comment u-comment h-cite">
        <div id="comment__<?php comment_ID() ?>" <?php comment_class( 'h-entry hentry' ); ?>>

          <footer class="h-card vcard comment-meta flag block">
            <div class="visual">

              <img class="u-photo photo avatar avatar-semantic-linkbacks circle" alt="<?php comment_author( $comment_ID ); ?>" src="<?php echo get_avatar_url( get_comment_author_email() ); ?>">

            </div>
            <div class="h-cite textual">

              <address class="u-author author comment-author">
                <?php if ( get_comment_author( $comment_ID ) != 'Anonymous' ) { ?>
                <a class="fn n u-url url" href="mailto:<?php comment_author_email(); ?>"><?php comment_author( $comment_ID ); ?></a>
                <?php } else { ?>
                <span class="fn n"><?php comment_author( $comment_ID ); ?></span>
                <?php } ?>
              </address>

              <time class="dt-published published" datetime="<?php comment_date( 'Y-m-d h:i:s' ); ?>">
                Published <abbr title="<?php comment_date( 'Y-m-d h:i:s' ); ?>"><?php echo human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ); ?> ago</abbr>
              </time>

            </div>
          </footer>

          <div class="comment-content e-content p-name">

            <?php if ( $comment -> comment_approved == '0' ) { ?>
            <p class="text--info"><?php __( 'Your comment is awaiting moderation.' , 'wp-puxl-blog-classic' ) ?></p>
            <?php } ?>

            <?php comment_text(); ?>

          </div>

          <div class="comment-reply text--right">
            <?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
          </div>

        </div>

<?php
    }
  }
?>
