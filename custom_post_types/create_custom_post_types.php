<?php

include_once THEME_REL_PATH .'/custom_post_types/custom_post_types/usa_pub_news.php';
include_once THEME_REL_PATH .'/custom_post_types/custom_post_types/usa_pub_literary.php';
include_once THEME_REL_PATH .'/custom_post_types/custom_post_types/usa_pub_opinion.php';
include_once THEME_REL_PATH .'/custom_post_types/custom_post_types/usa_pub_feature.php';
include_once THEME_REL_PATH .'/custom_post_types/custom_post_types/usa_pub_graphics.php';
include_once THEME_REL_PATH .'/custom_post_types/custom_post_types/usa_pub_editorial.php';
include_once THEME_REL_PATH .'/custom_post_types/custom_post_types/usa_pub_authors.php';

add_action( 'init', 'create_custom_post_types' );
function create_custom_post_types() {

  usa_pub_create_news_cpt();
  usa_pub_create_literary_cpt();
  usa_pub_create_opinion_cpt();
  usa_pub_create_feature_cpt();
  usa_pub_create_graphic_cpt();
  usa_pub_create_editorial_cpt();
  usa_pub_create_authors_cpt();
}