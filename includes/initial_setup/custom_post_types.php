<?php

if (!defined('ABSPATH')) {
  die;
}

/**
 * Testimonials
 */
register_post_type('testimonials', [
  'labels'               => [
    'name'               => 'Testimonials',
    'singular_name'      => 'Testimonial',
    'menu_name'          => 'Testimonials',
    'name_admin_bar'     => 'Testimonial',
    'add_new'            => 'Add New',
    'add_new_item'       => 'Add New Testimonial',
    'new_item'           => 'New Testimonial',
    'edit_item'          => 'Edit Testimonial',
    'view_item'          => 'View Testimonial',
    'all_items'          => 'All Testimonials',
    'search_items'       => 'Search Testimonials',
    'parent_item_colon'  => 'Parent Testimonials:',
    'not_found'          => 'No testimonials found.',
    'not_found_in_trash' => 'No testimonials found in Trash.',
  ],
  'public'             => true,
  'publicly_queryable' => true,
  'show_ui'            => true,
  'show_in_menu'       => true,
  'query_var'          => true,
  'capability_type'    => 'post',
  'has_archive'        => true,
  'hierarchical'       => false,
  'menu_position'      => null,
  'supports'           => ['title', 'thumbnail', 'editor']
]);

/**
 * Homes
 */
register_post_type('homes', [
  'labels'               => [
    'name'               => 'Homes',
    'singular_name'      => 'Home',
    'menu_name'          => 'Homes',
    'name_admin_bar'     => 'Home',
    'add_new'            => 'Add New',
    'add_new_item'       => 'Add New Home',
    'new_item'           => 'New Home',
    'edit_item'          => 'Edit Home',
    'view_item'          => 'View Home',
    'all_items'          => 'All Homes',
    'search_items'       => 'Search Homes',
    'parent_item_colon'  => 'Parent Homes:',
    'not_found'          => 'No homes found.',
    'not_found_in_trash' => 'No homes found in Trash.',
  ],
  'public'             => true,
  'publicly_queryable' => true,
  'show_ui'            => true,
  'show_in_menu'       => true,
  'query_var'          => true,
  'capability_type'    => 'post',
  'has_archive'        => true,
  'hierarchical'       => false,
  'menu_position'      => null,
  'supports'           => ['title', 'thumbnail', 'editor']
]);