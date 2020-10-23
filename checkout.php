<?php 
include('segment/header.php');
?>
       <!-- Breadcrumbs -->
  <script type="text/javascript">
  $(document).on("click","#confirmcheckout",function(e){
    e.preventDefault();
    var link =$(this).attr("href");
   swal({
  title: "Are you sure Want to Confirm?",
  
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
     window.location.href=link;
  } else {
    swal("Product Not Confirm");
  }
});

  });
</script>

 
        <?php 
  $sid=Session::get("sid");
  if(isset($_GET["order_cancel"])){
   $quntity=Session::get("email");
  $date=Session::get('date');
     $query="UPDATE order_cancel SET order1=1  WHERE sid='$sid'";
     $result=$db->update($query);
     $query="DELETE FROM cart WHERE sid='$sid' ";
     $result=$db->delete($query);

    
     
  } ?>

<script type="text/javascript">
   function validateForm() {
        var name = document.forms["myForm"]["sname"].value;
  var saddress = document.forms["myForm"]["saddress"].value;
   var scity = document.forms["myForm"]["scity"].value;
  var sphone = document.forms["myForm"]["sphone"].value;
 
  if (name == "") {
    swal({
  title: "Name Field Must Not Be Empty!",
  icon: "warning",
  button: "Ok!",
});
    return false;
  }
  if (saddress == "") {
        swal({
  title: "Address Field Must Not Be Empty!",
  icon: "warning",
  button: "Ok!",
});
    return false;
  }
    if (scity == "") {
            swal({
  title: "City Field Must Not Be Empty!",
  icon: "warning",
  button: "Ok!",
});
    return false;
  }
    if (sphone == "") {
                swal({
  title: "Phone  Field Must Not Be Empty!",
  icon: "warning",
  button: "Ok!",
});
    return false;
  }
} 
</script>
 
  <?php 
  $email=Session::get("email");
  if(isset($_POST['submit12'])){

   $sname=$_POST['sname'];
   $saddress=$_POST['saddress'];
   $scity=$_POST['scity'];
   
   $sphone=$_POST['sphone'];
   $courier=$_POST['courier'];
    $sname=mysqli_real_escape_string($db->link,$sname);
    $saddress=mysqli_real_escape_string($db->link,$saddress);
   $scity=mysqli_real_escape_string($db->link,$scity);
    $sphone=mysqli_real_escape_string($db->link,$sphone);
   $courier=mysqli_real_escape_string($db->link,$courier);
  
  $query="UPDATE customer SET sname='$sname',saddress='$saddress',scity='$scity',sphone='$sphone', courier='$courier' WHERE email='$email'";
  $result=$db->update($query);
  if($result){
     $msg=' <div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Successfully Updated Billing Info!</strong> 
  </div> ';
  }
  }
  ?>     

  <?php 
$sid=Session::get("sid");
if(isset($_GET['delcart'])){
      $delcart=$_GET['delcart'];
      $query="DELETE FROM cart WHERE cartid=$delcart AND sid='$sid' ";
      $delete=$db->delete($query);

}
?>
 
  <?php

if(isset($_POST['cartid'])){
  $email=Session::get("email");

    $quntity=$_POST['quntity'];
    $cartid=$_POST['cartid'];
     $pid=$_POST['pid'];
     $time=Session::get("time");
    $quntity1=mysqli_real_escape_string($db->link,$quntity);
    $cartid=mysqli_real_escape_string($db->link,$cartid);
     $pid=mysqli_real_escape_string($db->link,$pid);
     if($quntity<=0){
          echo"";
     }
     else{

      $queryq="SELECT*FROM allin WHERE pid=$pid";
  $resultq=$db->select($queryq);
  $qty=$resultq->fetch_assoc();
  $qty1=$qty["Availability"];
  if($qty['Availability']<$quntity1){
       echo'<script type="text/javascript">
            swal({
  title: "Sorry You Cannnot Buy More Than Availability",
  text: "Thanks",
  icon: "error",
  button: "Ok!",
});
            </script>';
  }
    else{
      $sid=Session::get('sid');
    $updatecart="UPDATE cart SET quntity=$quntity1 WHERE sid='$sid' AND NOT order1=1";
    $updatecart_result=$db->update($updatecart);
    $updatecart="UPDATE order_cancel SET quntity=$quntity1 WHERE sid='$sid' AND NOT order1=1";
    $updatecart_result=$db->update($updatecart);
 }   
}
}

   ?> 
  
  <div class="breadcrumbs">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <ul>
            <li class="home"> <a title="Go to Home Page" href="index.php">Home</a><span>&raquo;</span></li>
           
            <li><strong>Checkout</strong></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Breadcrumbs End --> 
  
