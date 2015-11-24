<?php

function aha_theme_styles() {
      wp_enqueue_style( 'style_base_css', get_template_directory_uri() . '/css.style_base.css');
      wp_enqueue_style( 'theme_responsive', get_template_directory_uri() . '/css.theme-responsive.css');
      wp_enqueue_style( 'animation', get_template_directory_uri() . '/css.animation.css');
      wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css');
}

add_action('wp_enqueue_scripts', 'wpt_theme_styles');
 ?>
