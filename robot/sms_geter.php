<?php
require 'robot.php';
@import('form');
@import('cord_sql');
$DB = new cord_sql;
$DB->value =  array("".@form('__','text')."","". @form('sms','text')."");
$DB->runner = "INSERT INTO `sms_adm`(`too`, `message`) VALUES (?,?)";
$DB->insert();
?>




