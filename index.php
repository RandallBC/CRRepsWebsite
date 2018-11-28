<?php ob_start(); ?>
<div class="post" id="derechaConten">

  <script type="text/javascript">

  $(document).ready(function(){

    $('#submite').click(function(){
      $.confirm({
        title: 'Question',
        type: 'green',
        useBootstrap: false,
        content: 'Do you want to become a registered user too?',
        buttons: {

          Yes: {
            btnClass: 'btn-green',
            action: function(){
              showModal('register');
            }
          },
          No: {
            btnClass: 'btn-green',
            action: function(){
              showModal('newsletter');
            }
          }
        }
      });
    });

  });

  </script>

  <link href="css/dropdown/dropdown.css" media="screen" rel="stylesheet" type="text/css" />
  <link href="css/dropdown/style.css" media="screen" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="css/jquery-confirm.min.css">
  <script type="text/javascript" src="js/jquery-confirm.min.js"></script>

  <div id="izkierdo"></div>

  <div id="principal">
    <div id="abajo" style="margin: 0px auto;">
      <iframe src="carrusel/carrusel.php" width="1020" height="220px" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" >Content not supported</iframe>
    </div>
  </div>
</div>

<?php
$paginacontenido = ob_get_contents();
ob_end_clean();

require_once 'plantilla.php';
?>
