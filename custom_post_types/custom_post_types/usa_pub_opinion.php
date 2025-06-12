<?php

function usa_pub_create_opinion_cpt() {

  if( !post_type_exists( 'usa_pub_opinion' ) ){

    $labels = array(
      'name'               => 'Opinion Articles',
      'singular_name'      => 'Opinion Article',
      'add_new'            => 'Add New Opinion  Article',
      'all_items'          => 'All Opinion Articles',
      'add_new_item'       => 'Add New Opinion Article Item',
      'edit_item'          => 'Edit A Opinion Article',
      'new_item'           => 'New Opinion Article',
      'view_item'          => 'View Opinion Article',
      'search_item'        => 'Search Opinion Article',
      'not_found'          => 'No Items Found in This',
      'not_found_in_trash' => 'No items found in Trash',
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
        'thumbnail',
        'editor',
        'excerpt'
      ),
      'menu_icon'          => THEME_ABS_PATH_IMAGES .'admin/cpt/ico_opinion.svg',
      'exclude_from_search' => FALSE
    );
  
    register_post_type( 'usa_pub_opinion', $args );
  }
}