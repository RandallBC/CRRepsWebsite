<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <link rel="stylesheet" href="css/quote.css" type="text/css" media="screen"/>
  <script type="text/javascript" src="js/jquery.js"></script>
  <?php include "preQuote.php"; ?>

  <script>

  function displayActivities(Atype) {
    if ($("#"+Atype).is(':visible')) {
      $("#"+Atype).slideUp('fast');
    } else {
      $("#"+Atype).slideDown('fast');
    }
  }

  function closeroom() {
    $('#datosroom').slideUp('fast');
    return false;
  }

  function Agrerooms() {
    $('#datosroom').slideDown('fast');
    return false;
  }

  function Pedir() {

    var adultos = document.getElementById("adultillos").value;
    var ninos = document.getElementById("mocosos").value;
    var edades = "";

    if (ninos == 0) {
      edades = 0;
      myCreateFunction(adultos, ninos, edades);
      closeroom();
    }
    else if ((ninos != 0) && (document.getElementById("mocosedades").value != "")) {
      edades = document.getElementById("mocosedades").value.replace(" ", "-");
      myCreateFunction(adultos, ninos, edades);
      closeroom();
    }
    else {
      alert("Please Complete the Children's Age Field.");
    }
  }

  function myCreateFunction(adultos, ninos, edades) {
    var concatenados = "";
    var cont = 0;
    var arreglo = [];

    if (cont != 9) {
      var table = document.getElementById("myTable");
      var rowCount = document.getElementById('myTable').rows.length;

      var row = table.insertRow(rowCount);
      row.id = cont;
      var cell1 = row.insertCell(0);
      var cell2 = row.insertCell(1);
      var cell3 = row.insertCell(2);
      var cell4 = row.insertCell(3);
      cont++;

      cell1.innerHTML = "Room "+ cont;
      cell2.innerHTML = adultos;
      cell3.innerHTML = ninos;
      cell4.innerHTML = edades;
      concatenados = adultos +"."+ ninos +"."+ edades;
      arreglo [cont] = concatenados;
      document.getElementById('cuartoarray').value = arreglo.toString();
    } else {
      alert("Your Request Can Only Have 10 Rooms.");
    }
  }

  function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
  }

  function tripFocusOther() {
    if (document.getElementById("tripFocus").value == "otros") {
      document.getElementById("tripFocustxt").style.display = "block";
    } else {
      document.getElementById("tripFocustxt").style.display = "none";
    }
  }

  function salesAreaOther() {
    if (document.getElementById("areasother").checked) {
      document.getElementById("areasothertext").style.display = "block";
    } else {
      document.getElementById("areasothertext").style.display = "none";
    }
  }

  function salesActivityOther() {
    if (document.getElementById("activitiesother").checked) {
      document.getElementById("activitiesothertext").style.display = "block";
    } else {
      document.getElementById("activitiesothertext").style.display = "none";
    }
  }

</script>
</head>

