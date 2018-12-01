<?php

function oseries_scripts()
{


    wp_enqueue_style(
    'oseries-css',
    get_theme_file_uri('/public/css/app.css')
  );

    


    wp_enqueue_script(
    'oseries-app-js',
    get_theme_file_uri('public/js/app.js'),
    ['oseries-vendor-js'],
    '1.0.0',
    true
    );

    wp_enqueue_script(
    'oseries-vendor-js',
    get_theme_file_uri('public/js/vendor.js'),
    [],
    '1.0.0',
    true
    );
}

add_action('wp_enqueue_scripts', 'oseries_scripts');
