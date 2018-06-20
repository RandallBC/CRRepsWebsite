
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

<h2 id="titulotexto">Responsible Travel</h2>

<p></br><b>Our commitment to Responsible Travel and Fair Trade</b> 
</br>Costa Rica Reps holds an Environmental Policy as part of its company philosophy.  This is followed by staff members on their daily business and operational practices.  We are committed to the implementation of sustainable practices and environmental conservation, seeing responsible travel as a way of preserving our natural and cultural heritage. 
</br></br>At Costa Rica Reps, we constantly seek to leave a positive environmental footprint in the communities we work with, as well as contributing to preserve their ecosystems. This is why we were one of the first companies in Costa Rica to become a strategic allied partner of Rainforest Alliance® and to be fully certified as a Sustainable Travel Operator by the Costa Rican Travel Authority’s Certification in Sustainable Tourism (CST). 
</br></br>The CST program rates businesses on the degree to which they comply with a sustainable model of natural, cultural and social resource management. These efforts reflect our commitment to responsible travel practices and protection of our natural environment.
</br></br>We encourage our staff, clients, guests and partners to create environmental awareness by implementing practical actions that are tangible and quantifiable.  Our environmental performance aims at enhancing the experiences of our guests, benefitting the communities we visit, and improving the daily work practices of our staff members, and to promote a full circle of environmental improvement, especially when these practices are taken to their own homes.
</br></br>Although we still have a lot to accomplish toward sustainability, we focus our efforts in implementing a set of practices that, over time, will keep improving our environmental footprint. As a leader in the travel industry, this is where our Commitment starts.  (Click here) (Learn more about our Environmental and Social Policies here)
</br></br><center>(poner logos aca de CST, Amigos de PArques, otros y RAF)
</br></br>(poner imagen ? Community ? Environment ? Tourism)</center></p>

<?php
    $paginacontenido = ob_get_contents();
    ob_end_clean();

 require_once 'p_about.php';
 ?>
     
    