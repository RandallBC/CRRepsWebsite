<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/lengueta2.css" />
    <script type="text/javascript" src="js/jquery.js"></script>
</head>
<body>
<style>

/* The Modal (background) */
  .modal {
      display: none; /* Hidden by default */
      position: fixed; /* Stay in place */
      z-index: 1; /* Sit on top */
      padding-top: 100px; /* Location of the box */
      left: 0;
      top: 0;
      width: 100%; /* Full width */
      height: 100%; /* Full height */
      overflow: auto; /* Enable scroll if needed */
      background-color: rgb(0,0,0); /* Fallback color */
      background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  }

  /* Modal Content */
  .modal-content {
      background-color: #fefefe;
      margin: auto;
      padding: 20px;
      border: 1px solid #888;
      width: 60%;
  }

    .close_btn {
    cursor: pointer;
    float: right;
    }

    h2.tit {
      font: normal 28px candara;
    }

</style>

       
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

  <!-- The Modal -->
  <div id="quote" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <img class="close_btn" onclick="closeModal('quote')" src="images/close.png">
        <h2 class="tit">Request a Quote</h2>
        <iframe style="margin: 0 auto;" src="checkquote.php" width="1000" height="600" scrolling="no" marginwidth="0px" marginheight="0px" frameborder="0" >Content not Supported</iframe>
    </div>
    
  </div>

  <!-- The Modal -->
  <div id="contact" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <img class="close_btn" onclick="closeModal('contact')" src="images/close.png">
        <h2 class="tit">Contact Us</h2>
        <iframe style="margin: 0 auto;" src="contactus.php" width="1000" height="600" scrolling="no" marginwidth="0px" marginheight="0px" frameborder="0" >Content not Supported</iframe>
    </div>
    
  </div>


<script>

    function showModal(nam_modal) {
        var modal = document.getElementById(nam_modal);
        modal.style.display = "block";
    }

    function closeModal(nam_modal) {
        var modal = document.getElementById(nam_modal);
        modal.style.display = "none";
    }
  
  </script>