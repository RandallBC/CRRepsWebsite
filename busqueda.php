<?php

$buscado = $_POST['busca'];
$retorno = "";
    
    $lines = file('sitemap.php');
    foreach($lines as $line)
    {
        if((stripos($line, $buscado) !== false) && (stripos($line, "onclick=") !== false)){
          $retorno = $retorno . $line;
        } 
    }
    echo $retorno;
?>