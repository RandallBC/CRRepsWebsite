<html>
<link rel="stylesheet" type="text/css" href="css/menulateralstyle.css" />

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/general.js"></script>
<script type="text/javascript" src="js/jquery-1.js"></script>

<head>

<body>

<style>
    .titulos {
        color: #9c1b2d;
        margin-left: 10px;
        font: normal 14px Candara;
        height: 16px;
    }

</style>

<!--......................................................................................aki van los ajax..............................................................................-->

<script type="text/javascript">

$(document).ready(function() {

    $('#sanjose').onmouseover(function(){


        $.ajax({
            type: "POST",
            url: "sanjosecity.php",
            success: function(a) {
                $('#present').html(a);

            }
        });
    });

    $('#savegre').onmouseover(function(){

        $.ajax({
            type: "POST",
            url: "savegrevalley.php",
            success: function(a) {

                $('#present').html(a);

            }
        });
    });

    $('#turrialba').click(function(){

        $.ajax({
            type: "POST",
            url: "turrialbavalley.php",
            success: function(a) {

                $('#present').html(a);

            }
        });
    });

    $('#sarapiqui').click(function(){

        $.ajax({
            type: "POST",
            url: "lavirgenysarapiqui.php",
            success: function(a) {

                $('#present').html(a);

            }
        });
    });

    $('#tortuguero').click(function(){

        $.ajax({
            type: "POST",
            url: "destinations/subregions/tortuguero.php",
            success: function(a) {

                $('#present_cc').html(a);

            }
        });
    });

    $('#barracolorado').click(function(){

        $.ajax({
            type: "POST",
            url: "destinations/subregions/barracolorado.php",
            success: function(a) {

                $('#present_cc').html(a);

            }
        });
    });

    $('#puertoviejo').click(function(){

        $.ajax({
            type: "POST",
            url: "destinations/subregions/puertoviejo.php",
            success: function(a) {

                $('#present_cc').html(a);

            }
        });
    });

    $('#puertolimon').click(function(){

        $.ajax({
            type: "POST",
            url: "destinations/subregions/puertolimon.php",
            success: function(a) {

                $('#present_cc').html(a);

            }
        });
    });

    $('#fortunarenal').click(function(){

        $.ajax({
            type: "POST",
            url: "destinations/subregions/fortunarenal.php",
            success: function(a) {

                $('#present_nr').html(a);

            }
        });
    });

    $('#elenamonte').click(function(){

        $.ajax({
            type: "POST",
            url: "destinations/subregions/elenamonte.php",
            success: function(a) {

                $('#present_nr').html(a);

            }
        });
    });

    $('#bocatapada').click(function(){

        $.ajax({
            type: "POST",
            url: "destinations/subregions/bocatapada.php",
            success: function(a) {

                $('#present_nr').html(a);

            }
        });
    });

    $('#bijagua').click(function(){

        $.ajax({
            type: "POST",
            url: "destinations/subregions/bijagua.php",
            success: function(a) {

                $('#present_nr').html(a);

            }
        });
    });

    $('#papagayo').click(function(){

        $.ajax({
            type: "POST",
            url: "destinations/subregions/papagayo.php",
            success: function(a) {

                $('#present_np').html(a);

            }
        });
    });

    $('#tybbays').click(function(){

        $.ajax({
            type: "POST",
            url: "destinations/subregions/tybbays.php",
            success: function(a) {

                $('#present_np').html(a);

            }
        });
    });

    $('#nsycbeachs').click(function(){

        $.ajax({
            type: "POST",
            url: "destinations/subregions/nsycbeachs.php",
            success: function(a) {

                $('#present_np').html(a);

            }
        });
    });

    $('#viejamont').click(function(){

        $.ajax({
            type: "POST",
            url: "destinations/subregions/viejamont.php",
            success: function(a) {

                $('#present_np').html(a);

            }
        });
    });

    $('#nicoya').click(function(){

        $.ajax({
            type: "POST",
            url: "destinations/subregions/nicoya.php",
            success: function(a) {

                $('#present_cp').html(a);

            }
        });
    });

    $('#jhyhbeach').click(function(){

        $.ajax({
            type: "POST",
            url: "destinations/subregions/jhyhbeach.php",
            success: function(a) {

                $('#present_cp').html(a);

            }
        });
    });

    $('#esteriquepos').click(function(){

        $.ajax({
            type: "POST",
            url: "destinations/subregions/esteriquepos.php",
            success: function(a) {

                $('#present_cp').html(a);

            }
        });
    });

    $('#dominical').click(function(){

        $.ajax({
            type: "POST",
            url: "destinations/subregions/dominical.php",
            success: function(a) {

                $('#present_sp').html(a);

            }
        });
    });

    $('#drakecano').click(function(){

        $.ajax({
            type: "POST",
            url: "destinations/subregions/drakecano.php",
            success: function(a) {

                $('#present_sp').html(a);

            }
        });
    });

    $('#corcovado').click(function(){

        $.ajax({
            type: "POST",
            url: "destinations/subregions/corcovado.php",
            success: function(a) {

                $('#present_sp').html(a);

            }
        });
    });

    $('#rivaschirripo').click(function(){

        $.ajax({
            type: "POST",
            url: "destinations/subregions/rivaschirripo.php",
            success: function(a) {

                $('#present_sp').html(a);

            }
        });
    });

    $('#burica').click(function(){

        $.ajax({
            type: "POST",
            url: "destinations/subregions/burica.php",
            success: function(a) {

                $('#present_sp').html(a);

            }
        });
    });

    //arriba de aki van los ajax

});

