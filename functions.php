<?php
function fethiyehaber_theme_setup() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support('custom-logo');
  add_theme_support('wp-block-styles');
  add_theme_support('editor-styles');
  add_theme_support('responsive-embeds');
  register_nav_menus([
    'main-menu' => __('Main Menu', 'fethiyehaber'),
    'footer-menu' => __('Footer Menu', 'fethiyehaber')
  ]);
}
add_action('after_setup_theme', 'fethiyehaber_theme_setup');

function fethiyehaber_theme_scripts() {
  wp_enqueue_style('fethiyehaber-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'fethiyehaber_theme_scripts');
?>
