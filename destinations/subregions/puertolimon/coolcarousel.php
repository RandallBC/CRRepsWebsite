<html>
	<head>

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
		<style type="text/css">
			html, body {
				height: 100%;
				padding: 0;
				margin: 0;
			}

			body * {
				font-family: Arial, Geneva, SunSans-Regular, sans-serif;
				font-size: 14px;
				color: #333;
				line-height: 22px;
			}

			#wrapper {
				background-color: #F4F0EE;
				border-top: 1px solid #ccc;
				border-bottom: 1px solid #ccc;
				width: 100%;
				height: 315px;
				padding-top: 25px;
				margin: -150px 0 0 0;
				position: absolute;
				left: 0;
				top: 50%;
			}
			#tabs > div {
				width: 750px;
				height: 350px;
				float: left;
				overflow: hidden;
			}
			#tabs img {
				display: block;
				margin: 0;
				float: left;
			}
			#tabs h3 {
				font-size: 20px;
				line-height: 20px;
				margin: 30px 0 10px 0;
			}

			#tabs #blue img {
				margin-top: 0px;
				width: 100%;
				height: 93%;
			}
			#tabs #pink img {
				margin-top: 0;
			}
			#tabs #white img {
				margin-top: 0px;
				width: 100%;
				height: 100%;
			}
			
			#pager {
				width: 700px;
				margin: -76px auto 5px auto;
				text-align: center;
			}
			#pager a {
				border: 1px solid transparent;
				border-bottom: none;
				border-left: none;
				border-color: #ccc;
				color: #999;
				font-size: 16px;
				text-decoration: none;
				line-height: 30px;
				display: inline-block;
				height: 30px;
				padding: 10px 30px;
			}
			#pager a:hover {
				color: #666;
			}
			#pager a:first-child {
				border-left: 1px solid #ccc;
			}
			#pager a.selected {
				background-color: #F4F0EE;
				color: #333;
			}
			

		</style>
	</head>
	<body>
		<div id="wrapper">
			<div id="pager"></div>
			<div id="tabs">

				<div id="blue">
					<img src="../../../images/map_cval.gif" alt="blue_muffin" />
					<h3 style="visibility: hidden;">Map</h3>
				</div>

				<div id="pink">
					<h3>Puerto Lim&oacute;n Information</h3>
					<p>Info de Puerto Limon.</p>
					<!--p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies</p-->
				</div>

				<div id="white">
					<iframe  src="../../subregions/puertolimon_hypa/ptolimon.php" width="750px" height="325px" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" ></iframe>
					<h3 style="visibility: hidden;">Highlights &amp; Popular Activities</h3>

				</div>

			</div>
		</div>

	</body>
</html>