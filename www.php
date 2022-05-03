<?php
require 'robot.php';
@import('form');
@import('cord_sql');
@import('cuppon');
if (empty($_POST['name'] ) || empty($_POST['phone'] ) || empty($_POST['mail'] ) || empty($_POST['issue'] ) || empty($_POST['location'])) {
echo  'One Empty Box';

}
else {
    

    $DURAL_SQL="SELECT * FROM bookcount order by count ASC LIMIT 1";
    $DURAL=$conn->prepare($DURAL_SQL);
    $DURAL->execute();
    
    foreach ($DURAL as $key) {
    
    echo $key['count'];
    
    }
$plus = intval($key['count']) + 1;

$DURAL_SQLbooker="UPDATE `bookcount`   SET count='".$plus."'";
$DURALbooker=$conn->prepare($DURAL_SQLbooker);
$DURALbooker->execute();    

$DB = new cord_sql;
$DB->value =  array("". @form('name','text')."","".@form('mail','text')."","".@form('phone','text')."","".@form('issue','text')."","".@form('location','text')."","".cuppon()."");
$DB->runner = "INSERT INTO `booked` (`name`, `mail`, `phone`, `issue`, `location`, `slip_code`) VALUES (?,?,?,?,?,?)";
if ($DB->insert()) {
    echo 2; 

} 
}
?>




