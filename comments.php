<?php
/*
 * WordPress PUXL Blog classic comments file: comments.php
 *
 * @package WordPress PUXL Blog classic
 * @since 1.0
 * @version 1.0
 */

  if ( post_password_required() ) {
    return;
  }
?>

        <?php if ( have_comments() ) { ?>
        <section id="comments" aria-labelledby="comments--heading">

        <?php if ( ! empty( get_comments( array( 'type' => 'comment' ) ) ) ) { ?>

          <h3 id="comments--heading"><?php comments_number( __( 'Comments', 'wp-puxl-blog-classic' ), __( '1 Comment', 'wp-puxl-blog-classic' ), __( '% Comments', 'wp-puxl-blog-classic' ) ); ?></h3>

          <a class="btn ghost primary" href="#reply-title"><?php _e( 'Leave a comment', 'wp-puxl-blog-classic' ); ?></a>

          <ol class="h-feed hfeed p-comments comment-list">
            <?php wp_list_comments( array (
              'avatar_size' => 32,
              'style'       => 'ol',
              'short_ping'  => true,
              'reply_text'  => __( 'Reply', 'wp-puxl-blog-classic' ),
              'type'        => 'comment',
              'callback'    => 'wp_puxl_blog_classic_commentlist'
              ) ); ?>
          </ol>

          <?php comment_form( array (

            'fields' => array (
              'author' =>
                '<label
                  class="ctrl txt comment-form-author"
                  for="author">
                  <span><abbr title="' . __( 'Required', 'wp-puxl-blog-classic' ) . '">*</abbr>' . __( 'Name', 'wp-puxl-blog-classic' ) . '</span>
                  <input
                    id="author"
                    name="author"
                    placeholder="' . __( 'Your name', 'wp-puxl-blog-classic' ) . '"
                    value="' . esc_attr( $commenter['comment_author'] ) . '"
                    type="text"
                    required>
                </label>',

              'email' =>
                '<label
                  class="ctrl txt comment-form-email"
                  for="email">
                  <span><abbr title="' . __( 'Required', 'wp-puxl-blog-classic' ) . '">*</abbr>' . __( 'Email', 'wp-puxl-blog-classic' ) . '</span>
                  <input
                    id="email"
                    name="email"
                    placeholder="' . __( 'Your email', 'wp-puxl-blog-classic' ) . '"
                    value="' . esc_attr( $commenter['comment_author_email'] ) . '"
                    type="email"
                    required>
                </label>',

              'url' =>
                '<label
                  class="ctrl txt comment-form-url"
                  for="url">
                  <span>' . __( 'Website', 'wp-puxl-blog-classic' ) . '</span>
                  <input
                    id="url"
                    name="url"
                    placeholder="' . __( 'Your website', 'wp-puxl-blog-classic' ) . '"
                    value="' . esc_attr( $commenter['comment_author_url'] ) . '"
                    type="url">
                </label>',

              'cookies' =>
                '<label
                  class="ctrl chk comment-form-cookies-consent"
                  for="wp-comment-cookies-consent">
                  <input
                    id="wp-comment-cookies-consent"
                    name="wp-comment-cookies-consent"
                    value="yes"
                    type="checkbox"' .
                    $consent . '>
                  <span>' . __( 'Save name, email, and website in this browser for the next time I comment.', 'wp-puxl-blog-classic' ) . '</span>
                </label>'
            ),

            'comment_field' =>
              '<div class="ctrl">
                <label
                  class="txta block v comment-form-comment"
                  for="comment">
                  <span><abbr title="' . __( 'Required', 'wp-puxl-blog-classic' ) . '">*</abbr>' . __( 'Comment', 'wp-puxl-blog-classic' ) . '</span>
                  <textarea
                    id="comment"
                    name="comment"
                    placeholder="' . __( 'Write your comment here.', 'wp-puxl-blog-classic' ) . '"
                    required></textarea>
                </label>
              </div>',

            'must_log_in' =>
              '<div class="alert info must-log-in" role="alert">
                <p>' .
                  __( 'You must be logged in to post a comment.', 'wp-puxl-blog-classic' ) .
                '</p>
                <a
                  class="btn"
                  href="' . wp_login_url( get_permalink() ) . '"
                 >' .
                  __( 'Login', 'wp-puxl-blog-classic' ) .
                '</a>
              </div>',

            'logged_in_as' =>
              '<p class="logged-in-as">' .
              sprintf(
                __( '<a href="%1$s" aria-label="%2$s">' . __( 'Logged in as', 'wp-puxl-blog-classic' ) . ' %3$s</a> · <a href="%4$s">' . __( 'Log out?', 'wp-puxl-blog-classic' ) . '</a>' ),
                get_edit_user_link(),
                esc_attr( sprintf( __( 'Logged in as %s. Edit your profile.', 'wp-puxl-blog-classic' ), $user_identity ) ),
                $user_identity,
                wp_logout_url( apply_filters( 'the_permalink', get_permalink( $post_id ), $post_id ) )
              ) .
              '</p>',

            'comment_notes_before' =>
              '<p class="comment-notes">' .
                __( 'Your email address will not be published.', 'wp-puxl-blog-classic' ) .
              '</p>',

            'class_form' =>
              'classic',

            'title_reply_before' =>
              '<h4 id="reply-title" class="comment-reply-title">',

            'title_reply_after' =>
              '</h4>',

            'label_submit' =>
              __('Post your comment', 'wp-puxl-blog-classic' ),

            'submit_button' =>
              '<input id="%2$s" class="btn solid primary %3$s" name="%1$s" value="%4$s" type="submit" />',

            'submit_field' =>
              '<div class="ctrl text--right">%1$s %2$s</div>',

            'format' => 'html5'

          ) ); ?>

          <?php } ?>

          <?php if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) { ?>
          <div class="alert warning no-comments" role="alert">
            <?php _e( 'Sorry, comments are closed.', 'wp-puxl-blog-classic' ); ?>
          </div>
          <?php } ?>

          <?php if ( ! empty( get_comments( array( 'type' => 'pings' ) ) ) ) { ?>

            <h3 id="pings"><?php _e( 'Pingbacks and Trackbacks', 'wp-puxl-blog-classic' ); ?></h3>

            <ol class="comment-list"><!-- ñ h-feed hfeed p-comments  -->
              <?php wp_list_comments( array (
                'type'      => 'pings',
                'callback'  => 'wp_puxl_blog_classic_commentlist'
                ) ); ?>
            </ol>

          <?php } ?>

          <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) { ?>
          <nav class="pagination comment-navigation" aria-label="<?php _e( 'Comments navigation', 'wp-puxl-blog-classic' ); ?>" role="navigation">
            <ul>
              <li>
                <?php previous_comments_link( __( 'Older Comments', 'wp-puxl-blog-classic' ) ); ?>
              </li>

              <li>
                <?php next_comments_link( __( 'Newer Comments', 'wp-puxl-blog-classic' ) ); ?>
              </li>
            </ul>
          </nav>
          <?php } ?>

        </section>
        <?php } ?>
