<!DOCTYPE HTML>
<html lang = "en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <link rel="stylesheet" href="css/quote.css" type="text/css" media="screen"/>
  <script type="text/javascript" src="js/jquery.js"></script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <link rel="stylesheet" href="css/jquery-confirm.min.css">
  <script type="text/javascript" src="js/jquery-confirm.min.js"></script>
  <?php 
	error_reporting(E_ERROR | E_WARNING | E_PARSE);	
	include "preQuote.php"; 
  ?>

  <script>

  var flagDate = 0;

  $( function() {
    $( "#dateInicio" ).datepicker({ minDate: 0 });
    $( "#dateFinal" ).datepicker({ minDate: 0 });
  });

  function displayActivities(Atype) {
    if ($("#"+Atype).is(':visible')) {
      $("#"+Atype).slideUp('fast');
    } else {
      $("#"+Atype).slideDown('fast');
    }
  }

  function closeActivities(Atype1, Atype2) {
    $("#"+Atype1).slideUp('fast');
    $("#"+Atype2).slideUp('fast');
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
      edades = document.getElementById("mocosedades").value;
      myCreateFunction(adultos, ninos, edades);
      closeroom();
    }
    else {
      $.alert({
        title: 'Error',
        type: 'red',
        columnClass: 'small',
        content: "Please Complete the Children's Age Field.",
        useBootstrap: false,
      });
    }
  }

  var concatenados = "";
  var cont = 0;

  function myCreateFunction(adultos, ninos, edades) {

    if (cont != 10) {
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
      concatenados = concatenados + adultos +"."+ ninos +"."+ edades+"¬";
      $("#roomArray").val(concatenados);
    } else {
      $.alert({
        title: 'Error',
        type: 'red',
        columnClass: 'small',
        content: "Your Request Can Only Have 10 Rooms.",
        useBootstrap: false,
      });
    }
  }

  function openCity(cityName) {
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
    document.getElementById(cityName+"B").className += " active";
  }

  function tripFocusOther() {
    if (document.getElementById("tripFocus").value == "otros") {
      document.getElementById("tripFocustxt").style.display = "block";
    } else {
      document.getElementById("tripFocustxt").style.display = "none";
    }
  }

  function salesAreaOther() {
    if (document.getElementById("areasOther").checked) {
      document.getElementById("areasOtherText").style.display = "block";
    } else {
      document.getElementById("areasOtherText").style.display = "none";
    }
  }

  function salesActivityOther() {
    if (document.getElementById("activitiesOther").checked) {
      document.getElementById("activitiesOtherText").style.display = "block";
    } else {
      document.getElementById("activitiesOtherText").style.display = "none";
    }
  }

  var dataTab1, dataTab2, dataTab3, dataTab4, dataTab5 = "";

  function QuoteBack(tabName){ //no se necesita revisar campos en blanco
    switch (tabName) {
      case "back1":
      openCity('TPlanes');
      break;
      case "back2":
      openCity('AreasInt');
      break;
      case "back3":
      openCity('ActInt');
      $("#quoteMsj").html("");
      break;
      case "back4":
      openCity('GAround');
      break;
      default:
    }
  }

  var summaryAreas = "";
  var summaryActivities = "";
  var summaryTransfer = "";
  var summaryTotal = "";


  function QuoteNext(tabName){

    switch (tabName) {
      case "next1":
      var tripName = $('#nametrip').val();                                                                         /*required*/
      var tripArrival = $('#dateInicio').val();                                                                    /*required*/
      var tripDeparture = $('#dateFinal').val();                                                                   /*required*/
      var entryPoint = $('#entryPnt').val();
      var departurePoint = $('#departurePnt').val();
      var flexDate = $('#flexDate').val();
      var disables = $('#disables').val();
      var tripRooms = $('#roomArray').val();                                                                       /*required*/
      var tripAccomodation = $('#loacomo').val();                                                                  /*required*/
      var tripFocus = ($('#tripFocus').val() == 'otros') ? $('#tripFocustxt').val() : $('#tripFocus').val();       /*required*/

      if ((tripName == "") || (tripArrival == "") || (tripDeparture == "") || (tripRooms == "") || (tripAccomodation == "") || (tripFocus == "")) {
        $.alert({
          title: 'Error',
          type: 'red',
          columnClass: 'small',
          content: "Please Complete all Required Fields.",
          useBootstrap: false,
        });
      }
      else if ( flagDate == 1) {
        checkDate();
      } else {
        dataTab1 = {Txt_tripName:tripName, Txt_tripArrival:tripArrival, Txt_tripDeparture:tripDeparture, Txt_entryPoint:entryPoint, Txt_departurePoint:departurePoint, Txt_flexDate:flexDate, Txt_disables:disables, Txt_tripRooms:tripRooms, Txt_tripAccomodation:tripAccomodation, Txt_tripFocus:tripFocus};
        console.log(dataTab1);
        openCity('AreasInt');
      }
      break;
      case "next2":
      var areasdeInteres = "";
      summaryAreas = "";
      $('.DA:checked').each( function() {
        if (($(this).attr("id") != "") && ($(this).attr("id") != "areasOther")) {
          areasdeInteres += $(this).attr("id") + "-";
          summaryAreas += $(this).attr("value") + " - ";
        }
      });
      if (areasdeInteres == "") {
        $.alert({
          title: 'Error',
          type: 'red',
          columnClass: 'small',
          content: "Please Select at Least One Destination to Visit.",
          useBootstrap: false,
        });
      } else {
        if (($("#areasOther").is(':checked')) && ($("#areasOtherText").val() != "")) {
          areasdeInteres += "¬" + $("#areasOtherText").val();
          summaryAreas += $("#areasOtherText").val()
        } else {
          areasdeInteres += "¬";
        }
        console.log(areasdeInteres);
        dataTab2 = {a_o_i:areasdeInteres};
        openCity('ActInt');
      }

      break;
      case "next3":
      var actdeInteres = "";
      summaryActivities = "";
      $('.SA:checked').each( function() {
        if (($(this).attr("id") != "") && ($(this).attr("id") != "activitiesOther")) {
          actdeInteres += $(this).attr("id") + "-";
          summaryActivities += $(this).attr("value") + " - ";
        }
      }
    );
    if (actdeInteres == "") {
      $.alert({
        title: 'Error',
        type: 'red',
        columnClass: 'small',
        content: "Please Select at Least One Activity.",
        useBootstrap: false,
      });
    } else {
      if (($("#activitiesOther").is(':checked')) && ($("#activitiesOtherText").val() != "")) {
        actdeInteres += "¬" + $("#activitiesOtherText").val();
        summaryActivities += $("#activitiesOtherText").val();
      } else {
        actdeInteres += "¬";
      }
      console.log(actdeInteres);
      dataTab3 = {ac_o_i:actdeInteres};
      openCity('GAround');
    }
    break;

    case "next4":
    var garound_data = "";
    summaryTransfer = "";
    $('.GA:checked').each( function() {
      if ($(this).attr("id") != "") {
        garound_data += $(this).attr("id") + "-";
        summaryTransfer += $(this).attr("value") + " - ";
      }
    }
  );
  if (garound_data == "") {
    $.alert({
      title: 'Error',
      type: 'red',
      columnClass: 'small',
      content: "Please Select your Preferred Type of Transportation.",
      useBootstrap: false,
    });
  } else {
    var Addtnl_Cmt = $("#quoteComment").val();
    if (Addtnl_Cmt != "") { garound_data += "¬" + Addtnl_Cmt; summaryTransfer += Addtnl_Cmt; } else {garound_data += "¬";}
    console.log(garound_data);
    dataTab4 = {gAroundVal:garound_data};
    openCity('Summary');
  }

  var summaryFlexDate = ($('#flexDate').val() == 0)? "No":"Yes";
  var summarytripFocus = ($('#tripFocus').val() == 'otros') ? $('#tripFocustxt').val() : $('#tripFocus option:selected').text();
  var summaryRooms = "";
  var r2s = $('#roomArray').val().split('¬');
  for ($i=0; $i < r2s.length; $i++) {
    if (r2s[$i] != "") {
      r2s2 = r2s[$i].split('.');
      singPlur = (r2s2[0] > 1) ? "Adults" : "Adult";
      sumChild = (r2s2[1] == 1) ? "and " + r2s2[1] + " children of "+ r2s2[2] : "";
      sumChildAges = (r2s2[1] > 1) ? "and " + r2s2[1] + " childrens of "+ r2s2[2] : "";
      summaryRooms = summaryRooms + "1 room for "+ r2s2[0] +" "+ singPlur + " " + sumChild + sumChildAges+ "<br>";
    }
  }

  summaryTotal ="<table id='sumTable'>"+
  "<tr><td class='sumIzk'><b>Trip Name</b></td><td>"+$('#nametrip').val()+"</td></tr>"+
  "<tr><td class='sumIzk'><b>Arrival Date</b></td><td>"+$('#dateInicio').val()+"</td></tr>"+
  "<tr><td class='sumIzk'><b>Departure Date</b></td><td>"+$('#dateFinal').val()+"</td></tr>"+
  "<tr><td class='sumIzk'><b>Entry Point</b></td><td>"+$('#entryPnt option:selected').text()+"</td></tr>"+
  "<tr><td class='sumIzk'><b>Departure Point</b></td><td>"+$('#departurePnt option:selected').text()+"</td></tr>"+
  "<tr><td class='sumIzk'><b>Flexible Dates</b></td><td>"+summaryFlexDate+"</td></tr>"+
  "<tr><td class='sumIzk'><b>People with<br>walking disabilities</b></td><td>"+$('#disables').val()+"</td></tr>"+
  "<tr><td class='sumIzk'><b>Rooms</b> </td><td>"+summaryRooms+"</td></tr>"+
  "<tr><td class='sumIzk'><b>Preferred Accommodation</b></td><td>"+$('#loacomo option:selected').text()+"</td></tr>"+
  "<tr><td class='sumIzk'><b>Primary Trip Focus </b></td><td>"+summarytripFocus+"</td></tr>"+
  "<tr><td class='sumIzk'><b>Destinations to visit</b></td><td>"+ summaryAreas+"</td></tr>"+
  "<tr><td class='sumIzk'><b>Activities required</b></td><td>"+summaryActivities+"</td></tr>"+
  "<tr><td class='sumIzk'><b>Preferred Transportation</b></td><td>"+summaryTransfer+"</td></tr>"+
  "</table>";

  summaryToEmail =
  "\nTrip Name: "+$('#nametrip').val()+"\n\n"+
  "Arrival Date: "+$('#dateInicio').val()+"\n\n"+
  "Departure Date: "+$('#dateFinal').val()+"\n\n"+
  "Entry Point: "+$('#entryPnt option:selected').text()+"\n\n"+
  "Departure Point: "+$('#departurePnt option:selected').text()+"\n\n"+
  "Flexible Dates: "+summaryFlexDate+"\n\n"+
  "People with walking disabilities: "+$('#disables').val()+"\n\n"+
  "Rooms: "+summaryRooms+"\n\n"+
  "Preferred Accommodation: "+$('#loacomo option:selected').text()+"\n\n"+
  "Primary Trip Focus: "+summarytripFocus+"\n\n"+
  "Destinations to visit: "+ summaryAreas+"\n\n"+
  "Activities required: "+summaryActivities+"\n\n"+
  "Preferred Transportation: "+summaryTransfer;

  dataTab5 = {summarySend:summaryToEmail};
  $("#qSummary").html(summaryTotal);
  break;

  case "next5":
  var image = new Image();
  image.src = 'images/proc.gif';
  $("#quoteMsj").html(image);
  perm=false;

  var resultJson = $.extend(dataTab1, dataTab2, dataTab3, dataTab4, dataTab5);

  $.ajax({
    type: "POST",
    url: "quote_proc.php",
    data: resultJson,
    dataType: 'json',
    success: function(respQuote) {
      setTimeout(function(){
        document.getElementById("quoteMsj").style.display = "none";
        location.href = "requesta.php";
      }, 5000);
      if (respQuote == 111111) {
        $("#quoteMsj").html("<p class='green'>Your request has been successfully sent, We will contact you as soon as posible.</p>");
      } else {
        $("#quoteMsj").html("<p class='red'>There was a problem processing your request, please contact system administrator.</p>");
      }
    }
  });
  break;
  default:
} //fin switch
} //fin function

