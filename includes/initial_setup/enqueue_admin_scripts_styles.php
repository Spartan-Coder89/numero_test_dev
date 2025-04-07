<?php

if (!defined('ABSPATH')) {
  die;
}

if ($hook === 'post-new.php' || $hook === 'post.php') {

  if ($post->post_type === 'testimonials') {
    wp_enqueue_media();
    wp_enqueue_script('wsg_admin_testimonials', THEME_URI. '/assets/js/admin/testimonials.js', ['jquery'], null, true);
  }
}