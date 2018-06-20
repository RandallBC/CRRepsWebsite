
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

<h2 id="titulotexto">Affiliations</h2>

<p></br><b>Travel Trade Affiliations, Memberships & Licenses</b>
</br> (Logo) Company Registration #3-101-357175
</br>INS Liability Insurance Policy #01340G
</br>Fully licensed by the Costa Rican Tourist Board (ICT)
</br>Members of the Costa Rican Chamber of Tourism
</br>Allied of Rainforest Alliance
</br>Sustainable Tourism Certified
</br>Associate Member of USTOA</p>

<?php
    $paginacontenido = ob_get_contents();
    ob_end_clean();

 require_once 'p_about.php';
 ?>
     
    