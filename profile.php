

  <?php 

include('segment/header.php');
?>
  <?php
                     $login=Session::get("login");
                     if($login==true){
                      echo"";
                     }
                     else{
                      echo"<script>window:location='account_page.php';</script>";
                     }


                      ?>

             <?php 
  $email=Session::get("email");
  if(isset($_GET["ordercancelfinal"])){
   $date=$_GET["ordercancelfinal"];
     $query="SELECT*FROM cart WHERE date2='$date' AND email='$email'";
       $resultc=$db->select($query);
       if($resultc){
          while ($row=$resultc->fetch_assoc()) {
            $pid=$row['pid'];
            $quntity=$row['quntity'];
            $querya="SELECT*FROM allin WHERE pid=$pid";
            $resulta=$db->select($querya);
            $rowall=$resulta->fetch_assoc();
            $quntity2=$rowall['Availability'];
            $finalqty=$quntity2+$quntity;
          
        
               
            
        
              $query="UPDATE allin SET Availability=$finalqty WHERE pid=$pid ";
                  $result=$db->update($query);

            
                 
            }
            
          }
  
     $query="UPDATE order_cancel SET order1=1  WHERE email='$email' AND date2='$date'";
     $result=$db->update($query);
     $query="DELETE FROM customer_order   WHERE email='$email' AND date3='$date'";
     $result=$db->delete($query);
     $query="DELETE FROM cart WHERE email='$email' AND date2='$date' ";
     $result=$db->delete($query);

    
     
  } ?>         

         <!-- Breadcrumbs -->
  <?php 
  $email=Session::get("email");
  if(isset($_GET["payment"])){
   $quntity=Session::get("email");

     $query="UPDATE cart SET order1=1 WHERE email='$email'";
     $result=$db->update($query);
      $query="UPDATE customer_order SET payment='cash on delivry' WHERE email='$email'";
     $result=$db->update($query);
  }
 
  
  ?>    

  <style type="text/css">
    
.form-control:focus {outline:none!important;}
.form-control {
  display: block;
  width: 100%;
  height: 34px;
  padding: 6px 12px;
  font-size: 14px;
  line-height: 1.42857143;
  color: #555;
  /* background-color: #fff; */
  /* background-image: none; */
  /* border: 1px solid #ccc; */
  border-radius: 4px;
  -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
  /* box-shadow: inset 0 1px 1px rgba(0,0,0,.075); */
  -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
  -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
  transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
  border:0;outline:0;
}
.tab-content > .active {
  margin-top: -28px;
}
  </style>

  
  <div class="breadcrumbs">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <ul>
            <li class="home"> <a title="Go to Home Page" href="index.html">Home</a><span>&raquo;</span></li>
           
            <li><strong>Profile</strong></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Breadcrumbs End --> 

