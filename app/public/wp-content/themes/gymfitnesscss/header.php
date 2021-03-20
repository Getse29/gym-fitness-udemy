<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <?php wp_head(); ?>
</head>

<body>

  <header class="site-header">
    <!-- Contenedor -->
    <div class="contenedor">
      <!-- Navegación -->
      <div class="barra-navegacion">
        <!--Logo -->
        <div class="logo">
          <a href="<?php echo esc_url(site_url('/')) ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo Gym Fitness">
          </a>

        </div>
        <!-- Barra de menus -->
        <?php
        $args = array(
          'theme_location' => 'menu-principal',
          'container' => 'nav',
          'container_class' => 'menu-principal'
        );
        wp_nav_menu($args);
        ?>
      </div>
      <!-- Navegación -->
    </div>
    <!-- Contenedor -->
  </header>