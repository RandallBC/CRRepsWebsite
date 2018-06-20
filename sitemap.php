<?php
ob_start();
ini_set ('error_reporting', E_PARSE);
?>

<link href="css/sitemapstyle.css" media="screen" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/general.js"></script>
    <script type="text/javascript" src="js/jquery-1.js"></script>
    <script type="text/javascript" src="sitefuncion.js"></script>


<?php

    $buscado = $_POST['busqueda'];
    $cont = 0;

 if ($buscado == "") { ?>


     <div id="mapag">
 <p id="titulog">Costa Rica Reps Site Map.</p>


        <div id="clase1">
            <a href="#" onclick="destinalert();" id="padreg">Destinations</a>
                 <ul>
                     <li><a href="#" onclick="destinalert();" class="hijog">Central Valley</a>
                         <ul>
                             <li><a href="#" onclick="destinalert();" class="nietog">San Jose City</a></li>
                             <li><a href="#" onclick="destinalert();" class="nietog">Savegre Valley</a></li>
                             <li><a href="#" onclick="destinalert();" class="nietog">Turrialba Valley</a></li>
                             <li><a href="#" onclick="destinalert();" class="nietog">La Virgen &amp; Sarapiqui</a></li>
                         </ul>
                     </li><br>
                     <li><a href="#" onclick="destinalert();" class="hijog">Caribbean Coast</a>
                         <ul>
                             <li><a href="#" onclick="destinalert();" class="nietog">Tortuguero Village</a></li>
                             <li><a href="#" onclick="destinalert();" class="nietog">Barra del Colorado</a></li>
                             <li><a href="#" onclick="destinalert();" class="nietog">Puerto Viejo Town</a></li>
                             <li><a href="#" onclick="destinalert();" class="nietog">Puerto Limon</a></li>
                         </ul>
                     </li><br>
                     <li><a href="#" onclick="destinalert();" class="hijog">Northern Region</a>
                         <ul>
                             <li><a href="#" onclick="destinalert();" class="nietog"">La Fortuna &amp; Arenal Lake</a></li>
                             <li><a href="#" onclick="destinalert();" class="nietog">Santa Elena &amp; Monteverde</a></li>
                             <li><a href="#" onclick="destinalert();" class="nietog">Boca Tapada de San Carlos</a></li>
                             <li><a href="#" onclick="destinalert();" class="nietog">Bijagua de Upala</a></li>
                         </ul>
                     </li><br>
                     <li><a href="#" onclick="destinalert();" class="hijog">North Pacific</a>
                         <ul>
                             <li><a href="#" onclick="destinalert();" class="nietog">Papagayo Gulf</a></li>
                             <li><a href="#" onclick="destinalert();" class="nietog">Tamarindo &amp; Brasilito Bays</a></li>
                             <li><a href="#" onclick="destinalert();" class="nietog">Nosara, Samara &amp; Carrillo B.T.</a></li>
                             <li><a href="#" onclick="destinalert();" class="nietog">Rincon de la Vieja Mountains</a></li>
                         </ul>
                     </li><br>
                     <li><a href="#" onclick="destinalert();" class="hijog">Central Pacific</a>
                         <ul>
                             <li><a href="#" onclick="destinalert();" class="nietog">Nicoya Peninsula &amp; Gulf</a></li>
                             <li><a href="#" onclick="destinalert();" class="nietog">Jaco, Herradura & Hermosa B.T.</a></li>
                             <li><a href="#" onclick="destinalert();" class="nietog">Esterillos &amp; Quepos</a></li>
                         </ul>
                     </li><br>
                     <li><a href="#" onclick="destinalert();" class="hijog">South Pacific</a>
                         <ul>
                             <li><a href="#" onclick="destinalert();" class="nietog">Dominical Town &amp; Ballena Bay</a></li>
                             <li><a href="#" onclick="destinalert();" class="nietog">Drake Bay & Ca&ntilde;o Island</a></li>
                             <li><a href="#" onclick="destinalert();" class="nietog">Corcovado &amp; Pto. Jimenez</a></li>
                             <li><a href="#" onclick="destinalert();" class="nietog">Rivas &amp; Chirripo Peak</a></li>
                             <li><a href="#" onclick="destinalert();" class="nietog">Dulce Gulf &amp; Burica Peninsula</a></li>
                         </ul>
                     </li>
                 </ul>

         </div>

     <div id="clase2">
            <a href="#" onclick="spectra();" id="padreg">Specialty Travel</a>
                 <ul>
                     <li><a href="#" onclick="spectra();" class="hijog">Active Adventures</a>
                         <ul>
                             <li><a href="#" onclick="spectra();" class="nietog">Multi-Sport Tours</a></li>
                             <li><a href="#" onclick="spectra();" class="nietog">Equestrian Tours</a></li>
                             <li><a href="#" onclick="spectra();" class="nietog">4x4 Adventures</a></li>
                             <li><a href="#" onclick="spectra();" class="nietog">Walking/Hiking Tours</a></li>
                         </ul>
                     </li><br>
                     <li><a href="#" onclick="spectra();" class="hijog">Nature &amp; Wildlife Tours</a>
                         <ul>
                             <li><a href="#" onclick="spectra();" class="nietog">Bird-Watching</a></li>
                             <li><a href="#" onclick="spectra();" class="nietog">Natural History</a></li>
                             <li><a href="#" onclick="spectra();" class="nietog">Photography Tours</a></li>
                             <li><a href="#" onclick="spectra();" class="nietog">Whale &amp; Dolphins</a></li>
                         </ul></li><br>
                     <li><a href="#" onclick="spectra();" class="hijog">Experiential Travel</a>
                         <ul>
                             <li><a href="#" onclick="spectra();" class="nietog">General Discovery</a></li>
                             <li><a href="#" onclick="spectra();" class="nietog">Culinary Tours</a></li>
                             <li><a href="#" onclick="spectra();" class="nietog">Family Travel</a></li>
                             <li><a href="#" onclick="spectra();" class="nietog">Honeymoons</a></li>
                             <li><a href="#" onclick="spectra();" class="nietog">Latin Dances</a></li>
                             <li><a href="#" onclick="spectra();" class="nietog">Yoga &amp; Wellness</a></li>
                             <li><a href="#" onclick="spectra();" class="nietog">Volunteering &amp; Philanthropy</a></li>
                         </ul></li><br>
                     <li><a href="#" onclick="spectra();" class="hijog">Educational Travel</a>
                         <ul>
                             <li><a href="#" onclick="spectra();" class="nietog">Student Travel</a></li>
                             <li><a href="#" onclick="spectra();" class="nietog">Musical Performances</a></li>
                             <li><a href="#" onclick="spectra();" class="nietog">Language Immersion</a></li>
                         </ul></li><br>
                     <li><a href="#" onclick="spectra();" class="hijog">Special Needs</a>
                         <ul>
                             <li><a href="#" onclick="spectra();" class="nietog">Kosher</a></li>
                             <li><a href="#" onclick="spectra();" class="nietog">Vegeterian/Vegan</a></li>
                             <li><a href="#" onclick="spectra();" class="nietog">Disability Travel</a></li>
                         </ul></li><br>
                     <li><a href="#" onclick="spectra();" class="hijog">Corporate Travel</a>
                         <ul>
                             <li><a href="#" onclick="spectra();" class="nietog">Congresses &amp; Meetings</a></li>
                             <li><a href="#" onclick="spectra();" class="nietog">Incentive Travel</a></li>
                         </ul></li><br>
                 </ul>
     </div>

     <div id="clase3">
             <a href="#" id="padreg">Travel Guide</a>
                 <ul>
                     <li><a href="#" id="hijog">About Costa Rica</a>
                         <ul>
                             <li><a href="whycostarica.php" id="nietog">Why Costa Rica?</a></li>
                             <li><a href="ports.php" id="nietog">Airports &amp; Ports</a></li>
                             <li><a href="economy.php" id="nietog">Bussiness &amp; Economy</a></li>
                             <li><a href="comunications.php" id="nietog">Comunications</a></li>
                             <li><a href="education.php" id="nietog">Education</a></li>
                             <li><a href="electricity.php" id="nietog">Electricity</a></li>
                             <li><a href="government.php" id="nietog">Government</a></li>
                             <li><a href="factsheet.php" id="nietog">Fact Sheet</a></li>
                             <li><a href="parksnature.php" id="nietog">Parks &amp; Nature Reserves</a></li>
                             <li><a href="timezones.php" id="nietog">Time Zones</a></li>
                             <li><a href="tipping.php" id="nietog">Tipping</a></li>
                             <li><a href="transportation.php" id="nietog">Transportation</a></li>
                         </ul>

                     </li><br>
                     <li><a href="booksguides.php" id="hijog">Books &amp; Guides</a></li>
                     <li><a href="http://www.costaricareps.com/blog" target="_blank" id="hijog">Blog</a></li>
                     <li><a href="climate.php" id="hijog">Climate</a></li>
                     <li><a href="entryrequirements.php" id="hijog">Entry Requirements</a></li>
                     <li><a href="health.php" id="hijog">Health &amp; Safety</a></li>
                     <li><a href="culture.php" id="hijog">Heritage &amp; Culture</a></li>
                     <li><a href="maps.php" id="hijog">Maps of Costa Rica</a></li>
                     <li><a href="photogallery.php" id="hijog">Photo Gallery</a></li>
                     <li><a href="roads.php" id="hijog">Roads &amp; Driving</a></li>
                     <li><a href="whattopack.php" id="hijog">What to Pack</a></li>
                 </ul>
     </div>

     <div id="clase4">
            <a href="#" id="padreg">About CR. Reps</a>
                 <ul>
                     <li><a href="#" id="hijog">Our Company</a>
                         <ul>
                             <li><a href="ourcompany.php" id="nietog">Our Company</a></li>
                             <li><a href="ourteam.php" id="nietog">Our Team</a></li>
                             <li><a href="affiliations.php" id="nietog">Affiliations</a></li>
                             <li><a href="responsible.php" id="nietog">Responsible Travel</a></li>
                             <li><a href="infosystems.php" id="nietog">Tech &amp; Info Systems</a></li>
                         </ul></li><br>
                     <li><a href="corporateprofile.php" id="hijog">Corporate Profile</a></li>
                     <li><a href="workingus.php" id="hijog">Working with Us</a></li>
                     <li><a href="meetus.php" id="hijog">Meet with Us</a></li>
                     <li><a href="testimonials.php" id="hijog">Testimonials</a></li>
                     <li><a href="fixedtour.php" id="hijog">Fixed Tour Departures</a></li>
                     <li><a href="customitineraries.php" id="hijog">Custom Itineraries</a></li>
                     <li><a href="grouptravel.php" id="hijog">Group Travel</a></li>
                     <li><a href="reservations.php" id="hijog">Hotel Reservations</a></li>
                     <li><a href="transportlogistics.php" id="hijog">Transport & Logistics</a></li>
                     <li><a href="corporatetravel.php" id="hijog">Corporate Travel</a></li>
                     <li><a href="terms.php" id="hijog">Terms &amp; Conditions</a></li>

                 </ul>
     </div>

 </div>

<?php } else {
              echo "<p style='padding: 20px; font: normal 18px Candara;'>Search: <b>". $buscado . "<b></p>";

     echo "<div id='resultados'>";
     $lines = file('sitemap.php');
     foreach($lines as $line)
     {
         if(stripos($line, $buscado) !== false)
             echo $line;
     }
     echo "</div>";

     ?>

     <script>
         if ($('#resultados').is(':empty')) {

             document.write("<p style='padding: 30px; font: normal 16px Candara;'>Nothing Found, Please Try Again.</p>");

    } </script>

 <?php

}

$paginacontenido = ob_get_contents();
ob_end_clean();

require_once 'plantilla.php';
?>