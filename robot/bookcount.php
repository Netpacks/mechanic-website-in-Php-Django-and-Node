
<?php 
require 'robot.php';
header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');

$DURAL_SQL="SELECT * FROM bookcount order by count ASC LIMIT 1";
$DURAL=$conn->prepare($DURAL_SQL);
$DURAL->execute();
foreach ($DURAL as $key) {
echo $key['count'];
}
   ?>