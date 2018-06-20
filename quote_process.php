<?php
ini_set ('error_reporting', E_PARSE);
require_once("conexion.php");

session_start();
if(isset($_SESSION['email'])) {
 $correo_usuario = $_SESSION['email'];

 $sqlidusuario = mysql_query("SELECT id FROM crreps_tourreps.member_auth WHERE email='$correo_usuario'");
 $rowidusuario = mysql_fetch_array($sqlidusuario);
 $idmiembro = $rowidusuario['id'];

 ?>

 <style>
  #datoscompletos {
   padding-left: 75px;
   overflow-y: scroll;
   height: 740px;
   border: 1px solid #fef1ec;
   width: 900px;
  }

  #tabladatoscompletos {
    margin: 3px;
  }

 #izkierdos {
  padding: 3px;
  font: bold 16px Candara;
  text-align: right;
  color: #DB5A0A;
  vertical-align:top;
  border-bottom: 1px solid #c0c0c0;
  border-right: 2px solid #c0c0c0;
  width: 75px;

 }

  #derechos {
   padding: 3px;
   font: normal 16px Candara;
   text-align: left;
   vertical-align:top;
   color: #7C00A3;
   border-bottom: 1px solid #c0c0c0;
  }


 </style>


<h2 style="padding: 20px; font: Normal 20px Candara; color: #9C1B2D;">Summary RAQ from User: <b> <?php echo $correo_usuario; ?></b> </h2>
 <?php
 /*  aki empieza el codigo de insercion  a la BD   */


 /*       primera pestaña       */

 $contacuartos = 0;

 $tripname = $_POST['nametrip'];
 $arrival = $_POST['datepicker1'];
 $departure = $_POST['datepicker2'];
 $entrypnt = $_POST['entryPnt'];
 $deparpnt = $_POST['departurePnt'];
 $flexdates = $_POST['flexDate'];
 $disabilities = $_POST['disables'];
 $ss = $_POST['cuartoarray'];
 $tok = explode(',',$ss);
 $acomodation = $_POST['loacomo'];
 $focustrip = $_POST['tripFocus'];
 $focustripother = $_POST['tripFocusO'];
 $areasotther = $_POST['areasothertext'];
 $activityother = $_POST['activitiesothertext'];

 $coments = $_POST['comment'];

 /*___________________________________________Inicio Quote member flag__________________________________________*/

 if (isset($_POST['areasother'])) {$otherareaflag = 1;} else {$otherareaflag = 0;}
 if (isset($_POST['activitiesother'])) {$otheractivityflag = 1;} else {$otheractivityflag = 0;}
$flagparaquotemember = bindec("1" . $otheractivityflag . $otherareaflag);

 /*___________________________________________FInal Quote member flag__________________________________________*/

?>
 <div id="datoscompletos">
<table border="0" id="tabladatoscompletos">
<?php

 echo "<tr><td id='izkierdos'>Trip name</td><td id='derechos'>" . $tripname."</td></tr>";
 echo "<tr><td id='izkierdos'>Arrival Date</td><td id='derechos'>" . $arrival."</td></tr>";
 echo "<tr><td id='izkierdos'>Departure Date</td><td id='derechos'>" . $departure."</td></tr>";


$arrivalname = mysql_query("select name from country_gateway where id = '$entrypnt'");
$row = mysql_fetch_array($arrivalname);
$arrivalnameout = $row['name'];
 echo "<tr><td id='izkierdos'>Entry Point</td><td id='derechos'>" . $arrivalnameout."</td></tr>";

$departurename = mysql_query("SELECT name FROM country_gateway WHERE id='$deparpnt'");
$row = mysql_fetch_array($departurename);
$departurenameout = $row['name'];
 echo "<tr><td id='izkierdos'>Departure Point</td><td id='derechos'>" . $departurenameout."</td></tr>";


if ($flexdates == 0) {$flexdatesdata = "No"; $flagquote = bindec(0);} else {$flexdatesdata = "Yes"; $flagquote = bindec(1);}

 echo "<tr><td id='izkierdos'>Dates Flexible</td><td id='derechos'>" . $flexdatesdata."</td></tr>";

 echo "<tr><td id='izkierdos'>People with Walking Disabilities</td><td id='derechos'>" . $disabilities."</td></tr>";

echo "<tr><td id='izkierdos'>Rooms Required</td><td id='derechos'>" ;

?><table border="0"><tr><?php
for ($i = 0; $i < count($tok); $i++) {
       $variable = $tok[$i];

           $adultainsert = substr($variable,0,1);
           $ninosainsert = substr($variable,1,1);
           $edadesainsert = substr($variable,2);


 $contacuartos = $i+1;

         echo "<td style='padding: 5px; border-right: 1px solid #404040;'><b>Room " . $contacuartos . " </b><br> Adults: " . $adultainsert  . "<br> Kids: " . $ninosainsert . "<br> Ages: " . $edadesainsert . "</td>";

        }
   ?></tr> </table><?php

