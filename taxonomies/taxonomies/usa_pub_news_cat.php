<?php 

function usa_pub_create_news_category() {

  if ( post_type_exists( 'usa_pub_news' ) and !taxonomy_exists( 'usa_tax_news_cat' ) ) {

    $labels = array(
      'name'                       => _x( 'News Categories', 'taxonomy general name', 'textdomain' ),
      'singular_name'              => _x( 'News Category', 'taxonomy singular name', 'textdomain' ),
      'search_items'               => __( 'Search News Categories', 'textdomain' ),
      'popular_items'              => __( 'Popular News Categories', 'textdomain' ),
      'all_items'                  => __( 'All News Categories', 'textdomain' ),
      'parent_item'                => null,
      'parent_item_colon'          => null,
      'edit_item'                  => __( 'Edit News Category', 'textdomain' ),
      'update_item'                => __( 'Update News Category', 'textdomain' ),
      'add_new_item'               => __( 'Add New News Category', 'textdomain' ),
      'new_item_name'              => __( 'New News Category Name', 'textdomain' ),
      'separate_items_with_commas' => __( 'Separate teams with commas', 'textdomain' ),
      'add_or_remove_items'        => __( 'Add or remove teams', 'textdomain' ),
      'choose_from_most_used'      => __( 'Choose from the most used teams', 'textdomain' ),
      'not_found'                  => __( 'No teams found.', 'textdomain' ),
      'menu_name'                  => __( 'News Category', 'textdomain' ),
    );
  
    $args = array(
      'hierarchical'          => true,
      'labels'                => $labels,
      'show_ui'               => true,
      'show_admin_column'     => true,
      'update_count_callback' => '_update_post_term_count',
      'query_var'             => true,
      'rewrite'               => array( 'slug' => 'usa_tax_news_cat' ),
      'capabilities' => array(
        'manage_terms'        => 'edit_posts',
        'edit_terms'          => 'edit_posts',
        'delete_terms'        => 'edit_posts',
        'assign_terms'        => 'edit_posts'
      ),
    );
  
    register_taxonomy( 'usa_tax_news_cat', 'usa_pub_news', $args );
  }
}
