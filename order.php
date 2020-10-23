<?php 
include('segment/header.php');
?>
  <script type="text/javascript">
  $(document).on("click","#confirmorder",function(e){
    e.preventDefault();
    var link =$(this).attr("href");
   swal({
  title: "Are you sure Want to Confirm Payment?",
  
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

 <script type="text/javascript">
   function validateForm() {
  var bkashn = document.forms["myForm"]["bkashn"].value;
  var trxid = document.forms["myForm"]["trxid"].value;
 

  if (bkashn == "") {
    swal({
  title: "Bkash Number Field Must Not Be Empty!",
  icon: "warning",
  button: "Ok!",
});
    return false;
  }

    if (trxid == "") {
               swal({
  title: "TrxID Field Must Not Be Empty!",
  icon: "warning",
  button: "Ok!",
});
    return false;
  }
} 
</script>


       <!-- Breadcrumbs -->
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
  if(isset($_GET["order"])){
   $quntity=Session::get("quntity");
   $phone=Session::get("phone");
   $grandtotal=Session::get("grandtotal");
                        //     $queryshipping="SELECT scity FROM customer WHERE email='$email'";
                        //  $resultsh=$db->select($queryshipping);
                        //  $shippingcharge=$resultsh->fetch_assoc();
                        //   if($shippingcharge['scity']=='Dhaka'){ $charge=50;

                        //     $grandtotalc=$grandtotalc+$charge;
                        //     Session::set('grandtotalc','$grandtotalc');
                        //   }else{
                        //   $charge=100;
                        //   $grandtotalc=$grandtotalc+$charge;
                        //    Session::set('grandtotalc','$grandtotalc');
                        // }
                         
  //   date_default_timezone_set('Asia/Dhaka');
        
  // $date=date("d/m/Y h:i:sa");
  // $date1=date("d/m/Y");
  //  $sid=Session::get("sid");
  //  $date4=date( "F", strtotime($date1) );

   // $query1="SELECT*FROM customer_order WHERE email='$email' AND sid='$sid'";
   // $result1=$db->select($query1);
   // $count=mysqli_num_rows($result1);
   // if($count>0)
   // {
   //  echo"";
   // }
   // else{

    

   }
  
  
 
  // }

  ?>    

  

  
  <div class="breadcrumbs">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <ul>
            <li class="home"> <a title="Go to Home Page" href="index.html">Home</a><span>&raquo;</span></li>
           
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
     
    <div class="col-main col-sm-6 col-xs-12 page-title">
        <h2 >Order Summary</h2>
        <!-- reconfirm -->
        <?php if(isset($_GET['reconfirm'])){
          $reconfirm=$_GET['reconfirm'];
          $reconfirm=mysqli_real_escape_string($db->link,$reconfirm);
          Session::set('time',$reconfirm);
        } ?>
          <div class="order-detail-content">
              <div class="table-responsive">
                <table class="table table-bordered cart_summary">
                  <thead>
                    <tr>
                      <th>Product</th>
                      <th>Description</th>
                    
                      <th class="text-center">Unit price</th>
                      <th class="text-center">Qty</th>
                      <th class="text-center">Total</th> 
                      
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $quntity=0;
                    $all_total=0;
                    $email=Session::get("email");
                     $sid=Session::get("sid");
                    
                    $query="SELECT*FROM cart WHERE email='$email' AND sid='$sid' AND NOT order1=1 ";
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
                        $rowcolor=$resultcolor->fetch_assoc();
                      ?>
                          <a href="#">Size :<?php echo$row['size'];?></a>
                         <?php } else{ echo"";}?>
                        </small></td>
                      
                      <td class="price"><span><?php echo $row['price'];?></span></td>
                      <td class="qty">
                        <span><?php
                          
                         echo $row['quntity'];?></span>
                    </td>
                      <td class="price"><span>Taka-<?php
                         Session::set('date',$row['date2']);
                         
                          $total=$row['quntity']*$row['price'];
                          $all_total=$total+$all_total;
                       echo$total;?></span>
                      </td>
                      
                    </tr>
                    <?php }}else{
                      echo""; 
                    }

                      ?>

                    
                  </tbody>
                        </table>
               
            
              </div>
              
            </div>
            <div class="row">
                <div class=" col-md-6 col-sm-12">
                  <section>
      
                             
                  </section>
                </div>
                <div class=" col-md-6 col-sm-12">
                     <table class="table table-striped">
                    
                    <tr>
                        <th>Subtotal</th>
                        <td>Taka-<?php echo$all_total;?></td>
                    </tr>
                 
                    <?php

               $sid=Session::get('sid');
                          $querycoupon="SELECT*FROM cart where ccode='yes' AND sid='$sid'";
                          $sure=$db->select($querycoupon);
                          $csure=$sure->fetch_assoc();
                          if($csure){ ?>
                            <tr>
                              <th>Coupon Discount:20%</th>
                              <td><?php 
                               $discount=ceil(($all_total*20)/100);
                           $finaltotal=$all_total-$discount;
                             Session::set('grandtotal',$finaltotal);
                       echo $all_total."-".$discount."=".  $finaltotal;
                              ?></td>
                            </tr>
                 
                     
                     <?php } else{ 
                         $finaltotal=$all_total;
                          }
                      ?>

                  

                    <tr>
                        <th>Shipping charge-</th>
                        <?php 
                         $queryshipping="SELECT scity FROM customer WHERE email='$email'";
                         $resultsh=$db->select($queryshipping);
                         $shippingcharge=$resultsh->fetch_assoc();

                        ?>
                        <td><?php if($shippingcharge['scity']=='Dhaka'){echo '50';}else{
                          echo "100";}
                        ?></td>
                      </tr>
             
                        <th>Grand Total</th>
                        <td>Taka-
                          <?php 
                          if($shippingcharge['scity']=='Dhaka'){ $charge=50;}else{
                          $charge=100;
                        }
                              
                               $grand=$charge+$finaltotal;
                                $grandtotal=Session::set("grandtotal",$grand);
                               echo $grand;
                          ?></td>
                    </tr>
                      </table>
                </div>
            </div>

    </div>

     <div class="col-main col-sm-6 col-xs-12">
        <style type="text/css">
          .order1 {
  max-width: 218px;
  margin: 0 auto;
  display: block;
  text-align: center;
}
.payment1 li {
  /* text-align: center; */
  font-size: 17px;
  font-family: rubic;
  /* font-weight: 600; */
  padding: 4px 6px;
  text-shadow: 0px 1px #dee8e1;
}.placeorder{
  margin: 0 auto;margin-bottom: 0px;display: block;margin-bottom: 10px;
}
        </style>
        
        <div class="page-content checkout-page">
            <div class="page-title">
          <h2>Select Payment Method</h2>
           </div>
        </div>
        <div class="row">
          <div class="col-md-12 col-sm-12"> 
            <div class="order1"><a href="#demo1" class="custombtn btn-primary"style="width:210px;" data-toggle="collapse">Cash On Delivery</a></div>
  <div id="demo1" class="collapse" >
    <div class="order-payment">
      <ul class="payment1">
        <li>You can pay in cash to our courier when you receive the goods at your doorstep.</li>
        <li>Your Delivery Product Will Be Reach Minimum One Week Or Maximum Two Week From Order Date</li>
        
      </ul>
    
    <a  id="confirmorder" class="custombtn btn-primary placeorder" style="" href="confirmorder.php?payment=1">Place Order</a>
  </div>
  </div>
</div>
          <div class="col-md-12 col-sm-12">
               <div class="order1"> <a href="#demo2" class="custombtn btn-info" style="width:210px;" data-toggle="collapse">Online Bkash Payment</a></div>
                <div id="demo2" class="collapse">
                  <div class="order-payment">
                    <div style="margin: 0 auto;display:block">
                    <img src="images/bkashp.jpg">
                  </div>
               <h4> Pay With Bkash. Please take note of the following before you proceed</h4>
                <ul class="payment1">
               <li>After sent your  payment mentioned number you must fillup this form to confirm us that you are the actual owner and get the product.</li>
               <li>Please fillup with TrxID & bkash number from which you sent payment us</li>
                </ul>
      <form name="myForm" method="post" action="confirmorder.php" onsubmit="return validateForm()">
  <div class="form-group">
    <label class="form-label" for="email">Phone:</label>
    <input type="number" class="form-control" placeholder="Enter Bkash Phone number" id="bkashn" name="bkashn" pattern="01[3|4|6|7|8|9][0-9]{8}" >
  </div>
  <div class="form-group">
    <label for="pwd">TrxID:</label>
    <input type="text" class="form-control" placeholder="TrxID" id="trxid" name="trxid" >
  </div>
 
   <input type="submit" class="custombtn btn-info placeorder" name="bkashsubmit" value="Place Order"></a>
</form> 
               
              </div>
                </div>
        </div>
          <div class="col-md-12 col-sm-12">
              <div class="order1">  <a href="#demo3" class="custombtn btn-success"  style="width:210px;" data-toggle="collapse">Online Rocket Payment</a> </div>
            <div id="demo3" class="collapse">
              <div class="order-payment">
                    <ul class="payment1">
              <li>You can pay in cash to our courier when you receive the goods at your doorstep.</li>
              <li>Your Delivery Product Will Be Reach Minimum One Week Or Maximum Two Week From Order Date</li>
              
            </ul>
               <a class="custombtn btn-success placeorder" href="">Place Order</a>
            </div>
            </div>
          </div>

        </div>
         
            
   
                     
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
  
  
  
   
  
  <div id="modal-quickview" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-body">
        <button type="button" class="close myclose" data-dismiss="modal">×</button>
        <div class="product-view-area">
          <div class="product-big-image col-xs-12 col-sm-5 col-lg-5 col-md-5">
            <div class="icon-sale-label sale-left">Sale</div>
            <div class="slider-items-products">
              <div id="previews-list-slider" class="product-flexslider hidden-buttons">
                <div class="slider-items slider-width-col6"> <a href="images/products/img03.jpg" class="cloud-zoom-gallery" id="zoom1"> <img class="zoom-img" src="images/products/img03.jpg" alt="products"> </a> <a href='images/products/img01.jpg' class="cloud-zoom-gallery"><img src="images/products/img01.jpg" alt = "Thumbnail 2"/></a> <a href='images/products/img07.jpg' class="cloud-zoom-gallery"><img src="images/products/img07.jpg" alt = "Thumbnail 1"/></a> <a href='images/products/img02.jpg' class="cloud-zoom-gallery"><img src="images/products/img02.jpg" alt = "Thumbnail 1"/></a> <a href='images/products/img04.jpg' class="cloud-zoom-gallery"><img src="images/products/img04.jpg" alt = "Thumbnail 2"/></a> </div>
              </div>
            </div>
            
            <!-- end: more-images --> 
            
          </div>
          <div class="col-xs-12 col-sm-7 col-lg-7 col-md-7 product-details-area">
            <div class="product-name">
              <h1>Lorem Ipsum is simply</h1>
            </div>
            <div class="price-box">
              <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $329.99 </span> </p>
              <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $359.99 </span> </p>
            </div>
            <div class="ratings">
              <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
              <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Your Review</a> </p>
              <p class="availability in-stock pull-right">Availability: <span>In Stock</span></p>
            </div>
            <div class="short-description">
              <h4>Quick Overview</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. 
            </div>
            <div class="product-color-size-area">
              <div class="color-area">
                <h2 class="saider-bar-title">Color</h2>
                <div class="color">
                  <ul>
                    <li><a href="#"></a></li>
                    <li><a href="#"></a></li>
                    <li><a href="#"></a></li>
                    <li><a href="#"></a></li>
                    <li><a href="#"></a></li>
                    <li><a href="#"></a></li>
                  </ul>
                </div>
              </div>
              <div class="size-area">
                <h2 class="saider-bar-title">Size</h2>
                <div class="size">
                  <ul>
                    <li><a href="#">S</a></li>
                    <li><a href="#">L</a></li>
                    <li><a href="#">M</a></li>
                    <li><a href="#">XL</a></li>
                    <li><a href="#">XXL</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="product-variation">
              <form action="#" method="post">
                <div class="cart-plus-minus">
                  <label for="qty">Quantity:</label>
                  <div class="numbers-row">
                    <div onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 0 ) result.value--;return false;" class="dec qtybutton"><i class="fa fa-minus">&nbsp;</i></div>
                    <input type="text" class="qty" title="Qty" value="1" maxlength="12" id="qty" name="qty">
                    <div onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;" class="inc qtybutton"><i class="fa fa-plus">&nbsp;</i></div>
                  </div>
                </div>
                <button class="button pro-add-to-cart" title="Add to Cart" type="button"><span><i class="fa fa-shopping-cart"></i> Add to Cart</span></button>
              </form>
            </div>
            <div class="product-cart-option">
              <ul>
                <li><a href="wishlist.html"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a></li>
                <li><a href="#"><i class="fa fa-retweet"></i><span>Add to Compare</span></a></li>
                <li><a href="#"><i class="fa fa-envelope"></i><span>Email to a Friend</span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer"> <a href="#" class="btn-services-shop-now" data-dismiss="modal">Close</a> </div>
    </div>
  </div>
</div>

<!-- End Footer --> 
<!-- mobile menu -->



</body>

<!-- Mirrored from htmlmystore.justthemevalley.com/fancy/version2/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Feb 2020 06:06:40 GMT -->
</html>