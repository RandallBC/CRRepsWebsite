<script src="jquery-1.11.0.min.js"></script>
<script src="jquery.cycle.all.js"></script>

<script type="text/javascript">
    $(document).ready(function(){
        $('#rotar').cycle({
            fx:     'scrollUp',
            timeout: 5000,
            delay:  -1000
        });
    });    
</script>

<style>
    *{margin:0px; padding:0px;}
 
    .cycle-main{width:1018px; margin:auto 0px;  border-bottom: 1px solid #9c1b2d; background: #f6f6e9;}
    
    .cycle-main div{width:1000px; padding:5px 10px;}
 
    .cycle-title{background-color: #595819;}
    
    .cycle-title label{color:#FFF; margin-left:5px; font: bold 16px candara; }
    
    .cycle-content{height:75px; text-align:justify; font: 14px candara; color: #595819;}
 
    .bolds { font: bold 14px candara; color: #9c1b2d; float: right; margin: 5px;}

</style>

<div class="cycle-main" onmouseover="$('#rotar').cycle('pause');" onmouseout="$('#rotar').cycle('resume');">
        <div class="cycle-title">
            <label>Testimonials</label>
        </div>
        <div id="rotar" class="cycle-content"> 

            <div>&quot;In Costa Rica we use a company called Costa Rica Reps. They are amazing and truly the best operator there we have had. CR Reps delivers wonderful service both in the office on the admin side and on the ground with clients. They truly always deliver above and beyond for us and we could not be more pleased with them.&quot; <p class="bolds">D.U. Luxury Tour Operator</p>
            </div>

            <div>&quot;While working with another operator, we were losing sales due to the long response times about availability and my office staff was getting dispirited.  Fabio has really done an incredible job for us in the past.  His business is growing and more North American and European wholesalers are turning to him for new programs in Costa Rica&quot; <p class="bolds">B.M. Adventure Travel Operator</p>
            </div>

            <div>Hello all Sales agents.  I just wanted to share a great booking experience I just had with our preferred ground operator in Costa Rica. Andrea was able to put together a great itinerary in the same day I requested it, very quick turn around, and at Christmas to book which is a very high season. Please keep Andrea&apos;s contact information for any help you need in Costa Rica.&quot; <p class="bolds">R.R. Corporate & Adventure Travel Agency</p>
            </div>

            <div>&quot;Best music concert planners ever!! Everyone with CR Reps was pleasant, friendly and helpful. You do a terrific job. Bravo.&quot; <p class="bolds">K.A. Musical Director, SF Choir.</p></div>

            <div>&quot;The Musical director&quot; offered us many positive verbal remarks upon his return from Costa Rica.  He referred to your service as local operators as the most receptive he has ever received...  Outside of the client perspective, and in my experience in working with your staff on the performances, I actually have nothing critical to offer &#45; only positives!  It is highly evident that your staff has a good understanding of the niche market comprised of music performing groups.  Time of responses to inquiries is excellent, with replies received normally in 48 hours or less, and the information is consistently detailed and thorough.&quot; <p class="bolds">E.M. Music Festivals Company.</p></div>

            <div>&quot;I want to take a minute and Thank you again for the incredible service you provided for Jeff and I last week. We are so happy to have found you. You guys make us feel like family and in today&apos;s business environment that quality of relationship is hard to find. We are in the process now of putting together sample itineraries for our clubs...&quot; <p class="bolds">B.K. Sports Travel Company</p>
            </div>
        </div> 
    </div>

        
