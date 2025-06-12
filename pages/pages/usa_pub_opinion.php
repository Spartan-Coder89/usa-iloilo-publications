<?php

function create_usa_pub_opinion_page() {

  if( is_null( get_page_by_path( 'opinion' ) ) ){
    $post_details   = array(
        'post_title'    => 'Opinion',
        'post_content'  => '',
        'post_status'   => 'publish',
        'post_author'   => 1,
        'post_type'     => 'page',
        'post_name'     => 'opinion'
    );
    wp_insert_post( $post_details );
  }
}