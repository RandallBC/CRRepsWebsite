<html>
<head>
	<link href="../destyle.css" media="screen" rel="stylesheet" type="text/css" />
	<script src="http://code.jquery.com/jquery-1.8.2.min.js" type="text/javascript"></script>
	<script src="jquery.carouFredSel-6.0.4-packed.js" type="text/javascript"></script>

	<script type="text/javascript">
	$(function() {
		$('#tabs').carouFredSel({
			circular: false,
			items: 1,
			width: '100%',
			auto: false,
			pagination: {
				container: '#pager',
				anchorBuilder: function( nr ) {
					return '<a href="#">' + $(this).find('h3').text() + '</a>';
				}
			}
		});
	});
	</script>
</head>
<body>
	<div id="wrapper">
		<div id="pager"></div>
		<div id="tabs">

			<div id="blue">
				<img src="../../images/maps/cval.png" alt="blue_muffin" />
				<h3 style="visibility: hidden;">Central Valley Map</h3>
			</div>

			<div id="pink">
				<h3>Central Valley</h3>
				<p>The Central Valley is Costa Rica’s main gateway for international visitors and in itself offers a wide range of activities and fascinating attractions for locals and international travellers.</p>
				<p>The Central Valley is a relatively plain plateau surrounded by a volcanic mountain range and located in the centre of Costa Rica. This region houses almost three quarters of Costa Rican population and includes the capital city of San Jose and other populous cities such as Alajuela, Heredia and Cartago which also makes it the centre of commerce, industry and government services.</p>
				<p>The Central Valley is Costa Rica’s main gateway and has been traditionally a well know region for coffee growing and thriving agriculture due to its fertile soils of volcanic origin. Also, the cooler weather favours the cultivation of vegetables such as Cabbage, lettuce and fruits such as strawberries.</p>
			</div>

			<div id="white">
				<iframe  src="../../destinations/centralvalley_hypa/central.php" width="750px" height="325px" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" ></iframe>
				<h3 style="visibility: hidden;">Highlights &amp; Popular Activities</h3>

			</div>

		</div>
	</div>

</body>
</html>
