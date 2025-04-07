<?php

if (!defined('ABSPATH')) {
  die;
}

add_action('after_switch_theme', function() {
  include_once 'create_pages.php';
  include_once 'menus.php';
});

add_action('init', function() {
  include_once 'add_theme_support.php';
  include_once 'custom_post_types.php';
});

add_action('add_meta_boxes', function() {
  include_once 'custom_metaboxes.php';
});

add_action('wp_enqueue_scripts', function() {
  include_once 'enqueue_scripts_styles.php';
});

add_action('admin_enqueue_scripts', function($hook) {
  global $post;
  include_once 'enqueue_admin_scripts_styles.php';
});

include_once 'save_postmeta.php';