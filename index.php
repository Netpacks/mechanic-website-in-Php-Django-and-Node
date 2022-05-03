<?php
require './robot/phpCord/_con/config.ini';
require './views/header.php';
?>
<section style="background-attachment: fixed; background-size: cover; transition: background 0.3s, border-radius 0.3s, opacity 0.3s;width: 100vw; height:500px !important; background-image: url(./imgs/1.png) !important; height: 60vh; background-repeat: no-repeat; background-position: bottom;" id="headerBoximg"> 
<?php
require './views/nav.php';
require './views/banner.php';
?>
</section>
<?php
require './views/message.php';
require './views/content.php';
require './views/footer.php';
require './views/jslink.php';
?>