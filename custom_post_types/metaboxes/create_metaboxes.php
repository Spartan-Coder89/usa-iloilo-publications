<?php

include_once THEME_REL_PATH .'/custom_post_types/metaboxes/cpt_metaboxes/usa_pub_authors_imgcreds.php';
include_once THEME_REL_PATH .'/custom_post_types/metaboxes/cpt_metaboxes/usa_pub_authors.php';
include_once THEME_REL_PATH .'/custom_post_types/metaboxes/cpt_metaboxes/usa_pub_editorial.php';
include_once THEME_REL_PATH .'/custom_post_types/metaboxes/cpt_metaboxes/usa_pub_news.php';
include_once THEME_REL_PATH .'/custom_post_types/metaboxes/cpt_metaboxes/usa_pub_graphics.php';
include_once THEME_REL_PATH .'/custom_post_types/metaboxes/cpt_metaboxes/usa_pub_post_subtitle.php';

add_action( 'add_meta_boxes', 'usa_pub_create_meta_boxes' );
function usa_pub_create_meta_boxes() {

  usa_pub_create_authors_imgcreds_metaboxes();
  usa_pub_create_authors_metaboxes();
  usa_pub_create_editorial_metaboxes();
  usa_pub_create_news_metaboxes();
  usa_pub_create_graphics_metaboxes();
  usa_pub_create_post_subtitle_metaboxes();
}