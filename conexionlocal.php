<?php
/**
 ** datos de conexion
 **/

$DB_Host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "crreps_tourreps";

$link = mysql_pconnect ($DB_Host, $db_user, $db_pass) or die ( "Can't Connect to Server");
mysql_select_db ($db_name) or die ( "Can't Select Database");

?>
