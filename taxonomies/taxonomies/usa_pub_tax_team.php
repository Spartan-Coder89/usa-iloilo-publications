<?php 

function usa_pub_create_editorial_team() {

  if ( post_type_exists( 'usa_pub_editorial' ) and !taxonomy_exists( 'usa_tax_team' ) ) {

    $labels = array(
      'name'                       => _x( 'Teams', 'taxonomy general name', 'textdomain' ),
      'singular_name'              => _x( 'Team', 'taxonomy singular name', 'textdomain' ),
      'search_items'               => __( 'Search Teams', 'textdomain' ),
      'popular_items'              => __( 'Popular Teams', 'textdomain' ),
      'all_items'                  => __( 'All Teams', 'textdomain' ),
      'parent_item'                => null,
      'parent_item_colon'          => null,
      'edit_item'                  => __( 'Edit Team', 'textdomain' ),
      'update_item'                => __( 'Update Team', 'textdomain' ),
      'add_new_item'               => __( 'Add New Team', 'textdomain' ),
      'new_item_name'              => __( 'New Team Name', 'textdomain' ),
      'separate_items_with_commas' => __( 'Separate teams with commas', 'textdomain' ),
      'add_or_remove_items'        => __( 'Add or remove teams', 'textdomain' ),
      'choose_from_most_used'      => __( 'Choose from the most used teams', 'textdomain' ),
      'not_found'                  => __( 'No teams found.', 'textdomain' ),
      'menu_name'                  => __( 'Teams', 'textdomain' ),
    );
  
    $args = array(
      'hierarchical'          => true,
      'labels'                => $labels,
      'show_ui'               => true,
      'show_admin_column'     => true,
      'update_count_callback' => '_update_post_term_count',
      'query_var'             => true,
      'rewrite'               => array( 'slug' => 'usa_tax_team' )
    );
  
    register_taxonomy( 'usa_tax_team', 'usa_pub_editorial', $args );
  }
}
