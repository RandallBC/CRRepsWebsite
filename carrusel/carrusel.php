<html>
<head>

    <link rel="stylesheet" media="all" type="text/css" href="style/style-demo.css">
    <script src="script/jquery-1.11.1.js"></script>
    <script src="script/jquery.easing-1.3.js"></script>
    <script src="script/jquery.mousewheel-3.1.12.js"></script>
    <script src="script/jquery.jcarousellite.js"></script>

    <style>
        .opaci:hover {
            opacity: 0.5;

        }


    </style>




</head>

<body>
<div id="jcl-demo">

    <div class="custom-container auto">
        <div class="carousel">
            <ul>
                <li class="opaci"><img src="image/costa-rica-reps.jpg"></li>
                <li class="opaci"><img src="image/costa-rica-authentic-travel.jpg"></li>
                <li class="opaci"><img src="image/costa-rica-group-discounts.jpg"></li>
                <li class="opaci"><img src="image/costa-rica-news-travel.jpg"></li>
                <li class="opaci"><img src="image/costa-rica-rental-car-self-drive.jpg"></li>
                <li class="opaci"><img src="image/costa-rica-resposible-travel.jpg"></li>
                <li class="opaci"><img src="image/costa-rica-set-departure.jpg"></li>
                <li class="opaci"><img src="image/costa-rica-special-discounts.jpg"></li>
                <li class="opaci"><img src="image/costa-rica-rental-car-self-drive.jpg"></li>
                <li class="opaci"><img src="image/costa-rica-resposible-travel.jpg"></li>
            </ul>
        </div>
        <div class="clear"></div>
    </div>

    <script type="text/javascript">
        $(function() {
            $(".auto .carousel").jCarouselLite({
                auto: 3000,
                speed: 500
            });
        });

    </script>

</div>
</body>
</html>