echo "</td></tr>";

 switch ($acomodation) {
  case 1:
   $acomodationname = "Standard (up to $125/room/night)";
   break;
  case 2:
   $acomodationname = "Superior (up to $225/room/night)";
   break;
  case 3:
   $acomodationname = "Deluxe (up to $375/room/night)";
   break;
  case 4:
   $acomodationname = "Luxury (over $375/room/night)";
   break;
  case 5:
   $acomodationname = "Jungle Lodges ($100-150/room/night)";
   break;
 }
 echo "<tr><td id='izkierdos'>Acomodation</td><td id='derechos'>" . $acomodationname ."</td></tr>";



 if ($focustrip == 0)
 {
  $focusnameout = "Focus Trip from User: " . $focustripother;
  echo "<tr><td id='izkierdos'>Focus Trip</td><td id='derechos'>" . $focusnameout."</td></tr>";
  $focustrip = 'NULL';
 }
 else {
 $focusname = mysql_query("select name from sales_focus where id = '$focustrip'");
 $row = mysql_fetch_array($focusname);
 $focusnameout = $row['name'];
  echo "<tr><td id='izkierdos'>Focus Trip</td><td id='derechos'>" . $focusnameout."</td></tr>";
 }

 /*___________________________________________________________________    Inicio insercion a Quote   _____________________________*/

 $insertquote = "INSERT INTO crreps_tourreps.quote (id, staff__id, name, datetime_created, date_start, date_end, pax_min, pax_max, count_foc, currency__id, status, flag)
VALUES ('','1','Request From Member','','$arrival','$departure','','','','USD','','$flagquote')";
 $triggerquote = mysql_query($insertquote);
 if (!$triggerquote) { $insercionquote = 0; die('Error: ' . mysql_error()); } else { $insercionquote = 1; }

 /*___________________________________________________________________   Fin insercion a Quote   _____________________________*/


 /*___________________________________________________________________    Inicio insercion a Quote Member   _____________________________*/

 if ($focustripother == "Tell Us Your Focus Trip...") {$otherfocustrip = "NULL";} else {$otherfocustrip = $focustripother;}

 if ($activityother == "Please tell us your activity..."){ $otheractivityquotemember = "NULL"; } else {$otheractivityquotemember = $activityother;}

 if ($areasotther == "Please tell us your place to visit..." ) { $otherareaquotemember = "NULL"; } else {$otherareaquotemember = $areasotther;}

 $rsql = mysql_query("SELECT MAX(id) AS id FROM quote");
 if ($rowid = mysql_fetch_row($rsql)) {
  $ultimoidquote = trim($rowid[0]);
 }

  $insertquotemember = "INSERT INTO crreps_tourreps.quote_member (
id,
member_auth__id,
trip_name,
flag,
country_gateway__id1,
country_gateway__id2,
count_disability,
lodging_level,
sales_focus__id,
sales_focus_other,
sales_area_other,
sales_activity_other,
sales_transfer_other)
VALUES (
$ultimoidquote,
$idmiembro,
'$tripname',
$flagparaquotemember,
$entrypnt,
$deparpnt,
$disabilities,
$acomodation,
$focustrip,
'$otherfocustrip',
'$otherareaquotemember',
'$otheractivityquotemember',
'$coments')";



 $triggerquotemember = mysql_query($insertquotemember);
 if (!$triggerquotemember) { $insercionquotemember = 0; die('Error: ' . mysql_error()); } else { $insercionquotemember = 1; }

 /*___________________________________________________________________    Fin insercion a Quote Member   _____________________________*/

 /*_______________________________________________________________ inicio insercion de cuartos __________________________________________*/

 for ($i = 0; $i < count($tok); $i++) {
  $variable = $tok[$i];

  $adultainsert = substr($variable, 0, 1);
  $ninosainsert = substr($variable, 1, 1);
  $edadesainsert = substr($variable, 2);

  $contacuartos = $i + 1;

  if ($edadesainsert == 0) {
   $edadesainsert = "NULL";
  }

  $insertroom = "INSERT INTO crreps_tourreps.quote_member_rooming (quote_member__id, room_id, count_adult, count_child, note) VALUES ('$ultimoidquote','$contacuartos','$adultainsert','$ninosainsert','$edadesainsert')";

  $triggerrooms = mysql_query($insertroom);

  if (!$triggerrooms) {
   $insercionrooms = 0;
   die('Error: ' . mysql_error());
  } else {
   $insercionrooms = 1;
  }

 }

 /*_______________________________________________________________ fin insercion de cuartos __________________________________________*/

 /*...................................................................................................................segunda pestaña*/


   $contareas = "SELECT * FROM sales_area";  // sentencia sql
