<?php
function add_theme_scripts() {
  wp_enqueue_style( 'style', get_stylesheet_uri() );
  
  wp_enqueue_style( 'slider', get_template_directory_uri() . '/css/slider.css', array(), '1.1', 'all');
}

?>