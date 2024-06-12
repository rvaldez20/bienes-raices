<?php
   require 'includes/funciones.php';
   incluirTemplate('header');
?>

   <main class="contenedor seccion contenido-centrado">
      <h1>Iniciar Sesión</h1>

      <form class="formulario ">
         <fieldset>
            <legend>Email y Password</legend>

            <label for="email">Email</label>
            <input type="email" id="email" placeholder="Tu Email">

            <label for="password">Password</label>
            <input type="password" id="password" placeholder="Tu Password">

            <input type="submit" class="boton-verde" value="Iniciar Sesión">
         </fieldset>
      </form>
   </main>

<?php
   incluirTemplate('footer');
?>
