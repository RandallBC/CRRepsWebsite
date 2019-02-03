<?php
//error_reporting(0);
include "medoo/medoo.php";
include "db_con.php";
use medoo\medoo;

$database = new Medoo([
  'database_type' => 'mysql',
  'database_name' => CRR_DBNAME,
  'server' => CRR_SERVER,
  'username' => CRR_USER,
  'password' => CRR_PASS
]);

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

//connect();

$firstname = $_POST['first_name'];
$lastname = $_POST['last_name'];
$email = $_POST['email'];
$password = base64_encode($_POST['password']);
$country = $_POST['country'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$hear = $_POST['info_source'];
$newsletter = $_POST['newsletterR'];
$fecha = date('Y_m_d H:i:s');
$activo = 1;
$registrado = 0;

/*         EL FORMATO DE ENTRADA SERA:   ACTIVO_NEWSLETTER_REGISTRADO   (ALFABETICAMENTE)

ACTIVO:      el usuario ha entrado recientemente o no ha abandonado las visitas al sitio por completo.
NEWSLETTER:  el usuario desea recibir los newsletters de CR Reps
REGISTRADO:  el usuario ha dado click en el enlace del correo enviado para activarse.

*/

$flag = bindec($activo . $newsletter . $registrado);
/*
*          El Formato para "hear about us es:  "internet_magazine_friend_newspaper_travel show"
*          ya que de esta forma fue escrito desde la pagina anterior.
*/

$internet = 0; $magazine = 0; $friend = 0; $newspaper = 0; $travelshow = 0;

for ($i=0;$i<count($hear);$i++)  /*Info Source*/
{
  if ($hear[$i] == "1" ) { $internet = 1; }
  if ($hear[$i] == "2" ) { $magazine = 1; }
  if ($hear[$i] == "3" ) { $friend = 1; }
  if ($hear[$i] == "4" ) { $newspaper = 1; }
  if ($hear[$i] == "5" ) { $travelshow = 1; }
}

$info_source = bindec($internet . $magazine . $friend . $newspaper . $travelshow);
$ipN = GetIP();
$ipbd = ip2long($ipN);

/*_______________________________________________________Pais____________________________________________________________________________________________________*/
$datacountry = $database->select('country', [
  'name',
  'id'
], [
  'name' => $country
]);

$salDec = json_decode(json_encode($datacountry));
$dataencode = $salDec[0]->id;

$idpais = $dataencode != "" ? $dataencode : 0;

/*var_dump($email." - ".$password." - ".$firstname." - ".$lastname." - ".$idpais." - ".$address." - ".$phone." - ".$fecha." - ".$ipbd." - ".$info_source." - ".$flag);*/

$respuesta = "";
$dataEmail = $database->select('member_auth', [
  'email',
  'id'
], [
  'email' => $email
]);

$emailDec = json_decode(json_encode($dataEmail));
$emailEncode = $emailDec[0]->email;

if ($emailEncode == $email) {
  $respuesta = "Regexiste";
} else {
  $database->insert("member_auth", [
    "email" => $email,
    "password" => $password,
    "first_name" => $firstname,
    "last_name" => $lastname,
    "country__id" => $idpais,
    "address" => $address,
    "phone" => $phone,
    "last_access" => $fecha,
    "last_ip" => $ipbd,
    "info_source" => $info_source,
    "flag" => $flag
  ]);
  /*________________________________________________________________________________Link de Activacion______________________________________________________________________________*/
  $md5email = base64_encode($email);
  $actLink = 'http://www.costaricareps.com/activar.php?code='.$md5email;
  $from = "CostaRicaReps.Com";
  $subject = "CostaRicaReps activation of your account";
  $cuerpo = 'Hello '. $firstname .', Welcome to Costa Rica Reps,'."\n \n".'Thank you for register with us, to activate your account please click the following link:'."\n".$actLink."\n \n".'Or copy the following link into the address bar of your web browser: '."\n".$actLink."\n \n".'Kind Regards';
  $headers = "From:" . $from;
  mail($email,$subject,$cuerpo, $headers);
  $respuesta = "Reginsertado";
}
echo ($respuesta);
?>
