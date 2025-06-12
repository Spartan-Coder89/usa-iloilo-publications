<?php 
  get_header(); 
  $current_single_post_id = $post->ID;
?>

<main>
  <figure id="post_thumbnail" style="background-image: url( <?php echo get_the_post_thumbnail_url( $current_single_post_id ) ?> )">
    <figcaption><?php echo get_post_meta( $current_single_post_id, '_img_caption', true ); ?></figcaption>
    <div class="max_width">
      <?php 
        $img_copyright = get_post_meta( $current_single_post_id, '_img_copyright', true ); 
        echo !empty( $img_copyright ) ? '<div class="img_creds">'. $img_copyright .'</div>' : '';
      ?>
    </div>
  </figure>
  <div id="img_caption"><?php echo get_post_meta( $current_single_post_id, '_img_caption', true ); ?></div>
  <article id="article">
    <h1>
      <?php echo get_the_title( get_the_ID() ); ?>
      <span class="post_subtitle"><?php echo get_post_meta( $current_single_post_id, '_post_subtitle', true ); ?></span>
    </h1>
    <div class="after_post_title">
      <?php
      $counter = 1;
      $authors = get_post_meta( $current_single_post_id, '_authors', true );
      if ( is_array( $authors ) and count( $authors ) > 1 ) {

        foreach ( $authors as $key => $author ) {
          $comma = count( $authors ) != $counter ? ',' : '';
          $profile_pics[] = '<div class="profile_pic" style="background-image: url('. get_the_post_thumbnail_url( $author ) .')"></div>';
          $author_fullname[] = '<p>'. get_post_meta( $author, '_author_fullname', true ) . $comma .'</p>';
          $counter++;
        }
        
        echo
        '<div id="multi_author">
          <div class="profile_pics">'. implode( '', $profile_pics ) .'</div>
          <div class="author_fullnames">'. implode( '', $author_fullname ) .'</div>
        </div>';

      } else {

        foreach ( $authors as $key => $author ) {
          echo '<div class="profile_pic" style="background-image: url('. get_the_post_thumbnail_url( $author ) .')"></div>';
          echo '<p>'. get_post_meta( $author, '_author_fullname', true ) .'</p>';
        }
      }
      ?>
    </div>
    <div id="the_content"><?php echo strip_tags( wpautop( str_replace( '&nbsp;', ' ', get_the_content( $current_single_post_id ) ) ), '<p><strong><b><a><ul><ol><li><img>' ); ?></div>
    <div class="after_content">
      <p class="published">Published: <?php echo get_the_date( 'F d, Y' ); ?></p>
      <div class="share_post">
        <span>SHARE THIS POST</span>

        <!-- Load Facebook SDK for JavaScript -->
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
        fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

        <div id="fb_share">
          <!-- Your share button code -->
          <div class="fb-share-button" 
          data-href="<?php echo get_the_permalink( $current_single_post_id ) ?>" 
          data-layout="button_count">
          </div>
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M0 12.067C0 18.033 4.333 22.994 10 24V15.333H7V12H10V9.333C10 6.333 11.933 4.667 14.667 4.667C15.533 4.667 16.467 4.8 17.333 4.933V8H15.8C14.333 8 14 8.733 14 9.667V12H17.2L16.667 15.333H14V24C19.667 22.994 24 18.034 24 12.067C24 5.43 18.6 0 12 0C5.4 0 0 5.43 0 12.067Z" fill="#0C0C0C"/>
          </svg>
        </div>
      </div>
    </div>
  </article>

  <?php include_once THEME_REL_PATH . '/temp_part/related_articles.php'; ?>
</main>

<?php get_footer(); ?>