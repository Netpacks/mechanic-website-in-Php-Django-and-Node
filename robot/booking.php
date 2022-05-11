



<?php 
require 'robot.php';
@import('cord_sql');
@import('time');


$DURAL_SQLbooker="UPDATE `bookcount`   SET count='0'";
$DURALbooker=$conn->prepare($DURAL_SQLbooker);
$DURALbooker->execute();

?>

















<div class="accordion w-100 p-3" id="accordionExample">
    

<div class="fw-bold p-3 shadow col-lg-2 col-4">BOOKING</div>
<br>
<br>




<?php


$DURAL_SQL="SELECT * FROM BOOKED order by id DESC limit 50";

$DURAL=$conn->prepare($DURAL_SQL);
$DURAL->execute();
 $COUNT=$DURAL->rowCount();
if ($COUNT < 1) {

echo "<center><h3 class='text-danger'> No Booking For Now </h3></center>";

}

else{
	foreach ($DURAL as $key) {
		$email=$key['mail'];
		$phone=$key['phone'];
		$name=$key['name'];
		$issue=$key['issue'];
		$location=$key['location'];
		$slip_CODE=$key['slip_code'];
		$time= $key['date'];
		$idd=$key['id'];
		

?>


          <div class="accordion-item  shadow">
            <h4 class="accordion-header" id="heading<?php echo $idd; ?>">
              <button class="fw-bold accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $idd; ?>" aria-expanded="false" aria-controls="collapse<?php echo $idd; ?>">
                @_<?php echo $email; ?> || {<?php echo time_ago($time); ?>}
              </button>
            </h4>
            <div id="collapse<?php echo $idd; ?>" class="accordion-collapse collapse" aria-labelledby="heading<?php echo $idd; ?>" data-bs-parent="#accordionExample" style="">
              <div class="accordion-body">
                <strong>NAME: <?php echo $name; ?>, PHONE:: <?php echo $phone; ?></strong>
                <p  class="mx-3 my-3">Booking code:: <i  class="bg-danger p-1 px-3 mx-2 text-white"><?php echo $slip_CODE; ?></i></p>
                
<hr>
                <strong class="mx-3">

MESSAGE:: 
                
                </strong>

                <P><?php echo $issue; ?></P>
                

                <hr>


                <strong  class="mx-3">

LOCATION::                
                </strong>

                <P><?php echo $location; ?></P>
              </div>
            </div>
          </div>




          <?php

  }
  }


  ?>



        </div>