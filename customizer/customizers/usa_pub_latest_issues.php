<?php

//  Panel
$wp_customize->add_panel( 'usa_pub_latest_issues_panel', array(
  'title' => 'USA PUB Latest Issues'
) );


//  Section 1
$wp_customize->add_section( 'usa_pub_latest_issue1_section', array(
  'title' => 'Issue 1',
  'panel' => 'usa_pub_latest_issues_panel'
) );


//  Section 2
$wp_customize->add_section( 'usa_pub_latest_issue2_section', array(
  'title' => 'Issue 2',
  'panel' => 'usa_pub_latest_issues_panel'
) );


//  Section 3
$wp_customize->add_section( 'usa_pub_latest_issue3_section', array(
  'title' => 'Issue 3',
  'panel' => 'usa_pub_latest_issues_panel'
) );


//  Section 4
$wp_customize->add_section( 'usa_pub_latest_issue4_section', array(
  'title' => 'Issue 4',
  'panel' => 'usa_pub_latest_issues_panel'
) );


/* -------------------------- Issue 1 -------------------------- */

//  Issue 1 toggle
$wp_customize->add_setting( 'usa_pub_issue1_toggle_setting', array (
  'default'       => ''
) );

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'usa_pub_issue1_toggle_control', array(
  'label'         => 'Enable',
  'section'       => 'usa_pub_latest_issue1_section',
  'settings'      => 'usa_pub_issue1_toggle_setting',
  'type'          => 'checkbox'
) ) );

//  Issue 1 category
$wp_customize->add_setting( 'usa_pub_issue1_category_setting', array (
  'default'       => ''
) );

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'usa_pub_issue1_category_control', array(
  'label'         => 'Category',
  'section'       => 'usa_pub_latest_issue1_section',
  'settings'      => 'usa_pub_issue1_category_setting',
  'type'          => 'text'
) ) );

//  Issue 1 title
$wp_customize->add_setting( 'usa_pub_issue1_title_setting', array (
  'default'       => ''
) );

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'usa_pub_issue1_title_control', array(
  'label'         => 'Title',
  'section'       => 'usa_pub_latest_issue1_section',
  'settings'      => 'usa_pub_issue1_title_setting',
  'type'          => 'text'
) ) );

//  Issue 1 after title
$wp_customize->add_setting( 'usa_pub_issue1_after_title_setting', array (
  'default'       => ''
) );

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'usa_pub_issue1_after_title_control', array(
  'label'         => 'After Title',
  'section'       => 'usa_pub_latest_issue1_section',
  'settings'      => 'usa_pub_issue1_after_title_setting',
  'type'          => 'text'
) ) );

//  Issue 1 image preview
$wp_customize->add_setting( 'usa_pub_issue1_image_preview_setting', array (
  'default' => ''
) );

$wp_customize->add_control( new WP_Customize_Cropped_Image_Control( $wp_customize, 'usa_pub_issue1_images_preview_control', array(
  'label' => 'Image preview',
  'section' => 'usa_pub_latest_issue1_section',
  'settings' => 'usa_pub_issue1_image_preview_setting',
  'flex_width' => true,
  'flex_height' => true,
  'width' => 650,
  'height' => 460
) ) );

//  Issue 1 published link
$wp_customize->add_setting( 'usa_pub_issue1_published_link_setting', array (
  'default'       => ''
) );

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'usa_pub_issue1_published_link_control', array(
  'label'         => 'Published Link',
  'section'       => 'usa_pub_latest_issue1_section',
  'settings'      => 'usa_pub_issue1_published_link_setting',
  'type'          => 'text'
) ) );


/* -------------------------- Issue 2 -------------------------- */

//  Issue 1 toggle
$wp_customize->add_setting( 'usa_pub_issue2_toggle_setting', array (
  'default'       => ''
) );

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'usa_pub_issue2_toggle_control', array(
  'label'         => 'Enable',
  'section'       => 'usa_pub_latest_issue2_section',
  'settings'      => 'usa_pub_issue2_toggle_setting',
  'type'          => 'checkbox'
) ) );

//  Issue 2 category
$wp_customize->add_setting( 'usa_pub_issue2_category_setting', array (
  'default'       => ''
) );

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'usa_pub_issue2_category_control', array(
  'label'         => 'Category',
  'section'       => 'usa_pub_latest_issue2_section',
  'settings'      => 'usa_pub_issue2_category_setting',
  'type'          => 'text'
) ) );

//  Issue 2 title
$wp_customize->add_setting( 'usa_pub_issue2_title_setting', array (
  'default'       => ''
) );

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'usa_pub_issue2_title_control', array(
  'label'         => 'Title',
  'section'       => 'usa_pub_latest_issue2_section',
  'settings'      => 'usa_pub_issue2_title_setting',
  'type'          => 'text'
) ) );

//  Issue 2 after title
$wp_customize->add_setting( 'usa_pub_issue2_after_title_setting', array (
  'default'       => ''
) );

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'usa_pub_issue2_after_title_control', array(
  'label'         => 'After Title',
  'section'       => 'usa_pub_latest_issue2_section',
  'settings'      => 'usa_pub_issue2_after_title_setting',
  'type'          => 'text'
) ) );

//  Issue 2 image preview
$wp_customize->add_setting( 'usa_pub_issue2_image_preview_setting', array (
  'default' => ''
) );

$wp_customize->add_control( new WP_Customize_Cropped_Image_Control( $wp_customize, 'usa_pub_issue2_images_preview_control', array(
  'label' => 'Image preview',
  'section' => 'usa_pub_latest_issue2_section',
  'settings' => 'usa_pub_issue2_image_preview_setting',
  'flex_width' => true,
  'flex_height' => true,
  'width' => 650,
  'height' => 460
) ) );

