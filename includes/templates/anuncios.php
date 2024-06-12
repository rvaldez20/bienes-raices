<?php
   // Base de datos
   require 'includes/config/database.php';
   $db = conectarDB();

   $queryCasas = "SELECT * FROM propiedades LIMIT $limite";
   $resCasas = mysqli_query($db, $queryCasas);
?>

   <div class="contenedor-anuncios">

      <?php while($propiedad = mysqli_fetch_assoc($resCasas)): ?>
         <div class="anuncio">
            <!-- <picture>
               <source srcset="build/img/anuncio1.webp" type="image/webp">
               <source srcset="build/img/anuncio1.jpg" type="image/jpeg"> -->
            <img loading="lazy" src="imagenes/<?php echo $propiedad["imagen"]; ?>" alt="anuncio">
            <!-- </picture> -->

            <div class="contenido-anuncio">
               <h3><?php echo $propiedad["titulo"]; ?></h3>
               <p><?php echo $propiedad["descripcion"]; ?></p>
               <p class="precio">$<?php echo $propiedad["precio"]; ?></p>

               <ul class="iconos-caracteristicas">
                  <li>
                     <img class="icono_anuncio" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                     <p class="numero"><?php echo $propiedad["wc"]; ?></p>
                  </li>

                  <li>
                     <img class="icono_anuncio" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                     <p class="numero"><?php echo $propiedad["estacionamiento"]; ?></p>
                  </li>

                  <li>
                     <img class="icono_anuncio" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono habitaciones">
                     <p class="numero"><?php echo $propiedad["habitaciones"]; ?></p>
                  </li>
               </ul>

               <a href="anuncio.php?id=<?php echo $propiedad["id"]; ?>" class="boton-amarillo-block">
                  Ver Propiedad
               </a>
            </div>  <!-- .contenido-anuncio -->
         </div>  <!-- .anuncio -->
      <?php endwhile; ?>
   </div>  <!-- .contenedor-anuncios -->

   <?php
      // cerrar conexión
      mysqli_close($db);
   ?>
