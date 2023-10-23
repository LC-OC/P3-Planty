<?php

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));
}

add_filter( 'wp_nav_menu_items', 'link_in_menu');

function link_in_menu( $items) {
      if (is_user_logged_in()) {
         $items .= '<li class="menu-item" id="link_menu_admin"> <a href="wp-admin/index.php">Admin</a></li>';
      } 

   return $items;
}