<?php

ini_set ('error_reporting', E_PARSE);
require_once("conexionlocal.php");

$sql = "select * from member_auth";

$result = mysql_query($sql);
if (mysql_num_rows($result) > 0)
    {

        $registros = mysql_num_rows($result);

        echo "<table border='5px'><tr><th>id</th><th>name</th><th>email</th><th>password</th><th>newsletter</th>";
        while ($row = mysql_fetch_array($result))
        {
            echo "<tr><td>".utf8_encode(ucwords(($row['id'])."</td><td>".utf8_encode(ucwords(($row['name'])))."</td><td>".utf8_encode(ucwords(($row['email'])))."</td><td>".utf8_encode(ucwords(($row['password'])))."</td><td>".utf8_encode(ucwords(($row['newsletter'])))."</td></tr>"    ));

        } //end while
echo "</table>";
    }//end if


    else
    {
        echo "<script language='javascript'>";
        echo "alert('No hay registros.');";
        /*echo "document.location.href='index.php';";*/
        echo "</script>";
    }

    mysql_close($link);

    ?>



