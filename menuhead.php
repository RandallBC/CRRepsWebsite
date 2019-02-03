<ul id="navhead">

  <li id="destina"><a id="padre1"  onmouseover="closeDestSpec('spetravelclose'); openDestSpec('destinaclose');" href="#" class="destinations">Destinations</a>
    <ul id="destinaclose" onmouseover="func_destina()" onmouseout="func_padre_out('padre1')">
      <iframe  src="destiny.php" width="1018px" height="778px" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" ></iframe>
      <p onclick="closeDestSpec('destinaclose');" class="linkclose"><img src="images/deleicon.png"></p>
    </ul>
  </li>

  <li id="spetravel"><a id="padre2"  onmouseover="closeDestSpec('destinaclose'); openDestSpec('spetravelclose');" href="#" class="stravel">Specialty Travel</a>
    <ul id="spetravelclose" onmouseover="func_stravel();" onmouseout="func_padre_out('padre2');">
      <iframe  src="spectravel.php" width="1014px" height="442px" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" ></iframe>
      <p onclick="closeDestSpec('spetravelclose');" class="linkclose"><img src="images/deleicon.png"></p>
    </ul>
  </li>

  <li id="tguide"><a id="padre3" href="#" class="tguide">Travel Guide</a>
    <ul  id="traguide" onmouseover="func_tguide();" onmouseout="func_padre_out('padre3');">
      <div id="izki">
        <li><a href="#" id="hijo1" class="tguides extendida">About Costa Rica</a>
          <ul onmouseover="func_hijo1();" onmouseout="func_hijo_out('hijo1');" class="cobamar">
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
          <ul onmouseover="func_hijo3();" onmouseout="func_hijo_out('hijo3');" class="cobamar">
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
          <ul onmouseover="func_hijo4();" onmouseout="func_hijo_out('hijo4');" class="cobamardere">
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
    <ul id="aboutcrreps" onmouseover="func_aboutcr();" onmouseout="func_padre_out('padre4');" >
      <div id="izki">
        <li><a id="hijo2" href="#" class="abouta extendida">Our Company</a>
          <ul style="left: 177px !important;" onmouseover="func_hijo2();" onmouseout="func_hijo_out('hijo2');" class="cobamar">
            <li onclick="loadcontents('ourcompany');"><a href="#" class="abouta">Our Company</a></li>
            <li onclick="loadcontents('ourteam');"><a href="#" class="abouta">Our Team</a></li>
            <li onclick="loadcontents('affiliations');"><a href="#" class="abouta">Affiliations</a></li>
            <li onclick="loadcontents('responsible');"><a href="#" class="abouta">Responsible Travel</a></li>
            <li onclick="loadcontents('infosystems');"><a href="#" class="abouta">Tech &amp; Info Systems</a></li>
          </ul>
        </li>
        <li><a id="hijo5" href="#" class="abouta extendida">Corporate Profile</a>
          <ul style="left: 177px !important;" onmouseover="func_hijo5();" onmouseout="func_hijo_out('hijo5');" class="cobamar">
            <li onclick="loadcontents('corpProfile');"><a href="#" class="abouta">Corporate Profile</a></li>
            <li onclick="loadcontents('corpPhilosophy');"><a href="#" class="abouta">Our Corporate<br/>Philosophy</a></li>
            <li onclick="loadcontents('corpPolicies');"><a href="#" class="abouta">Corporate Policies</a></li>
          </ul>
        </li>
        <li onclick="loadcontents('workingus');"><a href="#" class="abouta">Working with Us</a></li>
        <li onclick="loadcontents('meetus');"><a href="#" class="abouta">Meet with Us</a></li>
        <li onclick="loadcontents('testimonials/testim/testimon');"><a href="#" class="abouta">Testimonials</a></li>
        <li onclick="loadcontents('terms');"><a href="#" class="terms">Terms &amp; Conditions</a></li>
      </div>
      <div id="dere" onclick="loadcontents('services/serv')"style="border-bottom: 2px solid #9C1B2D;" >
        <br>
        <div class="servics">
          <li><label class="abouta">Our Services</label></li><br>

          <li class="chikis"><label class="servi">Regularly Scheduled Departures</label></li>
          <li class="chikis"><label class="servi">Customized Itineraries</label></li>
          <li class="chikis"><label class="servi">Special Interest Itineraries</label></li>
          <li class="chikis"><label class="servi">Privately Guided Travel Itineraries</label></li>
          <li class="chikis"><label class="servi">Hotel Reservations and Allotments</label></li>
          <li class="chikis"><label class="servi">Transport &amp; Logistics</label></li>
          <li class="chikis"><label class="servi">Site Inspection, Familiarization &amp; Press Trips</label></li>
          <li class="chikis"><label class="servi">Organization of congress, meetings and corporate incentive tours.</label></li>
        </div>
      </div>
    </ul>
  </li>
</ul>

<!-- The Modal -->
<div id="myModal" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <iframe src="gallery/index.php" width="900px" height="600px" scrolling="no" marginwidth="0" marginheight="0" frameborder="0"></iframe>
  </div>
</div>

<script>
var modal = document.getElementById('myModal');
function showgallery() { modal.style.display = "block"; }
window.onclick = function(event) { if (event.target == modal) { modal.style.display = "none"; } }
</script>
