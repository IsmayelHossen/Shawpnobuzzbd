

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
<section class="profile-section">
  <div class="container">
  <div class="row">
   
    <div >
      <h2 class="uprofile">Purchase Order Details</h2>
      <h3><?php 
      if(isset($_GET['orderdetails'])){
        $orderdetails=$_GET['orderdetails'];
        
      }
      ?></h3>
       <div class="table-responsive">
                <table class="table table-bordered cart_summary">
    <thead>
      <tr>
        <th>No.</th>
        <th>Product</th>
        <th>Price</th>
        <th>Quntity</th>
        <th>Image</th>
        <th>Total</th>
        
      </tr>
    </thead>
    <tbody>
      <?php
      $mul=1;
      $grand=0; 
      $i=0;
       $email=Session::get("email");
      $query="SELECT*FROM cart WHERE email='$email' AND sid='$orderdetails' AND order1=1 ";
      $result=$db->select($query);
       if($result){
         while ($row=$result->fetch_assoc()) {
          $i++;
        
       

       ?>
      <tr>
        <td><?php echo$i;?></td>
        <td><?php echo $row['pname'];?><br>
           <?php 
                       $colorcode=$row['colorcode'];
                        $query="SELECT*FROM productcolor WHERE colorcode='$colorcode' ";
                        $resultcolor=$db->select($query);
                        $countcolor=mysqli_num_rows($resultcolor);
                        if($countcolor==1){
                        $rowcolor=$resultcolor->fetch_assoc();
                    
                      ?>
          <span>Color:<?php echo $rowcolor['colorcode']?></span><br>
          <?php } ?>
          <?php 
                       $size=$row['size'];
                        $query="SELECT*FROM size WHERE size1='$size' ";
                        $resultcolor=$db->select($query);
                        $countcolor=mysqli_num_rows($resultcolor);
                        if($countcolor==1){
                        $rowsize=$resultcolor->fetch_assoc();
                    
                      ?>
         
          <span>Size:<?php echo$rowsize['size1'] ?></span>
          <?php } ?>
        </td>
        <td><?php echo $row['price'];?></td>
        <td><?php echo $row['quntity'];?></td>
        <td>
<?php 
                       $colorcode=$row['colorcode'];
                        $query="SELECT*FROM productcolor WHERE colorcode='$colorcode' ";
                        $resultcolor=$db->select($query);
                        $countcolor=mysqli_num_rows($resultcolor);
                        if($countcolor==1){
                        $rowcolor=$resultcolor->fetch_assoc();
                    
                      ?>
          <img width="50px;" src="images/products/<?php echo $rowcolor['image'];?>">
          <?php } else{?>
          <img width="50px;" src="images/products/<?php echo $row['image'];?>">
            <?php }?>

        </td>
        <td> 
           <?php 
            echo $row['price']*$row['quntity'];

             $mul=$row['price']*$row['quntity'];
             $grand=$mul+$grand;

           
           ?>
      </td>
      </tr>
      <?php }}?>
      <tr>
        <td colspan="6" style="text-align: right;">Grand Total(with shipping charge):
<?php 
 $queryshipping="SELECT scity FROM customer WHERE email='$email'";
                         $resultsh=$db->select($queryshipping);
                         $shippingcharge=$resultsh->fetch_assoc();
                          if($shippingcharge['scity']=='Dhaka'){ $charge=50;
                            $grand=$grand+$charge;
                            echo $grand;
                          }else{
                          $charge=100;
                          $grand=$grand+$charge;
                          echo $grand;
                        }
