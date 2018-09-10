<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content="travel information, plan Costa Rican vacation, Expeditions, Rain Forest, volcanoes, Beaches, Jungles Costa Rica. Rain Forest Tours, Ecotours, Ecosafari and adventure travel in Costa Rica. Birdwatching, Natural History, Adventure Travel, Horse Riding and Nature Tours." name="description" />
<meta content="Costa Rica, Adventure, Nature, Travel, hotels, vacations, tours, holidays, info, information, tour, Ecosafari, Ecotour, Nature tours, Eco-tour, horseback, riding, expeditions, woldwide, travel, international, free, world wide, Quest, Costa Rica Travel, Costarica, holiday, vacation" name="keywords" />
<meta content="costa rica, central america, south america, travel, tours, holidays, vacations, tours" name="classification" />
<meta content="Adventure, Nature, Wildlife, Rain Forest, Travel, Tours, Costa Rica, Costarica, Costa Rika, Costarika" name="country" />

<!-- -->
<?php include("head.php")?>
<!-- -->

<script type="text/javascript" src="js/ts_picker/ts_picker.js"></script>

<style type="text/css">
#wzTabs
{
 margin: 0px 0px 0px 70px;
}

#wzTab10, #wzTab20, #wzTab30, #wzTab40
{
 float: left;
 width: 15px;
 padding: 4px 0px;
 font-size: 14px;
 margin-left: 5px;
 margin-right: 5px;
 background-repeat: no-repeat;
 background-position: 50% 70%;
}

#wzTab1, #wzTab2, #wzTab3, #wzTab4, #wzTab5
{
 float: left;
 width: 100px;
 padding: 4px 0px;
 text-align: center;
 font-family: Arial, Helvetica, sans-serif;
 font-weight: bold;
 font-size: 14px;
/* border-top: 1px solid #808080;
 border-left: 1px solid #808080;
 border-right: 1px solid #808080;*/
}

#wzBtns
{
 margin-top: 0px;
}

#wzBtnBack, #wzBtnNext, #wzBtnSubmit
{
 float: right;
 margin-right: 15px;
}

#wzBtnReset
{
 float: left;
 margin-left: 15px;
}

#wzBtnBack, #wzBtnNext, #wzBtnReset, #wzBtnSubmit
{
 width: 90px;
 margin-top: 4px;
 margin-bottom: 4px;
 text-align: center;
 font-family: Tahoma, Geneva, sans-serif;
 font-weight: bold;
 border-top: 1px solid #c0c0c0;
 border-left: 1px solid #c0c0c0;
 border-right: 2px solid #7c887c;
 border-bottom: 2px solid #7c887c;
}

#wzBtns a
{
 display: block;
 padding: 3px 0px;
 text-decoration: none;
}

#wzBtns a:link, #wzBtns a:visited
{
 background-color: #ffffff;
 color: #103010;
}

#wzBtns a:hover
{
 background-color: #f0ffd0;
}

.overTab0
{
 background-image: url(images/arrow888.gif);
}

.overTab
{
 background-color: #d0e0d0;
 color: #808080;
 border-top: 1px solid #ffffff;
 border-bottom: 1px solid #ffffff;
}

.offTab0
{
 background-image: url(images/arrowded.gif);
}

.offTab
{
 background-color: #ffffff;
 color: #d0e0d0;
 border-top: 1px solid #ffffff;
 border-bottom: 1px solid #ffffff;
}

.onTab
{
 background-color: #20b030;
 color: #ffffff;
 border-top: 1px solid #20b030;
 border-bottom: 1px solid #20b030;
}

/*
.offTabDiv
{
 display: none;
}

.onTabDiv
{
 visibility: visible;
}
*/

.posL, .posL120, .posL170, .posL250
{
 position: absolute;
 top: 3px;
}

.posL120
{
 left: 120px;
}

.posL170
{
 left: 170px;
}

.posL250
{
 left: 250px;
}

.fmText, .fmList, .fmDate, .fmNum
{
 margin-bottom: 4px;
/* margin-left: 4px;*/
/* background-color: #f0ffd0;*/
 padding-left: 5px;
 font-family: Tahoma, Geneva, sans-serif;
 font-size: 15px;
}

.fmText, .fmDate, .fmNum
{
 border: 1px solid #103010;
 height: 23px;
}

.fmText
{
 width: 210px;
}

.fmList
{
 width: 219px;
 height: 27px;
}

.fmDate
{
 position: absolute;
 left: 150px;
 top: 3px;
 width: 120px;
}

.fmNum
{
 width: 30px;
}

#comment
{
 width: 735px;
 height: 150px;
 margin-top: 5px;
}

.fmTextDiv, .fmTextDivL, .fmTextDivR
{
 position: relative;
 font-family: Tahoma, Geneva, sans-serif;
 font-size: 15px;
 letter-spacing: 1px;
 padding-left: 10px;
 padding-top: 7px;
 margin-bottom: 2px;
 background-color: #f0ffd0;
 height: 26px;
}

