
      <!-- login.php -->

        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/general.js"></script>
        <link rel="stylesheet" href="css/jquery-confirm.min.css">
        <script type="text/javascript" src="js/jquery-confirm.min.js"></script>

        <br/>
        <img src="images/user.png"><input type="email" id="login" name="login" style="float: left; width: 200px; border-radius: 5px;" value="" placeholder="E-mail" required="required"  /><br>
        <img style="float: left;" src="images/pass.png"><input type="password" id="password" name="password" style="float: left; width: 200px; border-radius: 5px;" value="" placeholder="Password" required="required"  />
        <br><br><input type="checkbox" checked="yes" name="rememberme" id="rememberme"><label for="rememberme" >Remember Me</label><br/><br/>
        <table border="0" class="tablalogeo">
          <tr><td width="230px">
              <a href="#" class="regi" onclick="showModal('register');">Register With Us</a><br/>
              <a href="#" class="regi" onclick="forgotPassword();" >Forgot Password</a>
          </td></tr>
          <tr><td width="230px"><input class="botonlog" type="submit" value="Log In" id="submit" /></td></tr>
        </table>

        <style type="text/css">
          
            .botonlog {
                float: right;
                width: 80px;
                border-radius: 3px;
                color: #fff;
                background-color: #65652b;
                display: inline-block;
                font: bold 12px candara;
                padding: 8px 11px;
                text-decoration: none;
            }

            .botonlog:hover {
                color: #fff;
                background-color: #9c1b2d;
            }

            .regi {
                text-decoration: none;
                color: #585919;
                font: normal 14px Candara;
                float: left;
            }

            .regi:hover {
                text-decoration: none;
                color: #9C1B2D;
                font: bold 14px Candara;
            }

        </style>