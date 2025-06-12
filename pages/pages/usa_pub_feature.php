<?php

function create_usa_pub_feature_page() {

  if( is_null( get_page_by_path( 'feature' ) ) ) {
    $post_details   = array(
        'post_title'    => 'Feature',
        'post_content'  => '',
        'post_status'   => 'publish',
        'post_author'   => 1,
        'post_type'     => 'page',
        'post_name'     => 'feature'
    );
    wp_insert_post( $post_details );
  }
}