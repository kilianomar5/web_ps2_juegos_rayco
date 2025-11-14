<footer>
  <div class="footer-menus">

    <!-- Enlaces Legales -->
    <div class="footer-legal">
      <h4>Enlaces Legales</h4>
      <?php
      wp_nav_menu(array(
        'theme_location' => 'menu_legal',
        'container'      => false,
        'menu_class'     => 'footer-legal-menu',
        'fallback_cb'    => false
      ));
      ?>
    </div>

    <!-- Redes Sociales -->
    <div class="footer-social">
      <h4>Redes Sociales</h4>
      <ul class="footer-social-icons">
        <li>
          <a href="https://www.facebook.com/WordPress/" target="_blank" rel="noopener noreferrer">
            <img src="<?php echo get_template_directory_uri(); ?>/images/facebook.png" alt="Facebook" width="25">
          </a>
        </li>
        <li>
          <a href="https://x.com/wordpress" target="_blank" rel="noopener noreferrer">
            <img src="<?php echo get_template_directory_uri(); ?>/images/twitter.png" alt="Twitter" width="25">
          </a>
        </li>
        <li>
          <a href="https://www.instagram.com/kilian_reparaciones/" target="_blank" rel="noopener noreferrer">
            <img src="<?php echo get_template_directory_uri(); ?>/images/instagram.png" alt="Instagram" width="25">
          </a>
        </li>
        <li>
          <a href="https://www.youtube.com/@KilianTF" target="_blank" rel="noopener noreferrer">
            <img src="<?php echo get_template_directory_uri(); ?>/images/youtube.png" alt="YouTube" width="25">
          </a>
        </li>
      </ul>
    </div>

  </div>

  <p class="footer-copy">
    © <?php echo date('Y'); ?> KilianVideojuegos — Todos los derechos reservados.
  </p>

  <?php wp_footer(); ?>
</footer>
</body>
</html>
