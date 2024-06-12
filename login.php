<?php

   // conexion a la DB
   require 'includes/config/database.php';
   $db = conectarDB();

   $errores = [];

   // autenticar el usario
   if($_SERVER["REQUEST_METHOD"] === "POST") {
      // echo "<pre>";
      // var_dump($_POST);
      // echo "</pre>";

      // validamos que sea un email valido
      $email = mysqli_real_escape_string($db, filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) );
      $password = mysqli_real_escape_string( $db, $_POST["password"]) ;

      // verificamos que ocntenga información
      if(!$email) {
         $errores[] = "El email es obligatorio o no es valido";
      }
      if(!$password) {
         $errores[] = "El password es obligatorio";
      }

      if(empty($errores)) {
         // verificar que el emal este regsitrado
         $query = "SELECT * FROM usuarios WHERE email='$email'";
         $resultado = mysqli_query($db, $query);

         // verificamos si obtubimos resultados en el query
         if($resultado->num_rows) {
            // verificar que el passwor es correcto
            $usuario = mysqli_fetch_assoc($resultado);

            // Verificar si el password hasheado es correcto
            $auth = password_verify($password, $usuario['password']);

            var_dump($auth);

            if($auth) {
               // el usuario se peude authenticar
            } else {
               // el password es incorrecto
               $errores[] = "El password es incorrecto";
            }

         } else {
            $errores[] = "El Usuario no existe";
         }

         // authenticar el usario
      }

      // echo "<pre>";
      // var_dump($errores);
      // echo "</pre>";
   }


   // incluye el header
   require 'includes/funciones.php';
   incluirTemplate('header');
?>

   <main class="contenedor seccion contenido-centrado">
      <h1>Iniciar Sesión</h1>

      <?php foreach($errores as $error): ?>
         <div class="alerta error">
            <p><?php echo $error; ?></p>
         </div>
      <?php endforeach; ?>

      <form class="formulario" method="POST">
         <fieldset>
            <legend>Email y Password</legend>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Tu Email" >

            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Tu Password" >

            <input type="submit" class="boton-verde" value="Iniciar Sesión">
         </fieldset>
      </form>
   </main>

<?php
   incluirTemplate('footer');
?>
