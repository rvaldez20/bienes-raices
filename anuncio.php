<?php
   require 'includes/funciones.php';
   incluirTemplate('header');

   // Validamos si no es un id valido redireccionamos al admin
   $id = $_GET["id"];
   $id = filter_var($id, FILTER_VALIDATE_INT);
   if(!$id) {
      header('Location: /');
   }

   // Base de datos
   require 'includes/config/database.php';
   $db = conectarDB();

   $query = "SELECT * FROM propiedades WHERE id=$id";
   $resultado = mysqli_query($db, $query);

   // valida que el id en el query string exista en el reusltado si existe retorna 1 si no retorna 0
   if($resultado->num_rows === 0) {
      header('Location: /');
   }

   $propiedad = mysqli_fetch_assoc($resultado);
?>

   <main class="contenedor seccion contenido-centrado">
      <h1>Casa en Venta Frente al Bosque</h1>

      <!-- <picture>
         <source srcset="build/img/destacada.webp" type="image/webp">
         <source srcset="build/img/destacada.jpg" type="image/jpeg"> -->
         <img loading="lazy" src="imagenes/<?php echo $propiedad["imagen"] ?>" alt="anuncio">
      <!-- </picture> -->

      <div class="resumen-propiedad">
         <p class="precio">$<?php echo $propiedad["precio"] ?></p>
         <ul class="iconos-caracteristicas">
            <li>
               <img class="icono_anuncio" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
               <p class="numero"><?php echo $propiedad["wc"] ?></p>
            </li>

            <li>
               <img class="icono_anuncio" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
               <p class="numero"><?php echo $propiedad["estacionamiento"] ?></p>
            </li>

            <li>
               <img class="icono_anuncio" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono habitaciones">
               <p class="numero"><?php echo $propiedad["habitaciones"] ?></p>
            </li>
         </ul>

         <p><?php echo $propiedad["descripcion"] ?></p>

      </div>
   </main>


<?php
   // cerrar conexión
   mysqli_close($db);

   incluirTemplate('footer');
?>
