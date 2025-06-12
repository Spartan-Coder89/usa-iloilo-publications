<?php

function create_usa_pub_toppage() {

  if( is_null( get_page_by_path( 'top' ) ) ){
    $post_details   = array(
        'post_title'    => 'Home',
        'post_content'  => '',
        'post_status'   => 'publish',
        'post_author'   => 1,
        'post_type'     => 'page',
        'post_name'     => 'top'
    );
    wp_insert_post( $post_details );

    //  Set the top page as toppage
    $top = get_page_by_path( 'top' );
    update_option( 'page_on_front', $top->ID );
    update_option( 'show_on_front', 'page' );
  }
}