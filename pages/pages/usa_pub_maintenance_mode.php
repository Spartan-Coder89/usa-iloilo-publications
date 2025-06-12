<?php

function create_usa_pub_maintenance_mode_page() {

  if( is_null( get_page_by_path( 'maintenance-mode' ) ) ) {
    $post_details   = array(
        'post_title'    => 'Maintenance Mode',
        'post_content'  => '',
        'post_status'   => 'publish',
        'post_author'   => 1,
        'post_type'     => 'page',
        'post_name'     => 'maintenance-mode'
    );
    wp_insert_post( $post_details );
  }
}