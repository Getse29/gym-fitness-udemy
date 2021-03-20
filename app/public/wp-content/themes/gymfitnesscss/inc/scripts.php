<?php
/* Scripts & Styles */
function gymfitness_scripts_styles()
{
  /* Normalize */
  wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), '8.0.1');

  /* SlickNav CSS */
  wp_enqueue_style('slicknavCSS', get_template_directory_uri() . '/css/slicknav.min.css', array(), '1.0.0');

  /* Slicknav Javascript */
  wp_enqueue_script('slicknavJS', get_template_directory_uri() . '/js/jquery.slicknav.min.js', array('jquery'), '1.0.0', true);

  if(is_page('galeria')):
    /* Ligthbox CSS */
    wp_enqueue_style('lightboxCSS', get_template_directory_uri() . '/css/lightbox.min.css', array(), '2.11.0');
  endif;

  if(is_page('galeria')):
    /* Ligthbox Javascript */
    wp_enqueue_script('lightboxJS', get_template_directory_uri() . '/js/lightbox.min.js', array('jquery'), '2.11.0', true);
  endif;

  if (is_page('inicio')) :
    /* bxSlider CSS */
    wp_enqueue_style('bxSliderCSS', 'https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css', array(), '4.2.12');
  endif;

  if (is_page('inicio')) :
    /* bxSlider Javascript */
    wp_enqueue_script('bxSliderJS', 'https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js', array('jquery'), '4.2.12', true);
  endif;

  /* Google Fonts */
  wp_enqueue_style('googleFont', 'https://fonts.googleapis.com/css2?family=Open+Sans&family=Raleway:wght@400;700;900&family=Staatliches&display=swap" rel="stylesheet', array(), '1.0.0');

  /* Hoja de estilos principal y dependencias */
  wp_enqueue_style('style', get_stylesheet_uri(), array('normalize', 'googleFont'), '1.0.0');

  /* Javascript */
  wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery', 'slicknavJS'), '1.0.0', true);

};

add_action('wp_enqueue_scripts', 'gymfitness_scripts_styles');
