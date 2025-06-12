<?php
  $latest_current_post_type = get_posts([
    'numberposts' => 3,
    'post_type' => $current_post_type,
    'orderby' => 'date'
  ]);

  //  Collect the top three slug for reference in the more_articles.php file
  if ( !empty( $latest_current_post_type ) ) {
  
    foreach ( $latest_current_post_type as $key => $post ) {
      $latest_current_post_type_top_three[] = $post->ID;
    }
  
  } else {
    $latest_current_post_type_top_three = array();
  }
?>

<div id="top_three">

  <?php if ( isset( $latest_current_post_type[0] ) ): ?>

    <a href="<?php echo get_the_permalink( $latest_current_post_type[0]->ID ); ?>">
      <div class="horizontal_card top_one">
        <figure class="post_thumbnail" style="background-image: url( <?php echo get_the_post_thumbnail_url( $latest_current_post_type[0]->ID ) ?> );">
          <?php 
            $latest_current_post_type_0_img_copyright = get_post_meta( $latest_current_post_type[0]->ID, '_img_copyright', true ); 
            echo !empty( $latest_current_post_type_0_img_copyright ) ? '<div class="img_creds">'. $latest_current_post_type_0_img_copyright .'</div>' : '';
          ?>
          <figcaption><?php echo get_post_meta( $latest_current_post_type[0]->ID, '_img_caption', true ); ?></figcaption>
        </figure>
        <article class="content">
          <?php 
          if ( is_page( 'news' ) ) {

            $latest_current_post_type_category = get_the_terms( $latest_current_post_type[0]->ID, 'usa_tax_news_cat' );
            if ( !empty( $latest_current_post_type_category ) ) {

              $term_news_cat_color = get_term_meta( $latest_current_post_type_category[0]->term_id, '_term_meta_news_cat', true );
              echo '<p class="taxonomy text_red" style="color: '. $term_news_cat_color .';">'. $latest_current_post_type_category[0]->name .'</p>';
            }
          } 
          ?>
        
          <h2 class="post_title"><?php echo get_the_title( $latest_current_post_type[0]->ID ); ?></h2>

          <?php 
          if ( is_page( 'news' ) or is_page( 'opinion' ) or is_page( 'feature' ) or is_page( 'literary' ) ) {
            
            if ( is_page( 'opinion' ) ) {
              echo '<p class="after_post_title">'. get_authors_with_courses( $latest_current_post_type[0]->ID ) .'</p>';
            } else {
              echo '<p class="after_post_title">'. get_authors( $latest_current_post_type[0]->ID ) .' • '. get_the_date( 'F d, Y', $latest_current_post_type[0]->ID ) .'</p>';
            }
          } 

          if ( is_page( 'news' ) or is_page( 'opinion' ) or is_page( 'feature' ) ) {
            echo '<p class="paragraph">'. get_the_excerpt( $latest_current_post_type[0]->ID ) .'</p>';
          } 
          ?>
        </article>
      </div>
    </a>
    
  <?php endif; ?>

  <?php if ( isset( $latest_current_post_type[1] ) ): ?>

    <div class="top_two_three">

    <?php if ( isset( $latest_current_post_type[1] ) ): ?>

      <a href="<?php echo get_the_permalink( $latest_current_post_type[1]->ID ); ?>">
        <div class="horizontal_card top_two">
          <figure class="post_thumbnail" style="background-image: url( <?php echo get_the_post_thumbnail_url( $latest_current_post_type[1]->ID ) ?> );">
            <?php 
              $latest_current_post_type_1_img_copyright = get_post_meta( $latest_current_post_type[1]->ID, '_img_copyright', true ); 
              echo !empty( $latest_current_post_type_1_img_copyright ) ? '<div class="img_creds">'. $latest_current_post_type_1_img_copyright .'</div>' : '';
            ?>
            <figcaption><?php echo get_post_meta( $latest_current_post_type[1]->ID, '_img_caption', true ); ?></figcaption>
          </figure>
          <article class="content">
            <?php 
            if ( is_page( 'news' ) ) {
              
              $latest_current_post_type_category = get_the_terms( $latest_current_post_type[1]->ID, 'usa_tax_news_cat' );
              if ( !empty( $latest_current_post_type_category ) ) {
                
                $term_news_cat_color = get_term_meta( $latest_current_post_type_category[0]->term_id, '_term_meta_news_cat', true );
                echo '<p class="taxonomy text_red" style="color: '. $term_news_cat_color .';">'. $latest_current_post_type_category[0]->name .'</p>';
              }
            } 
            ?>
          
            <h2 class="post_title"><?php echo get_the_title( $latest_current_post_type[1]->ID ); ?></h2>

            <?php 
            if ( is_page( 'news' ) or is_page( 'opinion' ) or is_page( 'feature' ) or is_page( 'literary' ) ) {
              
              if ( is_page( 'opinion' ) ) {
                echo '<p class="after_post_title">'. get_authors_with_courses( $latest_current_post_type[1]->ID ) .'</p>';
              } else {
                echo '<p class="after_post_title">'. get_authors( $latest_current_post_type[1]->ID ) .' • '. get_the_date( 'F d, Y', $latest_current_post_type[1]->ID ) .'</p>';
              }
            } 

            if ( is_page( 'news' ) or is_page( 'opinion' ) or is_page( 'feature' ) ) {
              echo '<p class="paragraph">'. get_the_excerpt( $latest_current_post_type[1]->ID ) .'</p>';
            } 
            ?>
          </article>
        </div>
      </a>

    <?php endif; ?>
    
    <?php if ( isset( $latest_current_post_type[2] ) ): ?>
      
      <a href="<?php echo get_the_permalink( $latest_current_post_type[2]->ID ); ?>">
        <div class="horizontal_card top_three">
          <figure class="post_thumbnail" style="background-image: url( <?php echo get_the_post_thumbnail_url( $latest_current_post_type[2]->ID ) ?> );">
            <?php 
              $latest_current_post_type_2_img_copyright = get_post_meta( $latest_current_post_type[2]->ID, '_img_copyright', true ); 
              echo !empty( $latest_current_post_type_2_img_copyright ) ? '<div class="img_creds">'. $latest_current_post_type_2_img_copyright .'</div>' : '';
            ?>
            <figcaption><?php echo get_post_meta( $latest_current_post_type[2]->ID, '_img_caption', true ); ?></figcaption>
          </figure>
          <article class="content">
            <?php 
            if ( is_page( 'news' ) ) {

              $latest_current_post_type_category = get_the_terms( $latest_current_post_type[2]->ID, 'usa_tax_news_cat' );
              if ( !empty( $latest_current_post_type_category ) ) {

                $term_news_cat_color = get_term_meta( $latest_current_post_type_category[0]->term_id, '_term_meta_news_cat', true );
                echo '<p class="taxonomy text_red" style="color: '. $term_news_cat_color .';">'. $latest_current_post_type_category[0]->name .'</p>';
              }
            } 
            ?>
          
            <h2 class="post_title"><?php echo get_the_title( $latest_current_post_type[2]->ID ); ?></h2>

            <?php 
            if ( is_page( 'news' ) or is_page( 'opinion' ) or is_page( 'feature' ) or is_page( 'literary' ) ) {
              
              if ( is_page( 'opinion' ) ) {
                echo '<p class="after_post_title">'. get_authors_with_courses( $latest_current_post_type[2]->ID ) .'</p>';
              } else {
                echo '<p class="after_post_title">'. get_authors( $latest_current_post_type[2]->ID ) .' • '. get_the_date( 'F d, Y', $latest_current_post_type[2]->ID ) .'</p>';
              }
            } 

            if ( is_page( 'news' ) or is_page( 'opinion' ) or is_page( 'feature' ) ) {
              echo '<p class="paragraph">'. get_the_excerpt( $latest_current_post_type[2]->ID ) .'</p>';
            } 
            ?>
          </article>
        </div>
      </a>

    <?php endif; ?>
    </div>

  <?php endif; ?>
</div>
