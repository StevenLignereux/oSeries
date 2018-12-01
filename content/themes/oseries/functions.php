<?php
// Mise en place du setup de thème
require get_theme_file_path('inc/setup-theme.php');
// Netoyage du thème
require get_theme_file_path('inc/clean-theme.php');
// Scripts & styles
require get_theme_file_path('inc/enqueue.php');
// Template tags de mon thème
require get_theme_file_path('inc/theme-template-tags.php');
// J'inclus mon fichier de customizer
// require get_theme_file_path('inc/customizer.php');
register_nav_menus( array(
        'Top' => 'Navigation principale',
    ) );
//fonction pour faire une recherche sur le CPT series
// function filter_search($query) {
//     if ($query->is_search) {
//       $query->set('post_type', array('post', 'serie'));
//     };
//     return $query;
// };

//fonction pour les boutons dropdown
function click_taxonomy_dropdown_genre($taxonomy) { ?>
    <form action="/" method="get">
    <select name="cat" id="cat" class="postform">
    <option value="-1">Genre</option>
    <?php
    $terms = get_terms($taxonomy);
    foreach ($terms as $term) {
        printf( '<option class="level-0" value="%s">%s</option>', $term->slug, $term->name );
    }
    echo '</select></form>';
    ?>
<?php };
//fonction pour définir le template tag d'infos des series
function allocine_tag() {
  echo '<p>' .$title;

}


//fonction pour intégrer le form de wpdiscuz_comments
function my_wpdiscuz_shortcode() {
   if(file_exists(ABSPATH . 'wp-content/plugins/wpdiscuz/templates/comment/comment-form.php')){
      include_once ABSPATH . 'wp-content/plugins/wpdiscuz/templates/comment/comment-form.php';
   }
}
add_shortcode( 'wpdiscuz_comments', 'my_wpdiscuz_shortcode' );
// fonction pour lier les images aux fiches series
add_filter('post_thumbnail_html', 'gkp_post_thumbnail_html', 10, 2 );
function gkp_post_thumbnail_html( $html, $post_id ) {
    $html = '<a href="' . get_permalink( $post_id ) . '">' . $html . '</a>';
    return $html;
}
// search all taxonomies, based on: http://projects.jesseheap.com/all-projects/wordpress-plugin-tag-search-in-wordpress-23

function atom_search_where($where){
  global $wpdb;
  if (is_search())
    $where .= "OR (t.name LIKE '%".get_search_query()."%' AND {$wpdb->posts}.post_status = 'publish')";
  return $where;
}

function atom_search_join($join){
  global $wpdb;
  if (is_search())
    $join .= "LEFT JOIN {$wpdb->term_relationships} tr ON {$wpdb->posts}.ID = tr.object_id INNER JOIN {$wpdb->term_taxonomy} tt ON tt.term_taxonomy_id=tr.term_taxonomy_id INNER JOIN {$wpdb->terms} t ON t.term_id = tt.term_id";
  return $join;
}

function atom_search_groupby($groupby){
  global $wpdb;

  // we need to group on post ID
  $groupby_id = "{$wpdb->posts}.ID";
  if(!is_search() || strpos($groupby, $groupby_id) !== false) return $groupby;

  // groupby was empty, use ours
  if(!strlen(trim($groupby))) return $groupby_id;

  // wasn't empty, append ours
  return $groupby.", ".$groupby_id;
}

add_filter('posts_where','atom_search_where');
add_filter('posts_join', 'atom_search_join');
add_filter('posts_groupby', 'atom_search_groupby');

// function is_user_logged_in(){
//     $user = wp_get_current_user();
//     return $user->exists();
// }
// add_filter('pre_get_posts','filter_search');
// fonction permettant de retourner directement la page d'une série apres
// une recherche
add_action('template_redirect', 'redirect_search_to_single_post_result');
function redirect_search_to_single_post_result() {
    if( is_search() ) {
        global $wp_query;
        if ($wp_query->post_count == 1) {
            if( $wp_query->posts['0']->post_type == 'serie' )
                wp_redirect( get_permalink( $wp_query->posts['0']->ID ) );
        }
    }
}
