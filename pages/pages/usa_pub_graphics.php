<?php

function create_usa_pub_graphics_page() {

  if( is_null( get_page_by_path( 'graphics' ) ) ) {
    $post_details   = array(
        'post_title'    => 'Graphics',
        'post_content'  => '',
        'post_status'   => 'publish',
        'post_author'   => 1,
        'post_type'     => 'page',
        'post_name'     => 'graphics'
    );
    wp_insert_post( $post_details );
  }
}