.fmTextDivL
{
 float: left;
 width: 360px;
}

.fmTextDivR
{
 float: right;
 width: 360px;
}

.fmSubDiv
{
 position: relative;
 margin-left: 5px;
 padding-top: 6px;
 height: 26px;
 width: 350px;
}

.fmCalImg
{
 position: absolute;
 left: 285px;
 border: 0px;
}

.fmDivTitle
{
 margin: 0px 0px 5px 0px;
 font-family: Tahoma, Geneva, sans-serif;
 font-size: 15px;
 font-weight: bold;
 color: #407040
}

.fmCkTbl2, .fmCkTbl3
{
 width: 98%;
 table-layout: fixed;
}

.fmCkTbl2 td, .fmCkTbl3 td
{
 height: 30px;
 font-family: Arial, Helvetica, sans-serif;
 font-size: 14px;
 letter-spacing: 0px;
}

.fmCkTbl2 td
{
 width: 50%;
}

.fmCkTbl3 td
{
 width: 239px;
}

.paxImg
{
 vertical-align: top;
}

.descText2G
{
 color: #308030;
 font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
}


</style>
<script type="text/javascript">
var curStep = 1;

function switchHidden(elemName)
{
 var tmpObj = document.getElementById(elemName);
 
 if(tmpObj.style.visibility == "hidden")
 {
  tmpObj.style.visibility = "visible"
 }
 else
 {
  tmpObj.style.visibility = "hidden"
 }
}

function updateState(country)
{
 var states;
 var htmlStr;

 switch(country)
 {
  case "Canada":
   states = new Array("Alberta", "British Columbia", "Manitoba", "New Brunswick", "Newfoundland and Labrador", "Northwest Territory", "Nova Scotia", "Nunavut Territory", "Ontario", "Prince Edward Island", "Quebec", "Saskatchewan", "Yukon Territory");
   break;
  case "Germany":
   states = new Array("Baden-Wurttemberg", "Bayern", "Berlin", "Brandenburg", "Bremen", "Hamburg", "Hessen", "Mecklenburg-Vorpommern", "Niedersachsen", "Nordrhein-Westfalen", "Rheinland-Pfalz", "Saarland", "Sachsen", "Sachsen-Anhalt", "Schleswig-Holstein", "Thuringen");
   break;
  case "United Kingdom":
   states = new Array("England", "Northern Ireland", "Scotland", "Wales");
   break;
  case "United States":
   states = new Array("Alabama", "Alaska", "Arkansas", "California", "Colorado", "Connecticut", "Delaware", "Florida", "Georgia", "Hawaii", "Idaho", "Illinois", "Indiana", "Iowa", "Kansas", "Kentucky", "Louisiana", "Maine", "Maryland", "Massachusetts","Michigan", "Minnesota", "Mississippi", "Missouri", "Montana", "Nebraska", "Nevada", "New Hampshire", "New Jersey", "New Mexico", "New York", "North Carolina", "North Dakota", "Ohio", "Oklahoma", "Oregon", "Pennsylvania", "Rhode Island", "South Carolina", "South Dakota", "Tennessee", "Texas", "Utah", "Vermont", "Virginia", "Washington", "West Virginia", "Wisconsin", "Wyoming");
   break;
 }

 if(states != null)
 {
  for(s in states)
  {
   htmlStr = htmlStr + '<option value="' + states[s] + '">' + states[s] + '</option>';
  }
  htmlStr = 'Please select:<select class="fmList posL120" name="state">' + htmlStr + '</select>';
 }
 else
 {
  htmlStr = 'State:<input class="fmText posL120" name="state" />';
 }
 
 document.getElementById("stateDiv").innerHTML = htmlStr;
}

