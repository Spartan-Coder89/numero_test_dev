<?php

if (!defined('ABSPATH')) {
  die;
}

/**
 * Testimonials save metadata
 */
add_action('save_post_testimonials', function($post_id) {

	if (!isset($_POST['testimonials_nonce'])) {
		return;
	}

	if (!wp_verify_nonce($_POST['testimonials_nonce'], 'testimonials_nonce')) {
		return;
	}

	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
		return;
	}
	
	if (isset($_POST['client_name']) and !empty(isset($_POST['client_name']))) {

		$client_name = htmlspecialchars(strip_tags($_POST['client_name']));
		update_post_meta($post_id, '_client_name', $client_name);
	}

	if (isset($_POST['property_bought_img']) and !empty(isset($_POST['property_bought_img']))) {

		$property_bought_img = htmlspecialchars(strip_tags($_POST['property_bought_img']));
		update_post_meta($post_id, '_property_bought_img', $property_bought_img);
	}

	if (isset($_POST['add_to_footer']) and !empty(isset($_POST['add_to_footer']))) {

		$add_to_footer = htmlspecialchars(strip_tags($_POST['add_to_footer']));
		update_post_meta($post_id, '_add_to_footer', $add_to_footer);
		
	} else {
		update_post_meta($post_id, '_add_to_footer', 'off');
	}
});

/**
 * Homes save metadata
 */
add_action('save_post_homes', function($post_id) {

	if (!isset($_POST['homes_nonce'])) {
		return;
	}

	if (!wp_verify_nonce($_POST['homes_nonce'], 'homes_nonce')) {
		return;
	}

	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
		return;
	}
	
	if (isset($_POST['property_address']) and !empty(isset($_POST['property_address']))) {

		$property_address = htmlspecialchars(strip_tags($_POST['property_address']));
		update_post_meta($post_id, '_property_address', $property_address);
	}

  if (isset($_POST['property_starting_price']) and !empty(isset($_POST['property_starting_price']))) {

		$property_starting_price = htmlspecialchars(strip_tags($_POST['property_starting_price']));
		update_post_meta($post_id, '_property_starting_price', $property_starting_price);
	}

	if (isset($_POST['set_as_featured']) and !empty(isset($_POST['set_as_featured']))) {

		$set_as_featured = htmlspecialchars(strip_tags($_POST['set_as_featured']));
		update_post_meta($post_id, '_set_as_featured', $set_as_featured);

	} else {
		update_post_meta($post_id, '_set_as_featured', 'off');
	}
});