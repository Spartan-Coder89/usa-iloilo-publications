<?php

function create_usa_pub_news_page() {

  if( is_null( get_page_by_path( 'news' ) ) ){
    $post_details   = array(
        'post_title'    => 'News',
        'post_content'  => '',
        'post_status'   => 'publish',
        'post_author'   => 1,
        'post_type'     => 'page',
        'post_name'     => 'news'
    );
    wp_insert_post( $post_details );
  }
}