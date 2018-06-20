<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/menustyle.css" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <script>

            function dale() {
                /*alert("Don't you forget to visit the full information for more details.");*/
                $('#destina').slideUp("fast");
                $('#destina').slideDown("fast");
            }

            function dale2() {
                /*alert("Don't you forget to visit the full information for more details.");*/
                $('#spetravel').slideUp("fast");
                $('#spetravel').slideDown("fast");
            }

                /* inicio  funciones de los iconos rojos */

            function func_destina() {
                var elemento = document.getElementById('padre1');
                elemento.style.background = "#c0ba81 url('images/iconos_topmenu/destinations_red.png') no-repeat 4px center";
            }

            function func_destina_out() {
                var elemento = document.getElementById('padre1');
                elemento.style.background = "";
            }


            /*-----------------*/

            function func_stravel() {
                var elemento = document.getElementById('padre2');
                elemento.style.background = "#c0ba81 url('images/iconos_topmenu/about_red.png') no-repeat 4px center";
            }

            function func_stravel_out() {
                var elemento = document.getElementById('padre2');
                elemento.style.background = "";
            }

            /*------------------*/

            function func_tguide() {
                var elemento = document.getElementById('padre3');
                elemento.style.background = "#c0ba81 url('images/iconos_topmenu/tguide_red.png') no-repeat 4px center";
            }

            function func_tguide_out() {
                var elemento = document.getElementById('padre3');
                elemento.style.background = "";
            }

            /*------------------*/

            function func_aboutcr() {
                var elemento = document.getElementById('padre4');
                elemento.style.background = "#c0ba81 url('images/iconos_topmenu/about_red.png') no-repeat 4px center";
            }

            function func_aboutcr_out() {
                var elemento = document.getElementById('padre4');
                elemento.style.background = "";
            }

            /*______________________________________________________Hijos_____________________________________________________*/

            function func_hijo1() {
                var elemento = document.getElementById('hijo1');
                elemento.style.background = "#c0ba81 url('images/iconos_topmenu/tguide_red.png') no-repeat 4px center";
            }

            function func_hijo1_out() {
                var elemento = document.getElementById('hijo1');
                elemento.style.background = "";
            }

            /*------------------*/

            function func_hijo2() {
                var elemento = document.getElementById('hijo2');
                elemento.style.background = "#c0ba81 url('images/iconos_topmenu/about_red.png') no-repeat 4px center";
            }

            function func_hijo2_out() {
                var elemento = document.getElementById('hijo2');
                elemento.style.background = "";
            }

            /*___________________________________________________Fin Hijos_________________________________________________________*/

            /* fin funciones de los iconos rojos */


        </script>

        <style>
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

    </head>
<ul id="navhead">
<!--li><a href="index.php" class="home"></a></li-->
<li id="destina"><a id="padre1" href="#" class="destinations">Destinations</a>

        <ul id="destinaclose" onmouseover="func_destina()" onmouseout="func_destina_out()">
            <iframe  src="destiny.php" width="980px" height="442px" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" ></iframe>
            <p onclick="dale();" class="linkclose2">[x]Close</p>

        </ul>
</li>
<li id="spetravel"><a id="padre2" href="#" class="stravel">Specialty Travel</a>
        <ul onmouseover="func_stravel();" onmouseout="func_stravel_out();">
            <iframe  src="spectravel.php" width="1014px" height="442px" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" ></iframe>
            <p onclick="dale2();" class="linkclose2">[x]Close</p>
        </ul>

</li>

<li id="tguide"><a id="padre3" href="#" class="tguide">Travel Guide</a>
        <ul  id="traguide" onmouseover="func_tguide();" onmouseout="func_tguide_out();">
            <div id="izki">
            <li><a href="#" id="hijo1" class="tguides">About Costa Rica</a>
                <ul onmouseover="func_hijo1();" onmouseout="func_hijo1_out();">
                    <li><a href="whycostarica.php" class="tguides">Why Costa Rica?</a></li>
                    <li><a href="ports.php" class="tguides">Airports &amp; Ports</a></li>
                    <li><a href="economy.php" class="tguides">Bussiness &amp; Economy</a></li>
                    <li><a href="comunications.php" class="tguides">Comunications</a></li>
                    <li><a href="education.php" class="tguides">Education</a></li>
                    <li><a href="electricity.php" class="tguides">Electricity</a></li>
                    <li><a href="government.php" class="tguides">Government</a></li>
                    <li><a href="factsheet.php" class="tguides">Fact Sheet</a></li>
                    <li><a href="parksnature.php" class="tguides">Parks &amp; Nature Reserves</a></li>
                    <li><a href="timezones.php" class="tguides">Time Zones</a></li>
                    <li><a href="tipping.php" class="tguides">Tipping</a></li>
                    <li><a href="transportation.php" class="tguides">Transportation</a></li>
                </ul>
            </li>
                <li><a href="booksguides.php" class="tguides">Books &amp; Guides</a></li>
                <li><a href="http://www.costaricareps.com/blog" target="_blank" class="tguides">Blog</a></li>
                <li><a href="climate.php" class="tguides">Climate</a>
                <li><a href="entryrequirements.php" class="tguides">Entry Requirements</a></li>
                <li><a href="health.php" class="tguides">Health &amp; Safety</a></li>
            </div>
            <div id="dere">
                <li><a href="culture.php" class="tguides">Heritage &amp; Culture</a>
                <li><a href="maps.php" class="destin">Maps of Costa Rica</a>
                <li><a href="photogallery.php" class="pgallery">Photo Gallery</a></li>
                <li><a href="roads.php" class="roads">Roads &amp; Driving</a></li>
                <li><a href="whattopack.php" class="w2pack">What to Pack</a></li>
            </div>

        </ul>
        </li>

<li id="aboutcr"><a id="padre4" href="#" class="about">About C.R. Reps</a>
        <ul id="aboutcrreps" onmouseover="func_aboutcr();" onmouseout="func_aboutcr_out();" >
            <div id="izki">
            <li><a id="hijo2" href="#" class="abouta">Our Company</a>
                <ul style="left: 166px !important;" onmouseover="func_hijo2();" onmouseout="func_hijo2_out();">
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
            <li><a href="terms.php" class="terms">Terms &amp; Conditions</a></li>



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
</html>