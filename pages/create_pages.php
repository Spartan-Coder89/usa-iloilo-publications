<?php

include_once THEME_REL_PATH .'/pages/pages/usa_pub_top.php';
include_once THEME_REL_PATH .'/pages/pages/usa_pub_opinion.php';
include_once THEME_REL_PATH .'/pages/pages/usa_pub_news.php';
include_once THEME_REL_PATH .'/pages/pages/usa_pub_literary.php';
include_once THEME_REL_PATH .'/pages/pages/usa_pub_graphics.php';
include_once THEME_REL_PATH .'/pages/pages/usa_pub_about.php';
include_once THEME_REL_PATH .'/pages/pages/usa_pub_feature.php';
include_once THEME_REL_PATH .'/pages/pages/usa_pub_search.php';
include_once THEME_REL_PATH .'/pages/pages/usa_pub_maintenance_mode.php';

add_action( 'init', 'create_pages' );
function create_pages() {

  create_usa_pub_toppage();
  create_usa_pub_opinion_page();
  create_usa_pub_news_page();
  create_usa_pub_literary_page();
  create_usa_pub_graphics_page();
  create_usa_pub_about_page();
  create_usa_pub_feature_page();
  create_usa_pub_search_results_page();
  create_usa_pub_maintenance_mode_page();
}