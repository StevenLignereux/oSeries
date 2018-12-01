<?php

get_header();

if (have_posts()): while(have_posts()): the_post();
    get_template_part('template-parts/posts/page', 'default');
endwhile; endif;

//
// // Requete perso avec WP_Query et nos arguments spécifiques
// $args_query_posts = [
//   // Je souhaite afficher le contenu d'une page
//   'post_type' => 'page',
//   // Je souhaite afficher un contenu dont le slug est "contact"
//   'post_parent' => get_the_ID()
// ];
//
// $query_posts = new WP_Query($args_query_posts);
//
// if ($query_posts->have_posts()): while($query_posts->have_posts()): $query_posts->the_post();
//
//     get_template_part('template-parts/posts/page', 'default');
//
// endwhile; endif;
//
// wp_reset_postdata();

get_footer();

?>
