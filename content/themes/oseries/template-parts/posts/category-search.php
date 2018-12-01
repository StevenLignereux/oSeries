<?php


do_action('show_beautiful_filters');



 if (have_posts()): while(have_posts()): the_post(); ?>


<?php endwhile; else: ?>

  <p>
    Désolé, mais rien ne correspond à votre recherche.
  </p>

<?php endif; ?>
