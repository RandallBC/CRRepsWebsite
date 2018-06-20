<html>
<head>
<link rel="stylesheet" type="text/css" href="css/destinystyle.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/general.js"></script>
<script type="text/javascript" src="js/jquery-1.js"></script>

<style>

    .taba{
        width:170px !important;
        height:200px;
        /*background-image: url(images/backmen.jpg);
        border-radius: 2px;
        border: 1px solid #585919 !important;*/
    }

</style>
</head>

<script type="text/javascript">

    $(document).ready(function() {

        $('#sanjose').mouseover(function(){

            $.ajax({
                type: "POST",
                url: "destinations/subregions/sanjose/load.php",
                success: function(a) {
                    $('#destinat').html(a);

                }
            });
        });

        $('#savegre').mouseover(function(){

            $.ajax({
                type: "POST",
                url: "destinations/subregions/savegre/load.php",
                success: function(a) {

                    $('#destinat').html(a);

                }
            });
        });

        $('#turrialba').mouseover(function(){

            $.ajax({
                type: "POST",
                url: "destinations/subregions/turrialba/load.php",
                success: function(a) {

                    $('#destinat').html(a);

                }
            });
        });

        $('#sarapiqui').mouseover(function(){

            $.ajax({
                type: "POST",
                url: "destinations/subregions/sarapiqui/load.php",
                success: function(a) {

                    $('#destinat').html(a);

                }
            });
        });

        $('#tortuguero').mouseover(function(){

            $.ajax({
                type: "POST",
                url: "destinations/subregions/tortuguero/load.php",
                success: function(a) {

                    $('#destinat_cc').html(a);

                }
            });
        });

        $('#barracolorado').mouseover(function(){

            $.ajax({
                type: "POST",
                url: "destinations/subregions/barracolorado/load.php",
                success: function(a) {

                    $('#destinat_cc').html(a);

                }
            });
        });

        $('#puertoviejo').mouseover(function(){

            $.ajax({
                type: "POST",
                url: "destinations/subregions/puertoviejo/load.php",
                success: function(a) {

                    $('#destinat_cc').html(a);

                }
            });
        });

        $('#puertolimon').mouseover(function(){

            $.ajax({
                type: "POST",
                url: "destinations/subregions/puertolimon/load.php",
                success: function(a) {

                    $('#destinat_cc').html(a);

                }
            });
        });

        $('#fortunarenal').mouseover(function(){

            $.ajax({
                type: "POST",
                url: "destinations/subregions/fortunarenal/load.php",
                success: function(a) {

                    $('#destinat_nr').html(a);

                }
            });
        });

        $('#elenamonte').mouseover(function(){

            $.ajax({
                type: "POST",
                url: "destinations/subregions/elenamonte/load.php",
                success: function(a) {

                    $('#destinat_nr').html(a);

                }
            });
        });

        $('#bocatapada').mouseover(function(){

            $.ajax({
                type: "POST",
                url: "destinations/subregions/bocatapada/load.php",
                success: function(a) {

                    $('#destinat_nr').html(a);

                }
            });
        });

        $('#bijagua').mouseover(function(){

            $.ajax({
                type: "POST",
                url: "destinations/subregions/bijagua/load.php",
                success: function(a) {

                    $('#destinat_nr').html(a);

                }
            });
        });

        $('#papagayo').mouseover(function(){

            $.ajax({
                type: "POST",
                url: "destinations/subregions/papagayo/load.php",
                success: function(a) {

                    $('#destinat_np').html(a);

                }
            });
        });

        $('#tybbays').mouseover(function(){

            $.ajax({
                type: "POST",
                url: "destinations/subregions/tybbays/load.php",
                success: function(a) {

                    $('#destinat_np').html(a);

                }
            });
        });

        $('#nsycbeachs').mouseover(function(){

            $.ajax({
                type: "POST",
                url: "destinations/subregions/nsycbeachs/load.php",
                success: function(a) {

                    $('#destinat_np').html(a);

                }
            });
        });

        $('#viejamont').mouseover(function(){

            $.ajax({
                type: "POST",
                url: "destinations/subregions/viejamont/load.php",
                success: function(a) {

                    $('#destinat_np').html(a);

                }
            });
        });

        $('#nicoya').mouseover(function(){

            $.ajax({
                type: "POST",
                url: "destinations/subregions/nicoya/load.php",
                success: function(a) {

                    $('#destinat_cp').html(a);

                }
            });
        });

        $('#jhyhbeach').mouseover(function(){

            $.ajax({
                type: "POST",
                url: "destinations/subregions/jhyhbeach/load.php",
                success: function(a) {

                    $('#destinat_cp').html(a);

                }
            });
        });

        $('#esteriquepos').mouseover(function(){

            $.ajax({
                type: "POST",
                url: "destinations/subregions/esteriquepos/load.php",
                success: function(a) {

                    $('#destinat_cp').html(a);

                }
            });
        });

        $('#dominical').mouseover(function(){

            $.ajax({
                type: "POST",
                url: "destinations/subregions/dominical/load.php",
                success: function(a) {

                    $('#destinat_sp').html(a);

                }
            });
        });

        $('#drakecano').mouseover(function(){

            $.ajax({
                type: "POST",
                url: "destinations/subregions/drakecano/load.php",
                success: function(a) {

                    $('#destinat_sp').html(a);

                }
            });
        });

        $('#corcovado').mouseover(function(){

            $.ajax({
                type: "POST",
                url: "destinations/subregions/corcovado/load.php",
                success: function(a) {

                    $('#destinat_sp').html(a);

                }
            });
        });

        $('#rivaschirripo').mouseover(function(){

            $.ajax({
                type: "POST",
                url: "destinations/subregions/rivaschirripo/load.php",
                success: function(a) {

                    $('#destinat_sp').html(a);

                }
            });
        });

        $('#burica').mouseover(function(){

            $.ajax({
                type: "POST",
                url: "destinations/subregions/burica/load.php",
                success: function(a) {

                    $('#destinat_sp').html(a);

                }
            });
        });


        //arriba de aki van los ajax

    });

