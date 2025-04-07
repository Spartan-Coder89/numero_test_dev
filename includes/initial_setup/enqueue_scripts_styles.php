<?php

if (!defined('ABSPATH')) {
  die;
}

wp_enqueue_style('wsg_style', get_stylesheet_uri());

if (is_page('home')) {
  wp_enqueue_style('wsg_slick', THEME_URI. '/assets/vendor/slick/slick.css');
  wp_enqueue_style('wsg_slick_theme', THEME_URI. '/assets/vendor/slick/slick-theme.css');
}

wp_enqueue_style('wsg_common', THEME_URI. '/assets/css/common.css');

if (is_page('home')) {
  wp_enqueue_style('wsg_home', THEME_URI. '/assets/css/home.css');

  wp_enqueue_script('wsg_slick', THEME_URI. '/assets/vendor/slick/slick.min.js', ['jquery'], '1.0', true);

  if (is_connected_to_internet()) {
    wp_enqueue_script('wsg_gsap', 'https://cdn.jsdelivr.net/npm/gsap@3.12.7/dist/gsap.min.js', [], '1.0', true);
    wp_enqueue_script('wsg_gsap_scrolltrigger', 'https://cdn.jsdelivr.net/npm/gsap@3.12.7/dist/ScrollTrigger.min.js', [], '1.0', true);
  }

  wp_enqueue_script('wsg_common', THEME_URI. '/assets/js/common.js', [], '1.0', true);
  wp_enqueue_script('wsg_home', THEME_URI. '/assets/js/home.js', ['jquery'], '1.0', true);

  if (is_connected_to_internet()) {
    wp_enqueue_script('wsg_gsap_home', THEME_URI. '/assets/js/gsap_home.js', [], '1.0', true);
  }
}