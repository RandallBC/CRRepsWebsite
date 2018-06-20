<?php
ob_start();

ini_set ('error_reporting', E_PARSE);
require_once("conexion.php");

function generaPass(){
    $cadena = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz123456789";
    $longitudCadena=strlen($cadena);

    $pass = "";
    $longitudPass=10;

    for($i=1 ; $i<=$longitudPass ; $i++){
        $pos=rand(0,$longitudCadena-1);
        $pass .= substr($cadena,$pos,1);
    }
    return $pass;
}

$email = $_POST['email'];
$sqlexistemail = "SELECT email FROM member_auth WHERE (email = '$email')";

$query = mysql_query ($sqlexistemail);
while ($row = mysql_fetch_object($query))
{
    $existe = $row->email;
}

if ($existe == $email)
{
    /*el correo si existe*/

    $password = generaPass();
    $passdecode = base64_encode($password);

    $cuerpo = 'Hello, we have received a request to reset your password on our website,'."\n".'
        which has been changed, here is your new password:
        <br><br> Email: ' .$email . '
        <br> New Password: ' . $password;

    mail($email,"CostaRicaReps Password Reset",$cuerpo,"Content-type: text/html\r\n");


    $actualizar = "UPDATE member_auth SET password = '$passdecode' WHERE email='$email'";

    $resultado = mysql_query($actualizar) or die ("Error in Update");

    if (!$resultado) {
        echo "Error updating record";
    } else {
        echo "<br><br><center><h3>Hello, We have send an email to <b>". $email . "</b>, with your new password, please check it.</h3></center>";

    }

}

else{
   echo "<br><br><h3>Sorry but this email has not been Registered</h3>";


}

mysql_close($link);

$paginacontenido = ob_get_contents();
ob_end_clean();

require_once 'plantilla.php';
?>