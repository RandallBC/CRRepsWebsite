<?php
ini_set ('error_reporting', E_PARSE);
?>

<title>Costa Rica Reps Tour Development &amp; Destination Management</title>
<meta content="ALL" name="ROBOTS" />
<meta content="&copy; 2018 Costa Rica Reps DMC S.A. All Rights Reserved." name="copyright" />
<link rel="shortcut icon" href="images/favicon.ico">
<link href="css/dropdown/dropdown.css" media="screen" rel="stylesheet" type="text/css" />
<link href="css/dropdown/style.css" media="screen" rel="stylesheet" type="text/css" />
<link href="css/general.css" media="screen" rel="stylesheet" type="text/css" />
<link href="css/sitemapstyle.css" media="screen" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery.jfontsize-1.0.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>

<!-- The Register Modal -->
<div id="register" class="modal">
  <!-- Modal content -->
  <div class="modal-content-register">
    <img class="close_btn" onclick="closeModal('register')" src="images/close.png">
    <h2 class="tit">Register with Us</h2>
    <iframe style="margin: 0 auto;" src="registerForm.php" width="280" height="400" scrolling="no" marginwidth="0px" marginheight="0px" frameborder="0" >Content not Supported</iframe>
  </div>
</div>

<!-- The LogIn Modal -->
<div id="login" class="modal">
  <!-- Modal content -->
  <div class="modal-content-login">
    <img class="close_btn" onclick="closeModal('login')" src="images/close.png">
    <h2 class="tit">Login</h2>
    <iframe style="margin: 0 auto;" src="loginForm.php" width="240" height="220" scrolling="no" marginwidth="0px" marginheight="0px" frameborder="0" >Content not Supported</iframe>
  </div>
</div>


<script type="text/javascript">
$(document).ready(function(){

  $('#submita').click(function(){
    var abuscar = $("#busqueda").val();
    var datastring = "busca="+abuscar;
    if (abuscar != "") {
      $.ajax({
        url: "busqueda.php",
        type: "POST",
        data: datastring,
        success: function(data){
          console.log(data);
          if (data == "") {
            $.alert({
              title: 'Error',
              type: 'red',
              columnClass: 'small',
              content: 'Nothing found for <b>'+abuscar+'</b>',
              useBootstrap: false,
            });
          } else {
            $("#izkierdo").html("<br/><br/>&nbsp;&nbsp;&nbsp;Results for: <b>"+abuscar+"</b><br/><br/>"+ data);
          }
        }
      });
    }
    else {
      $.alert({
        title: 'Information',
        type: 'green',
        columnClass: 'small',
        content: 'Please type something to search...',
        useBootstrap: false,
      });
    }
  });

});
</script>

<div id="lenguage_icons">
  <div id="pageHeader">

    <!-- dropdown menu starts-->
    <table class="tabhead" border="0px" height="130px" width="1020px" >
      <tr>
        <td rowspan="2" style="align: right; width: 325px; height: auto"><a href="index.php"><img src="images/logocrreps.png" /></a></td>
        <td style="float: right; width: auto;">
          <ul>

            <?php
            session_start();
            if(isset($_SESSION['email'])) {
              $vari = 1;
              $correo = $_SESSION['email'];
            }
            if ($vari == 1) {
              ?>
              <li class="lisitemapa">
                <table>
                  <tr style="width: 300px;">
                    <td><?php echo "<tab>" . $correo . " "; ?></td>
                      <td><a href="sessionclose.php" class="admini2">LogOut</a></td>
                    </tr>
                  </table>
                </li>
                <?php
              }
              else {
                ?>
                <li class="lisitemapa"><a href="#" onclick="showModal('login');" class="admini">LogIn</a></li>
                <?php
              }
              ?>
            </ul>
          </td>
          <td style="float: right; width: auto;">
            <ul>
              <li class="lisitemapa" onclick="loadcontents('sitemap');"><a href="#" class="asitemapa">Site Map</a></li>
            </ul>
          </td>
          <td style="padding: 0px 5px;"><a href="http://www.costaricareps.com/es"><img src="images/icon_Spain.gif"></a></td>
          <td style="width: auto; height: 25px;"  >
            <div id="busqueda-form">
              <input type="text" id="busqueda" name="busqueda" placeholder="  Search..." required="required"/>
              <input type="image" src="images/lupa.png" id="submita" />
            </div>

          </td>
        </tr>
        <tr>

          <td colspan="4" id="techo">

            <div class="menuheadDiv">
              <?php include("menuhead.php")?>
            </div>
          </td>
        </tr>

      </table>

    </div>
  </div>
