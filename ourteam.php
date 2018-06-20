
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

<h2 id="titulotexto">Our Team</h2>
<p>
</br>Our Team of experienced and dedicated travel professionals are committed to offering outstanding service, continually seeking to deliver authentic and inspiring travel experiences in Costa Rica. Our team has the expertise, language proficiency, service-attitude, and skill set to share their knowledge with enthusiasm and commitment... always going that extra mile and taking care of those small details that will always make a big difference.
</br>Our human approach and in depth knowledge of the services we provide have been key in delivering safe and enjoyable travel programs in Costa Rica. We provide all of our team members with opportunities to grow professionally, through training, workshops and regular field trips which allow them to have first-hand knowledge of the products and services we promote.
</br>All of our staff members and guides share unified values of Teamwork, Excellence, Leadership and an infectious passion for Costa Rica, sharing our natural and cultural heritage with our guest travelers. These values ensure we achieve our overall mission to create unique travel experiences!
</br></br>Our team is committed to providing:
</br>&#8226;&nbsp;&nbsp;&nbsp;Reliable, efficient, and consistent service;
</br>&#8226;&nbsp;&nbsp;&nbsp;Flexibility  and attention to detail;
</br>&#8226;&nbsp;&nbsp;&nbsp;Prompt response;
</br>&#8226;&nbsp;&nbsp;&nbsp;Professional, innovative and creative travel planning;
</br>&#8226;&nbsp;&nbsp;&nbsp;Competitive pricing;
</br>&#8226;&nbsp;&nbsp;&nbsp;24-hour emergency support;
</br>&#8226;&nbsp;&nbsp;&nbsp;Highest safety standards
</p>
<?php
    $paginacontenido = ob_get_contents();
    ob_end_clean();

 require_once 'p_about.php';
 ?>
     
    