<?php

if (!defined('ABSPATH')) {
  die;
}

/**
 * Testimonials metabox
 */
add_meta_box(
  'testimonials_box',
  'Client Details',
  function($post) { ?>
    <style>
      #testimonials_inputs {
        display: flex;
        flex-wrap: wrap;
      }

      #testimonials_inputs > * {
        flex: 1 1 250px;
        display: flex;
        flex-direction: column;
      }

      #testimonials_inputs .form_control {
        padding-right: 24px;
        margin-bottom: 12px;
      }

      #testimonials_inputs .form_control label {
        margin-bottom: 12px;
      }

      #testimonials_inputs .form_control input[type="text"] {
        width: 100%;
      }

      #testimonials_inputs .img_preview {
        max-width: 250px;
        height: 250px;
        background-color:rgb(211, 211, 211);
        margin-bottom: 10px;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
      }
    </style>

    <div id="testimonials_inputs">
      <div class="form_control">
        <label for="client_name">Client Name:</label>
        <input type="text" name="client_name" value="<?php echo get_post_meta($post->ID, '_client_name', true); ?>">
      </div>

      <div class="form_control">
        <label for="property_bought">Property Bought Image:</label>
        <div id="img_preview" class="img_preview" style="background-image: url('<?php echo get_post_meta($post->ID, '_property_bought_img', true); ?>')"></div>
        <button type="button" id="update_property_bought">Update Image</button>
        <input type="hidden" id="property_bought_img" name="property_bought_img" value="<?php echo get_post_meta($post->ID, '_property_bought_img', true); ?>">
      </div>

      <div class="form_control">
        <label for="add_to_footer">Add To Footer:</label>
        <input type="checkbox" name="add_to_footer" <?php echo  get_post_meta($post->ID, '_add_to_footer', true) == 'on' ? 'checked' : ''; ?>>
      </div>
    </div>

    <input type="hidden" name="testimonials_nonce" value="<?php echo wp_create_nonce('testimonials_nonce'); ?>">
    <?php
  },
  'testimonials',
  'side'
);

/**
 * Homes metabox
 */
add_meta_box(
  'homes_box',
  'Details',
  function($post) { ?>
    <style>
      #homes_box_inputs {
        display: flex;
        flex-wrap: wrap;
      }

      #homes_box_inputs > * {
        flex: 1 1 250px;
        display: flex;
        flex-direction: column;
      }

      #homes_box_inputs .form_control {
        padding-right: 24px;
      }

      #homes_box_inputs .form_control label {
        margin-bottom: 12px;
      }

      #homes_box_inputs .form_control input[type="text"] {
        width: 100%;
      }
    </style>

    <div id="homes_box_inputs">
      <div class="form_control">
        <label for="property_address">Property Address:</label>
        <input type="text" name="property_address" value="<?php echo get_post_meta($post->ID, '_property_address', true); ?>">
      </div>

      <div class="form_control">
        <label for="property_starting_price">Property Starting Price:</label>
        <input type="text" name="property_starting_price" value="<?php echo get_post_meta($post->ID, '_property_starting_price', true); ?>">
      </div>

      <div class="form_control">
        <label for="set_as_featured">Set As Featured:</label>
        <input type="checkbox" name="set_as_featured" <?php echo  get_post_meta($post->ID, '_set_as_featured', true) == 'on' ? 'checked' : ''; ?>>
      </div>
    </div>

    <input type="hidden" name="homes_nonce" value="<?php echo wp_create_nonce('homes_nonce'); ?>">
    <?php
  },
  'homes',
  'normal'
);