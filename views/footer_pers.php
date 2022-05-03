






<!-- sms box -->



    <!-- messanger box -->

    <div class="col-lg-3 col-12 none bg-light border shadow" style="z-index: 12; position: fixed; bottom: 0%;left: 0%; border-radius: 20px; " id="show_sms">
   
      <br>

      <div class="px-3 col-2 col-lg-1 m-4 text-cente cursor" id="cancle__" style="float: right;">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="red" class="bi2 bi-x-circle" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
      </svg></div>

      <br>
   
      <br>

<div class="p-3 fw-bold border-bottom w-100" style="text-align: right; float: right;">Chat Wuih Us 24/7 Active
<br>
</div>
<br>
      <div class="bg-light p-2 smsbox boxscroll w-100" style="border-radius: 20px;padding-bottom: 50px !important; overflow-y: scroll;" id="result_sms" >
      



     
<?php
$posts_id = gethostname();
$posts_id_ad = 'gmielgqo2sdjnk52/77gfgy'.$posts_id;
?>

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
$ccct = $Sms_post2->rowCount();
if ($ccct < 1) {

echo "<h2 class='p-5 m-auto text-danger'>No Sms Yet </h2>";

}else{
   foreach ($Sms_post2 as $kelo) {
    $ids = $kelo['id'];
if ($kelo['too'] == $posts_id_ad) {

 echo '
  <!-- you -->
     <div class="w-100 d-flex justify-content-start">
   
       <div class="sms_u p-2 shadow my-2">
               <img src="imgs/lambo.jpg" alt="" class="smsimg shadow">
               '.$kelo['message'].'
       </div>
       
</div>
';  
}
else {

   
echo '
  <!-- me -->
  <div class="w-100 d-flex justify-content-end">


  <div class="sms_me p-2 shadow my-2">
'.$kelo['message'].'</div>
    </div>
';   

}

// create sesion here
$_SESSION['sms_import'] = $ids;
$_SESSION['sms_post_id']= $posts_id;
$_SESSION['sms_post_id_ad']=$posts_id_ad;


  }
    }
?>


   

        
      
      </div>  <!-- textbox -->
      
       <form action="sms_inserto.php" method="post" id="sms" class="editor w-100">
      <textarea class="p-2 fw-bold col-lg-9 col-10 content p-4" style="border: none; outline: none;" name="sms">
      Hey You There.........
      </textarea>
      <input type="hidden" name="__" value="<?php echo $posts_id; ?>">
      <div class="d-flex p-2 col-lg-2 cursor"></div>
            <button  type="submit" class="d-flex p-2 shadow cursor btn justify-content-center align-items-center rounded-3 align-items-center">
    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="black" style="cursor: pointer;" class="bi3 bi-telegram" viewBox="0 0 16 16">
              <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.287 5.906c-.778.324-2.334.994-4.666 2.01-.378.15-.577.298-.595.442-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294.26.006.549-.1.868-.32 2.179-1.471 3.304-2.214 3.374-2.23.05-.012.12-.026.166.016.047.041.042.12.037.141-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8.154 8.154 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629.093.06.183.125.27.187.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.426 1.426 0 0 0-.013-.315.337.337 0 0 0-.114-.217.526.526 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09z"/>
            </svg></button>
      </div>
      
      
      
      </div>
      
      
      <!-- texbox -->
      
      
          </form>
          
          
          
          <!-- end messanger box -->



<!-- end sms box -->









<!-- message b -->


<div class="p-4 d-flex justify-content-center align-items-center bg-twist" style="position: fixed; bottom: 0%; right: 0%; z-index: 10; border-top-left-radius: 20px;" id="sms_mobile">

    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="white" class="bi3 bi-messenger" viewBox="0 0 16 16">
        <path d="M0 7.76C0 3.301 3.493 0 8 0s8 3.301 8 7.76-3.493 7.76-8 7.76c-.81 0-1.586-.107-2.316-.307a.639.639 0 0 0-.427.03l-1.588.702a.64.64 0 0 1-.898-.566l-.044-1.423a.639.639 0 0 0-.215-.456C.956 12.108 0 10.092 0 7.76zm5.546-1.459-2.35 3.728c-.225.358.214.761.551.506l2.525-1.916a.48.48 0 0 1 .578-.002l1.869 1.402a1.2 1.2 0 0 0 1.735-.32l2.35-3.728c.226-.358-.214-.761-.551-.506L9.728 7.381a.48.48 0 0 1-.578.002L7.281 5.98a1.2 1.2 0 0 0-1.735.32z"/>
      </svg>

</div>



<!-- footer -->


<footer class="footer-style">
    
    
    <div class="w-100 wrapper justify-content-center align-items-center">
    
    <center>

        <div class="row w-100 justify-content-center">
    
    
            <div class="col-md-2 col-sm-4 col-xs-6"><h6>YourMechanic</h6><ul><li>
                
                <a href="../about">About Us</a></li>
<li>
                    <a href="netpacks.net">Developer</a></li></ul></div>
    
    
        <div class="col-md-2 col-sm-4 col-xs-6"><h6>Terms</h6><ul><li>
            
                <a href="../privacy-policy">Privacy Policy</a></li><li>
            
                <a href="../terms-and-condition">Terms of Use</a></li><li>
    
    
        </li></ul></div>
    

    
    <div class="col-md-2 col-sm-4 col-xs-6"><h6>Social</h6><ul><li>
        
        <a href="<?php  echo $faceb; ?>">Facebook</a></li><li>
        
            <a href="<?php  echo $linke; ?>">LinkedIn</a></li>
        </ul></div>
    
        <div class="col-md-2 col-sm-4 col-xs-6"><h6>Social</h6>
          <ul>
          <li>
          
              <a href="<?php  echo $twee; ?>">Twitter</a></li><li>
          
              <a href="<?php  echo $insta; ?>">Instagram</a></li>
          </ul>
  </div>
</div>
<hr>
    
    
    <div class="container copyright">
    
    
        <div class="row">
    
    
        <div class="col-sm-6 pull-left"><p>© 2022 <?php echo $webname; ?> All rights reserved.  Made with ♥ by Netpacks packages.</p></div></div></div></footer>

</center>








<script src="../js/bootstrap.bundle.min.js"></script>


<script src="../js/jquery-3.6.0.min.js"></script>
<script src="../js/Sci.sci.js"></script>


</body>
</html>