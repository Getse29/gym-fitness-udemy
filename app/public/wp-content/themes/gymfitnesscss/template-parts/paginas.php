<!-- Sirve para publicar el contenido, es decir crear nuevo contenido en paginas, siendo un bucle -->
<?php while (have_posts()) : the_post(); ?>

  <!-- Insertamos el titulo -->
  <h1 class="text-center texto-primario"><?php the_title(); ?></h1>

  <!-- imagenes -->
  <?php
  /* Revisamos que exista una imagen en el post  */
  if (has_post_thumbnail()) :
    /* Publicamos la imagen en caso de que sea verdadera, en caso de que no haya imagen, no se hara nada */
    the_post_thumbnail('blog', array('class' => 'imagen-destacada'));
  endif;
  ?>

  <?php
    /* Revisar si custom post type es clases */
    if (get_post_type() === 'gymfitness_clases') {
      $hora_inicio = get_field('hora_inicio');
      $hora_fin = get_field('hora_fin');
  ?>
    <p class="informacion-clase">
      <?php the_field('dias_clase') ?> - <?php echo $hora_inicio . ' a ' . $hora_fin ?>
    </p>
  <?php } ?>

  <!-- Insertamos el contenido -->
  <?php the_content(); ?>
<?php endwhile; ?>