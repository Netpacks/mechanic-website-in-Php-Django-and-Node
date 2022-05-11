
<?php

require 'robot.php';
@import('cord_sql');


?>

<style>



/* backgound-color */
.mr_res{

margin-right: 0.5rem;

}
.log_bg{
background-image: url(../img/bg.png);
background-size: cover;
background-repeat: no-repeat;
}




/* side scroll */
.boxscroll {
overflow-x: hidden !important;
overflow-y: scroll;
scroll-behavior: smooth;
scroll-padding-top: 7rem;
}

.boxscroll::-webkit-scrollbar {
width: 0.3rem;
}

.boxscroll::-webkit-scrollbar-track {
background: transparent;
}

.boxscroll::-webkit-scrollbar-thumb {
background-image: linear-gradient(200deg, rgb(223, 52, 169),rgb(104, 32, 63));
border-radius:100px;
}

/* header */


.header{

padding: 1rem!important;
font-weight: 900; 
background-color: transparent;
height: 10vh;


}

/* divs */
.d-dural-flex-child1{
width: 30%;
background-image: white;
}


.d-dural-flex-child2{
width: 70%;
background-image: white;
}

.d-dural-flex{
display: flex;

}


/* header text */
.header_text{
font-weight: bolder; color: white;
font-family: gabriola;
color: white;
}

/* hide document */
.none{
display: none;
}

.profile_image{width: 100px;
 height: 100px; 
 cursor: pointer;
  border-radius: 100px;
   position: absolute;
    top: -20px;
     right: -20px;
     z-index: 10;
    }



    .profile_image_h{width: 35px;
      height:35px; 
      border-radius: 50px;
      cursor: pointer;
      
         }
   
 .smscontainer{


  display: flex;
 }


.user{

height: 90vh;
margin-right: 0.5rem;
display: block;
}



.smsbox{

margin-right: 0.5rem;
height: 77vh;

}


.peruser{


height: 90vh;

}

.editor{
border-top: 0px solid rgb(202, 194, 194);
outline: none;
display: flex;
z-index: 15;
background-color: #ffffff;
}

/* side scroll */
.res_scroll {
overflow-x: hidden !important;
overflow-y: scroll;
scroll-behavior: smooth;
scroll-padding-top: 7rem;
}

.res_scroll::-webkit-scrollbar {
width: 0.3rem;
}

.res_scroll::-webkit-scrollbar-track {
background: transparent;
}

.res_scroll::-webkit-scrollbar-thumb {
background-image: linear-gradient(200deg, rgb(160, 147, 156),rgb(153, 101, 124));
border-radius:100px;
}

.users_image{
width: 30px;
height:30px; 
border-radius: 50px;
cursor: pointer;
border-right:5px solid rgb(0, 0, 0);

}
.active{

border-right:5px solid rgb(10, 107, 21) !important;

}
.res_none{
display: block;
}
.res_none_{
display: none;
}
.sms_u{
position: relative;
min-height: 50px;
max-width: 380px;
background:#ffffff;
border-top-right-radius:100px;
border-bottom-right-radius:100px;
border-right: 5px solid gray;
}

.sms_u::after {
content: " ";
position: absolute;
top: 50%;
right: 100%; /* To the left of the tooltip */
margin-top: -5px;
border-width: 8px;
border-style: solid;
border-color: transparent #ffffff transparent transparent;
}



.sms_me{
position: relative;
min-height: 50px;
max-width: 360px;
background:#ffffff;
border-top-left-radius:100px;
border-bottom-left-radius:100px;
border-left: 5px solid gray;
text-align: right;
display: flex;
flex-wrap: wrap;
align-items: center;
justify-content: end;
}

.sms_me::after {    
  content: " ";
  position: absolute;
  top: 50%;
  left: 100%; /* To the right of the tooltip */
  margin-top: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: transparent transparent transparent #ffffff;
}


.smsimg{

border-radius: 50px;
height: 30px;
width: 30px;
shape-outside: circle(100%);
}


.status_box{
  position: relative;

height:85vh ;
}

.status_src{

height:82vh;
}

.status_box_text {
flex-direction: column;
right: 0;
position: absolute; /* Position the background text */
bottom: 0; /* At the bottom. Use top:0 to append it to the top */
background: rgb(0, 0, 0); /* Fallback color */
background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
color: #f1f1f1; /* Grey text */
width: 5vw; /* pat width */
height: inherit;
padding: 20px; /* Some padding */
}
.cursor{

cursor: pointer;
}
/*=========================================
  SMart Phone Device
===========================================*/

