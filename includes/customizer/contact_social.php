<?php

if (!defined('ABSPATH')) {
  die;
}


$wp_customize->add_panel('wsg_contact_social_panel', array(
	'title' => 'Contact and Social'
));


/**
 * Contact Info
 * ==========================================================================================================================================
 */
$wp_customize->add_section('wsg_contact_info_section', array(
  'title' => 'Contact Info',
  'panel' => 'wsg_contact_social_panel'
));

//  Address
$wp_customize->add_setting( 'wsg_contact_info_address_section');
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'wsg_contact_info_address_control', array(
  'label' => 'Address',
  'section' => 'wsg_contact_info_section',
  'settings' => 'wsg_contact_info_address_section',
  'type' => 'textarea',
	'input_attrs' => array('style' => 'height:200px')
)));


/**
 * Social Links
 * ==========================================================================================================================================
 */
$wp_customize->add_section('wsg_social_links_section', array(
  'title' => 'Social Links',
  'panel' => 'wsg_contact_social_panel'
));

//  Facebook
$wp_customize->add_setting( 'wsg_social_links_facebook_setting');
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'wsg_social_links_facebook_control', array(
  'label' => 'Facebook',
  'section' => 'wsg_social_links_section',
  'settings' => 'wsg_social_links_facebook_setting',
  'type' => 'text'
)));

//  Instagram
$wp_customize->add_setting( 'wsg_social_links_instagram_setting');
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'wsg_social_links_instagram_control', array(
  'label' => 'Instagram',
  'section' => 'wsg_social_links_section',
  'settings' => 'wsg_social_links_instagram_setting',
  'type' => 'text'
)));