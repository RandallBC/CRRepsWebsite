<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <title>Costa Rica Reps Activation Page</title>
</head>

<style media="screen">

h2{
  text-align: center;
  padding: 20px;
  font: 26px normal Candara;
  color: #9C1B2D;
}

.activation {
  margin: 0 auto;
  height: 150px;
  width: 600px;
  border: 1px solid #000;
  padding: 20px;
  font: 18px normal Candara;
  color: #65652b;
  vertical-align:middle;
  text-align: center;
}

.gomainD {
  margin: 0 auto;
  height: 50px;
  width: 600px;
  display:table-cell;
  vertical-align:middle;
  text-align: center;
}

a.gomain {
  text-align: center;
  text-decoration: none;
  color: #DB5A0A;
  font: 20px bold Candara;
}

a.gomain:hover {
  color: #9C1B2D;
}

</style>

<body>
  <h2>Costa Rica Reps Register Activation</h2>
  <div class="activation">
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

    $correodecode = base64_decode($_GET['code']);
    $newflag = "";

    $dataEmailNews = $database->select('member_auth', [
      'email',
      'flag'
    ], [
      'email' => $correodecode
    ]);

    foreach ($dataEmailNews as $data) {
      $existe = $data["email"];
      $flag = $data["flag"];
    }

    if ($existe == $correodecode ){

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

      $actualizar = $database->update("member_auth", [
        "flag" => $newflagdecimal,
      ], [
        "email" => $correodecode
      ]);

      if ($actualizar->rowCount() >= 1) { echo ("<br>Thanks for registering your email " .  $correodecode . ", the process has been successfully completed."); }
      else { echo "<br>The Activation of this Email has been already made";}
    }  //fin del if
    else {echo "<br>This email is not registered";}
    ?>
    <br>
    <div class="gomainD">
      <a class="gomain" href="index.php">Go to Costa Rica Reps Main Page</a>
    </div>
  </div>
</body>
</html>
