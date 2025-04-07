<?php

if (!defined('ABSPATH')) {
  die;
}

//  Site logo
$wp_customize->add_setting( 'wsg_logo_settings');
$wp_customize->add_control(new WP_Customize_Cropped_Image_Control( $wp_customize, 'wsg_logo_control', [
	'label' => 'Logo',
	'section' => 'title_tagline',
	'settings' => 'wsg_logo_settings',
	'flex_width' => true,
	'flex_height' => true
]));