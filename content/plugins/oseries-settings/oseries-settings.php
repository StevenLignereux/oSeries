<?php
/*
Plugin Name: oSeries Settings
Description: Réglages pour mon thème oSeries
Version: 0.0.1
Author: Fusion
*/
// Je sécurise mon plugin
if (!defined('WPINC')) {
  die('Try again');
}
// Mise en place de mon custom post type Series
require plugin_dir_path(__FILE__) . 'inc/cpt_serie.php';

$cpt_serie = new cpt_serie();

// A l'activation du plugin, je demande à WP d'executer la méthode "activation" de mon objet
register_activation_hook(__FILE__, [$cpt_serie, 'activation']);
// A la désactivation du plugin, je demande à WP d'executation la méthode "deactivation" de mon objet
register_deactivation_hook(__FILE__, [$cpt_serie, 'deactivation']);