@media (min-width: 100px) and (max-width: 991px){
.mr_res{

  margin-right: 0.0rem;

}
.header_text{
color: rgb(247, 7, 171);
}


.header{
height: 8vh;
border-top: 2px solid rgb(214, 211, 211);
font-weight: 900; 
background-color: transparent;
bottom: 0%;
left: 0%;
padding: 0.4rem !important;
width: 100%;

}
.container, .container-fluid, .container-lg, .container-md, .container-sm, .container-xl, .container-xxl {
    width: 100% !important;
    padding: 0 !important; 
    margin-right: auto !important; 
    margin-left: auto !important;
}


  .d-dural-flex-child2{
    background-color: white;
    width: 100%;
  }
  
  .d-dural-flex-child1{
    background-color: white;
    width: 100%;
  }
 
.d-dural-flex{
  flex-direction: column-reverse;
  }
  .d-dural-flex > div{
    width: 100%;
  }

  
.smscontainer{

display: block;
}

.user{

margin-bottom: 0.5rem;
height: 10vh;
margin-right: 0.0rem;
display: flex;

}



.smsbox{
height: 80vh;
margin-right: 0.0rem;
display: block;

}


.peruser{

display: none !important;


}



.editor{
  border-top: 1px solid rgb(202, 194, 194);
position: fixed;
bottom: -2%;
outline: none;
left: 0;
width: 100%;
z-index: 15;

}



.res_scroll {
overflow-x: scroll !important;
overflow-y: hidden !important;
scroll-behavior: smooth;
scroll-padding-top: 7rem;
}

.res_scroll::-webkit-scrollbar {
height: 0.3rem;
}

.res_scroll::-webkit-scrollbar-track {
background: transparent;
}

.res_scroll::-webkit-scrollbar-thumb {
background-image: linear-gradient(200deg, rgb(160, 147, 156),rgb(153, 101, 124));
border-radius:100px;
}


.users_image{
width: 30px;
height:30px; 
border-radius: 50px;
cursor: pointer;
border-right:5px solid rgb(0, 0, 0);
}

.res_none{
display: none;
}



.res_none_{
display: block;
}


.status_box{
  position: relative;

height:92vh ;
}

.status_src{

height:90vh;
}
}
</style>


<div class="justify-content-center d-flex w-100" style="flex-direction: column;">
<br>
<?php
$posts_id = strip_tags(trim($_GET['id']));
$posts_id_ad = 'gmielgqo2sdjnk52/77gfgy'.$posts_id;
?>
<center>

<img src="../imgs/lambo.jpg" alt=""class="p-3 shadow" style="width:100px;height:100px;">
<p class="fw-bold" style="">


A Client Chating you  {{  <?php echo $posts_id; ?>  }} device


</p>
</center>

<br>

   <div class="p-2 smsbox boxscroll w-100" style="border-radius: 20px;padding-bottom: 50px !important;" id="result_sms">

   

<?php


// SELECT sms.id, sms.user_ip, sms.sms,  sms.date, sms_adm.id, sms_adm.too, sms_adm.message, sms_adm.date
// FROM sms
// INNER JOIN sms_adm
// ON sms.id=sms_adm.id;

// SELECT City, Country FROM Customers
// WHERE Country='Germany'
// UNION ALL
// SELECT City, Country FROM Suppliers
// WHERE Country='Germany'
// ORDER BY City;
// SELECT sms.id, sms.user_ip, sms.sms, sms.date, sms_adm.id, sms_adm.too, sms_adm.message, sms_adm.date
//  FROM sms FULL OUTER JOIN sms_adm ON sms.user_ip=sms_adm.too WHERE sms.user_ip=? AND sms_adm.too=? ORDER BY sms.date DESC"
$Sms_ = "SELECT * FROM sms_adm
WHERE too=? OR too=? order by id";
$Sms_post2 = $conn->prepare($Sms_);
$Sms_post2->bindParam(1, $posts_id);
$Sms_post2->bindParam(2, $posts_id_ad);
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


   
   
   
        
          
   
   </div>
           <!-- textbox -->   <form action="sms_geter.php" method="post" id="sms"  class="editor bg-white p-3 shadow" style="background-color: white;">


  
   <textarea class="p-2 text-center fw-bold content" name="sms">
   Hey You There.........
   </textarea>
<input type="hidden" name="__" value="<?php echo $posts_id_ad; ?>">
    <button  type="submit" class="d-flex p-2 shadow cursor btn justify-content-center align-items-center rounded-3 align-items-center">
         <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="black" style="cursor: pointer;" class="bi3 bi-telegram" viewBox="0 0 16 16">
           <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.287 5.906c-.778.324-2.334.994-4.666 2.01-.378.15-.577.298-.595.442-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294.26.006.549-.1.868-.32 2.179-1.471 3.304-2.214 3.374-2.23.05-.012.12-.026.166.016.047.041.042.12.037.141-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8.154 8.154 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629.093.06.183.125.27.187.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.426 1.426 0 0 0-.013-.315.337.337 0 0 0-.114-.217.526.526 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09z"></path>
         </svg>
</button>

</div>   </form>

<script>




setInterval(() => {


  $.get("import_sms.php", function(data){

 document.getElementById("result_sms").innerHTML +=data;


  });

}, 100);




$("#sms").on('submit',function(e){

e.preventDefault();

$(this).ajaxSubmit({

success: function(data){
var d = data;
var e =  2;
if (d == e) {
$("#datadiv").html('<strong style="color:green;">Publishing......</strong>'); 

setTimeout(function () {
// body...
$("#sign").html('<img src="ADMIN_files/sucess.jpg" style="transition: 1s; width: 50%;margin:auto;" id="iiii">'); 
setTimeout(function () {
// body...
$("#iiii").toggle();
setTimeout(function () {
// body...
$space_nav_loader('blog.html','sign','s-btn1');


},1000);

},3000);

},3000);


}
else{
$("#datadiv").html(data); 
}
} 

});
});



$('.content').each(function () {
  this.setAttribute('style', 'height:' + (this.scrollHeight) + 'px;overflow-y:hidden;width: 70%; background-color: transparent; color: gray; outline: none;border: none;resize:none;text-align:' + "right");

}).on('input', function () {
  this.style.height = '100px';
  this.style.height = (this.scrollHeight) + 'px';
});
</script>