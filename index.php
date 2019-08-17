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
  <link rel="stylesheet" type="text/css" href="css/menustyle.css" />
  <link rel="stylesheet" href="css/jquery-confirm.min.css">
  <script type="text/javascript" src="js/jquery-confirm.min.js"></script>

  <div id="izkierdo">
    <div class="izHome" >
      <h2>Welcome to Costa Rica Reps</h2>
      <p class="mainIndex">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br>
      </p>
    </div>
  </div>

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
