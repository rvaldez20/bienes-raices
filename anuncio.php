<?php
   include './includes/templates/header.php';
?>

   <main class="contenedor seccion contenido-centrado">
      <h1>Casa en Venta Frente al Bosque</h1>

      <picture>
         <source srcset="build/img/destacada.webp" type="image/webp">
         <source srcset="build/img/destacada.jpg" type="image/jpeg">
         <img loading="lazy" src="build/img/destacada.jpg" alt="anuncio">
      </picture>

      <div class="resumen-propiedad">
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
               <p class="numero" >4</p>
            </li>
         </ul>

         <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nisi, obcaecati? Excepturi atque quaerat est explicabo repellat iste voluptatem commodi culpa repudiandae illo expedita, eaque aliquam distinctio inventore accusantium quam fugit!. sit amet consectetur adipisicing elit. Nisi, obcaecati? Excepturi atque quaerat est explicabo repellat iste voluptatem commodi culpa repudiandae illo expedita, eaque aliquam distinctio inventore accusantium quam fugit! iste voluptatem commodi culpa repudiandae illo expedita, eaque aliquam distinctio inventore accusantium quam fugit!. sit amet consectetur adipisicing elit. Nisi, obcaecati? Excepturi atque quaerat est explicabo repellat iste voluptatem commodi culpa repudiandae illo expedita, eaque aliquam distinctio inventore accusantium</p>
         <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae nesciunt officia tempore omnis temporibus odio, molestiae, itaque rem consequuntur explicabo fugit id harum culpa neque cum, nihil porro quod aspernatur!. molestiae, itaque rem consequuntur explicabo fugit id harum culpa neque cum, nihil porro quod aspernatur!</p>

      </div>
   </main>


<?php
   include 'includes/templates/footer.php';
?>
