<?php

function usa_pub_create_editorial_cpt() {

  if( !post_type_exists( 'usa_pub_editorial' ) ){

    $labels = array(
      'name'               => 'Editorial Members',
      'singular_name'      => 'Editorial Member',
      'add_new'            => 'Add New Editorial Member',
      'all_items'          => 'All Editorial Members',
      'add_new_item'       => 'Add New Editorial Member',
      'edit_item'          => 'Edit A Editorial Member',
      'new_item'           => 'New Editorial Member',
      'view_item'          => 'View Editorial Member',
      'search_item'        => 'Search Editorial Member',
      'not_found'          => 'No Article Found in This',
      'not_found_in_trash' => 'No Article found in Trash',
      'parent_item_column' => 'Parent Item',
      'featured_image'     => 'Profile',
    );
  
    $args = array(
      'labels'             => $labels,
      'public'             => TRUE,
      'has_archive'        => TRUE,
      'publicly_queryable' => TRUE,
      'query_var'          => TRUE,
      'rewrite'            => TRUE,
      'capabilities' => array(
        'edit_post'          => 'update_core',
        'read_post'          => 'update_core',
        'delete_post'        => 'update_core',
        'edit_posts'         => 'update_core',
        'edit_others_posts'  => 'update_core',
        'delete_posts'       => 'update_core',
        'publish_posts'      => 'update_core',
        'read_private_posts' => 'update_core'
      ),
      'capability'         => 'post',
      'heirarchical'       => FALSE,
      'supports'           => array( 'thumbnail' ),
      'menu_icon'          => THEME_ABS_PATH_IMAGES .'admin/cpt/ico_editorial.svg',
      'exclude_from_search' => FALSE
    );
  
    register_post_type( 'usa_pub_editorial', $args );
  }
}