function validateStep(oldStep, newStep)
{
 var tmpObj;
 var isValid = true;
 
 if(oldStep > newStep)
 {
  updateStep(oldStep, newStep)
 }
 else
 {
  switch(oldStep)
  {
   case 1:
    tmpObj = document.quoteForm.country;
    if(tmpObj.selectedIndex == 0)
    {
     tmpObj.style.backgroundColor = "#ffc0c0";
     alert("[Country] is not selected");
     tmpObj.focus();
     isValid = false;
    }

    tmpObj = document.quoteForm.emailAdr;
    if(!tmpObj.value.match(/^\S+@\S+\.\S+$/))
    {
     tmpObj.style.backgroundColor = "#ffc0c0";
     alert("[e-mail] is invalid");
     tmpObj.focus();
     isValid = false;
    }

    tmpObj = document.quoteForm.lastName;
    if(tmpObj.value == "")
    {
     tmpObj.style.backgroundColor = "#ffc0c0";
     alert("[Last Name] is empty");
     tmpObj.focus();
     isValid = false;
    }

    tmpObj = document.quoteForm.firstName;
    if(tmpObj.value == "")
    {
     tmpObj.style.backgroundColor = "#ffc0c0";
     alert("[First Name] is empty");
     tmpObj.focus();
     isValid = false;
    }

    break;

   case 2:
    tmpObj = document.quoteForm.tripFocus;
    if(tmpObj.selectedIndex == 0)
    {
     tmpObj.style.backgroundColor = "#ffc0c0";
     alert("[Primary focus of your trip] is not selected");
     tmpObj.focus();
     isValid = false;
    }

    tmpObj = document.quoteForm.lvRoom;
    if(tmpObj.selectedIndex == 0)
    {
     tmpObj.style.backgroundColor = "#ffc0c0";
     alert("[Preferred level of accommodation] is not selected");
     tmpObj.focus();
     isValid = false;
    }

    tmpObj = document.quoteForm.nAdult;
    if(tmpObj.value == "" || isNaN(Number(tmpObj.value)) || tmpObj.value < 1)
    {
     tmpObj.style.backgroundColor = "#ffc0c0";
     alert("[Number of adults] is empty or invalid");
     tmpObj.focus();
     isValid = false;
    }

    tmpObj = document.quoteForm.dptDate;
    if(tmpObj.value == "")
    {
     tmpObj.style.backgroundColor = "#ffc0c0";
     alert("[Departure date] is empty");
     tmpObj.focus();
     isValid = false;
    }

    tmpObj = document.quoteForm.arvDate;
    if(tmpObj.value == "")
    {
     tmpObj.style.backgroundColor = "#ffc0c0";
     alert("[Arrival date] is empty");
     tmpObj.focus();
     isValid = false;
    }

    break;

   case 3:
    isValid = false;
    for(i = 1; i <= 21; ++i)
    {
     tmpObj = document.getElementById("tripAreas" + i);
     isValid = isValid || tmpObj.checked;
     if(isValid){ break; }
    }
/*
    tmpObj = document.quoteForm.elements['tripAreas[]'];
    for(i in tmpObj)
    {
     isValid = isValid || tmpObj[i].checked;
    }
*/
    if(!isValid)
    {
     alert("Please select your area(s) of interest!");
    }
    break;

   case 4:
    isValid = false;
    for(i = 1; i <= 35; ++i)
    {
     tmpObj = document.getElementById("tripActs" + i);
     isValid = isValid || tmpObj.checked;
     if(isValid){ break; }
    }
/*
   tmpObj = document.quoteForm.elements['tripActs[]'];
    for(i in tmpObj)
    {
     isValid = isValid || tmpObj[i].checked;
    }
*/
    if(!isValid)
    {
     alert("Please select your activity(ies) of interest!");
    }
    break;

   case 5:
    isValid = false;
    for(i = 1; i <= 8; ++i)
    {
     tmpObj = document.getElementById("tripTrans" + i);
     isValid = isValid || tmpObj.checked;
     if(isValid){ break; }
    }
/*
    tmpObj = document.quoteForm.elements['tripTrans[]'];
    for(i in tmpObj)
    {
     isValid = isValid || tmpObj[i].checked;
    }
*/
    if(!isValid)
    {
     alert("Please select your preferred type of transportation!");
    }
    return(isValid);
  }

  if(isValid){updateStep(oldStep, newStep)};
 }
}


function updateStep(oldStep, newStep)
{
 var tabElm = document.getElementById("wzTab" + newStep);
 tabElm.setAttribute("class", "onTab");
 // for IE only
 tabElm.setAttribute("className", "onTab");

 tabElm = document.getElementById("wzTab" + oldStep);
 if(oldStep > newStep) // Back is clicked
 {
  tabElm.setAttribute("class", "offTab");
  // for IE only
  tabElm.setAttribute("className", "offTab");

  tabElm = document.getElementById("wzTab" + newStep + "0");
  tabElm.setAttribute("class", "offTab0");
  // for IE only
  tabElm.setAttribute("className", "offTab0");
 }
 else // Next is clicked
 {
  tabElm.setAttribute("class", "overTab");
  // for IE only
  tabElm.setAttribute("className", "overTab");

  tabElm = document.getElementById("wzTab" + oldStep + "0");
  tabElm.setAttribute("class", "overTab0");
  // for IE only
  tabElm.setAttribute("className", "overTab0");
 }

 document.getElementById("wzTabDiv" + oldStep).style.display = "none";
 document.getElementById("wzTabDiv" + newStep).style.display = "block";

 if(oldStep == 2 && newStep == 1)
 {
  document.getElementById("wzBtnBack").style.display = "none";
 }
 
 if(oldStep == 1 && newStep == 2)
 {
  document.getElementById("wzBtnBack").style.display = "block";
 }

 if(oldStep == 4 && newStep == 5)
 {
  document.getElementById("wzBtnNext").style.display = "none";
  document.getElementById("wzBtnSubmit").style.display = "block";
 }

 if(oldStep == 5 && newStep == 4)
 {
  document.getElementById("wzBtnNext").style.display = "block";
  document.getElementById("wzBtnSubmit").style.display = "none";
 }

 curStep = newStep;
}

