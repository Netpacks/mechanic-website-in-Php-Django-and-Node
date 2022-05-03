<?php
require 'robot.php';
@import('form');
@import('cord_sql');
$DB = new cord_sql;
$DB->value =  array("".@form('__','text')."","". @form('sms','text')."");
$DB->runner = "INSERT INTO `sms_adm`(`too`, `message`) VALUES (?,?)";
$DB->insert();


$DURAL_SQL="SELECT * FROM sms_notf order by count ASC LIMIT 1";
$DURAL=$conn->prepare($DURAL_SQL);
$DURAL->execute();

foreach ($DURAL as $key) {

$n = $key['count'] + 1;

}
   
$DURAL_SQL2="UPDATE `sms_notf`   SET count=$n";
$DURAL2=$conn->prepare($DURAL_SQL2);
$DURAL2->execute();
?>

