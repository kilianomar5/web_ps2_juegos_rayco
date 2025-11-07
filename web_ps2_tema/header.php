<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header>
  <div class="logo">
      <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Logo">
  </div>

  <!-- Botón hamburguesa -->
  <div class="hamburger" id="hamburger">
      <span></span>
      <span></span>
      <span></span>
  </div>

  <nav>
      <?php
      wp_nav_menu(array(
          'theme_location' => 'menu_principal'
      ));
      ?>
  </nav>
</header>
