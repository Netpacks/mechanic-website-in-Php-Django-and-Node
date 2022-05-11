<?php

require "../views/header_pers.php";

?>








<div class="p-3 text-center fw-bold 1h-1 display-4 my-3">

Book For Engineer


</div>



<br>

<br>





  <div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">
      <div class="col-lg-5 text-center text-lg-end">
        <p class="col-lg- fw-bold fs-4"><img src="../imgs/car-1.png" alt="" class="w-100"></p>
      </div>
      <div class="col-md-10 mx-auto col-lg-5 px-5">
        <div class="bd-example">
            <label for="basic-url" class="form-label">Your Name</label>

            <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1">@</span>
              <input required type="text" name="name" id="name" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <label for="basic-url" class="form-label">Your Gmail</label>

            <div class="input-group mb-3">
                <input required type="text" class="form-control" id="mail" name="mail" placeholder="Your Gmail" aria-label="Your Gmail" aria-describedby="basic-addon2">
                <span class="input-group-text"  id="basic-addon2">any-mail.com</span>
              </div>
            <label for="basic-url" class="form-label">Your Contact</label>
            <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon3">phone</span>
              <input required type="text" class="form-control" id="phone" name="phone" id="basic-url" aria-label="Phone" aria-describedby="basic-addon3">
            </div>
            <div class="input-group">
              <span class="input-group-text fw-bold">what Happen your car <br>  OR <br> needs</span>
              <textarea required class="content form-control" id="issue" name="issue" aria-label="With textarea">e.g Car is not starting Inspection</textarea>
            </div>
            <br>
            <div class="input-group">
              <span class="input-group-text">Provide Your Location</span>
              <textarea required class="content form-control" id="location" name="location" aria-label="Provide Your Location">Provide Your Location</textarea>
            </div>

            <div type="submit" class="btn btn-outline-primary w-50 p-3 fw-bold my-4" style="float: right;" onclick="post()">Book</div>
            </div>

      </div> <br>
            <strong class="text-danger w-100 p-2" id="datadiv" style="text-align:center;"></strong>
           
    </div>
  </div>



















            
<script>
              
post = () =>{
              $.post("../www.php",
  {
    name: $("#name").val(),
    mail: $("#mail").val(),
    phone: $("#phone").val(),
    issue: $("#issue").val(),
    location: $("#location").val()
  },
  function(data){
    var d = data;
    var e =  2;
    if (d == e) {
      $("#datadiv").html('<strong style="color:green; font-size:20px;" class="w-50 p-3 fw-bold">Successfull Sent Our engineer is on the way to your location now</strong>'); 
  
  setTimeout(function () {
   
   $("#datadiv").toggle();
  
  },5000);
             
  
    }
    else{
      
  $("#datadiv").html('<strong style="color:green;font-size:20px;" class="bg-warning w-50 p-2 fw-bold">'+data+'</strong>'); 
  }  });

}


            
    
  </script>
  <?php

require "../views/footer_pers.php";
?>
           



</body>
</html>