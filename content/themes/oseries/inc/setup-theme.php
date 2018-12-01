<?php
if (!function_exists('oseries_setup')):
  function oseries_setup() {
    /*
      * Enable support for Post Thumbnails on posts and pages.
      *
      * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
    */
    add_theme_support('post-thumbnails');
    /*
      * Let WordPress manage the document title.
      * By adding theme support, we declare that this theme does not use a
      * hard-coded <title> tag in the document head, and expect WordPress to
      * provide it for us.
    */
    add_theme_support( 'title-tag' );
    // This theme uses wp_nav_menu() in one location.
    // register_nav_menus( array(
    // register_nav_menus( [
		register_nav_menus([
      'main-nav' => 'Menu principal de oSeries'
    ]);
  }
endif;
add_action ('after_setup_theme', 'oseries_setup');