<!-- Main Container -->

  
      

  

  <div class="container">

  <br>
  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#home">Profile</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu3">Shippin Address</a>
    </li>
  
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menuo">My Order</a>
    </li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div id="home" class="container tab-pane active"><br>
      <div class="profile1">
      <h3>Profile</h3>
      <div id="updatep"></div>
          <?php
                    
                    $email=Session::get("email");
                    $query="SELECT*FROM customer WHERE email='$email'";
                    $result=$db->select($query);
                    $count=mysqli_num_rows($result);
                    if($count>=1){
                      while($row=$result->fetch_assoc()){
                  ?>
                     <form action=" " method="post">

    <div class="form-group col-md-6">
      <label for="email">Name</label>
      <input type="text" class="form-control input-sm" id="name"  name="name"  value="<?php echo$row['fname'] ?>">
    </div>
     <div class="form-group col-md-6">
      <label for="pwd">Region</label>
      <input type="text" class="form-control" id="region" placeholder="Enter Region" name="region" value="<?php echo$row['region'] ?>">
    </div>
    <div class="form-group col-md-6">
      <label for="pwd">City</label>
      <input type="text" class="form-control" id="city" placeholder="Enter city" name="city" value="<?php echo$row['city'] ?>">
    </div>
     <div class="form-group col-md-6">
      <label for="pwd">Address</label>
    
      <textarea type="text" class="form-control" id="address" placeholder="Enter address" name="address" value="<?php echo$row['address'] ?>" > <?php echo$row['address'] ?> </textarea>
    </div>
    <div class="form-group col-md-6">
      <label for="pwd">Email</label>
      <input type="text" class="form-control" id="email" placeholder="Enter password" name="email" value="<?php echo$row['email'] ?>  " readonly>
    </div>
    <div class="form-group col-md-6">
      <label for="pwd">Phone</label>
      <input type="text" class="form-control" id="phone" placeholder="Enter password" name="phone" value="<?php echo$row['phone'] ?>">
    </div>
    <div class="form- col-md-6">
      <label for="pwd">Password</label>
      <input type="text" class="form-control" id="password" placeholder="Enter password" name="password" value="<?php echo$row['password'] ?>">
    </div>
   
   
    <button type="submit" class="custombtn btn-primary"  id="updateprofile" >Update Profile</button>
  </form>
  <?php }} else{ ?>
<h3 style="text-align: center;margin-top:30px;margin-bottom:44px;color: #e60e0e;">Please Logout Then Login Again</h3>
<?php }?>

     </div>
  </div>
        
         <div id="menu3" class="container tab-pane fade"><br>
      
      <div class="profile1">
      <h3>Shipping Address</h3>

       <div id="Updateshipping"></div> 
                   <?php   
                    $email=Session::get("email");
                    $query="SELECT*FROM customer WHERE email='$email'";
                    $result=$db->select($query);
                    $count=mysqli_num_rows($result);
                    if($count>=1){
                      while($row=$result->fetch_assoc()){
                  ?>
                     <form action=" " method="post">

    <div class="form-group col-md-6">
      <label for="email">Name</label>
      <input type="text" class="form-control input-sm" id="sname"  name="name" value="<?php echo$row['sname'] ?>">
    </div>
     
    <div class="form-group col-md-6">
      <label for="pwd">City</label>
    
      <input type="text" class="form-control" id="scity" placeholder="Enter Shipping city" name="city" value="<?php echo$row['scity'] ?>">
    </div>
     <div class="form-group col-md-6">
      <label for="pwd">Address</label>
    
      <textarea type="text" class="form-control" rows="3" id="saddress" placeholder="Flat/Road No.." name="address" value="<?php echo$row['saddress'] ?>" > <?php echo$row['saddress'] ?> </textarea>
    </div>

    <div class="form-group col-md-6">
      <label for="pwd">Phone</label>
      <input type="text" class="form-control" id="sphone" placeholder="Enter Phone" name="phone" value="<?php echo$row['sphone'] ?>">
    </div>

   
   
    <button type="submit" class="custombtn btn-primary" id="Shippingupdate">Update Shipping</button>
  </form>
  
    <?php }} else{ ?>
<h3 style="text-align: center;margin-top:30px;margin-bottom:44px;color: #e60e0e;">Please Logout Then Login Again</h3>
<?php }?>

    </div>
    </div>


    <div id="menuo" class="container tab-pane fade"><br>
       <div class=" ">
      <div class="md8sm6">
      <h2 class="uprofile">Order List</h2>
       <?php 
      $i=0;
       $email=Session::get("email");
      $query="SELECT*FROM customer_order WHERE email='$email' ";
      $result=$db->select($query);
      $count=mysqli_num_rows($result);
       if($count<=0){
        
       

       ?>
       <h3 style="padding:72px;font-weight: 600;font-family: sans;">There are no orders placed yet</h3>
        <a href="index.php"><img style="max-width:160px;margin: 0 auto;display: block;" src="images/shop.png"></a>
       <?php } else{ ?>
       <table class="table table-striped">
    <thead>
      <tr>
        <th>No.</th>
        <th>Quntity</th>
        <th>Grand Total</th>
        <th>Date</th>
        <th>Payment Method</th>
        <th>Status</th>
        <th>View</th>
        
      </tr>
    </thead>
    <tbody>
       <?php }?>
      <?php 
      $i=0;
       $email=Session::get("email");
      $query="SELECT*FROM customer_order WHERE email='$email' ";
      $result=$db->select($query);
       if($result){
         while ($row=$result->fetch_assoc()) {
          $i++;
         Session::set("date3",$row['date3']);
         Session::set("time",$row['date3']);
           $time=Session::get("time");
           
       

       ?>
      <tr>
        <td><?php echo$i;?></td>
        <td><?php echo $row['quntity'];?></td>
        <td><?php echo $row['grandtotal'];?></td>
        <td><?php echo $row['date1'];?></td>
        <td><?php
         if($row['payment']=='Confirm Please')
                             {
                                
                                echo'<a href="order.php?reconfirm='.$row['date3'].'"style="color:red">Confirm Please</a>';
                             }
                             elseif($row['payment']=='Bkash Payment'){
                              echo"<p style='color:green'>Bkash Payment</p>"; 
                              echo""."Bkash Num:".$row['bkashn'];
                              echo"<br>"."TrxID:".$row['trxid'];
                             }
                              else {
                               echo"<p style='color:green'>Cash On Delivery</p>"; 
                             }
              

         ?></td>
         <td><?php
           if($row['status']==1){
            echo"<p style='color:green'>Confirmed</p>";
           }
            elseif($row['status']=='2'){
                                echo"<p style='color:red'>Canceled By Authority</p>";
                             }
           else{
            echo"<p style='color:#000'>Pending</p>";
           }
          ?></td>
        <td> 
           
      
       
       
     
  <!-- Trigger the modal with a button -->
  
  <a class="btn btn-info btn-sm" href="orderdetails.php?orderdetails=<?php echo $row['sid']?>">Details</a>

  

  
         </td>
        
      </tr>
      <?php }}?>

    </tbody>

  </table>
   <h5 style="text-align: center;padding: 2px 4px;color:#ec0e0e;"> Please Visit This Page Until You Get The Products In Your Hand</h5>
         </div> 
    </div>
    </div>
  </div>
</div>

  <!-- Main Container End --> 

  
   <!-- our clients Slider -->
  
  <!-- our clients Slider -->
  <?php 
include('segment/footer.php');
  ?>
  
  <!-- End Footer -->
  
  
  
   




</body>

<!-- Mirrored from htmlmystore.justthemevalley.com/fancy/version2/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Feb 2020 06:06:40 GMT -->
</html>