//  Issue 2 published link
$wp_customize->add_setting( 'usa_pub_issue2_published_link_setting', array (
  'default'       => ''
) );

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'usa_pub_issue2_published_link_control', array(
  'label'         => 'Published Link',
  'section'       => 'usa_pub_latest_issue2_section',
  'settings'      => 'usa_pub_issue2_published_link_setting',
  'type'          => 'text'
) ) );

/* -------------------------- Issue 3 -------------------------- */

//  Issue 1 toggle
$wp_customize->add_setting( 'usa_pub_issue3_toggle_setting', array (
  'default'       => ''
) );

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'usa_pub_issue3_toggle_control', array(
  'label'         => 'Enable',
  'section'       => 'usa_pub_latest_issue3_section',
  'settings'      => 'usa_pub_issue3_toggle_setting',
  'type'          => 'checkbox'
) ) );

//  Issue 3 category
$wp_customize->add_setting( 'usa_pub_issue3_category_setting', array (
  'default'       => ''
) );

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'usa_pub_issue3_category_control', array(
  'label'         => 'Category',
  'section'       => 'usa_pub_latest_issue3_section',
  'settings'      => 'usa_pub_issue3_category_setting',
  'type'          => 'text'
) ) );

//  Issue 3 title
$wp_customize->add_setting( 'usa_pub_issue3_title_setting', array (
  'default'       => ''
) );

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'usa_pub_issue3_title_control', array(
  'label'         => 'Title',
  'section'       => 'usa_pub_latest_issue3_section',
  'settings'      => 'usa_pub_issue3_title_setting',
  'type'          => 'text'
) ) );

//  Issue 3 after title
$wp_customize->add_setting( 'usa_pub_issue3_after_title_setting', array (
  'default'       => ''
) );

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'usa_pub_issue3_after_title_control', array(
  'label'         => 'After Title',
  'section'       => 'usa_pub_latest_issue3_section',
  'settings'      => 'usa_pub_issue3_after_title_setting',
  'type'          => 'text'
) ) );

//  Issue 3 image preview
$wp_customize->add_setting( 'usa_pub_issue3_image_preview_setting', array (
  'default' => ''
) );

$wp_customize->add_control( new WP_Customize_Cropped_Image_Control( $wp_customize, 'usa_pub_issue3_images_preview_control', array(
  'label' => 'Image preview',
  'section' => 'usa_pub_latest_issue3_section',
  'settings' => 'usa_pub_issue3_image_preview_setting',
  'flex_width' => true,
  'flex_height' => true,
  'width' => 650,
  'height' => 460
) ) );

//  Issue 3 published link
$wp_customize->add_setting( 'usa_pub_issue3_published_link_setting', array (
  'default'       => ''
) );

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'usa_pub_issue3_published_link_control', array(
  'label'         => 'Published Link',
  'section'       => 'usa_pub_latest_issue3_section',
  'settings'      => 'usa_pub_issue3_published_link_setting',
  'type'          => 'text'
) ) );


/* -------------------------- Issue 4 -------------------------- */

//  Issue 1 toggle
$wp_customize->add_setting( 'usa_pub_issue4_toggle_setting', array (
  'default'       => ''
) );

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'usa_pub_issue4_toggle_control', array(
  'label'         => 'Enable',
  'section'       => 'usa_pub_latest_issue4_section',
  'settings'      => 'usa_pub_issue4_toggle_setting',
  'type'          => 'checkbox'
) ) );

//  Issue 4 category
$wp_customize->add_setting( 'usa_pub_issue4_category_setting', array (
  'default'       => ''
) );

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'usa_pub_issue4_category_control', array(
  'label'         => 'Category',
  'section'       => 'usa_pub_latest_issue4_section',
  'settings'      => 'usa_pub_issue4_category_setting',
  'type'          => 'text'
) ) );

//  Issue 4 title
$wp_customize->add_setting( 'usa_pub_issue4_title_setting', array (
  'default'       => ''
) );

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'usa_pub_issue4_title_control', array(
  'label'         => 'Title',
  'section'       => 'usa_pub_latest_issue4_section',
  'settings'      => 'usa_pub_issue4_title_setting',
  'type'          => 'text'
) ) );

//  Issue 4 after title
$wp_customize->add_setting( 'usa_pub_issue4_after_title_setting', array (
  'default'       => ''
) );

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'usa_pub_issue4_after_title_control', array(
  'label'         => 'After Title',
  'section'       => 'usa_pub_latest_issue4_section',
  'settings'      => 'usa_pub_issue4_after_title_setting',
  'type'          => 'text'
) ) );

//  Issue 4 image preview
$wp_customize->add_setting( 'usa_pub_issue4_image_preview_setting', array (
  'default' => ''
) );

$wp_customize->add_control( new WP_Customize_Cropped_Image_Control( $wp_customize, 'usa_pub_issue4_images_preview_control', array(
  'label' => 'Image preview',
  'section' => 'usa_pub_latest_issue4_section',
  'settings' => 'usa_pub_issue4_image_preview_setting',
  'flex_width' => true,
  'flex_height' => true,
  'width' => 650,
  'height' => 460
) ) );

//  Issue 4 published link
$wp_customize->add_setting( 'usa_pub_issue4_published_link_setting', array (
  'default'       => ''
) );

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'usa_pub_issue4_published_link_control', array(
  'label'         => 'Published Link',
  'section'       => 'usa_pub_latest_issue4_section',
  'settings'      => 'usa_pub_issue4_published_link_setting',
  'type'          => 'text'
) ) );