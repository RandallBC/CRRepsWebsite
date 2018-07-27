<html>
<link rel="stylesheet" type="text/css" href="css/menulateralstyle.css" />

<head>

<body>

<style>
    .titulos {
        color: #9c1b2d;
        margin-left: 10px;
        font: normal 18px Candara;
        height: 20px;
    }

</style>

<!--......................................................................................aki van los ajax..............................................................................-->

<script type="text/javascript">

    $(document).ready(function() {

        $('#wcr').click(function(){
            $.ajax({
                type: "POST",
                url: "travelguide_content/whycostarica.php",
                success: function(a) {
                    $('#present').html(a);
                }
            });
        });

        $('#ayp').click(function(){
            $.ajax({
                type: "POST",
                url: "travelguide_content/ports.php",
                success: function(a) {
                    $('#present').html(a);
                }
            });
        });

        $('#bye').click(function(){
            $.ajax({
                type: "POST",
                url: "travelguide_content/economy.php",
                success: function(a) {
                    $('#present').html(a);
                }
            });
        });

        $('#com').click(function(){
            $.ajax({
                type: "POST",
                url: "travelguide_content/comunications.php",
                success: function(a) {
                    $('#present').html(a);
                }
            });
        });

        $('#edu').click(function(){
            $.ajax({
                type: "POST",
                url: "travelguide_content/education.php",
                success: function(a) {
                    $('#present').html(a);
                }
            });
        });

        $('#elec').click(function(){
            $.ajax({
                type: "POST",
                url: "travelguide_content/electricity.php",
                success: function(a) {
                    $('#present').html(a);
                }
            });
        });

        $('#gov').click(function(){
            $.ajax({
                type: "POST",
                url: "travelguide_content/government.php",
                success: function(a) {
                    $('#present').html(a);
                }
            });
        });

        $('#fs').click(function(){
            $.ajax({
                type: "POST",
                url: "travelguide_content/factsheet.php",
                success: function(a) {
                    $('#present').html(a);
                }
            });
        });

        $('#pnr').click(function(){
            $.ajax({
                type: "POST",
                url: "travelguide_content/parksnature.php",
                success: function(a) {
                    $('#present').html(a);
                }
            });
        });

        $('#tz').click(function(){
            $.ajax({
                type: "POST",
                url: "travelguide_content/timezones.php",
                success: function(a) {
                    $('#present').html(a);
                }
            });
        });

        $('#tip').click(function(){
            $.ajax({
                type: "POST",
                url: "travelguide_content/tipping.php",
                success: function(a) {
                    $('#present').html(a);
                }
            });
        });

        $('#tran').click(function(){
            $.ajax({
                type: "POST",
                url: "travelguide_content/transportation.php",
                success: function(a) {
                    $('#present').html(a);
                }
            });
        });

        $('#byg').click(function(){
            $.ajax({
                type: "POST",
                url: "travelguide_content/bookguides.php",
                success: function(a) {
                    $('#present').html(a);
                }
            });
        });

        $('#clima').click(function(){
            $.ajax({
                type: "POST",
                url: "travelguide_content/climate.php",
                success: function(a) {
                    $('#present').html(a);
                }
            });
        });

        $('#er').click(function(){
            $.ajax({
                type: "POST",
                url: "travelguide_content/entry.php",
                success: function(a) {
                    $('#present').html(a);
                }
            });
        });

        $('#hys').click(function(){
            $.ajax({
                type: "POST",
                url: "travelguide_content/health.php",
                success: function(a) {
                    $('#present').html(a);
                }
            });
        });

        $('#hyc').click(function(){
            $.ajax({
                type: "POST",
                url: "travelguide_content/culture.php",
                success: function(a) {
                    $('#present').html(a);
                }
            });
        });

        $('#maps').click(function(){
            $.ajax({
                type: "POST",
                url: "travelguide_content/maps.php",
                success: function(a) {
                    $('#present').html(a);
                }
            });
        });

        $('#ryd').click(function(){
            $.ajax({
                type: "POST",
                url: "travelguide_content/roads.php",
                success: function(a) {
                    $('#present').html(a);
                }
            });
        });

        $('#wtp').click(function(){
            $.ajax({
                type: "POST",
                url: "travelguide_content/whatpack.php",
                success: function(a) {
                    $('#present').html(a);
                }
            });
        });

        //arriba de aki van los ajax
    });

</script>

<!--......................................................................................aki van los ajax..............................................................................-->

<div style="float: left; margin-top: 30px;">
    <ul class="menu">
        <h3 class="titulos">Travel Guide</h3>
        <li><a href="#">About Costa Rica</a>
            <ul class="tguide1">
                <li><a id="wcr" href="#">Why Costa Rica?</a></li>
                <li><a id="ayp" href="#">Airports &amp; Ports</a></li>
                <li><a id="bye" href="#">Business &amp; Economy</a></li>
                <li><a id="com" href="#">Comunications</a></li>
                <li><a id="edu" href="#">Education</a></li>
                <li><a id="elec" href="#">Electricity</a></li>
                <li><a id="gov" href="#">Government</a></li>
                <li><a id="fs" href="#">Fact Sheet</a></li>
                <li><a id="pnr" href="#">Parks &amp; Nature Reserves</a></li>
                <li><a id="tz" href="#">Time Zones</a></li>
                <li><a id="tip" href="#">Tipping</a></li>
                <li><a id="tran" href="#">Transportation</a></li>
            </ul>
        </li>

        <li><a id="byg" href="#">Books &amp; Guides</a></li>
        <li><a href="http://www.costaricareps.com/blog" target="_blank">Blog</a></li>
        <li><a id="clima" href="#">Climate</a></li>
        <li><a id="er" href="#">Entry Requirements</a></li>
        <li><a id="hys" href="#">Health &amp; Safety</a></li>
        <li><a id="hyc" href="#">Heritage &amp; Culture</a></li>
        <li><a id="maps" href="#">Maps of Costa Rica</a></li>
        <li><a id="photo" href="photogallery.php">Photo Gallery</a></li>
        <li><a id="ryd" href="#">Roads &amp; Driving</a></li>
        <li><a id="wtp" href="#">What to Pack</a></li>

        <!--____________________________________________________________________________aki va la otra_________________________________________________________________-->

    </ul>
</div>

</body>
</html>
