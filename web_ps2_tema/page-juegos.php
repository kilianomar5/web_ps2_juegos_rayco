<?php
/*
Template Name: Página Juegos
*/
get_header();
?>

<main class="pagina-juegos">

  <section class="juegos-intro">
    <h2>Juegos Destacados</h2>
    <p>Explora los juegos más icónicos, sus reseñas y curiosidades de cada título.</p>
  </section>

  <section class="juegos-lista"><br>
    <?php
    $args = array(
        'post_type' => 'Videojuegoss',
        'posts_per_page' => 10
    );
    $Videojuegos = new WP_Query($args);

    if($Videojuegos->have_posts()) :
        while($Videojuegos->have_posts()) : $Videojuegos->the_post(); ?>
            <article class="juego-card">
                <?php if(has_post_thumbnail()) : ?>
                    <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>">
                <?php endif; ?>
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <p><?php echo wp_trim_words(get_the_content(), 25, '...'); ?></p>
            </article>
        <?php endwhile;
        wp_reset_postdata();
    else :
        echo '<p>No hay juegos disponibles.</p>';
    endif;
    ?>
  </section>

</main>

<?php get_footer(); ?>
