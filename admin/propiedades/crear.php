<?php

   // Base de datos
   require '../../includes/config/database.php';
   $db = conectarDB();


   require '../../includes/funciones.php';
   incluirTemplate('header');
?>

   <main class="contenedor seccion">
      <h1>Crear Nueva Propiedad</h1>

      <a href="/admin" class="boton-amarillo">Volver al Admin</a>

      <form class="formulario">
         <fieldset>
            <legend>Información General</legend>

            <label for="titulo">Titulo</label>
            <input type="text" id="titulo" placeholder="Titulo Propiedad">

            <label for="precio">Precio</label>
            <input type="number" id="precio" placeholder="Precio  Propiedad">

            <label for="imagen">Precio</label>
            <input type="file" id="imagen" accept="image/jpeg, image/png">

            <label for="descripcion">Descripción</label>
            <textarea id="descripcion" ></textarea>
         </fieldset>

         <fieldset>
            <legend>Información de la Propiedad</legend>

            <label for="habitaciones">habitaciones</label>
            <input type="number" id="habitaciones" placeholder="Ej: 3" min="1" max="9">

            <label for="wc">Baños</label>
            <input type="number" id="wc" placeholder="Ej: 3" min="1" max="9">

            <label for="estacionamientos">Etacionamiento</label>
            <input type="number" id="estacionamientos" placeholder="Ej: 3" min="1" max="9">
         </fieldset>

         <fieldset>
            <legend>Vendedor</legend>

            <select>
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
