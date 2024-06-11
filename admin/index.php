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
   </main>

<?php
   incluirTemplate('footer');
?>
