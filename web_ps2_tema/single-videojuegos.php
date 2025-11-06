<?php get_header(); ?>

<main class="pagina-juego">
  <div class="contenedor">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

      <article class="juego-detalle">
        <header class="juego-header">
          <h1><?php the_title(); ?></h1>
        </header>

        <?php if (has_post_thumbnail()) : ?>
          <div class="juego-imagen">
            <?php the_post_thumbnail('large'); ?>
          </div>
        <?php endif; ?>

        <div class="juego-contenido">
          <?php the_content(); ?>
        </div>

        <div class="juego-volver">
          <a href="javascript:history.back()" class="boton-volver">← Volver</a>
        </div>
      </article>

    <?php endwhile; endif; ?>
  </div>
</main>

<?php get_footer(); ?>
