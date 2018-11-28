<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/lengueta2.css" />
    <script type="text/javascript" src="js/jquery.js"></script>
</head>
<body>
     
<div id="prince">
    <ul id="menunaviga">
        <li class="contact_li">
            <a class="contact_a" onclick="showModal('contact');"  href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Contact&nbsp;Us</a>
        </li>
        <li class="quote_li">
            <a class="quote_a" onclick="showModal('quote');" href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Request&nbsp;a&nbsp;Quote</a>
        </li>
        <li class="submite_li">
            <a class="submite_a" id="submite" href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Newsletter</a>
        </li>
    </ul>
</div>

</body>
</html>

  <!-- The Request a Quote Modal -->
  <div id="quote" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <img class="close_btn" onclick="closeModal('quote')" src="images/close.png">
        <h2 class="tit">Request a Quote</h2>
        <iframe style="margin: 0 auto;" src="checkquote.php" width="1000" height="600" scrolling="no" marginwidth="0px" marginheight="0px" frameborder="0" >Content not Supported</iframe>
    </div>
    
  </div>

  <!-- The Contact Us Modal -->
  <div id="contact" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <img class="close_btn" onclick="closeModal('contact')" src="images/close.png">
        <h2 class="tit">Contact Us</h2>
        <iframe style="margin: 0 auto;" src="contactus.php" width="1000" height="600" scrolling="no" marginwidth="0px" marginheight="0px" frameborder="0" >Content not Supported</iframe>
    </div>
  </div>

  <!-- The Newsletter Modal -->
  <div id="newsletter" class="modal">
    <!-- Modal content -->
    <div class="modal-content-news">
        <img class="close_btn" onclick="closeModal('newsletter')" src="images/close.png">
        <h2 class="tit">Newsletter</h2>
        <iframe style="margin: 0 auto;" src="newsletter.php" width="300" height="360" scrolling="no" marginwidth="0px" marginheight="0px" frameborder="0" >Content not Supported</iframe>
    </div>
  </div>
