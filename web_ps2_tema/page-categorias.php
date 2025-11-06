<?php
/*
Template Name: Categorías Videojuegos
*/
get_header();
?>

<section class="categorias-videojuegos">
  <div class="contenedor">
    <h2 class="titulo-seccion">Categorías</h2>
    <p> Estas son las categorías para que el usuario pueda elegirlas y ver los juegos según su género. </p>
    <div class="categorias-grid">
      <article class="categoria-card">
        <img src="https://imgs.search.brave.com/e42ldsKMmeA-MSkdDw6qvHYxqNOBRQofoNVCn183-90/rs:fit:500:0:1:0/g:ce/aHR0cHM6Ly9jZG4u/bGlnYWRlZ2FtZXJz/LmNvbS9pbWFnZW5l/cy9qdWVnb3MtZGUt/YWNjaW9uLWNrZS5q/cGc" alt="Acción" loading="lazy">
        <h3>Acción</h3>
        <a href="<?php echo home_url('accion'); ?>" class="boton">Ver Categoría</a>
      </article>
      <article class="categoria-card">
        <img src="https://imgs.search.brave.com/dapW01iZWvYqF3SSZ_s1wYLbVcKmRmXxJX6PN-V2_Gk/rs:fit:500:0:1:0/g:ce/aHR0cHM6Ly9tZWRp/YS52YW5kYWwubmV0/L2kvNjIweDM0OC82/LTIwMjEvMjAyMTYx/ODEyNDczNDdfMS5q/cGc" alt="Terror" loading="lazy">
        <h3>Terror</h3>
        <a href="<?php echo home_url('terror'); ?>" class="boton">Ver Categoría</a>
      </article>
      <article class="categoria-card">
        <img src="https://imgs.search.brave.com/OWVdqTvCSyc7fsbi5zAkLDSq2jq79mGUgGCe851cmig/rs:fit:500:0:1:0/g:ce/aHR0cHM6Ly91cGxv/YWQud2lraW1lZGlh/Lm9yZy93aWtpcGVk/aWEvY29tbW9ucy9m/L2YzL1RvcmNzLTIw/MDgxMjE3MTA0ODUx/LmpwZw" alt="Carreras" loading="lazy">
        <h3>Carreras</h3>
        <a href="<?php echo home_url('carreras'); ?>" class="boton">Ver Categoría</a>
      </article>
      <article class="categoria-card">
        <img src="https://imgs.search.brave.com/hdvnY8Xp19g__aCRbKA7HrjPkldvBcNt62eMJGPgFzY/rs:fit:500:0:1:0/g:ce/aHR0cHM6Ly9pLmJs/b2dzLmVzL2Y2OTEy/Zi91bmNoYXJ0ZWRf/NC0zMTIxMDgxLzQ1/MF8xMDAwLmpwZWc" alt="Aventuras" loading="lazy">
        <h3>Aventuras</h3>
        <a href="<?php echo home_url('aventuras'); ?>" class="boton">Ver Categoría</a>
      </article>
    </div>
  </div>
</section>

<?php get_footer(); ?>
