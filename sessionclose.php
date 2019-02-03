<?php
session_start();
$action = $_POST['action'];
$happened = "fail";

if ($action == "1"){
  session_destroy();
  $happened = "done";
}
echo $happened;
?>
