<?php ob_start(); ?>
<div class="post" id="derechaConten">

    <iframe  src="http://costaricareps.com/hoteles2/Flights" width="1020" height="1113" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" >Your web browser does not support this content.</iframe>



</div>
<?php 
     $paginacontenido = ob_get_contents();
    ob_end_clean();
    
    require_once 'plantilla2.php';
?>