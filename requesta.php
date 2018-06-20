<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <link rel="stylesheet" href="css/quote.css" type="text/css" media="screen"/>

<?php
ini_set ('error_reporting', E_PARSE);
require_once("conexion.php");
?>

<script type="text/javascript"  src="js/jquery-2.1.1.min.js"></script>   <!-- botones de slide -->
    <script type="text/javascript" src="js/sliding.form.js"></script>
    <script type="text/javascript" src="js/ts_picker.js"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>



</head>
<style>

    span.reference{
        position:fixed;
        left:5px;
        top:5px;
        font-size:10px;
        text-shadow:1px 1px 1px #fff;
    }

    span.reference a{
        color:#555;
        text-decoration:none;
        text-transform:uppercase;
    }
    span.reference a:hover{
        color:#000;

    }
    h1{
        color:#ccc;
        font-size:36px;
        text-shadow:1px 1px 1px #fff;
        padding:20px;
    }

    #datosroom {
        margin: auto;
        position: absolute;
        top: 0; left: 0; bottom: 0; right: 0;
        width: 500px;
        z-index: 1001;
    }

    .content-datosroom {
        margin:0px auto;
        margin-top: 0px;
        position:relative;
        padding:10px;
        width:230px;
        height:190px;
        border-radius:5px;
        background-color: #eeeeee;
        box-shadow: 0 2px 5px #666666;
        border: 2px solid #000000;
    }

    .content-popuppregu h2, .content-popupnews h2 {
        color:#48484B;
        border-bottom: 1px solid #48484B;
        margin-top: 0;
        padding-bottom: 4px;
    }

    /*.popup-overlay {
        left: 0;
        position: absolute;
        top: 0;
        width: 100%;
        z-index: 999;
        display:none;
        background-color: #777777;
        cursor: pointer;
        opacity: 0.7;
    }*/

    .closeroom {
        position: absolute;
        right: 15px;
    }


</style>

<?php
session_start();

