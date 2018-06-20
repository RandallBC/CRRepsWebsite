<?php ob_start(); ?>
<div class="post" id="derechaConten">

    <style>

        #principal {
            width: 1020px;
            height: 715px;

        }

        #izkierdo {
            width: 600px;
            margin: 5px;
            height: 680px;
            background: #f6f8ed;
            float: left;
            border-radius: 10px;
            border: 1px solid #585919;
        }

        #derecho {
            width: 400px;
            margin-top: 5px;
            margin-right: 5px;
            margin-bottom: 5px;
            height: 680px;
            background: #f6f8ed;
            float: left;
            border-radius: 10px;
        }

        #dereuno {
            width: 400px;
            height: 590px;
            background: #fff;
            border: 1px solid #585919;
            float: left;
            border-radius: 10px;

         }

        #derenewsletter {
            width: 400px;
            height: 82px;
            background: #fff;
            margin-bottom: 5px;
            border: 1px solid #585919;
            border-radius: 10px;
            float: left;
        }

        #abajo {

        }

    </style>

    <link href="css/dropdown/dropdown.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="css/dropdown/style.css" media="screen" rel="stylesheet" type="text/css" />

    <div id="izkierdo">


    </div>

    <div id="principal">

        <div id="derecho">

            <div id="derenewsletter" >
                <img src="images/timbre.png" style="margin-left: -8px; margin-top: -10px; float: left;">
                <table border="0px" style="float: right; width: 275px">
                    <tr>
                        <td><input type="submit" value="Sign up for Our Newsletter" id="submite"/></td>
                    </tr>
                </table>
            </div>

            <div id="dereuno">
        <h2 style="line-height: 50px;">Testimonials</h2>
        <iframe src="testimonials/testim2.php" width="400px" height="520px" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" >Content not supported</iframe>

            </div>

            <style>

            #submite {
                width: 260px;
                height: 40px;
                margin: 20px;
                border-radius: 3px;
                color: #585919;
                background: #c0ba81;
                font: bold 16px Candara;
                border: 1px solid #585919;
            }

            #submite:hover {
                color: #fff;
                background: #585919;
                border: 1px solid #c0ba81;
            }

            #submite:active {
                color: #fff;
                background: #9C1B2D;
                border: 1px solid #fff;
            }

            #pregunta {
                margin: auto;
                position: absolute;
                top: 0; left: 0; bottom: 0; right: 0;
                width: 500px;
                z-index: 1001;
            }

             #newsform {
                margin: auto;
                position: absolute;
                top: 0; left: 0; bottom: 0; right: 0;
                width: 350px;
                z-index: 1001;
            }


            .content-popuppregu {
                margin:0px auto;
                margin-top: 0px;
                position:relative;
                padding:10px;
                width:300px;
                height:100px;
                border-radius:5px;
                background-color: #eeeeee;
                box-shadow: 0 2px 5px #666666;
                border: 2px solid #000000;
            }

            .content-popupnews {
                margin:0px auto;
                margin-top: 0px;
                position:relative;
                padding:10px;
                width:300px;
                height:350px;
                border-radius:5px;
                background-color: #eeeeee;
                box-shadow: 0 2px 5px #666666;
                border: 2px solid #000000;
            }



            .content-popuppregu h2, .content-popupnews h2 {
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

            .closepregu {
                position: absolute;
                right: 15px;
            }




            </style>


                <script type="text/javascript">
                $(document).ready(function(){
                    $('#submite').click(function(){
                        $('#pregunta').slideDown('slow');
                        return false;
                    });

                    $('#closepregu').click(function(){
                        $('#pregunta').slideUp('slow');
                        return false;
                    });

                    $('#closenews').click(function(){
                        $('#newsform').slideUp('slow');
                        return false;
                    });

                });

                function registerquote(){

                    $('#pregunta').slideUp('slow');
                    $('#popup').slideUp('slow');
                    $('.popup-overlay').slideUp('slow');
                    $('#popup4').slideDown('slow');
                    $('.popup4-overlay').slideDown('slow');
                    $('.popup4-overlay').height($(window).height());
                    return false;
                }

                    function newsform() {
                        $('#pregunta').slideUp('slow');
                        $('#newsform').slideDown('slow');
                        return false;


                    }

            </script>

            <div id="pregunta" style="display: none;">
                <div class="content-popuppregu">
                    <div class="close"><a href="#" id="closepregu"><img src="images/iconos_topmenu/cerrar.png"></a></div>
                    <div>

                        <h2>Question</h2>

                        <h4 style="margin: 10px; color: #9C1B2D">Do you want to become a registered user too?</h4>
                        <input class="botonlog" type="submit" value="No" id="no" style="margin-left: 10px;" onclick="newsform();" />
                        <input class="botonlog" type="submit" value="Yes" id="yes" onclick="registerquote();" />
                    </div>
                </div>
            </div>


            <div id="newsform" style="display: none;">
                <div class="content-popupnews">
                    <div class="close"><a href="#" id="closenews"><img src="images/iconos_topmenu/cerrar.png"></a></div>
                    <div>

                        <h2>Newsletter</h2>
                        <form method="post" action="procnewsletter.php">
                            <h4 style="margin: 10px; color: #9C1B2D">Please complete the fields.</h4>

                            <input type="email" id="email" name="email" style="float: left; width: 290px; border-radius: 5px;" value="" placeholder="E-mail*" required="required" /><br>
                            <input type="text" id="firstname" name="firstname" style="float: left; width: 290px; border-radius: 5px;" value="" placeholder="First Name*" required="required" /><br>
                            <input type="text" id="lastname" name="lastname" style="float: left; width: 290px; border-radius: 5px;" value="" placeholder="Last Name*" required="required" /><br>
                            <select name="country" required="required" style="float: left; width: 290px; border-radius: 5px;">
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
                            <select id="hearabout" name="hearabout[]" required="required" style="float: left; width: 250px; height: 105px; border-radius: 5px;" multiple>
                                <option style="font: bold 14px Candara; Color:#DB5A0A;">Where did you hear about us?</option>
                                <option selected="selected" value="1">Internet</option>
                                <option value="2">Magazine</option>
                                <option value="3">Friend</option>
                                <option value="4">Newspaper</option>
                                <option value="5">Travel show</option>
                            </select><br><br><br><br><br><br><br>
                            <p style="padding: 0px; font: normal 11px Candara; color: #9c1b2d" >Choose all that applies, Hold Ctrl key (Win) / Command Key (Mac)</p>
                            <br>
                            <input class="botonlog" type="submit" value="Send"/>
                        </form>



                    </div>
                </div>
            </div>


        </div>


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

