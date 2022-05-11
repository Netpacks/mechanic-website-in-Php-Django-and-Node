


<?php 
require 'robot.php';
@import('cord_sql');

$Sci_con_a=$conn->prepare("SELECT * FROM booked");
$Sci_con_a->execute();
$booked = $Sci_con_a->rowCount();


$like = 'gmielgqo2sdjnk52/77gfgy';
$Sci_con_b=$conn->prepare("SELECT DISTINCT too FROM sms_adm WHERE too NOT LIKE '%".$like."%' order by id DESC limit 30");
$Sci_con_b->execute();
$sms = $Sci_con_b->rowCount();


$Sci_convisitors=$conn->prepare("SELECT * FROM visitors");
$Sci_convisitors->execute();
$visitors = $Sci_convisitors->rowCount();


$Sci_con_d=$conn->prepare("SELECT * FROM contact_us");
$Sci_con_d->execute();
$contact_us = $Sci_con_d->rowCount();


$Sci_con_e=$conn->prepare("SELECT * FROM reviewer");
$Sci_con_e->execute();
$reviewer = $Sci_con_e->rowCount();



// calculation
// $data / 100 *10 to get the tarecking




?>


<style>
.bg-tra{


    border-bottom-right-radius: 50px;

    background-image: linear-gradient(254deg, #006ff7,#02def4,#3d2368);
}

</style>
<div class="w-100">





    
<div class="container justify-content-center p-2 d-flex text-center">

<div class="col-lg-2 col-2 mx-1  rounded shadow p-3 text-dark res_text_small" style="font-weight:900;" ><?php echo $booked; ?> Booked </div>
<div class="col-lg-2 col-2 mx-1  rounded shadow p-3 text-dark res_text_small" style="font-weight:900;"><?php echo $sms; ?> Messages </div>
<div class="col-lg-2 col-2 mx-1  rounded shadow p-3 text-dark res_text_small" style="font-weight:900;"><?php echo $visitors; ?> Visitors </div>
<div class="col-lg-2 col-2 mx-1  rounded shadow p-3 text-dark res_text_small" style="font-weight:900;"><?php echo $contact_us; ?> contact_Sms </div>
<div class="col-lg-2 col-2 mx-1  rounded shadow p-3 text-dark res_text_small" style="font-weight:900;"><?php echo $reviewer; ?> Reviews </div>



</div>



    
<div class="container justify-content-center p-2 d-flex text-center">

<div class="col-lg-2 col-2 mx-1  fw-bold res_text_small" > <?php echo $booked / 100 *10;    ?>%</div>
<div class="col-lg-2 col-2 mx-1  fw-bold res_text_small" > <?php echo $sms / 100 *10;   ?>%</div>
<div class="col-lg-2 col-2 mx-1  fw-bold res_text_small" > <?php echo $visitors / 100 *10;   ?>%</div>
<div class="col-lg-2 col-2 mx-1  fw-bold res_text_small" > <?php echo $contact_us / 100 *10;   ?>%</div>
<div class="col-lg-2 col-2 mx-1  fw-bold res_text_small" > <?php echo $reviewer / 100 *10;   ?>%</div>



</div>


<div class="container justify-content-center p-2 d-flex border-top" style="height:60vh;">


<div class="col-lg-2 col-2 shadow mx-1 bg-tra"  style="height:<?php echo $booked  / 100 *10; ?>%;"></div>
<div class="col-lg-2 col-2 shadow mx-1 bg-tra"  style="height:<?php echo $sms  / 100 *10; ?>%;"></div>
<div class="col-lg-2 col-2 shadow mx-1 bg-tra"  style="height:<?php echo $visitors  / 100 *10; ?>%;"></div>
<div class="col-lg-2 col-2 shadow mx-1 bg-tra"  style="height:<?php echo $contact_us  / 100 *10; ?>%;"></div>
<div class="col-lg-2 col-2 shadow mx-1 bg-tra"  style="height:<?php echo $reviewer  / 100 *10; ?>%;"></div>



</div>



</div>