?>
        </td>
      </tr>
    </tbody>
  </table>
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
<div id="jtv-mobile-menu" class="jtv-mobile-menu">
  <ul>
    <li class=""><a href="index.html">Home</a>
      <ul class="sub-menu">
        <li><a href="http://htmlmystore.justthemevalley.com/fancy/index.html">Home Version 1</a></li>
        <li><a href="index.html">Home Version 2</a></li>
      </ul>
    </li>
    <li><a href="shop_grid.html">Pages</a>
      <ul>
        <li><a href="shop_grid.html" class="">Shop Pages </a>
          <ul>
            <li> <a href="shop_grid.html"> Shop grid </a> </li>
            <li> <a href="shop_grid_right_sidebar.html"> Shop grid right sidebar</a> </li>
            <li> <a href="shop_list.html"> Shop list </a> </li>
            <li> <a href="shop_list_right_sidebar.html"> Shop list right sidebar</a> </li>
            <li> <a href="shop_grid_full_width.html"> Shop Full width </a> </li>
          </ul>
        </li>
        <li><a href="shop_grid.html">Ecommerce Pages </a>
          <ul>
            <li> <a href="wishlist.html"> Wishlists </a> </li>
            <li> <a href="checkout.html"> Checkout </a> </li>
            <li> <a href="compare.html"> Compare </a> </li>
            <li> <a href="shopping_cart.html"> Shopping cart </a> </li>
          </ul>
        </li>
        <li> <a href="shop_grid.html">Static Pages </a>
          <ul>
            <li> <a href="create_account_page.html"> Create Account Page </a> </li>
            <li> <a href="about_us.html"> About Us </a> </li>
            <li> <a href="contact_us.html"> Contact us </a> </li>
            <li> <a href="404error.html"> Error 404 </a> </li>
            <li> <a href="faq.html"> FAQ </a> </li>
            <li> <a href="register_page.html"> Register Page </a> </li>
          </ul>
        </li>
        <li> <a href="shop_grid.html">Single Product Pages </a>
          <ul>
            <li><a href="single_product.html"> single product </a> </li>
            <li> <a href="single_product_left_sidebar.html"> single product left sidebar</a> </li>
            <li> <a href="single_product_right_sidebar.html"> single product right sidebar</a> </li>
            <li> <a href="single_product_magnific_popup.html"> single product magnific popup</a> </li>
            <li> <a href="cat-4-col.html"> 4 Column Sidebar</a> </li>
          </ul>
        </li>
        <li> <a href="shop_grid.html"> Blog Pages </a>
          <ul>
            <li><a href="blog_right_sidebar.html">Blog – Right sidebar </a></li>
            <li><a href="blog_left_sidebar.html">Blog – Left sidebar </a></li>
            <li><a href="blog_full_width.html">Blog_ - Full width</a></li>
            <li><a href="single_post.html">Single post </a></li>
          </ul>
        </li>
      </ul>
    </li>
    <li><a href="shop_grid.html">Women</a>
      <ul class="">
        <li><a href="#">Clother</a>
          <ul>
            <li><a href="shop_grid.html">Cocktail</a></li>
            <li><a href="shop_grid.html">Day</a></li>
            <li><a href="shop_grid.html">Evening</a></li>
            <li><a href="shop_grid.html">Sports</a></li>
            <li><a href="shop_grid.html">Sexy Dress</a></li>
            <li><a href="shop_grid.html">Fsshion Skirt</a></li>
            <li><a href="shop_grid.html">Evening Dress</a></li>
            <li><a href="shop_grid.html">Children's Clothing</a></li>
          </ul>
        </li>
        <li><a href="shop_grid.html">Dress and skirt</a>
          <ul>
            <li><a href="shop_grid.html">Sports</a></li>
            <li><a href="shop_grid.html">Run</a></li>
            <li><a href="shop_grid.html">Sandals</a></li>
            <li><a href="shop_grid.html">Books</a></li>
            <li><a href="shop_grid.html">A-line Dress</a></li>
            <li><a href="shop_grid.html">Lacy Looks</a></li>
            <li><a href="shop_grid.html">Shirts-T-Shirts</a></li>
          </ul>
        </li>
        <li><a href="shop_grid.html">shoes</a>
          <ul>
            <li><a href="shop_grid.html">blazers</a></li>
            <li><a href="shop_grid.html">table</a></li>
            <li><a href="shop_grid.html">coats</a></li>
            <li><a href="shop_grid.html">Sports</a></li>
            <li><a href="shop_grid.html">kids</a></li>
            <li><a href="shop_grid.html">Sweater</a></li>
            <li><a href="shop_grid.html">Coat</a></li>
          </ul>
        </li>
      </ul>
    </li>
    <li class=""><a href="shop_grid.html">Men</a>
      <ul class="">
        <li><a href="shop_grid.html">Bages</a>
          <ul>
            <li><a href="shop_grid.html">Bootes Bages</a></li>
            <li><a href="shop_grid.html">Blazers</a></li>
            <li><a href="shop_grid.html">Mermaid</a></li>
          </ul>
        </li>
        <li><a href="shop_grid.html">Clothing</a>
          <ul>
            <li><a href="shop_grid.html">coats</a></li>
            <li><a href="shop_grid.html">T-shirt</a></li>
          </ul>
        </li>
        <li><a href="shop_grid.html">lingerie</a>
          <ul>
            <li><a href="shop_grid.html">brands</a></li>
            <li><a href="shop_grid.html">furniture</a></li>
          </ul>
        </li>
      </ul>
    </li>
    <li><a href="shop_grid.html">Handbags</a>
      <ul class="">
        <li><a href="shop_grid.html">Footwear Man</a>
          <ul>
            <li><a href="shop_grid.html">Gold Rigng</a></li>
            <li><a href="shop_grid.html">paltinum Rings</a></li>
            <li><a href="shop_grid.html">Silver Ring</a></li>
            <li><a href="shop_grid.html">Tungsten Ring</a></li>
          </ul>
        </li>
        <li><a href="shop_grid.html">Footwear Womens</a>
          <ul>
            <li><a href="shop_grid.html">Brand Gold</a></li>
            <li><a href="shop_grid.html">paltinum Rings</a></li>
            <li><a href="shop_grid.html">Silver Ring</a></li>
            <li><a href="shop_grid.html">Tungsten Ring</a></li>
          </ul>
        </li>
        <li><a href="shop_grid.html">Band</a>
          <ul>
            <li><a href="shop_grid.html">Platinum Necklaces</a></li>
            <li><a href="shop_grid.html">Gold Ring</a></li>
            <li><a href="shop_grid.html">silver ring</a></li>
            <li><a href="shop_grid.html">Diamond Bracelets</a></li>
          </ul>
        </li>
      </ul>
    </li>
    <li><a href="shop_grid.html">Shoes</a>
      <ul class="">
        <li><a href="shop_grid.html">Rings</a>
          <ul>
            <li><a href="shop_grid.html">Coats & jackets</a></li>
            <li><a href="shop_grid.html">blazers</a></li>
            <li><a href="shop_grid.html">raincoats</a></li>
          </ul>
        </li>
        <li><a href="shop_grid.html">Dresses</a>
          <ul>
            <li><a href="shop_grid.html">footwear</a></li>
            <li><a href="shop_grid.html">blazers</a></li>
            <li><a href="shop_grid.html">clog sandals</a></li>
            <li><a href="shop_grid.html">combat boots</a></li>
          </ul>
        </li>
        <li><a href="shop_grid.html">Accessories</a>
          <ul>
            <li><a href="shop_grid.html">bootees Bags</a></li>
            <li><a href="shop_grid.html">blazers</a></li>
            <li><a href="shop_grid.html">jackets</a></li>
            <li><a href="shop_grid.html">kids</a></li>
            <li><a href="shop_grid.html">shoes</a></li>
          </ul>
        </li>
        <li><a href="shop_grid.html">Top</a>
          <ul>
            <li><a href="shop_grid.html">briefs</a></li>
            <li><a href="shop_grid.html">camis</a></li>
            <li><a href="shop_grid.html">nigthwear</a></li>
            <li><a href="shop_grid.html">kids</a></li>
            <li><a href="shop_grid.html">shapewer</a></li>
          </ul>
        </li>
      </ul>
    </li>
  </ul>
</div> 


</body>

<!-- Mirrored from htmlmystore.justthemevalley.com/fancy/version2/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Feb 2020 06:06:40 GMT -->
</html>