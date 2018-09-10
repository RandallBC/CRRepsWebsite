
<?php ob_start();
ini_set ('error_reporting', E_PARSE);
?>


<style>
    p
    {
        margin-left: 20px;
        margin-right: 20px;

    }

</style>

<h2 id="titulotexto">Our Company</h2>
<p></br>Costa Rica Reps is a travel company based in San Jose, Costa Rica dedicated to providing comprehensive destination management and all related travel services to International Whole-sale and specialized Travel companies. Founded in 1996 as Eco-Safari a nature and adventure tour operator, the company was rebranded in 2003 as a natural evolution to the market needs for authentic tours and vacations filled with life-experiences – hence the Costa Rica Reps motto “Creating unique travel experiences” 
</br></br>Today Costa Rica Reps caters to the moderate to luxury Central American traveler and specializes on designing, customizing and operating travel itineraries for groups and individuals seeking to:
</br></br>&#8226;&nbsp;&nbsp;&nbsp;Explore inspiring natural destinations.
</br>&#8226;&nbsp;&nbsp;&nbsp;Encounter endemic wildlife.
</br>&#8226;&nbsp;&nbsp;&nbsp;Experience enriching cultural interactions.
</br>&#8226;&nbsp;&nbsp;&nbsp;And enjoying life-changing adventures.
</br></br>Please visit our *Testimonials* <link a esta sección> section for comments from clients and travel partners</p>
<Corporate Fact Sheet>
<?php
    $paginacontenido = ob_get_contents();
    ob_end_clean();

 require_once 'p_about.php';
 ?>
     
    