</script>
</head>

<body>
<div class="container">
<!-- header starts -->
<div id="pageHeader">
 <!-- dropdown menu starts-->
 <ul id="nav" class="dropdown">
<?php include("dropmenu.php")?>
 </ul>
 <!-- dropdown menu ends-->
</div>
<!-- header ends -->

<!-- main content starts -->
<img src="images/banner.jpg" />
<div id="content">
<a name="b"></a>
<h2>Request a Quote</h2>
<p class="compactText" style="margin-bottom: 0px; color: #407040">Please help us to prepare your adventure of a lifetime by completing the following tailor-made travel request form:</p>
<div style="margin-top: 20px; padding-bottom: 26px; border-top: 3px solid #20b030; border-bottom: 3px solid #20b030">
<ul id="wzTabs">
 <li id="wzTab1" class="onTab">Step 1</li>
 <li id="wzTab10" class="offTab0">&nbsp;</li>
 <li id="wzTab2" class="offTab">Step 2</li>
 <li id="wzTab20" class="offTab0">&nbsp;</li>
 <li id="wzTab3" class="offTab">Step 3</li>
 <li id="wzTab30" class="offTab0">&nbsp;</li>
 <li id="wzTab4" class="offTab">Step 4</li>
 <li id="wzTab40" class="offTab0">&nbsp;</li>
 <li id="wzTab5" class="offTab">Final Step</li>
</ul>
</div>
<form action="quote_process.php" method="post" name="quoteForm" id="quoteForm">
<div id="wzTabDiv1">
<h2>Personal Information</h2>
<div class="fmTextDivL">First Name*:<input class="fmText posL120" type="text" name="firstName" /></div>
<div class="fmTextDivR">Last Name*:<input class="fmText posL120" type="text" name="lastName" /></div>
<div class="fmTextDivL">e-mail*:<input class="fmText posL120" type="text" name="emailAdr" /></div>
<div class="fmTextDivR">Telephone:<input class="fmText posL120" type="text" name="tel" /></div>
<div class="fmTextDivL">Address:<input class="fmText posL120" type="text" name="adr" /></div>
<div class="fmTextDivR">Town:<input class="fmText posL120" type="text" name="town" /></div>
<div class="fmTextDivL">Country*:
<select name="country" class="fmList posL120" onchange="updateState(this[this.selectedIndex].value)">
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
</select>
</div>
<div class="fmTextDivR" id="stateDiv">State:<input class="fmText posL120" type="text" name="state" /></div>
<br clear="all" />
<div class="fmTextDiv" style="margin-top: 30px">How did you hear about us?
<select name="refSrc" class="fmList posL" style="left: 270px">
<option value="" selected="selected">Please select&nbsp;&gt;&gt;</option>
<option value="Internet">Internet</option>
<option value="Magazine">Magazine</option>
<option value="Friend">Friend</option>
<option value="Newspaper">Newspaper</option>
<option value="Travel show">Travel show</option>
</select> </div>
</div>

<div id="wzTabDiv2" style="display: none">
<h2>Travel Plans</h2>
<div class="fmTextDiv">Name your trip (optional):<input class="fmText posL" type="text" name="tripName" style="left: 215px; width: 500px" /></div>
<div class="fmTextDivL" style="height: 152px">
<p class="fmDivTitle">When would you like to travel?</p>
<div class="fmSubDiv">Arrival date*:<input class="fmDate" type="text" name="arvDate" /> <a href="javascript:show_calendar('document.quoteForm.arvDate', document.quoteForm.arvDate.value)"><img class="fmCalImg" src="js/ts_picker/cal.gif" title="Click here to pick up the date"></a></div>
<div class="fmSubDiv">Departure date*:<input class="fmDate" type="text" name="dptDate" /> <a href="javascript:show_calendar('document.quoteForm.dptDate', document.quoteForm.dptDate.value)"><img class="fmCalImg" src="js/ts_picker/cal.gif" title="Click here to pick up the date"></a></div>
<div class="fmSubDiv">Are dates flexible? <input type="radio" name="flexDate" value="Yes" />Yes <input type="radio" name="flexDate" value="No" checked="checked" />No</div>
<div class="fmSubDiv">Entry point: <select class="fmList posL" name="entryPnt" style="width: 250px">
<option value="" selected="selected">Please select&nbsp;&gt;&gt;</option>
<option value="Juan Santamaria (SJO)">Juan Santamar&iacute;a Intl. Airport (SJO)</option>
<option value="Daniel Oduber (LIR)">Daniel Oduber Intl. Airport (LIR)</option>
<option value="Tobias Bolano (SYQ)">Tob&iacute;as Bola&ntilde;o Intl. Airport (SYQ)</option>
<option value="Limon (LIO)">Lim&oacute;n Intl. Airport (LIO)</option>
<option value="Penas Blancas (Nicaragua)">Pe&ntilde;as Blancas Border (Nicaragua)</option>
<option value="Paso Canoas (Panama)">Paso Canoas Border (Panam&aacute;)</option>
<option value="Sixaola-Guabito (Panama)">Sixaola-Guabito Border (Panam&aacute;)</option>
<option value="Limon Seaport (CRLIO)">Lim&oacute;n Seaport, Caribbean (CRLIO)</option>
<option value="Puntarenas (CRPAS)">Puntarenas Seaport, Pacific (CRPAS)</option>
<option value="Caldera (CRCAL)">Caldera Seaport, Pacific (CRCAL)</option>
<option value="Quepos (CRXQP)">Quepos Seaport, Pacific (CRXQP)</option>
<option value="Golfito (CRGLF)">Golfito Seaport, Pacific</option>
</select>
</div>
</div>

