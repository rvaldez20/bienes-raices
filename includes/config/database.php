<?php

function conectarDB():mysqli {
   $db_connect = mysqli_connect('localhost', 'root', '', 'bienesraices_crud');
   if(!$db_connect) {
      echo "Error no se pudo conectar";
      exit;
   }

   return $db_connect;
}
