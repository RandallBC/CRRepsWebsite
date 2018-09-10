
<?php ob_start();
ini_set ('error_reporting', E_PARSE);
?>

<h2 id="titulotexto" style="padding: 30px;">Testimonials</h2>

<iframe  src="testimonials/testim.php" width="1020px" height="650px" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" ></iframe>

<?php
    $paginacontenido = ob_get_contents();
    ob_end_clean();

 require_once 'p_about.php';
 ?>
     
    