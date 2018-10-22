<?php
ob_start();

ini_set ('error_reporting', E_PARSE);
require_once("conexionlocal.php");


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

$internet = 0;
$magazine = 0;
$friend = 0;
$newspaper = 0;
$travelshow = 0;


$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = base64_encode($_POST['password']);
$country = $_POST['country'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$hear = $_POST['hearabout'];

$fecha = date('Y-m-d H:i:s');
$activo = 1;
$registrado = 0;

if (isset($_POST['newsletter'])) {$newsletter = 1;} else {$newsletter = 0;}

/*         EL FORMATO DE ENTRADA SERA:   ACTIVO-NEWSLETTER-REGISTRADO   (ALFABETICAMENTE)

    ACTIVO:      el usuario ha entrado recientemente o no ha abandonado las visitas al sitio por completo.
    NEWSLETTER:  el usuario desea recibir los newsletters de CR Reps
    REGISTRADO:  el usuario ha dado click en el enlace del correo enviado para activarse.

*/

$binario = $activo . $newsletter . $registrado;
$flag = bindec($binario);


/*
 *
 *          El Formato para "hear about us es:  "internet-magazine-friend-newspaper-travel show"
 *          ya que de esta forma fue escrito desde la pagina anterior.
*/

for ($i=0;$i<count($hear);$i++)  /*Info Source*/
{
    if ($hear[$i] == "1" ){$internet = 1;}
    if ($hear[$i] == "2" ){$magazine = 1;}
    if ($hear[$i] == "3" ){$friend = 1;}
    if ($hear[$i] == "4" ){$newspaper = 1;}
    if ($hear[$i] == "5" ){$travelshow = 1;}
}

$info_binario = $internet . $magazine . $friend . $newspaper . $travelshow;
$info_source = bindec($info_binario);

$ip = GetIP();
$ipbd = ip2long($ip);

/*-------------------------------------------------------Pais----------------------------------------------------------------------------------------------------*/

$sqlpais = "SELECT id FROM country WHERE (name = '$country')";

$query = mysql_query ($sqlpais);
while ($row = mysql_fetch_object($query))
{
    $idpais = $row->id;
}

/*-------------------------------------------------------Pais----------------------------------------------------------------------------------------------------*/

/*echo "ip: " . $ip;
echo("<br>");
echo("name: " . $firstname . "<br>");
echo("lastname: " . $lastname . "<br>");
echo("email: " . $email . "<br>");
echo("pass: " . $password . "<br>");
echo("country: " . $country . "<br>");
echo("id country: " . $idpais . "<br>");
echo("address: " . $address . "<br>");
echo("phone: " . $phone . "<br>");
echo("newsletter: " . $newsletter . "<br>");
echo("fecha: " . $fecha . "<br>");

echo("Binario: " . $binario . "<br>");
echo("Flag: " . $flag . "<br>");

echo("info source Binario: " . $info_binario . "<br>");
echo("info source: " . $info_source . "<br>");


echo "<br><br>";
echo "Internet: " .$internet . "<br>";
echo "Magazine: " .$magazine . "<br>";
echo "Friend: " .$friend . "<br>";
echo "Newspaper: " .$newspaper . "<br>";
echo "Travel Show: " .$travelshow . "<br>";
*/

/*-------------------------------------------------------correo existente----------------------------------------------------------------------------------------------------*/

$sqlexistemail = "SELECT email FROM member_auth WHERE (email = '$email')";

$query = mysql_query ($sqlexistemail);
while ($row = mysql_fetch_object($query))
{
    $existe = $row->email;
}

/*require_once('recaptcha/recaptchalib.php');
$privatekey = "6LfJwvkSAAAAAE4Cvs1bop7b7O1VcV54WMR3xc94";
$resp = recaptcha_check_answer ($privatekey,
    $_SERVER["REMOTE_ADDR"],
    $_POST["recaptcha_challenge_field"],
    $_POST["recaptcha_response_field"]);

if (!$resp->is_valid) {
    // What happens when the CAPTCHA was entered incorrectly
    $captch = 0;

} else {
    // Your code here to handle a successful verification
    $captch = 1;
}*/

if ($existe == $email)
{
    echo "<script language='javascript'>";
    echo "alert('The email $email is already registered.');";
    echo "document.location.href='index.php';";
    echo "</script>";
}
/*else if ($captch == 0){?>
<script>

    alert("The reCAPTCHA wasn't entered correctly. Please try it again.");
    document.location.href='index.php';
</script>
    <?php
}*/
else {
    /*--------------------------------------------------------------------------------Link de Activacion------------------------------------------------------------------------------*/

$md5email = base64_encode($email);

    $cuerpo = 'hello, to activate your account please click the following link:
'."\n".'
<a href="http://www.costaricareps.com/crreps/avanceRBC/activar.php?code='.$md5email.'">http://www.costaricareps.com/crreps/avanceRBC/activar.php?code='.$md5email.'</a>
<br><br>Or copy the following link into the address bar of your web browser:
'."\n".'
http://www.costaricareps.com/crreps/avanceRBC/activar.php?code='.$md5email;

    mail($email,"CostaRicaReps Activation of your account",$cuerpo,"Content-type: text/html\r\n");


    /*--------------------------------------------------------------------------------Link de Activacion------------------------------------------------------------------------------*/

    $sql = "INSERT INTO crreps_tourreps.member_auth (id, email, password, first_name, last_name, country__id, address, phone, last_access, last_ip, info_source, flag ) VALUES ('','$email','$password','$firstname','$lastname','$idpais','$address','$phone','$fecha','$ipbd','$info_source','$flag')";
    $resultado=mysql_query($sql);

    if (!$resultado)
    {
        die('Error: ' . mysql_error());
        echo "Error!";
    }
    else {
        ?>
        <script>

            alert("Thank you for your Registration, We have sent an activation email to <?php echo $email; ?> ,please check your email.");
            document.location.href='index.php';
        </script>
    <?php
    }
}

/*-------------------------------------------------------correo existente----------------------------------------------------------------------------------------------------*/

mysql_close($link);

$paginacontenido = ob_get_contents();
ob_end_clean();

require_once 'plantilla.php';


?>