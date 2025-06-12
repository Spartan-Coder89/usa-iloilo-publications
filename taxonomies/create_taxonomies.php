<?php 

include_once THEME_REL_PATH .'/taxonomies/taxonomies/usa_pub_tax_team.php';
include_once THEME_REL_PATH .'/taxonomies/taxonomies/usa_pub_news_cat.php';

add_action( 'init', 'create_custom_taxonomies' );
function create_custom_taxonomies() {

  usa_pub_create_editorial_team();
  usa_pub_create_news_category();
}

include_once THEME_REL_PATH . '/taxonomies/taxonomy_fields/usa_pub_news_cat_fields.php';
include_once THEME_REL_PATH . '/taxonomies/taxonomy_fields/usa_pub_tax_team_fields.php';