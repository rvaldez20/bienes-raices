<?php
require '../includes/funciones.php';
$auth = isAuth();

if(!$auth) {
   header('Location: /');
}

   // Base de datos conexion
   require '../includes/config/database.php';
   $db = conectarDB();

   // consulta SQL
   $query = "SELECT * FROM propiedades;";

   // consyultar la DB
   $resQuery = mysqli_query($db, $query);

   //mensaje condicional
   $resultado = $_GET["resultado"] ?? null;  //checamos si esta esta establecido reusltado

   // eliminar propiedad
   if($_SERVER["REQUEST_METHOD"] === 'POST') {
      $id = $_POST["id"];
      $id = filter_var($id, FILTER_VALIDATE_INT);

      if($id) {
         // ELIMINAMOS LA IMAGEN de la propiedad a eliminar
         $queryDeleteImage = "SELECT imagen FROM propiedades WHERE id=$id";
         $resDeleteImage = mysqli_query($db, $queryDeleteImage);
         $propiedadImageName = mysqli_fetch_assoc($resDeleteImage);

         unlink('../imagenes/' . $propiedadImageName["imagen"]);

         // elimina el registro d ela propiedad
         $queryDelete = "DELETE FROM propiedades WHERE id=$id;";
         $resDelete = mysqli_query($db, $queryDelete);

         if($resDelete) {
            header('Location: /admin?resultado=3');
         }
      }

      // var_dump($id);
   }

   // Incluye el template
   incluirTemplate('header');
?>

   <main class="contenedor seccion">
      <h1>Administrador de Bienes Raices</h1>

      <?php if(intval($resultado) === 1):  ?>
         <p class="alerta exito"><?php echo "Propiedad Registrada Correctamente"; ?></p>
      <?php elseif(intval($resultado) === 2): ?>
         <p class="alerta exito"><?php echo "Propiedad Actualizada Correctamente"; ?></p>
      <?php elseif(intval($resultado) === 3): ?>
         <p class="alerta error"><?php echo "Propiedad Eliminada Correctamente"; ?></p>
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
            <?php while($propiedad = mysqli_fetch_assoc($resQuery)): ?>
               <tr>
               <td><?php echo $propiedad["id"]; ?></td>
               <td><?php echo $propiedad["titulo"]; ?></td>
               <td><img src="/imagenes/<?php echo $propiedad["imagen"]; ?>" alt="imagen propiedad" class="imagen-tabla"></td>
               <td>$ <?php echo number_format($propiedad["precio"], 2, '.', ','); ?></td>
               <td>
                  <a href="admin/propiedades/actualizar.php?id=<?php echo $propiedad["id"]; ?>" class="boton-amarillo-block">Actualizar</a>

                  <form method="POST" class="w-100">
                     <input type="hidden" name="id" value="<?php echo $propiedad["id"]; ?>">

                     <input type="submit" class="boton-rojo-block" value="Eliminar">
                  </form>
               </td>
               </tr>
            <?php endwhile; ?>
         </tbody>
      </table>
   </main>

<?php
   // cerrar conxion DB
   mysqli_close($db);

   incluirTemplate('footer');
?>
