<?php
   require 'includes/funciones.php';

   // include 'includes/templates/header.php';
   incluirTemplate('header', $inicio = true);
?>

   <main class="contenedor seccion">
      <h1>Más Sobre Nosotros <?php echo $var; ?> </h1>

      <!-- ICONOS-NOSOTROS -->
      <div class="iconos-nosotros">
         <div class="icono">
            <img src="build/img/icono1.svg" alt="icono seguridad" loading="lazy">
            <h3>Seguridad</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores in dolorum cupiditate asperiores et, illo quibusdam vel assumenda facere quos obcaecati eum quae cum ipsam accusantium natus nemo nam</p>
         </div>

         <div class="icono">
            <img src="build/img/icono2.svg" alt="icono precio" loading="lazy">
            <h3>Precio</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores in dolorum cupiditate asperiores et, illo quibusdam vel assumenda facere quos obcaecati eum quae cum ipsam accusantium natus nemo nam</p>
         </div>

         <div class="icono">
            <img src="build/img/icono3.svg" alt="icono tiempo" loading="lazy">
            <h3>A Tiempo</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores in dolorum cupiditate asperiores et, illo quibusdam vel assumenda facere quos obcaecati eum quae cum ipsam accusantium natus nemo nam</p>
         </div>
      </div>
   </main>

   <!-- CASAS Y DEPAS EN VENTA -->
   <section class="seccion contenedor">
      <h2>Casas y Departamentos en Venta</h2>

      <div class="contenedor-anuncios">
         <div class="anuncio">
            <picture>
               <source srcset="build/img/anuncio1.webp" type="image/webp">
               <source srcset="build/img/anuncio1.jpg" type="image/jpeg">
               <img loading="lazy" src="build/img/anuncio1.jpg" alt="anuncio">
            </picture>

            <div class="contenido-anuncio">
               <h3>Casa de Lujo en el Lago</h3>
               <p>Casa en Lago con excelente vista, acabados de lujo aun excelente precio</p>
               <p class="precio">$3,000,000.00</p>

               <ul class="iconos-caracteristicas">
                  <li>
                     <img class="icono_anuncio" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                     <p class="numero">3</p>
                  </li>

                  <li>
                     <img class="icono_anuncio" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                     <p class="numero">3</p>
                  </li>

                  <li>
                     <img class="icono_anuncio" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono habitaciones">
                     <p class="numero">4</p>
                  </li>
               </ul>

               <a href="anuncio.html" class="boton-amarillo-block">
                  Ver Propiedad
               </a>
            </div>  <!-- .contenido-anuncio -->
         </div>  <!-- .anuncio -->

         <div class="anuncio">
            <picture>
               <source srcset="build/img/anuncio2.webp" type="image/webp">
               <source srcset="build/img/anuncio2.jpg" type="image/jpeg">
               <img loading="lazy" src="build/img/anuncio2.jpg" alt="anuncio">
            </picture>

            <div class="contenido-anuncio">
               <h3>Casa Terminados de Lujo</h3>
               <p>Casa en Lago con excelente vista, acabados de lujo aun excelente precio</p>
               <p class="precio">$3,000,000.00</p>

               <ul class="iconos-caracteristicas">
                  <li>
                     <img class="icono_anuncio" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                     <p class="numero">3</p>
                  </li>

                  <li>
                     <img class="icono_anuncio" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                     <p class="numero">3</p>
                  </li>

                  <li>
                     <img class="icono_anuncio" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono habitaciones">
                     <p class="numero">4</p>
                  </li>
               </ul>

               <a href="anuncio.html" class="boton-amarillo-block">
                  Ver Propiedad
               </a>
            </div>  <!-- .contenido-anuncio -->
         </div>  <!-- .anuncio -->

         <div class="anuncio">
            <picture>
               <source srcset="build/img/anuncio3.webp" type="image/webp">
               <source srcset="build/img/anuncio3.jpg" type="image/jpeg">
               <img loading="lazy" src="build/img/anuncio3.jpg" alt="anuncio">
            </picture>

            <div class="contenido-anuncio">
               <h3>Casa con Alberca</h3>
               <p>Casa en Lago con excelente vista, acabados de lujo aun excelente precio</p>
               <p class="precio">$3,000,000.00</p>

               <ul class="iconos-caracteristicas">
                  <li>
                     <img class="icono_anuncio" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                     <p class="numero">3</p>
                  </li>

                  <li>
                     <img class="icono_anuncio" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                     <p class="numero">3</p>
                  </li>

                  <li>
                     <img class="icono_anuncio" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono habitaciones">
                     <p class="numero">4</p>
                  </li>
               </ul>

               <a href="anuncio.html" class="boton-amarillo-block">
                  Ver Propiedad
               </a>
            </div>  <!-- .contenido-anuncio -->
         </div>  <!-- .anuncio -->
      </div>  <!-- .contenedor-anuncios -->

      <div class="alinear-derecha">
         <a href="anuncios.html" class="boton-verde">
            Ver Todas
         </a>
      </div>
   </section>

   <!-- BANNER CONTACTO -->
   <section class="imagen-contacto">
      <h2>Encuntra la casa de tus sueños</h2>
      <p>Llena el formulario de contacto y un asesor se pondrá en contacto contigo a la brevedad</p>
      <a href="contacto.html" class="boton-amarillo">Contáctanos</a>
   </section>

   <!-- BLOG AND ASIDE TESTIMONIALES -->
   <div class="contenedor seccion seccion-inferior">
      <!-- ENTRADAS DE BLOG -->
      <section class="blog">
         <h3>Nuestro Blog</h3>

         <article class="entrada-blog">
            <div class="imagen">
               <picture>
                  <source srcset="build/img/blog1.webp" type="image/webp">
                  <source srcset="build/img/blog1.jpg" type="image/jpeg">
                  <img loading="lazy" src="build/img/blog1.jpg" alt="texto entrada blog">
               </picture>
            </div>  <!-- .imagen -->

            <div class="texto-entrada">
               <a href="entrada.html">
                  <h4>Terraza en el techo de tu casa</h4>
                  <p class="informacion-meta">Escrito el: <span>20/10/2021</span>Por: <span>Admin</span></p>

                  <p>Consejos para construir una terraza en el techo de tu casa con los mejores materiales y ahorrando dinero.</p>
               </a>
            </div>
         </article>

         <article class="entrada-blog">
            <div class="imagen">
               <picture>
                  <source srcset="build/img/blog2.webp" type="image/webp">
                  <source srcset="build/img/blog2.jpg" type="image/jpeg">
                  <img loading="lazy" src="build/img/blog2.jpg" alt="texto entrada blog">
               </picture>
            </div>  <!-- .imagen -->

            <div class="texto-entrada">
               <a href="entrada.html">
                  <h4>Guía para decoración de tu hogar</h4>
                  <p class="informacion-meta">Escrito el: <span>20/10/2021</span>Por: <span>Admin</span></p>

                  <p>Maximiza el espacio en tu hogar con esta guía, aprende a cambiar muebles y colores para darle vida a tu espacio.</p>
               </a>
            </div>
         </article>
      </section>

      <section class="testimoniales">
         <h3>Testimoniales</h3>

         <div class="testimonial">
            <blockquote>
               El personal se comporto de una excelente forma, muy buena atención y la casa que me ofrecieron cumple con todas mis espectativas.
            </blockquote>
            <p>- Raúl Valdez</p>
         </div>
      </section>
   </div>

<?php
   incluirTemplate('footer');
?>
