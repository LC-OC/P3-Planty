<?php

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));
}

add_filter( 'wp_nav_menu_items', 'link_in_menu', 10, 2);

function link_in_menu( $items, $args) {
       if (is_user_logged_in() && $args->theme_location == 'primary') {
         $items .= '<li class="menu-item" id="link_menu_admin"> <a href="http://localhost/Planty/wp-admin/">Admin</a></li>';
      } 

   return $items;
}