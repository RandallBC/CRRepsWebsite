<html>

<head>
    <link rel="stylesheet" type="text/css" href="css/lengueta2.css" />
    <script type="text/javascript" src="js/jquery.js"></script>
</head>

<body>
<style>
    #popupquote {
        margin: auto;
        position: absolute;
        top: 0; left: 0; bottom: 0; right: 0;
        width: 1050px;
        height: 700px;
        z-index: 1001;
    }

    .content-popupquote {
        margin:0px auto;
        margin-top: 0px;
        position:relative;
        padding:10px;
        width:1020px;
        height:700px;
        border-radius:5px;
        background-color: #eeeeee;
        box-shadow: 0 2px 5px #666666;
        border: 2px solid #000000;
    }

    .content-popupquote h2 {
        color:#48484B;
        border-bottom: 1px solid #48484B;
        margin-top: 0;
        padding-bottom: 4px;
    }

    .popupquote-overlay {
        left: 0;
        position: absolute;
        top: 0;
        width: 100%;
        z-index: 999;
        display:none;
        background-color: #777777;
        cursor: pointer;
        opacity: 0.7;
    }

    .closequote {
        position: absolute;
        right: 15px;
    }

    /*______________________________________________Contact Us_______________________________________*/

    #popupcontact {
        margin: auto;
        position: absolute;
        top: 0; left: 0; bottom: 0; right: 0;
        width: 850px;
        height: 640px;
        z-index: 1001;
    }

    .content-popupcontact {
        margin:0px auto;
        margin-top: 0px;
        position:relative;
        padding:10px;
        width:810px;
        height:600px;
        border-radius:5px;
        background-color: #eeeeee;
        box-shadow: 0 2px 5px #666666;
        border: 2px solid #000000;
    }

    .content-popupcontact h2 {
        color:#48484B;
        border-bottom: 1px solid #48484B;
        margin-top: 0;
        padding-bottom: 4px;
    }

    .popupcontact-overlay {
        left: 0;
        position: absolute;
        top: 0;
        width: 100%;
        z-index: 999;
        display:none;
        background-color: #777777;
        cursor: pointer;
        opacity: 0.7;
    }

    .closecontact {
        position: absolute;
        right: 15px;

    </style>

<script type="text/javascript">

    $(document).ready(function(){
        $('#quote').click(function(){
            $('#popupquote').slideDown('slow');
            $('.popupquote-overlay').slideDown('slow');
            $('.popupquote-overlay').height($(window).height());
            return false;
        });

        $('#closequote').click(function(){
            $('#popupquote').slideUp('slow');
            $('.popupquote-overlay').slideUp('slow');
            return false;
        });
    });

    $(document).ready(function(){
        $('#contact').click(function(){
            $('#popupcontact').slideDown('slow');
            $('.popupcontact-overlay').slideDown('slow');
            $('.popupcontact-overlay').height($(window).height());
            return false;
        });

        $('#closecontact').click(function(){
            $('#popupcontact').slideUp('slow');
            $('.popupcontact-overlay').slideUp('slow');
            return false;
        });
    });

</script>

<div id="popupquote" style="display: none;">
    <div class="content-popupquote">
        <div class="closequote"><a href="#" id="closequote"><img src="images/iconos_topmenu/cerrar.png"></a></div>
        <div>

            <h2>Request a Quote </h2>
            <iframe style="border-radius: 2px;" src="checkquote.php" width="900" height="600" scrolling="no" marginwidth="0px" marginheight="0px" frameborder="0" >Content not Supported</iframe>

        </div>
    </div>
</div>

<div id="popupcontact" style="display: none;">
    <div class="content-popupcontact">
        <div class="closecontact"><a href="#" id="closecontact"><img src="images/iconos_topmenu/cerrar.png"></a></div>
        <div>

            <h2>Contact Us </h2>
            <iframe style="border-radius: 2px;" src="contactus.php" width="900" height="550" scrolling="no" marginwidth="0px" marginheight="0px" frameborder="0" >Content not Supported</iframe>


        </div>
    </div>
</div>



<div id="prince">
    <ul id="menunaviga">
        <li>
            <a class="contact" id="contact" href="#">
                <span style="z-index: 999999999999999999999999999999999999999999999999999999;">

                </span>
            </a>
        </li>

        <li>
            <a class="quote" id="quote" href="#">
                <span style="z-index: 999999999999999999999999999999999999999999999999999999">

                </span>
            </a>
        </li>

    </ul>

</div>
</body>
</html>
