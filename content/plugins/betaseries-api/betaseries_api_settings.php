<?php
/*
Plugin Name: betaseries-api
Description: Réglages pour mon l'appel aux api dans oSeries
Version: 0.0.1
Author: Fusion
*/

if (!defined('WPINC')) {
  die('Try again');
}

require plugin_dir_path(__FILE__) . 'inc/api_betaseries.php';

function wp_rest_api_selection()
{
    $cache_dir = WP_CONTENT_DIR . DIRECTORY_SEPARATOR . 'cache' . DIRECTORY_SEPARATOR;

    $cache_file = 'selection.cache';

    if (file_exists($cache_dir.$cache_file) && filemtime($cache_dir.$cache_file) + 120 < time() ) {

        $html = file_get_contents($cache_dir.$cache_file);

    } else {

        $html = '';

        $betaseries = new betaseries();

        $array_series = $betaseries->getRandom();

        // echo '<pre>';
        // var_dump($array_series);
        // die();

        foreach ($array_series['shows'] as $serie) {

            $html .= '<a href="'.home_url('/').'serie/'.sanitize_title($serie['title']).'">';

            if (empty($serie['images']['poster'])) {
                $html .= $serie['title'];
            }  else {
                $html .= '<img src="'.$serie['images']['poster'].'" alt="'.$serie['title'].'" style="width:150px;" />';
            }
            $html .= '</a>';
        }

        file_put_contents($cache_dir.$cache_file, $html);
    }

    return $html;
}
