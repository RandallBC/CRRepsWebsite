<?php
ob_start();

ini_set ('error_reporting', E_PARSE);


$buscado = $_POST['busqueda'];

/*echo ("Usted ha buscado ".$buscado);*/


$paginacontenido = ob_get_contents();
ob_end_clean();

require_once 'plantilla.php';
?>