if(isset($_SESSION['email'])) {
    ?>
    <body>


    <script type="text/javascript">

        function switchHidden(elemName) {
            var tmpObj = document.getElementById(elemName);

            if (tmpObj.style.visibility == "hidden") {
                tmpObj.style.visibility = "visible"
            }
            else {
                tmpObj.style.visibility = "hidden"
            }
        }


    </script>


    <div id="content">
        <!--h2>Please Follow the Steps</h2-->
        <div id="wrapper">
            <div id="navigation" style="display:none;">
                <ul style=" margin: 0px auto;">
                    <li class="selected">
                        <a href="#">Travel Plans</a>
                    </li>
                    <li>
                        <a href="#">Areas of Interest</a>
                    </li>
                    <li>
                        <a href="#">Activities of Interest</a>
                    </li>
                    <li>
                        <a href="#">Getting Around</a>
                    </li>
                </ul>
            </div>
            <div id="steps">
                <form id="formElem" name="formElem" action="quote_process.php" method="post">

                    <fieldset class="step">
                        <legend>Travel Plans</legend>
                        <p style="width: 800px;">
                            <label style="width: 180px;" for="nametrip">Name your Trip*</label>
                            <input style="width: 300px; " id="nametrip" name="nametrip" required="required" type="text" AUTOCOMPLETE=OFF/>
                        </p>

                        <table border="0px" style="width: 800px;">
                            <tr>
                                <td valign="top">
                                    <label style="font: 18px Candara;">When would you like to travel?</label>

                                    <p>
                                        <label for="datepicker1">Arrival*</label>
                                        <input id="datepicker1" name="datepicker1" type="date" AUTOCOMPLETE=OFF required="required"/>
                                    </p>

                                    <p>
                                        <label for="entryPnt">Entry Point</label>
                                        <select name="entryPnt" style="width: 245px;">

                                            <?php
                                            $entrada = mysql_query("select id, type, name from country_gateway where country__id = 1");
                                            while ($row = mysql_fetch_array($entrada)) {
                                                $valor = $row["id"];
                                                $nombre = $row["name"];
                                                echo "<option value=" . $valor . ">" . $nombre . "</option>";
                                            }
                                            ?>
                                        </select>

                                    </p>

                                    <p>
                                        <label for="flexDate" style="width: 160px;">Are dates flexible?</label>
                                        <select style="width: auto;" name='flexDate'>
                                            <option value='0' selected='selected'>No</option>
                                            <option value='1'>Yes</option>
                                        </select>
                                    </p>

                                </td>
                                <td valign="top" style="padding-top: 22px;">   <!-- lado derecho -->
                                    <p>
                                        <label for="datepicker2">Departure*</label>
                                        <input id="datepicker2" name="datepicker2" type="date" AUTOCOMPLETE=OFF required="required"/>
                                    </p>

                                    <p>
                                        <label for="departurePnt">Departure Point</label>
                                        <select name="departurePnt" style="width: 245px">

                                            <?php
                                            $salida = mysql_query("select id, type, name from country_gateway where country__id = 1");
                                            while ($row2 = mysql_fetch_array($salida)) {
                                                $valor2 = $row2["id"];
                                                $nombre2 = $row2["name"];
                                                echo "<option value=" . $valor2 . ">" . $nombre2 . "</option>";
                                            }
                                            ?>
                                        </select>
                                    </p>

                                    <p>
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
                        </table>

                        <p style="width: 800px;">
                            <label style="width: 180px; float: left;">Number of rooms required?</label><label
                                style="color: #FF0000; width: 200px;">( * It is Required at Least 1 Room)</label>
                            <input type="text" id="cuartoarray" name="cuartoarray" style="width: auto; visibility: hidden;">
                        </p>

                        <div id="datosroom" style="display: none;">
                            <div class="content-datosroom">
                                <div class="closeroom"><a href="#" id="closeroom"><img onclick="closeroom()" src="images/iconos_topmenu/cerrar.png"></a>
                                </div>
                                <div>
                                    <h2>Room Request</h2>
                                    <h4 style="margin: 10px; color: #9C1B2D">Please Complete The Fields</h4>
                                    <table border="0" style="width:210px; height: 80px; margin: 0px auto;">
                                        <tr>
                                            <td style="width: 200px;">Adults</td>
                                            <td>
                                                <select name='adultillos' id="adultillos" style="width: 100px; float: left;">
                                                    <option value='1' selected='selected'>1</option>
                                                    <option value='2'>2</option>
                                                    <option value='3'>3</option>
                                                    <option value='4'>4</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px;">Childrens</td>
                                            <td>
                                                <select name='mocosos' id="mocosos" style="width: 100px; float: left;">
                                                    <option value='0' selected='selected'>0</option>
                                                    <option value='1'>1</option>
                                                    <option value='2'>2</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>

                                            <td colspan="2"><input type="text" required="none" placeholder="Childrens Ages (0 if no children)" value="0" id="mocosedades" name="mocosedades" style="width: 185px; margin-left: 10px;"/></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px;"></td>
                                            <td><img src="images/agregar.png" id="addroom" onclick="Pedir();" style="float: right; width: auto; height: auto; padding: 2px; border: 1px solid #cccccc; font: normal 14px Candara;"/>
                                            </td>
                                        </tr>
                                    </table>

                                </div>
                            </div>
                        </div>


                        <div id="cuartos">

                            <style>
                                th, td {
                                    width: 200px;
                                    height: 15px;
                                    text-align: center;
                                }

                                #agre, #delet {
                                    height: 15px;
                                    width: 15px !important;
                                }

                            </style>

                            <script>

                                function closeroom() {
                                    $('#datosroom').slideUp('slow');
                                    return false;
                                }

                                function Agrerooms() {
                                    $('#datosroom').slideDown('slow');
                                    return false;
                                }

                                var cont = -1;
                                var arreglo = [];

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
                                    if (cont != 9) {
                                        var table = document.getElementById("myTable");
                                        {
                                            var concatenados = "";

                                            var row = table.insertRow(0);
                                            var cell1 = row.insertCell(0);
                                            var cell2 = row.insertCell(1);
                                            var cell3 = row.insertCell(2);
                                            var cell4 = row.insertCell(3);
                                            cont++;

                                            cell1.innerHTML = "Room " + (cont+1);
                                            cell2.innerHTML = adultos;
                                            cell3.innerHTML = ninos;
                                            cell4.innerHTML = edades;

                                            /* INICIO meter las varas en el arreglo para enviarlo*/

                                            concatenados = adultos + ninos + edades;
                                            arreglo [cont] = concatenados;

                                            document.getElementById('cuartoarray').value = arreglo.toString();
                                        }
                                    } else {
                                        alert("Your Request Can Only Have 10 Rooms.");
                                    }
                                }

                            </script>

                            <table border="0">

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

                            <table id="myTable" border="0">

                            </table>


                        </div>

                        <p style="width: 800px;">
                            <label style="width: 250px" for="loacomo">Preferred level of accommodation?*</label>
                            <select id="loacomo" name="loacomo" style="width: 260px;">
                                <option value="1" selected="selected">Standard (up to $125/room/night)</option>
                                <option value="2">Superior (up to $225/room/night)</option>
                                <option value="3">Deluxe (up to $375/room/night)</option>
                                <option value="4">Luxury (over $375/room/night)</option>
                                <option value="5">Jungle Lodges ($100-150/room/night)</option>
                            </select>

                        </p>

                        <p style="width: 800px;">
                            <label style="width: 250px" for="tripFocus">What is the primary focus of your trip?*</label>
                            <select id="tripFocus" name="tripFocus" style="width: 300px"
                                    onChange="if(document.getElementById('otros').selected) { switchHidden('tripFocusO');}  else { document.getElementById('tripFocusO').style.visibility = 'hidden';}">

                                <?php
                                $tfocus = mysql_query("select * from sales_focus order by name");
                                while ($row3 = mysql_fetch_array($tfocus)) {
                                    $valor3 = $row3["id"];
                                    $nombre3 = $row3["name"];
                                    echo "<option value=" . $valor3 . ">" . $nombre3 . "</option>";
                                }
                                ?>
                                <option value="0" id="otros" name="otros">Others</option>
                            </select>

                            <input type="text" id="tripFocusO" name="tripFocusO" value="Tell Us Your Focus Trip..." style="margin-left: 265px; width: 400px; visibility: hidden;" required="none"/>

                        </p>
                        <br><br><br><br>
                        <label for="fields" style="float: left; margin-left: 70px; color: #FF0000;">Fields with * are required</label>

                    </fieldset>

                    <fieldset class="step">
                        <legend>Areas of Interest</legend>
                        <p style="width: 800px;">Please select the locations that you want to visit during your
                            trip:</p>

                        <table border="0px" style="width: 800px; margin: 0px auto; padding-top: 20px">
                            <?php $cont = 0; ?>
                            <tr>
                                <td style="width: 350px !important;">

                                    <?php
                                    $areasinterest = mysql_query("select * from sales_area where country__id = 1 order by name");
                                    while ($row4 = mysql_fetch_array($areasinterest)) {
                                    $valor4 = $row4["id"];
                                    $nombre4 = $row4["name"];
                                    $cont++;

                                    if ($cont == (mysql_num_rows($areasinterest) / 2) + 1) { ?>
                                </td>
                                <td style="width: 350px !important;">

                                    <?php } ?>

                                    <input type="checkbox" class="ckecksareas" id="<?php echo $valor4; ?>" name="<?php echo "area" . $valor4; ?>" value="<?php echo $nombre4; ?>"/><?php echo $nombre4; ?> <br><br>

                                    <?php } ?>

                                </td>
                            </tr>
                            <tr>
                                <td style=" width: 80px; height: 25px; float: left;">
                                    <input style="width: 20px; height: 15px;" type="checkbox" name="areasother" id="areasother" value="other" onclick="switchHidden('areasothertext')"/>Other
                                    <input type="text" id="areasothertext" name="areasothertext" value="Please tell us your place to visit..." required="no" style="margin-left: 5px; width: 750px; visibility: hidden"/></td>
                            </tr>
                        </table>
                    </fieldset>

                    <fieldset class="step">

                        <legend>Activities of Interest</legend>

                        <p style="width: 800px;"><label style="width: 300px;">What activities would you like to include
                                on your trip?</label></p>


                        <table border="0px" style="width: 750px; margin: 0px auto;">
                            <p style="width: 800px;"><label style="width: 150px;">Water Activities</label></p>

                            <table border="0px" style="width: 800px; margin: 0px auto; vertical-align: top;">
                                <?php $cont2 = 0; ?>
                                <tr valign="top" ;>
                                    <td style="width: auto !important;">

                                        <?php
                                        $water = mysql_query("select * from sales_activity where type = 'W' order by name");
                                        while ($row5 = mysql_fetch_array($water)) {
                                        $valor5 = $row5["id"];
                                        $nombre5 = $row5["name"];
                                        $cont2++;

                                        if ($cont2 == ceil((mysql_num_rows($water) / 3) + 1)) { ?>
                                    </td>
                                    <td style="width: auto !important;">
                                        <?php $cont2 = 1;
                                        } ?>
                                        <input type="checkbox" class="ckecksareas" id="<?php echo "activ" . $valor5; ?>" name="<?php echo "activ" . $valor5; ?>"
                                               value="<?php echo $nombre5; ?>"/><?php echo $nombre5; ?> <br>
                                        <?php } ?>
                                    </td>
                                </tr>

                            </table>

                            <p style="width: 800px;"><label style="width: 150px;">Land Activities</label></p>

                            <table border="0px" style="width: 800px; margin: 0px auto;">
                                <?php $contL = 0; ?>
                                <tr valign="top" ;>
                                    <td style="width: auto !important;">

                                        <?php
                                        $landa = mysql_query("select * from sales_activity where type = 'L' order by name");
                                        while ($row6 = mysql_fetch_array($landa)) {
                                        $valor6 = $row6["id"];
                                        $nombre6 = $row6["name"];
                                        $contL++;

                                        if ($contL == ceil((mysql_num_rows($landa) / 3) + 1)) { ?>
                                    </td>
                                    <td style="width: auto !important;">
                                        <?php $contL = 1;
                                        } ?>

                                        <input type="checkbox" class="ckecksareas" id="<?php echo "activ" . $valor6; ?>" name="<?php echo "activ" . $valor6; ?>"
                                               value="<?php echo $nombre6; ?>"/><?php echo $nombre6; ?> <br>
                                        <?php } ?>
                                    </td>
                                </tr>

                            </table>

                            <p style="width: 800px;"><label style="width: 150px;">Aerial Activities</label></p>

                            <table border="0px" style="width: 800px; margin: 0px auto; vertical-align: top;">
                                <?php $cont4 = 0; ?>
                                <tr valign="top" ;>
                                    <td style="width: auto !important;">

                                        <?php
                                        $airs = mysql_query("select * from sales_activity where type = 'A' order by name");
                                        while ($row7 = mysql_fetch_array($airs)) {
                                        $valor7 = $row7["id"];
                                        $nombre7 = $row7["name"];
                                        $cont4++;

                                        if ($cont4 == ceil((mysql_num_rows($airs) / 3) + 1)) { ?>
                                    </td>
                                    <td style="width: auto !important;">
                                        <?php $cont4 = 1;
                                        } ?>
                                        <input type="checkbox" class="ckecksareas" id="<?php echo "activ" . $valor7; ?>" name="<?php echo "activ" . $valor7; ?>"
                                               value="<?php echo $nombre7; ?>"/><?php echo $nombre7; ?> <br>
                                        <?php } ?>
                                    </td>
                                </tr>

                            </table>


                            <tr>
                                <td style=" width: 80px; height: 25px; float: left;">
                                    <p style="width: 800px; height: auto;">

                                        <input style="width: 30px; float: left;" type="checkbox" class="ckecksareas" name="activitiesother" id="activitiesother" value="other" onclick="switchHidden('activitiesothertext')"/>
                                        <label for="tripActsO" style="float: left;">Other</label><input type="text" id="activitiesothertext" name="activitiesothertext" value="Please tell us your activity..." style="margin-left: 5px; width: 780px; visibility: hidden"/>
                                </td> </p>
                            </tr>

                        </table>

                    </fieldset>

                    <fieldset class="step">
                        <legend>Getting Around</legend>
                        <p style="width: 800px;"><label style="width: 300px;">What is your preferred type of
                                transportation?</label></p>

                        <p style="width: 800px;"><label style="width: 100px;">Economy</label></p>

                        <table border="0px" style="width: 800px; margin: 0px auto; vertical-align: top;">
                            <?php $contE = 0; ?>
                            <tr valign="top" ;>
                                <td style="width: auto !important;">

                                    <?php
                                    $economy = mysql_query("select * from sales_transfer where category = 'E' order by name");
                                    while ($rowE = mysql_fetch_array($economy)) {
                                    $valorE = $rowE["id"];
                                    $nombreE = $rowE["name"];
                                    $contE++;

                                    if ($contE == ceil((mysql_num_rows($economy) / 3) + 1)) { ?>
                                </td>
                                <td style="width: auto !important;">
                                    <?php $contE = 1;
                                    } ?>
                                    <input type="checkbox" class="ckecksareas" id="<?php echo $valorE; ?>" name="<?php echo "ga" . $valorE; ?>"
                                           value="<?php echo $nombreE; ?>"/><?php echo $nombreE; ?> <br><br>
                                    <?php } ?>
                                </td>
                            </tr>
                        </table>

                        <p style="width: 800px;"><label style="width: 100px;">Moderate</label></p>

                        <table border="0px" style="width: 800px; margin: 0px auto; vertical-align: top;">
                            <?php $contM = 0; ?>
                            <tr valign="top" ;>
                                <td style="width: auto !important;">

                                    <?php
                                    $moderate = mysql_query("select * from sales_transfer where category = 'M' order by name");
                                    while ($rowM = mysql_fetch_array($moderate)) {
                                    $valorM = $rowM["id"];
                                    $nombreM = $rowM["name"];
                                    $contM++;

                                    if ($contM == ceil((mysql_num_rows($moderate) / 3) + 1)) { ?>
                                </td>
                                <td style="width: auto !important;">
                                    <?php $contM = 1;
                                    } ?>
                                    <input type="checkbox" class="ckecksareas" id="<?php echo $valorM; ?>" name="<?php echo "ga" . $valorM; ?>"
                                           value="<?php echo $nombreM; ?>"/><?php echo $nombreM; ?> <br><br>
                                    <?php } ?>
                                </td>
                            </tr>
                        </table>

                        <p style="width: 800px;"><label style="width: 100px;">Deluxe</label></p>

                        <table border="0px" style="width: 800px; margin: 0px auto; vertical-align: top;">
                            <?php $contD = 0; ?>
                            <tr valign="top" ;>
                                <td style="width: auto !important;">

                                    <?php
                                    $deluxe = mysql_query("select * from sales_transfer where category = 'D' order by name");
                                    while ($rowD = mysql_fetch_array($deluxe)) {
                                    $valorD = $rowD["id"];
                                    $nombreD = $rowD["name"];
                                    $contD++;

                                    if ($contD == ceil((mysql_num_rows($deluxe) / 3) + 1)) { ?>
                                </td>
                                <td style="width: auto !important;">
                                    <?php $contD = 1;
                                    } ?>
                                    <input type="checkbox" class="ckecksareas" id="<?php echo $valorD; ?>" name="<?php echo "ga" . $valorD; ?>"
                                           value="<?php echo $nombreD; ?>"/><?php echo $nombreD; ?> <br><br>
                                    <?php } ?>
                                </td>
                            </tr>
                        </table>


                        <p style="width: 800px; text-align: justify;">
                            Please use the space below to let us know any additional comments, special needs and
                            information regarding your trip expectations in order to consider all your travel needs when
                            designing your tailor-made itinerary.<br/>
                            <textarea style="width: 788px; height: 50px; resize: none;" name="comment" id="comment"></textarea>

                        </p>

                        <p class="submit">
                            <button id="registerButton" type="submit">Send</button>
                        </p>
                    </fieldset>
                </form>
            </div>

        </div>
    </div>
    </body>
<?php
}
else {

    echo "<script>alert('There is no session started.');</script>";

}


?>


</html>