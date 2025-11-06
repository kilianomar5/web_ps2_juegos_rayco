<?php
function webps2_registrar_menus() {
    register_nav_menus(array(
        'menu_principal' => __('Menú Principal', 'web_ps2_tema'),
        'menu_legal'     => __('Menú Legal', 'web_ps2_tema'),
        'menu_social'    => __('Menú Social', 'web_ps2_tema'),
    ));
}
add_action('init', 'webps2_registrar_menus');

function registrar_post_type_videojuegos() {
    $labels = array(
        'name' => 'Videojuegos',
        'singular_name' => 'Videojuego',
        'menu_name' => 'Videojuegos',
        'add_new' => 'Añadir nuevo',
        'add_new_item' => 'Añadir nuevo videojuego',
        'edit_item' => 'Editar videojuego',
        'new_item' => 'Nuevo videojuego',
        'view_item' => 'Ver videojuego',
        'all_items' => 'Todos los videojuegos',
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'videojuegos'),
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
        'show_in_rest' => true, // Necesario para que se vea en Gutenberg
    );

    register_post_type('videojuegos', $args);
}
add_action('init', 'registrar_post_type_videojuegos');

// === REGISTRO DE LA TAXONOMÍA ===
function registrar_taxonomia_categoria_juego() {
    $labels = array(
        'name'              => 'Categorías de Juegos',
        'singular_name'     => 'Categoría de Juego',
        'search_items'      => 'Buscar Categorías',
        'all_items'         => 'Todas las Categorías',
        'parent_item'       => 'Categoría padre',
        'parent_item_colon' => 'Categoría padre:',
        'edit_item'         => 'Editar Categoría',
        'update_item'       => 'Actualizar Categoría',
        'add_new_item'      => 'Agregar nueva Categoría',
        'new_item_name'     => 'Nombre de nueva Categoría',
        'menu_name'         => 'Categorías de Juegos',
    );

    $args = array(
        'hierarchical'      => true, // para que se comporte como categorías (no etiquetas)
        'labels'            => $labels,
        'show_ui'           => true, // muestra la interfaz
        'show_admin_column' => true, // muestra la columna en el admin
        'query_var'         => true,
        'rewrite'           => array('slug' => 'categoria_juego'),
        'show_in_rest'      => true, // importante para editor de bloques
    );

    register_taxonomy('categoria_juego', array('videojuegos'), $args);
}
add_action('init', 'registrar_taxonomia_categoria_juego');

// ======== FUNCION PARA OBTENER LA PRIMERA IMAGEN DE UN POST ======== //
function obtener_primera_imagen($post_id) {
    $post = get_post($post_id);
    preg_match('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
    return isset($matches[1]) ? $matches[1] : '';
}

?>