<div class="fmTextDivR" style="height: 152px">
<p class="fmDivTitle">Number of travellers:</p>
<div class="fmSubDiv">Number of adults*: <input class="fmNum posL170" type="text" name="nAdult" /></div>
<div class="fmSubDiv">Number of children: <input class="fmNum posL170" type="text" name="nKid" /></div>
<div class="fmSubDiv">Ages of the children: <input class="fmText posL170" type="text" name="ageKid" style="width: 167px" /></div>
<div class="fmSubDiv">People with walking disabilities: <input class="fmNum posL" type="text" name="nDis" /></div>
</div>
<br clear="all" />
<div class="fmTextDiv" style="clear: both">Number of rooms required? <img class="paxImg" src="images/pax.gif" title="Single Room" /> <select class="fmList posL" name="nRoomS" style="width: 40px">
<option value="0" selected="selected">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9+">9 or more</option>
</select>
<img class="paxImg" src="images/pax.gif" style="margin-left: 70px" title="Double Room" /><img class="paxImg" src="images/pax.gif" title="Double Room" /> <select class="fmList posL" name="nRoomD" style="width: 40px">
<option value="0">0</option>
<option value="1" selected="selected">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9+">9 or more</option>
</select>
<img class="paxImg" src="images/pax.gif" style="margin-left: 70px" title="Triple Room" /><img class="paxImg" src="images/pax.gif" title="Triple Room" /><img class="paxImg" src="images/pax.gif" title="Triple Room" /> <select class="fmList posL" name="nRoomT" style="width: 40px">
<option value="0" selected="selected">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9+">9 or more</option>
</select>
<img class="paxImg" src="images/pax.gif" style="margin-left: 70px" title="Quadruple Room" /><img class="paxImg" src="images/pax.gif" title="Quadruple Room" /><img class="paxImg" src="images/pax.gif" title="Quadruple Room" /><img class="paxImg" src="images/pax.gif" title="Quadruple Room" /> <select class="fmList posL" name="nRoomQ" style="width: 40px">
<option value="0" selected="selected">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9+">9 or more</option>
</select></div>
<div class="fmTextDiv">Preferred level of accommodation?* <select class="fmList posL" name="lvRoom" style="width: 376px; margin-left: 33px">
<option value="" selected="selected">Please select &gt;&gt;</option>
<option value="Standard">Standard (up to $125/room/night)</option>
<option value="Superior">Superior (up to $225/room/night)</option>
<option value="Deluxe">Deluxe (up to $375/room/night)</option>
<option value="Luxury">Luxury (over $375/room/night)</option>
<option value="Jungle Lodges">Jungle Lodges ($100-150/room/night)</option>
</select></div>

<div class="fmTextDiv">What is the primary focus of your trip?* <select class="fmList posL" id="tripFocus" name="tripFocus" style="width: 376px" onchange="if(this.selectedIndex == 21){this.style.width = '100px'; document.getElementById('tripFocusO').style.display = 'inline'}else{this.style.width = '376px'; document.getElementById('tripFocusO').style.display = 'none'}">
<option value="" selected="selected">Please select&nbsp;&gt;&gt;</option>
<option value="active adventure">Active adventure</option>
<option value="anniversary celebration">Anniversary celebration</option>
<option value="all inclusive resorts">All inclusive resorts</option>
<option value="beach relaxation">Beach relaxation</option>
<option value="bird-watching">Bird-watching</option>
<option value="car rental and self drive">Car rental &amp; self drive</option>
<option value="educational and study">Educational &amp; study</option>
<option value="family getaway">Family getaway (travelling with children)</option>
<option value="friends/college reunion">Friends/College reunion</option>
<option value="gay/lesbian">Gay/Lesbian</option>
<option value="group">Group (special common interest)</option>
<option value="honeymoon">Honeymoon</option>
<option value="incentive/reward trip">Incentive/Reward trip</option>
<option value="kosher/kashrut">Kosher/Kashrut</option>
<option value="luxury travel">Luxury travel</option>
<option value="nature and wildlife">Nature &amp; wildlife</option>
<option value="philanthropic">Philanthropic</option>
<option value="wedding">Wedding</option>
<option value="wellness and spa">Wellness &amp; spa</option>
<option value="yoga and meditation">Yoga &amp; meditation</option>
<option value="other">Other</option>
</select><input type="text" id="tripFocusO" name="tripFocusO" style="margin-left: 110px; width: 310px; display: none" />
</div>
</div>

