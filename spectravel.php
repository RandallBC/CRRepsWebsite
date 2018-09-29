<html>
<head>
    <meta charset="utf-8" />
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/general.js"></script>
    <link rel="stylesheet" href="css/specialtystyle.css" />
    <style>

        .css3-tabstrip
        {
            margin: 2px;
            width: 1010px;
            height: 570px;

        }
    </style>

    <script type="text/javascript">

        $(document).ready(function() {

            $('#multisport').mouseover(function(){


                $.ajax({
                    type: "POST",
                    url: "spectravel/subs/multisport/load.php",
                    success: function(a) {
                        $('#tdecarga').html(a);

                    }
                });
            });

            $('#equestrian').mouseover(function(){


                $.ajax({
                    type: "POST",
                    url: "spectravel/subs/equestrian/load.php",
                    success: function(a) {
                        $('#tdecarga').html(a);

                    }
                });
            });

            $('#cxc').mouseover(function(){


                $.ajax({
                    type: "POST",
                    url: "spectravel/subs/cxc/load.php",
                    success: function(a) {
                        $('#tdecarga').html(a);

                    }
                });
            });

            $('#walking').mouseover(function(){


                $.ajax({
                    type: "POST",
                    url: "spectravel/subs/walking/load.php",
                    success: function(a) {
                        $('#tdecarga').html(a);

                    }
                });
            });


            /* segunda pestaña */
            $('#birdwatch').mouseover(function(){


                $.ajax({
                    type: "POST",
                    url: "spectravel/subs/birdwatch/load.php",
                    success: function(a) {
                        $('#tdecargawild').html(a);

                    }
                });
            });

            $('#nathistory').mouseover(function(){


                $.ajax({
                    type: "POST",
                    url: "spectravel/subs/naturalhistory/load.php",
                    success: function(a) {
                        $('#tdecargawild').html(a);

                    }
                });
            });

            $('#phototour').mouseover(function(){


                $.ajax({
                    type: "POST",
                    url: "spectravel/subs/photography/load.php",
                    success: function(a) {
                        $('#tdecargawild').html(a);

                    }
                });
            });

            $('#whalphins').mouseover(function(){


                $.ajax({
                    type: "POST",
                    url: "spectravel/subs/whale/load.php",
                    success: function(a) {
                        $('#tdecargawild').html(a);

                    }
                });
            });

            $('#generaldiscovery').mouseover(function(){


                $.ajax({
                    type: "POST",
                    url: "spectravel/subs/generaldisco/load.php",
                    success: function(a) {
                        $('#tdecargaexper').html(a);

                    }
                });
            });

            $('#culinary').mouseover(function(){


                $.ajax({
                    type: "POST",
                    url: "spectravel/subs/culinary/load.php",
                    success: function(a) {
                        $('#tdecargaexper').html(a);

                    }
                });
            });

            $('#familytravel').mouseover(function(){


                $.ajax({
                    type: "POST",
                    url: "spectravel/subs/family/load.php",
                    success: function(a) {
                        $('#tdecargaexper').html(a);

                    }
                });
            });

            $('#honeymoons').mouseover(function(){


                $.ajax({
                    type: "POST",
                    url: "spectravel/subs/honeymoons/load.php",
                    success: function(a) {
                        $('#tdecargaexper').html(a);

                    }
                });
            });

            $('#latindances').mouseover(function(){


                $.ajax({
                    type: "POST",
                    url: "spectravel/subs/latindances/load.php",
                    success: function(a) {
                        $('#tdecargaexper').html(a);

                    }
                });
            });

            $('#yoga').mouseover(function(){


                $.ajax({
                    type: "POST",
                    url: "spectravel/subs/yoga/load.php",
                    success: function(a) {
                        $('#tdecargaexper').html(a);

                    }
                });
            });

            $('#volunthropy').mouseover(function(){


                $.ajax({
                    type: "POST",
                    url: "spectravel/subs/philantropy/load.php",
                    success: function(a) {
                        $('#tdecargaexper').html(a);

                    }
                });
            });

            $('#student').mouseover(function(){


                $.ajax({
                    type: "POST",
                    url: "spectravel/subs/student/load.php",
                    success: function(a) {
                        $('#tdecargaeduca').html(a);

                    }
                });
            });

            $('#performance').mouseover(function(){


                $.ajax({
                    type: "POST",
                    url: "spectravel/subs/musical/load.php",
                    success: function(a) {
                        $('#tdecargaeduca').html(a);

                    }
                });
            });

            $('#language').mouseover(function(){


                $.ajax({
                    type: "POST",
                    url: "spectravel/subs/language/load.php",
                    success: function(a) {
                        $('#tdecargaeduca').html(a);

                    }
                });
            });

            $('#kosher').mouseover(function(){


                $.ajax({
                    type: "POST",
                    url: "spectravel/subs/kosher/load.php",
                    success: function(a) {
                        $('#tdecargaspecneeds').html(a);

                    }
                });
            });

            $('#vegan').mouseover(function(){


                $.ajax({
                    type: "POST",
                    url: "spectravel/subs/vegan/load.php",
                    success: function(a) {
                        $('#tdecargaspecneeds').html(a);

                    }
                });
            });

            $('#disability').mouseover(function(){


                $.ajax({
                    type: "POST",
                    url: "spectravel/subs/disability/load.php",
                    success: function(a) {
                        $('#tdecargaspecneeds').html(a);

                    }
                });
            });

            $('#congress').mouseover(function(){


                $.ajax({
                    type: "POST",
                    url: "spectravel/subs/congresses/load.php",
                    success: function(a) {
                        $('#tdecargacorporate').html(a);

                    }
                });
            });

            $('#incentive').mouseover(function(){


                $.ajax({
                    type: "POST",
                    url: "spectravel/subs/incentive/load.php",
                    success: function(a) {
                        $('#tdecargacorporate').html(a);

                    }
                });
            });

     });
    </script>

