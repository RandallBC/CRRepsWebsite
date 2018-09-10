
<?php ob_start();
ini_set ('error_reporting', E_PARSE); 

include("menusdatos/menutravelguide.php");

    $paginamenu = ob_get_contents();
    ob_end_clean();
        
?>

<?php
 
 require_once 'plantilla.php';
 ?>
     
    