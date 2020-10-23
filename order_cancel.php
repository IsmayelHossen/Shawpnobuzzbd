

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
        <!-- Breadcrumbs -->
   <?php 
$email=Session::get("email");
if(isset($_GET['delcart'])){
      $delcart=$_GET['delcart'];
      $query="DELETE FROM order_cancel WHERE id=$delcart AND email='$email' ";
      $delete=$db->delete($query);

}
?>   

  

  
  <div class="breadcrumbs">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <ul>
            <li class="home"> <a title="Go to Home Page" href="index.html">Home</a><span>&raquo;</span></li>
           
            <li><strong>Order Canceled</strong></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Breadcrumbs End --> 

<!-- Main Container -->
<section class="profile-section">
  <div class="container">
  <div class="row">
    <div class="col-sm-6 col-md-4 smmd-4 ">
      <h3 class="manage">Manage My Account</h3>
       <div class="list-group">
  <a href="profile.php" class="list-group-item list-group-item-action">Profile</a>
  <a href="#" class="list-group-item list-group-item-action">Payment Option</a>
  
</div>
<h3 class="profileo"> My Order</h3>
       <div class="list-group">
  <a href="ordershow.php" class="list-group-item list-group-item-action">Order</a>
  <a href="order_cancel.php" class="list-group-item list-group-item-action">Cancellations</a>
 
</div>  
    </div>
    <div class="col-sm-6 col-md-8 md8sm6 ">
      <h2 class="uprofile">Orders Canceled List</h2>
      <div class="order-detail-content">
              <div class="table-responsive">
                <table class="table table-bordered cart_summary">
                  <thead>
                    <tr>
                      <th class="cart_product">Product</th>
                      <th>Description</th>
                    
                      <th class="text-center">Unit price</th>
                      <th class="text-center">Qty</th>
                       <th class="text-center">Date</th>
                      <th class="text-center">Total</th> 
                      <th class="action"><i class="fa fa-trash-o"></i></th>
                      <th class="text-center">Roll Back</th> 
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $all_total=0;
                    $email=Session::get("email");
                     $time=Session::get("time");
                    $query="SELECT*FROM order_cancel WHERE email='$email' AND order1=1 ORDER BY id desc  ";
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
                        <?php echo $row['quntity'];?>
                    </td>
                    <td><?php echo $row['date2']; ?></td>
                      <td class="price"><span>Taka-<?php
                          $total=$row['quntity']*$row['price'];
                          $all_total=$total+$all_total;
                       echo$total;?></span>
                      </td>
                      <td class="action"><a onclick="return confirm('Are You Sure Want To Delete?')" href="?delcart=<?php echo$row['id']; ?>"><i class="icon-close"></i></a></td>
                      <td><a class="btn btn-primary" href="single_product.php?pid=<?php echo $row['pid']; ?>">Buy Now</a></td>
                    </tr>
                    <?php }}else{
                      echo"<script>window:location='index.php';</script>";
                    }

                      ?>

                    
                  </tbody>
                </table>
                
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