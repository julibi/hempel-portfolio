<?php

function register_the_menus() {
  register_nav_menu('footer-menu', __( 'Footer Menu' ));
}

add_action('init', 'register_the_menus');
add_theme_support( 'post-thumbnails' );