<!-- Main Container -->
<section class="main-container col2-right-layout">
  <div class="main container">
    <div class="row">
      <div class="col-main col-sm-6 col-xs-12">
 
        
        <div class="page-content checkout-page">
            <div class="page-title">
          <h2> Ceheckout Information</h2>
           </div>
        </div>
           <div class="order-detail-content">
              <div class="table-responsive">
                <table class="table table-bordered cart_summary">
                  <thead>
                    <tr>
                      <th class="cart_product">Product</th>
                      <th>Description</th>
                    
                      <th class="text-center">Unit price</th>
                      <th class="text-center">Qty</th>
                      <th class="text-center">Total</th> 
                      <th class="action"><i class="fa fa-trash-o"></i></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $quntity=0;
                    $all_total=0;
                   // $email=Session::get("email");
                     $sid=Session::get("sid");
                    $query="SELECT*FROM cart WHERE sid='$sid'  AND NOT order1=1";
                    $result=$db->select($query);
                    $count=mysqli_num_rows($result);
                    if($count>=1){
                      while($row=$result->fetch_assoc()){
                  ?>
                    <tr>
                      <?php 
                       $colorcode=$row['colorcode'];
                        $query="SELECT*FROM productcolor WHERE colorcode='$colorcode' ";
                        $resultcolor=$db->select($query);
                        $countcolor=mysqli_num_rows($resultcolor);
                        if($countcolor==1){
                        $rowcolor=$resultcolor->fetch_assoc();
                        Session::set("colorcode",$rowcolor['colorcode']);
                      ?>
                      <td class="cart_product"><a href="#"><img src="images/products/<?php echo$rowcolor['image'] ?>" alt="Product"></a></td>
                      <?php } else{?>
                        <td class="cart_product"><a href="#"><img src="images/products/<?php echo$row['image'] ?>" alt="Product"></a></td>
                        <?php }?>
                      
                      <td class="cart_description"><p class="product-name"><a href="#"><?php echo $row['pname'];?> </a></p>
                        <small>
                             <?php 
                       $colorcode=$row['colorcode'];
                        $query="SELECT*FROM productcolor WHERE colorcode='$colorcode' ";
                        $resultcolor=$db->select($query);
                        $countcolor=mysqli_num_rows($resultcolor);
                        if($countcolor==1){
                        $rowcolor=$resultcolor->fetch_assoc();
                      ?>
                          <a href="#">Color Code:<?php echo$row['colorcode'];?></a>
                          <?php } else{ echo""; }?>
                               
                            

                        </small><br>
                        <small>
                           <?php 
                       $pid=$row['pid'];
                       $size=$row['size'];
                        $query="SELECT*FROM size WHERE pid='$pid' AND size1='$size' ";
                        $resultcolor=$db->select($query);
                        $countcolor=mysqli_num_rows($resultcolor);
                        if($countcolor==1){
                        $rowcolor1=$resultcolor->fetch_assoc();
                         Session::set("size",$rowcolor1['size1']);
                      ?>
                          <a href="#">Size :<?php echo$row['size'];?></a>
                         <?php } else{ echo"";}?>
                        </small></td>
                     
                      <td class="price"><span><?php echo $row['price'];?></span></td>
                      <td class="qty">
                        <form action="" method="post" class="form-inline">
                        <input class="form-control input-sm" type="number" name="quntity" value="<?php 
                         
                         
                        echo $row['quntity'];
                         
                        ?>">
                        <input class="form-control input-sm" type="hidden" name="cartid" value="<?php echo $row['cartid'];?>">
                           <input class="form-control input-sm" type="hidden" name="pid" value="<?php echo $row['pid'];?>">
                        <input type="submit" name="submit" class="btn btn-primary" value="Update">
                        </form>
                    </td>
                      <td class="price"><span>Tk-<?php
                                                  $quntity=$row['quntity']+$quntity;
                          
                          $total=$row['quntity']*$row['price'];
                          $all_total=$total+$all_total;
                       echo$total;
                              
                           ?></span>
                      </td>
                      <td class="action"><a onclick="return confirm('Are You Sure Want To Delete?')" href="?delcart=<?php echo$row['cartid']; ?>"><i class="icon-close"></i></a></td>
                    </tr>
                    <?php }}else{
                      echo"<script>window:location='index.php';</script>";
                    }

                      ?>

                    <tr >
                      <?php 
                      Session::set('quntity',$quntity);
                      Session::set('grandtotal',$all_total);

                      ?>
                      <td colspan="5" style="text-align:right;">Total:Tk-</br><?php

                         $sid=Session::get('sid');
                          $querycoupon="SELECT*FROM cart where ccode='yes' AND sid='$sid'";
                          $sure=$db->select($querycoupon);
                          $csure=$sure->fetch_assoc();
                          if($csure){
                              echo"Discount 20%"."<br>";
                               
                           $discount=ceil(($all_total*20)/100);
                           $finaltotal=$all_total-$discount;
                             Session::set('grandtotal',$finaltotal);
                       echo "Subtotal=".$all_total."-".$discount."=".  $finaltotal;
                              }
                              else{
                                  Session::set('grandtotal',$all_total);
                         echo$all_total;
                              }
                       ?></td>
                      
                    </tr>
                  </tbody>
                        </table>
               
            
              </div>
              
            </div>
         

    </div>
    <div class="col-main col-sm-6 col-xs-12 page-title">
             <div>
          <h2 class="delivery">Delivery Information</h2>
          <ul  style="
  padding: 0;
  margin: 0 0 10px 25px;
  font-family: work sans;
  font-size: 17px;
  list-style-type: none;
