<?php

require 'app.php';

function incluirTemplate( string $nombre, bool $inicio = false ) {
   // echo TEMPLATES_URL . "\\" . $nombre . ".php";
   // include 'includes/templates/header.php';

   include TEMPLATES_URL . "\\" . $nombre . ".php";
}
