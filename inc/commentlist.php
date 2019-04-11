<?php
/*
 * Omnibus Prime comment list file: inc/commentlist.php
 *
 * @package Omnibus Prime
 * @since 1.0
 * @version 1.0
 */

  if ( ! function_exists( 'omnibus_prime_commentlist' ) ) {
    function omnibus_prime_commentlist( $comment, $args, $depth ) {
?>

      <li class="comment u-comment h-cite">

        <article id="comment__<?php comment_ID() ?>" <?php comment_class( 'h-entry hentry' ); ?> aria-label="<?php __( 'Comment by', 'omnibus-prime' ) . ' ' . comment_author( $comment_ID ); ?>">

          <footer class="h-card vcard comment-meta flag block">
            <div class="visual">

              <img class="u-photo photo avatar avatar-semantic-linkbacks circle" alt="<?php comment_author( $comment_ID ); ?>" src="<?php echo get_avatar_url( get_comment_author_email() ); ?>">

            </div>
            <div class="h-cite textual">

              <div class="u-author author comment-author">

                <?php
                  if ( 'Anonymous' != get_comment_author( $comment_ID ) ) {
                ?>

                  <b class="fn n"><?php comment_author( $comment_ID ); ?></b>

                <?php
                  } else {

                    comment_author( $comment_ID );

                  }
                ?>

              </div>

              <div>

                <time datetime="<?php the_time( 'Y-m-d h:i:s' ); ?>">
                  <?php _e( 'Published ', 'omnibus-prime' ) ?><abbr title="<?php the_time( 'jS F Y, H:i:s' ); ?>"><?php echo human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ); ?><?php _e( ' ago.', 'omnibus-prime' ) ?></abbr>
                  <span class="dt-published published sr"><?php the_time( 'Y/m/d - H:i:s' ); ?></span>
                </time>

              </div>

            </div>
          </footer>

        <?php if ( '0' == $comment->comment_approved ) { ?>
          <div class="alert info comments--unapproved" role="alert">
            <?php _e('Your comment is awaiting moderation.', 'omnibus-prime' ) ?>
          </div>
        <?php } ?>

          <div class="comment-content e-content p-name">

            <?php comment_text(); ?>

          </div>

          <div class="comment-reply text--right">
            <?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
          </div>

        </article>

<?php
    }
  }

  if ( ! function_exists( 'omnibus_prime_pinglist' ) ) {
    function omnibus_prime_pinglist( $comment, $args, $depth ) {
?>

      <li class="comment u-comment h-cite">

        <article id="comment__<?php comment_ID() ?>" <?php comment_class( 'h-entry hentry' ); ?> aria-label="<?php __( 'Comment by', 'omnibus-prime' ) . ' ' . comment_author( $comment_ID ); ?>">

          <footer class="h-card vcard comment-meta">

            <div class="u-author author comment-author">

              <?php
                if ( 'Anonymous' != get_comment_author( $comment_ID ) ) {
              ?>

                <b class="fn n"><?php comment_author( $comment_ID ); ?></b>

              <?php
                } else {

                  comment_author( $comment_ID );

                }
              ?>

            </div>

            <div>

              <time datetime="<?php the_time( 'Y-m-d h:i:s' ); ?>">
                <?php _e( 'Published ', 'omnibus-prime' ) ?><abbr title="<?php the_time( 'jS F Y, H:i:s' ); ?>"><?php echo human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ); ?><?php _e( ' ago.', 'omnibus-prime' ) ?></abbr>
                <span class="dt-published published sr"><?php the_time( 'Y/m/d - H:i:s' ); ?></span>
              </time>

            </div>

          </footer>

        <?php if ( '0' == $comment->comment_approved ) { ?>
          <div class="alert info comments--unapproved" role="alert">
            <?php _e('Your comment is awaiting moderation.', 'omnibus-prime' ) ?>
          </div>
        <?php } ?>

          <div class="comment-content e-content p-name">

            <?php comment_text(); ?>

          </div>

          <div class="comment-reply text--right">
            <?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
          </div>

        </article>

<?php
    }
  }
?>
