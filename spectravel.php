<html>
<head>
  <meta charset="utf-8" />
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/general.js"></script>
  <link rel="stylesheet" href="css/specialtystyle.css" />

  <script type="text/javascript">

  $( document ).ready(function() {
    $("#css3-tabstrip-0-0").click();
  });

  function specload(specialty, specialdiv) {
    $.ajax({
      type: "POST",
      url: "spectravel/subs/"+specialty+"/load.php",
      success: function(a) {
        $('#'+specialdiv).html(a);
      }
    });
  }

  function specloadPadre(specialty, specialdiv) {
    $.ajax({
      type: "POST",
      url: "spectravel/"+specialty+"/load.php",
      success: function(a) {
        $('#'+specialdiv).html(a);
      }
    });
  }

  </script>
</head>


<div class="css3-tabstrip">
  <div onclick="window.parent.closeDestSpec('spetravelclose');" class="linkclose"><img src="images/deleicon.png"></div>
  <ul>
    <li>
      <input type="radio" name="css3-tabstrip-0" checked="checked" onclick="specloadPadre('activeadventures','tdecarga');" id="css3-tabstrip-0-0" /><label for="css3-tabstrip-0-0" class="actadventures">Active Adventures</label>
      <div>
        <table border="0px" style="width: 1008px; height: 390px; background-color: #ffffe0">
          <tr>
            <td id="taba">
              <a id="multisport" onmouseover="specload('multisport','tdecarga');" class="multisport" href="#" >Multi-Sport Tours</a><br><br>
              <a id="equestrian" onmouseover="specload('equestrian','tdecarga');" class="equestrian" href="#" >Equestrian Tours</a><br><br>
              <a id="cxc" onmouseover="specload('cxc','tdecarga');" class="cxc" href="#" >4X4 Adventures</a><br><br>
              <a id="walking" onmouseover="specload('walking','tdecarga');" class="walking" href="#" >Walking/Hiking Trips</a>
            </td>
            <td width="800px" height="390px" id="tdecarga" style="-webkit-transition: .1s; -moz-transition: .1s; -o-transition: .1s; -ms-transition: .1s;">
            </td>
          </tr>
        </table>
      </div>
    </li><li>
      <input type="radio" name="css3-tabstrip-0"  onclick="specloadPadre('naturewildlife','tdecargawild');" id="css3-tabstrip-0-1" /><label for="css3-tabstrip-0-1" class="wildlife">Nature & Wildlife Tours</label>
      <div>
        <table border="0px" style="width: 1008px; height: 390px; background-color: #ffffe0">
          <tr>
            <td id="taba">
              <a id="birdwatch" onmouseover="specload('birdwatch','tdecargawild');" class="birdwatch" href="#" >Bird-Watching</a><br><br>
              <a id="nathistory" onmouseover="specload('naturalhistory','tdecargawild');" class="nathistory" href="#" >Natural History</a><br><br>
              <a id="phototour" onmouseover="specload('photography','tdecargawild');" class="phototour" href="#" >Photography Tours</a><br><br>
              <a id="whalphins" onmouseover="specload('whale','tdecargawild');" class="whalphins" href="#" >Whale & Dolphins</a>
            </td>
            <td width="800px" height="390px" id="tdecargawild" style="-webkit-transition: .1s; -moz-transition: .1s; -o-transition: .1s; -ms-transition: .1s;">
            </td>
          </tr>
        </table>

      </div>
    </li>
    <li>
      <input type="radio" name="css3-tabstrip-0" onclick="specloadPadre('experiential','tdecargaexper');" id="css3-tabstrip-0-2" /><label for="css3-tabstrip-0-2" class="experiential">Experiential Travel</label>
      <div>
        <table border="0px" style="width: 1008px; height: 390px; background-color: #ffffe0">
          <tr>
            <td id="taba">
              <a id="generaldiscovery" onmouseover="specload('generaldisco','tdecargaexper');" class="experiential" href="#" >General Discovery</a><br><br>
              <a id="culinary" onmouseover="specload('culinary','tdecargaexper');" class="culinary" href="#" >Culinary Tours</a><br><br>
              <a id="familytravel" onmouseover="specload('family','tdecargaexper');" class="experiential" href="#" >Family Travel</a><br><br>
              <a id="honeymoons" onmouseover="specload('honeymoons','tdecargaexper');" class="experiential" href="#" >Honeymoons</a><br><br>
              <a id="latindances" onmouseover="specload('latindances','tdecargaexper');" class="experiential" href="#" >Latin Dances</a><br><br>
              <a id="yoga" onmouseover="specload('yoga','tdecargaexper');" class="yoga" href="#" >Yoga & Wellness</a><br><br>
              <a id="volunthropy" onmouseover="specload('philantropy','tdecargaexper');" class="experiential" href="#" >Volunteering &amp; <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Philanthropy</a>
            </td>
            <td width="800px" height="390px" id="tdecargaexper" style="-webkit-transition: .1s; -moz-transition: .1s; -o-transition: .1s; -ms-transition: .1s;">
            </td>
          </tr>
        </table>

      </div>
    </li>
    <li>
      <input type="radio" name="css3-tabstrip-0" onclick="specloadPadre('educational','tdecargaeduca');" id="css3-tabstrip-0-3" /><label for="css3-tabstrip-0-3" class="educational">Educational Travel</label>
      <div>
        <table border="0px" style="width: 1008px; height: 390px; background-color: #ffffe0">
          <tr>
            <td id="taba">
              <a id="student" onmouseover="specload('student','tdecargaeduca');" class="educational" href="#" >Student Travel</a><br><br>
              <a id="performance" onmouseover="specload('musical','tdecargaeduca');" class="educational" href="#" >Musical <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Performances</a><br><br>
              <a id="language" onmouseover="specload('language','tdecargaeduca');" class="educational" href="#" >Language <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Immersion</a>
            </td>
            <td width="800px" height="390px" id="tdecargaeduca" style="-webkit-transition: .1s; -moz-transition: .1s; -o-transition: .1s; -ms-transition: .1s;">
            </td>
          </tr>
        </table>

      </div>
    </li>
    <li>
      <input type="radio" name="css3-tabstrip-0" onclick="specloadPadre('specialneeds','tdecargaspecneeds');" id="css3-tabstrip-0-4" /><label for="css3-tabstrip-0-4" class="specneeds">Special Needs</label>
      <div>
        <table border="0px" style="width: 1008px; height: 390px; background-color: #ffffe0">
          <tr>
            <td id="taba">
              <a id="kosher" onmouseover="specload('kosher','tdecargaspecneeds');" class="kosher" href="#" >Kosher</a><br><br>
              <a id="vegan" onmouseover="specload('vegan','tdecargaspecneeds');" class="vegan" href="#" >Vegeterian/Vegan</a><br><br>
              <a id="disability" onmouseover="specload('disability','tdecargaspecneeds');" class="disability" href="#" >Disability Travel</a>
            </td>
            <td width="800px" height="390px" id="tdecargaspecneeds" style="-webkit-transition: .1s; -moz-transition: .1s; -o-transition: .1s; -ms-transition: .1s;">
            </td>
          </tr>
        </table>

      </div>
    </li>
    <li>
      <input type="radio" name="css3-tabstrip-0" onclick="specloadPadre('corporate','tdecargacorporate');" id="css3-tabstrip-0-5" /><label for="css3-tabstrip-0-5" class="corporate">Corporate Travel</label>
      <div>
        <table border="0px" style="width: 1008px; height: 390px; background-color: #ffffe0">
          <tr>
            <td id="taba">
              <a id="congress" onmouseover="specload('congresses','tdecargacorporate');" class="corporate" href="#" >Congresses & <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Meetings</a><br><br>
              <a id="incentive" onmouseover="specload('incentive','tdecargacorporate');" class="corporate" href="#" >Incentive Travel</a>
            </td>
            <td width="800px" height="390px" id="tdecargacorporate" style="-webkit-transition: .1s; -moz-transition: .1s; -o-transition: .1s; -ms-transition: .1s;">
            </td>
          </tr>
        </table>

      </div>
    </li>
  </ul>
</div>

</html>
