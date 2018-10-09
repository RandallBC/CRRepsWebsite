
<style>
#menuleft {
  float: left;
  padding-top: 10px;
  padding-left: 10px;
  width: 200px;
  height: auto ;
  background-color: #FFFFFF;
  border-right: 1px solid #660000;
}

#conteright {
  float: right;
  width: 750px;
  height: auto;
  background-color: #FFFFFF;
  padding: 20px;

}


.tcList1
{
  list-style-type: upper-roman;
  margin-top: 0px;
  margin-bottom: 0px;
  color: #660000;
}

.tcList1 li
{
  font-family: Arial, Helvetica, sans-serif;
  font-size: 14px;
  font-weight: bold;
  padding-bottom: 6px;
}

.tcList1 a:link, .tcList1 a:visited
{
  text-decoration: none;
  color: #660000;
}

.tcList1 a:hover
{
  text-decoration: underline;
  background-color: #f8f0e0;
}

.tcList2
{
  list-style-type: decimal;
  padding-left: 5px;
  cursor: hand !important;
}

.tcList2 li
{
  font-family: Tahoma, Geneva, sans-serif;
  font-size: 12px;
  font-weight: normal;
  padding-top: 2px;
  padding-bottom: 2px;
  cursor: hand !important;
}

li ul
{
  list-style-type: square;
  margin-left: 15px;
  padding-top: 2px;
  padding-bottom: 2px;
}

</style>

<script type="text/javascript">

  function showterms(num){
    $.ajax({
      type: "POST",
      url: "terms/"+ num +".php",
      success: function(a) {
        $('#conteright').html(a);
      }
    });
  }

</script>

<div class="post" id="derechaConten">
  <h2>Terms & Conditions</h2>
  <p class="generalText"><span style="color: #660000; font-weight: bold">AGREEMENT:</span> Enrollment in a reservation and making payment for a service or a package inplies agreement and acceptance of the terms and conditions set forth below.<br/> In this agreement, Costa Rica Reps may be referred to as the operator or Costa Rica Reps S.A.</p>
  <br/>
  <div id="menuleft">
    <br>
    <ol class="tcList1">

      <li><a href="#">WEB CONTENT USE</a><ol class="tcList2">
        <li onmouseover="showterms(1);"><a href="#">Acceptance of Terms</a></li>
        <li onmouseover="showterms(2);"><a href="#">Use Disclaimer</a></li>
      </ol>
    </li>
    <li><a href="#">BOOKING POLICIES</a><ol class="tcList2">
      <li onmouseover="showterms(11);"><a href="#">Itinerary Proposals</a></li>
      <li onmouseover="showterms(12);"><a href="#">Validity of Prices</a></li>
      <li onmouseover="showterms(13);"><a href="#">Making reservations</a></li>
      <li onmouseover="showterms(14);"><a href="#">Handling Bookings</a></li>
      <li onmouseover="showterms(15);"><a href="#">Changes in Bookings</a></li>
      <li onmouseover="showterms(16);"><a href="#">Operative Policies</a></li>
    </ol>
  </li>
  <li><a href="#">PAYMENT POLICIES</a><ol class="tcList2">
    <li onmouseover="showterms(21);"><a href="#">Payment Conditions</a></li>
    <li onmouseover="showterms(22);"><a href="#">Method of Payment</a></li>
    <li onmouseover="showterms(23);"><a href="#">Confirmation of Payment</a></li>
    <li onmouseover="showterms(24);"><a href="#">Consolidating Payments</a></li>
  </ol>
</li>
<li><a href="#">CANCELLATION POLICIES</a><ol class="tcList2">
  <li onmouseover="showterms(31);"><a href="#" id="31">Cancellations made by you</a></li>
  <li onmouseover="showterms(32);"><a href="#" id="32">Cancellation procedure</a></li>
  <li onmouseover="showterms(33);"><a href="#" id="33">Cancellation Terms &amp; Penalties</a></li>
  <li onmouseover="showterms(34);"><a href="#" id="34">Cancellations made by us</a></li>
  <li onmouseover="showterms(35);"><a href="#" id="35">Reimbursements &amp; Refunds</a></li>
</ol>
</li>
</ol>
</div>
<div id="conteright">
  <?php include ('terms/1.php'); ?>
</div>
</div>
