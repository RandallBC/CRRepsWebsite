<?php
ini_set ('error_reporting', E_PARSE);
require_once('recaptcha/recaptchalib.php');
$publickey = "6LfJwvkSAAAAAGLeoOOucBy-SXR-3bFiTf_9KIBm"; // you got this from the signup page
?>

<title>Costa Rica Reps Tour Development &amp; Destination Management</title>
<meta content="ALL" name="ROBOTS" />
<meta content="&copy; 2014 Costa Rica Reps DMC S.A. All Rights Reserved." name="copyright" />
<link rel="shortcut icon" href="images/favicon.ico">


<!--dropdown menu import start-->

<link href="css/dropdown/dropdown.css" media="screen" rel="stylesheet" type="text/css" />
<link href="css/dropdown/style.css" media="screen" rel="stylesheet" type="text/css" />
<link href="css/general.css" media="screen" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery.jfontsize-1.0.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="http://www.google.com/recaptcha/api/js/recaptcha_ajax.js"></script>


<style>

#popup {
  margin: auto;
  position: absolute;
  top: 0; left: 0; bottom: 0; right: 0;
  width: 500px;
  z-index: 1001;
}

.content-popup {
  margin:0px auto;
  margin-top: 0px;
  position:relative;
  padding:10px;
  width:250px;
  height:190px;
  border-radius:5px;
  background-color: #eeeeee;
  box-shadow: 0 2px 5px #666666;
  border: 2px solid #000000;
}

.content-popup h2 {
  color:#48484B;
  border-bottom: 1px solid #48484B;
  margin-top: 0;
  padding-bottom: 4px;
}

.popup-overlay {
  left: 0;
  position: absolute;
  top: 0;
  width: 100%;
  z-index: 999;
  display:none;
  background-color: #777777;
  cursor: pointer;
  opacity: 0.7;
}

.close {
  position: absolute;
  right: 15px;
}

/*de aki el registro*/

#popup4 {
  margin: auto;
  position: absolute;
  top: 0; left: 0; bottom: 0; right: 0;
  width: 600px;
  z-index: 1001;
}

.content-popup4 {
  margin:0px auto;
  margin-top: 0px;
  position:relative;
  padding:10px;
  width:320px;
  height:570px;
  border-radius:5px;
  background-color: #eeeeee;
  box-shadow: 0 2px 5px #666666;
  border: 2px solid #000000;
}

.content-popup4 h2 {
  color:#48484B;
  border-bottom: 1px solid #48484B;
  margin-top: 0;
  padding-bottom: 4px;
}

.popup4-overlay {
  left: 0;
  position: absolute;
  top: 0;
  width: 100%;
  z-index: 999;
  display:none;
  background-color: #777777;
  cursor: pointer;
  opacity: 0.7;
}

.close4 {
  position: absolute;
  right: 15px;
}

/*de aki el forgot password*/

#popup5 {
  margin: auto;
  position: absolute;
  top: 0; left: 0; bottom: 0; right: 0;
  width: 600px;
  z-index: 1001;
}

.content-popup5 {
  margin:0px auto;
  margin-top: 0px;
  position:relative;
  padding:10px;
  width:300px;
  height:170px;
  border-radius:5px;
  background-color: #eeeeee;
  box-shadow: 0 2px 5px #666666;
  border: 2px solid #000000;
}

.content-popup5 h2 {
  color:#48484B;
  border-bottom: 1px solid #48484B;
  margin-top: 0;
  padding-bottom: 4px;
}

.popup5-overlay {
  left: 0;
  position: absolute;
  top: 0;
  width: 100%;
  z-index: 999;
  display:none;
  background-color: #777777;
  cursor: pointer;
  opacity: 0.7;
}

.close5 {
  position: absolute;
  right: 15px;
}

.botonlog {
  float: right;
  width: 80px;
  border: 1px solid #000000;
  border-radius: 5px;
  color: #000000;
  background-color: #000000);
  display: inline-block;
  font: bold 12px/12px HelveticaNeue, Arial;
  padding: 8px 11px;
  text-decoration: none;
}