">
            <li style="color:#207d40" class="homed"><i class="fa fa-home"></i> Home Delivery(Only Dhaka)(Charge-50 Tk)</li>
            <li style="color:#756821"><i class="fa fa-external-link" aria-hidden="true"></i>
 Courier Service(Outside of Dhaka)(Charge-100 Tk)</li>
            <li style="color:#8c1010 "><i class="fa fa-sticky-note-o" aria-hidden="true"></i>

  If you are outside from Dhaka, Please mention the Nearest Courier Service address box bellow. </li>
          </ul>
        </div>

                <?php if(isset($msg)){
           echo $msg;
        }


        ?>
        
          

           <?php
                    
                    $email=Session::get("email");
                    $query="SELECT*FROM customer WHERE email='$email'";
                    $result=$db->select($query);
                    $count=mysqli_num_rows($result);
                    if($count>=1){
                      while($row=$result->fetch_assoc()){
                  ?>
                     

        
                
          

<div>
<h2>Billing Information</h2>
  <!-- billing information-->
  <form name="myForm" method="post" action="" onsubmit="return validateForm()">
    <div class="form-group">
      <label for="email">Name</label>
      <input type="text" class="form-control" id="sname"  name="sname" value="<?php echo$row['sname'] ?>" >
    </div>
     
    <div class="form-group">

      <label for="pwd">City</label>
    
      <input type="radio" name="scity" value="Dhaka" <?php if($row['scity']=='Dhaka') { ?> checked <?php } ?> >Dhaka
      <input type="radio" name="scity" value="Outsideofdhaka"
       <?php if($row['scity']=='Outsideofdhaka') { ?> checked <?php } ?> >Outside of Dhaka
    </div>
      <div class="form-group">
      <label for="pwd">Address</label>
      <input type="text" class="form-control" id="saddress" placeholder="Enter Address" name="saddress" value="<?php echo$row['saddress'] ?>" >
    </div>


       <div class="form-group">
      <label for="pwd">Courier Address(Outside of Dhaka compulsory)</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter courier name" name="courier" value="<?php echo$row['courier'] ?>">
    </div>
    
    <div class="form-group">
      <label for="pwd">Phone</label>
      <input type="text" class="form-control" id="sphone" placeholder="Enter phone" pattern="01[3|5|6|7|8|9][0-9]{8}" name="sphone" value="<?php echo$row['sphone'] ?>" >
    </div>

   
   
    <button type="submit" class="custombtn btn-primary" name="submit12">Update</button>
  </form>

        </div>

    <div>
  
</div>

  <?php }}?>
    </div>

    </div>

  </div>
  </section>
  <!-- Main Container End -->

  <section>
      <div class="container">
          <div class="row">
              <div class="col-xs-12 col-sm-12 checkout_order ml">
                   <a href="index.php"><img style="max-width:180px" src="images/shop.png"></a>
                   <a  class="custombtn btn-success" href="order.php?order=order" id="confirmcheckout" style="padding:12px 23px;">Order Confirm</a>
              </div>
          </div>
      </div>
  </section>
  <section>
      <div class="container">
          <div class="row">
              <div class="col-xs-12 col-sm-12 checkout_order ">
                 
              </div>
          </div>
      </div>
  </section>
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