<?php
ini_set ('error_reporting', E_PARSE);
require_once("conexionlocal.php");

$rsql = mysql_query("SELECT MAX(id) AS id FROM quote");
if ($rowid = mysql_fetch_row($rsql)) {
    $ultimoidquote = trim($rowid[0]);
}
echo "El ultimo id de quote es: " . $ultimoidquote;

?>