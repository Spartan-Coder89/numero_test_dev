<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="<?php echo get_site_icon_url(); ?>">
  <title><?php echo 'White Stone Group - '. get_the_title(); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
      <div class="wrap">
        <h1 id="header_logo">
          <img src="<?php echo get_header_logo(); ?>" alt="White Stone Group">
        </h1>
        <nav id="main_nav">
          <?php output_menu('Header Menu'); ?>
          <a href="#" class="header_cta">Homes For Sale</a>
        </nav>
        <div id="mobile_menu_open">
          <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3">
            <path d="M160-240q-17 0-28.5-11.5T120-280q0-17 11.5-28.5T160-320h640q17 0 28.5 11.5T840-280q0 17-11.5 28.5T800-240H160Zm0-200q-17 0-28.5-11.5T120-480q0-17 11.5-28.5T160-520h640q17 0 28.5 11.5T840-480q0 17-11.5 28.5T800-440H160Zm0-200q-17 0-28.5-11.5T120-680q0-17 11.5-28.5T160-720h640q17 0 28.5 11.5T840-680q0 17-11.5 28.5T800-640H160Z"/>
          </svg>
        </div>
        <div id="mobile_main_nav">
          <div id="mobile_menu_close">
            <svg  xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3">
              <path d="M480-424 284-228q-11 11-28 11t-28-11q-11-11-11-28t11-28l196-196-196-196q-11-11-11-28t11-28q11-11 28-11t28 11l196 196 196-196q11-11 28-11t28 11q11 11 11 28t-11 28L536-480l196 196q11 11 11 28t-11 28q-11 11-28 11t-28-11L480-424Z"/>
            </svg>
          </div>
          <div id="mobile_main_nav_container">
            <nav>
              <?php output_menu('Header Menu'); ?>
              <div>
                <a href="#" class="header_cta">Homes For Sale</a>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </header>