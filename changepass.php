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

$email = $_POST['email'];
$old = $_POST['old'];
$new = $_POST['new'];

$dataEmailPass = $database->select('member_auth', [
  'password'
], [
  'email' => $email
]);

foreach ($dataEmailPass as $data) {
  $passDB = $data["password"];
}

if ($old == base64_decode($passDB)) {

  $actualizar = $database->update("member_auth", [
    "password" => base64_encode($new),
  ], [
    "email" => $email
  ]);
  $updateVal = ($actualizar->rowCount() >= 1) ? "PSucc" : "PFail";
  if ($updateVal == "PSucc") {
    $cuerpo = 'Hello, you have changed successfully your password on our website.

    Here is your new password:

    Email: ' .$email . '
    New Password: ' . $new . '

    Costa Rica Reps - '. date(" M Y");
    $headers = "From: CostaRicaReps.Com";
    mail($email,"CostaRicaReps Password Changed",$cuerpo,$headers);
  }
  echo $updateVal;
} else {
  echo "OPI"; //old password Incorrect
}

?>
