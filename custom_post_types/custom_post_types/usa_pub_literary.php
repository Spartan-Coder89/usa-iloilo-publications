<?php

function usa_pub_create_literary_cpt() {

  if( !post_type_exists( 'usa_pub_literary' ) ){

    $labels = array(
      'name'               => 'Literary Articles',
      'singular_name'      => 'Literary Article',
      'add_new'            => 'Add New Literary Article',
      'all_items'          => 'All Literary Articles',
      'add_new_item'       => 'Add New Literary Article',
      'edit_item'          => 'Edit A Literary Article',
      'new_item'           => 'New Literary Article',
      'view_item'          => 'View Literary Article',
      'search_item'        => 'Search Literary',
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
      'menu_icon'          => THEME_ABS_PATH_IMAGES .'admin/cpt/ico_literary.svg',
      'exclude_from_search' => FALSE
    );
  
    register_post_type( 'usa_pub_literary', $args );
  }
}