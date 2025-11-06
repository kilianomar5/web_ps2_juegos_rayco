<?php
/*
Template Name: Página Noticias
*/
get_header();
?>

<main class="pagina-noticias">

  <section class="noticias-intro">
    <h2>Últimas Noticias</h2>
    <p>Mantente al día con las noticias más recientes sobre consolas, juegos y lanzamientos.</p>
  </section>

  <section class="noticias-lista">
    <?php
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 5
    );
    $noticias = new WP_Query($args);

    if($noticias->have_posts()) :
        while($noticias->have_posts()) : $noticias->the_post(); ?>
            <article class="noticia-card">
                <?php if(has_post_thumbnail()) : ?>
                    <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>">
                <?php endif; ?>
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <p><?php echo wp_trim_words(get_the_content(), 25, '...'); ?></p>
            </article>
        <?php endwhile;
        wp_reset_postdata();
    else :
        echo '<p>No hay noticias disponibles.</p>';
    endif;
    ?>
  </section>

</main>

<?php get_footer(); ?>