</script>



<!--......................................................................................aki van los ajax..............................................................................-->

    <div style="float: left; margin-top: 30px;">
        <ul class="menu">
    <h3 class="titulos">Destinations</h3>
    <li><a href="#">Central Valley</a>
        <ul class="destinations1">
            <li><a id="sanjose" href="#">San Jose City</a></li>
            <li><a id="savegre" href="#">Savegre Valley</a></li>
            <li><a id="turrialba" href="#">Turrialba Valley</a></li>
            <li><a id="sarapiqui" href="#">La Virgen &amp; Sarapiqui</a></li>
        </ul>
    </li>
    <li><a href="#">Caribbean Coast</a>
        <ul class="destinations1">
            <li><a href="#">Tortuguero Village</a></li>
            <li><a href="#">Barra del Colorado</a></li>
            <li><a href="#">Puerto Viejo Town</a></li>
            <li><a href="#">Puerto Lim&oacute;n</a></li>
        </ul>
    </li>    <li><a href="#">Northern Region</a>
        <ul class="destinations2">
            <li><a href="#">La Fortuna &amp; Arenal Lake</a></li>
            <li><a href="#">Santa Elena &amp; Monteverde</a></li>
            <li><a href="#">Boca Tapada de San Carlos</a></li>
            <li><a href="#">Bijagua de Upala</a></li>
        </ul>
    </li>    <li><a href="#">North Pacific</a>
        <ul class="destinations2">
            <li><a href="#">Papagayo Gulf</a></li>
            <li><a href="#">Tamarindo &amp; Brasilito Bays</a></li>
            <li><a href="#">Nosara, Samara &amp; Carrillo Beach Towns</a></li>
            <li><a href="#">Rincon de la Vieja Mountains</a></li>
        </ul>
    </li>    <li><a href="#">Central Pacific</a>
        <ul class="destinations1">
            <li><a href="#">Nicoya Peninsula &amp; Gulf</a></li>
            <li><a href="#">Jaco, Herradura &amp; Hermosa Beach Towns</a></li>
            <li><a href="#">Esterillos &amp; Quepos</a></li>
        </ul>
    </li>    <li><a href="#">South Pacific</a>
        <ul class="destinations3">
            <li><a href="#">Dominical Town &amp; Ballena Bay</a></li>
            <li><a href="#">Drake Bay &amp; Ca&nacute;o Island</a></li>
            <li><a href="#">Corcovado &amp; Puerto Jim&eacute;nez</a></li>
            <li><a href="#">Rivas &amp; Chirripo Peak</a></li>
            <li><a href="#">Dulce Gulf &amp; Burica Peninsula</a></li>
        </ul>
    </li>

