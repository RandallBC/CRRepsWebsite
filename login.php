<?php
session_start();
ini_set ('error_reporting', E_PARSE);
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

function GetIP(){
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

function poner_cookie(){
  setcookie("cookemail", $_POST['email'],time()+60*60*24*100,"/");
  setcookie("cookpass", $_POST['password'],time()+60*60*24*100,"/");
}

$email = $_POST['email'];
$password = base64_encode($_POST['password']);

if($_POST['rememberme'] == "1") { poner_cookie();}

$_SESSION['email'] = $email;

$dataEmailLogin = $database->select('member_auth', [
  'email',
  'first_name',
  'last_name',
  'password',
  'flag'
], [
  'email' => $email
]);

foreach ($dataEmailLogin as $data) {
  $correoexiste = $data["email"];
  $passexiste = $data["password"];
  $usernameLog = $data["first_name"];
  $userlastnameLog = $data["last_name"];
  $flag = decbin($data["flag"]);
}

$_SESSION['usernameLog'] = $usernameLog;
$_SESSION['userlastnameLog'] = $userlastnameLog;

$tamano = strlen($flag);

if (($correoexiste == $email ) and ($passexiste == $password)) {

  if($flag[$tamano-1] == 1){
    $fecha = date('Y-m-d H:i:s');
    $ip = GetIP();
    $ipbd = ip2long($ip);
    if(isset($_SESSION['email'])){
      $actualizar = $database->update("member_auth", [
        "last_access" => $fecha,
        "last_ip" => $ipbd,
      ], [
        "email" => $email
      ]);
      $updateVal = ($actualizar->rowCount() >= 1) ? "updateSuccess" : "updateFail";
      echo 'Activated-SendIndex';     //location.href = "index.php";
    }
  } else {
    echo "emailNotActivated";// ("The user is Registered but has not been activated yet, please check the activation email we sent to " . $email . ", and please try again.</center></h2>");
    session_destroy();
  }
} else {
  if ($correoexiste != $email ) { echo "emailNotRegistered"; }
  else if ($passexiste != $password){ echo "IncPassword"; }
  session_destroy();
}
?>
