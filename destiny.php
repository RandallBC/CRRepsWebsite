<html>
<head>
<link rel="stylesheet" type="text/css" href="css/destinystyle.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/general.js"></script>
<style>

    .taba{
        width:170px !important;
        height:200px;
    }

</style>
</head>

<script type="text/javascript">

    function destiload(lugar,region) {

        $.ajax({
            type: "POST",
            url: "destinations/subregions/"+lugar+"/load.php",
            success: function(a) {
                $('#'+region).html(a);
            }
        });
    }

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
         <table border="0px" style="width: 980px; height: 725px;">
             <tr>
                <td class="taba" rowspan="2">
                    <li class="tabula"><a class="tabula2" onmouseover="destiload('sanjose','destinat');" href="#" >San Jose City</a></li>
                    <li class="tabula"><a class="tabula2" onmouseover="destiload('savegre','destinat');" href="#" >Savegre Valley</a></li>
                    <li class="tabula"><a class="tabula2" onmouseover="destiload('turrialba','destinat');" href="#" >Turrialba Valley</a></li>
                    <li class="tabula"><a class="tabula2" onmouseover="destiload('sarapiqui','destinat');" href="#" >La Virgen & Sarapiqui</a></li>
                </td>
                <td width="830px" height="620px" id="destinat" style="-webkit-transition: .1s; -moz-transition: .1s; -o-transition: .1s; -ms-transition: .1s;">
                     <iframe  src="destinations/centralvalley_carrusel/coolcarousel.php" width="820px" height="725px" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" ></iframe>
                </td>
             </tr>
         </table>
        </div>

        <div class="content-2">
        <table border="0px" style="width: 980px; height: 725px;">
        <tr>
            <td class="taba">
                <li class="tabula"><a class="tabula2" onmouseover="destiload('tortuguero','destinat_cc')" href="#" >Tortuguero Village</a></li>
                <li class="tabula"><a class="tabula2" onmouseover="destiload('barracolorado','destinat_cc');" href="#" >Barra del Colorado</a></li>
                <li class="tabula"><a class="tabula2" onmouseover="destiload('puertoviejo','destinat_cc ');" href="#" >Puerto Viejo Town </a></li>
                <li class="tabula"><a class="tabula2" onmouseover="destiload('puertolimon','destinat_cc');" href="#" >Puerto Lim&oacute;n</a></li>
            </td>
            <td width="830px" height="190px" id="destinat_cc" style="-webkit-transition: .1s; -moz-transition: .1s; -o-transition: .1s; -ms-transition: .1s;">
                <iframe  src="destinations/caribbeancoast_carrusel/coolcarousel.php" width="820px" height="725px" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" ></iframe>
            </td>
        </tr>
        </table>
        </div>

        <div class="content-3">
        <table border="0px" style="width: 980px; height: 725px;">
        <tr>
         <td class="taba">
            <li class="tabula"><a class="tabula2" onmouseover="destiload('fortunarenal','destinat_nr');" href="#" >La Fortuna & Arenal Lake</a></li>
            <li class="tabula"><a class="tabula2" onmouseover="destiload('elenamonte','destinat_nr');" href="#" >Santa Elena & Monteverde</a></li>
            <li class="tabula"><a class="tabula2" onmouseover="destiload('bocatapada','destinat_nr');" href="#" >Boca Tapada de San Carlos</a></li>
            <li class="tabula"><a class="tabula2" onmouseover="destiload('bijagua','destinat_nr');" href="#" >Bijagua de Upala</a></li>
         </td>
         <td width="830px" height="190px" id="destinat_nr" style="-webkit-transition: .1s; -moz-transition: .1s; -o-transition: .1s; -ms-transition: .1s;">
            <iframe  src="destinations/northernregion_carrusel/coolcarousel.php" width="820px" height="725px" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" ></iframe>
         </td>
        </tr>
        </table>
        </div>

        <div class="content-4">
        <table border="0px" style="width: 980px; height: 725px;">
        <tr>
        <td class="taba">
            <li class="tabula"><a class="tabula2" onmouseover="destiload('papagayo','destinat_np');" href="#" >Papagayo Gulf</a></li>
            <li class="tabula"><a class="tabula2" onmouseover="destiload('tybbays','destinat_np');" href="#" >Tamarindo & Brasilito Bays</a></li>
            <li class="tabula"><a class="tabula2" onmouseover="destiload('nsycbeachs','destinat_np');" href="#" >Nosara, Samara & Carrillo Beach Towns</a></li>
            <li class="tabula"><a class="tabula2" onmouseover="destiload('viejamont','destinat_np');" href="#" >Rinc&oacute;n de la Vieja Mountains</a></li>
        </td>
        <td width="830px" height="190px" id="destinat_np" style="-webkit-transition: .1s; -moz-transition: .1s; -o-transition: .1s; -ms-transition: .1s;">
        <iframe  src="destinations/northpacific_carrusel/coolcarousel.php" width="820px" height="725px" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" ></iframe>
        </td>
        </tr>
        </table>
        </div>

        <div class="content-5">
        <table border="0px" style="width: 980px; height: 725px;">
        <tr>
        <td class="taba">
            <li class="tabula"><a class="tabula2" onmouseover="destiload('nicoya','destinat_cp');" href="#" >Nicoya Peninsula & Gulf</a></li>
            <li class="tabula"><a class="tabula2" onmouseover="destiload('jhyhbeach','destinat_cp');" href="#" >Jaco, Herradura & Hermosa Beach Towns</a></li>
            <li class="tabula"><a class="tabula2" onmouseover="destiload('esteriquepos','destinat_cp');" href="#" >Esterillos & Quepos</a></li>
        </td>
        <td width="830px" height="190px" id="destinat_cp" style="-webkit-transition: .1s; -moz-transition: .1s; -o-transition: .1s; -ms-transition: .1s;">
        <iframe  src="destinations/centralpacific_carrusel/coolcarousel.php" width="820px" height="725px" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" ></iframe>
        </td>
        </tr>
        </table>
        </div>

        <div class="content-6">
        <table border="0px" style="width: 980px; height: 725px;">
        <tr>
        <td class="taba">
            <li class="tabula"><a class="tabula2" onmouseover="destiload('dominical','destinat_sp');" href="#" >Dominical Town & Ballena Bay</a></li>
            <li class="tabula"><a class="tabula2" onmouseover="destiload('drakecano','destinat_sp');" href="#" >Drake Bay & Ca&ntilde;o Island</a></li>
            <li class="tabula"><a class="tabula2" onmouseover="destiload('corcovado','destinat_sp');" href="#" >Corcovado & Puerto Jim&eacute;nez</a></li>
            <li class="tabula"><a class="tabula2" onmouseover="destiload('rivaschirripo','destinat_sp');" href="#" >Rivas & Chirripo Peak</a></li>
            <li class="tabula"><a class="tabula2" onmouseover="destiload('burica','destinat_sp');" href="#" >Dulce Gulf & Burica Peninsula</a></li>
        </td>
        <td width="830px" height="190px" id="destinat_sp" style="-webkit-transition: .1s; -moz-transition: .1s; -o-transition: .1s; -ms-transition: .1s;">
        <iframe  src="destinations/southpacific_carrusel/coolcarousel.php" width="820px" height="725px" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" ></iframe>
        </td>
        </tr>
        </table>
        </div>
       </div>
</div>
</html>
