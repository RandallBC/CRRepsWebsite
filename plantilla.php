<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta content="travel information, plan Costa Rican vacation, Expeditions, Rain Forest, volcanoes, Beaches, Jungles Costa Rica. Rain Forest Tours, Ecotours, Ecosafari and adventure travel in Costa Rica. Birdwatching, Natural History, Adventure Travel, Horse Riding and Nature Tours." name="description" />
  <meta content="Costa Rica, Adventure, Nature, Travel, hotels, vacations, tours, holidays, info, information, tour, Ecosafari, Ecotour, Nature tours, Eco-tour, horseback, riding, expeditions, woldwide, travel, international, free, world wide, Quest, Costa Rica Travel, Costarica, holiday, vacation" name="keywords" />
  <meta content="costa rica, central america, south america, travel, tours, holidays, vacations, tours" name="classification" />
  <meta content="Adventure, Nature, Wildlife, Rain Forest, Travel, Tours, Costa Rica, Costarica, Costa Rika, Costarika" name="country" />
  <link href="css/lengueta.css" media="screen" rel="stylesheet" type="text/css" />
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/general.js"></script>
  <link href="css/general.css" media="screen" rel="stylesheet" type="text/css" />

  <?php include("head.php")?>
  <?php include("lengueta.php")?>
  <?php include("lengueta2.php")?>

</head>
<body>

  <div id="rotator">
    <iframe src="banner/default/slider.php" width="1020" height="310" scrolling="no" marginwidth="0px" marginheight="0px" frameborder="0" ></iframe>
  </div>

  <div class="container">
    <center><?php //include("menusistema.php")?></center>

    <div id="datos">
      <div id="contenidodatos">
        <?php  echo $paginacontenido; ?>
      </div>
    </div>

    <!-- main content ends -->

  </div>


</body>
<!-- footer starts -->
<footer>
  <?php include("footer.php")?>
</footer>
<!-- footer ends -->
</html>
