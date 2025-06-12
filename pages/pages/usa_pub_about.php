<?php

function create_usa_pub_about_page() {

  if( is_null( get_page_by_path( 'about' ) ) ) {
    $post_details   = array(
        'post_title'    => 'About',
        'post_content'  => '',
        'post_status'   => 'publish',
        'post_author'   => 1,
        'post_type'     => 'page',
        'post_name'     => 'about'
    );
    wp_insert_post( $post_details );
  }
}