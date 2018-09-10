
<?php ob_start();
ini_set ('error_reporting', E_PARSE); 

echo "<h2>Live Chat</h2>";?>

<!--Chat button will appear here-->
<div id="MyLiveChatContainer"></div>
<!--Add the following script at the bottom of the web page (before </body></html>)-->
<script type="text/javascript" defer="defer" src="https://mylivechat.com/chatbox.aspx?hccid=12329520"></script>


<?php
$paginacontenido = ob_get_contents();
    ob_end_clean();

 require_once 'plantilla.php';
 ?>
     
    