<?php
//ini_set ('error_reporting', E_PARSE);
session_start();
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
    <img class="close_btn" id="close_btn" onclick="closeModal('register')" src="images/close.png">
    <h2 class="tit">Register with Us</h2>
    <iframe style="margin: 0 auto;" src="registerForm.php" width="350" height="500" scrolling="no" marginwidth="0px" marginheight="0px" frameborder="0" >Content not Supported</iframe>
  </div>
</div>

<!-- The LogIn Modal -->
<div id="login" class="modal">
  <!-- Modal content -->
  <div class="modal-content-login">
    <img class="close_btn" onclick="closeModal('login')" src="images/close.png">
    <h2 class="tit">Login</h2><br/>
    <table border="0"  class="tablalogeo">
      <tr><td width="20px"><img src="images/user.png"></td><td><input type="email" id="userLogin" name="UserLogin" style="width: 200px; border-radius: 3px;" value="" placeholder="E-mail" required="required"/></td></tr>
      <tr><td width="20px"><img src="images/pass.png"></td><td><input type="password" id="userPass" name="password" style=" width: 200px; border-radius: 3px;" value="" placeholder="Password" required="required"/></td></tr>
      <tr><td colspan="2"><input type="checkbox" checked="yes" name="rememberme" id="rememberme"><label for="rememberme" >Remember Me</label></td></tr>
      <tr><td colspan="2" style="padding: 10px;"><a href="#" class="regi" onclick="regLogin();">Register With Us</a><br/>
        <a href="#" class="regi" onclick="forgotPassword();" >Forgot Password</a>
      </td></tr>
      <tr><td colspan="2"><input class="botonlog" type="submit" value="Log In" id="loguearse" /></td></tr>
    </table>
  </div>
</div>

<!-- The LogIn Modal -->
<div id="changepass" class="modal">
  <!-- Modal content -->
  <div class="modal-content-changepass">
    <img class="close_btn" onclick="closeModal('changepass')" src="images/close.png">
    <h2 class="tit">Change Password</h2><br/>
    <table border="0px" class="tablachangePass">
      <tr><td style="text-align: right;"><?php echo($_SESSION['usernameLog'] . " " . $_SESSION['userlastnameLog']); ?></td><td style="padding:5px;"><?php echo($_SESSION['email']); ?></td></tr>
      <tr><td style="text-align: right;">Old Password</td><td style="padding:5px;"><input type="text" id="oldPass" style="width: 230px; border-radius: 3px; height: 25px;" value="" placeholder="Old" required="required"/></td></tr>
      <tr><td style="text-align: right;">New Password</td><td style="padding:5px;"><input type="password" id="newPass" style=" width: 230px; border-radius: 3px; height: 25px;" value="" placeholder="New" required="required"/></td></tr>
      <tr><td style="text-align: right;">Repeat Password</td><td style="padding:5px;"><input type="password" id="repeatPass" style=" width: 230px; border-radius: 3px; height: 25px;" value="" placeholder="Repeat" required="required"/></td></tr>
      <tr><td colspan="2"><input class="botonlog" type="submit" value="Change" id="changePassBut" /></td></tr>
    </table>
  </div>
</div>


<script type="text/javascript">
$(document).ready(function(){

  $('#closeSession').click(function(){
    $.ajax({
      url: "sessionclose.php",
      type: "POST",
      data: {action:"1"},
      success: function(data){
        switch (data) {
          case 'done':
          location.href = "index.php";
          break;
          case 'fail':
          $.alert({
            title: 'Error',
            type: 'red',
            columnClass: 'small',
            content: "Error on Login Out, please contact technical support",
            useBootstrap: false,
          });
          break;
        }
      }
    });
  });

  $('#submita').click(function(){
    var abuscar = $("#busqueda").val();
    var datastring = "busca="+abuscar;
    if (abuscar != "") {
      $.ajax({
        url: "busqueda.php",
        type: "POST",
        data: datastring,
        success: function(data){
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

  /*__________________________________________________________loguearse_______________________________________________________________*/

  $('#loguearse').click(function(){
    var logEmail = $("#userLogin").val();
    var logPass = $("#userPass").val();
    var logRem = $("#rememberme").prop('checked') ? 1 : 0;

    if ((logEmail != "") || (logPass != "")) {
      $.ajax({
        url: "login.php",
        type: "POST",
        data:{email:logEmail, password:logPass, rememberme:logRem},
        success: function(data){
          switch (data) {
            case 'Activated-SendIndex':
            location.href = "index.php";
            break;
            case 'emailNotActivated':
            $.alert({
              title: 'Error',
              type: 'red',
              columnClass: 'small',
              content: "The user is Registered but has not been activated yet, please check the activation email we've sent to " + logEmail + ", and please try again.",
              useBootstrap: false,
            });
            break;
            case 'emailNotRegistered':
            $.alert({
              title: 'Error',
              type: 'red',
              columnClass: 'small',
              content: "The email <b>" + logEmail + "</b> is not registered in Costa Rica Reps Or your password is wrong, please try again.",
              useBootstrap: false,
            });
            break;
          }
        }
      });
    }
    else {
      closeModal('login');
      $.alert({
        title: 'Warning',
        type: 'red',
        columnClass: 'small',
        content: 'Please complete Username and Password',
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
            $vari = 0;
            if(isset($_SESSION['email'])) {
              $vari = 1;
              $correo = $_SESSION['email'];
              $usernameLog = $_SESSION['usernameLog'] . " " . substr($_SESSION['userlastnameLog'],0,1).".";
            }
            if ($vari == 1) {
              ?>
              <li class="lisitemapa">
                <table border="0px">
                  <tr style="width: 300px;">
                    <td> <p class="userman"><?php echo "<tab>" . $usernameLog. "&nbsp;&nbsp;" ; ?></p></td>
                      <td style="padding-left:10px;"><li onclick="showModal('changepass');"><img src="images/iconos_topmenu/pass.png" title="Change Password"></li></td>
                      <td style="padding-left:10px;"><li id="closeSession"><img src="images/iconos_topmenu/logout.png" title="Logout"></li></td>
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
