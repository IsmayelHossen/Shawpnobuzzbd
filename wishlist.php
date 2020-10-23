<?php 
include('segment/header.php');
?>
<?php 
$login=Session::get("login");
if($login==true){
  echo"";
}
else{
   echo "<script>window:location='account_page.php';</script>";
}
?>
 <?php 
$email=Session::get("email");
if(isset($_GET['wishddel'])){
  $del=$_GET['wishddel'];
  $query="DELETE FROM wishlist WHERE email='$email' AND pid=$del";
  $result=$db->delete($query);
  if($result){
    echo ' <script> toastr["success"]("Are you the six fingered man?") </script>';
  }
}

 ?>
 <?php 
   if(isset($_GET['wishid'])){
       $pid=$_GET['wishid'];
       $email=Session::get("email");
       $query="SELECT*FROM allin WHERE pid=$pid ";
       $result=$db->select($query)->fetch_assoc();
       $image=$result['image'];
       $price=$result['amount'];
       $pname=$result['ptitle'];
       $desc=$result['Overview'];
      
       $query1="INSERT INTO wishlist(pid,image,pname,price,des,email) VALUES('$pid','$image','$pname','$price','$desc','$email') ";
       $result=$db->insert($query1);
       if($result){
        echo"<script>window:location='wishlist.php '</script>";

       
     }

   }

 ?>

  <!-- Breadcrumbs -->
  
  <div class="breadcrumbs">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <ul>
            <li class="home"> <a title="Go to Home Page" href="index.html">Home</a><span>&raquo;</span></li>
            <li><strong>Wishlist</strong></li>
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
        <div class="col-main col-sm-9 col-xs-12">
          <div class="my-account">
            <div class="page-title">
              <h2>My Wishlist</h2>
            </div>
            <div class="wishlist-item table-responsive">
              <table class="col-md-12">
                <thead>
                  <tr>
                    <th class="th-price">No.</th>
                    <th class="th-product">Images</th>
                    <th class="th-details">Product Name</th>
                    <th class="th-price">Unit Price</th>
                    <th class="th-total th-add-to-cart">Add to Cart </th>
                    <th class="th-delate">Remove</th>
                  </tr>
                </thead>
                <tbody>
                 <?php 
                 $i=0;
                   $email=Session::get("email");
                   $query="SELECT*FROM wishlist WHERE email='$email' ";
                   $result=$db->select($query);
                   $count=mysqli_num_rows($result);
                   if($count>=1){
                      while($row=$result->fetch_assoc()){
                      $i++;
                      
                   
                 ?> 
                  <tr>
                    <td><?php echo $i; ?></td>
                    <td class="th-product"><a href="#"><img src="images/products/<?php echo $row['image']; ?>" alt="cart"></a></td>
                    <td class="th-details"><h2><a href="#">L<?php echo $row['des']; ?></a></h2></td>
                    <td class="th-price price"><?php echo $row['price']; ?></td>
                    <th class="td-add-to-cart"><a href="single_product.php?pid=<?php echo$row['pid']; ?> "> Add to Cart</a></th>
                    <td class="th-delate"><a href="?wishddel=<?php echo $row['pid']; ?>">X</a></td>
                  </tr>
                  <?php }}else {
                    echo"<script>window:location='index.php'</script>";

                  }?>

                    
                  
                </tbody>
              </table>
              </div>
          </div>
        </div>
        <aside class="right sidebar col-sm-3 col-xs-12">
          <div class="sidebar-account block">
            <div class="sidebar-bar-title">
              <h3>My Account</h3>
            </div>
            <div class="block-content">
              <ul>
                <li><a>Account Dashboard</a></li>
                <li><a href="#">Account Information</a></li>
                <li><a href="#">Address Book</a></li>
                <li><a href="#">My Orders</a></li>
                <li><a href="#">Billing Agreements</a></li>
                <li><a href="#">Recurring Profiles</a></li>
                <li><a href="#">My Product Reviews</a></li>
                <li><a href="#">My Tags</a></li>
                <li class="current"><a href="#">My Wishlist</a></li>
                <li><a href="#">My Downloadable</a></li>
                <li class="last"><a href="#">Newsletter Subscriptions</a></li>
              </ul>
            </div>
          </div>
         </div>
        </aside>
      </div>
    </div>
  </section>
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


 
</body>

<!-- Mirrored from htmlmystore.justthemevalley.com/fancy/version2/wishlist.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Feb 2020 06:06:59 GMT -->
</html>