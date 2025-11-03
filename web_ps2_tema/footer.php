<footer>
    <div class="footer-menus">
        <div class="footer-legal">
            <h4>Enlaces Legales</h4>
            <?php
            wp_nav_menu(array(
                'theme_location' => 'menu_legal',
                'container' => false
            ));
            ?>
        </div>

        <div class="footer-social">
            <h4>Redes Sociales</h4>
            <?php
            wp_nav_menu(array(
                'theme_location' => 'menu_social',
                'container' => false
            ));
            ?>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>