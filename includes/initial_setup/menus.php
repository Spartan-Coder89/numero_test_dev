<?php

if ( !defined( 'ABSPATH' ) ) {
  die;
}

if (empty(wp_get_nav_menu_object('Header Menu'))) {

  $menu_id = wp_create_nav_menu('Header Menu');

  wp_update_nav_menu_item( $menu_id, 0, array(
    'menu-item-title' => __('First Home Buyers'),
    'menu-item-url' => home_url( '/first-home-buyers' ),
    'menu-item-status' => 'publish'
  ) );

  wp_update_nav_menu_item( $menu_id, 0, array(
    'menu-item-title' => __('Investors'),
    'menu-item-url' => home_url( '/investors' ),
    'menu-item-status' => 'publish'
  ) );

  wp_update_nav_menu_item( $menu_id, 0, array(
    'menu-item-title' => __('Homes For Sale'),
    'menu-item-url' => home_url( '/homes-for-sale' ),
    'menu-item-status' => 'publish'
  ) );

  wp_update_nav_menu_item( $menu_id, 0, array(
    'menu-item-title' => __('Developers'),
    'menu-item-url' => home_url( '/developers' ),
    'menu-item-status' => 'publish'
  ) );

  wp_update_nav_menu_item( $menu_id, 0, array(
    'menu-item-title' => __('About Us'),
    'menu-item-url' => home_url( '/about-us' ),
    'menu-item-status' => 'publish'
  ) );

  wp_update_nav_menu_item( $menu_id, 0, array(
    'menu-item-title' => __('Testimonials'),
    'menu-item-url' => home_url( '/testimonials' ),
    'menu-item-status' => 'publish'
  ) );

  wp_update_nav_menu_item( $menu_id, 0, array(
    'menu-item-title' => __('Get In Touch'),
    'menu-item-url' => home_url( '/get-in-touch' ),
    'menu-item-status' => 'publish'
  ) );
}


if (empty(wp_get_nav_menu_object('Footer Menu'))) {

  $menu_id = wp_create_nav_menu('Footer Menu');

  wp_update_nav_menu_item( $menu_id, 0, array(
    'menu-item-title' => __('First Home Buyers'),
    'menu-item-url' => home_url( '/first-home-buyers' ),
    'menu-item-status' => 'publish'
  ) );

  wp_update_nav_menu_item( $menu_id, 0, array(
    'menu-item-title' => __('Investors'),
    'menu-item-url' => home_url( '/investors' ),
    'menu-item-status' => 'publish'
  ) );

  wp_update_nav_menu_item( $menu_id, 0, array(
    'menu-item-title' => __('Homes For Sale'),
    'menu-item-url' => home_url( '/homes-for-sale' ),
    'menu-item-status' => 'publish'
  ) );

  wp_update_nav_menu_item( $menu_id, 0, array(
    'menu-item-title' => __('Developers'),
    'menu-item-url' => home_url( '/developers' ),
    'menu-item-status' => 'publish'
  ) );

  wp_update_nav_menu_item( $menu_id, 0, array(
    'menu-item-title' => __('About Us'),
    'menu-item-url' => home_url( '/about-us' ),
    'menu-item-status' => 'publish'
  ) );

  wp_update_nav_menu_item( $menu_id, 0, array(
    'menu-item-title' => __('Testimonials'),
    'menu-item-url' => home_url( '/testimonials' ),
    'menu-item-status' => 'publish'
  ) );

  wp_update_nav_menu_item( $menu_id, 0, array(
    'menu-item-title' => __('Get In Touch'),
    'menu-item-url' => home_url( '/get-in-touch' ),
    'menu-item-status' => 'publish'
  ) );
}