<div id="wzTabDiv3" style="display: none">
<h2>Areas of Interest</h2>
<div class="fmTextDiv" style="height: 370px">
<p class="fmDivTitle">Please select the locations that you want to visit during your trip:</p>
<table class="fmCkTbl2">
<tr>
<td><input type="checkbox" name="tripAreas[]" id="tripAreas1" value="San Jose" />San Jose City <span class="descText2G">(coffee estates, museums)</span></td>
<td><input type="checkbox" name="tripAreas[]" id="tripAreas2" value="La Fortuna" />La Fortuna Area <span class="descText2G">(Arenal Volcano, hot springs)</span></td>
</tr>
<tr>
<td><input type="checkbox" name="tripAreas[]" id="tripAreas3" value="Manuel Antonio" />Manuel Antonio/Quepos</td>
<td><input type="checkbox" name="tripAreas[]" id="tripAreas4" value="Central Pacific Coast" />Central Pacific Coast <span class="descText2G">(Carara, Esterillos)</span></td>
</tr>
<tr>
<td><input type="checkbox" name="tripAreas[]" id="tripAreas5" value="Nicoya Peninsula" />Nicoya Peninsula <span class="descText2G">(Tambor, Montezuma)</span></td>
<td><input type="checkbox" name="tripAreas[]" id="tripAreas6" value="Monteverde" />Monteverde &amp; Sta. Elena Cloud Forest</td>
</tr>
<tr>
<td><input type="checkbox" name="tripAreas[]" id="tripAreas7" value="Tamarindo and Langosta" />Tamarindo Bay &amp; Langosta Beach</td>
<td><input type="checkbox" name="tripAreas[]" id="tripAreas8" value="Rincon de La Vieja" />Rincon de La Vieja Volcano</td>
</tr>
<tr>
<td><input type="checkbox" name="tripAreas[]" id="tripAreas9" value="Sarapiqui" />Sarapiqui Rain Forest <span class="descText2G" style="font-size: 12px">(Aerial Tram, Tirimbina Reserve)</span></td>
<td><input type="checkbox" name="tripAreas[]" id="tripAreas10" value="San Gerardo de Dota" />San Gerardo de Dota <span class="descText2G" style="font-size: 12px">(Cloud Forest, Quetzal Sactuary)</span></td>
</tr>
<tr>
<td><input type="checkbox" name="tripAreas[]" id="tripAreas11" value="Tortuguero" />Tortuguero Jungle Canals &amp; Mangrove swamps</td>
<td><input type="checkbox" name="tripAreas[]" id="tripAreas12" value="Guanacaste Beach" />Guanacaste Beaches <span class="descText2G">(Papagayo Gulf, Ocotal)</span></td>
</tr>
<tr>
<td><input type="checkbox" name="tripAreas[]" id="tripAreas13" value="South Caribbean Coast" />South Caribbean Coast <span class="descText2G" style="font-size: 12px">(Cahuita, Pto. Viejo of Limon)</span></td>
<td><input type="checkbox" name="tripAreas[]" id="tripAreas14" value="South Pacific Coast" />South Pacific Coast <span class="descText2G">(Ballena Bay, Dominical)</span></td>
</tr>
<tr>
<td><input type="checkbox" name="tripAreas[]" id="tripAreas15" value="Turrialba" />Turrialba Volcano <span class="descText2G">(Guayabo site, Pacuare River)</span></td>
<td><input type="checkbox" name="tripAreas[]" id="tripAreas16" value="San Gerardo de Rivas" />San Gerardo de Rivas <span class="descText2G">(Chirripo Peak, Los Cusingos)</span></td>
</tr>
<tr>
<td><input type="checkbox" name="tripAreas[]" id="tripAreas17" value="Corcovado/Osa (W)" />Corcovado/Osa (W) <span class="descText2G" style="font-size: 12px">(Sierpe, Drake Bay, Ca&ntilde;o Island)</span></td>
<td><input type="checkbox" name="tripAreas[]" id="tripAreas18" value="Corcovado/Osa (E)" />Corcovado/Osa (E) <span class="descText2G" style="font-size: 12px">(Pto. Jimenez, Carate, La Leona)</span></td>
</tr>
<tr>
<td><input type="checkbox" name="tripAreas[]" id="tripAreas19" value="Dulce Gulf and Burica" />Dulce Gulf &amp; Burica Peninsula <span class="descText2G" style="font-size: 12px">(Playa Nicuesa, Tiskita)</span></td>
<td><input type="checkbox" name="tripAreas[]" id="tripAreas20" value="Remote jungle and mountain" />Remote jungle lodges &amp; mountain retreats</td>
</tr>
<tr></tr>
<td colspan="2"><input type="checkbox" name="tripAreas[]" id="tripAreas21" value="other" onclick="switchHidden('tripAreasO')" />Other <input type="text" id="tripAreasO" name="tripAreasO" style="margin-left: 5px; width: 640px; visibility: hidden" /></td>
</tr>
</table>
</div>
</div>

