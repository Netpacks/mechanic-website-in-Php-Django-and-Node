<?php
require 'robot.php';
@import('form');
@import('cord_sql');
if (empty($_POST['name'] ) || empty($_POST['phone'] ) || empty($_POST['mail'] ) || empty($_POST['sms'] )) {
echo  'One Empty Box';
}
else {
    $DURAL_SQL="SELECT * FROM c_count order by count ASC LIMIT 1";
    $DURAL=$conn->prepare($DURAL_SQL);
    $DURAL->execute();
        foreach ($DURAL as $key) {
        $k = $key['count'];
        }
$plus = intval($k) + 1;
$DURAL_SQLbooker="UPDATE `c_count`   SET count='".$plus."'";
$DURALbooker=$conn->prepare($DURAL_SQLbooker);
$DURALbooker->execute();    
$DB = new cord_sql;
$DB->value =  array("". @form('mail','text')."","".@form('phone','text')."","".@form('name','text')."","".@form('sms','text')."");
$DB->runner = "INSERT INTO `contact_us` (`email`, `phone`, `name`, `message`) VALUES (?,?,?,?)";
if ($DB->insert()) {
    echo 2; 
} 
}
?>




