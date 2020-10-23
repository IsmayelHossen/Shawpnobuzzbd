<?php 

include('segment/header.php');
?>
       <!-- Breadcrumbs -->
  <?php 
  $email=Session::get("email");
  if(isset($_GET["payment"])){
   $quntity=Session::get("email");
    $sid=Session::get("sid");
     $query="UPDATE cart SET order1=1 WHERE sid='$sid'";
     $result=$db->update($query);

       date_default_timezone_set('Asia/Dhaka');
        
  $date=date("d/m/Y h:i:sa");
  $date1=date("d/m/Y");
   $sid=Session::get("sid");
   $date4=date( "F", strtotime($date1) );
       $quntity=Session::get("quntity");
   $phone=Session::get("phone");
   $grandtotalc=Session::get("grandtotal");

      $query="INSERT INTO customer_order(email,quntity,mobile,date1,grandtotal,date2,date4,sid,payment) VALUES('$email','$quntity','$phone','$date','$grandtotalc','$date1','$date4','$sid','Cash On Delivery')";
  $result=$db->insert($query);

       //product minus after payment process
    }
 
  
  ?>  
  
  <?php
    //bkash payment
  if(isset($_POST['bkashsubmit'])){
      

     $bkashn=$_POST['bkashn'];
     $trxid=$_POST['trxid'];
     $bkashn=mysqli_real_escape_string($db->link,$bkashn);
     $trxid=mysqli_real_escape_string($db->link,$trxid);
     /*product minus and add payment method */
     $email=Session::get("email");
    $sid=Session::get("sid");
     $query="UPDATE cart SET order1=1 WHERE email='$email' AND sid='$sid'";
     $result=$db->update($query);
     $quntity=Session::get("quntity");
   $phone=Session::get("phone");
   $grandtotalc=Session::get("grandtotal");
     date_default_timezone_set('Asia/Dhaka');
        
  $date=date("d/m/Y h:i:sa");
  $date1=date("d/m/Y");
   $sid=Session::get("sid");
   $date4=date( "F", strtotime($date1) );

      $query="INSERT INTO customer_order(email,quntity,mobile,date1,grandtotal,date2,date4,sid,payment,bkashn,trxid) VALUES('$email','$quntity','$phone','$date','$grandtotalc','$date1','$date4','$sid','Bkash Payment','$bkashn','$trxid')";
  $result=$db->insert($query);

       //product minus after payment process
    
    
  }

   ?> 

  

  
  <div class="breadcrumbs">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <ul>
            <li class="home"> <a title="Go to Home Page" href="index.html">Home</a><span>&raquo;</span></li>
           
            <li><strong>Payment Status</strong></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Breadcrumbs End --> 
  
<!-- Main Container -->

<section class="main-container col2-right-layout">
  <div class="main container">
    <div class="row paymentstatus">
      <h1> Payment Status:
      <a href="profile.php " style="font-size: 27px;font-family: italic;margin-top:10px;color: #307518;padding-left: 20px;text-align: center;">For Details Please Visit Here...</a>
      </h1>
      
     <h2>Thanks To Being With Us</h2>
   

    </div>
 
  </div>
  <div class="confirmorderdetails">
   
  </div>
  </section>
  <section>
      <div class="container">
          <div class="row">
              <div class="col-xs-12 col-sm-12 checkout_order ml">
                    <a href="index.php"><img style="max-width:180px" src="images/shop.png"></a>
              </div>
          </div>
      </div>
  </section>
  <!-- Main Container End -->

  
   <!-- our clients Slider -->
  
  <!-- our clients Slider -->
  <?php 
include('segment/footer.php');
  ?>
  
  <!-- End Footer -->
  
  
  
   


<!-- End Footer --> 
<!-- mobile menu -->


</body>

<!-- Mirrored from htmlmystore.justthemevalley.com/fancy/version2/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Feb 2020 06:06:40 GMT -->
</html>