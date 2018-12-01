<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">

    <?php wp_head(); ?>

  </head>


<body>
    <header>

<?php wp_nav_menu( array( 'theme_location' => 'Top' ) ); ?>


<div id="name">
<a href="<?php echo get_permalink(194); ?>">o'series</a>
</div>

<?php get_search_form(); ?>





    </header>
