<?php ob_start(); ?>

<style>
#menuleft {
    float: left;
    padding-top: 10px;
    padding-left: 10px;
    width: 220px;
    height: 610px ;
    background-color: #FFFFFF;
}

#conteright {
    float: right;
    border-left: 2px solid #660000;
    width: 758px;
    height: 610px;
    background-color: #FFFFFF;
    padding: 15px;
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

    $(document).ready(function() {

        $('#1').mouseover(function(){


            $.ajax({
                type: "POST",
                url: "terms/1.php",
                success: function(a) {
                    $('#conteright').html(a);

                }
            });
        });

        $('#2').mouseover(function(){


            $.ajax({
                type: "POST",
                url: "terms/2.php",
                success: function(a) {
                    $('#conteright').html(a);

                }
            });
        });

        $('#11').mouseover(function(){


            $.ajax({
                type: "POST",
                url: "terms/11.php",
                success: function(a) {
                    $('#conteright').html(a);

                }
            });
        });

        $('#12').mouseover(function(){


            $.ajax({
                type: "POST",
                url: "terms/12.php",
                success: function(a) {
                    $('#conteright').html(a);

                }
            });
        });

        $('#13').mouseover(function(){


            $.ajax({
                type: "POST",
                url: "terms/13.php",
                success: function(a) {
                    $('#conteright').html(a);

                }
            });
        });

        $('#14').mouseover(function(){


            $.ajax({
                type: "POST",
                url: "terms/14.php",
                success: function(a) {
                    $('#conteright').html(a);

                }
            });
        });

        $('#15').mouseover(function(){


            $.ajax({
                type: "POST",
                url: "terms/15.php",
                success: function(a) {
                    $('#conteright').html(a);

                }
            });
        });

        $('#16').mouseover(function(){


            $.ajax({
                type: "POST",
                url: "terms/16.php",
                success: function(a) {
                    $('#conteright').html(a);

                }
            });
        });

        $('#21').mouseover(function(){


            $.ajax({
                type: "POST",
                url: "terms/21.php",
                success: function(a) {
                    $('#conteright').html(a);

                }
            });
        });

        $('#22').mouseover(function(){


            $.ajax({
                type: "POST",
                url: "terms/22.php",
                success: function(a) {
                    $('#conteright').html(a);

                }
            });
        });

        $('#23').mouseover(function(){


            $.ajax({
                type: "POST",
                url: "terms/23.php",
                success: function(a) {
                    $('#conteright').html(a);

                }
            });
        });

        $('#24').mouseover(function(){


            $.ajax({
                type: "POST",
                url: "terms/24.php",
                success: function(a) {
                    $('#conteright').html(a);

                }
            });
        });

        $('#31').mouseover(function(){


            $.ajax({
                type: "POST",
                url: "terms/31.php",
                success: function(a) {
                    $('#conteright').html(a);

                }
            });
        });

        $('#32').mouseover(function(){


            $.ajax({
                type: "POST",
                url: "terms/32.php",
                success: function(a) {
                    $('#conteright').html(a);

                }
            });
        });

        $('#33').mouseover(function(){


            $.ajax({
                type: "POST",
                url: "terms/33.php",
                success: function(a) {
                    $('#conteright').html(a);

                }
            });
        });

        $('#34').mouseover(function(){


            $.ajax({
                type: "POST",
                url: "terms/34.php",
                success: function(a) {
                    $('#conteright').html(a);

                }
            });
        });

        $('#35').mouseover(function(){


            $.ajax({
                type: "POST",
                url: "terms/35.php",
                success: function(a) {
                    $('#conteright').html(a);

                }
            });
        });


   //arriba de aki van los ajax
    });
</script>





<div class="post" id="derechaConten">

    <h2>Terms & Conditions</h2>
    <p class="generalText"><span style="color: #660000; font-weight: bold">AGREEMENT:</span> Enrollment in a reservation and making payment for a service or a package inplies agreement and acceptance of the terms and conditions set forth below.<br/> In this agreement, Costa Rica Reps may be referred to as the operator or Costa Rica Reps S.A.</p>

    <div id="menuleft">
        <br>
        <ol class="tcList1">

            <li><a href="#">WEB CONTENT USE</a><ol class="tcList2">
                    <li><a href="#" id="1">Acceptance of Terms</a></li>
                    <li><a href="#" id="2">Use Disclaimer</a></li>
                </ol>
            </li>
            <li><a href="#">BOOKING POLICIES</a><ol class="tcList2">
                    <li><a href="#" id="11">Itinerary Proposals</a></li>
                    <li><a href="#" id="12">Validity of Prices</a></li>
                    <li><a href="#" id="13">Making reservations</a></li>
                    <li><a href="#" id="14">Handling Bookings</a></li>
                    <li><a href="#" id="15">Changes in Bookings</a></li>
                    <li><a href="#" id="16">Operative Policies</a></li>
                </ol>
            </li>
            <li><a href="#">PAYMENT POLICIES</a><ol class="tcList2">
                    <li><a href="#" id="21">Payment Conditions</a></li>
                    <li><a href="#" id="22">Method of Payment</a></li>
                    <li><a href="#" id="23">Confirmation of Payment</a></li>
                    <li><a href="#" id="24">Consolidating Payments</a></li>
                </ol>
            </li>
            <li><a href="#">CANCELLATION POLICIES</a><ol class="tcList2">
                    <li><a href="#" id="31">Cancellations made by you</a></li>
                    <li><a href="#" id="32">Cancellation procedure</a></li>
                    <li><a href="#" id="33">Cancellation Terms &amp; Penalties</a></li>
                    <li><a href="#" id="34">Cancellations made by us</a></li>
                    <li><a href="#" id="35">Reimbursements &amp; Refunds</a></li>
                </ol>
            </li>
        </ol>

    </div>

    <div id="conteright">
        <?php include ('terms/1.php'); ?>
    </div>
</div>

<?php
$paginacontenido = ob_get_contents();
ob_end_clean();

require_once 'p_about.php';
?>
