<?php 
  if ( is_singular( 'usa_pub_news' ) ) {
    $current_related_post_type = 'usa_pub_news';

  } else if ( is_singular( 'usa_pub_literary' ) ) {
    $current_related_post_type = 'usa_pub_literary';

  } else if ( is_singular( 'usa_pub_opinion' ) ) {
    $current_related_post_type = 'usa_pub_opinion';

  } else if ( is_singular( 'usa_pub_feature' ) ) {
    $current_related_post_type = 'usa_pub_feature';

  } else {
    //  Do nothing
  }
?>

<?php if ( !empty( $current_single_post_id ) ): ?>

  <section id="related_articles" class="max_width">
    <h2>Related Articles</h2>
    <div class="article_list">
      <?php 
        $related_articles_query = new WP_Query([
          'posts_per_page' => 3,
          'post_type' => $current_related_post_type,
          'post__not_in' => array( $current_single_post_id )
        ]);

        if ( $related_articles_query->have_posts() ) {

          while( $related_articles_query->have_posts() ) {

            $related_articles_query->the_post(); ?>

            <a class="left" href="<?php echo get_the_permalink(); ?>">
              <article class="vertical_card">
                <figure class="post_thumbnail" style="background-image: url( <?php echo get_the_post_thumbnail_url(); ?> )">
                  <?php 
                    $related_art_img_copyright = get_post_meta( $post->ID, '_img_copyright', true ); 
                    echo !empty( $related_art_img_copyright ) ? '<div class="img_creds">'. $related_art_img_copyright .'</div>' : '';
                  ?>
                  <figcaption><?php echo get_post_meta( $post->ID, '_img_caption', true ); ?></figcaption>
                </figure>

                <?php 
                if ( is_singular( 'usa_pub_news' ) ) {

                  $related_news_cat = get_the_terms( $current_single_post_id, 'usa_tax_news_cat' );
                  if ( !empty( $related_news_cat ) ) {
                    echo '<div class="taxonomy" style="color: '. get_term_meta( $related_news_cat[0]->term_id, '_term_meta_news_cat', true ) .'">'. $news_cat[0]->name .'</div>';
                  }
                }
                ?>

                <h3 class="post_title"><?php echo get_the_title(); ?></h3>

                <?php
                if ( is_singular( 'usa_pub_news' ) or is_singular( 'usa_pub_opinion' ) or is_singular( 'usa_pub_feature' ) or is_singular( 'usa_pub_literary' ) ) {

                  if ( is_singular( 'usa_pub_opinion' ) ) {
                    echo '<p class="after_post_title">'. get_authors_with_courses( get_the_ID() ) .'</p>';
                  } else {
                    echo '<p class="after_post_title">'. get_authors( get_the_ID() ) .' • '. get_the_date( 'F d, Y' ) .'</p>';
                  } 
                }

                if ( !is_singular( 'usa_pub_literary' ) ) {
                  echo '<p class="paragraph">'. get_the_excerpt() .'</p>';
                }
                ?>
              </article>
            </a>

          <?php
          }
        }

        wp_reset_postdata();
      ?>
    </div>
  </section>

<?php endif; ?>