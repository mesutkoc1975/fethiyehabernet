<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header class="site-header">
    <div class="container">
      <?php the_custom_logo(); ?>
      <?php wp_nav_menu(['theme_location' => 'main-menu']); ?>
    </div>
  </header>