</head>


<div class="css3-tabstrip">
    <ul>
        <li>
            <input type="radio" name="css3-tabstrip-0" checked="checked" id="css3-tabstrip-0-0" /><label for="css3-tabstrip-0-0" class="actadventures">Active Adventures</label>
            <div>


                <table border="0px" style="width: 1008px; height: 390px; background-color: #ffffcc;">
                    <tr>
                        <td id="taba">
                            <a id="multisport" class="multisport" href="#" >Multi-Sport Tours</a><br><br>
                            <a id="equestrian" class="equestrian" href="#" >Equestrian Tours</a><br><br>
                            <a id="cxc" class="cxc" href="#" >4X4 Adventures</a><br><br>
                            <a id="walking" class="walking" href="#" >Walking/Hiking Trips</a>
                        </td>
                        <td width="800px" height="390px" id="tdecarga" style="-webkit-transition: .1s; -moz-transition: .1s; -o-transition: .1s; -ms-transition: .1s;">
                            <iframe  src="spectravel/activeadventures/coolcarousel.php" width="790px" height="390px" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" ></iframe>
                        </td>
                    </tr>
                </table>

            </div>
        </li><li>
            <input type="radio" name="css3-tabstrip-0" id="css3-tabstrip-0-1" /><label for="css3-tabstrip-0-1" class="wildlife">Nature & Wildlife Tours</label>
            <div>
                <table border="0px" style="width: 1008px; height: 390px; background-color: #ffffcc;">
                    <tr>
                        <td id="taba">
                            <a id="birdwatch" class="birdwatch" href="#" >Bird-Watching</a><br><br>
                            <a id="nathistory" class="nathistory" href="#" >Natural History</a><br><br>
                            <a id="phototour" class="phototour" href="#" >Photography Tours</a><br><br>
                            <a id="whalphins" class="whalphins" href="#" >Whale & Dolphins</a>
                        </td>
                        <td width="800px" height="390px" id="tdecargawild" style="-webkit-transition: .1s; -moz-transition: .1s; -o-transition: .1s; -ms-transition: .1s;">
                            <iframe  src="spectravel/naturewildlife/coolcarousel.php" width="790px" height="390px" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" ></iframe>
                        </td>
                    </tr>
                </table>

            </div>
        </li><li>
            <input type="radio" name="css3-tabstrip-0" id="css3-tabstrip-0-2" /><label for="css3-tabstrip-0-2" class="experiential">Experiential Travel</label>
            <div>
                <table border="0px" style="width: 1008px; height: 390px; background-color: #ffffcc;">
                    <tr>
                        <td id="taba">
                            <a id="generaldiscovery" class="experiential" href="#" >General Discovery</a><br><br>
                            <a id="culinary" class="culinary" href="#" >Culinary Tours</a><br><br>
                            <a id="familytravel" class="experiential" href="#" >Family Travel</a><br><br>
                            <a id="honeymoons" class="experiential" href="#" >Honeymoons</a><br><br>
                            <a id="latindances" class="experiential" href="#" >Latin Dances</a><br><br>
                            <a id="yoga" class="yoga" href="#" >Yoga & Wellness</a><br><br>
                            <a id="volunthropy" class="experiential" href="#" >Volunteering &amp; <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Philanthropy</a>
                        </td>
                        <td width="800px" height="390px" id="tdecargaexper" style="-webkit-transition: .1s; -moz-transition: .1s; -o-transition: .1s; -ms-transition: .1s;">
                            <iframe  src="spectravel/experiential/coolcarousel.php" width="790px" height="390px" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" ></iframe>
                        </td>
                    </tr>
                </table>

            </div>
        </li>
        <li>
            <input type="radio" name="css3-tabstrip-0" id="css3-tabstrip-0-3" /><label for="css3-tabstrip-0-3" class="educational">Educational Travel</label>
            <div>
                <table border="0px" style="width: 1008px; height: 390px; background-color: #ffffcc;">
                    <tr>
                        <td id="taba">
                            <a id="student" class="educational" href="#" >Student Travel</a><br><br>
                            <a id="performance" class="educational" href="#" >Musical <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Performances</a><br><br>
                            <a id="language" class="educational" href="#" >Language <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Immersion</a>
                        </td>
                        <td width="800px" height="390px" id="tdecargaeduca" style="-webkit-transition: .1s; -moz-transition: .1s; -o-transition: .1s; -ms-transition: .1s;">
                            <iframe  src="spectravel/educational/coolcarousel.php" width="790px" height="390px" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" ></iframe>
                        </td>
                    </tr>
                </table>

            </div>
        </li>
        <li>
            <input type="radio" name="css3-tabstrip-0" id="css3-tabstrip-0-4" /><label for="css3-tabstrip-0-4" class="specneeds">Special Needs</label>
            <div>
                <table border="0px" style="width: 1008px; height: 390px; background-color: #ffffcc;">
                    <tr>
                        <td id="taba">
                            <a id="kosher" class="kosher" href="#" >Kosher</a><br><br>
                            <a id="vegan" class="vegan" href="#" >Vegeterian/Vegan</a><br><br>
                            <a id="disability" class="disability" href="#" >Disability Travel</a>
                        </td>
                        <td width="800px" height="390px" id="tdecargaspecneeds" style="-webkit-transition: .1s; -moz-transition: .1s; -o-transition: .1s; -ms-transition: .1s;">
                            <iframe  src="spectravel/specialneeds/coolcarousel.php" width="790px" height="390px" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" ></iframe>
                        </td>
                    </tr>
                </table>

            </div>
        </li>
        <li>
            <input type="radio" name="css3-tabstrip-0" id="css3-tabstrip-0-5" /><label for="css3-tabstrip-0-5" class="corporate">Corporate Travel</label>
            <div>
                <table border="0px" style="width: 1008px; height: 390px; background-color: #ffffcc;">
                    <tr>
                        <td id="taba">
                            <a id="congress" class="corporate" href="#" >Congresses & <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Meetings</a><br><br>
                            <a id="incentive" class="corporate" href="#" >Incentive Travel</a>
                        </td>
                        <td width="800px" height="390px" id="tdecargacorporate" style="-webkit-transition: .1s; -moz-transition: .1s; -o-transition: .1s; -ms-transition: .1s;">
                            <iframe  src="spectravel/corporate/coolcarousel.php" width="790px" height="390px" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" ></iframe>
                        </td>
                    </tr>
                </table>

            </div>
        </li>
    </ul>
</div>

</html>
