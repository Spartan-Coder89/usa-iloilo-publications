<?php get_header(); ?>

<main>
  <div class="max_width">

    <section id="more_articles">
      <h2 class="more_articles_title">Search Results for "<?php echo isset( $_GET['keyword'] ) ? $_GET['keyword'] : ''; ?>"</h2>
      
      <?php
      $search_query = new WP_Query([
        'post_type' => array(
          'usa_pub_news',
          'usa_pub_literary',
          'usa_pub_opinion',
          'usa_pub_feature',
          'usa_pub_graphics'
        ),
        'posts_per_page' => 9,
        'paged' => get_query_var( 'paged' ),
        's' => isset( $_GET['keyword'] ) ? $_GET['keyword'] : ''
      ]);
      
      if ( $search_query->have_posts() ) { ?>
        
        <div class="articles_list">

        <?php
        while( $search_query->have_posts() ) {

          $search_query->the_post(); ?>

          <a href="<?php echo get_the_permalink( get_the_ID() ); ?>">
            <article class="vertical_card">
              <figure class="post_thumbnail" style="background-image: url(<?php echo get_the_post_thumbnail_url( get_the_ID() ) ?>);">
                <div class="img_creds"><?php echo get_post_meta( get_the_ID(), '_img_copyright', true ); ?></div>
                <figcaption><?php echo get_post_meta( get_the_ID(), '_img_caption', true ); ?></figcaption>
              </figure>
              <h3 class="post_title"><?php echo get_the_title(); ?></h3>
              <p class="after_post_title"><?php echo get_authors( get_the_ID() ); ?> • <?php echo get_the_date( 'F d, Y' ); ?> </p>
            </article>
          </a>

        <?php } ?>

        </div>
        
      <?php
      } else {
        echo '<p id="no_results">No Results</p>';
      }

      wp_reset_postdata();
      ?>
      

      <ul class="pagination">
        <?php 
        $max_pages = $search_query->max_num_pages;
        $current_page = get_query_var( 'paged' );

        $prev_page = ( $current_page - 1 ) > 0 ? $current_page - 1 : 1;
        $prev_page_url = get_site_url() .'/search-results/page/'. $prev_page;

        if ( $current_page == 0 ) {
          $next_page = $max_pages > 1 ? 2 : 1;
        } else {
          $next_page = ( $current_page + 1 ) <= $max_pages ? $current_page + 1 : $max_pages;
        }
        $next_page_url = get_site_url() .'/search-results/page/'. $next_page;

        $max_page_url = get_site_url() .'/search-results/page/'. $max_pages;

        //  Add the current category news to the url query
        if ( isset( $_GET['keyword'] ) ) {

          if ( !empty( $_GET['keyword'] ) ) {
            $prev_page_url .= '/?keyword='. $_GET['keyword'];
            $next_page_url .= '/?keyword='. $_GET['keyword'];
            $max_page_url .= '/?keyword='. $_GET['keyword'];
          }
        }
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
  </div>
</main>

<?php get_footer(); ?>