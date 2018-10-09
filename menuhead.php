<link rel="stylesheet" type="text/css" href="css/menustyle.css" />

<style>

.extendida {
  border-right: 2px solid #9C1B2D;
}

.linkclose
{
  float: right;
  font: normal 14px Candara;
  color: #9C1B2D;
  margin-top: 132px;
}

.linkclose:hover
{
  float: right;
  font: normal 14px Candara;
  color: #ffffcc;
  margin-top: 132px;
  cursor: grab;
}

.linkclose2
{
  float: right;
  font: normal 14px Candara;
  color: #9C1B2D;
}

.linkclose2:hover
{
  float: right;
  font: normal 14px Candara;
  color: #ffffcc;
}

.servi {
  color: #ffffcc;
  font: normal 18px Candara;
  top: 5px;
  text-align: left;
  list-style: circle;
}

</style>

<ul id="navhead">
  <!--li><a href="index.php" class="home"></a></li-->
  <li id="destina"><a id="padre1" href="#" class="destinations">Destinations</a>

    <ul id="destinaclose" onmouseover="func_destina()" onmouseout="func_destina_out()">
      <iframe  src="destiny.php" width="985px" height="442px" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" ></iframe>
      <p onclick="dale();" class="linkclose2"><img src="images/deleicon.png"></p>

    </ul>
  </li>
  <li id="spetravel"><a id="padre2" href="#" class="stravel">Specialty Travel</a>
    <ul onmouseover="func_stravel();" onmouseout="func_stravel_out();">
      <iframe  src="spectravel.php" width="1014px" height="442px" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" ></iframe>
      <p onclick="dale2();" class="linkclose2"><img src="images/deleicon.png"></p>
    </ul>

  </li>

  <li id="tguide"><a id="padre3" href="#" class="tguide">Travel Guide</a>
    <ul  id="traguide" onmouseover="func_tguide();" onmouseout="func_tguide_out();">
      <div id="izki">
        <li><a href="#" id="hijo1" class="tguides extendida">About Costa Rica</a>
          <ul onmouseover="func_hijo1();" onmouseout="func_hijo1_out();" class="cobamar">
            <li onclick="loadcontents('whycostarica');"><a href="#" class="tguides">Why Costa Rica?</a></li>
            <li onclick="loadcontents('ports');"><a href="#" class="tguides">Airports &amp; Ports</a></li>
            <li onclick="loadcontents('economy');"><a href="#" class="tguides">Bussiness &amp; Economy</a></li>
            <li onclick="loadcontents('comunications');"><a href="#" class="tguides">Comunications</a></li>
            <li onclick="loadcontents('education');"><a href="#" class="tguides">Education</a></li>
            <li onclick="loadcontents('electricity');"><a href="#" class="tguides">Electricity</a></li>
            <li onclick="loadcontents('government');"><a href="#" class="tguides">Government</a></li>
            <li onclick="loadcontents('factsheet');"><a href="#" class="tguides">Fact Sheet</a></li>
            <li onclick="loadcontents('parksnature');"><a href="#" class="tguides">Parks &amp; Nature Reserves</a></li>
            <li onclick="loadcontents('timezones');"><a href="#" class="tguides">Time Zones</a></li>
            <li onclick="loadcontents('tipping');"><a href="#" class="tguides">Tipping</a></li>
            <li onclick="loadcontents('transportation');"><a href="#" class="tguides">Transportation</a></li>
          </ul>
        </li>
        <li onclick="loadcontents('booksguides');"><a href="#" class="tguides">Books &amp; Guides</a></li>
        <!--li><a href="http://www.costaricareps.com/blog" target="_blank" class="tguides">Blog</a></li-->
        <li><a href="#" id="hijo3" class="tguides extendida">Climate</a>
          <ul onmouseover="func_hijo3();" onmouseout="func_hijo3_out();" class="cobamar">
            <li onclick="loadcontents('climate');"><a href="#" class="tguides">Climate in CR</a></li>
            <li onclick="loadcontents('temperature');"><a href="#" class="tguides">Temperature</a></li>
            <li onclick="loadcontents('altitvariation');"><a href="#" class="tguides">Altitudinal<br/> Variation</a></li>
            <li onclick="loadcontents('winds');"><a href="#" class="tguides">Winds</a></li>
            <li onclick="loadcontents('rainfall');"><a href="#" class="tguides">Rainfall</a></li>
            <li onclick="loadcontents('carregion');"><a href="#" class="tguides">Caribbean Region</a></li>
            <li onclick="loadcontents('pacificregion');"><a href="#" class="tguides">Pacific Region</a></li>
            <li onclick="loadcontents('lilsummers');"><a href="#" class="tguides">Little Summers</a></li>
          </ul>
        </li>

        <li onclick="loadcontents('entryrequirements');"><a href="#" class="tguides">Entry Requirements</a></li>
        <li onclick="loadcontents('health')"><a href="#" class="tguides">Health &amp; Safety</a></li>
      </div>
      <div id="dere">
        <li><a href="#" id="hijo4" class="tguides extendida">Heritage &amp; Culture</a>
          <ul onmouseover="func_hijo4();" onmouseout="func_hijo4_out();" class="cobamardere">
            <li onclick="loadcontents('culture');"><a href="#" class="tguides">Heritage &amp; Culture</a></li>
            <li onclick="loadcontents('precolonial');"><a href="#" class="tguides">Pre-colonial <br/> History</a></li>
            <li onclick="loadcontents('foodcuisine');"><a href="#" class="tguides">Food & Cuisine</a></li>
            <li onclick="loadcontents('people');"><a href="#" class="tguides">Its People</a></li>
            <li onclick="loadcontents('holidays');"><a href="#" class="tguides">National Holidays</a></li>
            <li onclick="loadcontents('symbols');"><a href="#" class="tguides">National Symbols</a></li>
          </ul>
        </li>
        <li onclick="loadcontents('maps');"><a href="#" class="destin">Maps of Costa Rica</a></li>
        <li onclick="showgallery();"><a href="#" class="pgallery">Photo Gallery</a></li>
        <li onclick="loadcontents('roads');"><a href="#" class="roads">Roads &amp; Driving</a></li>
        <li onclick="loadcontents('whattopack');"><a href="#" class="w2pack">What to Pack</a></li>
      </div>

    </ul>
  </li>

  <li id="aboutcr"><a id="padre4" href="#" class="about">About C.R. Reps</a>
    <ul id="aboutcrreps" onmouseover="func_aboutcr();" onmouseout="func_aboutcr_out();" >
      <div id="izki">
        <li><a id="hijo2" href="#" class="abouta">Our Company</a>
          <ul style="left: 166px !important;" onmouseover="func_hijo2();" onmouseout="func_hijo2_out();" class="cobamar">
            <li><a href="ourcompany.php" class="abouta">Our Company</a></li>
            <li><a href="ourteam.php" class="abouta">Our Team</a></li>
            <li><a href="affiliations.php" class="abouta">Affiliations</a></li>
            <li><a href="responsible.php" class="abouta">Responsible Travel</a></li>
            <li><a href="infosystems.php" class="abouta">Tech &amp; Info Systems</a></li>
          </ul></li>
          <li><a href="corporateprofile.php" class="abouta">Corporate Profile</a></li>
          <li><a href="workingus.php" class="abouta">Working with Us</a></li>
          <li><a href="meetus.php" class="abouta">Meet with Us</a></li>
          <li><a href="testimonials.php" class="abouta">Testimonials</a></li>
          <li onclick="loadcontents('terms');"><a href="#" class="terms">Terms &amp; Conditions</a></li>



        </div>
        <div id="dere" onclick="location.href='services.php'" style="border-bottom: 2px solid #9C1B2D;" >
          <br>
          <div style="background: url(images/frame.png) no-repeat; width: 175px; height: 200px;">
            <li><label class="abouta">Our Services</label></li><br>

            <li class="chikis"><label class="servi">Fixed Tour Departures</label></li>
            <li class="chikis"><label class="servi">Custom Itineraries</label></li>
            <li class="chikis"><label class="servi">Group Travel</label></li>
            <li class="chikis"><label class="servi">Hotel Reservations</label></li>
            <li class="chikis"><label class="servi">Transport &amp; Logistics</label></li>
            <li class="chikis"><label class="servi">Corporate Travel</label></li>

            <!--li><a href="services.php" class="abouta">Services Information</a></li-->

          </div>
        </div>
      </ul>
    </li>
  </ul>


  <style>
  body {font-family: Arial, Helvetica, sans-serif;}

  /* The Modal (background) */
  .modal {
      display: none; /* Hidden by default */
      position: fixed; /* Stay in place */
      z-index: 1; /* Sit on top */
      padding-top: 100px; /* Location of the box */
      left: 0;
      top: 0;
      width: 100%; /* Full width */
      height: 100%; /* Full height */
      overflow: auto; /* Enable scroll if needed */
      background-color: rgb(0,0,0); /* Fallback color */
      background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  }

  /* Modal Content */
  .modal-content {
      background-color: #fefefe;
      margin: auto;
      padding: 20px;
      border: 1px solid #888;
      width: 70%;
  }

  /* The Close Button */
  .close {
      color: #aaaaaa;
      float: right;
      font-size: 28px;
      font-weight: bold;
  }

  .close:hover,
  .close:focus {
      color: #000;
      text-decoration: none;
      cursor: pointer;
  }
  </style>

  <!-- The Modal -->
  <div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
      <iframe src="gallery/index.php" width="900px" height="600px" scrolling="no" marginwidth="0" marginheight="0" frameborder="0"></iframe>
    </div>

  </div>

  <script>
  var modal = document.getElementById('myModal');

  function showgallery() {
      modal.style.display = "block";
  }

  window.onclick = function(event) {
      if (event.target == modal) {
          modal.style.display = "none";
      }
  }
  </script>
