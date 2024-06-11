<?php

   // Base de datos
   require '../../includes/config/database.php';
   $db = conectarDB();

   // consulta para obtener los vendedores
   $queryAllVendedores = "SELECT * FROM vendedores;";
   $resVendedores = mysqli_query($db, $queryAllVendedores);

   // echo "<pre>";
   // var_dump($res);
   // echo "</pre>";
   // exit;

   // array con mensjes de errores
   $errores = [];

   // variables para guardar valroes previos
   $titulo ='' ;
   $precio ='' ;
   $descripcion ='' ;
   $habitaciones ='' ;
   $wc ='' ;
   $estacionamiento ='' ;
   $vendedores_Id ='';

   // ejecuta el codigo despues de que se envia el formulario
   if($_SERVER["REQUEST_METHOD"] === 'POST') {

      // echo "<pre>";
      // var_dump($_POST);
      // echo "</pre>";

      // echo "<pre>";
      // var_dump($_FILES);
      // echo "</pre>";



      $titulo = mysqli_real_escape_string($db, $_POST["titulo"]);
      $precio = mysqli_real_escape_string($db, $_POST["precio"]);
      $descripcion = mysqli_real_escape_string($db, $_POST["descripcion"]);
      $habitaciones = mysqli_real_escape_string($db, $_POST["habitaciones"]);
      $wc = mysqli_real_escape_string($db, $_POST["wc"]);
      $estacionamiento = mysqli_real_escape_string($db, $_POST["estacionamiento"]);
      // validacion para $vendedores_Id
      // $vendedores_Id = '';
      if( isset($_POST["vendedores_Id"]) ) {
         $vendedores_Id = mysqli_real_escape_string($db, $_POST["vendedores_Id"]);
      } else {
         $_POST["vendedores_Id"] = '';
      }
      $creado = date('Y/m/d');

      // asignar files hacia una variable
      $imagen = $_FILES['imagen'];


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
      if(!$imagen['name'] || $imagen['error']) {
         $errores[] = "La imagen es obligatoria";
      }

      // validar el tamaño de la imagen (1 mb maximo)
      // y si la imagen supera el maximo configurado en PHP erro sera 1 => $imagen['error'] = 1
      $medida = 10000 * 100;

      if($imagen['size'] > $medida) {
         $errores[] = "Tamaño de la imagen supera el maximo permitido";
      }

      // echo "<pre>";
      // var_dump($errores);
      // echo "</pre>";
      // exit;

      // revisar que el array de errores este vacio
      if(empty($errores)) {
         /** SUBIDA DE ARCHIVOS */

         // Crear la rura del directorio de las imagenes (sera la raiz)
         $carpetaImagenes= '../../imagenes/';

         // verificamo si no existe la creamos (se verica con is_dir())
         if(!is_dir($carpetaImagenes)) {
            mkdir($carpetaImagenes);
         }

         // crear un nombre unico para cada imagen
         $nombreImagen = md5(uniqid(rand(), true));

         // detectar la extension de la imagen
         if($imagen['type'] === "image/jpeg") {
            $extensionImagen = ".jpg";
            $nombreImagenDB = $nombreImagen . '.jpg';
         } else {
            $extensionImagen = ".png";
            $nombreImagenDB = $nombreImagen . '.png';
         }

         // Subir la imagen al servidor
         move_uploaded_file($imagen['tmp_name'], $carpetaImagenes . $nombreImagen .  $extensionImagen);

         // var_dump($carpetaImagenes . $nombreImagen . $extensionImagen);
         // exit;


         // inserta en la base de datos
         $query = "INSERT INTO propiedades(titulo, precio, imagen, descripcion, habitaciones, wc, estacionamiento, creado, vendedores_Id) VALUES('$titulo', '$precio', '$nombreImagenDB', '$descripcion', '$habitaciones', '$wc', '$estacionamiento', '$creado', '$vendedores_Id');";
         // echo $query;

         $res = mysqli_query($db, $query);
         if($res) {
            // redireccionar al usuario
            header('Location: /admin');
         }
      }  // if(empty($errores))
   }  // if($_SERVER["REQUEST_METHOD"] === 'POST')



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

      <form class="formulario" method="POST" action="/admin/propiedades/crear.php" enctype="multipart/form-data">
         <fieldset>
            <legend>Información General</legend>

            <label for="titulo">Titulo</label>
            <input type="text" id="titulo" name="titulo" value="<?php echo $titulo ?>" placeholder="Titulo Propiedad">

            <label for="precio">Precio</label>
            <input type="number" id="precio" name="precio" value="<?php echo $precio ?>" placeholder="Precio  Propiedad">

            <label for="imagen">Precio</label>
            <input type="file" id="imagen" accept="image/jpeg, image/png" name="imagen">

            <label for="descripcion">Descripción</label>
            <textarea id="descripcion" name="descripcion"><?php echo $descripcion ?></textarea>
         </fieldset>

         <fieldset>
            <legend>Información de la Propiedad</legend>

            <label for="habitaciones">habitaciones</label>
            <input type="number" id="habitaciones" name="habitaciones" value="<?php echo $habitaciones ?>" placeholder="Ej: 3" min="1" max="9">

            <label for="wc">Baños</label>
            <input type="number" id="wc" name="wc" value="<?php echo $wc ?>" placeholder="Ej: 3" min="1" max="9">

            <label for="estacionamiento">Etacionamiento</label>
            <input type="number" id="estacionamiento" name="estacionamiento" value="<?php echo $estacionamiento ?>" placeholder="Ej: 3" min="1" max="9">
         </fieldset>

         <fieldset>
            <legend>Vendedor</legend>

            <select name="vendedores_Id">
               <option value="" disabled selected>-- Seleccione un Vendedor --</option>
               <?php while($row = mysqli_fetch_assoc($resVendedores)): ?>
                  <option <?php echo $vendedores_Id === $row['id'] ? 'selected' : ''; ?> value="<?php echo $row["id"]; ?>"><?php echo $row["nombre"] . " " . $row["apellido"]; ?></option>
               <?php endwhile ?>
            </select>
         </fieldset>

         <input type="submit" value="Crear Propiedad" class="boton-verde">
   </main>

<?php
   incluirTemplate('footer');
?>
