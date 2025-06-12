<?php

add_action( 'admin_post_news_cat_filter', 'news_cat_filter' );
add_action( 'admin_post_nopriv_news_cat_filter', 'news_cat_filter' );
function news_cat_filter() {

  if ( !isset( $_POST['news_cat_filter_nonce'] ) ) {
    return;
  }

  if ( !wp_verify_nonce( $_POST['news_cat_filter_nonce'], 'news_cat_filter_nonce' ) ) {
    return;
  }

  wp_safe_redirect( $_POST['origin'] .'/?current_news_cat='. $_POST['news_cat'] .'#before_more_articles' );
  exit();
}