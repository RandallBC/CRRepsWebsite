<?php

$DB_Host = "localhost";
$db_user = "crreps_repsadmin";
$db_pass = "1qw23er4";
$db_name = "crreps_tourreps";


$link = mysql_pconnect ($DB_Host, $db_user, $db_pass) or die ( "Can't Connect to Server");
mysql_select_db ($db_name) or die ( "Can't Select Database");

?>