<div id="wzTabDiv4" style="display: none">
<h2>Activities of Interest</h2>
<div class="fmTextDiv"><p class="fmDivTitle">What activities would you like to include on your trip?</p></div>
<div class="fmTextDiv" style="height: 130px"><p class="fmDivTitle">Water Activities</p>
<table class="fmCkTbl3">
<tr>
<td><input type="checkbox" name="tripActs[]" id="tripActs1" value="boat excursion" /><span style="font-size: 12px">Boat excursions on lakes and rivers</span></td>
<td><input type="checkbox" name="tripActs[]" id="tripActs2" value="canoa" />Canoeing</td>
<td><input type="checkbox" name="tripActs[]" id="tripActs3" value="canyoning/rappelling" /><span style="font-size: 12px">Canyoning/Rappelling down waterfalls</span></td>
</tr>
<tr>
<td><input type="checkbox" name="tripActs[]" id="tripActs4" value="floating safari C1" />Floating safari (Class I)</td>
<td><input type="checkbox" name="tripActs[]" id="tripActs5" value="kayaking" />Kayaking/Snorkelling</td>
<td><input type="checkbox" name="tripActs[]" id="tripActs6" value="scuba diving" />Scuba diving</td>
</tr>
<tr>
<td><input type="checkbox" name="tripActs[]" id="tripActs7" value="sport fishing" />Sport fishing</td>
<td><input type="checkbox" name="tripActs[]" id="tripActs8" value="surfing" />Surfing</td>
<td><input type="checkbox" name="tripActs[]" id="tripActs9" value="rafting C2-4" />Whitewater rafting (Class II-IV)</td>
</tr>
</table>
</div>
<div class="fmTextDiv" style="height: 265px"><p class="fmDivTitle">Land Activities</p>
<table class="fmCkTbl3">
<tr>
<td><input type="checkbox" name="tripActs[]" id="tripActs10" value="archaeological" />Archaeological sites</td>
<td><input type="checkbox" name="tripActs[]" id="tripActs11" value="atv" />ATV tours</td>
<td><input type="checkbox" name="tripActs[]" id="tripActs12" value="bicycling" />Bicycling</td>
</tr>
<tr>
<td><input type="checkbox" name="tripActs[]" id="tripActs13" value="bird-watching" />Bird-watching tours</td>
<td><input type="checkbox" name="tripActs[]" id="tripActs14" value="botanical" />Botanical gardens</td>
<td><input type="checkbox" name="tripActs[]" id="tripActs15" value="farm/coffee" /><span style="font-size: 12px">Farms (fruit, organic) / Coffee estates</span></td>
</tr>
<tr>
<td><input type="checkbox" name="tripActs[]" id="tripActs16" value="golf" />Golfing</td>
<td><input type="checkbox" name="tripActs[]" id="tripActs17" value="hiking" />Hiking/Trekking</td>
<td><input type="checkbox" name="tripActs[]" id="tripActs18" value="horse" />Horseback riding</td>
</tr>
<tr>
<td><input type="checkbox" name="tripActs[]" id="tripActs19" value="hot spring" />Hot springs/Spa</td>
<td><input type="checkbox" name="tripActs[]" id="tripActs20" value="jeep safari" />Jeep safari / 4x4 adventure</td>
<td><input type="checkbox" name="tripActs[]" id="tripActs21" value="museum/theatre" />Museums/Theatres</td>
</tr>
<tr>
<td><input type="checkbox" name="tripActs[]" id="tripActs22" value="natural history walk" />Natural history walks</td>
<td><input type="checkbox" name="tripActs[]" id="tripActs23" value="night walk" />Night walks</td>
<td><input type="checkbox" name="tripActs[]" id="tripActs24" value="philanthropic" />Philanthropic projects</td>
</tr>
<tr>
<td><input type="checkbox" name="tripActs[]" id="tripActs25" value="volcano" />Volcanoes</td>
<td><input type="checkbox" name="tripActs[]" id="tripActs26" value="waterfall/bufferfly" />Waterfalls/Butterfly nursery</td>
<td><input type="checkbox" name="tripActs[]" id="tripActs27" value="wildlife" />Wildlife observation</td>
</tr>
<tr>
<td><input type="checkbox" name="tripActs[]" id="tripActs28" value="yoga" />Yoga</td>
</tr>
</table>
</div>
<div class="fmTextDiv" style="height: 95px"><p class="fmDivTitle">Aerial Activities</p>
<table class="fmCkTbl3">
<tr>
<td><input type="checkbox" name="tripActs[]" id="tripActs29" value="aerial tram" />Aerial Tram</td>
<td><input type="checkbox" name="tripActs[]" id="tripActs30" value="bungee" />Bungee jumping</td>
<td><input type="checkbox" name="tripActs[]" id="tripActs31" value="canopy" />Canopy-Zip lining/Tree climbing</td>
</tr>
<tr>
<td><input type="checkbox" name="tripActs[]" id="tripActs32" value="hanging bridge" />Hanging bridges walks</td>
<td><input type="checkbox" name="tripActs[]" id="tripActs33" value="balloon" />Hot-air ballooning</td>
<td><input type="checkbox" name="tripActs[]" id="tripActs34" value="paragliding" />Paragliding</td>
</tr>
</table>
</div>
<div class="fmTextDiv" style="height: 32px">
<input type="checkbox" name="tripActs[]" id="tripActs35" value="other" onclick="switchHidden('tripActsO')" />Other <input type="text" id="tripActsO" name="tripActsO" style="margin-left: 5px; width: 640px; visibility: hidden" />
</div>
</div>

