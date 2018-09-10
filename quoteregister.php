<?php
ob_start();
?>

<html>
<head>

<script type="text/javascript">

        function registerquote(){
            $('#popup').slideUp('slow');
            $('.popup-overlay').slideUp('slow');
            $('#popup4').slideDown('slow');
            $('.popup4-overlay').slideDown('slow');
            $('.popup4-overlay').height($(window).height());
            return false;
        }

</script>
</head>
<body onload="registerquote()">


</body>
</html>

<?php
$paginacontenido = ob_get_contents();
ob_end_clean();

require_once 'plantilla.php';
?>

