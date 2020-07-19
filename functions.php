<?php

function wp_demo_register_sidebar() {
  register_sidebar( array( 
    "id" => "my_sidebar",
    "name" => "My Sidebar",
    "description" => "El sidebar de telepathe",
    "class" => "my_sidebar_class"
   ));
}

function wp_demo_supports_theme() {
	add_theme_support('html5');
	add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'wp_demo_supports_theme');
add_action('widgets_init', 'wp_demo_register_sidebar');
