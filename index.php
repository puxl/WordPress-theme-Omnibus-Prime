<?php
/*
 * WordPress PUXL Blog classic main template file: index.php
 *
 * @package WordPress PUXL Blog classic
 * @since 1.0
 * @version 1.0
 */
get_header(); ?>

  <div class="grid">

    <main id="main__content" class="h-feed col-xs-12 col-md-8" aria-label="<?php _e( 'Main content', 'wp-puxl-blog-classic' ); ?>" role="main">

      <?php if ( have_posts() ) { ?>

      <?php while ( have_posts() ) { the_post();  ?>

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
              <!--
                Puxl icons 1.0: feather.svg - https://puxl.io/puxl-icons
                Created by @MrKanuel, brought by The Puxl Clan with love from Basque Country
                Puxl icons is licensed under the MIT License (MIT) - Copyright © 2018 Puxl
                https://github.com/puxl/puxl-icons/blob/master/LICENSE
              -->
              <path d="M31.09,0.913C30.484,0.307,29.646,0,28.6,0C25.2,0,19.662,3.336,14.497,8.5 c-0.209,0.209-0.315,0.499-0.289,0.793l0.132,1.521l-0.192-0.253c-0.181-0.238-0.458-0.383-0.757-0.395 c-0.013,0-0.027-0.001-0.04-0.001c-0.284,0-0.556,0.121-0.746,0.333c-3.813,4.268-6.271,8.564-6.574,11.496 c-0.03,0.29,0.074,0.568,0.264,0.775l-5.973,5.494C0.117,28.453,0,28.721,0,29v2c0,0.553,0.448,1,1,1h2 c0.28,0,0.546-0.117,0.736-0.322l5.497-5.976c0.182,0.167,0.418,0.271,0.671,0.271c0.035,0,0.069-0.002,0.104-0.007 c3.405-0.354,8.701-3.676,13.492-8.462c2.88-2.881,5.298-6.011,6.809-8.813c0.258-0.478,0.086-1.074-0.385-1.343l-0.77-0.439 l1.839-0.628c0.305-0.104,0.541-0.349,0.634-0.657C32.428,2.976,31.775,1.601,31.09,0.913z M3,31H1v-2L26,6L3,31z M30.67,5.334 l-3.934,1.343l2.688,1.539c-1.408,2.621-3.71,5.655-6.635,8.581c-4.757,4.752-9.806,7.854-12.888,8.176L26.736,6.677 c0.031-0.034,0.043-0.077,0.07-0.114c0.045-0.065,0.092-0.126,0.123-0.201c0.021-0.056,0.021-0.115,0.021-0.174 C26.979,6.125,27,6.067,27,6c0-0.006-0.004-0.012-0.004-0.019c0-0.029-0.018-0.057-0.021-0.087 c-0.039-0.371-0.27-0.683-0.603-0.819c-0.076-0.031-0.157-0.037-0.237-0.048C26.094,5.021,26.053,5,26.005,5h-0.003 C26.001,5,26.001,5,26,5c-0.01,0-0.02,0-0.029,0c0,0,0,0-0.002,0c-0.033,0.001-0.062,0.019-0.094,0.022 c-0.092,0.012-0.182,0.027-0.268,0.064c-0.012,0.005-0.025,0.003-0.037,0.009c-0.07,0.034-0.139,0.077-0.203,0.129l0,0 c0,0-0.001,0-0.001,0.001c-0.001,0-0.001,0.001-0.003,0.001c-0.014,0.012-0.026,0.023-0.041,0.036l0,0l-9.688,8.913l-8.609,7.921 C7.3,19.434,9.65,15.305,13.35,11.163l2.284,3.012l-0.431-4.97C20.23,4.18,25.585,1,28.6,1c0.756,0,1.362,0.199,1.782,0.619 C31.115,2.354,31.174,3.667,30.67,5.334z"/>
            </svg>
            <span><?php _e( 'Edit post', 'wp-puxl-blog-classic' ); ?></span>
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

                  <a class="p-name fn n u-url url" href="<?php the_author_meta( 'user_url' ); ?>">
                    <span class="p-given-name given-name"><?php the_author_meta( 'first_name' ); ?></span>
                    <?php if ( get_the_author_meta( 'last_name' ) ) { ?>
                    <span class="p-family-name family-name"><?php the_author_meta( 'last_name' ); ?></span><?php } ?></a>

                  <?php if ( get_the_author_meta( 'nickname' ) ) { ?>
                  <span class="p-nickname nickname">@<?php the_author_meta( 'nickname' ); ?></span>
                  <?php } ?>

                </div>
                <div>

                  <time class="dt-published published" datetime="<?php the_time( 'Y-m-d h:i:s' ); ?>">
                    Published <abbr title="<?php the_time( 'jS F Y, H:i:s' ); ?>"><?php echo human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ); ?> ago</abbr>
                  </time>

                  <?php if ( get_the_modified_time() != get_the_time() ) { ?>
                  <time class="dt-updated updated" datetime="<?php the_modified_time( 'Y-m-d h:i:s' ); ?>">
                    Updated <abbr title="<?php the_modified_time( 'jS F Y, H:i:s' ); ?>"><?php echo human_time_diff( get_the_modified_time( 'U' ), current_time( 'timestamp' ) ); ?> ago</abbr>
                  </time>
                  <?php } ?>

                </div>
              </div>
            </div>
            <?php } else { ?>
            <div class="flag">
              <div class="visual">

                <svg class="circle" aria-label="<?php _e( 'Anonymous user picture', 'wp-puxl-blog-classic' ); ?>" viewBox="0 0 32 32" aria-hidden="true">
                  <!--
                    Puxl icons 1.0: user-profile.svg - https://puxl.io/puxl-icons
                    Created by @MrKanuel, brought by The Puxl Clan with love from Basque Country
                    Puxl icons is licensed under the MIT License (MIT) - Copyright © 2018 Puxl
                    https://github.com/puxl/puxl-icons/blob/master/LICENSE
                  -->
                  <path d="M16,8c-4.296,0-7,3.31-7,7.39C9,19.473,11.704,25,16,25c4.294,0,7-5.527,7-9.61C23,11.31,20.294,8,16,8z M16,24c-3.663,0-6-5.1-6-8.61C10,11.63,12.467,9,16,9c3.532,0,6,2.628,6,6.39C22,18.9,19.663,24,16,24z"/>
                  <path d="M16,0C7.164,0,0,7.164,0,16c0,8.837,7.164,16,16,16c8.837,0,16-7.163,16-16C32,7.164,24.837,0,16,0z M16,31c-3.114,0-6.008-0.955-8.408-2.586C9.326,27.624,11.546,27,13,27h6c1.453,0,3.674,0.625,5.408,1.414 C22.008,30.044,19.113,31,16,31z M25.32,27.73C23.229,26.68,20.439,26,19,26h-6c-1.44,0-4.227,0.68-6.32,1.73 C3.224,24.98,1,20.75,1,16C1,7.73,7.73,1,16,1c8.27,0,15,6.73,15,15C31,20.75,28.775,24.98,25.32,27.73z"/>
                </svg>

              </div>
              <div class="textual">
                <div class="p-author author">

                  <?php _e( 'Anonymous', 'wp-puxl-blog-classic' ); ?>

                </div>
                <div>

                  <time datetime="<?php the_time( 'Y-m-d h:i:s' ); ?>">
                    Published <abbr title="<?php the_time( 'jS F Y, H:i:s' ); ?>"><?php echo human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ); ?> ago</abbr>
                  </time>

                  <?php if ( get_the_modified_time() != get_the_time() ) { ?>
                  <time datetime="<?php the_modified_time( 'Y-m-d h:i:s' ); ?>">
                    Updated <abbr title="<?php the_modified_time( 'jS F Y, H:i:s' ); ?>"><?php echo human_time_diff( get_the_modified_time( 'U' ), current_time( 'timestamp' ) ); ?> ago</abbr>
                  </time>
                  <?php } ?>

                </div>
              </div>
            </div>
            <?php } ?>

            <div class="comments">
              <a href="<?php the_permalink() ?>#comments">
                <?php comments_number( __( '0 Comments', 'wp-puxl-blog-classic' ), __( '1 Comment', 'wp-puxl-blog-classic' ), __( '% Comments', 'wp-puxl-blog-classic' ) ); ?></a>
            </div>

          </div>

        </header>

        <?php if ( ( $wp_query -> post_count ) > 1 ) { ?>

        <div class="e-content entry-content">
          <?php the_post_thumbnail(); ?>
          <?php the_content(); ?>
        </div>

        <?php } else { ?>

        <div class="p-summary entry-summary">
          <?php the_post_thumbnail(); ?>
          <?php the_excerpt(); ?>
        </div>

        <?php } ?>

      </article>

      <?php } ?>

      <?php if ( paginate_links() ) { ?>
      <nav class="pagination" aria-label="<?php _e( 'Pagination Navigation', 'wp-puxl-blog-classic' ); ?>" role="navigation">
        <ul>
          <li>
            <?php if ( get_next_posts_link() ) { ?>
            <a class="btn-icn-txt" href="<?php echo get_next_posts_page_link(); ?>">
              <?php if ( is_rtl() ) { ?>
              <svg viewBox="0 0 32 32" aria-hidden="true">
                <!--
                  Puxl icons 1.0: arrow-e.svg - https://puxl.io/puxl-icons
                  Created by @MrKanuel, brought by The Puxl Clan with love from Basque Country
                  Puxl icons is licensed under the MIT License (MIT) - Copyright © 2018 Puxl
                  https://github.com/puxl/puxl-icons/blob/master/LICENSE
                -->
                <path d="M25,16c0,0.512-0.195,1.023-0.586,1.414l-14,14c-0.781,0.781-2.047,0.781-2.828,0 c-0.781-0.78-0.781-2.048,0-2.828L20.172,16L7.586,3.414c-0.781-0.781-0.781-2.047,0-2.828c0.781-0.781,2.047-0.781,2.828,0l14,14 C24.805,14.977,25,15.488,25,16z"/>
              </svg>
              <span><?php _e( 'Older posts', 'wp-puxl-blog-classic' ); ?></span>
              <?php } else { ?>
              <svg viewBox="0 0 32 32" aria-hidden="true">
                <!--
                  Puxl icons 1.0: arrow-w.svg - https://puxl.io/puxl-icons
                  Created by @MrKanuel, brought by The Puxl Clan with love from Basque Country
                  Puxl icons is licensed under the MIT License (MIT) - Copyright © 2018 Puxl
                  https://github.com/puxl/puxl-icons/blob/master/LICENSE
                -->
                <path d="M7,16c0-0.512,0.195-1.024,0.586-1.414l14-14c0.781-0.781,2.047-0.781,2.828,0 c0.781,0.78,0.781,2.048,0,2.828L11.828,16l12.586,12.586c0.781,0.781,0.781,2.047,0,2.828s-2.047,0.781-2.828,0l-14-14 C7.195,17.023,7,16.512,7,16z"/>
              </svg>
              <span><?php _e( 'Older posts', 'wp-puxl-blog-classic' ); ?></span>
              <?php } ?>
            </a>
            <?php } ?>
          </li>

          <li>
            <?php if ( get_previous_posts_link() ) { ?>
            <a class="btn-icn-txt" href="<?php echo get_previous_posts_page_link(); ?>">
              <?php if ( is_rtl() ) { ?>
              <span><?php _e( 'Newer posts', 'wp-puxl-blog-classic' ); ?></span>
              <svg viewBox="0 0 32 32" aria-hidden="true">
                <!--
                  Puxl icons 1.0: arrow-w.svg - https://puxl.io/puxl-icons
                  Created by @MrKanuel, brought by The Puxl Clan with love from Basque Country
                  Puxl icons is licensed under the MIT License (MIT) - Copyright © 2018 Puxl
                  https://github.com/puxl/puxl-icons/blob/master/LICENSE
                -->
                <path d="M7,16c0-0.512,0.195-1.024,0.586-1.414l14-14c0.781-0.781,2.047-0.781,2.828,0 c0.781,0.78,0.781,2.048,0,2.828L11.828,16l12.586,12.586c0.781,0.781,0.781,2.047,0,2.828s-2.047,0.781-2.828,0l-14-14 C7.195,17.023,7,16.512,7,16z"/>
              </svg>
              <?php } else { ?>
              <span><?php _e( 'Newer posts', 'wp-puxl-blog-classic' ); ?></span>
              <svg viewBox="0 0 32 32" aria-hidden="true">
                <!--
                  Puxl icons 1.0: arrow-e.svg - https://puxl.io/puxl-icons
                  Created by @MrKanuel, brought by The Puxl Clan with love from Basque Country
                  Puxl icons is licensed under the MIT License (MIT) - Copyright © 2018 Puxl
                  https://github.com/puxl/puxl-icons/blob/master/LICENSE
                -->
                <path d="M25,16c0,0.512-0.195,1.023-0.586,1.414l-14,14c-0.781,0.781-2.047,0.781-2.828,0 c-0.781-0.78-0.781-2.048,0-2.828L20.172,16L7.586,3.414c-0.781-0.781-0.781-2.047,0-2.828c0.781-0.781,2.047-0.781,2.828,0l14,14 C24.805,14.977,25,15.488,25,16z"/>
              </svg>
              <?php } ?>
            </a>
            <?php } ?>
          </li>
        </ul>
      </nav>
      <?php } ?>

      <?php } else { ?>

      <div class="alert info" role="alert">
        <?php _e( 'Sorry, no posts matched your criteria.', 'wp-puxl-blog-classic' ); ?>
      </div>

      <?php } ?>

    </main>

    <?php if ( function_exists( 'dynamic_sidebar' ) && is_active_sidebar( 'widgets-1' ) ) { ?>
    <div id="widgets-1" class="col-xs-10 col-xs-offset-1 col-md-4 col-md-offset-0" aria-label="<?php _e( 'Main widgets area', 'wp-puxl-blog-classic' ); ?>" role="complementary">

      <?php dynamic_sidebar( 'widgets-1' ); ?>

    </div>
    <?php } ?>

  </div>

<?php get_footer(); ?>
