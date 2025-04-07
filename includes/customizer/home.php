<?php

if (!defined('ABSPATH')) {
  die;
}


$wp_customize->add_panel('wsg_home_panel', array(
	'title' => 'Homepage'
));


/**
 * Hero Banner Section
 * ==========================================================================================================================================
 */
$wp_customize->add_section('wsg_hero_banner_section', array(
  'title' => 'Hero Banner Section',
  'panel' => 'wsg_home_panel'
));

//  Headline dark blue
$wp_customize->add_setting( 'wsg_hero_banner_headline_top_setting');
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'wsg_hero_banner_headline_top_control', array(
  'label' => 'Headline Top',
  'section' => 'wsg_hero_banner_section',
  'settings' => 'wsg_hero_banner_headline_top_setting',
  'type' => 'text'
)));

// Headline light blue
$wp_customize->add_setting( 'wsg_hero_banner_headline_bottom_setting');
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'wsg_hero_banner_headline_bottom_control', array(
  'label' => 'Headline Bottom',
  'section' => 'wsg_hero_banner_section',
  'settings' => 'wsg_hero_banner_headline_bottom_setting',
  'type' => 'text'
)));

// Headline description
$wp_customize->add_setting( 'wsg_hero_banner_description_setting');
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'wsg_hero_banner_description_control', array(
  'label' => 'Headline Description',
  'section' => 'wsg_hero_banner_section',
  'settings' => 'wsg_hero_banner_description_setting',
  'type' => 'textarea',
	'input_attrs' => array('style' => 'height:200px')
)));


/**
 * After Banner Section
 * ==========================================================================================================================================
 */
$wp_customize->add_section('wsg_after_banner_section', array(
  'title' => 'After Banner Section',
  'panel' => 'wsg_home_panel'
));

//  After banner headline
$wp_customize->add_setting('wsg_hero_after_banner_headline_setting');
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'wsg_hero_after_banner_headline_control', array(
  'label' => 'Headline',
  'section' => 'wsg_after_banner_section',
  'settings' => 'wsg_hero_after_banner_headline_setting',
  'type' => 'text'
)));

// After banner description
$wp_customize->add_setting('wsg_hero_after_banner_description_setting');
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'wsg_hero_after_banner_description_control', array(
  'label' => 'Description',
  'section' => 'wsg_after_banner_section',
  'settings' => 'wsg_hero_after_banner_description_setting',
  'type' => 'textarea',
	'input_attrs' => array('style' => 'height:200px')
)));


/**
 * We Are Specialist Section
 * ==========================================================================================================================================
 */
$wp_customize->add_section('wsg_specialist_section', array(
  'title' => 'We Are Specialist Section',
  'panel' => 'wsg_home_panel'
));

//  Homes sold
$wp_customize->add_setting('wsg_hero_specialist_homes_sold_setting');
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'wsg_hero_specialist_homes_sold_control', array(
  'label' => 'Homes Sold',
  'section' => 'wsg_specialist_section',
  'settings' => 'wsg_hero_specialist_homes_sold_setting',
  'type' => 'text'
)));

//  We are specialist headline
$wp_customize->add_setting('wsg_hero_specialist_headline_setting');
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'wsg_hero_specialist_headline_control', array(
  'label' => 'Specialist Headline',
  'section' => 'wsg_specialist_section',
  'settings' => 'wsg_hero_specialist_headline_setting',
  'type' => 'text'
)));


/**
 * Our Services Section
 * ==========================================================================================================================================
 */
$wp_customize->add_section('wsg_our_services_section', array(
  'title' => 'Our Services Section',
  'panel' => 'wsg_home_panel'
));

//  After banner headline
$wp_customize->add_setting('wsg_hero_our_services_headline_setting');
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'wsg_hero_our_services_headline_control', array(
  'label' => 'Headline',
  'section' => 'wsg_our_services_section',
  'settings' => 'wsg_hero_our_services_headline_setting',
  'type' => 'text'
)));

// After banner description
$wp_customize->add_setting('wsg_hero_our_services_description_setting');
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'wsg_hero_our_services_description_control', array(
  'label' => 'Description',
  'section' => 'wsg_our_services_section',
  'settings' => 'wsg_hero_our_services_description_setting',
  'type' => 'textarea',
	'input_attrs' => array('style' => 'height:200px')
)));