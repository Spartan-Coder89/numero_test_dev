<?php

if (!defined('ABSPATH')) {
  die;
}

add_action('customize_register', function($wp_customize) {
  include_once 'home.php';
  include_once 'contact_social.php';
  include_once 'general.php';
});