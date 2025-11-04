<?php
function webps2_registrar_menus() {
    register_nav_menus(array(
        'menu_principal' => __('Menú Principal', 'web_ps2_tema'),
        'menu_legal'     => __('Menú Legal', 'web_ps2_tema'),
        'menu_social'    => __('Menú Social', 'web_ps2_tema'),
    ));
}
add_action('init', 'webps2_registrar_menus');