.botonlog:hover {
  float: right;
  border: 1px solid #9c1b2d;
  border-radius: 5px;
  color: #9c1b2d;
  background-color: #000000);
  display: inline-block;
  font: bold 12px/12px HelveticaNeue, Arial;
  padding: 8px 11px;
  text-decoration: none;
}

.regi
{
  text-decoration: none;
  color: #585919;
  font: normal 14px Candara;
  float: left;
}

.regi:hover
{
  text-decoration: none;
  color: #9C1B2D;
  font: bold 14px Candara;
}

.tablalogeo {
  height: 30px;
  width: 250px;
}

</style>

<script type="text/javascript">
$(document).ready(function(){

  $('#open').click(function(){
    $('#popup').slideDown('slow');
    $('.popup-overlay').slideDown('slow');
    $('.popup-overlay').height($(window).height());
    return false;
  });

  $('#close').click(function(){
    $('#popup').slideUp('slow');
    $('.popup-overlay').slideUp('slow');
    return false;
  });

  $('#open4').click(function(){
    $('#popup').slideUp('slow');
    $('.popup-overlay').slideUp('slow');
    $('#popup4').slideDown('slow');
    $('.popup4-overlay').slideDown('slow');
    $('.popup4-overlay').height($(window).height());
    return false;
  });

  $('#close4').click(function(){
    $('#popup4').slideUp('slow');
    $('.popup-overlay4').slideUp('slow');
    return false;
  });

  $('#open5').click(function(){
    $('#popup').slideUp('slow');
    $('.popup-overlay').slideUp('slow');
    $('#popup5').slideDown('slow');
    $('.popup5-overlay').slideDown('slow');
    $('.popup5-overlay').height($(window).height());

    return false;
  });

  $('#close5').click(function(){
    $('#popup5').slideUp('slow');
    $('.popup-overlay5').slideUp('slow');
    return false;
  });

});
</script>

<div id="popup" style="display: none;">
  <div class="content-popup">
    <div class="close"><a href="#" id="close"><img src="images/iconos_topmenu/cerrar.png"></a></div>
    <div>

      <h2>Log In </h2>
      <form method="post" action="login.php">

        <img src="images/user.png"><input type="email" id="login" name="login" style="float: left; width: 200px; border-radius: 5px;" value="" placeholder="E-mail" required="required"  /><br>
        <img style="float: left;" src="images/pass.png"><input type="password" id="password" name="password" style="float: left; width: 200px; border-radius: 5px;" value="" placeholder="Password" required="required"  />
        <br><br><input type="checkbox" checked="yes" name="rememberme" id="rememberme"><label style="float: left;">Remember Me Next Time</label>
        <table class="tablalogeo">
          <tr>
            <td>
              <a href="#" class="regi" id="open4">Register With Us</a>
              <a href="#" class="regi" id="open5">Forgot Password</a>
            </td>
            <td><input class="botonlog" type="submit" value="Log In" id="submit" /></td>
          </tr>
        </table>
      </form>
    </div>
  </div>
</div>

