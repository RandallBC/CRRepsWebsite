<?php
ob_start();

session_start();
session_destroy();

echo "<script language='javascript'>";
echo "alert('You have logged out successfully');";
echo "document.location.href='index.php';";
echo "</script>";


$paginacontenido = ob_get_contents();
ob_end_clean();

require_once 'plantilla.php';
?>
?>