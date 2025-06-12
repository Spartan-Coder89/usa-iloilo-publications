<?php

add_action( 'customize_register', 'usa_pub_custom_customizer' );
function usa_pub_custom_customizer( $wp_customize ) {

  include_once 'customizers/usa_pub_siteparts.php';
  include_once 'customizers/usa_pub_social_links.php';
  include_once 'customizers/usa_pub_contact_info.php';
  include_once 'customizers/usa_pub_latest_issues.php';
}