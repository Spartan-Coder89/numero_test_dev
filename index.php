<?php 

if (!defined('ABSPATH')) {
	die;
}

get_header();

if (is_page('home')) {
  get_template_part('template_parts/home');
} else {
  get_template_part('template_parts/not_developed_yet');
}

get_footer();