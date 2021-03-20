<?php

/* Consultas reutilizables */
require get_template_directory() . '/inc/queries.php';
require get_template_directory() . '/inc/scripts.php';

/* Cuando el tema es activado */
function gymfitness_setup()
{
  /* Habilitar imagenes destacadas */
  add_theme_support('post-thumbnails');

  //TITULO SEO
  add_theme_support('title-tag');

  /* Establecer tamaños de imagenes personalizado*/
  add_image_size('square', 350, 350, true);
  add_image_size('portrait', 350, 724, true);
  add_image_size('cajas', 400, 375, true);
  add_image_size('mediano', 700, 400, true);
  add_image_size('blog', 966, 644, true);
};

add_action('after_setup_theme', 'gymfitness_setup');

/* Menus de navegación, agregar más utilizando el arreglo */
function gymfitness_menus()
{
  register_nav_menus(array(
    'menu-principal' => __('Menu Principal', 'gymfitness')
  ));
};
add_action('init', 'gymfitness_menus');

/* Definir zona de widgets */
function gymfitness_widgets()
{
  register_sidebar(array(
    'name' => 'Sidebar 1',
    'id' => 'sidebar_1',
    'before_widget' => '<div class="widget">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="text-center texto-primario">',
    'after_title' => '</h3>',
  ));
  register_sidebar(array(
    'name' => 'Sidebar 2',
    'id' => 'sidebar_2',
    'before_widget' => '<div class="widget">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="text-center texto-primario">',
    'after_title' => '</h3>',
  ));
};

add_action('widgets_init', 'gymfitness_widgets');

/* Imagen Hero */
function gymfitness_hero_image(){
  /* Obtener ID pagina principal */
  $front_page_id = get_option('page_on_front');
  /* Obtener ID IMAGEN */
  $id_imagen = get_field('imagen_hero', $front_page_id);
  /* Obtener la imagen */
  $imagen = wp_get_attachment_image_src($id_imagen, 'full')[0];

  /* Style CSS */
  wp_register_style('custom', false);
  wp_enqueue_style('custom');

  $imagen_destacada_css = "
    body.home .site-header{
      background-image: linear-gradient( rgba(0,0,0,0.75), rgba(0,0,0,0.75) ), url($imagen)
    }
  ";

  wp_add_inline_style('custom', $imagen_destacada_css);

}

add_action('init', 'gymfitness_hero_image');