<div id="wzTabDiv5" style="display: none">
<h2>Getting Around</h2>
<div class="fmTextDiv"><p class="fmDivTitle">What is your preferred type of transportation?</p></div>
<div class="fmTextDiv" style="height: 65px"><p class="fmDivTitle">Economy</p>
<table class="fmCkTbl2">
<tr>
<td><input type="checkbox" name="tripTrans[]" id="tripTrans1" value="Rentacar" onclick="switchHidden('tripTransRType')" />Car rental <select name="tripTransRType" id="tripTransRType" style="width: 140px; margin-left: 25px; visibility: hidden"><option value="manual" selected="selected">Manual type</option><option value="automatic">Automatic type</option></select></td>
<td><input type="checkbox" name="tripTrans[]" id="tripTrans2" value="Non-Private" />Non-private transfer <span class="descText2G" style="font-size: 12px">(door to door shuttle on shared basis)</span></td>
</tr>
</table>
</div>
<div class="fmTextDiv" style="height: 100px"><p class="fmDivTitle">Moderate</p>
<table class="fmCkTbl2">
<tr>
<td><input type="checkbox" name="tripTrans[]" id="tripTrans3" value="PT+Bilingual Driver" />Private transfer with bilingual driver</td>
<td><input type="checkbox" name="tripTrans[]" id="tripTrans4" value="PT+Bilingual Guide" />Private transfer with bilingual guide</td>
</tr>
<tr>
<td><input type="checkbox" name="tripTrans[]" id="tripTrans5" value="PT+Non-bilingual Driver" />Private transfer with non-bilingual driver <span class="descText2G">(Taxis, 4x4)</span></td>
<td><input type="checkbox" name="tripTrans[]" id="tripTrans6" value="Domestic Flight" />Domestic flights (where available)</td>
</tr>
</table>
</div>
<div class="fmTextDiv" style="height: 65px"><p class="fmDivTitle">Deluxe</p>
<table class="fmCkTbl2">
<tr>
<td><input type="checkbox" name="tripTrans[]" id="tripTrans7" value="PT+BG throughout" />Private bilingual guide &amp; transportation throughout </td>
<td><input type="checkbox" name="tripTrans[]" id="tripTrans8" value="Private Flight" />Private chartered flights <span class="descText2G">(planes or helicopters)</span></td>
</tr>
</table>
</div>
<div class="fmTextDiv" style="height: 220px">
Please use the space below to let us know any additional comments, special needs and information regarding your trip expectations in order to consider all your travel needs when designing your tailor-made itinerary.<br />
<textarea name="comment" id="comment"></textarea>
</div>
</div>

<p style="clear: both; color: #e00000; font-family: Arial, Helvetica, sans-serif; font-size: 12px; margin-left: 10px">(fields with * are required)</p>
<div id="wzFooter" style="height: 35px; background-color: #20b030">
<ul id="wzBtns">
<li id="wzBtnSubmit" style="display: none"><a href="#b" onclick="if(validateStep(curStep, curStep + 1)){document.quoteForm.submit();}">Send</a></li>
<li id="wzBtnNext"><a href="#b" onclick="validateStep(curStep, curStep + 1)">Next &gt;</a></li>
<li id="wzBtnBack" style="display: none"><a href="#b" onclick="validateStep(curStep, curStep - 1)">&lt; Back</a></li>
<li id="wzBtnReset"><a href="#b" onclick="if(confirm('Clear all the fields and return to step 1?')){document.quoteForm.reset(); location.reload();}">Clear</a></li>
</ul>
</div>
</form>

</div>
<!-- main content ends -->

<!-- footer starts -->
<div id="footer" style="clear: both">
<?php include("footer.php")?>
</div>
<!-- footer ends -->

</div>
</body>
</html>