<?php
function wp_demo_register_sidebar() {
  register_sidebar( array(
    'id' => 'my_sidebar',
    'name' => 'My Sidebar',
    'description' => 'El sidebar demo',
    'class' => 'my_sidebar_class'
  ));
}

add_action('widgets_init', 'wp_demo_register_sidebar');
?>