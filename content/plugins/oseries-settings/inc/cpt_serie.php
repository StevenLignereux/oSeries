<?php
// CPT => Custom Post Type
// CCT => Custom Content Type
class cpt_serie
{
  public function __construct()
  {
    // Méthode pour executer une fonction
    // add_action('init', 'cpt_skills_init');
    // Méthode pour executer une méthode d'un objet
    add_action('init', [$this, 'create_cpt']);
    add_action('init', [$this, 'create_taxonomies']);

  }
  public function create_cpt()
  {
    $labels = array(
      'name'               => 'Série',
      'singular_name'      => 'Serie',
      'menu_name'          => 'Série',
      'name_admin_bar'     => 'Serie',
      'add_new'            => 'Ajouter une série',
      'add_new_item'       => 'Ajouter une nouvelle série',
      'new_item'           => 'Nouvelle série',
      'edit_item'          => 'Editer une série',
      'view_item'          => 'Voir la série',
      'all_items'          => 'Voir toutes les séries',
      'search_items'       => 'Rechercher une série',
      'not_found'          => 'Aucune série trouvée',
      'not_found_in_trash' => 'AUcune série trouvée dans la corbeille',
    );
    $args = array(
      'labels'             => $labels,
      'description'        => 'Gestion des fiches séries',
      'public'             => true,
      'publicly_queryable' => true,
      'show_ui'            => true,
      'show_in_menu'       => true,
      'query_var'          => true,
      'has_archive'        => false,
      'hierarchical'       => false,
      'menu_position'      => null,
      'supports'           => [
        'title',
        'editor',
        'author',
        'thumbnail',
        'excerpt',
        'comments',
        'custom-fields',
      ],
      'menu_icon'           => 'dashicons-nametag'
    );
    register_post_type( 'serie', $args );
  }

