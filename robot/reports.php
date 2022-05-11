



<?php 
require 'robot.php';
@import('cord_sql');

$DURAL_SQLbooker="UPDATE `c_count`   SET count='0'";
$DURALbooker=$conn->prepare($DURAL_SQLbooker);
$DURALbooker->execute();


?>

















<div class="accordion w-100 p-3" id="accordionExample">
    

<div class="fw-bold p-3 shadow col-lg-2 col-4">Reports</div>
<br>
<br>




<?php


$DURAL_SQL="SELECT * FROM contact_us order by id DESC limit 30";

$DURAL=$conn->prepare($DURAL_SQL);
$DURAL->execute();
 $COUNT=$DURAL->rowCount();
if ($COUNT < 1) {

echo "<center><h3 class='text-danger'> No Report Found </h3></center>";

}

else{
	foreach ($DURAL as $key) {
		$email=$key['email'];
		$phone=$key['phone'];
		$name=$key['name'];
		$message=$key['message'];
		$idd=$key['id'];
		

?>


          <div class="accordion-item  shadow">
            <h4 class="accordion-header" id="heading<?php echo $idd; ?>">
              <button class="fw-bold accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $idd; ?>" aria-expanded="false" aria-controls="collapse<?php echo $idd; ?>">
                @_<?php echo $email; ?>
              </button>
            </h4>
            <div id="collapse<?php echo $idd; ?>" class="accordion-collapse collapse" aria-labelledby="heading<?php echo $idd; ?>" data-bs-parent="#accordionExample" style="">
              <div class="accordion-body">
                <strong>NAME: <?php echo $name; ?>, : PHONE: <?php echo $phone; ?>. <br> MESSAGE::</strong> <?php echo $message; ?>

              </div>
            </div>
          </div>




          <?php

  }
  }


  ?>



        </div>