function checkEdades(){
  if ($("#mocosos").val() == "0") {
    $("#mocosedades").val("");
  }
}

function checkDate() {
  var cArri = $("#dateInicio").val();
  var cDepa = $("#dateFinal").val();
  if (cArri >= cDepa) {
    $.alert({
      title: 'Error',
      type: 'red',
      columnClass: 'small',
      content: "Departure Date Cannot be Less Than Arrivals or the Same Date.",
      useBootstrap: false,
    });
    flagDate = 1;
  } else { flagDate = 0; }
}

</script>
</head>

<body onload="openCity('TPlanes');">

  <div class="tab">
    <button id="TPlanesB" class="tablinks">Travel Plans</button>
    <button id="AreasIntB" class="tablinks">Destinations</button>
    <button id="ActIntB" class="tablinks">Activities of Interest</button>
    <button id="GAroundB" class="tablinks">Getting Around</button>
    <button id="SummaryB" class="tablinks">Summary</button>
  </div>

  <div id="TPlanes" class="tabcontent">
    <table border="0px" style="width: 800px; margin:0px auto;">
      <tr>
        <td colspan="2">
          <p>
            <label style="width: 180px;" for="nametrip">Name your Trip<span class="requiredquote">*</span></label>
            <input style="width: 300px; " id="nametrip" required="required" type="text" />
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
            <label for="dateInicio">Arrival<span class="requiredquote">*</span></label>
            <input id="dateInicio" type="text" required="required"/>
          </p>
        </td>
        <td>
          <p class="doubles">
            <label for="dateFinal">Departure<span class="requiredquote">*</span></label>
            <input id="dateFinal" type="text" required="required" onchange="checkDate();"/>
          </p>
        </td>
      </tr>

      <tr>
        <td>
          <p class="doubles">
            <label for="entryPnt">Entry Point</label>
            <select id="entryPnt" style="width: 245px;">
              <?php echo $PointsValues;?>
            </select>
          </p>
        </td>
        <td>
          <p class="doubles">
            <label for="departurePnt">Departure Point</label>
            <select id="departurePnt" style="width: 245px">
              <?php echo $PointsValues;?>
            </select>
          </p>
        </td>
      </tr>

      <tr>
        <td>
          <p class="doubles">
            <label for="flexDate" style="width: 160px;">Are dates flexible?</label>
            <select style="width: auto;" id='flexDate'>
              <option value='0' selected='selected'>No</option>
              <option value='1'>Yes</option>
            </select>
          </p>
        </td>
        <td>
          <p class="doubles">
            <label style="width: 200px;" for="disables">People with walking disabilities:</label>
            <select style="width: 50px;" id='disables'>
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
          <p style="height: 20px;">
            <label style="width: 800px; float: left;">Number of rooms required?<span class="requiredquote">&nbsp;&nbsp;( * It's Required at Least 1 Room)</span></label>
            <input type="hidden" id="roomArray" style="width: auto;" />
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
                        <option value='1'>1</option>
                        <option value='2' selected='selected'>2</option>
                        <option value='3'>3</option>
                        <option value='4'>4</option>
                      </select>
                    </td>
                    <td style="width: 80px;">Childrens</td>
                    <td>
                      <select name='mocosos' id="mocosos" onchange="checkEdades();" style="width: 80px; float: left;">
                        <option value='0' selected='selected'>0</option>
                        <option value='1'>1</option>
                        <option value='2'>2</option>
                      </select>
                    </td>
                    <td style="width: 200px;">Children Ages</td>
                    <td colspan="2"><input type="text" required="none" placeholder="0 if no children" id="mocosedades" style="width: 150px;"/></td>
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
            <select id="loacomo" style="width: 260px;">
              <option value="1" name="Standard (up to $125/room/night)" selected="selected">Standard (up to $125/room/night)</option>
              <option value="2" name="Superior (up to $225/room/night)" >Superior (up to $225/room/night)</option>
              <option value="3" name="Deluxe (up to $375/room/night)" >Deluxe (up to $375/room/night)</option>
              <option value="4" name="Luxury (over $375/room/night)" >Luxury (over $375/room/night)</option>
              <option value="5" name="Jungle Lodges ($100-150/room/night)" >Jungle Lodges ($100-150/room/night)</option>
            </select>
          </p>
        </td>
      </tr>
      <tr>
        <td colspan="2">
          <p style="width: 800px;">
            <label style="width: 250px" for="tripFocus">What is the primary focus of your trip?<span class="requiredquote">*</span></label>
            <select id="tripFocus" style="width: 300px" onchange="tripFocusOther();">
              <?php echo $TFocusValues; ?>
              <option value="otros" id="otros">Others</option>
            </select>
            <input type="text" id="tripFocustxt" placeholder="Tell Us Your Focus Trip..." style="margin-left: 385px; width: 300px; display:none;" />
          </p>
        </td>
      </tr>
      <tr>
        <td colspan="2">
          <label for="fields" style="float: left; margin-left: 70px; color: #FF0000;">* Required Field</label>
        </td>
      </tr>
      <tr>
        <td colspan="2">
          <div class="reqButtons">
            <input type="button" class="reqNext" onclick="QuoteNext('next1');" value="Next"></input>
          </div>
        </td>
      </tr>
    </table>
  </div>

  <div id="AreasInt" class="tabcontent">
    <p>Please select the locations that you want to visit during your trip:</p>
    <?php echo $SalesAreas;?>
    <input type="checkbox" class="ckecksareas" id="areasOther" placeholder="Other" onclick="salesAreaOther();"/>Other
    <input type="text" id="areasOtherText" placeholder="Please tell us your place to visit..." required="no" style="margin-left: 5px; width: 700px; display: none;"/>
    <div class="reqButtons">
      <input type="button" class="reqNext" onclick="QuoteNext('next2');" value="Next"></input>
      <input type="button" class="reqNext" onclick="QuoteBack('back1');" value="Back"></input>
    </div>
  </div>

  <div id="ActInt" class="tabcontent">
    <p>What activities would you like to include on your trip?</p>
    <p id="waterA" onclick="displayActivities('waterdiv'); closeActivities('landdiv','aerialdiv');" ><label style="width: 150px;">Water Activities</label></p>
    <div id="waterdiv" style="display: block;" ><?php echo $WaterActivities;?></div>
    <p id="landA" onclick="displayActivities('landdiv'); closeActivities('waterdiv','aerialdiv');"><label style="width: 150px;" >Land Activities</label></p>
    <div id="landdiv" style="display: none;" ><?php echo $LandActivities;?></div>
    <p id="aerialA" onclick="displayActivities('aerialdiv'); closeActivities('waterdiv','landdiv');"><label style="width: 150px;">Aerial Activities</label></p>
    <div id="aerialdiv" style="display: none;" ><?php echo $AerialActivities;?></div>

    <p>
      <input type="checkbox" class="ckecksareas" id="activitiesOther" placeholder="Other" onclick="salesActivityOther();"/>Other
      <input type="text" id="activitiesOtherText" placeholder="Please tell us your activity..." style="margin-left: 30px; width: 800px; display: none;"/>
    </p>
    <div class="reqButtons">
      <input type="button" class="reqNext" onclick="QuoteNext('next3');" value="Next"></input>
      <input type="button" class="reqNext" onclick="QuoteBack('back2');" value="Back"></input>
    </div>
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
      <textarea style="width: 900px; height: 50px; resize: none;" id="quoteComment"></textarea>
    </p>

    <div class="reqButtons">
      <input type="button" class="reqNext" onclick="QuoteNext('next4');" value="Next"></input>
      <input type="button" class="reqNext" onclick="QuoteBack('back3');" value="Back"></input>
    </div>
  </div>

  <div id="Summary" class="tabcontent">
    <p><label>Request Summary</label></p>
    <div id="qSummary"></div>
    <div class="alertsSend">
      <div id="quoteMsj"></div>
      <div class="reqButtons">
        <input type="button" class="reqNext" onclick="QuoteNext('next5');" value="Send"></input>
        <input type="button" class="reqNext" onclick="QuoteBack('back4');" value="Back"></input>
      </div>
    </div>
  </div>
</body>
</html>
