<?php


$wp_customize->add_section( 'usa_pub_contact_info_section', array(
  'title' => 'USA PUB Contact Info'
) );


//  Email
$wp_customize->add_setting( 'usa_pub_email_setting', array (
  'default'       => ''
) );

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'usa_pub_email_control', array(
  'label'         => 'Email',
  'section'       => 'usa_pub_contact_info_section',
  'settings'      => 'usa_pub_email_setting',
  'type'          => 'text',
) ) );


//  Telephone
$wp_customize->add_setting( 'usa_pub_tel_setting', array (
  'default'       => ''
) );

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'usa_pub_tel_control', array(
  'label'         => 'Telephone/Mobile',
  'section'       => 'usa_pub_contact_info_section',
  'settings'      => 'usa_pub_tel_setting',
  'type'          => 'text',
) ) );


//  Address
$wp_customize->add_setting( 'usa_pub_address_setting', array (
  'default'       => ''
) );

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'usa_pub_address_control', array(
  'label'         => 'Address',
  'section'       => 'usa_pub_contact_info_section',
  'settings'      => 'usa_pub_address_setting',
  'type'          => 'text',
) ) );