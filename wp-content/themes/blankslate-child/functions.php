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