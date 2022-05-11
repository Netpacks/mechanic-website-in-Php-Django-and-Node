
<?php 
require 'robot.php';
@import('cord_sql');
if(isset($_SESSION['___'])){
  $pass = $_SESSION['___'];
  $email = $_SESSION['___e'];
  
}

$DURAL_SQL="SELECT * FROM anti WHERE user282200123=? order by password282200123 DESC limit 1";

$DURAL=$conn->prepare($DURAL_SQL);
$DURAL->bindParam(1, $email);
$DURAL->execute();
 $COUNT=$DURAL->rowCount();
if ($COUNT < 1) {
  header("location:index.php");
}

else{
	foreach ($DURAL as $key) {
		$relapass=$key['password282200123'];
		if (!password_verify($pass, $relapass)) {
      header("location:index.php");
		}
    else{
?>








  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="SciDream.Dev contributors">
    <title> Topkonect Laboratory || Develope By Durallite</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/headers/">
 <link rel="shortcut icon" href="dice-4.svg" type="image/x-icon">
<link rel="apple-touch-icon" href="dice-4.svg">
<link rel="apple-touch-icon" sizes="72x72" href="dice-4.svg">
<link rel="apple-touch-icon" sizes="114x114" href="dice-4.svg">
<meta http-equiv="content-type" content="text/html; charset=windows-1252">
<link rel="shortcut icon" href="dice-4.svg" type="image/x-icon">

<script src="ADMIN_files/jquery-3.6.0.min.js"></script> 
<script src="ADMIN_files/jquery.form.min.js"></script> 
<script src="ADMIN_files/jquery.maxlength.js"></script>
 
    <!-- Bootstrap core CSS -->
<link href="ADMIN_files/bootstrap.css" rel="stylesheet">

     <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }
.btn-danger{
  background-color:lightblue !important;
  border:none;
}
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .active_row{
        cursor: pointer !important;
        border-top:5px solid  #006ff7 !important;

      } 
      .row_menu{
        height: 50px; 
        cursor: pointer !important;
         color: gray; 
         border-bottom: 0px solid transparent !important;
      }

    </style>

    <!-- Custom styles for this template -->
    <link href="ADMIN_files/sidebars.css" rel="stylesheet">
  
    <!-- Custom styles for this template -->
    <link href="ADMIN_files/headers.css" rel="stylesheet">
  
<body class="sidoscroll" onload="$space_load('stact.php','sign')" style="position: relative;">

<header class="p-1  border-bottom shadow" style="border-radius: 0px 0px 50px 50px;
">

  <div class="container">
    <div class="d-flex p-2 flex-wrap align-items-center justify-content-end">
      <a href="#" class="d-block link-dark text-decoration-none mx-3" style="outline: 0; font-size: 20px; font-weight: bolder; white-space: nowrap;">
     <strong style="color:#006ff7;"> MyMecho</strong>
 
      </a>

    </div>
  </div>
</header>

<br>


<div class="d-dural-flex justify-content-center container-fluid ">



<div class="d-dural-flex-child2 p-3">




<h2 style="font-weight: bolder;">Menu</h2>
<br>



    
    <div class="d-flex align-items-center bottomscroll" style="padding-left: 20px; height:50px;" id="menu_row">
               
    
    <div onclick="$space_load('stact.php','sign')"  class="p-2 active_row text-small res_text_small menu_row">
Home           </div> 
    
   
                 
<div  onclick="$space_load('reports.php','sign')"  class="p-2 text-small res_text_small menu_row">
Reports<span class=" px-2 mx-1 text-white bg-danger rounded" id="c_count">0</span>              </div>   
                 <div  onclick="$space_load('social_link.php','sign')"  class="p-2 text-small res_text_small menu_row">
             Social Editor
                </div>
                
               <div  onclick="$space_load('profile.php','sign')"  class="p-2 text-small res_text_small menu_row">
        Profile
            </div>
                        
                <div onclick="$space_load('review.html','sign')"  class="p-2 text-small res_text_small menu_row">
review
                </div> <div  onclick="$space_load('reviews.php','sign')"  class="p-2 text-small res_text_small menu_row">
               review list
                </div>
                <div onclick="$space_load('Security.html','sign')"  class="p-2 text-small res_text_small menu_row">
Security
                </div>
                
                <div onclick="$space_load('booking.php','sign')"  class="p-2 text-small res_text_small menu_row fw-bold">
BOOK LIST<span class=" px-2 mx-1 text-white bg-danger rounded" id="bookcount">0</span>              </div>
                <a href="logout.php" style="text-decoration: none;"> <div   class="p-2 text-small res_text_small menu_row">
Logout
                </div></a>
    
   
                    </div>
                
                







<br>
                    <div class="d-dural-flex" id="sign" style="transition-delay: 2s;">
                        



                  </div>
                
                </div></div>
</div>









<div class='d-flex' style='z-index: 10;position: fixed; bottom: 30px; right:10px; cursor:pointer;' onclick="$space_load('sms.php','sign')" >
<div class="p-1 fw-bold text-white bg-danger shadow" style="border-radius:100px;position:absolute;top:-15px;right:-8px;z-index:14;width:30px; text-align:center;" id="counto"></div>
<div id="blogbtn" class="bg-twist p-3 d-flex align-items-center justify-content-center" style="z-index: 10; box-shadow:0 0 20px rgb(179, 79, 179);flex-direction: column; width: 50px;  cursor: pointer;  border-radius: 50px;">
<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="white" class="bi3 bi-messenger" viewBox="0 0 16 16">
  <path d="M0 7.76C0 3.301 3.493 0 8 0s8 3.301 8 7.76-3.493 7.76-8 7.76c-.81 0-1.586-.107-2.316-.307a.639.639 0 0 0-.427.03l-1.588.702a.64.64 0 0 1-.898-.566l-.044-1.423a.639.639 0 0 0-.215-.456C.956 12.108 0 10.092 0 7.76zm5.546-1.459-2.35 3.728c-.225.358.214.761.551.506l2.525-1.916a.48.48 0 0 1 .578-.002l1.869 1.402a1.2 1.2 0 0 0 1.735-.32l2.35-3.728c.226-.358-.214-.761-.551-.506L9.728 7.381a.48.48 0 0 1-.578.002L7.281 5.98a1.2 1.2 0 0 0-1.735.32z"/>
</svg>
  </div>

</div>




<br>

<br>

<footer class="footer mt-auto py-3 text-white bg-twist-bold" style="    position: absolute !important;
    bottom: 0;
    width: 100%;
    margin: 0;">

          <center>
  <p style="font-weight:800;">Admin Develope and Design By <a href="http://www.durallite.epizy.com">Durallite</a> Packages</p>
</center>
    
</footer>
  
<!-- footer -->
<!-- end footer --> 
<script>


     

var header = document.getElementById("menu_row");
var btns = header.getElementsByClassName("menu_row");
for (let i = 0; i < btns.length; i++) {
btns[i].addEventListener("click",function () {
     var current = document.getElementsByClassName("active_row");
     current[0].className = current[0].className.replace(" active_row","");
     this.className += " active_row";
});    
}

   //  @media js
   if (window.matchMedia('(max-width:600px)').matches) {
 function t__() {
   $("#editit").hide();
 
 }
     $("#blogbtn").click(function () {
       $("#editit").removeClass("n").css({"position":"fixed"}).css({"top":"0"}).css({"display":"flex"}).css({"height":"100%"});
 
       $space_load('blogss.php','editit');
       });
 $("#cartbtn").click(function () {
   $("#editit").removeClass("n").css({"position":"fixed"}).css({"top":"0"}).css({"display":"flex"}).css({"height":"100%"});
 
   $space_load('our_player.php','editit');
   });
 

 
 }
 else{
   function t__() {
 
 }
   $("#blogbtn").click(function () {
    $space_load('blogss.php','editit');
 });
 $("#cartbtn").click(function () {
  $space_load('our_player.php','editit');
 });
 
 }
 

setInterval(() => {
  $.get("sse_php.php", function(data){

$("#counto").html(data);

});
$.get("c_count.php", function(data){

$("#c_count").html(data);

});

    $.get("bookcount.php", function(data){

$("#bookcount").html(data);

});

}, 1000);
 </script>
 
<script src="ADMIN_files/Sci.js"></script>
<script src="ADMIN_files/sidebars.js"></script>
      <script src="ADMIN_files/bootstrap.js"></script>


</body></html>

<?php
    }}}
?>