<?php

if (!defined('ABSPATH')) {
  die;
}

if (is_null(get_page_by_path('home'))){

  wp_insert_post([
    'post_title'    => 'Home',
    'post_content'  => '',
    'post_status'   => 'publish',
    'post_author'   => 1,
    'post_type'     => 'page',
    'post_name'     => 'home'
  ]);

  //  Set the home page as homepage
  $home = get_page_by_path('home');
  update_option('page_on_front', $home->ID);
  update_option('show_on_front', 'page');
}

if (is_null(get_page_by_path('first-home-buyers'))){

  wp_insert_post([
    'post_title'    => 'First Home Buyers',
    'post_content'  => '',
    'post_status'   => 'publish',
    'post_author'   => 1,
    'post_type'     => 'page',
    'post_name'     => 'first-home-buyers'
  ]);
}

if (is_null(get_page_by_path('investors'))){

  wp_insert_post([
    'post_title'    => 'Investors',
    'post_content'  => '',
    'post_status'   => 'publish',
    'post_author'   => 1,
    'post_type'     => 'page',
    'post_name'     => 'investors'
  ]);
}

if (is_null(get_page_by_path('homes-for-sale'))){

  wp_insert_post([
    'post_title'    => 'Homes For Sale',
    'post_content'  => '',
    'post_status'   => 'publish',
    'post_author'   => 1,
    'post_type'     => 'page',
    'post_name'     => 'homes-for-sale'
  ]);
}

if (is_null(get_page_by_path('developers'))){

  wp_insert_post([
    'post_title'    => 'Developers',
    'post_content'  => '',
    'post_status'   => 'publish',
    'post_author'   => 1,
    'post_type'     => 'page',
    'post_name'     => 'developers'
  ]);
}

if (is_null(get_page_by_path('about-us'))){

  wp_insert_post([
    'post_title'    => 'About Us',
    'post_content'  => '',
    'post_status'   => 'publish',
    'post_author'   => 1,
    'post_type'     => 'page',
    'post_name'     => 'about-us'
  ]);
}

if (is_null(get_page_by_path('testimonials'))){

  wp_insert_post([
    'post_title'    => 'Testimonials',
    'post_content'  => '',
    'post_status'   => 'publish',
    'post_author'   => 1,
    'post_type'     => 'page',
    'post_name'     => 'testimonials'
  ]);
}

if (is_null(get_page_by_path('get-in-touch'))){

  wp_insert_post([
    'post_title'    => 'Get In Touch',
    'post_content'  => '',
    'post_status'   => 'publish',
    'post_author'   => 1,
    'post_type'     => 'page',
    'post_name'     => 'get-in-touch'
  ]);
}