    public function create_taxonomies()
  {
    $labels = [
      'name'                       => 'Genre',
      'name'                       => 'Genre',
      'singular_name'              => 'Genre',
      'menu_name'                  => 'Genre',
      'all_items'                  => 'Tous les genres',
      'new_item_name'              => 'Nouveau Genre',
      'add_new_item'               => 'Ajouter un genre',
      'update_item'                => 'Mettre à jour un genre',
      'edit_item'                  => 'Editer un genre',
      'view_item'                  => 'Voir tous les genres',
      'separate_items_with_commas' => 'Séparer les genres avec une virgule',
      'add_or_remove_items'        => 'Ajouter ou supprimer un genre',
      'choose_from_most_used'      => 'Choisir parmi les genres les plus recherchés',
      'popular_items'              => 'Genres populaires',
      'search_items'               => 'Rechercher un genre',
      'not_found'                  => 'Aucun genre trouvé',
      'items_list'                 => 'Lister les genres',
      'items_list_navigation'      => 'Lister les genres',
    ];
    $args = [
      'labels'                     => $labels,
      'hierarchical'               => false,
      'public'                     => true,
      'publicly_queryable'         => true,
      'query_var'                  => true,
      'show_ui'                    => true,
      'show_admin_column'          => true,
      'show_in_nav_menus'          => true,
      'show_tagcloud'              => true,
      'show_in_rest'               => true,
    ];
    register_taxonomy( 'genre', 'serie', $args );
    $labels = [
      'name'                       => 'Années de production',
      'singular_name'              => 'Année',
      'menu_name'                  => 'Années',
      'all_items'                  => 'Toutes les années',
      'new_item_name'              => 'Nouvelle année',
      'add_new_item'               => 'Ajouter une année',
      'update_item'                => 'Mettre à jour une année',
      'edit_item'                  => 'Editer une année',
      'view_item'                  => 'Voir toutes les années',
      'separate_items_with_commas' => 'Séparer les années avec une virgule',
      'add_or_remove_items'        => 'Ajouter une supprimer une année',
      'choose_from_most_used'      => 'Choisir parmi les années les plus utilisées',
      'popular_items'              => 'Années populaires',
      'search_items'               => 'Rechercher une année',
      'not_found'                  => 'Aucune année trouvé',
      'items_list'                 => 'Lister les années',
      'items_list_navigation'      => 'Lister les années',
    ];
    $args = [
      'labels'                     => $labels,
      'hierarchical'               => false,
      'public'                     => true,
      'publicly_queryable'         => true,
      'query_var'                  => true,
      'show_ui'                    => true,
      'show_admin_column'          => true,
      'show_in_nav_menus'          => true,
      'show_tagcloud'              => true,
      'show_in_rest'               => true,
    ];
    register_taxonomy( 'annee', 'serie', $args );
        $labels = [
          'name'                       => 'Pays',
          'name'                       => 'Pays',
          'singular_name'              => 'Pays',
          'singular_name'              => 'Pays',
          'menu_name'                  => 'Pays',
          'menu_name'                  => 'Pays',
          'all_items'                  => 'Tous les pays',
          'new_item_name'              => 'Nouveau Pays',
          'new_item_name'              => 'Nouveau Pays',
          'add_new_item'               => 'Ajouter un pays',
          'update_item'                => 'Mettre à jour un pays',
          'edit_item'                  => 'Editer un pays',
          'view_item'                  => 'Voir tous les pays',
          'separate_items_with_commas' => 'Séparer les pays avec une virgule',
          'add_or_remove_items'        => 'Ajouter ou supprimer un pays',
          'choose_from_most_used'      => 'Choisir parmi les pays les plus recherchés',
          'popular_items'              => 'Pays populaires',
          'popular_items'              => 'Pays populaires',
          'search_items'               => 'Rechercher un pays',
          'not_found'                  => 'Aucun pays trouvé',
          'items_list'                 => 'Lister les pays',
          'items_list_navigation'      => 'Lister les pays',
        ];
        $args = [
          'labels'                     => $labels,
          'hierarchical'               => false,
          'public'                     => true,
          'publicly_queryable'         => true,
          'query_var'                  => true,
          'show_ui'                    => true,
          'show_admin_column'          => true,
          'show_in_nav_menus'          => true,
          'show_tagcloud'              => true,
          'show_in_rest'               => true,
        ];
        register_taxonomy( 'pays', 'serie', $args );
        $labels = [
          'name'                       => 'Réalisateur',
          'name'                       => 'Réalisateur',
          'singular_name'              => 'Réalisateur',
          'singular_name'              => 'Réalisateur',
          'menu_name'                  => 'Réalisateur',
          'menu_name'                  => 'Réalisateur',
          'all_items'                  => 'Tous les réalisateurs',
          'new_item_name'              => 'Nouveau Réalisateur',
          'new_item_name'              => 'Nouveau Réalisateur',
          'add_new_item'               => 'Ajouter un réalisateur',
          'update_item'                => 'Mettre à jour un réalisateur',
          'edit_item'                  => 'Editer un réalisateur',
          'view_item'                  => 'Voir tous les réalisateurs',
          'separate_items_with_commas' => 'Séparer les réalisateurs avec une virgule',
          'add_or_remove_items'        => 'Ajouter ou supprimer un réalisateur',
          'choose_from_most_used'      => 'Choisir parmi les réalisateurs les plus recherchés',
          'popular_items'              => 'Réalisateurs populaires',
          'popular_items'              => 'Réalisateurs populaires',
          'search_items'               => 'Rechercher un réalisateur',
          'not_found'                  => 'Aucun réalisateur trouvé',
          'items_list'                 => 'Lister les réalisateurs',
          'items_list_navigation'      => 'Lister les réalisateurs',
        ];
        $args = [
          'labels'                     => $labels,
          'hierarchical'               => false,
          'public'                     => true,
          'publicly_queryable'         => true,
          'query_var'                  => true,
          'show_ui'                    => true,
          'show_admin_column'          => true,
          'show_in_nav_menus'          => true,
          'show_tagcloud'              => true,
          'show_in_rest'               => true,
        ];
        register_taxonomy( 'realisateur', 'serie', $args );
  }
  public function activation()
  {
    // Je déclare mon CTP à WordPress
    $this->create_cpt();
    $this->create_taxonomies();

    // Puis je refresh mes permaliens
    flush_rewrite_rules();
  }
  public function deactivation()
  {
    // Je refresh mes permaliens
    flush_rewrite_rules();
  }
}
