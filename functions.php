<?php

if (!defined('ABSPATH')) {
  die;
}

define('THEME_DIR', get_template_directory());
define('THEME_URI', get_template_directory_uri());

include_once THEME_DIR .'/includes/helper_functions.php';
include_once THEME_DIR .'/includes/initial_setup/setup.php';
include_once THEME_DIR .'/includes/customizer/setup.php';