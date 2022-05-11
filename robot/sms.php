
<?php 
require 'robot.php';
@import('cord_sql');

$DURAL_SQLnotf="UPDATE `sms_notf`   SET count='0'";
$DURALnotf=$conn->prepare($DURAL_SQLnotf);
$DURALnotf->execute();


?>


<div class="row p-2 w-100">






<?php

$like = 'gmielgqo2sdjnk52/77gfgy';
$DURAL_SQL="SELECT DISTINCT too FROM sms_adm WHERE too NOT LIKE '%".$like."%' order by id DESC limit 30";

$DURAL=$conn->prepare($DURAL_SQL);
$DURAL->execute();
 $COUNT=$DURAL->rowCount();
if ($COUNT < 1) {

echo "<center><h3 class='text-danger'> No sms Yet </h3></center>";

}

else{
	foreach ($DURAL as $key) {
		$user_ip=$key['too'];
		

?>


<div class="p-3 border rounded shadow d-flex fw-bold m-2 col-12 col-lg-5" onclick="$space_load('per_sms.php?id=<?php echo $user_ip; ?>','sign')" >

<img src="../imgs/car-1.png" alt="" style="width:50px;height:50px; border-radius:100px;" class="shadow">

<div  style="font-family:gabriola;">
<h4 class="fw-bold mx-2"> A Client Chating With : {{ <?php echo $user_ip; ?> }} Device</h4>
<p style="font-family:gabriola;">Am wating for reply.</p>
</div>
</div>







<?php

}
}


?>



</div>