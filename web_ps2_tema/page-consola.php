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
            <img src="https://imgs.search.brave.com/W5jXnSgb80MZshmgB2LFM_2kOwLitM3Ppt-6Rpi_76w/rs:fit:500:0:1:0/g:ce/aHR0cHM6Ly9odHRw/Mi5tbHN0YXRpYy5j/b20vRF9RX05QXzJY/Xzg0MzAyNS1NTEE3/NzU3MzE4MDI4OF8w/NzIwMjQtVi53ZWJw" alt="Versión estándar con lector de discos" loading="lazy">
          </figure>
          <h3>Versión estándar con lector</h3>
          <p>Incluye unidad Blu-ray Ultra HD para juegos físicos y reproducción de películas.</p>
        </article>

        <!-- Edición Digital -->
        <article class="version-card">
          <figure>
            <img src="https://imgs.search.brave.com/DL2IaEWivyQShZY75DCKSyljZ7bVRzfqnwGgUclQmxg/rs:fit:0:180:1:0/g:ce/aHR0cHM6Ly9odHRw/Mi5tbHN0YXRpYy5j/b20vRF9OUV9OUF85/NTg5NzMtTUxNNDQz/MTAzNzA2NjlfMTIy/MDIwLU8tY29uc29s/YS1wbGF5c3RhdGlv/bi01LWVkaWNpb24t/ZGlnaXRhbC1zaW4t/bGVjdG9yLWRlLWRp/c2Nvcy53ZWJw" alt="Edición Digital sin lector" loading="lazy">
          </figure><br><br><br>
          <h3>Edición digital (sin lector)</h3><br><br>
          <p>No tiene unidad de disco; todo se descarga desde la tienda. No admite discos físicos.</p>
        </article>

        <!-- Pro -->
        <article class="version-card">
          <figure>
            <img src="https://imgs.search.brave.com/UrsVa9Kse6RYqop5yV6JDMvcQqrMbTCPJlLgCXJjaxs/rs:fit:500:0:1:0/g:ce/aHR0cHM6Ly9jb250/cmFoZWNoaXpvLmVz/Lzc5Ni1sYXJnZV9k/ZWZhdWx0L2NvbnNv/bGEtcmV0cm9ib3gt/MjU2Z2ItdmVyc2lv/bi1wcm8uanBn" alt="Versión Pro rendimiento" loading="lazy">
          </figure>
          <h3>Versión Pro (mejora de rendimiento)</h3>
          <p>Diseñada para rendimiento superior, con mejoras en GPU/almacenamiento/resolución frente a los otros modelos.</p>
        </article>
      </div>
    </div>
  </section><br>

</main>
<?php get_footer(); ?>