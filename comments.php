<?php
/*
 * Omnibus Prime comments file: comments.php
 *
 * @package Omnibus Prime
 * @since 1.0
 * @version 1.0
 */

  if ( post_password_required() ) {
    return;
  }

  if ( have_comments() ) {

    global $wp_query;
?>

    <section id="reactions">

      <h3><?php _e( 'Reactions', 'omnibus-prime' ); ?></h3>

      <?php
        if ( !empty ( $comments_by_type['comment'] ) ) {
      ?>

          <a class="btn" href="#comments">

            <?php
              echo
                __( 'Comments:', 'omnibus-prime' ) .
                ' <b>' .
                get_comments( array(
                  'status'  => 'approve',
                  'post_id' => get_the_ID(),
                  'type'    => 'comment',
                  'count'   => true
                ) ) .
                '</b>';
            ?>

          </a>

      <?php
        }

        if ( !empty ( $comments_by_type['pingback'] ) ) {
      ?>

        <a class="btn" href="#pingbacks">

          <?php
            echo
              __( 'Pingbacks:', 'omnibus-prime' ) .
              ' <b>' .
              get_comments( array(
                'status'  => 'approve',
                'post_id' => get_the_ID(),
                'type'    => 'pingback',
                'count'   => true
              ) ) .
              '</b>';
          ?>

        </a>

      <?php
        }

        if ( !empty ( $comments_by_type['trackback'] ) ) {
      ?>

          <a class="btn" href="#trackbacks">

            <?php
              echo
                __( 'Trackbacks:', 'omnibus-prime' ) .
                ' <b>' .
                get_comments( array(
                  'status'  => 'approve',
                  'post_id' => get_the_ID(),
                  'type'    => 'trackback',
                  'count'   => true
                ) ) .
                '</b>';
            ?>

          </a>

      <?php
        }

        if ( !empty ( $comments_by_type['comment'] ) ) {
      ?>

        <section id="comments">

          <h4><?php _e( 'Comments: ', 'omnibus-prime' ); ?></h4>

          <ol class="h-feed hfeed p-comments comment-list">
            <?php wp_list_comments( array(
              'avatar_size' => 32,
              'style'       => 'ol',
              'short_ping'  => true,
              'reply_text'  => __( 'Reply', 'omnibus-prime' ),
              'type'        => 'comment',
              'callback'    => 'omnibus_prime_commentlist'
            ) ); ?>
          </ol>

          <div class="comments--pagination">
            <?php paginate_comments_links( array(
              'prev_text' => __( 'Previous', 'omnibus-prime' ),
              'next_text' => __( 'Next', 'omnibus-prime' )
            ) ); ?>
          </div>

        </section>

      <?php
        }

        if ( !empty ( $comments_by_type['pingback'] ) ) {
      ?>

        <section id="pingbacks">

          <h4><?php _e( 'Pingbacks: ', 'omnibus-prime' ); ?></h4>

          <ol class="h-feed hfeed pingback-list">
            <?php wp_list_comments( array(
              'style'    => 'ol',
              'type'     => 'pingback',
              'callback' => 'omnibus_prime_pinglist'
            ) ); ?>
          </ol>

          <div class="comments--pagination">
            <?php paginate_comments_links( array(
              'prev_text' => __( 'Previous', 'omnibus-prime' ),
              'next_text' => __( 'Next', 'omnibus-prime' )
            ) ); ?>
          </div>

        </section>

      <?php
      }

      if ( !empty ( $comments_by_type['trackback'] ) ) {
      ?>

        <section id="trackbacks">

          <h4><?php _e( 'Trackbacks: ', 'omnibus-prime' ); ?></h4>

          <ol class="h-feed hfeed trackback-list">
            <?php wp_list_comments( array(
                'style'    => 'ol',
                'type'     => 'trackback',
                'callback' => 'omnibus_prime_pinglist'
            ) ); ?>
          </ol>

          <div class="comments--pagination">
            <?php paginate_comments_links( array(
              'prev_text' => __( 'Previous', 'omnibus-prime' ),
              'next_text' => __( 'Next', 'omnibus-prime' )
            ) ); ?>
          </div>

        </section>

      <?php } ?>

    </section>

      <?php
    }

    if ( comments_open() ) {

      comment_form( array(

        'fields' => array(
          'author' =>
            '<label
              class="ctrl txt comment-form-author"
              for="author">
              <span><abbr title="' . __( 'Required', 'omnibus-prime' ) . '">*</abbr>' . __( 'Name', 'omnibus-prime' ) . '</span>
              <input
                id="author"
                name="author"
                placeholder="' . __( 'Your name', 'omnibus-prime' ) . '"
                value="' . esc_attr( $commenter['comment_author'] ) . '"
                type="text"
                required>
            </label>',

          'email' =>
            '<label
              class="ctrl txt comment-form-email"
              for="email">
              <span><abbr title="' . __( 'Required', 'omnibus-prime' ) . '">*</abbr>' . __( 'Email', 'omnibus-prime' ) . '</span>
              <input
                id="email"
                name="email"
                placeholder="' . __( 'Your email', 'omnibus-prime' ) . '"
                value="' . esc_attr( $commenter['comment_author_email'] ) . '"
                type="email"
                required>
            </label>',

          'url' =>
            '<label
              class="ctrl txt comment-form-url"
              for="url">
              <span>' . __( 'Website', 'omnibus-prime' ) . '</span>
              <input
                id="url"
                name="url"
                placeholder="' . __( 'Your website', 'omnibus-prime' ) . '"
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
              <span>' . __( 'Save name, email, and website in this browser for the next time I comment.', 'omnibus-prime' ) . '</span>
            </label>'
        ),

        'comment_field' =>
          '<div class="ctrl">
            <label
              class="txta block v comment-form-comment"
              for="comment">
              <span><abbr title="' . __( 'Required', 'omnibus-prime' ) . '">*</abbr>' . __( 'Comment', 'omnibus-prime' ) . '</span>
              <textarea
                id="comment"
                name="comment"
                placeholder="' . __( 'Write your comment here.', 'omnibus-prime' ) . '"
                required></textarea>
            </label>
          </div>',

        'must_log_in' =>
          '<div class="alert info must-log-in" role="alert">
            <p>' .
              __( 'You must be logged in to post a comment.', 'omnibus-prime' ) .
            '</p>
            <a
              class="btn"
              href="' . wp_login_url( get_permalink() ) . '"
             >' .
              __( 'Login', 'omnibus-prime' ) .
            '</a>
          </div>',

        'logged_in_as' =>
          '<p class="logged-in-as">' . sprintf(
            __( '<a href="%1$s" aria-label="%2$s">' . __( 'Logged in as', 'omnibus-prime' ) . ' %3$s</a> <a class="btn" href="%4$s">' . __( 'Log out', 'omnibus-prime' ) . '</a>' ),
            get_edit_user_link(),
            esc_attr( sprintf( __( 'Logged in as %s. Edit your profile.', 'omnibus-prime' ), $user_identity ) ),
            $user_identity,
            wp_logout_url( apply_filters( 'the_permalink', get_permalink( $post_id ), $post_id ) )
          ) . '</p>',

        'comment_notes_before' =>
          '<p class="comment-notes">' .
            __( 'Your email address will not be published.', 'omnibus-prime' ) .
          '</p>',

        'comment_notes_after' =>
          '<p class="form-allowed-tags">' .
            sprintf( __( 'You may use these <abbr title="HyperText Markup Language">HTML</abbr> tags and attributes: %s.', 'omnibus-prime' ), ' <code>' . allowed_tags() . '</code>' ) .
          '</p>',

        'class_form' =>
          'classic',

        'title_reply_before' =>
          '<h3 id="reply-title" class="comment-reply-title">',

        'title_reply_after' =>
          '</h3>',

        'label_submit' =>
          __('Post your comment', 'omnibus-prime' ),

        'submit_button' =>
          '<input id="%2$s" class="btn solid primary %3$s" name="%1$s" value="%4$s" type="submit">',

        'submit_field' =>
          '<div class="ctrl text--right">%1$s %2$s</div>',

        'format' => 'html5'

      ) );

    } else {
  ?>

  <div class="alert warning" role="alert">
    <?php _e( 'Sorry, comments are closed.', 'omnibus-prime' ); ?>
  </div>

<?php } ?>
