<?php

/**
 * Get header logo
 */
function get_header_logo() {

  $return_value = THEME_URI .'/assets/images/header_logo.png';

  if (!empty(get_theme_mod('wsg_logo_settings'))) {
    $return_value = wp_get_attachment_image_url(get_theme_mod('wsg_logo_settings'));
  }

  return $return_value;
}

/**
 * Receives nav menu name as parameter
 * Outputs the the menu items in html format
 */
function output_menu($menu_name) {

  if (!empty(wp_get_nav_menu_object($menu_name))) {

    $main_nav_menu = wp_get_nav_menu_object($menu_name);
    $main_nav_menu_items = wp_get_nav_menu_items($main_nav_menu);

    foreach ($main_nav_menu_items as $key => $menu_item) {
      if (($key + 1) <= 7) {
        echo '<a href="'. $menu_item->url .'">'. $menu_item->post_title .'</a>';
      } else {
        break;
      }
    }
  }
}

/**
 * Retrieves the testimonials items for display on the footer
 */
function get_footer_testimonials() {

  $return = '';

  $testimonials = get_posts([
    'numberposts' => 4,
    'post_type' => 'testimonials',
    'post_status' => 'publish',
    'meta_key' => '_add_to_footer',
    'meta_value' => 'on'
  ]);

  foreach ($testimonials as $key => $testimonial) {
    
    $return .= '<li class="single_footer_testimonial" style="background-image: url('. get_post_meta($testimonial->ID, '_property_bought_img', true) .')">
      <div class="details">
        <p>'. $testimonial->post_content .'</p>
        <p class="client">- '. get_post_meta($testimonial->ID, '_client_name', true) .'</p>
      </div>
    </li>';
  }

  return $return;
}

/**
 * Get all testimonials for display on the homepage testimonial section
 */
function get_testimonials() {

  $return = '';

  $testimonials = get_posts([
    'numberposts' => -1,
    'post_type' => 'testimonials',
    'post_status' => 'publish'
  ]);

  foreach ($testimonials as $key => $testimonial) {
    
    $return .= '<li>
      <div class="testimonials_item">
        <div class="statement_wrap">
          <div class="statement">
            <p class="statement">'. nl2br(get_the_content(null, true, $testimonial->ID)) .'</p>
          </div>
          <p class="client">'. get_post_meta($testimonial->ID, '_client_name', true) .'</p>
        </div>
      </div>
    </li>';
  }

  return $return;
}

/**
 * Retrieves property homes for display on the home page
 */
function get_homes_for_sale_list() {

  $return = '';

  $homes = get_posts([
    'numberposts' => 4,
    'post_type' => 'homes',
    'post_status' => 'publish',
    'meta_key' => '_set_as_featured',
    'meta_value' => 'on'
  ]);

  foreach ($homes as $key => $home) {
    
    $return .= '<li>
      <div class="featured_img" style="background-image: url('. get_the_post_thumbnail_url($home->ID) .')"></div>
      <div class="details">
        <p class="address">'. get_post_meta($home->ID, '_property_address', true) .'</p>
        <p class="price">Priced From '. get_post_meta($home->ID, '_property_starting_price', true) .'</p>
      </div>
      <a href="'. get_the_permalink($home->ID) .'" class="link">Learn More</a>
    </li>';
  }

  return $return;
}

/**
 * Retrieves property homes for display on the home page
 * in a marquee
 */
function get_homes_marquee() {

  $return = '';

  $homes = get_posts([
    'numberposts' => -1,
    'post_type' => 'homes',
    'post_status' => 'publish'
  ]);

  foreach ($homes as $key => $home) {
    $return .= '<div class="homes_marquee_item" style="background-image: url('. get_the_post_thumbnail_url($home->ID) .')"></div>';
  }

  return $return;
}

/**
 * Check for internet connectivity
 */
function is_connected_to_internet() {

  $connected = @fsockopen("www.google.com", 80);
  
  if ($connected){
    fclose($connected);
    return true;
  }

  return false;
}