
<?php 
$sid=Session::get("sid");
if(isset($_GET['delcart'])){
      $delcart=$_GET['delcart'];
      $query="DELETE FROM cart WHERE pid=$delcart AND sid='$sid' ";
      $delete=$db->delete($query);

}
?>

<div class="our-clients">
    <div class="container">
      <div class="slider-items-products">
        <div id="our-clients-slider" class="product-flexslider hidden-buttons">
          <div class="slider-items slider-width-col6"> 
            <div class="offer-content-text">
                      
                    </div>
                   
            <!-- Item -->
            <div class="item" > <a href="#"> <p ><i class="pe-7s-plane"></i> Free Shipping for Orders Over <span>Taka-3000</span></p></a></div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item"> <a href="#"><p><i class="pe-7s-gift"></i> Free Gift after every <span>10 order</span></p></a> </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item"> <a href="#"><p ><i class="pe-7s-refresh-2"></i> 100% Money Back <span>Guarantee</span>.</p></a> </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item" > <a href="#"><p><i class="pe-7s-like2"></i> Only the <span>Best Quality</span> and brands</p></a> </div>
            <!-- End Item --> 
            <!-- Item -->
          
            
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Footer -->
  <footer>
    <div class="container">
          <div class="row">

            <div class="col-md-4" style="color:white">
               <img src="images/logofi.png" width="120px;" style="color: white">
               <ul style="display: inline-block;list-style-type:none;"><li><a href="about_us.php">About us</a></li>
                <li><a href="contact_us.php">Contact us</a></li>
               </ul>
             </div>
             <div class="footer-content">
              <div class="col-md-4">
                <div class="email">
               <a href=""><i class="fa fa-envelope"></i>
              <p style="">ismayelhossen123@gmail.com</p></a>
            </div>
            <div class="phone">
               <i class="fa fa-phone"></i>
              <p>01952-152883</p>
            </div>
            <div class="address">
               <i class="fa fa-map-marker"></i>
              <p>Online E-comerce Platform Shawpnobuzzbd,Sector-6,Uttara, Dhaka</p>
            </div>
             </div>
           </div>

            
             <div class="col-md-4">
               <div class="social">
                  <ul class="inline-mode">
                    <li class="social-network fb"><a title="Connect us on Facebook" target="_blank" href="https://web.facebook.com/Shawpnobuzzbd-109399980819505/?modal=admin_todo_tour"><i class="fa fa-facebook"></i></a></li>
                    <li class="social-network googleplus"><a title="Connect us on Google+" target="_blank" href="https://plus.google.com/"><i class="fa fa-google-plus"></i></a></li>
                    <li class="social-network tw"><a title="Connect us on Twitter" target="_blank" href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                    <li class="social-network linkedin"><a title="Connect us on Linkedin" target="_blank" href="https://www.pinterest.com/"><i class="fa fa-linkedin"></i></a></li>
                    <li class="social-network rss"><a title="Connect us on Instagram" target="_blank" href="#"><i class="fa fa-rss"></i></a></li>
                    <li class="social-network instagram"><a title="Connect us on Instagram" target="_blank" href="https://instagram.com/"><i class="fa fa-instagram"></i></a></li>
                  </ul>
                </div>
             </div>

        


    </div>
    </div>
  </footer>
  <a href="#" class="totop"> </a> 

  <div id="modal-cart" class="modal modal-right fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
          <h4 class="modal-title">
             <?php 
              $sid=Session::get("sid");
             // $date1=Session::get("sid");
              $query="SELECT*FROM cart WHERE sid='$sid'  AND NOT order1=1";
               $result=$db->select($query);
               $count=0;
               while($row=$result->fetch_assoc()){
                $count=$row['quntity']+$count;


               }
               echo $count;
              ?>

           items in your cart</h4>
        </div>
        <div class="modal-body"> 
          
          <!-- Begin shopping cart content -->
          <div class="cart-content">
            <ul class="cart-product-list">
               <?php 
              $email=Session::get("sid");
             $query="SELECT*FROM cart WHERE sid='$sid' AND NOT order1=1";
               $result=$db->select($query);
                $sum=0;
               while($row=$result->fetch_assoc()){
              
              ?>
              <li> 
                
                <!-- Begin shopping cart product -->
                <div class="cart-product"> <a href="#" class="cart-pr-thumb bg-image"><img src="<?php echo$row['image'];?>" alt="Lorem ipsum dolor" width="65"></a>
                  <div class="cart-pr-info"> <a href="#" class="cart-pr-title"><?php echo$row['pname'];?></a>
                    <div class="cart-pr-price">Tk-<?php echo$row['price'];?></div>
                    <div class="cart-pr-quantity">Quantity: <span><?php
                       $total=$row['price']*$row['quntity'];
                        $sum=$total+$sum;
                     echo$row['quntity'];?></span></div>
                  </div>
                  <a onclick="return confirm('Are You Sure Want To Delete?')" href="?delcart=<?php echo $row['pid'];?>" class="cart-pr-remove" title="Remove from cart">×</a> </div>
                <!-- End shopping cart product --> 
              </li>
              <?php }?>
              
            </ul>
          </div>
          <!-- End shopping cart content --> 
          
        </div>
        <div class="modal-footer padding-vertical-0">
          <div class="cart-total"> <strong>Subtotal:</strong> <span>Tk-<?php echo $sum;?></span> </div>
          <div class="row">
        
                    
                      <div class="col-xs-6 no-padding"> <a href="shopping_cart.php" class="view-cart no-margin">View Cart</a> </div>
            <!-- /.col -->
            
            <div class="col-xs-6 no-padding"> 

            
                    <a class="btn-checkout no-margin" href="checkout.php"><span> Checkout</span></a>
                   
                      
                      </div>

           
            <!-- /.col --> 
          </div>
          <!-- /.row --> 
        </div>
      </div>
      <!-- /.modal-content --> 
    </div>
    <!-- /.modal-dialog --> 
  </div>
  
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








