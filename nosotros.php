<?php
   require 'includes/funciones.php';
   incluirTemplate('header');
?>

   <main class="contenedor seccion">
      <h1>Conoce Sobre Nosotros</h1>

      <div class="contenedor contenedor-nosotros">
         <div class="contenedor-imagen">
            <picture class="img-nosotros">
               <source srcset="build/img/nosotros.webp" type="image/webp">
               <source srcset="build/img/nosotros.jpg" type="image/jpeg">
               <img loading="lazy" src="build/img/nosotros.jpg" alt="anuncio" class="img-nosotros">
            </picture>
         </div>

         <div class="text-nosotros">
            <h3>25 Años de Experiencia</h3>

            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nisi, obcaecati? Excepturi atque quaerat est explicabo repellat iste voluptatem commodi culpa repudiandae illo expedita, eaque aliquam distinctio inventore accusantium quam fugit!. sit amet consectetur adipisicing elit. Nisi, obcaecati? Excepturi atque quaerat est explicabo repellat iste voluptatem commodi culpa repudiandae illo expedita, eaque aliquam distinctio inventore accusantium quam fugit!</p>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae nesciunt officia tempore omnis temporibus odio, molestiae, itaque rem consequuntur explicabo fugit id harum culpa neque cum, nihil porro quod aspernatur!. molestiae, itaque rem consequuntur explicabo fugit id harum culpa neque cum, nihil porro quod aspernatur!</p>
         </div>
      </div>
   </main>

   <section class="contenedor seccion">
      <h1>Más Sobre Nosotros</h1>

      <!-- ICONOS-NOSOTROS -->
      <div class="iconos-nosotros">
         <div class="icono">
            <img src="build/img/icono1.svg" alt="icono seguridad" loading="lazy">
            <h3>Seguridad</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores in dolorum cupiditate asperiores et, illo quibusdam vel assumenda facere quos obcaecati eum quae cum ipsam accusantium natus nemo nam ullam.</p>
         </div>

         <div class="icono">
            <img src="build/img/icono2.svg" alt="icono precio" loading="lazy">
            <h3>Precio</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores in dolorum cupiditate asperiores et, illo quibusdam vel assumenda facere quos obcaecati eum quae cum ipsam accusantium natus nemo nam ullam.</p>
         </div>

         <div class="icono">
            <img src="build/img/icono3.svg" alt="icono tiempo" loading="lazy">
            <h3>A Tiempo</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores in dolorum cupiditate asperiores et, illo quibusdam vel assumenda facere quos obcaecati eum quae cum ipsam accusantium natus nemo nam ullam.</p>
         </div>
      </div>
   </section>

<?php
   incluirTemplate('footer');
?>
