<?php
  if ( is_page( 'news' ) ) {
    $current_page_slug = 'news';

  } else if ( is_page( 'opinion' ) ) {
    $current_page_slug = 'opinion';

  } else if ( is_page( 'literary' ) ) {
    $current_page_slug = 'literary';

  } else if ( is_page( 'feature' ) ) {
    $current_page_slug = 'feature';

  } else {
    //  Do nothing
  }
?>

<div id="before_more_articles"></div> <!-- Serves as spacer -->

<section id="more_articles">
  <h2 class="more_articles_title">More <?php echo ucfirst( $current_page_slug ); ?> Articles</h2>

  <?php if ( is_page( 'news' ) ) { ?>

    <form class="filter" action="<?php echo admin_url( 'admin-post.php' ); ?>" method="POST">
      <label>Filter by Category</label>
      <div class="select_wrap">
        <select name="news_cat">
          <option value="all">All</option>
          <?php
            $news_cat_args = get_terms([
              'taxonomy' => 'usa_tax_news_cat',
              'hide_empty' => true
            ]);

            foreach ( $news_cat_args as $key => $news_cat_term ) {
              $is_selected = $_GET['current_news_cat'] == $news_cat_term->slug ? 'selected' : '';
              echo '<option value="'. $news_cat_term->slug .'" '. $is_selected .'>'. $news_cat_term->name .'</option>';
            }
          ?>
        </select>
        <svg width="16" height="10" viewBox="0 0 16 10" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" clip-rule="evenodd" d="M2 0L8 6L14 0L16 2L8 10L0 2L2 0Z" fill="#505050"/>
        </svg>
      </div>
      <input type="hidden" name="action" value="news_cat_filter">
      <input type="hidden" name="origin" value="<?php echo get_site_url() .'/'. $current_page_slug; ?>">
      <input type="hidden" name="news_cat_filter_nonce" value="<?php echo wp_create_nonce( 'news_cat_filter_nonce' ); ?>">
    </form>

  <?php } ?>

  <div class="articles_list">
    <?php 
    $more_articles_args = array (
      'posts_per_page' => 9,
      'post_type' => $current_post_type, // <--- This variable is set and initialized in page template files
      'post__not_in' => $latest_current_post_type_top_three,
      'paged' => get_query_var('paged')
    );

    if ( is_page( 'news' ) and isset( $_GET['current_news_cat'] ) ) {

      if ( !empty( $_GET['current_news_cat'] ) ) {

        if ( $_GET['current_news_cat'] == 'all' ) {

          $news_cat_terms = array();
  
          $usa_tax_news_cat_terms = get_terms( array(
            'taxonomy' => 'usa_tax_news_cat',
            'hide_empty' => true,
          ) );
  
          foreach ( $usa_tax_news_cat_terms as $key => $term ) {
            $news_cat_terms[] = $term->slug;
          }
  
        } else {
          $news_cat_terms = array( $_GET['current_news_cat'] );
        }
  
        $more_articles_args['tax_query'] = array(
          array(
            'taxonomy' => 'usa_tax_news_cat',
            'field'    => 'slug',
            'terms'    => $news_cat_terms
          )
        );
      }
    }

    $more_articles_query = new WP_Query( $more_articles_args );

    if ( $more_articles_query->have_posts() ) {

      while ( $more_articles_query->have_posts() ) {

        $more_articles_query->the_post(); ?>
      
        <a href="<?php echo get_the_permalink( get_the_ID() ); ?>">
          <article class="vertical_card">
            <figure class="post_thumbnail" style="background-image: url( <?php echo get_the_post_thumbnail_url( get_the_ID() ) ?> );">
              <?php 
                $more_art_img_copyright = get_post_meta( get_the_ID(), '_img_copyright', true ); 
                echo !empty( $more_art_img_copyright ) ? '<div class="img_creds">'. $more_art_img_copyright .'</div>' : '';
              ?>
              <figcaption><?php echo get_post_meta( get_the_ID(), '_img_caption', true ); ?></figcaption>
            </figure>
            <?php 
            if ( is_page( 'news' ) ) {

              $latest_current_post_type_category = get_the_terms( get_the_ID(), 'usa_tax_news_cat' );
              if ( !empty( $latest_current_post_type_category ) ) {

                $term_news_cat_color = get_term_meta( $latest_current_post_type_category[0]->term_id, '_term_meta_news_cat', true );
                echo '<p class="taxonomy" style="color: '. $term_news_cat_color .';">'. $latest_current_post_type_category[0]->name .'</p>';
              }
            }
            ?>
              
            <h3 class="post_title"><?php echo get_the_title(); ?></h3>

            <?php 
            if ( is_page( 'news' ) or is_page( 'opinion' ) or is_page( 'feature' ) or is_page( 'literary' ) ) {

              if ( is_page( 'opinion' ) ) {
                echo '<p class="after_post_title">'. get_authors_with_courses( get_the_ID() ) .'</p>';
              } else {
                echo '<p class="after_post_title">'. get_authors( get_the_ID() ) .' • '. get_the_date( 'F d, Y' ) .'</p>';
              } 
            } 

            if ( is_page( 'news' ) or is_page( 'opinion' ) or is_page( 'feature' ) ) {
              echo '<p class="paragraph">'. get_the_excerpt() .'</p>';
            } 
            ?>
          </article>
        </a>

        <?php 
      } 

      wp_reset_postdata();
    }
    ?>
  </div>

  <ul class="pagination">
    <?php 

    $max_pages = $more_articles_query->max_num_pages;
    $current_page = get_query_var( 'paged' );

    $prev_page = ( $current_page - 1 ) > 0 ? $current_page - 1 : 1;
    $prev_page_url = get_site_url() .'/'. $current_page_slug .'/page/'. $prev_page;

    if ( $current_page == 0 ) {
      $next_page = $max_pages > 1 ? 2 : 1;
    } else {
      $next_page = ( $current_page + 1 ) <= $max_pages ? $current_page + 1 : $max_pages;
    }
    $next_page_url = get_site_url() .'/'. $current_page_slug .'/page/'. $next_page;

    $max_page_url = get_site_url() .'/'. $current_page_slug .'/page/'. $max_pages;

    //  Add the current category news to the url query
    if ( isset( $_GET['current_news_cat'] ) ) {

      if ( !empty( $_GET['current_news_cat'] ) ) {
        $prev_page_url .= '/?current_news_cat='. $_GET['current_news_cat'];
        $next_page_url .= '/?current_news_cat='. $_GET['current_news_cat'];
        $max_page_url .= '/?current_news_cat='. $_GET['current_news_cat'];
      }
    }

    //  Add the id of the more articles section
    $prev_page_url .= '#before_more_articles';
    $next_page_url .= '#before_more_articles';
    $max_page_url .= '#before_more_articles';
    ?>

    <li class="prev">
      <a href="<?php echo $prev_page_url ?>">
        <svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M0.22 6.71997C0.0793075 6.57946 0.000175052 6.38882 0 6.18997V5.80997C0.00230401 5.61156 0.081116 5.4217 0.22 5.27997L5.36 0.149974C5.45388 0.055318 5.58168 0.0020752 5.715 0.0020752C5.84832 0.0020752 5.97612 0.055318 6.07 0.149974L6.78 0.859974C6.87406 0.952138 6.92707 1.07828 6.92707 1.20997C6.92707 1.34166 6.87406 1.46781 6.78 1.55997L2.33 5.99997L6.78 10.44C6.87466 10.5339 6.9279 10.6617 6.9279 10.795C6.9279 10.9283 6.87466 11.0561 6.78 11.15L6.07 11.85C5.97612 11.9446 5.84832 11.9979 5.715 11.9979C5.58168 11.9979 5.45388 11.9446 5.36 11.85L0.22 6.71997Z" fill="#BCBCBC"/>
        </svg>
      </a>
    </li>

    <li class="current_page">
      <span><?php echo $current_page == 0 ? 1 : $current_page; ?></span>
    </li>

    <li class="of"><span>of</span></li>

    <li class="upcoming_page">
      <a href="<?php echo $max_page_url; ?>"><?php echo $max_pages; ?></a>
    </li>

    <li class="next">
      <a href="<?php echo $next_page_url; ?>">
        <svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M6.78 6.71997C6.92069 6.57946 6.99982 6.38882 7 6.18997V5.80997C6.9977 5.61156 6.91888 5.4217 6.78 5.27997L1.64 0.149974C1.54612 0.055318 1.41832 0.0020752 1.285 0.0020752C1.15168 0.0020752 1.02388 0.055318 0.93 0.149974L0.22 0.859974C0.125936 0.952138 0.0729284 1.07828 0.0729284 1.20997C0.0729284 1.34166 0.125936 1.46781 0.22 1.55997L4.67 5.99997L0.22 10.44C0.125343 10.5339 0.0721006 10.6617 0.0721006 10.795C0.0721006 10.9283 0.125343 11.0561 0.22 11.15L0.93 11.85C1.02388 11.9446 1.15168 11.9979 1.285 11.9979C1.41832 11.9979 1.54612 11.9446 1.64 11.85L6.78 6.71997Z" fill="#BCBCBC"/>
        </svg>
      </a>
    </li>

  </ul>
</section>