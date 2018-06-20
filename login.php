<?php
ob_start();
session_start();?>

<style>
#logout{
    color: #9C1B2D;
    text-decoration: none ;
    font: normal 18px Candara;
}

</style>


<?php
ini_set ('error_reporting', E_PARSE);
require_once("conexion.php");


/*capturar la ip*/

function GetIP()
{
    foreach (array('HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR',
                 'HTTP_X_FORWARDED', 'HTTP_X_CLUSTER_CLIENT_IP', 'HTTP_FORWARDED_FOR',
                 'HTTP_FORWARDED', 'REMOTE_ADDR') as $key)
    {
        if (array_key_exists($key, $_SERVER) === true)
        {
            foreach (array_map('trim', explode(',', $_SERVER[$key])) as
                     $ip)
            {
                if (filter_var($ip, FILTER_VALIDATE_IP,
                        FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) !== false)
                {
                    return $ip;
                }
            }
        }
    }
}

/*capturar datos del form*/
$email = $_POST['login'];
$password = base64_encode($_POST['password']);

function poner_cookie(){
    setcookie("cookemail", $_POST['login'],time()+60*60*24*100,"/");
    setcookie("cookpass", $_POST['password'],time()+60*60*24*100,"/");
}

if(isset($_POST['rememberme'])) { /*echo"<script> alert ('remember me activado'); </script>";*/ poner_cookie();}
else {echo "<script> alert ('no cookie'); </script>";}


$_SESSION['email'] = $email;


$sqlexistemail = "SELECT email, password, flag FROM member_auth WHERE (email = '$email')";

$query = mysql_query ($sqlexistemail);
while ($row = mysql_fetch_object($query))
{
    $correoexiste = $row->email;
    $passexiste = $row->password;
    $flag = decbin($row->flag);
}

$tamano = strlen($flag);

if (($correoexiste == $email ) and ($passexiste == $password)) {

    if($flag[$tamano-1] == 1){
            $registrado = 1;

            $fecha = date('Y-m-d H:i:s');
            $ip = GetIP();
            $ipbd = ip2long($ip);

        if(isset($_SESSION['email'])){

            /*-------------------------------------------------------------------------------- actualizar el dato ------------------------------------------------------------*/

                $actualizar = "UPDATE member_auth SET last_access = '$fecha', last_ip = '$ipbd' WHERE email='$email'";

                $resultado = mysql_query($actualizar) or die ("Error in LogIn");

                if (!$resultado) {
                    echo "Error updating record";
                } else {

                    /* echo "<br><br><center><h3>Welcome " . $email . "     <a id='logout' href='sessionclose.php'>Log Out</a></center>";*/

                    echo '<script language = javascript>
	                location.href = "index.php";
	                </script>';

                        }
        }
        else {
            include_once("sessionclose.php");
        }
    }
    else
        {
            $registrado = 0;
            echo ("<h2><center>The user is Registered but has not been activated yet, please check the activation email we sent to " . $email . ", and please try again.</center></h2>");
            session_start();
            session_destroy();
        }

}  //fin del if

else {echo "<br><br><center><h3>The email <b>" .$email . "</b> is not registered in Costa Rica Reps Or your password is wrong, please try again.</h3></center>";
    session_start();
    session_destroy();
}

mysql_close($link);
$paginacontenido = ob_get_contents();
ob_end_clean();

require_once 'plantilla.php';
?>