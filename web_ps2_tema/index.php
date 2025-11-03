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

    <nav>
        <?php
        wp_nav_menu(array(
            'theme_location' => 'menu_principal'
        ));
        ?>
    </nav>
</header>

<main>
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <article>
                <h2><?php the_title(); ?></h2>
                <?php if (has_post_thumbnail()) {
                    the_post_thumbnail('medium');
                } ?>
                <?php the_excerpt(); ?><br>
                <a href="<?php the_permalink(); ?>">Leer más</a>
            </article>
        <?php endwhile; ?>
    <?php else : ?>
        <p>No hay noticias publicadas.</p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>
</body>
</html>
