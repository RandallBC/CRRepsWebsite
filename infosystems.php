
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

<h2 id="titulotexto">Tech &amp; Info Systems</h2>

<p></br><b>Technology & Information Systems</b>
</br></br>As part of our desire to maximize resources and provide an efficient service, Costa Rica Reps has developed fully computerized in-house information management software. This technology is capable of handling the most complex operations and assures accurate records of every detail for each itinerary, our suppliers and partners.  Tour progress can be easily shared with all those involved in each tour; from the moment the client arrives at the airport, while they are on tour and even after travelers have left our country.</p>

<?php
    $paginacontenido = ob_get_contents();
    ob_end_clean();

 require_once 'p_about.php';
 ?>
     
    