<body onload='document.getElementById("defaultOpen").click();'>

  <div class="tab">
    <button class="tablinks" onclick="openCity(event, 'TPlanes')" id="defaultOpen">Travel Plans</button>
    <button class="tablinks" onclick="openCity(event, 'AreasInt')">Areas of Interest</button>
    <button class="tablinks" onclick="openCity(event, 'ActInt')">Activities of Interest</button>
    <button class="tablinks" onclick="openCity(event, 'GAround')">Getting Around</button>
  </div>

  <div id="TPlanes" class="tabcontent">
    <table border="0px" style="width: 800px; margin:0px auto;">
      <tr>
        <td colspan="2">
          <p>
            <label style="width: 180px;" for="nametrip">Name your Trip<span class="requiredquote">*</span></label>
            <input style="width: 300px; " id="nametrip" name="nametrip" required="required" type="text" AUTOCOMPLETE=OFF/>
          </p>
        </td>
      </tr>
      <tr>
        <td valign="top" colspan="2">
          <label style="font: 18px Candara;">When would you like to travel?</label>
        </td>
      </tr>
      <tr>
        <td>
          <p class="doubles">
            <label for="datepicker1">Arrival<span class="requiredquote">*</span></label>
            <input id="datepicker1" name="datepicker1" type="date" AUTOCOMPLETE=OFF required="required"/>

          </td>
          <td>
            <p class="doubles">
              <label for="datepicker2">Departure<span class="requiredquote">*</span></label>
              <input id="datepicker2" name="datepicker2" type="date" AUTOCOMPLETE=OFF required="required"/>
            </p>
          </td>
        </tr>

        <tr>
          <td>
            <p class="doubles">
              <label for="entryPnt">Entry Point</label>
              <select name="entryPnt" style="width: 245px;">
                <?php echo $PointsValues;?>
              </select>
            </p>
          </td>
          <td>
            <p class="doubles">
              <label for="departurePnt">Departure Point</label>
              <select name="departurePnt" style="width: 245px">
                <?php echo $PointsValues;?>
              </select>
            </p>
          </td>
        </tr>

        <tr>
          <td>
            <p class="doubles">
              <label for="flexDate" style="width: 160px;">Are dates flexible?</label>
              <select style="width: auto;" name='flexDate'>
                <option value='0' selected='selected'>No</option>
                <option value='1'>Yes</option>
              </select>
            </p>
          </td>
          <td>
            <p class="doubles">
              <label style="width: 200px;" for="disables">People with walking disabilities:</label>
              <select style="width: 50px;" name='disables' id="disables">
                <option value='0' selected='selected'>0</option>
                <option value='1'>1</option>
                <option value='2'>2</option>
                <option value='3'>3</option>
                <option value='4'>4</option>
              </select>
            </p>
          </td>
        </tr>
        <tr>
          <td colspan="2">
            <p style="width: 800px;">
              <label style="width: 300px; float: left;">Number of rooms required?</label>
              <label style="color: #FF0000; float: left; width: 300px;">( * It is Required at Least 1 Room)</label>
              <input type="text" id="cuartoarray" name="cuartoarray" style="width: auto; visibility: hidden;">
            </p>
          </td>
        </tr>

        <tr>
          <td colspan="2">
            <div id="cuartos">
              <table id="myTable">
                <tr>
                  <th></th>
                  <th>Num. of Adults</th>
                  <th>Num. of Children</th>
                  <th>Age Information</th>
                  <th style="width: 50px; display: inline; ">
                    <abbr title="Add Room"><img id="agreroom" onclick="Agrerooms()" src="images/addicon.png" alt="add room"></abbr>
                  </th>
                </tr>
              </table>
            </div>
          </td>
        </tr>
        <tr>
          <td colspan="2">
            <div id="datosroom" style="display: none;">
              <div class="content-datosroom">
                <div class="askRooms">
                  <h5>Room Request</h5>
                  <table border="0px">
                    <tr>
                      <td style="width: 80px;">Adults</td>
                      <td>
                        <select name='adultillos' id="adultillos" style="width: 80px; float: left;">
                          <option value='1' selected='selected'>1</option>
                          <option value='2'>2</option>
                          <option value='3'>3</option>
                          <option value='4'>4</option>
                        </select>
                      </td>
                      <td style="width: 80px;">Childrens</td>
                      <td>
                        <select name='mocosos' id="mocosos" style="width: 80px; float: left;">
                          <option value='0' selected='selected'>0</option>
                          <option value='1'>1</option>
                          <option value='2'>2</option>
                        </select>
                      </td>
                      <td style="width: 200px;">Children Ages</td>
                      <td colspan="2"><input type="text" required="none" placeholder="0 if no children" id="mocosedades" name="mocosedades" style="width: 150px;"/></td>
                      <td><img src="images/add.png" onclick="Pedir();" />
                        <img src="images/cancel.png" onclick="closeroom()" >
                      </td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
          </td>
        </tr>
        <tr>
          <td colspan="2">
            <p style="width: 800px;">
              <label style="width: 250px" for="loacomo">Preferred level of accommodation?<span class="requiredquote">*</span></label>
              <select id="loacomo" name="loacomo" style="width: 260px;">
                <option value="1" selected="selected">Standard (up to $125/room/night)</option>
                <option value="2">Superior (up to $225/room/night)</option>
                <option value="3">Deluxe (up to $375/room/night)</option>
                <option value="4">Luxury (over $375/room/night)</option>
                <option value="5">Jungle Lodges ($100-150/room/night)</option>
              </select>
            </p>
          </td>
        </tr>
        <tr>
          <td colspan="2">
            <p style="width: 800px;">
              <label style="width: 250px" for="tripFocus">What is the primary focus of your trip?<span class="requiredquote">*</span></label>
              <select id="tripFocus" name="tripFocus" style="width: 300px" onchange="tripFocusOther();">
                <?php echo $TFocusValues; ?>
                <option value="otros" name="otros">Others</option>
              </select>
              <input type="text" id="tripFocustxt" placeholder="Tell Us Your Focus Trip..." style="margin-left: 385px; width: 300px; display:none;" />
            </p>
          </td>
        </tr>
        <tr>
          <td colspan="2">
            <label for="fields" style="float: left; margin-left: 70px; color: #FF0000;">Fields with * are required</label>
          </td>
        </tr>
      </table>
    </div>

    <div id="AreasInt" class="tabcontent">
      <p>Please select the locations that you want to visit during your trip:</p>
      <?php echo $SalesAreas;?>
      <input type="checkbox" class="ckecksareas" id="areasother" placeholder="other" onclick="salesAreaOther();"/>Other
      <input type="text" id="areasothertext" placeholder="Please tell us your place to visit..." required="no" style="margin-left: 5px; width: 800px; display: none;"/>
    </div>

    <div id="ActInt" class="tabcontent">
      <p>What activities would you like to include on your trip?</p>
      <p id="waterA" onclick="displayActivities('waterdiv');" ><label style="width: 150px;">Water Activities</label></p>
      <div id="waterdiv" style="display: block;" ><?php echo $WaterActivities;?></div>
      <p id="landA" onclick="displayActivities('landdiv');"><label style="width: 150px;" >Land Activities</label></p>
      <div id="landdiv" style="display: none;" ><?php echo $LandActivities;?></div>
      <p id="aerialA" onclick="displayActivities('aerialdiv');"><label style="width: 150px;">Aerial Activities</label></p>
      <div id="aerialdiv" style="display: none;" ><?php echo $AerialActivities;?></div>

      <p>
        <input type="checkbox" class="ckecksareas" id="activitiesother" placeholder="Other" onclick="salesActivityOther();"/>Other
        <input type="text" id="activitiesothertext" placeholder="Please tell us your activity..." style="margin-left: 30px; width: 800px; display: none;"/>
      </p>

    </div>

    <div id="GAround" class="tabcontent">
      <p><label>What is your preferred type of transportation?</label></p>
      <p><label>Economy</label></p>
      <?php echo $TEconomy; ?>
      <p><label>Moderate</label></p>
      <?php echo $TModerate; ?>
      <p><label>Deluxe</label></p>
      <?php echo $TDeluxe; ?>

      <p style="text-align: justify;">
        Please use the space below to let us know any additional comments, special needs and
        information regarding your trip expectations in order to consider all your travel needs when
        designing your tailor-made itinerary.<br/>
        <textarea style="width: 900px; height: 50px; resize: none;" name="comment" id="comment"></textarea>
      </p>
      <div class="alertsSend">
        <div class="alertsQuotes"></div>
        <button id="registerButton" type="submit">Send</button>
      </div>
    </div>
  </body>
  </html>
