
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

<h2 id="titulotexto">Meet With Us</h2>

<p></br></br>In order to keep a global vision of travel trends both within Latin America and around the world we seek opportunities to share experiences with colleagues in the region and constantly research international travel tendencies.
</br>Costa Rica Reps actively participates in strategic Travel Shows around the globe. These are invaluable opportunities to meet with you in person, and to share new ideas and business strategies, share our corporate philosophy, and receive your feedback. 
</br>Below is a list of travel shows we plan  to attend in the next year. Please contact us <link a la sección de contac us> to arrange a personal meeting during any of these travel shows:</br>
</br><b>Travel Mart Latin America</b>
</br>Iguassu Falls, Brazil
</br>September  14-16, 2016
</br>
</br><b>World Travel Market at ExCel (WTM)</b>
</br>London, England.
</br>November 7-9, 2015
</br> 
</br><b>International Tourism Bourse (ITB)</b>	
</br>Berlin, Germany	
</br>March 9-13, 2016
</br> 
</br><b>Expotur – Costa Rica Travel Mart</b>	
</br>San Jose, Costa Rica.
</br>May 11-13, 2015</p>

<?php
    $paginacontenido = ob_get_contents();
    ob_end_clean();

 require_once 'p_about.php';
 ?>
     
    