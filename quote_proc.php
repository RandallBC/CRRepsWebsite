<?php
session_start();
header('Content-Type: text/html; charset=UTF-8');
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

$emailQuote = $_SESSION['email'] . ", webrequest@costaricareps.com";
$dataID = $database->select('member_auth', ['id'], ['email' => $emailQuote]);
foreach ($dataID as $data) { $userID = $data["id"]; }

$tripname = $_POST['Txt_tripName'];
$arrival = $_POST['Txt_tripArrival'];
$departure = $_POST['Txt_tripDeparture'];
$entrypnt = $_POST['Txt_entryPoint'];
$deparpnt = $_POST['Txt_departurePoint'];
$flexdates = $_POST['Txt_flexDate'];
$disabilities = $_POST['Txt_disables'];
$acomodation = $_POST['Txt_tripAccomodation'];
$focustrip = $_POST['Txt_tripFocus'];

$qDest = $_POST['a_o_i'];
$qAct_Int = $_POST['ac_o_i'];
$gAround = $_POST['gAroundVal'];

/*_____________________Inicio quote_____________________*/

$insQuoteDB = $database->insert("quote", [
  "staff__id" => '2',
  "name" => 'Request From Member',
  "date_start" => $arrival,
  "date_end" => $departure,
  "currency__id" => '2',
  "flag" => $flexdates
]);

$insQuote = ($insQuoteDB->rowCount() >= 1) ? 1 : 0;

/*_____________________Fin quote_____________________*/

/*_____________________Inicio quote_member_____________________*/

$maxID = $database->max("quote", "id");

if (is_numeric($focustrip)) {
  $otherfocustrip = "";
} else {
  $otherfocustrip = $focustrip;
  $focustrip = NULL;
}

$Other1 = explode('¬',$qDest);
$Other2 = explode('¬',$qAct_Int);
$Other3 = explode('¬',$gAround);

$OtherArea = ($Other1[1] != "") ? $Other1[1] : "";
$OtherAct = ($Other2[1] != "") ? $Other2[1] : "";
$Comment = ($Other3[1] != "") ? $Other3[1] : "";

$OArea = ($Other1[1] != "") ? 1 : 0;
$OAct = ($Other2[1] != "") ? 1 : 0;
$OTrans = ($Other3[1] != "") ? 1 : 0;
$flagQuoteMem = bindec($OArea . $OAct . $OTrans);

$insQuoteMemberDB = $database->insert("quote_member", [
  "id" => $maxID,
  "member_auth__id" => $userID,
  "trip_name" => $tripname,
  "flag" => $flagQuoteMem,
  "country_gateway__id1" => $entrypnt,
  "country_gateway__id2" => $deparpnt,
  "count_disability" => $disabilities,
  "lodging_level" => $acomodation,
  "sales_focus__id" => $focustrip,
  "sales_focus_other" => $otherfocustrip,
  "sales_area_other" => $OtherArea,
  "sales_activity_other" => $OtherAct,
  "sales_transfer_other" => $Comment
]);
$insQuoteMember = ($insQuoteMemberDB->rowCount() >= 1) ? 1 : 0;
//var_dump( $database->error() );

/*_____________________Fin Quote_member_____________________*/

/*_____________________Inicio insert Rooms_____________________*/
$ss = explode('¬',$_POST['Txt_tripRooms']);
for ($i=0; $i < count($ss); $i++) {
  if ($ss[$i] != "") {
    $ss2 = explode('.',$ss[$i]);
    $edades = ($ss2[1] != 0) ? $ss2[2] : NULL;
    $insQuoteRoomsDB = $database->insert("quote_member_rooming", [
      "quote_member__id" => $maxID,
      "room_id" => $i+1,
      "count_adult" => $ss2[0],
      "count_child" => $ss2[1],
      "note" => $edades
    ]);
    $insQuoteRooms = ($insQuoteRoomsDB->rowCount() >= 1) ? 1 : 0;
  }
}
/*_____________________Fin insert Rooms_____________________*/

/*_____________________Inicio insert Areas_____________________*/

$aDest = explode('-',$Other1[0]);
for ($i=0; $i < count($aDest); $i++) {
  if ($aDest[$i] != "") {
    $insQuoteAreasDB = $database->insert("quote_member__sales_area", [
      "quote_member__id" => $maxID,
      "sales_area__id" => $aDest[$i]
    ]);
    $insQuoteAreas = ($insQuoteAreasDB->rowCount() >= 1) ? 1 : 0;
  }
}
/*_____________________Fin insert Areas_____________________*/

/*_____________________Inicio insert Activities_____________________*/

$qAct = explode('-',$Other2[0]);
for ($i=0; $i < count($qAct); $i++) {
  if ($qAct[$i] != "") {
    $insQuoteActivitiesDB = $database->insert("quote_member__sales_activity", [
      "quote_member__id" => $maxID,
      "sales_activity__id" => $qAct[$i]
    ]);
    $insQuoteActivities = ($insQuoteActivitiesDB->rowCount() >= 1) ? 1 : 0;
  }
}
/*_____________________Fin insert Activities_____________________*/

/*_____________________Inicio insert Sales Transfer_____________________*/

$sTrans = explode('-',$Other3[0]);
for ($i=0; $i < count($sTrans); $i++) {
  if ($sTrans[$i] != "") {
    $insQuoteTransferDB = $database->insert("quote_member__sales_transfer", [
      "quote_member__id" => $maxID,
      "sales_transfer__id" => $sTrans[$i]
    ]);
    $insQuoteTransfer = ($insQuoteTransferDB->rowCount() >= 1) ? 1 : 0;
  }
}
/*_____________________Fin insert Sales Transfer_____________________*/

$results = $insQuote.$insQuoteMember.$insQuoteRooms.$insQuoteAreas.$insQuoteActivities.$insQuoteTransfer;

if ($results == 111111) {

  $sumSQuote = str_replace("<br>", ' - ', $_POST['summarySend']);

  $cuerpo = "Hello, this is the summary of your today's request:

  ".$sumSQuote . "

  We will contact you as soon as posible,
  Thank you so much.

  CostaRicaReps - www.costaricareps.com";

  $from = "CostaRicaReps.Com";
  $headers = "From:" . $from;
  mail($emailQuote,"CostaRicaReps Request a Quote Summary",$cuerpo,$headers);
  echo ($results);
}

?>
