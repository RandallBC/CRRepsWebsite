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
$response = "";

$dataEmail = $database->select('member_auth', [
  'email'
], [
  'email' => $email
]);

$dataEmailDec = json_decode(json_encode($dataEmail));

if (($dataEmailDec[0]->email) == $email){

  $password = generaPass();
  $passdecode = base64_encode($password);

  $actualizar = $database->update("member_auth", [
    "password" => $passdecode,
  ], [
    "email" => $email
  ]);

  if ($actualizar->rowCount() >= 1) {
    $cuerpo = 'Hello, we have received a request to reset your password on our website, which has been changed.

    Here is your new password:

    Email: ' .$email . '
    New Password: ' . $password;

    $from = "CostaRicaReps.Com";
    $headers = "From:" . $from;

    mail($email,"CostaRicaReps Password Reset",$cuerpo,$headers);
    $response = "successForgot";

  } else {
    $response =  "ErrorupdatingForgot";
  }
}
else{
  $response = "notRegisteredForgot";
}

echo $response;
?>
