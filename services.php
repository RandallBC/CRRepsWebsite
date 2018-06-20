
<?php ob_start();
ini_set ('error_reporting', E_PARSE);

?>
<h2 style="padding: 20px;">Our Services</h2>
<iframe  src="services/services.php" width="1020" height="650" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" ></iframe>
<?php

    $paginacontenido = ob_get_contents();
    ob_end_clean();

 require_once 'p_about.php';

 ?>
     
    