<div id="popup4" style="display: none;">
  <div class="content-popup4">
    <div class="close4"><a href="#" id="close4"><img src="images/iconos_topmenu/cerrar.png"></a></div>
    <div>
      <h2>Register With Us</h2>
      <form method="post" action="register.php">
        <p style="float: left; margin: 2px; padding: 2px;">Please complete the fields.</p><br><br>
        <input type="text" id="firstname_reg" name="firstname" style="float: left; width: 125px; border-radius: 5px;" value="" placeholder="First Name*" required="required" />
        <input type="text" id="lastname_reg" name="lastname" style="float: left; width: 125px; border-radius: 5px;" value="" placeholder="Last Name*" required="required" /><br>

        <input type="text" id="email_reg" name="email" style="float: left; width: 250px; border-radius: 5px;" value="" placeholder="E-mail*" required="required" /><br>

        <input type="password" id="password_reg" maxlength="16" minlength="4" name="password" style="float: left;  width: 250px; border-radius: 5px;" value="" placeholder="Password*" required="required"  /><br>

        <select name="country" required="required" style="float: left; width: 250px; border-radius: 5px;">
          <option value="" selected="selected">Please select your country*&nbsp;&gt;&gt;</option>
          <option value="Afghanistan">Afghanistan</option>
          <option value="Albania">Albania</option>
          <option value="Algeria">Algeria</option>
          <option value="American Samoa">American Samoa</option>
          <option value="Andorra">Andorra</option>
          <option value="Angola">Angola</option>
          <option value="Anguilla">Anguilla</option>
          <option value="Antarctica">Antarctica</option>
          <option value="Antigua and Barbuda">Antigua and Barbuda</option>
          <option value="Argentina">Argentina</option>
          <option value="Armenia">Armenia</option>
          <option value="Aruba">Aruba</option>
          <option value="Australia">Australia</option>
          <option value="Austria">Austria</option>
          <option value="Azerbaijan">Azerbaijan</option>
          <option value="Bahamas">Bahamas</option>
          <option value="Bahrain">Bahrain</option>
          <option value="Bangladesh">Bangladesh</option>
          <option value="Barbados">Barbados</option>
          <option value="Belarus">Belarus</option>
          <option value="Belgium">Belgium</option>
          <option value="Belize">Belize</option>
          <option value="Benin">Benin</option>
          <option value="Bermuda">Bermuda</option>
          <option value="Bhutan">Bhutan</option>
          <option value="Bolivia">Bolivia</option>
          <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
          <option value="Botswana">Botswana</option>
          <option value="Bouvet Island">Bouvet Island</option>
          <option value="Brazil">Brazil</option>
          <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
          <option value="Brunei Darussalam">Brunei Darussalam</option>
          <option value="Bulgaria">Bulgaria</option>
          <option value="Burkina Faso">Burkina Faso</option>
          <option value="Burundi">Burundi</option>
          <option value="Cambodia">Cambodia</option>
          <option value="Cameroon">Cameroon</option>
          <option value="Canada">Canada</option>
          <option value="Cape Verde">Cape Verde</option>
          <option value="Cayman Islands">Cayman Islands</option>
          <option value="Central African Republic">Central African Republic</option>
          <option value="Chad">Chad</option>
          <option value="Chile">Chile</option>
          <option value="China">China</option>
          <option value="Christmas Island">Christmas Island</option>
          <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
          <option value="Colombia">Colombia</option>
          <option value="Comoros">Comoros</option>
          <option value="Congo">Congo</option>
          <option value="Congo">Congo</option>
          <option value="Cook Islands">Cook Islands</option>
          <option value="Costa Rica">Costa Rica</option>
          <option value="Cote D'Ivoire">Cote D'Ivoire</option>
          <option value="Croatia">Croatia</option>
          <option value="Cuba">Cuba</option>
          <option value="Cyprus">Cyprus</option>
          <option value="Czech Republic">Czech Republic</option>
          <option value="Denmark">Denmark</option>
          <option value="Djibouti">Djibouti</option>
          <option value="Dominica">Dominica</option>
          <option value="Dominican Republic">Dominican Republic</option>
          <option value="Ecuador">Ecuador</option>
          <option value="Egypt">Egypt</option>
          <option value="El Salvador">El Salvador</option>
          <option value="Equatorial Guinea">Equatorial Guinea</option>
          <option value="Eritrea">Eritrea</option>
          <option value="Estonia">Estonia</option>
          <option value="Ethiopia">Ethiopia</option>
          <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
          <option value="Faroe Islands">Faroe Islands</option>
          <option value="Fiji">Fiji</option>
          <option value="Finland">Finland</option>
          <option value="France">France</option>
          <option value="French Guiana">French Guiana</option>
          <option value="French Polynesia">French Polynesia</option>
          <option value="French Southern Territories">French Southern Territories</option>
          <option value="Gabon">Gabon</option>
          <option value="Gambia">Gambia</option>
          <option value="Georgia">Georgia</option>
          <option value="Germany">Germany</option>
          <option value="Ghana">Ghana</option>
          <option value="Gibraltar">Gibraltar</option>
          <option value="Greece">Greece</option>
          <option value="Greenland">Greenland</option>
          <option value="Grenada">Grenada</option>
          <option value="Guadeloupe">Guadeloupe</option>
          <option value="Guam">Guam</option>
          <option value="Guatemala">Guatemala</option>
          <option value="Guinea">Guinea</option>
          <option value="Guinea-Bissau">Guinea-Bissau</option>
          <option value="Guyana">Guyana</option>
          <option value="Haiti">Haiti</option>
          <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
          <option value="Honduras">Honduras</option>
          <option value="Hong Kong">Hong Kong</option>
          <option value="Hungary">Hungary</option>
          <option value="Iceland">Iceland</option>
          <option value="India">India</option>
          <option value="Indonesia">Indonesia</option>
          <option value="Iran">Iran</option>
          <option value="Iraq">Iraq</option>
          <option value="Ireland">Ireland</option>
          <option value="Israel">Israel</option>
          <option value="Italy">Italy</option>
          <option value="Jamaica">Jamaica</option>
          <option value="Japan">Japan</option>
          <option value="Jordan">Jordan</option>
          <option value="Kazakhstan">Kazakhstan</option>
          <option value="Kenya">Kenya</option>
          <option value="Kiribati">Kiribati</option>
          <option value="Korea">Korea</option>
          <option value="Korea, Republic of">Korea, Republic of</option>
          <option value="Kuwait">Kuwait</option>
          <option value="Kyrgyzstan">Kyrgyzstan</option>
          <option value="Latvia">Latvia</option>
          <option value="Lebanon">Lebanon</option>
          <option value="Lesotho">Lesotho</option>
          <option value="Liberia">Liberia</option>
          <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
          <option value="Liechtenstein">Liechtenstein</option>
          <option value="Lithuania">Lithuania</option>
          <option value="Luxembourg">Luxembourg</option>
          <option value="Macao">Macao</option>
          <option value="Macedonia">Macedonia</option>
          <option value="Madagascar">Madagascar</option>
          <option value="Malawi">Malawi</option>
          <option value="Malaysia">Malaysia</option>
          <option value="Maldives">Maldives</option>
          <option value="Mali">Mali</option>
          <option value="Malta">Malta</option>
          <option value="Marshall Islands">Marshall Islands</option>
          <option value="Martinique">Martinique</option>
          <option value="Mauritania">Mauritania</option>
          <option value="Mauritius">Mauritius</option>
          <option value="Mayotte">Mayotte</option>
          <option value="Mexico">Mexico</option>
          <option value="Micronesia">Micronesia</option>
          <option value="Moldova, Republic of">Moldova, Republic of</option>
          <option value="Monaco">Monaco</option>
          <option value="Mongolia">Mongolia</option>
          <option value="Montserrat">Montserrat</option>
          <option value="Morocco">Morocco</option>
          <option value="Mozambique">Mozambique</option>
          <option value="Myanmar">Myanmar</option>
          <option value="Namibia">Namibia</option>
          <option value="Nauru">Nauru</option>
          <option value="Nepal">Nepal</option>
          <option value="Netherlands">Netherlands</option>
          <option value="Netherlands Antilles">Netherlands Antilles</option>
          <option value="New Caledonia">New Caledonia</option>
          <option value="New Zealand">New Zealand</option>
          <option value="Nicaragua">Nicaragua</option>
          <option value="Niger">Niger</option>
          <option value="Nigeria">Nigeria</option>
          <option value="Niue">Niue</option>
          <option value="Norfolk Island">Norfolk Island</option>
          <option value="Northern Mariana Islands">Northern Mariana Islands</option>
          <option value="Norway">Norway</option>
          <option value="Oman">Oman</option>
          <option value="Pakistan">Pakistan</option>
          <option value="Palau">Palau</option>
          <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
          <option value="Panama">Panama</option>
          <option value="Papua New Guinea">Papua New Guinea</option>
          <option value="Paraguay">Paraguay</option>
          <option value="Peru">Peru</option>
          <option value="Philippines">Philippines</option>
          <option value="Pitcairn">Pitcairn</option>
          <option value="Poland">Poland</option>
          <option value="Portugal">Portugal</option>
          <option value="Puerto Rico">Puerto Rico</option>
          <option value="Qatar">Qatar</option>
          <option value="Reunion">Reunion</option>
          <option value="Romania">Romania</option>
          <option value="Russian Federation">Russian Federation</option>
          <option value="Rwanda">Rwanda</option>
          <option value="Saint Helena">Saint Helena</option>
          <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
          <option value="Saint Lucia">Saint Lucia</option>
          <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
          <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
          <option value="Samoa">Samoa</option>
          <option value="San Marino">San Marino</option>
          <option value="Sao Tome and Principe">Sao Tome and Principe</option>
          <option value="Saudi Arabia">Saudi Arabia</option>
          <option value="Senegal">Senegal</option>
          <option value="Serbia and Montenegro">Serbia and Montenegro</option>
          <option value="Seychelles">Seychelles</option>
          <option value="Sierra Leone">Sierra Leone</option>
          <option value="Singapore">Singapore</option>
          <option value="Slovakia">Slovakia</option>
          <option value="Slovenia">Slovenia</option>
          <option value="Solomon Islands">Solomon Islands</option>
          <option value="Somalia">Somalia</option>
          <option value="South Africa">South Africa</option>
          <option value="Spain">Spain</option>
          <option value="Sri Lanka">Sri Lanka</option>
          <option value="Sudan">Sudan</option>
          <option value="Suriname">Suriname</option>
          <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
          <option value="Swaziland">Swaziland</option>
          <option value="Sweden">Sweden</option>
          <option value="Switzerland">Switzerland</option>
          <option value="Syrian Arab Republic">Syrian Arab Republic</option>
          <option value="Taiwan">Taiwan</option>
          <option value="Tajikistan">Tajikistan</option>
          <option value="Tanzania">Tanzania</option>
          <option value="Thailand">Thailand</option>
          <option value="Timor-Leste">Timor-Leste</option>
          <option value="Togo">Togo</option>
          <option value="Tokelau">Tokelau</option>
          <option value="Tonga">Tonga</option>
          <option value="Trinidad and Tobago">Trinidad and Tobago</option>
          <option value="Tunisia">Tunisia</option>
          <option value="Turkey">Turkey</option>
          <option value="Turkmenistan">Turkmenistan</option>
          <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
          <option value="Tuvalu">Tuvalu</option>
          <option value="Uganda">Uganda</option>
          <option value="Ukraine">Ukraine</option>
          <option value="United Arab Emirates">United Arab Emirates</option>
          <option value="United Kingdom">United Kingdom</option>
          <option value="United States">United States</option>
          <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
          <option value="Uruguay">Uruguay</option>
          <option value="Uzbekistan">Uzbekistan</option>
          <option value="Vanuatu">Vanuatu</option>
          <option value="Venezuela">Venezuela</option>
          <option value="Viet Nam">Viet Nam</option>
          <option value="Virgin Islands, British">Virgin Islands, British</option>
          <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
          <option value="Wallis and Futuna">Wallis and Futuna</option>
          <option value="Western Sahara">Western Sahara</option>
          <option value="Yemen">Yemen</option>
          <option value="Zambia">Zambia</option>
          <option value="Zimbabwe">Zimbabwe</option>
        </select><br>

        <input type="text" id="address_reg" name="address" style="float: left; width: 250px; border-radius: 5px;" value="" placeholder="Address" /><br>

        <input type="text" id="phone_reg" name="phone" style="float: left; width: 250px; border-radius: 5px;" value="" placeholder="Telephone" /><br>

        <select id="hearabout_reg" name="hearabout[]" required="required" style="float: left; width: 250px; height: 105px; border-radius: 5px;" multiple>
          <option style="font: bold 14px Candara; Color:#DB5A0A;">Where did you hear about us?</option>
          <option selected="selected" value="1">Internet</option>
          <option value="2">Magazine</option>
          <option value="3">Friend</option>
          <option value="4">Newspaper</option>
          <option value="5">Travel show</option>
        </select><br><br><br><br><br><br><br>
        <p style="padding: 0px; font: normal 11px Candara; color: #9c1b2d" >Choose all that applies, Hold Ctrl key (Win) / Command Key (Mac)</p>
        <table>
          <tr>
            <td><input type="checkbox" id="newsletter_reg" name="newsletter" checked="yes" style="float: left;"></td>
            <td><label for="newsletter" style="float: left;">Sign Up for Our Newsletter</label></td>
          </tr>
        </table>


        <script type="text/javascript">
        var RecaptchaOptions = {
          theme : 'white'
        };
        </script>

        <?php echo recaptcha_get_html($publickey); ?>
        <br>
        <input class="botonlog" type="submit" value="Register" id="submit_reg" />
      </form>
    </div>
  </div>
