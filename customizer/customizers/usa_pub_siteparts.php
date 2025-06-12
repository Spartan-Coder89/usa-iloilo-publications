<?php


$wp_customize->add_section( 'usa_pub_site_parts_section', array(
  'title' => 'USA PUB Site Parts'
) );


//  Header logo
$wp_customize->add_setting( 'usa_pub_header_logo_setting', array (
  'default' => ''
) );

$wp_customize->add_control( new WP_Customize_Cropped_Image_Control( $wp_customize, 'usa_pub_header_logo_control', array(
  'label' => 'Header Logo',
  'section' => 'usa_pub_site_parts_section',
  'settings' => 'usa_pub_header_logo_setting',
  'flex_width' => true,
  'flex_height' => true
) ) );


//  Footer logo
$wp_customize->add_setting( 'usa_pub_footer_logo_setting', array (
  'default' => ''
) );

$wp_customize->add_control( new WP_Customize_Cropped_Image_Control( $wp_customize, 'usa_pub_footer_logo_control', array(
  'label' => 'Footer Logo',
  'section' => 'usa_pub_site_parts_section',
  'settings' => 'usa_pub_footer_logo_setting',
  'flex_width' => true,
  'flex_height' => true
) ) );


//  Organization description
$wp_customize->add_setting( 'usa_pub_org_summary_setting', array (
  'default' => ''
) );

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'usa_pub_org_summary_control', array(
  'label' => 'Organization Summary',
  'section' => 'usa_pub_site_parts_section',
  'settings' => 'usa_pub_org_summary_setting',
  'type' => 'text'       
) ) );


//  Organization description
$wp_customize->add_setting( 'usa_pub_org_description_setting', array (
  'default' => ''
) );

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'usa_pub_org_description_control', array(
  'label' => 'Organization Description',
  'section' => 'usa_pub_site_parts_section',
  'settings' => 'usa_pub_org_description_setting',
  'type' => 'textarea',
  'input_attrs' => array(
    'style' => 'height: 300px'
  )
) ) );


//  Organization mission
$wp_customize->add_setting( 'usa_pub_mission_setting', array (
  'default' => ''
) );

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'usa_pub_mission_control', array(
  'label' => 'Organization Mission',
  'section' => 'usa_pub_site_parts_section',
  'settings' => 'usa_pub_mission_setting',
  'type' => 'textarea',
  'input_attrs' => array(
    'style' => 'height: 300px'
  )         
) ) );


//  Organization vision
$wp_customize->add_setting( 'usa_pub_vision_setting', array (
  'default' => ''
) );

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'usa_pub_vision_control', array(
  'label' => 'Organization Vision',
  'section' => 'usa_pub_site_parts_section',
  'settings' => 'usa_pub_vision_setting',
  'type' => 'textarea',
  'input_attrs' => array(
    'style' => 'height: 300px'
  )         
) ) );


//  Copyright
$wp_customize->add_setting( 'usa_pub_copyright_setting', array (
  'default' => ''
) );

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'usa_pub_copyright_control', array(
  'label' => 'Copyright',
  'section' => 'usa_pub_site_parts_section',
  'settings' => 'usa_pub_copyright_setting',
  'type' => 'text',
) ) );