$result = mysql_query($contareas);
$numero = mysql_num_rows($result); // obtenemos el número de filas"


 echo "<tr><td id='izkierdos'>Selected Areas</td><td id='derechos'>";
 for ($k=0;$k<=($numero);$k++){

    if (isset($_POST["area" . $k])) {
     $areaselect = mysql_query("select name from sales_area where id = '$k'");
     $row = mysql_fetch_array($areaselect);
     $areaout = $row['name'];
     echo " - " . $areaout . "<br>";


     /*__________________________________________________________________inicio insercion Areas_____________________________________________*/
     $insertarea = "INSERT INTO crreps_tourreps.quote_member__sales_area (quote_member__id, sales_area__id) VALUES ('$ultimoidquote','$k')";
     $triggerarea = mysql_query($insertarea);

     if (!$triggerarea) {
      $insercionareas = 0;
      die('Error: ' . mysql_error());
     } else {
      $insercionareas = 1;
     }
     /*__________________________________________________________________Fin insercion Areas_____________________________________________*/

    }// fin if
     } //fin for

 if (isset($_POST['areasother'])) {
  if ($areasotther != "Please tell us your place to visit..."){
  echo "Plus user wants to visit: " . $areasotther;
  }
 }

 echo "</td></tr>";

   /*...................................................................................................................tercera pestaña*/

 $contactivities = "SELECT * FROM sales_activity";  // sentencia sql
 $result2 = mysql_query($contactivities);
 $acties = mysql_num_rows($result2); // obtenemos el número de filas"


 echo "<tr><td id='izkierdos'>Selected Activities</td><td id='derechos'>";
 for ($r=0;$r<=($acties);$r++){

  if (isset($_POST["activ" . $r])) {
   $actselect = mysql_query("select name from sales_activity where id = '$r'");
   $rowacties = mysql_fetch_array($actselect);
   $actout = $rowacties['name'];
   echo " - " . $actout . "<br>";

   /*_________________________________________________________________Inicio Insercion Activities______________________________________________*/

   $insertactivity = "INSERT INTO crreps_tourreps.quote_member__sales_activity (quote_member__id, sales_activity__id) VALUES ('$ultimoidquote','$r')";

   $triggeractivity = mysql_query($insertactivity);

   if (!$triggeractivity) {
    $insercionactivity = 0;
    die('Error: ' . mysql_error());
   } else {
    $insercionactivity = 1;
   }

   /*_________________________________________________________________Fin Insercion Activities______________________________________________*/

     }// fin if
 } //fin for

 if (isset($_POST['activitiesother'])) {
  if ($activityother != "Please tell us your activity..."){
   echo "Plus user wants to do: " . $activityother;
  }
 }

 echo "</td></tr>";

   /*...................................................................................................................cuarta pestaña...*/

 $conta_ga = "SELECT * FROM sales_transfer";  // sentencia sql
 $result3 = mysql_query($conta_ga);
 $gettiar = mysql_num_rows($result3); // obtenemos el número de filas"


 echo "<tr><td id='izkierdos'>Preferred Transportation</td><td id='derechos'>";
 for ($f=0;$f<=($gettiar);$f++){

  if (isset($_POST["ga" . $f])) {
   $ga_select = mysql_query("select name from sales_transfer where id = '$f'");
   $row_ga = mysql_fetch_array($ga_select);
   $ga_out = $row_ga['name'];
   echo " - " . $ga_out . "<br>";

   /*_________________________________________________________________Inicio Insercion Ground Transfer______________________________________________*/

   $insertgroundtransfer = "INSERT INTO crreps_tourreps.quote_member__sales_transfer (quote_member__id, sales_transfer__id) VALUES ('$ultimoidquote','$f')";

   $triggergroundtransfer = mysql_query($insertgroundtransfer);

   if (!$triggergroundtransfer) {
    $inserciongroundtransfer = 0;
    die('Error: ' . mysql_error());
   } else {
    $inserciongroundtransfer = 1;
   }

   /*_________________________________________________________________Fin Insercion Ground Transfer______________________________________________*/

  }// fin if
 } //fin for
  echo "</td></tr>";
 echo "<tr><td id='izkierdos'>Additional Comments</td><td id='derechos'>";
 if ( $coments != "") {echo $coments;}
 else {echo "None.";}

 echo "</td></tr>";
   /*...................................................................................................................fin de pestañas...*/
?>
</table>
 </div>
<?php
 /*  aki termina el codigo de insercion  a la BD  */

} //fin del if de session

else { echo "<script>alert('There is no session started.'); document.location.href='index.php'; </script>";}
?>
