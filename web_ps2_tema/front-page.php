<?php
/*
Template Name: Página de Inicio
*/
get_header();
?>

<main class="pagina-inicio">

  <!-- HERO / PRESENTACIÓN -->
  <section class="hero-inicio">
    <div class="contenedor">
      <h1>KilianVideojuegos</h1>
      <p>Tu sitio de referencia para noticias, reseñas y curiosidades del mundo de los videojuegos.</p>
    </div>
  </section>

  <!-- SECCIÓN DE RESEÑAS -->
  <section class="reseñas">
    <div class="contenedor">
      <h2 class="titulo-seccion">Reseñas</h2>
      <div class="reseñas-grid">
        <article class="reseña-card">
          <p>«Un sitio magnífico»</p><span>— Ángel</span>
        </article>
        <article class="reseña-card">
          <p>«Buena página web»</p><span>— Diego</span>
        </article>
        <article class="reseña-card">
          <p>«Se entiende a la perfección»</p><span>— Dylan</span>
        </article>
      </div>
    </div>
  </section>

  <!-- ÚLTIMAS NOTICIAS -->
  <section class="ultimas-noticias">
    <div class="contenedor">
      <h2 class="titulo-seccion">Últimas Noticias</h2>

      <?php
      $args = array('post_type' => 'post', 'posts_per_page' => 3);
      $noticias = new WP_Query($args);
      if ($noticias->have_posts()) :
        echo '<div class="noticias-grid">';
        while ($noticias->have_posts()) : $noticias->the_post(); ?>
          <article class="noticia-card">
            <?php if (has_post_thumbnail()) : ?>
              <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>">
            <?php endif; ?>
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <p><?php echo wp_trim_words(get_the_content(), 25, '...'); ?></p>
          </article>
      <?php endwhile;
        echo '</div>';
        wp_reset_postdata();
      else :
        echo '<p>No hay noticias disponibles.</p>';
      endif;
      ?>
    </div>
  </section>

  <!-- CATEGORÍAS / VIDEOJUEGOS -->
  <section class="categorias-videojuegos">
    <div class="contenedor">
      <h2 class="titulo-seccion">Categorías | Videojuegos</h2>
      <a href="<?php echo home_url('/categorias'); ?>" class="boton">Ver Categorías</a>
    </div>
  </section>

</main>

<?php get_footer(); ?>