<!--____________________________________________________________________________aki va la otra_________________________________________________________________-->

    <h3 class="titulos">Specialty Travel</h3>
    <li><a href="#">Active Adventures</a>
        <ul class="specialty">
            <li><a href="#">Multi-Sport Tours</a></li>
            <li><a href="#">Equestrian Tours</a></li>
            <li><a href="#">4x4 Adventures</a></li>
            <li><a href="#">Walking/Hiking Trips</a></li>
        </ul>
    </li>
    <li><a href="#">Nature &amp; Wildlife Tours</a>
        <ul class="specialty">
            <li><a href="#">Bird-Watching</a></li>
            <li><a href="#">Natural History</a></li>
            <li><a href="#">Photography Tours</a></li>
            <li><a href="#">Whale &amp; Dolphins</a></li>
        </ul>
    </li>
    <li><a href="#">Experiential Travel</a>
        <ul class="specialty">
            <li><a href="#">General Discovery</a></li>
            <li><a href="#">Culinary Tours</a></li>
            <li><a href="#">Family Travel</a></li>
            <li><a href="#">Honeymoons</a></li>
            <li><a href="#">Latin Dances</a></li>
            <li><a href="#">Yoga &amp; Wellness</a></li>
            <li><a href="#">Volunteering &amp; Philanthropy</a></li>
        </ul>
    </li>
    <li><a href="#">Educational Travel</a>
        <ul class="specialty">
            <li><a href="#">Student Travel</a></li>
            <li><a href="#">Musical Performances</a></li>
            <li><a href="#">Language Immersion</a></li>
        </ul>
    </li>
    <li><a href="#">Special Needs</a>
        <ul class="specialty">
            <li><a href="#">Kosher</a></li>
            <li><a href="#">Vegeterian/Vegan</a></li>
            <li><a href="#">Disability Travel</a></li>
        </ul>
    </li>
    <li><a href="#">Corporate Travel</a>
        <ul class="specialty">
            <li><a href="#">Congresses &amp; Meetings</a></li>
            <li><a href="#">Incentive Travel</a></li>
        </ul>
    </li>


<!--____________________________________________________________________________aki va la otra_________________________________________________________________-->


    <h3 class="titulos">Travel Guide</h3>
    <li><a href="#">Travel Guide</a>
        <ul  class="travelguide">
            <li><a href="#">About Costa Rica</a></li>
            <li><a href="#">Books &amp; Guides</a></li>
            <li><a href="#">Blogs</a></li>
            <li><a href="#">Climate</a></li>
            <li><a href="#">Entry Requirements</a></li>
            <li><a href="#">Health &amp; Safety</a></li>
            <li><a href="#">Heritage &amp; Culture</a></li>
            <li><a href="#">Maps of Costa Rica</a></li>
            <li><a href="#">Photo Gallery</a></li>
            <li><a href="#">Roads &amp; Driving</a></li>
            <li><a href="#">What to Pack</a></li>

        </ul>
    </li>

<!--____________________________________________________________________________aki va la otra_________________________________________________________________-->

    <h3 class="titulos">About C.R. Reps</h3>
    <li><a href="#">About C.R. Reps</a>
        <ul class="aboutcr">
            <li><a href="#">Our Company</a></li>
            <li><a href="#">Corporate Profile</a></li>
            <li><a href="#">Working with Us</a></li>
            <li><a href="#">Meet with Us</a></li>
            <li><a href="#">Testimonials</a></li>
            <li><a href="#">Our Services</a>
            <ul>
                <!--li class="chikis"><a href="#" class="abouta">Fixed Tour Departures</a></li>
                <li class="chikis"><a href="#" class="abouta">Custom Itineraries</a></li>
                <li class="chikis"><a href="#" class="abouta">Group Travel </a></li>
                <li class="chikis"><a href="#" class="abouta">Hotel Reservations</a></li>
                <li class="chikis"><a href="#" class="abouta">Transport & Logistics</a></li>
                <li class="chikis"><a href="#" class="abouta">Corporate Travel</a></li>
                <li><a href="terms.php" class="terms">Terms &amp; Conditions</a></li-->
            </ul></li>

        </ul>
    </li>

</ul>
    </div>

    <div>

        <table>
            <tr>
                <td id="present" style="float: left; width: 830px; height: 680px; margin-left: 10px; margin-top: 30px; background: #9C1B2D; "></td>

            </tr>
        </table>

    </div>

</body>
</html>