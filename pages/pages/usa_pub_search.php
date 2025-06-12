<?php

function create_usa_pub_search_results_page() {

  if( is_null( get_page_by_path( 'search-results' ) ) ){
    $post_details   = array(
        'post_title'    => 'Search Results',
        'post_content'  => '',
        'post_status'   => 'publish',
        'post_author'   => 1,
        'post_type'     => 'page',
        'post_name'     => 'search-results'
    );
    wp_insert_post( $post_details );
  }
}