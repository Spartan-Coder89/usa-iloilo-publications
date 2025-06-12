<?php


$wp_customize->add_section( 'usa_pub_social_section', array(
  'title'         => 'USA PUB Social Links'
) );


//  Facebook
$wp_customize->add_setting( 'usa_pub_fb_setting', array (
  'default'       => ''
) );

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'usa_pub_fb_control', array(
  'label'         => 'Facebook Page',
  'section'       => 'usa_pub_social_section',
  'settings'      => 'usa_pub_fb_setting',
  'type'          => 'text',
) ) );


//  Instagram
$wp_customize->add_setting( 'usa_pub_inst_setting', array (
  'default'       => ''
) );

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'usa_pub_inst_control', array(
  'label'         => 'Instagram',
  'section'       => 'usa_pub_social_section',
  'settings'      => 'usa_pub_inst_setting',
  'type'          => 'text',
) ) );


//  Twitter
$wp_customize->add_setting( 'usa_pub_twit_setting', array (
  'default'       => ''
) );

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'usa_pub_twit_control', array(
  'label'         => 'Twitter',
  'section'       => 'usa_pub_social_section',
  'settings'      => 'usa_pub_twit_setting',
  'type'          => 'text',
) ) );


//  Youtube
$wp_customize->add_setting( 'usa_pub_yt_setting', array (
  'default'       => ''
) );

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'usa_pub_yt_control', array(
  'label'         => 'Youtube',
  'section'       => 'usa_pub_social_section',
  'settings'      => 'usa_pub_yt_setting',
  'type'          => 'text',
) ) );