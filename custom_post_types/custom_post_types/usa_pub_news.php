<?php

function usa_pub_create_news_cpt() {

  if( !post_type_exists( 'usa_pub_news' ) ){

    $labels = array(
      'name'               => 'News Articles',
      'singular_name'      => 'News Article',
      'add_new'            => 'Add New News Article',
      'all_items'          => 'All News Articles',
      'add_new_item'       => 'Add New News Article',
      'edit_item'          => 'Edit A News Article',
      'new_item'           => 'New News Article',
      'view_item'          => 'View News Article',
      'search_item'        => 'Search News Article',
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
      'menu_icon'          => THEME_ABS_PATH_IMAGES .'admin/cpt/ico_news.svg',
      'exclude_from_search' => FALSE
    );
  
    register_post_type( 'usa_pub_news', $args );
  }
}