</div>

<div id="popup5" style="display: none;">
  <div class="content-popup5">
    <div class="close5"><a href="#" id="close5"><img src="images/iconos_topmenu/cerrar.png"></a></div>
    <div>
      <h2>Forgot your Password?</h2>
      <h3 style="text-align:left;">Please enter your E-mail address.</h3>
      <form method="post" action="forgotpass.php">
        <input type="text" id="email_fp" name="email" style="float: left; width: 300px; border-radius: 5px;" value="" placeholder="E-mail" required="required" /><br><br>
        <input class="botonlog" type="submit" value="Recover" id="submit_fp" />
      </form>
    </div>
  </div>
</div>



<div id="lenguage_icons">
  <div id="pageHeader">

    <!-- dropdown menu starts-->
    <table class="tabhead" border="0px" height="auto" width="auto" >
      <tr>
        <td rowspan="2" style="align: right; width: 261px; height: 86px"><a href="index.php"><img src="images/logocrreps.png" /></a></td>
        <td style="float: right; width: 300px;">
          <ul>

            <?php
            session_start();
            if(isset($_SESSION['email'])) {
              $vari = 1;
              $correo = $_SESSION['email'];
            }
            if ($vari == 1) {
              ?>
              <li class="sitemapa">
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
                <li class="sitemapa"><a href="#" id="open"  class="admini">LogIn</a></li>
                <?php
              }
              ?>
            </ul>
          </td>

          <td style="float: right; width: 200px;">
            <ul>
              <li class="sitemapa"><a href="sitemap.php" class="sitemapa">Site Map</a></li>
            </ul>
          </td>
          <td valign="top" style="width: 220px; height: 25px !important;"  >
            <div id="busqueda-form">
              <form method="post" action="sitemap.php">
                <input type="text" id="busqueda" name="busqueda" placeholder="  Search..." required="required"/>
                <input type="image" src="images/lupa.png" id="submita" />
              </form>
            </div>

          </td>
        </tr>
        <tr>

          <td colspan="3" id="techo" align="center">
            <div id="flags" align="right">

              <script type='text/javascript'>
              //<![CDATA[
              var tgs = new Array( 'div','td','tr');
              var szs = new Array( 'xx-small','x-small','small','medium','large','x-large','xx-large' );
              var startSz = 2;
              function ts( trgt,inc ) {
                if (!document.getElementById) return
                var d = document,cEl = null,sz = startSz,i,j,cTags;
                sz += inc;
                if ( sz < 0 ) sz = 0;
                if ( sz > 6 ) sz = 6;
                startSz = sz;
                if (!( cEl = d.getElementById( trgt ) ) ) cEl = d.getElementsByTagName( trgt )[ 0 ];
                cEl.style.fontSize = szs[ sz ];
                for ( i = 0 ; i < tgs.length ; i++ ) {
                  cTags = cEl.getElementsByTagName( tgs[ i ] );
                  for ( j = 0 ; j < cTags.length ; j++ ) cTags[ j ].style.fontSize = szs[ sz ];
                }
              }
              //]]>
              </script>


              <!--a href="http://www.costaricareps.com"><img src="images/icon_England.png" height="25px" width="33px"></a>
              <a href="http://www.costaricareps.com/es"><img src="images/icon_Spain.png" height="25px" width="33px"></a>
              <a href="http://www.costaricareps.com/de"><img src="images/icon_Germany.png" height="25px" width="33px"></a>
              <a href="http://www.costaricareps.com/fr"><img src="images/icon_France.png" height="25px" width="33px"></a-->

            </div>
            <center><?php include("menuhead.php")?></center>

          </td>
        </tr>

      </table>

      <!-- dropdown menu ends-->
    </div>
  </div>
  <!-- header ends>


  <dropdown menu import end-->
