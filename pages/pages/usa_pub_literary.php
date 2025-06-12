<?php

function create_usa_pub_literary_page() {

  if( is_null( get_page_by_path( 'literary' ) ) ){
    $post_details   = array(
        'post_title'    => 'Literary',
        'post_content'  => '',
        'post_status'   => 'publish',
        'post_author'   => 1,
        'post_type'     => 'page',
        'post_name'     => 'literary'
    );
    wp_insert_post( $post_details );
  }
}