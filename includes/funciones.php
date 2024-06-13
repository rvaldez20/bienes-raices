<?php

require 'app.php';

function incluirTemplate( string $nombre, bool $inicio = false ) {
   // echo TEMPLATES_URL . "\\" . $nombre . ".php";
   // include 'includes/templates/header.php';

   include TEMPLATES_URL . "\\" . $nombre . ".php";
}


function isAuth() : bool {
   session_start();

   $auth = $_SESSION['login'];
   if($auth) {
      // esta authenticado
      return true;
   }

   // no esta authenticado
   return false;
}
