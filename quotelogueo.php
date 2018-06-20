<?php
ob_start();
?>

    <html>
<head>

    <script type="text/javascript">

        function loginquote(){
            $('#popup').slideDown('slow');
             $('.popup-overlay').slideDown('slow');
             $('.popup-overlay').height($(window).height());
             return false;
        }

    </script>

</head>
<body onload="loginquote()">


</body>
</html>

<?php
$paginacontenido = ob_get_contents();
ob_end_clean();

require_once 'plantilla.php';
?>