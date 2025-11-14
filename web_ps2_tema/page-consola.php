<?php
/*
Template Name: Página Consola
*/
get_header();
?>

<main class="pagina-consola">
  <!-- Intro -->
  <section class="consola-intro">
    <div class="contenedor">
      <h1 class="titulo-seccion">Consolas Destacadas</h1>
      <p class="subtitulo">Esta página es de consola, donde se verá sus características técnicas y versiones.</p>
    </div>
  </section>

  <!-- Lista simple (tu bloque original, opcional) -->
  <section class="consola-lista contenedor" aria-label="Consolas destacadas">
    <article class="consola-card">
      <figure class="consola-media">
        <img src="https://imgs.search.brave.com/VJwbWWUnFLJBSDm5DjcMA2UR_HUofCG7vo36ajgRq68/rs:fit:500:0:1:0/g:ce/aHR0cHM6Ly9pbWcu/ZnJlZXBpay5jb20v/dmVjdG9yLWdyYXRp/cy9jb25qdW50by1p/bHVzdHJhY2lvbmVz/LXZlY3RvcmlhbGVz/LWRpZmVyZW50ZXMt/Y29uc29sYXMtdmlk/ZW9qdWVnb3MtZGlz/ZW5vcy1nYW1lcGFk/cy1qb3lzdGlja3Mt/ZGlzcG9zaXRpdm9z/LWdhbWVycy1nYWRn/ZXRzLWp1Z2FyLWNv/bnRyb2xhci1qdWVn/b3MtZGlnaXRhbGVz/LXRlY25vbG9naWEt/Y29uY2VwdG8tanVl/Z29fNzQ4NTUtMjMw/MTMuanBnP3NlbXQ9/YWlzX2h5YnJpZCZ3/PTc0MCZxPTgw" alt="PlayStation 2 (PS2)" loading="lazy">
      </figure>
      <div class="consola-info">
        <h2 class="consola-nombre">PlayStation 2</h2>
        <p>La consola más vendida de la historia, con un catálogo impresionante y compatibilidad con PS1.</p>
      </div>
    </article>
  </section>

  <!-- Características Técnicas (según PDF) -->
  <section class="consola-caracteristicas">
    <div class="contenedor">
      <h2 class="bloque-titulo">Características Técnicas</h2>

      <div class="caracter-grid">
        <!-- CPU/GPU -->
        <article class="caracter-card">
          <img src="https://imgs.search.brave.com/f4n-W8N6x3pmLo_H-c4SNijoCCpKp_Qxt409nQQinKo/rs:fit:500:0:1:0/g:ce/aHR0cHM6Ly93d3cu/bXV5Y29tcHV0ZXIu/Y29tL3dwLWNvbnRl/bnQvdXBsb2Fkcy8y/MDIyLzA3L05pbnRl/bmRvLVN3aXRjaC0y/LUdQVS5qcGc" alt="Procesador y Gráficos" loading="lazy">
          <div>
            <h3>Procesador (CPU + GPU)</h3>
            <p>Chip personalizado basado en arquitectura AMD Zen 2 con 8 núcleos/16 hilos y frecuencia variable hasta ~3,5 GHz.</p>
          </div>
        </article>

        <!-- Memoria y almacenamiento -->
        <article class="caracter-card">
          <img src="https://imgs.search.brave.com/KRmVVA26SZJ1vV_hKButRBgzODR6LqRA43mnhQK83aM/rs:fit:500:0:1:0/g:ce/aHR0cHM6Ly9pbWdt/ZWRpYS5sYXJlcHVi/bGljYS5wZS82NDB4/MzcxL2xhcmVwdWJs/aWNhL21pZ3JhdGlv/bi9pbWFnZXMvWFA1/WDNMSVJJRkNYTkFU/UExaVFFOUFdNWjQu/d2VicA" alt="Memoria y Almacenamiento" loading="lazy">
          <div>
            <h3>Memoria y almacenamiento</h3>
            <p>16 GB de RAM GDDR6 con ancho de banda de hasta 448 GB/s y SSD personalizado de 825 GB para cargas ultrarrápidas.</p>
          </div>
        </article>

        <!-- Resolución y vídeo -->
        <article class="caracter-card">
          <img src="https://imgs.search.brave.com/YZpkTMigD7B7fjBpWj3Xdg1R7CLP95mrc1aNVYbYt68/rs:fit:500:0:1:0/g:ce/aHR0cHM6Ly9jcmVo/YW5hLWJsb2cuaW1n/aXgubmV0L21lZGlh/L2ZpbGVyX3B1Ymxp/Yy9mMC8wZC9mMDBk/YmMzNC0yMTU3LTRj/MzQtOGUxYS03M2Rj/NDRhODM2NzQvcmVz/b2x1Y2lvbmVzLWhk/LmpwZz9hdXRvPWZv/cm1hdCZxPTUw" alt="Resolución y salida de vídeo" loading="lazy">
          <div>
            <h3>Resolución y salida de vídeo</h3>
            <p>Salida hasta 4K a 120 Hz, “8K-ready” por HDMI 2.1, con soporte para VRR y HDR; unidad Blu-ray Ultra HD integrada.</p>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- Versiones  -->
  <section class="consola-versiones">
    <div class="contenedor">
      <h2 class="bloque-titulo">Versiones</h2>

      <div class="versiones-grid">
        <!-- Estándar con lector -->
        <article class="version-card">
          <figure>
            <img src="https://imgs.search.brave.com/Aoa5WuQuNuxBIwk0jnAcgiQTyKMt-cDPh8P5LOWXjio/rs:fit:500:0:1:0/g:ce/aHR0cHM6Ly9pLmVi/YXlpbWcuY29tL2lt/YWdlcy9nL1hMVUFB/ZVN3OGUxb29BQzEv/cy1sMjI1LmpwZw" alt="Versión PS2 SCPH-10000" loading="lazy">
          </figure>
          <h3>Versión PS2 SCPH-10000</h3>
          <p>Primeras versiones lanzadas solo en Japón, incluían puerto PCMCIA para el adaptador de red, y admite discos fisicos.</p>
        </article>

        <!-- Edición Digital -->
        <article class="version-card">
          <figure>
            <img src="https://imgs.search.brave.com/ZA_k-dalW5VI_mOGlxOP5nIuyh_NAC1tVDnW38m-3ig/rs:fit:500:0:1:0/g:ce/aHR0cHM6Ly9yZXRy/b2dhbWVzamFwYW4u/Y29tL3dwLWNvbnRl/bnQvdXBsb2Fkcy8y/MDIzLzEwL0lNR185/Mzc0LmpwZw" alt="Versión PS2 SCPH-30000" loading="lazy">
          </figure>
          <h3>Versión PS2 SCPH-30000</h3>
          <p>Primera versión internacional (Europa, América y Japón), tiene una mejor compatibilidad con juegos de PS1, incluyendo discos fisicos.</p>
        </article>

        <!-- Pro -->
        <article class="version-card">
          <figure>
            <img src="https://imgs.search.brave.com/Dt7FI5tzs3m2_p-VfCJadkGXBkN-BYTQ0ikNF0qUW4E/rs:fit:500:0:1:0/g:ce/aHR0cHM6Ly93d3cu/cGljY2xpY2tpbWcu/Y29tL3ZTVUFBT1N3/UE9aaFRvOGEvUGxh/eXN0YXRpb24tMi1T/bGltLWNvbnNvbGUt/YmxhY2stU0NQSC03/MDAwMC1KYXBhbi1Q/UzIud2VicA" alt="Versión PS2 SCPH-50000" loading="lazy">
          </figure>
          <h3>Versión PS2 SCPH-50000</h3>
          <p>Primera versión de PS2 para Europa, con soporte para discos fisicos, con una mejor compatibilidad con juegos de PS1 y PS2.</p>
        </article>
      </div>
    </div>
  </section><br>

</main>
<?php get_footer(); ?>