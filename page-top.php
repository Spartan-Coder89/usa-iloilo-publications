<?php get_header(); ?>

<main>
  <!------------------- NEWS HIGHLIGHT SECTION ------------------->

  <?php
  $news_highlight = get_posts([
    'numberposts' => 1,
    'post_type' => 'usa_pub_news',
    'meta_key'     => '_news_highlight',
    'meta_value'   => '1',
    'meta_compare' => '='
  ]);

  if ( !empty( $news_highlight ) ): ?>

    <div id="news_highlight" style="background-image: url( <?php echo get_the_post_thumbnail_url( $news_highlight[0]->ID ) ?> );">
      <figure class="featured_img" style="background-image: url( <?php echo get_the_post_thumbnail_url( $news_highlight[0]->ID ) ?> );">
        <figcaption><?php echo get_post_meta( $news_highlight[0]->ID, '_img_caption', true ); ?></figcaption>
      </figure>
      <article class="news max_width">
        <h2><?php echo $news_highlight[0]->post_title; ?></h2>
        <p><?php echo $news_highlight[0]->post_excerpt; ?></p>
        <a href="<?php echo get_the_permalink( $news_highlight[0]->ID ); ?>" class="read_more">
          <span>Read more</span>
          <svg width="44" height="15" viewBox="0 0 44 15" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1 6.5C0.447715 6.5 0 6.94772 0 7.5C0 8.05228 0.447715 8.5 1 8.5V6.5ZM43.7071 8.20711C44.0976 7.81658 44.0976 7.18342 43.7071 6.79289L37.3431 0.428932C36.9526 0.0384078 36.3195 0.0384078 35.9289 0.428932C35.5384 0.819457 35.5384 1.45262 35.9289 1.84315L41.5858 7.5L35.9289 13.1569C35.5384 13.5474 35.5384 14.1805 35.9289 14.5711C36.3195 14.9616 36.9526 14.9616 37.3431 14.5711L43.7071 8.20711ZM1 8.5H43V6.5H1V8.5Z" fill="white"/>
          </svg>
        </a>
      </article>
    </div>

  <?php endif; ?>


  <!------------------- LATEST NEWS SECTION ------------------->

  <?php 
  $latest_news = get_posts([
    'numberposts' => 3,
    'post_type' => 'usa_pub_news',
    'orderby' => 'date',
    'meta_key'     => '_news_highlight',
    'meta_value'   => '0',
    'meta_compare' => '='
  ]);

  if ( !empty( $latest_news ) ) : 
  
    if ( isset( $latest_news[0] ) ) {

      $latest_news_left_img_creds = get_post_meta( $latest_news[0]->ID, '_img_copyright', true );
      $latest_news_left_img_caption = get_post_meta( $latest_news[0]->ID, '_img_caption', true );
      $latest_news_left_permalink = get_the_permalink( $latest_news[0]->ID );
      $latest_news_left_post_thumbnail = get_the_post_thumbnail_url( $latest_news[0]->ID );

      $latest_news_left_category = get_the_terms( $latest_news[0]->ID, 'usa_tax_news_cat' );
      if ( !empty( $latest_news_left_category ) ) {

        $latest_news_left_category_name = $latest_news_left_category[0]->name;
        $latest_news_left_category_color = get_term_meta( $latest_news_left_category[0]->term_id, '_term_meta_news_cat', true );
      
      } else {
        $latest_news_left_category_name = '';
        $latest_news_left_category_color = '';
      }

      $latest_news_left_published_date = get_the_date( 'F d, Y', $latest_news[0]->ID );
      $latest_news_left_title = $latest_news[0]->post_title;
      $latest_news_left_excerpt = get_the_excerpt( $latest_news[0]->ID );
    }

    if ( isset( $latest_news[1] ) ) {

      $latest_news_right_top_img_creds = get_post_meta( $latest_news[1]->ID, '_img_copyright', true );
      $latest_news_right_top_img_caption = get_post_meta( $latest_news[1]->ID, '_img_caption', true );
      $latest_news_right_top_permalink = get_the_permalink( $latest_news[1]->ID );
      $latest_news_right_top_post_thumbnail = get_the_post_thumbnail_url( $latest_news[1]->ID );

      $latest_news_right_top_category = get_the_terms( $latest_news[1]->ID, 'usa_tax_news_cat' );
      if ( !empty( $latest_news_right_top_category ) ) {

        $latest_news_right_top_category_name = $latest_news_right_top_category[0]->name;
        $latest_news_right_top_category_color = get_term_meta( $latest_news_right_top_category[0]->term_id, '_term_meta_news_cat', true ); 
      
      } else {
        $latest_news_right_top_category_name = '';
        $latest_news_right_top_category_color = '';
      }

      $latest_news_right_top_published_date = get_the_date( 'F d, Y', $latest_news[1]->ID );
      $latest_news_right_top_title = $latest_news[1]->post_title;
      $latest_news_right_top_excerpt = get_the_excerpt( $latest_news[1]->ID );
    }

    if ( isset( $latest_news[2] ) ) {

      $latest_news_right_bottom_img_creds = get_post_meta( $latest_news[2]->ID, '_img_copyright', true );
      $latest_news_right_bottom_img_caption = get_post_meta( $latest_news[2]->ID, '_img_caption', true );
      $latest_news_right_bottom_permalink = get_the_permalink( $latest_news[2]->ID );
      $latest_news_right_bottom_post_thumbnail = get_the_post_thumbnail_url( $latest_news[2]->ID );

      $latest_news_right_bottom_category = get_the_terms( $latest_news[2]->ID, 'usa_tax_news_cat' );
      if ( !empty( $latest_news_right_bottom_category ) ) {

        $latest_news_right_bottom_category_name = $latest_news_right_bottom_category[0]->name;
        $latest_news_right_bottom_category_color = get_term_meta( $latest_news_right_bottom_category[0]->term_id, '_term_meta_news_cat', true );
      
      } else {
        $latest_news_right_bottom_category_name = '';
        $latest_news_right_bottom_category_color = '';
      }
      
      $latest_news_right_bottom_published_date = get_the_date( 'F d, Y', $latest_news[2]->ID );
      $latest_news_right_bottom_title = $latest_news[2]->post_title;
      $latest_news_right_bottom_excerpt = get_the_excerpt( $latest_news[2]->ID );
    }
    ?>

    <section id="latest_news" class="max_width home_sections">
      <h2 class="section_title">Latest News</h2>
      <a href="<?php echo get_site_url() .'/news' ?>" class="see_more_yellow">
        <span>See More</span>
        <svg width="44" height="16" viewBox="0 0 44 16" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M1 7C0.447715 7 0 7.44772 0 8C0 8.55228 0.447715 9 1 9V7ZM43.7071 8.70711C44.0976 8.31658 44.0976 7.68342 43.7071 7.29289L37.3431 0.928932C36.9526 0.538408 36.3195 0.538408 35.9289 0.928932C35.5384 1.31946 35.5384 1.95262 35.9289 2.34315L41.5858 8L35.9289 13.6569C35.5384 14.0474 35.5384 14.6805 35.9289 15.0711C36.3195 15.4616 36.9526 15.4616 37.3431 15.0711L43.7071 8.70711ZM1 9H43V7H1V9Z" fill="#E1A700"/>
        </svg>
      </a>
      <div class="wrap">

        <a class="left" href="<?php echo $latest_news_left_permalink; ?>">
          <article class="vertical_card">
            <figure class="post_thumbnail" style="background-image: url(<?php echo $latest_news_left_post_thumbnail; ?>);">
              <?php echo !empty( $latest_news_left_img_creds ) ? '<div class="img_creds">'. $latest_news_left_img_creds .'</div>' : ''; ?>
              <figcaption><?php echo $latest_news_left_img_caption; ?></figcaption>
            </figure>
            <p class="taxonomy text_cyan" style="color: <?php echo $latest_news_left_category_color; ?>">
              <?php echo $latest_news_left_category_name; ?>
            </p>
            <h3 class="post_title"><?php echo $latest_news_left_title; ?></h3>
            <p class="after_post_title">
              <?php echo get_authors( $latest_news[0]->ID ); ?> • <?php echo $latest_news_left_published_date; ?>
            </p>
            <p class="paragraph">
              <?php echo $latest_news_left_excerpt; ?>
            </p>
          </article>
        </a>

        <div class="right">

          <?php if ( isset( $latest_news[1] ) ) : ?>
          <a href="<?php echo $latest_news_right_top_permalink; ?>">
            <div class="horizontal_card">
              <figure class="post_thumbnail" style="background-image: url(<?php echo $latest_news_right_top_post_thumbnail; ?>)">
                <?php echo !empty( $latest_news_right_top_img_creds ) ? '<div class="img_creds">'. $latest_news_right_top_img_creds .'</div>' : ''; ?>
                <figcaption><?php echo $latest_news_right_top_img_caption; ?></figcaption>
              </figure>
              <article class="content">
                <p class="taxonomy text_red" style="color: <?php echo $latest_news_right_top_category_color; ?>">
                  <?php echo $latest_news_right_top_category_name; ?>
                </p>
                <h3 class="post_title"><?php echo $latest_news_right_top_title; ?></h3>
                <p class="after_post_title">
                  <?php echo get_authors( $latest_news[1]->ID ); ?> • <?php echo $latest_news_right_top_published_date; ?>
                </p>
                <p class="paragraph">
                  <?php echo $latest_news_right_top_excerpt; ?>
                </p>
              </article>
            </div>
          </a>
          <?php endif; ?>

          <?php if ( $latest_news[2] ) : ?>
          <a href="<?php echo $latest_news_right_bottom_permalink; ?>">
            <div class="horizontal_card">
              <figure class="post_thumbnail" style="background-image: url(<?php echo $latest_news_right_bottom_post_thumbnail;?>);">
                <?php echo !empty( $latest_news_right_bottom_img_creds ) ? '<div class="img_creds">'. $latest_news_right_bottom_img_creds .'</div>' : ''; ?>
                <figcaption><?php echo $latest_news_right_bottom_img_caption; ?></figcaption>
              </figure>
              <article class="content">
                <p class="taxonomy text_red" style="color: <?php echo $latest_news_right_bottom_category_color; ?>">
                  <?php echo $latest_news_right_bottom_category_name; ?>
                </p>
                <h3 class="post_title"><?php echo $latest_news_right_bottom_title; ?></h3>
                <p class="after_post_title">
                  <?php echo get_authors( $latest_news[2]->ID ); ?> • <?php echo $latest_news_right_bottom_published_date; ?>
                </p>
                <p class="paragraph">
                  <?php echo $latest_news_right_bottom_excerpt; ?>
                </p>
              </article>
            </div>
          </a>
          <?php endif; ?>

        </div>
      </div>
    </section>

  <?php endif; ?>
  

  <!------------------- LITERARY SECTION ------------------->

  <?php 
  $literary_posts = get_posts([
    'numberposts' => 1,
    'post_type' => 'usa_pub_literary'
  ]);
  
  if ( !empty( $literary_posts ) ): ?>

    <section id="literary" class="max_width home_sections">
      <h2 class="section_title">Literary</h2>
      <a href="<?php echo get_site_url() .'/literary'; ?>" class="see_more_yellow">
        <span>See More</span>
        <svg width="44" height="16" viewBox="0 0 44 16" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M1 7C0.447715 7 0 7.44772 0 8C0 8.55228 0.447715 9 1 9V7ZM43.7071 8.70711C44.0976 8.31658 44.0976 7.68342 43.7071 7.29289L37.3431 0.928932C36.9526 0.538408 36.3195 0.538408 35.9289 0.928932C35.5384 1.31946 35.5384 1.95262 35.9289 2.34315L41.5858 8L35.9289 13.6569C35.5384 14.0474 35.5384 14.6805 35.9289 15.0711C36.3195 15.4616 36.9526 15.4616 37.3431 15.0711L43.7071 8.70711ZM1 9H43V7H1V9Z" fill="#E1A700"/>
        </svg>
      </a>
      <div class="wrap">
        <?php 
        $literary_query = new WP_Query([
          'posts_per_page' => 3,
          'post_type' => 'usa_pub_literary',
          'orderby' => 'date',
        ]); 

        if ( $literary_query->have_posts() ) {

          while( $literary_query->have_posts() ) {

            $literary_query->the_post(); ?>

            <a href="<?php echo get_the_permalink(); ?>">
              <article class="vertical_card">
                <figure class="post_thumbnail" style="background-image: url(<?php echo get_the_post_thumbnail_url() ?>)">
                  <?php 
                    $literary_img_copyright = get_post_meta( get_the_ID(), '_img_copyright', true ); 
                    echo !empty( $literary_img_copyright ) ? '<div class="img_creds">'. $literary_img_copyright .'</div>' : '';
                  ?>
                  <figcaption><?php echo get_post_meta( get_the_ID(), '_img_caption', true ); ?></figcaption>
                </figure>
                <h3 class="post_title"><?php echo get_the_title(); ?></h3>
                <p class="after_post_title">
                <?php echo get_authors( get_the_ID() ); ?> • <?php echo get_the_date(); ?>
                </p>
              </article>
            </a>

            <?php
            $literary_authors[] = '';
          }

          wp_reset_postdata();
        }
        ?>
      </div>
    </section>

  <?php endif; ?>


  <!------------------- OPINION SECTION ------------------->

  <?php 
  $opinion_posts = get_posts([
    'numberposts' => 1,
    'post_type' => 'usa_pub_opinion'
  ]);
  
  if ( !empty( $opinion_posts ) ): ?>

    <section id="opinion" class="max_width home_sections">
      <h2 class="section_title">Opinion</h2>
      <a href="<?php echo get_site_url() .'/opinion'; ?>" class="see_more_yellow">
        <span>See More</span>
        <svg width="44" height="16" viewBox="0 0 44 16" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M1 7C0.447715 7 0 7.44772 0 8C0 8.55228 0.447715 9 1 9V7ZM43.7071 8.70711C44.0976 8.31658 44.0976 7.68342 43.7071 7.29289L37.3431 0.928932C36.9526 0.538408 36.3195 0.538408 35.9289 0.928932C35.5384 1.31946 35.5384 1.95262 35.9289 2.34315L41.5858 8L35.9289 13.6569C35.5384 14.0474 35.5384 14.6805 35.9289 15.0711C36.3195 15.4616 36.9526 15.4616 37.3431 15.0711L43.7071 8.70711ZM1 9H43V7H1V9Z" fill="#E1A700"/>
        </svg>
      </a>
      <div class="wrap">
        <?php
        $opinion_query = new WP_Query([
          'posts_per_page' => 3,
          'post_type' => 'usa_pub_opinion',
          'orderby' => 'date',
        ]); 

        if ( $opinion_query->have_posts() ) {

          while( $opinion_query->have_posts() ) {

            $opinion_query->the_post(); ?>
            
            <a href="<?php echo get_the_permalink(); ?>">
              <article class="vertical_card">
                <figure class="post_thumbnail" style="background-image: url(<?php echo get_the_post_thumbnail_url() ?>)">
                  <?php 
                    $opinion_img_copyright = get_post_meta( get_the_ID(), '_img_copyright', true ); 
                    echo !empty( $opinion_img_copyright ) ? '<div class="img_creds">'. $opinion_img_copyright .'</div>' : '';
                  ?>
                  <figcaption><?php echo get_post_meta( get_the_ID(), '_img_caption', true ); ?></figcaption>
                </figure>
                <h3 class="post_title"><?php echo get_the_title(); ?></h3>
                <p class="after_post_title"><?php echo get_authors_with_courses( get_the_ID() ); ?></p>
                <p class="paragraph"><?php echo get_the_excerpt(); ?></p>
              </article>
            </a>
          
          <?php
          }

          wp_reset_postdata();
        }
        ?>
      </div>
    </section>

  <?php endif; ?>

  <!------------------- GRAPHICS SECTION ------------------->

  <?php 
  $graphics_posts = get_posts([
    'numberposts' => -1,
    'post_type' => 'usa_pub_graphics',
    'orderby' => 'date'
  ]);

  $graphics_carousel = count( $graphics_posts ) >= 4 ? 'carousel' : 'uncarousel';
  
  if ( !empty( $graphics_posts ) ): ?>

    <div id="graphics">
      <section class="max_width">
        <h2 class="section_title">Graphics</h2>
        <a href="<?php echo get_site_url() .'/graphics'; ?>" class="see_more_yellow">
          <span>See More</span>
          <svg width="44" height="16" viewBox="0 0 44 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1 7C0.447715 7 0 7.44772 0 8C0 8.55228 0.447715 9 1 9V7ZM43.7071 8.70711C44.0976 8.31658 44.0976 7.68342 43.7071 7.29289L37.3431 0.928932C36.9526 0.538408 36.3195 0.538408 35.9289 0.928932C35.5384 1.31946 35.5384 1.95262 35.9289 2.34315L41.5858 8L35.9289 13.6569C35.5384 14.0474 35.5384 14.6805 35.9289 15.0711C36.3195 15.4616 36.9526 15.4616 37.3431 15.0711L43.7071 8.70711ZM1 9H43V7H1V9Z" fill="#E1A700"/>
          </svg>
        </a>
      </section>
      <div id="<?php echo $graphics_carousel; ?>">
        <?php 
        $graphics_query = new WP_Query([
          'posts_per_page' => 4,
          'post_type' => 'usa_pub_graphics',
          'orderby' => 'date',
        ]); 

        if ( $graphics_query->have_posts() ) {

          while( $graphics_query->have_posts() ) {

            $graphics_query->the_post(); ?>

            <div>
              <div class="vertical_card">
                <figure class="post_thumbnail" style="background-image: url(<?php echo get_the_post_thumbnail_url() ?>)">
                  <?php 
                    $graphics_img_copyright = get_post_meta( get_the_ID(), '_img_copyright', true ); 
                    echo !empty( $graphics_img_copyright ) ? '<div class="img_creds">'. $graphics_img_copyright .'</div>' : '';
                  ?>
                  <figcaption><?php echo get_post_meta( get_the_ID(), '_img_caption', true ); ?></figcaption>
                </figure>
                <article class="content">
                  <h3 class="post_title"><?php echo get_the_title(); ?></h3>
                  <p class="paragraph paragraph_unclamp"><?php echo get_the_excerpt(); ?></p>
                </article>
              </div>
            </div>

          <?php
          }

          wp_reset_postdata();
        }
        ?>
      </div>
    </div>
  <?php endif; ?>


  <!------------------- LATEST ISSUE SECTION ------------------->

  <?php if ( !empty( get_theme_mod( 'usa_pub_issue1_toggle_setting' ) ) or 
             !empty( get_theme_mod( 'usa_pub_issue2_toggle_setting' ) ) or 
             !empty( get_theme_mod( 'usa_pub_issue3_toggle_setting' ) ) or 
             !empty( get_theme_mod( 'usa_pub_issue5_toggle_setting' ) ) ): ?>

    <section id="latest_issues" class="max_width">
      <h2 class="section_title">Latest Issues</h2>
      <?php if ( !empty( get_theme_mod( 'usa_pub_issue1_toggle_setting' ) ) ): ?>
      <div class="issue">
        <div class="info">
          <p class="category cyan"><?php echo get_theme_mod( 'usa_pub_issue1_category_setting' ); ?></p>
          <p class="issue_title"><?php echo get_theme_mod( 'usa_pub_issue1_title_setting' ); ?></p>
          <p class="details"><?php echo get_theme_mod( 'usa_pub_issue1_after_title_setting' ); ?></p>
        </div>
        <?php 
        if ( !empty( get_theme_mod( 'usa_pub_issue1_image_preview_setting' ) ) ) {
          $issue1_preview_img = wp_get_attachment_image_url( get_theme_mod( 'usa_pub_issue1_image_preview_setting' ), 'large' );
        } else {
          $issue1_preview_img = '';
        }
        $published_link = get_theme_mod( 'usa_pub_issue1_published_link_setting' );
        ?>
        <a class="issue_img" href="<?php echo $published_link; ?>" style="background-image: url(<?php echo $issue1_preview_img; ?>);"></a>
      </div>
      <?php endif; ?>
      
      <?php if ( !empty( get_theme_mod( 'usa_pub_issue2_toggle_setting' ) ) ): ?>
      <div class="issue">
        <div class="info">
          <p class="category cyan"><?php echo get_theme_mod( 'usa_pub_issue2_category_setting' ); ?></p>
          <p class="issue_title"><?php echo get_theme_mod( 'usa_pub_issue2_title_setting' ); ?></p>
          <p class="details"><?php echo get_theme_mod( 'usa_pub_issue2_after_title_setting' ); ?></p>
        </div>
        <?php 
        if ( !empty( get_theme_mod( 'usa_pub_issue2_image_preview_setting' ) ) ) {
          $issue2_preview_img = wp_get_attachment_image_url( get_theme_mod( 'usa_pub_issue2_image_preview_setting' ), 'large' );
        } else {
          $issue2_preview_img = '';
        }
        $published_link = get_theme_mod( 'usa_pub_issue2_published_link_setting' );
        ?>
        <a class="issue_img" href="<?php echo $published_link; ?>" style="background-image: url(<?php echo $issue2_preview_img; ?>);"></a>
      </div>
      <?php endif; ?>
      
      <?php if ( !empty( get_theme_mod( 'usa_pub_issue3_toggle_setting' ) ) ): ?>
      <div class="issue">
        <div class="info">
          <p class="category cyan"><?php echo get_theme_mod( 'usa_pub_issue3_category_setting' ); ?></p>
          <p class="issue_title"><?php echo get_theme_mod( 'usa_pub_issue3_title_setting' ); ?></p>
          <p class="details"><?php echo get_theme_mod( 'usa_pub_issue3_after_title_setting' ); ?></p>
        </div>
        <?php 
        if ( !empty( get_theme_mod( 'usa_pub_issue3_image_preview_setting' ) ) ) {
          $issue3_preview_img = wp_get_attachment_image_url( get_theme_mod( 'usa_pub_issue3_image_preview_setting' ), 'large' );
        } else {
          $issue3_preview_img = '';
        }
        $published_link = get_theme_mod( 'usa_pub_issue3_published_link_setting' );
        ?>
        <a class="issue_img" href="<?php echo $published_link; ?>" style="background-image: url(<?php echo $issue3_preview_img; ?>);"></a>
      </div>
      <?php endif; ?>

      <?php if ( !empty( get_theme_mod( 'usa_pub_issue4_toggle_setting' ) ) ): ?>
      <div class="issue">
        <div class="info">
          <p class="category cyan"><?php echo get_theme_mod( 'usa_pub_issue4_category_setting' ); ?></p>
          <p class="issue_title"><?php echo get_theme_mod( 'usa_pub_issue4_title_setting' ); ?></p>
          <p class="details"><?php echo get_theme_mod( 'usa_pub_issue4_after_title_setting' ); ?></p>
        </div>
        <?php 
        if ( !empty( get_theme_mod( 'usa_pub_issue4_image_preview_setting' ) ) ) {
          $issue4_preview_img = wp_get_attachment_image_url( get_theme_mod( 'usa_pub_issue4_image_preview_setting' ), 'large' );
        } else {
          $issue4_preview_img = '';
        }
        $published_link = get_theme_mod( 'usa_pub_issue4_published_link_setting' );
        ?>
        <a class="issue_img" href="<?php echo $published_link; ?>" style="background-image: url(<?php echo $issue4_preview_img; ?>);"></a>
      </div>
      <?php endif; ?>

    </section>

  <?php endif; ?>
</main>

<?php get_footer(); ?>