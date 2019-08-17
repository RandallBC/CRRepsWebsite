<html>
<head>
	<link href="../../destyle.css" media="screen" rel="stylesheet" type="text/css" />
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
				<img src="../../../images/maps/sanjose.png" alt="blue_muffin" />
				<h3 style="visibility: hidden;">Map</h3>
			</div>

			<div id="pink">
				<h3>San Jose Information</h3>
				<p>The city of San José, located in the heart of the country, serves as the main hub for the exploration of Costa Rica's main attractions. The main international airport of San José has inspired a bigger concentration of hotel accommodation. Many of Costa Rica's most famous attractions and activities are an easy drive from San José, making one-day excursions a great option for those who want to use the city as a base to explore several volcanoes, beaches, islands and main National parks. One of the main characteristics is its pleasant climate, San José, located at 1,149mts / 3,743ft. above sea level, enjoys an average temperature of 24° C / 77° F all year round.
				</p>
			</div>

			<div id="white">
				<iframe  src="../../subregions/sanjose_hypa/snjose.php" width="750px" height="325px" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" ></iframe>
				<h3 style="visibility: hidden;">Highlights &amp; Popular Activities</h3>

			</div>

		</div>
	</div>

</body>
</html>
