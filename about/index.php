<?php

require "../views/header_pers.php";

?>








<div class="px-3">



<div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="../robot/uploads/<?php echo $webbanner; ?>" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
      </div>
      <div class="col-lg-6">
        <h1 class="display-5 lh-1 mb-3" style="font-weight: 800;">About Our Company <?php echo $webname; ?></h1>
        <p class="lead"><?php echo $webname; ?> we are to mentain repair your car of any type any where </p><p>tell us what your car needs or ask for a diagnostic. Receive a free, fast, fair & transparent price quote.
           </p><p>
          Provide your home or office location. Tell us when to meet you there.
           </p><p>
          That’s it. No more waiting in repair shops - our mechanics come to you.</p>
          <div class="p-3 shadow border rounded my-5">
<div class="p-3 fw-bold"><h3><a href="#"> Phone : <?php  echo str_replace(' , ','<br>', $phone); ?></a>     <br> <hr>      <a href="mailto:<?php  echo $email; ?>"> Mail: <?php  echo $email; ?></a>


<hr>      <a href="mailto:<?php  echo $email; ?>"> Address: <?php  echo $address; ?></a></div>


</h3></div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
         <a href="../Booking"><button type="button" class="btn btn-primary btn-lg px-4 me-md-2 bg-twist fw-bold">Book now</button></a>
          <button type="button" class="btn btn-outline-secondary btn-lg px-4 fw-bold" id="sms_ds">Chat Us</button>
        </div>
      </div>
    </div>
  </div>



  <div class="b-example-divider"></div>


  <div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">
      <div class="col-lg-7 text-center text-lg-start">
        <h1 class="display-4 fw-bold lh-1 mb-3">Contact us </h1>
        <p class="col-lg- fw-bold fs-4">Contact us for any report or issue you are facing in pour website we are here to attend to you 24/7.</p>
      </div>
      <div class="col-md-10 mx-auto col-lg-5">
          <div class="form-floating mb-3">
            <input type="text" name="name" id="name" class="form-control"  placeholder="Password">
            <label for="floatingPassword">Name</label>
          </div>
            <div class="form-floating mb-3">
              <input type="email" name="mail" id="mail" class="form-control"  placeholder="name@example.com">
              <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating mb-3">
              <input type="phone" name="phone" class="form-control" id="phone" placeholder="+234-33-214-123">
              <label for="Phone">Phone address</label>
            </div> <div class="form-floating mb-3">
            <input type="text" name="sms" class="form-control" style="height: 100px !important;" id="sms" placeholder="Message Box">
            <label for="floatingcontact">Message Box  </label>
          </div>
                           <div class="w-100 btn btn-lg btn-primary bg-twist fw-bold" onclick="post()">Contact Us</div>
      </div>
      <br>
            <strong class="text-danger w-100 p-2" id="datadiv" style="text-align:center;"></strong>
           
    </div>
  </div>










</div>





  <?php

require "../views/footer_pers.php";
?>
            
      
            <script>
              
                          
post = () =>{
              $.post("../ww.php",
  {
    name: $("#name").val(),
    mail: $("#mail").val(),
    phone: $("#phone").val(),
    sms: $("#sms").val()
  },
  function(data){
    var d = data;
    var e =  2;
    if (d == e) {
      $("#datadiv").html('<strong style="color:green;" class="w-50 p-3 fw-bold">Successfull Sent</strong>'); 
  
  setTimeout(function () {
   
   $("#datadiv").toggle();
  
    $("#name").val("");
   $("#mail").val("");
  $("#phone").val("");
 $("#sms").val("");

  },5000);
             
  
    }
    else{
      
  $("#datadiv").html('<strong style="color:green;" class="bg-warning w-50 p-2 fw-bold">'+data+'</strong>'); 
  }  });

}


              
              
              </script>