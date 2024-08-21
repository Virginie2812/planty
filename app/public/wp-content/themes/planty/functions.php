<?php

// Action qui permet de charger des scripts dans notre thème
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');

function montheme_supports()
{
    add_theme_support('menu');
    register_nav_menu('header', 'en tête du menu');
    register_nav_menu('footer', 'Pied de page');
}

function theme_enqueue_styles()
{
    // Chargement du style.css du thème parent Twenty Twenty
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css',);
 
}


function afficher_page_admin_pour_utilisateurs_connectes($items, $args) {
    // Vérifiez si l'utilisateur est connecté
    if (is_user_logged_in()) {
        // l'ID réel de la page "Admin"
        $page_admin_id = 439;
        $page_admin_link = get_permalink($page_admin_id);

        // Ajoutez le lien "Admin" uniquement pour les utilisateurs connectés
        $items .= '<li><a href="' . $page_admin_link . '">Admin</a></li>';
    }

    return $items;
}
add_filter('wp_nav_menu_items', 'afficher_page_admin_pour_utilisateurs_connectes', 10, 2);