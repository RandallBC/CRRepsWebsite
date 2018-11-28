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
					<img src="../../../images/maps/papagayo.png" alt="blue_muffin" />
					<h3 style="visibility: hidden;">Map</h3>
				</div>

				<div id="pink">
					<h3>Papagayo Information</h3>
					<p>Info de Papagayo.</p>
					<!--p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies</p-->
				</div>

				<div id="white">
					<iframe  src="../../subregions/papagayo_hypa/papagayo.php" width="750px" height="325px" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" ></iframe>
					<h3 style="visibility: hidden;">Highlights &amp; Popular Activities</h3>

				</div>

			</div>
		</div>

	</body>
</html>
