<?php

function usa_pub_create_graphic_cpt() {

  if( !post_type_exists( 'usa_pub_graphics' ) ){

    $labels = array(
      'name'               => 'Graphics',
      'singular_name'      => 'Graphic',
      'add_new'            => 'Add New Graphic',
      'all_items'          => 'All Graphics',
      'add_new_item'       => 'Add New Graphic',
      'edit_item'          => 'Edit A Graphic',
      'new_item'           => 'New Graphic',
      'view_item'          => 'View Graphic',
      'search_item'        => 'Search Graphic',
      'not_found'          => 'No Graphic Found in This',
      'not_found_in_trash' => 'No Graphic found in Trash',
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
      'supports'           => array( 'title', 'thumbnail', 'excerpt' ),
      'menu_icon'          => THEME_ABS_PATH_IMAGES .'admin/cpt/ico_graphics.svg',
      'exclude_from_search' => FALSE
    );
  
    register_post_type( 'usa_pub_graphics', $args );
  }
}