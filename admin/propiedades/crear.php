<?php

   // Base de datos
   require '../../includes/config/database.php';
   $db = conectarDB();

   // array con mensjes de errores
   $errores = [];

   // ejecuta el codigo despues de que se envia el formulario
   if($_SERVER["REQUEST_METHOD"] === 'POST') {
      // echo "<pre>";
      // var_dump($_POST);
      // echo "</pre>";

      $titulo = $_POST["titulo"];
      $precio = $_POST["precio"];
      $descripcion = $_POST["descripcion"];
      $habitaciones = $_POST["habitaciones"];
      $wc = $_POST["wc"];
      $estacionamiento = $_POST["estacionamiento"];
      // validacion para $vendedores_Id
      $vendedores_Id = '';
      if( isset($_POST["vendedores_Id"]) ) {
         $vendedores_Id = $_POST["vendedores_Id"];
      } else {
         $_POST["vendedores_Id"] = '';
      }


      // validamos que se ingrese información en cada campo
      if(!$titulo) {
         $errores[] = "Debes ingresar un titulo";
      }
      if(!$precio) {
         $errores[] = "El precio es requerido";
      }
      if(strlen($descripcion) < 50) {
         $errores[] = "La descripción es requerida y debe tener al menos 50 caractres";
      }
      if(!$habitaciones) {
         $errores[] = "El número de habitaciones es obligatorio";
      }
      if(!$wc) {
         $errores[] = "El número de baños es obligatorio";
      }
      if(!$estacionamiento) {
         $errores[] = "El número de lugares de estacionamiento es obligatorio";
      }
      if(!$vendedores_Id && isset($vendedores_Id)) {
         $errores[] = "Es necesario elegir un vendedor";
      }

      // echo "<pre>";
      // var_dump($errores);
      // echo "</pre>";
      // exit;

      // revisar que el array de errores este vacio
      if(empty($errores)) {
         // inserta en la base de datos
         $query = "INSERT INTO propiedades(titulo, precio, descripcion, habitaciones, wc, estacionamiento, vendedores_Id) VALUES('$titulo', '$precio', '$descripcion', '$habitaciones', '$wc', '$estacionamiento', '$vendedores_Id');";
         // echo $query;

         $res = mysqli_query($db, $query);
         if($res) {
            echo "Propiedad creada correctamente";
         }
      }


   }



   require '../../includes/funciones.php';
   incluirTemplate('header');
?>

   <main class="contenedor seccion">
      <h1>Crear Nueva Propiedad</h1>

      <?php foreach($errores as $error): ?>
         <div class="alerta error">
            <?php echo $error; ?>
         </div>

      <?php endforeach; ?>

      <a href="/admin" class="boton-amarillo">Volver al Admin</a>

      <form class="formulario" method="POST" action="/admin/propiedades/crear.php">
         <fieldset>
            <legend>Información General</legend>

            <label for="titulo">Titulo</label>
            <input type="text" id="titulo" name="titulo" placeholder="Titulo Propiedad">

            <label for="precio">Precio</label>
            <input type="number" id="precio" name="precio" placeholder="Precio  Propiedad">

            <label for="imagen">Precio</label>
            <input type="file" id="imagen" accept="image/jpeg, image/png">

            <label for="descripcion">Descripción</label>
            <textarea id="descripcion" name="descripcion"></textarea>
         </fieldset>

         <fieldset>
            <legend>Información de la Propiedad</legend>

            <label for="habitaciones">habitaciones</label>
            <input type="number" id="habitaciones" name="habitaciones" placeholder="Ej: 3" min="1" max="9">

            <label for="wc">Baños</label>
            <input type="number" id="wc" name="wc" placeholder="Ej: 3" min="1" max="9">

            <label for="estacionamiento">Etacionamiento</label>
            <input type="number" id="estacionamiento" name="estacionamiento" placeholder="Ej: 3" min="1" max="9">
         </fieldset>

         <fieldset>
            <legend>Vendedor</legend>

            <select name="vendedores_Id">
               <option value="" disabled selected>-- Seleccione un Vendedor --</option>
               <option value="1">Juan</option>
               <option value="2">Karen</option>
            </select>
         </fieldset>

         <input type="submit" value="Crear Propiedad" class="boton-verde">
   </main>

<?php
   incluirTemplate('footer');
?>
