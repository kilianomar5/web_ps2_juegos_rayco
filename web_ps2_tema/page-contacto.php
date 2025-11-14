<?php
/*
Template Name: Página Contacto
*/
get_header();
?>

<main class="pagina-contacto">

  <section class="contacto-intro">
    <h2>Contacto</h2>
    <p>¿Tienes alguna duda o comentario? Envíanos un mensaje usando el formulario a continuación.</p>
  </section>

  <section class="contacto-formulario">
    <form action="https://formspree.io/f/xldaenqv" method="POST">
      
      <p>
        <label for="nombre">Nombre:</label><br>
        <input type="text" name="nombre" id="nombre" required>
      </p>

      <p>
        <label for="email">Correo Electrónico:</label><br>
        <input type="email" name="email" id="email" required>
      </p>

      <p>
        <label for="mensaje">Mensaje:</label><br>
        <textarea name="mensaje" id="mensaje" rows="5" required></textarea>
      </p>

      <input type="hidden" name="_subject" value="Nuevo Mensaje desde la página de contacto de la actividad de rayco">

      <p>
        <input type="submit" value="Enviar Mensaje">
      </p>

    </form>
  </section>

</main>
<?php get_footer(); ?>