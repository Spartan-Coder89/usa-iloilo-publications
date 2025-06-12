<?php

function usa_pub_create_authors_cpt() {

  if( !post_type_exists( 'usa_pub_authors' ) ){

    $labels = array(
      'name'               => 'Authors',
      'singular_name'      => 'Author',
      'add_new'            => 'Add New Author',
      'all_items'          => 'All Authors',
      'add_new_item'       => 'Add New Author',
      'edit_item'          => 'Edit A Author',
      'new_item'           => 'New Author',
      'view_item'          => 'View Author',
      'search_item'        => 'Search Author',
      'not_found'          => 'No Author Found in This',
      'not_found_in_trash' => 'No Author found in Trash',
      'parent_item_column' => 'Parent Item'
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
      'menu_icon'          => THEME_ABS_PATH_IMAGES .'admin/cpt/ico_author.svg',
      'exclude_from_search' => TRUE
    );
  
    register_post_type( 'usa_pub_authors', $args );
  }

}