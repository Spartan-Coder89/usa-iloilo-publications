<?php

add_action( 'admin_post_search_articles', 'search_articles' );
add_action( 'admin_post_nopriv_search_articles', 'search_articles' );
function search_articles() {
  
  if ( !isset( $_POST['search_articles_nonce'] ) ) {
    return;
  }

  if ( !wp_verify_nonce( $_POST['search_articles_nonce'], 'search_articles_nonce' ) ) {
    return;
  }

  wp_safe_redirect( get_site_url() .'/search?keyword='. $_POST['search_key'] );
  exit();
}