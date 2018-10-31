<style>

    .formText, .formList {
        width: 100%;
    }

    .labeldatos
    {
        line-height: 24px;
        text-align: right;
    }

</style>



<table border="0px" style=" border-top: 5px solid #c0ba81 ; width: 980px; height: 550px; margin: 0px auto; background-color: #FFFFFF;">
    <tr>
        <td style="float: left; width: 480px">
            <div style="float: left; width: auto;">
                <p class="generalText" style="color: #660000">To request additional information please contact us at:</p>
                <p class="generalText" style="padding-left: 35px; padding-bottom: 10px">
                    Costa Rica:<br/><br/>
                      (506) 4000-2288 (Telephone)<br/> 
                      (506) 4000-2225 (Telephone)<br/>
                      (506) 2256-3526 (Facsimile)<br/>
                      (506) 8366-0217  (Mobile for Emergencies)<br/><br/>
                <p class="generalText divLine" style="color: #660000">Mailing address:</p>
                <p class="generalText" style="padding-left: 35px; padding-bottom: 10px">Costa Rica Reps<br />
                    Apartado Postal 13132 - CP 1000<br />Oficina Central de Correos<br />San Jos&eacute;, Costa Rica<br />Central America</p>
                <p class="generalText divLine" style="color: #660000">Physical Address:</p>
                <p class="generalText" style="padding-left: 35px; padding-bottom: 10px">Casa Azul #325. Calle 34 Avenida 3-5. Del Taco Bell Paseo Col&oacute;n 224 metros Norte, Casa Azul a mano izquierda. Paseo Col&oacute;n,<br/> San Jose, Costa Rica. </p>

                <p class="generalText divLine">We are conveniently located near the city of San Jos&eacute;.<br /><br />Tobias Bola&ntilde;os Regional Airport (SYQ): 3 miles<br />
                    Juan Santamaria Int. Airport (SJO): 10 miles.</p>
            </div>

        </td>

        <td  style="float: left; width: 485px; border-left: 1px solid #DB5A0A;">

        <div id="enquiry" style="padding-left: 50px;">
        <h3>General Enquiry</h3>
        <form action="enquiry.php" method="post" name="enquiryForm" id="enquiryForm">
        <table border="0">
        <tr>
          <td valign="top" class="labeldatos">First Name <span style="color: #e00000">*</span></td>
          <td><input class="formText" type="text" id="firstName" name="firstName" required="yes" onfocus="hilightON('firstName')" onblur="hilightOFF('firstName')" /></td>
        </tr>
        <tr>
          <td valign="top" class="labeldatos">Last Name <span style="color: #e00000">*</span></td>
          <td><input class="formText" type="text" id="lastName" name="lastName"  required="yes" onfocus="hilightON('lastName')" onblur="hilightOFF('lastName')" /></td>
        </tr>
        <tr>
          <td valign="top" class="labeldatos">Telephone <span style="color: #e00000">*</span></td>
          <td><input class="formText" type="text" id="tel" name="tel"  required="yes" onfocus="hilightON('tel')" onblur="hilightOFF('tel')" /></td>
        </tr>
        <tr>
          <td valign="top" class="labeldatos">E-mail <span style="color: #e00000">*</span></td>
          <td><input class="formText" type="text" id="emailAdr" name="emailAdr"  required="yes" onfocus="hilightON('emailAdr')" onblur="hilightOFF('emailAdr')" /></td>
        </tr>
        <tr>
          <td valign="top" class="labeldatos">Country <span style="color: #e00000">*</span></td>
          <td><select id="country" name="country" class="formList" onfocus="hilightON('country')" onblur="hilightOFF('country')">
          <option value="" selected="selected">Please select&nbsp;&gt;&gt;</option>
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
          </select></td>
        </tr>
        <tr>
          <td valign="top" class="labeldatos">State </td>
          <td><input class="formText" type="text" id="state" name="state"  required="yes" onfocus="hilightON('state')" onblur="hilightOFF('state')" /></td>
        </tr>
        <tr><td colspan="2"><p style="color: #e00000; font-size: 12px;">(<span style="color: #e00000">*</span> fields are required)</p></td></tr>   
        <tr>
          <td><p class="divLine">Additional comments:</p></td>
          <td><textarea name="comment" id="comment" style="width: 300px; height: 60px; resize: none;" onfocus="hilightON('comment')" onblur="hilightOFF('comment')"></textarea></td>
        </tr>
        <tr>
          <td colspan="2"><p class="divLine">Please select the department you would like this enquiry to be forwarded to:</p></td>
        </tr>
        <tr><td colspan="2">
          <select id="dep" name="dep" class="formList" style="width: 100%;" onchange="updateDepDesc(this.selectedIndex)" onfocus="hilightON('dep')" onblur="hilightOFF('dep')">
            <option value="tp">Travel Planning</option>
            <option value="fi">Finance &amp; Accounting</option>
            <option value="op" selected="selected">Operations &amp; Service Delivery</option>
            <option value="mg">Management</option>
        </select>
        </td></tr>
        <tr><td colspan="2" >
        <p class="descText" id="depDesc">Last minute incidents, flight changes, client feedback</p>  
        </td></tr>
        <tr><td colspan="2" >
        <img src="images/captcha.png" style="float: right;">
        </td></tr>
        <tr><td style="width: 100%;" colspan="2">
          <div class="divLine" style="text-align: right; width: 300px;">
            <input type="reset" name="Clear" value="Clear" />
            <input type="submit" name="Send" value="Send" />
        </div>  
        </td></tr>
        </table>
        </form>
        </div>
        </div>
        </td>
    </tr>
</table>
