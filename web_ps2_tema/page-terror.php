<?php
/*
Template Name: Página Terror
*/
get_header();
?>

<main class="pagina-categoria">
  <div class="contenedor">
    <header class="categoria-header">
      <h1>Juegos de Terror</h1>
      <p>Descubre los mejores títulos de terror para PlayStation 2.</p>
    </header>

    <section class="videojuegos-grid">
      <?php
      $args = array(
        'post_type' => 'videojuegos',
        'tax_query' => array(
          array(
            'taxonomy' => 'categoria_juego',
            'field' => 'slug',
            'terms' => 'terror'
          ),
        ),
      );

      $videojuegos_terror = new WP_Query($args);

      if ($videojuegos_terror->have_posts()) :
        while ($videojuegos_terror->have_posts()) : $videojuegos_terror->the_post();

          // Si no hay imagen destacada, intenta obtener la primera imagen del contenido
          $imagen = has_post_thumbnail() ? get_the_post_thumbnail_url(get_the_ID(), 'medium') : '';
          if (!$imagen) {
            preg_match('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', get_the_content(), $matches);
            $imagen = isset($matches[1]) ? $matches[1] : '';
          }
      ?>
          <article class="videojuego-card">
            <?php if ($imagen) : ?>
              <a href="<?php the_permalink(); ?>">
                <img src="<?php echo esc_url($imagen); ?>" alt="<?php the_title(); ?>">
              </a>
            <?php endif; ?>
            <div class="videojuego-info">
              <h2><?php the_title(); ?></h2>
<a href="<?php echo home_url('/fnaf'); ?>" class="boton-leer-mas">Ver Detalles</a>

            </div>
          </article>
      <?php
        endwhile;
        wp_reset_postdata();
      else :
        echo '<p>No hay videojuegos de acción disponibles.</p>';
      endif;
      ?>
    </section>
  </div>
</main>

<?php get_footer(); ?>
