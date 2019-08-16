<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);	
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

$PointsValues = "";
$TFocusValues = "";
$SalesAreas = "";
$WaterActivities = "";
$LandActivities = "";
$AerialActivities = "";
$TEconomy = "";
$TModerate = "";
$TDeluxe = "";

$ADPoints = $database->select('country_gateway', [ 'id', 'type', 'name'], ['country__id' => "1"]);
foreach ($ADPoints as $data) { $PointsValues = $PointsValues . ('<option value=' . utf8_encode($data["id"]) . ' name=' . utf8_encode($data["name"]) . '>' . utf8_encode($data["name"]) . '</option>'); }

$TFocus = $database->select('sales_focus', [ 'id', 'name']);
foreach ($TFocus as $data) { $TFocusValues = $TFocusValues . ('<option value=' . utf8_encode($data["id"]) . ' name='. utf8_encode($data["name"]) . '>' . utf8_encode($data["name"]) . '</option>'); }

$SAreas = $database->select('sales_area', [ 'id', 'name'], ['country__id' => "1", "ORDER" => "name"]);
foreach ($SAreas as $data) { $SalesAreas = $SalesAreas . ('<input type="checkbox" class="ckecksareas DA" id="'. utf8_encode($data["id"]) . '" value="'.utf8_encode($data["name"]).'"/>'.utf8_encode($data["name"]).'<br>'); }

$WAct = $database->select('sales_activity', [ 'id', 'name'], ['type' => "W", "ORDER" => "name"]);
foreach ($WAct as $data) { $WaterActivities = $WaterActivities . ('<input type="checkbox" class="ckecksareas SA" id="'. utf8_encode($data["id"]) .'" value="'.utf8_encode($data["name"]).'"/>'.utf8_encode($data["name"]).'<br>'); }
$LAct = $database->select('sales_activity', [ 'id', 'name'], ['type' => "L", "ORDER" => "name"]);
foreach ($LAct as $data) { $LandActivities = $LandActivities . ('<input type="checkbox" class="ckecksareas SA" id="'. utf8_encode($data["id"]) .'" value="'.utf8_encode($data["name"]).'"/>'.utf8_encode($data["name"]).'<br>'); }
$AAct = $database->select('sales_activity', [ 'id', 'name'], ['type' => "A", "ORDER" => "name"]);
foreach ($AAct as $data) { $AerialActivities = $AerialActivities . ('<input type="checkbox" class="ckecksareas SA" id="'. utf8_encode($data["id"]) .'" value="'.utf8_encode($data["name"]).'"/>'.utf8_encode($data["name"]).'<br>'); }

$TEco = $database->select('sales_transfer', [ 'id', 'name'], ['category' => "E", "ORDER" => "name"]);
foreach ($TEco as $data) { $TEconomy = $TEconomy . ('<input type="checkbox" class="ckecksareas GA" id="'. utf8_encode($data["id"]) .'" value="'.utf8_encode($data["name"]).'"/>'.utf8_encode($data["name"]).'<br>'); }
$TMod = $database->select('sales_transfer', [ 'id', 'name'], ['category' => "M", "ORDER" => "name"]);
foreach ($TMod as $data) { $TModerate = $TModerate . ('<input type="checkbox" class="ckecksareas GA" id="'. utf8_encode($data["id"]) .'" value="'.utf8_encode($data["name"]).'"/>'.utf8_encode($data["name"]).'<br>'); }
$TDel = $database->select('sales_transfer', [ 'id', 'name'], ['category' => "D", "ORDER" => "name"]);
foreach ($TDel as $data) { $TDeluxe = $TDeluxe . ('<input type="checkbox" class="ckecksareas GA" id="'. utf8_encode($data["id"]) .'" value="'.utf8_encode($data["name"]).'"/>'.utf8_encode($data["name"]).'<br>'); }
