<?php

function theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array('parent-style'), filemtime(get_stylesheet_directory() . '/css/theme.css'));
}

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');

// Charger la police d'écriture de la maquette 
function enqueue_custom_fonts()
{
    wp_enqueue_style('custom-fonts', 'https://fonts.googleapis.com/css2?family=Syne:wght@400;500;600;700;800&display=swap');
}

add_action('wp_enqueue_scripts', 'enqueue_custom_fonts');

// Fonction pour ajouter le lien "Admin" dans le menu
function add_link_admin_in_menu( $items, $args ) {
    // Vérifier si l'utilisateur est connecté et s'il a le rôle d'administrateur
    if ( is_user_logged_in() && current_user_can( 'administrator' ) ) {
        // Créer le lien "Admin" avec la page d'administration WordPress
        $admin_link = '<li><a href="' . admin_url() . '">Admin</a></li>';

        // Trouver la position après laquelle insérer le lien "Admin"
        $position = strpos( $items, '</a></li>', strpos( $items, 'Nous rencontrer' ) );
        if ( $position !== false ) {
            // Insérer le lien "Admin" à la position trouvée
            $items = substr_replace( $items, $admin_link, $position + 9, 0 );
        }
    }
    return $items;
}
add_filter( 'wp_nav_menu_items', 'add_link_admin_in_menu', 10, 2 );