<?php
ob_start();

ini_set ('error_reporting', E_PARSE);
require_once("conexion.php");


$code = mysql_real_escape_string($_GET['code']);

$correodecode = base64_decode($code);

$sqlexistemail = "SELECT email FROM member_auth WHERE (email = '$correodecode')";

$query = mysql_query ($sqlexistemail);
while ($row = mysql_fetch_object($query))
{
    $existe = $row->email;
}

if ($existe == $correodecode ){

    $sql = "SELECT flag FROM member_auth WHERE (email = '$correodecode')";

    $query1 = mysql_query ($sql);
    while ($row = mysql_fetch_object($query1))
    {
        $flag = $row->flag;
    }

    /*----------------------------------------------------------------------------------funcion de extraer y cambiar los datos----------------------------------------*/

    $flagbinario = decbin($flag);
    $tamaño = strlen($flagbinario);

    $arreglo[$tamaño] = $flagbinario;

    for ($i=0; $i<=$tamaño-2;$i++){

        $arreglo[$i] = $flagbinario[$i];
        $newflag = $newflag . $arreglo[$i];
    }
    $arreglo[$tamaño-1] = 1;
    $newflag = $newflag . $arreglo[$tamaño-1];
    $newflagdecimal = bindec($newflag);

/*----------------------------------------------------------------------------------funcion de extraer y cambiar los datos----------------------------------------*/




/*-------------------------------------------------------------------------------- actualizar el dato ------------------------------------------------------------*/

    $actualizar = "UPDATE member_auth SET flag = '$newflagdecimal' WHERE email='$correodecode'";

    $resultado = mysql_query($actualizar) or die ("Error in Register");

    if (!$resultado) {
        echo "Error updating record";
    } else {
        ?>
        <script>
        alert("Thanks for registering your email <?php echo $correodecode;?>, the process has been successfully completed.");
            document.location.href='index.php';
        </script>
<?php
    }

    /*-------------------------------------------------------------------------------- actualizar el dato ------------------------------------------------------------*/

}  //fin del if

else {echo "This email is not registered";}

mysql_close($link);

$paginacontenido = ob_get_contents();
ob_end_clean();

require_once 'plantilla.php';
?>