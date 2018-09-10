
<?php ob_start();
ini_set ('error_reporting', E_PARSE);

    include("travelguide_content/roads.php");

    $paginacontenido = ob_get_contents();
    ob_end_clean();

 require_once 'p_travelguide.php';

 ?>
     
    