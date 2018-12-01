<?php

get_header();
do_action('show_beautiful_filters');



 if (have_posts()): while(have_posts()): the_post(); ?>

  <?php get_template_part('template-parts/posts/serie', 'results'); ?>

<?php endwhile; else: ?>

  <p>
    Désolé, mais rien ne correspond à votre recherche.
  </p>

<?php endif; ?>
