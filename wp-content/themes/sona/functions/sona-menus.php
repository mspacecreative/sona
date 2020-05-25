<?php

function register_sona_menu()
{
    register_nav_menus(array(
        'header-menu' => __('Header Menu', 'sona'),
        'sidebar-menu' => __('Sidebar Menu', 'sona'),
        'footer-menu' => __('Footer Menu', 'sona')
    ));
}

add_action('init', 'register_sona_menu');