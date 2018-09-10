<?php
ini_set ('error_reporting', E_PARSE);
?>

<link href="css/dropdown/dropdown.css" media="screen" rel="stylesheet" type="text/css" />
<link href="css/dropdown/style.css" media="screen" rel="stylesheet" type="text/css" />
<!--link href="css/general.css" media="screen" rel="stylesheet" type="text/css" /-->
<script type="text/javascript" src="js/jquery.js"></script>

<style>
    #alerta {
        font: normal 24px Candara !important;
        color: #002851;
        text-shadow: #0D0D0D;
        line-height: 100px;
        text-align: center;
    }

    #marco2{
        width: 1030px;
        height: 640px;
        background: #FFFFFF;
    }

    #linki {
        text-decoration: none;
        color: #585919;
        border: 1px solid #585919;
        background: #f0ffd0;
        padding: 3px;
        border-radius: 5px;
    }

    #linki:hover {
        text-decoration: none;
        color: #9C1B2D;
        border: 1px solid #9C1B2D;
        background: #f0ffd0;
        padding: 3px;
        border-radius: 5px;
    }


</style>

<?php
ini_set ('error_reporting', E_PARSE);
session_start();

if(isset($_SESSION['email'])) {
?>
<iframe id="quote" name="quote" src="requesta.php" width="1024px" height="640px" marginwidth="0" marginheight="0" frameborder="1" scrolling="yes" >Your web browser does not support this content.</iframe>
<?php
        }

    else {
        ?>
        <div id="marco2">
           <br><h2 id="alerta">Hello, to request a quote please <a id="linki" href="quotelogueo.php" target="_parent" >LogIn</a> or <a id="linki" href="quoteregister.php" target="_parent" >Register</a> first.</h2>
        <br/><img style="display:block;margin:0 auto 0 auto;" src="images/lock.png">

</div>
<?php } ?>
