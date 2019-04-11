<?php
/*
 * Omnibus Prime article template part: article.php
 *
 * @package Omnibus Prime
 * @since 1.0
 * @version 1.0
 */
?>

  <article id="post__<?php the_ID(); ?>" <?php post_class( 'h-entry hentry' ) ?> aria-labelledby="post__<?php the_ID(); ?>--heading">

    <header>

      <h2 id="post__<?php the_ID(); ?>--heading" class="p-name entry-title">
        <a class="u-url url" href="<?php the_permalink() ?>">
          <?php the_title(); ?>
        </a>
      </h2>

      <?php if ( is_user_logged_in() ) { ?>
        <a class="edit btn-icn-txt" href="<?php echo get_edit_post_link(); ?>">
          <svg viewBox="0 0 32 32" aria-hidden="true">
            <path d="M15.013,8.505c-0.218,0.218-0.323,0.525-0.286,0.831l0.188,1.493l-0.353-0.353c-0.358-0.358-1.016-0.444-1.453,0.042c-4.078,4.566-6.515,9.168-6.587,12.043c-3.572,3.286-6.226,5.729-6.229,5.731C0.105,28.479,0,28.733,0,28.999v2c0,0.552,0.447,1,1,1L3,32c0.265-0.001,0.52-0.106,0.707-0.294c0.003-0.003,2.444-2.656,5.73-6.227c3.312-0.066,8.885-3.313,14.061-8.49c2.881-2.879,5.205-5.89,6.724-8.704c0.269-0.499,0.073-1.15-0.48-1.392l-0.354-0.155l1.467-0.557c0.257-0.098,0.483-0.307,0.588-0.604c0.797-2.268,0.74-3.944-0.166-4.85C28.937-1.612,21.642,1.876,15.013,8.505z M13.855,11.183l2.412,2.412c-2.831,2.604-5.914,5.44-8.613,7.924C8.169,19.082,10.154,15.329,13.855,11.183z M3,30.999H1v-2l25-23L3,30.999z M30.498,5.246l-3.756,1.429l2.6,1.135c-1.329,2.464-3.483,5.407-6.551,8.473c-4.911,4.91-9.497,7.475-12.315,8.067c6.794-7.385,16.26-17.673,16.26-17.673c0.362-0.395,0.351-1.005-0.028-1.384c-0.38-0.379-0.99-0.392-1.385-0.029c0,0-4.141,3.81-9.054,8.33L15.72,9.212c7.009-7.009,13.373-9.254,14.848-7.777C31.155,2.021,31.153,3.381,30.498,5.246z"/>
          </svg>
          <span><?php _e( 'Edit post', 'omnibus-prime' ); ?></span>
        </a>
      <?php } ?>

      <div class="meta">

        <?php if ( get_the_author_meta( 'first_name' ) ) { ?>

          <div class="h-card vcard flag">
            <div class="visual">

              <img class="u-photo photo circle" alt="@<?php the_author_meta( 'nickname' ); ?>" src="<?php echo get_avatar_url( get_the_author_meta( 'email' ) ); ?>">

            </div>
            <div class="textual">

              <div class="p-author author">
                <?php if ( get_the_author_meta( 'user_url' ) ) { ?>

                  <a class="p-name fn n u-url url" href="<?php echo get_the_author_meta( 'user_url' ); ?>">
                    <span class="p-given-name given-name"><?php the_author_meta( 'first_name' ); ?></span>
                    <?php if ( get_the_author_meta( 'last_name' ) ) { ?>
                      <span class="p-family-name family-name"><?php the_author_meta( 'last_name' ); ?></span><?php } ?></a>

                    <?php if ( get_the_author_meta( 'nickname' ) ) { ?>
                      <span class="p-nickname nickname">@<?php the_author_meta( 'nickname' ); ?></span>
                    <?php } ?>

                <?php } else { ?>

                  <span class="p-name fn n">
                    <span class="p-given-name given-name"><?php the_author_meta( 'first_name' ); ?></span>
                    <?php if ( get_the_author_meta( 'last_name' ) ) { ?>
                    <span class="p-family-name family-name"><?php the_author_meta( 'last_name' ); ?></span><?php } ?></span>

                    <?php if ( get_the_author_meta( 'nickname' ) ) { ?>
                      <span class="p-nickname nickname">@<?php the_author_meta( 'nickname' ); ?></span>
                    <?php } ?>

                <?php } ?>
              </div>

              <div>

                <?php if ( get_the_modified_time() != get_the_time() ) { ?>
                  <time datetime="<?php the_modified_time( 'Y-m-d h:i:s' ); ?>">
                    <?php _e( 'Updated ', 'omnibus-prime' ) ?><abbr title="<?php the_modified_time( 'jS F Y, H:i:s' ); ?>"><?php echo human_time_diff( get_the_modified_time( 'U' ), current_time( 'timestamp' ) ); ?><?php _e( ' ago.', 'omnibus-prime' ) ?></abbr>
                  </time>
                  <span class="dt-updated updated sr"><?php the_modified_time( 'Y/m/d - H:i:s' ); ?></span>
                <?php } ?>

                <time datetime="<?php the_time( 'Y-m-d h:i:s' ); ?>">
                  <?php _e( 'Published ', 'omnibus-prime' ) ?><abbr title="<?php the_time( 'jS F Y, H:i:s' ); ?>"><?php echo human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ); ?><?php _e( ' ago.', 'omnibus-prime' ) ?></abbr>
                  <span class="dt-published published sr"><?php the_time( 'Y/m/d - H:i:s' ); ?></span>
                </time>

              </div>

            </div>
          </div>

        <?php } else { ?>

          <div class="h-card vcard flag">
            <div class="visual">

              <svg class="circle" aria-label="<?php _e( 'Anonymous user picture', 'omnibus-prime' ); ?>" viewBox="0 0 32 32" aria-hidden="true">
                <path d="M16,6c-4.208,0-7.354,4.308-7.354,8.159c0,4.179,3.294,10.581,7.354,10.581c4.061,0,7.354-6.402,7.354-10.581C23.354,10.308,20.209,6,16,6z M16,23.74c-3.384,0-6.354-5.973-6.354-9.581C9.646,10.78,12.364,7,16,7c3.637,0,6.354,3.78,6.354,7.159C22.354,17.77,19.384,23.74,16,23.74z"/>
                <path d="M16,0C7.178,0,0,7.178,0,16s7.178,16,16,16c8.822,0,16-7.178,16-16S24.822,0,16,0z M6.453,27.561c1.574-0.716,3.822-1.207,6.524-1.207h6.046c2.701,0,4.949,0.491,6.521,1.207C22.952,29.708,19.624,31,16,31S9.048,29.708,6.453,27.561z M26.334,26.845c-1.809-0.92-4.389-1.491-7.311-1.491h-6.047c-2.921,0-5.501,0.572-7.31,1.492C2.798,24.111,1,20.266,1,16C1,7.729,7.729,1,16,1c8.271,0,15,6.729,15,15C31,20.266,29.202,24.111,26.334,26.845z"/>
              </svg>

            </div>
            <div class="textual">

              <div class="p-author author">

                <?php _e( 'Anonymous', 'omnibus-prime' ); ?>

              </div>

              <div>

                <?php if ( get_the_modified_time() != get_the_time() ) { ?>
                  <time datetime="<?php the_modified_time( 'Y-m-d h:i:s' ); ?>">
                    <?php _e( 'Updated ', 'omnibus-prime' ) ?><abbr title="<?php the_modified_time( 'jS F Y, H:i:s' ); ?>"><?php echo human_time_diff( get_the_modified_time( 'U' ), current_time( 'timestamp' ) ); ?><?php _e( ' ago.', 'omnibus-prime' ) ?></abbr>
                  </time>
                  <span class="dt-updated updated sr"><?php the_modified_time( 'Y/m/d - H:i:s' ); ?></span>
                <?php } ?>

                <time datetime="<?php the_time( 'Y-m-d h:i:s' ); ?>">
                  <?php _e( 'Published ', 'omnibus-prime' ) ?><abbr title="<?php the_time( 'jS F Y, H:i:s' ); ?>"><?php echo human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ); ?><?php _e( ' ago.', 'omnibus-prime' ) ?></abbr>
                  <span class="dt-published published sr"><?php the_time( 'Y/m/d - H:i:s' ); ?></span>
                </time>

              </div>

            </div>

          </div>

        <?php } ?>

        <div class="reactions--count">
          <a href="<?php the_permalink() ?>#reactions">
            <?php comments_number( __( '0 Reactions', 'omnibus-prime' ), __( '1 Reaction', 'omnibus-prime' ), __( '% Reactions', 'omnibus-prime' ) ); ?></a>
        </div>

      </div>

    </header>

    <?php if ( is_single() ) { ?>

      <div class="e-content entry-content">

        <?php
          the_post_thumbnail();

          the_content();

          wp_link_pages( array(
            before         => '<div class="post--pagination">',
            after          => '</div>',
            next_or_number => 'number',
            pagelink       => __( 'Page', 'omnibus-prime' ) . ' %'
          ) );
        ?>

      </div>

      <footer>

        <?php
          if ( has_category() ) {
        ?>

          <section class="category-list">

            <h3><?php _e( 'Category', 'omnibus-prime' ); ?></h3>

            <?php the_category(); ?>

          </section>

        <?php
          }

          if ( has_tag() ) {
        ?>

          <section class="tag-list">

            <h3><?php _e( 'Tags', 'omnibus-prime' ); ?></h3>

            <?php the_tags( '<ul><li>', '</li><li>', '</li></ul>' ); ?>

          </section>

        <?php
          }

          if ( get_the_post_navigation() ) {

            $previous_post = get_adjacent_post( false, '', true );
            $next_post     = get_adjacent_post( false, '', false );
        ?>

          <nav class="pagination" aria-label="<?php _e( 'Posts navigation', 'omnibus-prime' ); ?>" role="navigation">

            <ul>
              <li>

                <?php if ( $previous_post ) { ?>

                  <a class="btn-icn-txt" href="<?php echo get_permalink( $previous_post ); ?>">

                    <?php if ( is_rtl() ) { ?>

                      <svg viewBox="0 0 32 32" aria-hidden="true">
                        <path d="M24.414,17.414l-13.999,14c-0.781,0.781-2.048,0.781-2.828,0c-0.781-0.781-0.781-2.048,0-2.828L20.172,16L7.586,3.414c-0.781-0.781-0.781-2.047,0-2.828c0.781-0.781,2.047-0.781,2.828,0l14,14C25.195,15.367,25.195,16.633,24.414,17.414z"/>
                      </svg>
                      <span><?php _e( 'Previous', 'omnibus-prime' ); ?></span>

                    <?php } else { ?>

                      <svg viewBox="0 0 32 32" aria-hidden="true">
                        <path d="M7.586,14.586l14-14c0.779-0.781,2.047-0.781,2.828,0c0.781,0.781,0.781,2.048,0,2.828L11.828,16l12.586,12.586c0.781,0.781,0.781,2.047,0,2.828s-2.047,0.781-2.828,0l-14-14C6.805,16.633,6.805,15.367,7.586,14.586z"/>
                      </svg>
                      <span><?php _e( 'Previous', 'omnibus-prime' ); ?></span>

                    <?php } ?>

                  </a>

                  <div>
                    <?php echo get_the_title( $previous_post ); ?>
                  </div>

                <?php } ?>

              </li>
              <li>

                <?php if ( $next_post ) { ?>

                  <a class="btn-icn-txt" href="<?php echo get_permalink( $next_post ); ?>">

                    <?php if ( is_rtl() ) { ?>

                      <span><?php _e( 'Next', 'omnibus-prime' ); ?></span>
                      <svg viewBox="0 0 32 32" aria-hidden="true">
                        <path d="M7.586,14.586l14-14c0.779-0.781,2.047-0.781,2.828,0c0.781,0.781,0.781,2.048,0,2.828L11.828,16l12.586,12.586c0.781,0.781,0.781,2.047,0,2.828s-2.047,0.781-2.828,0l-14-14C6.805,16.633,6.805,15.367,7.586,14.586z"/>
                      </svg>

                    <?php } else { ?>

                      <span><?php _e( 'Next', 'omnibus-prime' ); ?></span>
                      <svg viewBox="0 0 32 32" aria-hidden="true">
                        <path d="M24.414,17.414l-13.999,14c-0.781,0.781-2.048,0.781-2.828,0c-0.781-0.781-0.781-2.048,0-2.828L20.172,16L7.586,3.414c-0.781-0.781-0.781-2.047,0-2.828c0.781-0.781,2.047-0.781,2.828,0l14,14C25.195,15.367,25.195,16.633,24.414,17.414z"/>
                      </svg>

                    <?php } ?>

                  </a>

                  <div>
                    <?php echo get_the_title( $next_post ); ?>
                  </div>

                <?php } ?>

              </li>
            </ul>

          </nav>

        <?php
          }

          if ( comments_open() || get_comments_number() ) {
            comments_template('/comments.php', true);
          }
        ?>

      </footer>

    <?php } else { ?>

      <div class="p-summary entry-summary">

        <?php the_post_thumbnail(); ?>

        <?php the_excerpt(); ?>

      </div>

    <?php } ?>

  </article>