</script>




<div id="contenedor">

    <input id="tab-1" type="radio" checked="checked" name="radio-set" class="tab-selector-1" />

    <label for="tab-1" class="tab-label-1">Central Valley</label>

   

    <input id="tab-2" type="radio" name="radio-set" class="tab-selector-2" />

    <label for="tab-2" class="tab-label-2">Caribbean Coast</label>

   

    <input id="tab-3" type="radio" name="radio-set" class="tab-selector-3" />

    <label for="tab-3" class="tab-label-3">Northern Region</label>

    

    <input id="tab-4" type="radio" name="radio-set" class="tab-selector-4" />

    <label for="tab-4" class="tab-label-4">North Pacific</label>

   

    <input id="tab-5" type="radio" name="radio-set" class="tab-selector-5" />

    <label for="tab-5" class="tab-label-5">Central Pacific</label>

   

    <input id="tab-6" type="radio" name="radio-set" class="tab-selector-6" />

    <label for="tab-6" class="tab-label-6">South Pacific</label>

    <div class="content">

        <div class="content-1">
         <table border="0px" style="width: 970px; height: 190px;">
             <tr>
                 <td class="taba" rowspan="2">

                            <li class="tabula"><a class="tabula2" id="sanjose" href="#" >San Jose City</a></li>
                            <li class="tabula"><a class="tabula2" id="savegre" href="#" >Savegre Valley</a></li>
                            <li class="tabula"><a class="tabula2" id="turrialba" href="#" >Turrialba Valley</a></li>
                            <li class="tabula"><a class="tabula2" id="sarapiqui" href="#" >La Virgen & Sarapiqui</a></li>

                 </td>
                 <td width="830px" height="390px" id="destinat" style="-webkit-transition: .1s; -moz-transition: .1s; -o-transition: .1s; -ms-transition: .1s;">
                     <iframe  src="destinations/centralvalley_carrusel/coolcarousel.php" width="800px" height="390px" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" ></iframe>

                 </td>
             </tr>
         </table>

        </div>

        <div class="content-2">

            <table border="0px" style="width: 980px;">
                <tr>
                    <td class="taba">
                        <li class="tabula"><a class="tabula2" id="tortuguero" href="#" >Tortuguero Village</a></li>
                        <li class="tabula"><a class="tabula2" id="barracolorado" href="#" >Barra del Colorado</a></li>
                        <li class="tabula"><a class="tabula2" id="puertoviejo" href="#" >Puerto Viejo Town </a></li>
                        <li class="tabula"><a class="tabula2" id="puertolimon" href="#" >Puerto Lim&oacute;n</a></li>
                    </td>
                    <td width="830px" height="190px" id="destinat_cc" style="-webkit-transition: .1s; -moz-transition: .1s; -o-transition: .1s; -ms-transition: .1s;">
                        <iframe  src="destinations/caribbeancoast_carrusel/coolcarousel.php" width="800px" height="390px" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" ></iframe>
                    </td>
                </tr>
            </table>

        </div>

        <div class="content-3">

            <table border="0px" style="width: 980px;">
                <tr>
                    <td class="taba">
                        <li class="tabula"><a class="tabula2" id="fortunarenal" href="#" >La Fortuna & Arenal Lake</a></li>
                        <li class="tabula"><a class="tabula2" id="elenamonte" href="#" >Santa Elena & Monteverde</a></li>
                        <li class="tabula"><a class="tabula2" id="bocatapada" href="#" >Boca Tapada de San Carlos</a></li>
                        <li class="tabula"><a class="tabula2" id="bijagua" href="#" >Bijagua de Upala</a></li>
                    </td>
                    <td width="830px" height="190px" id="destinat_nr" style="-webkit-transition: .1s; -moz-transition: .1s; -o-transition: .1s; -ms-transition: .1s;">
                        <iframe  src="destinations/northernregion_carrusel/coolcarousel.php" width="800px" height="390px" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" ></iframe>
                    </td>
                </tr>
            </table>

        </div>

        <div class="content-4">

            <table border="0px" style="width: 980px;">
                <tr>
                    <td class="taba">
                        <li class="tabula"><a class="tabula2" id="papagayo" href="#" >Papagayo Gulf</a></li>
                        <li class="tabula"><a class="tabula2" id="tybbays" href="#" >Tamarindo & Brasilito Bays</a></li>
                        <li class="tabula"><a class="tabula2" id="nsycbeachs" href="#" >Nosara, Samara & Carrillo Beach Towns</a></li>
                        <li class="tabula"><a class="tabula2" id="viejamont" href="#" >Rinc&oacute;n de la Vieja Mountains</a></li>
                    </td>
                    <td width="830px" height="190px" id="destinat_np" style="-webkit-transition: .1s; -moz-transition: .1s; -o-transition: .1s; -ms-transition: .1s;">
                        <iframe  src="destinations/northpacific_carrusel/coolcarousel.php" width="800px" height="390px" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" ></iframe>
                    </td>
                </tr>
            </table>

        </div>

        <div class="content-5">

            <table border="0px" style="width: 980px;">
                <tr>
                    <td class="taba">
                        <li class="tabula"><a class="tabula2" id="nicoya" href="#" >Nicoya Peninsula & Gulf</a></li>
                        <li class="tabula"><a class="tabula2" id="jhyhbeach" href="#" >Jaco, Herradura & Hermosa Beach Towns</a></li>
                        <li class="tabula"><a class="tabula2" id="esteriquepos" href="#" >Esterillos & Quepos</a></li>
                    </td>
                    <td width="830px" height="190px" id="destinat_cp" style="-webkit-transition: .1s; -moz-transition: .1s; -o-transition: .1s; -ms-transition: .1s;">
                        <iframe  src="destinations/centralpacific_carrusel/coolcarousel.php" width="800px" height="390px" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" ></iframe>
                    </td>
                </tr>
            </table>

        </div>

        <div class="content-6">

            <table border="0px" style="width: 980px;">
                <tr>
                    <td class="taba">
                        <li class="tabula"><a class="tabula2" id="dominical" href="#" >Dominical Town & Ballena Bay</a></li>
                        <li class="tabula"><a class="tabula2" id="drakecano" href="#" >Drake Bay & Ca&ntilde;o Island</a></li>
                        <li class="tabula"><a class="tabula2" id="corcovado" href="#" >Corcovado & Puerto Jim&eacute;nez</a></li>
                        <li class="tabula"><a class="tabula2" id="rivaschirripo" href="#" >Rivas & Chirripo Peak</a></li>
                        <li class="tabula"><a class="tabula2" id="burica" href="#" >Dulce Gulf & Burica Peninsula</a></li>
                    </td>
                    <td width="830px" height="190px" id="destinat_sp" style="-webkit-transition: .1s; -moz-transition: .1s; -o-transition: .1s; -ms-transition: .1s;">
                        <iframe  src="destinations/southpacific_carrusel/coolcarousel.php" width="800px" height="390px" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" ></iframe>
                    </td>
                </tr>
            </table>

        </div>

       </div>
</div>

</html>