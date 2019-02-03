<?php

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

$firstname = $_POST['first_name'];
$lastname = $_POST['last_name'];
$email = $_POST['email'];
$country = $_POST['country'];
$hear = $_POST['info_source'];


$internet = 0; $magazine = 0; $friend = 0; $newspaper = 0; $travelshow = 0;
$fecha = date('Y-m-d H:i:s');
$flag = bindec(110);

for ($i=0;$i<count($hear);$i++)
{
  if ($hear[$i] == "1" ){$internet = 1;}
  if ($hear[$i] == "2" ){$magazine = 1;}
  if ($hear[$i] == "3" ){$friend = 1;}
  if ($hear[$i] == "4" ){$newspaper = 1;}
  if ($hear[$i] == "5" ){$travelshow = 1;}
}

$info_source = bindec($internet . $magazine . $friend . $newspaper . $travelshow);
$ip = GetIP();
$ipbd = ip2long($ip);

$datacountry = $database->select('country', [
  'name',
  'id'
], [
  'name' => $country
]);

$salDec = json_decode(json_encode($datacountry));
$dataencode = $salDec[0]->id;
$idpais = $dataencode != "" ? $dataencode : 0;

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
  $respuesta = "Newsexiste";
} else {
  $database->insert("member_auth", [
    "email" => $email,
    "first_name" => $firstname,
    "last_name" => $lastname,
    "country__id" => $idpais,
    "last_access" => $fecha,
    "last_ip" => $ipbd,
    "info_source" => $info_source,
    "flag" => $flag
  ]);
  $respuesta = "Newsinsertado";
}
echo ($respuesta);
?>
