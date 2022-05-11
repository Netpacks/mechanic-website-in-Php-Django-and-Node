<?php

require 'robot.php';
@import('cord_sql');

// import sms goes here
$last_smsm_id = $_SESSION['sms_import'];
$posts_id = $_SESSION['sms_post_id'];
$posts_id_ad = $_SESSION['sms_post_id_ad'];


// SELECT * FROM sms_adm
// WHERE too BETWEEN ? OR ? AND AND id > ? order by id DESC LIMIT 1
// SELECT * FROM sms_adm
// WHERE too=? OR too=? AND id > ? order by id
$Sms_ = "
SELECT * FROM sms_adm
WHERE too BETWEEN ? AND ? AND id > ? order by id";
$Sms_post2 = $conn->prepare($Sms_);
$Sms_post2->bindParam(1, $posts_id);
$Sms_post2->bindParam(2, $posts_id_ad);
$Sms_post2->bindParam(3, $last_smsm_id);
$Sms_post2->execute();
   foreach ($Sms_post2 as $kelo) {
    $ids = $kelo['id'];
if ($kelo['too'] == $posts_id_ad) {

echo '
  <!-- me -->
  <div class="w-100 d-flex justify-content-end">


  <div class="sms_me p-2 shadow my-2">
'.$kelo['message'].'</div>
    </div>
';
}
else {


 echo '
  <!-- you -->
     <div class="w-100 d-flex justify-content-start">
   
       <div class="sms_u p-2 shadow my-2">
               <img src="../imgs/lambo.jpg" alt="" class="smsimg shadow">
               '.$kelo['message'].'
       </div>
       
</div>
';       

}

// create sesion here
$_SESSION['sms_import'] = $ids;
$_SESSION['sms_post_id']= $posts_id;
$_SESSION['sms_post_id_ad']=$posts_id_ad;

  }
    
?>


 