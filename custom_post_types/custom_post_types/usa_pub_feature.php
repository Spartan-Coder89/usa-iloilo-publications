<?php

function usa_pub_create_feature_cpt() {

  if( !post_type_exists( 'usa_pub_feature' ) ){

    $labels = array(
      'name'               => 'Featured Articles',
      'singular_name'      => 'Featured Article',
      'add_new'            => 'Add New Featured Article',
      'all_items'          => 'All Featured Articles',
      'add_new_item'       => 'Add New Featured Article',
      'edit_item'          => 'Edit A Featured Article',
      'new_item'           => 'New Featured Article',
      'view_item'          => 'View Featured Article',
      'search_item'        => 'Search Featured Article',
      'not_found'          => 'No Article Found in This',
      'not_found_in_trash' => 'No Article found in Trash',
      'parent_item_column' => 'Parent Item'
    );
  
    $args = array(
      'labels'             => $labels,
      'public'             => TRUE,
      'has_archive'        => TRUE,
      'publicly_queryable' => TRUE,
      'query_var'          => TRUE,
      'rewrite'            => TRUE,
      'capability'         => 'post',
      'heirarchical'       => FALSE,
      'supports'           => array(
        'title',
        'editor',
        'thumbnail',
        'excerpt'
      ),
      'menu_icon'          => THEME_ABS_PATH_IMAGES .'admin/cpt/ico_featured.svg',
      'exclude_from_search' => FALSE
    );
  
    register_post_type( 'usa_pub_feature', $args );
  }
}