<?php
ini_set ('error_reporting', E_PARSE);
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
  <div class="modal-content-register">
    <img class="close_btn" id="close_btn" onclick="closeModal('register')" src="images/close.png">
    <h2 class="tit">Register with Us</h2>
    <iframe style="margin: 0 auto;" src="registerForm.php" width="350" height="500" scrolling="no" marginwidth="0px" marginheight="0px" frameborder="0" >Content not Supported</iframe>
  </div>
</div>

<!-- The LogIn Modal -->
<div id="login" class="modal">
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
  <div class="modal-content-changepass">
    <img class="close_btn" onclick="closeModal('changepass')" src="images/close.png">
    <h2 class="tit">Change Password</h2><br/>
    <table border="0px" class="tablachangePass">
      <tr><td style="text-align: right;"><?php echo($_SESSION['usernameLog'] . " " . $_SESSION['userlastnameLog']); ?></td><td style="padding:5px;"><?php echo($_SESSION['email']); ?></td></tr>
      <tr><td style="text-align: right;">Old Password*</td><td style="padding:5px;"><input type="text" id="oldPass" style="width: 200px; border-radius: 3px; height: 25px;" value="" placeholder="Old" required="required"/></td></tr>
      <tr><td style="text-align: right;">New Password*</td><td style="padding:5px;"><input type="password" id="newPass" style=" width: 200px; border-radius: 3px; height: 25px;" value="" placeholder="New" required="required"/></td></tr>
      <tr><td style="text-align: right;">Repeat Password*</td><td style="padding:5px;"><input type="password" id="repeatPass" style=" width: 200px; border-radius: 3px; height: 25px;" value="" placeholder="Repeat" required="required"/></td></tr>
      <tr><td colspan="2"><div id="war_chngPass"></div></td></tr>
      <tr><td colspan="2"><input class="botonlog" type="submit" value="Change" id="changePassBut" /></td></tr>
    </table>
  </div>
</div>

<script type="text/javascript">
$(document).ready(function(){

  $('#changePassBut').click(function(){
    var emailChngPass = "<?php echo($_SESSION['email']);?>";
    var oldPassword = $('#oldPass').val();
    var image = new Image();
    var src = 'images/proc.gif';
    image.src = src;
    $("#war_chngPass").html(image);
    if ( ($('#oldPass').val() != "") && ($('#newPass').val() != "") && ($('#repeatPass').val() != "") ) {
      if ($('#newPass').val() == $('#repeatPass').val()){
        var newPassword = $('#newPass').val();
        $.ajax({
          url: "changepass.php",
          type: "POST",
          data: {email:emailChngPass,old:oldPassword, new:newPassword},
          success: function(data){
            switch (data) {
              case 'PSucc':
              $("#war_chngPass").html("<p style='color: #65652b;'>Password Changed, Please Log In Again.</p>");
              document.getElementById("war_chngPass").style.display = "block";
              setTimeout(function(){ document.getElementById("war_chngPass").style.display = "none";}, 2000);
              setTimeout(function(){ closeModal('changepass');}, 2000);
              setTimeout(function(){ $("#closeSession").click();}, 2000);
              break;
              case 'PFail':
              $("#war_chngPass").html("<p style='color: #9c1b2d;'>Error Updating Password.</p>");
              document.getElementById("war_chngPass").style.display = "block";
              setTimeout(function(){ document.getElementById("war_chngPass").style.display = "none"; }, 2000);
              break;
              case 'OPI':
              $("#war_chngPass").html("<p style='color: #9c1b2d;'>Old Password Incorrect.</p>");
              document.getElementById("war_chngPass").style.display = "block";
              setTimeout(function(){ document.getElementById("war_chngPass").style.display = "none"; }, 2000);
              break;
            }
          }
        });
      } else {
        $("#war_chngPass").html("<p style='color: #9c1b2d;'>Passwords doesn't match.</p>");
        document.getElementById("war_chngPass").style.display = "block";
        setTimeout(function(){ document.getElementById("war_chngPass").style.display = "none"; }, 2000);
      }

    } else {
      $("#war_chngPass").html("<p style='color: #9c1b2d;'>Please complete all required fields.</p>");
      document.getElementById("war_chngPass").style.display = "block";
      setTimeout(function(){ document.getElementById("war_chngPass").style.display = "none";}, 2000);
    }
  });

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
    var regex = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    if ((logEmail != "") || (logPass != "")) {
      if (regex.test(logEmail) == false) {
        closeModal('login');
        $.alert({
          title: 'Error',
          type: 'red',
          columnClass: 'small',
          content: "Please enter a valid email.",
          useBootstrap: false,
        });
      } else {
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
              closeModal('login');
              $.alert({
                title: 'Error',
                type: 'red',
                columnClass: 'small',
                content: "The user is Registered but has not been activated yet,<br> please check the activation email we've sent to <b>" + logEmail + "</b>,<br> and please try again.",
                useBootstrap: false,
              });
              break;
              case 'emailNotRegistered':
              closeModal('login');
              $.alert({
                title: 'Error',
                type: 'red',
                columnClass: 'small',
                content: "The email <b>" + logEmail + "</b> is not registered in Costa Rica Reps.",
                useBootstrap: false,
              });
              break;
              case 'IncPassword':
              closeModal('login');
              $.alert({
                title: 'Error',
                type: 'red',
                columnClass: 'small',
                content: "Incorrect Password.",
                useBootstrap: false,
              });
              break;
            }
          }
        });
      }
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
<input type="hidden" id="slidActual" value="default">
<div id="lenguage_icons">
  <div id="pageHeader">
    <table class="tabhead" border="0px" height="130px" width="1020px" >
      <tr>
        <td rowspan="2" style="align: right; width: 325px; height: auto"><a href="index.php"><img src="images/logocrreps.png" onmouseover=" loadSlider('default');" /></a></td>
        <td style="float: right; width: 150px;">
          <ul>
            <li class="lisitemapa" style="width: 130px;" onclick="loadcontents('sitemap');"><a href="#" class="asitemapa">Site Map</a></li>
          </ul>
        </td>
        <td style="float: right; width: 240px;">
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
              <li class="lisitemapa" style="width: 220px;">
                <table border="0px">
                  <tr>
                    <td><img src='images/iconos_topmenu/userLog.png'></td>
                    <td style="width: 100px;"><p class="userman"><?php echo "<tab>" . $usernameLog. "&nbsp;&nbsp;" ; ?></p></td>
                      <td style="padding-left:5px;">
                        <nav id="menu">
                          <ul>
                            <li><button class="BotonConfig"> <img src='images/iconos_topmenu/config.png' title='Settings'></button>
                              <ul>
                                <li><a href="#" onclick="showModal('changepass');">Change Password</a></li>
                                <li><a href="#" id="closeSession">LogOut</a></li>
                              </ul>
                            </li>
                          </ul>
                        </nav>
                      </td>
                    </tr>
                  </table>
                </li>
                <?php
              }
              else {
                ?>
                <li class="lisitemapa" style="width: 220px;"><a href="#" onclick="showModal('login');" class="admini">LogIn</a></li>
                <?php
              }
              ?>
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
