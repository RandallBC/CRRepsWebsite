<?php ob_start(); ?>
<div class="post" id="derechaConten">
    <object data="http://costaricareps.com/hoteles2/Vehicles" width="1020" height="1113">
    <embed wmode="transparent" src="http://costaricareps.com/hoteles2/Vehicles" width="1020" height="1113" /> Error: Embedded data could not be displayed. </object>
</div>
<?php 
     $paginacontenido = ob_get_contents();
    ob_end_clean();
    
    require_once 'plantilla2.php';
?>