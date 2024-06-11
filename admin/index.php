<?php

   $resultado = $_GET["resultado"] ?? null;  //checamos si esta esta establecido reusltado

   require '../includes/funciones.php';
   incluirTemplate('header');

   // require '../../includes/templates/header.php'
?>

   <main class="contenedor seccion">
      <h1>Administrador de Bienes Raices</h1>

      <?php if( intval($resultado) === 1):  ?>
         <p class="alerta exito"><?php echo "Propiedad Registrada Correctamente"; ?></p>
      <?php endif ?>

      <a href="/admin/propiedades/crear.php" class="boton-amarillo">Nueva Propiedad</a>

      <table class="propiedades">
         <thead>
            <tr>
               <th>ID</th>
               <th>Titulo</th>
               <th>Imagen</th>
               <th>Precio</th>
               <th>Acciones</th>
            </tr>
         </thead>

         <tbody>
            <tr>
               <td>1</td>
               <td>Casa en la palya</td>
               <td><img src="/imagenes/072b975ee658d53f7f2c7184de9cd11a.jpg" alt="imagen propiedad" class="imagen-tabla"></td>
               <td>$200,000</td>
               <td>
                  <a href="#" class="boton-rojo-block">Eliminar</a>
                  <a href="#" class="boton-amarillo-block">Actualizar</a>
               </td>
            </tr>
         </tbody>

      </table>

   </main>

<?php
   incluirTemplate('footer');
?>
