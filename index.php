<?php 
include('segment/header.php');
 $date=date("d/m/Y h:i:sa");
  $date1=date("d/m/Y");
   $date2=Session::get("time");
  
?>

<?php 
   if(isset($_GET['wishid'])){
       $pid=$_GET['wishid'];
       $email=Session::get("email");
       $query="SELECT*FROM  wishlist WHERE pid=$pid AND email='$email'";
       $result2=$db->select($query)->fetch_assoc();
       if($result2){
        //echo "<script>alert('already Added')</script>";
        echo '<script type="text/javascript">
            swal({   
title: "Product Already Added To Wishlist",   
   text: "Please see from wishlist",   
   type: "warning",   
   
   customClass: "Custom_Cancel"

});
            </script>';
         
       }
       else{
       
        echo"<script>window:location='wishlist.php?wishid=$pid '</script>";

       
     }

   }

 ?>
 <?php 
   if(isset($_GET['compareid'])){
       $pid=$_GET['compareid'];
       $email=Session::get("email");
       $query="SELECT*FROM  compare WHERE pid=$pid AND email='$email'";
       $result2=$db->select($query)->fetch_assoc();
       if($result2){
        //echo "<script>alert('already Added')</script>";
        echo '<script type="text/javascript">
            swal({
  title: "Product Already Added To Compare!",
  text: "See Compare",
  icon: "error",
  button: "Ok!",
});
            </script>';
         
       }
       else{
       
        echo"<script>window:location='compare.php?compareid=$pid '</script>";

       
     }

   }

 ?>

  <!-- Main Slider Area -->
  <div class="main-slider-area">
    <div class="container">
      <div class="row">
         <?php 
              if(isset($wishmsg)){
                echo $wishmsg;
  
              }
              ?>
              
            
        <div class="col-md-12 col-xs-12"> 
          <!-- Main Slider -->
          <div class="main-slider">
            <div class="slider">
              <div id="mainSlider" class="nivoSlider slider-image"> <img src="images/banner-3.jpg" alt="main slider" title="#htmlcaption1" style="height:auto" /> <img src="images/banner-1.jpg" alt="main slider" title="#htmlcaption2" style="height:auto" /></div>
              <!-- Slider Caption 1 -->
              <div id="htmlcaption1" class="nivo-html-caption slider-caption-1">
                <div class="slider-progress"></div>
                <div class="slide-text">
                  <div class="middle-text">
                    <div class="cap-dec">
                    <!--   <h2 class="cap-dec wow fadeInUp animated" data-wow-duration="1.1s" data-wow-delay="0s">Huge Sales</h2>

                      <h1 class="cap-dec wow fadeInUp animated" data-wow-duration="2.3s" data-wow-delay="0s">New Fashion Collections</h1>
                      <p class="cap-dec wow lightSpeedIn hidden-xs" data-wow-duration="1.5s" data-wow-delay="0s"> Loren ipsum dolorsit amet, consectetur adipisicing, sed do eiusmod.</p> -->
                    </div>
                    <div class="cap-readmore wow zoomInRight" data-wow-duration=".9s" data-wow-delay=".5s"> <a href="#">Shop Now</a> </div>
                  </div>
                </div>
              </div>
              <!-- Slider Caption 2 -->
              <div id="htmlcaption2" class="nivo-html-caption slider-caption-2">
                <div class="slider-progress"></div>
                <div class="slide-text slide-text-2">
                  <div class="middle-text">
                    <div class="cap-dec">
<!--                       <h2 class="cap-dec wow fadeInUp" data-wow-duration="1.1s" data-wow-delay="0s">Spring 2017 </h2>
                      <h1 class="cap-dec wow fadeInUp" data-wow-duration="2.3s" data-wow-delay="0s"><span>20%</span> OFF ALL ITEMS</h1>
                      <p class="cap-dec wow lightSpeedIn hidden-xs" data-wow-duration="1.5s" data-wow-delay="0s"> Loren ipsum dolorsit amet, consectetur adipisicing, sed do eiusmod.</p> -->
                    </div>
                    <div class="cap-readmore wow zoomInUp" data-wow-duration="1.3s" data-wow-delay=".3s"> <a href="#">Shop Now</a> </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- End Main Slider --> 
          
        </div>
      </div>
    </div>
  </div>
  <!-- End Main Slider Area -->
  <div class="container"> 
    <!-- service section -->
    <div class="jtv-service-area">
      <div class="row">
        <div class="col col-md-4 col-sm-4 col-xs-12 no-padding">
          <div class="block-wrapper ship">
            <div class="text-des"> <i class="icon-rocket"></i>
              <h3>FREE SHIPPING & RETURN</h3>
              
            </div>
          </div>
        </div>
        <div class="col col-md-4 col-sm-4 col-xs-12 no-padding">
          <div class="block-wrapper return">
            <div class="text-des"> <i class="fa fa-dollar"></i>
              <h3>MONEY BACK GUARANTEE</h3>
              
            </div>
          </div>
        </div>
        <div class="col col-md-4 col-sm-4 col-xs-12 no-padding">
          <div class="block-wrapper support">
            <div class="text-des"> <i class="fa fa-headphones"></i>
              <h3>ONLINE SUPPORT 24/7</h3>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Best selling -->

    <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="related-product-area">
          <div class="title_block">
            <h3 class="products_title">BEST SELLING</h3>
          </div>
          <div class="related-products-pro">
            <div class="slider-items-products">
              <div id="related-product-slider" class="product-flexslider hidden-buttons">
                <div class="slider-items slider-width-col4">
                       <?php $query="SELECT pid from cart group by pid having count(*)>1 ORDER BY MAX(pid) DESC LIMIT 0,3";
                    $result=$db->select($query);
                    $count=mysqli_num_rows($result);
                    if($result){
                      while($row=$result->fetch_assoc()){
                      
                       $best=$row['pid'];
                    
                  ?>
                  <?php 
                  $query="SELECT*FROM cart WHERE pid=$best";
                  $result1=$db->select($query);
                
                $row1=$result1->fetch_assoc();

                 
                  
                  ?>

                  <div class="product-item">
                    <div class="item-inner">
                      <div class="product-thumbnail">
                        <div class="icon-sale-label sale-left">Sale</div>
                        <div class="box-hover">
                      
                       <div class="add-to-links" data-role="add-to-links"> <a href="index.php?wishid=<?php echo $row1['pid'] ?>" class="action add-to-wishlist" title="Add to Wishlist"></a> <a href="index.php?compareid=<?php echo $row1['pid'] ?>" class="action add-to-compare" title="Add to Compare"></a> </div>
                        </div>
                        <a href="single_product.php?pid=<?php echo $row1['pid'] ?>&categories=<?php echo$row1['categories'] ?> & brand=<?php echo $row1['brand'] ?>" class="product-item-photo"> <img class="product-image-photo" src="images/products/<?php echo $row1['image'] ?>" alt=""></a> </div>
                      <div class="pro-box-info">
                        <div class="item-info">
                          <div class="info-inner">
                            <div class="item-title"> <h4><a title="<?php echo $row1['pname'] ?>" href="single_product.html"><?php echo $row1['pname']?></a></h4> </div>
                            <div class="item-content">
                               <div class="rating"><?php
                  $pid=$row['pid'];
                  $query1="SELECT*FROM review WHERE pid=$pid ";
                  $result1=$db->select($query1);
                  $count=mysqli_num_rows($result1);
                  if($count>0) {
                   $row1=$result1->fetch_assoc();
                   if($row1['quality']==5){
                    ?>
                    <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>&nbsp; <span>(<?php echo $count;?> Reviews)</span>
                    <?php } elseif($row1['quality']==4){
                    ?>
                     <i class="fa fa-star-o"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>&nbsp; <span>(<?php echo $count;?> Reviews)</span>
                     <?php } elseif($row1['quality']==3){
                    ?>
                     <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>&nbsp; <span>(<?php echo $count;?> Reviews)</span>
                     <?php } elseif($row1['quality']==2){
                    ?>
                     <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>&nbsp; <span>(<?php echo $count;?> Reviews)</span>

                  <?php }  else{  ?>
                     <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star"></i>&nbsp; <span>(<?php echo $count;?> Reviews)</span>
               <?php

                  }} else{ ?>
                     <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i>&nbsp; <span>(0 Reviews)</span>


                  <?php } ?> </div>
                              <div class="item-price">
                                <div class="price-box"> <span class="regular-price"> <span class="price"><?php echo $row1['price']?></span> </span> </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="box-hover">
                          <div class="product-item-actions">
                            <div class="pro-actions">
                              <button onclick="location.href='single_product.php?pid=<?php echo $row1['pid'] ?> & brand=<?php echo $row1['brand'] ?> & categories=<?php echo $row1['categories'] ?>'" class="action add-to-cart" type="button" title="Add to Cart"> <span>Add to Cart</span> </button>
                            </div>
                            
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php }} ?>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
      <!-- Featured Products -->
          <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="related-product-area">
          <div class="title_block">
            <h3 class="products_title">Featured Products</h3>
          </div>
          <div class="related-products-pro">
            <div class="slider-items-products">
              <div id="related-product-slider" class="product-flexslider hidden-buttons">
                <div class="slider-items slider-width-col4">
                                    <?php 
               $query="SELECT*FROM allin WHERE type='Featured ' ";
               $result=$db->select($query);
               if($result){
                 while($row=$result->fetch_assoc()){
               
               ?>

                  <div class="product-item">
                    <div class="item-inner">
                      <div class="product-thumbnail">
                        <div class="icon-new-label sale-left">New</div>
                        <div class="box-hover">

                       <div class="add-to-links" data-role="add-to-links"> <a href="index.php?wishid=<?php echo $row['pid'] ?>" class="action add-to-wishlist" title="Add to Wishlist"></a> <a href="index.php?compareid=<?php echo $row['pid'] ?>" class="action add-to-compare" title="Add to Compare"></a> </div>
                        </div>
                        <a href="single_product.php?pid=<?php echo $row['pid'] ?> & brand=<?php echo $row['brand'] ?> & categories=<?php echo $row['categories'] ?> " class="product-item-photo"> <img class="product-image-photo" src="images/products/<?php echo $row['image'] ?>" alt=""></a> </div>
                      <div class="pro-box-info">
                        <div class="item-info">
                          <div class="info-inner">
                            <div class="item-title"> <h4><a title="<?php echo $row['ptitle']?>" href=""><?php echo $row['ptitle']?> </a></h4> </div>
                            <div class="item-content">
                                         <div class="rating"><?php
                  $pid=$row['pid'];
                  $query1="SELECT*FROM review WHERE pid=$pid ";
                  $result1=$db->select($query1);
                  $count=mysqli_num_rows($result1);
                  if($count>0) {
                   $row1=$result1->fetch_assoc();
                   if($row1['quality']==5){
                    ?>
                    <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>&nbsp; <span>(<?php echo $count;?> Reviews)</span>
                    <?php } elseif($row1['quality']==4){
                    ?>
                     <i class="fa fa-star-o"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>&nbsp; <span>(<?php echo $count;?> Reviews)</span>
                     <?php } elseif($row1['quality']==3){
                    ?>
                     <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>&nbsp; <span>(<?php echo $count;?> Reviews)</span>
                     <?php } elseif($row1['quality']==2){
                    ?>
                     <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>&nbsp; <span>(<?php echo $count;?> Reviews)</span>

                  <?php }  else{  ?>
                     <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star"></i>&nbsp; <span>(<?php echo $count;?> Reviews)</span>
               <?php

                  }} else{ ?>
                     <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i>&nbsp; <span>(0 Reviews)</span>


                  <?php } ?> </div>
                              <div class="item-price">
                                <div class="price-box"> <span class="regular-price"> <span class="price"><?php echo $row['amount']?></span> </span> </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="box-hover">
                          <div class="product-item-actions">
                            <div class="pro-actions">
                              <button onclick="location.href='single_product.php?pid=<?php echo $row['pid'] ?> & brand=<?php echo $row['brand'] ?> & categories=<?php echo $row['categories'] ?>'" class="action add-to-cart" type="button" title="Add to Cart"> <span>Add to Cart</span> </button>
                            </div>
                            
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php }} ?>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
      
<!-- new arrivals-->
     <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="related-product-area">
          <div class="title_block">
            <h3 class="products_title">New Arrivals</h3>
          </div>
          <div class="related-products-pro">
            <div class="slider-items-products">
              <div id="related-product-slider" class="product-flexslider hidden-buttons">
                <div class="slider-items slider-width-col4">
                                    <?php 
               $query="SELECT*FROM allin WHERE type='Featured ' ";
               $result=$db->select($query);
               if($result){
                 while($row=$result->fetch_assoc()){
               
               ?>

                  <div class="product-item">
                    <div class="item-inner">
                      <div class="product-thumbnail">
                        <div class="icon-new-label sale-left">New</div>
                        <div class="box-hover">

                       <div class="add-to-links" data-role="add-to-links"> <a href="index.php?wishid=<?php echo $row['pid'] ?>" class="action add-to-wishlist" title="Add to Wishlist"></a> <a href="index.php?compareid=<?php echo $row['pid'] ?>" class="action add-to-compare" title="Add to Compare"></a> </div>
                        </div>
                        <a href="single_product.php?pid=<?php echo $row['pid'] ?> & brand=<?php echo $row['brand'] ?> & categories=<?php echo $row['categories'] ?> "> <img class="product-image-photo" src="images/products/<?php echo $row['image'] ?>" alt=""></a> </div>
                      <div class="pro-box-info">
                        <div class="item-info">
                          <div class="info-inner">
                            <div class="item-title"> <h4><a title="<?php echo$row['ptitle'] ?>" href="single_product.php?pid=<?php echo $row['pid'] ?> & brand=<?php echo $row['brand'] ?> & categories=<?php echo $row['categories'] ?>"><?php echo $row['ptitle']?> </a></h4> </div>
                            <div class="item-content">
                                         <div class="rating"><?php
                  $pid=$row['pid'];
                  $query1="SELECT*FROM review WHERE pid=$pid ";
                  $result1=$db->select($query1);
                  $count=mysqli_num_rows($result1);
                  if($count>0) {
                   $row1=$result1->fetch_assoc();
                   if($row1['quality']==5){
                    ?>
                    <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>&nbsp; <span>(<?php echo $count;?> Reviews)</span>
                    <?php } elseif($row1['quality']==4){
                    ?>
                     <i class="fa fa-star-o"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>&nbsp; <span>(<?php echo $count;?> Reviews)</span>
                     <?php } elseif($row1['quality']==3){
                    ?>
                     <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>&nbsp; <span>(<?php echo $count;?> Reviews)</span>
                     <?php } elseif($row1['quality']==2){
                    ?>
                     <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>&nbsp; <span>(<?php echo $count;?> Reviews)</span>

                  <?php }  else{  ?>
                     <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star"></i>&nbsp; <span>(<?php echo $count;?> Reviews)</span>
               <?php

                  }} else{ ?>
                     <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i>&nbsp; <span>(0 Reviews)</span>


                  <?php } ?> </div>
                              <div class="item-price">
                                <div class="price-box"> <span class="regular-price"> <span class="price"><?php echo $row['amount']?></span> </span> </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="box-hover">
                          <div class="product-item-actions">
                            <div class="pro-actions">
                              <button onclick="location.href='single_product.php?pid=<?php echo $row['pid'] ?> & brand=<?php echo $row['brand'] ?> & categories=<?php echo $row['categories'] ?>'" class="action add-to-cart" type="button" title="Add to Cart"> <span>Add to Cart</span> </button>
                            </div>
                            
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php }} ?>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


      <!-- Banner block-->
      <div class="container">
        <div class="row">
          <div class="jtv-banner-block">
            <div class="jtv-subbanner1 col-sm-4"><a href="#"><img class="img-respo" alt="jtv-subbanner1" src="images/banner3.jpg"></a>
              <div class="text-block">
                <div class="text1 wow animated fadeInUp animated"><a href="#">Favorites</a></div>
                <div class="text2 wow animated fadeInUp animated"><a href="#">Depth in detail </a></div>
                <div class="text3 wow animated fadeInUp animated"><a href="#">Shop for women</a></div>
              </div>
            </div>
            <div class="jtv-subbanner2 col-sm-4"><a href="#"><img class="img-respo" alt="jtv-subbanner2" src="images/banner4.jpg"></a>
              <div class="text-block">
                <div class="text1 wow animated fadeInUp animated"><a href="#">Fancy</a></div>
                <div class="text2 wow animated fadeInUp animated"><a href="#">on brand-new models </a></div>
                <div class="text3 wow animated fadeInUp animated"><a href="#">Shop Now</a></div>
              </div>
            </div>
            <div class="jtv-subbanner2 col-sm-4"><a href="#"><img class="img-respo" alt="jtv-subbanner2" src="images/banner5.jpg"></a>
              <div class="text-block">
                <div class="text1 wow animated fadeInUp animated"><a href="#">New Arrivals</a></div>
                <div class="text2 wow animated fadeInUp animated"><a href="#">Love These Styles</a></div>
                <div class="text3 wow animated fadeInUp animated"><a href="#">shop for girls</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- main container -->
      <div class="home-tab">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12"> 
              <!-- Home Tabs  -->

              <div class="tab-info">
                <h3 class="new-product-title pull-left">Products category</h3>
                <ul class="nav home-nav-tabs home-product-tabs">
                  <li class="active"><a href="#all" data-toggle="tab" aria-expanded="false">All</a></li>
                  <li> <a href="#women" data-toggle="tab" aria-expanded="false">Women</a> </li>
                  <li> <a href="#men" data-toggle="tab" aria-expanded="false">Men</a> </li>
                  <li> <a href="#Electronics" data-toggle="tab" aria-expanded="false">Electronics</a> </li>
                </ul>
                <!-- /.nav-tabs --> 
              </div>
              <div id="productTabContent" class="tab-content">
                <div class="tab-pane active in" id="all">
                <!-- <div class="product-item col-md-3 col-sm-6">
                    <div class="item-inner">
                      <div class="product-thumbnail">
                        <div class="icon-sale-label sale-left">Sale</div>
                        <div class="box-hover">
                          <div class="btn-quickview"> <a href="#" data-toggle="modal" data-target="#modal-quickview"><i class="fa fa-search-plus" aria-hidden="true"></i> Quick View</a> </div>
                          <div class="add-to-links" data-role="add-to-links"> <a href="wishlist.html" class="action add-to-wishlist" title="Add to Wishlist"></a> <a href="compare.html" class="action add-to-compare" title="Add to Compare"></a> </div>
                        </div>
                        <a href="single_product.html" class="product-item-photo"> <img class="product-image-photo" src="images/products/img01.jpg" alt=""></a>
                        <div class="jtv-box-timer">
                          <div class="countbox_1 jtv-timer-grid"></div>
                        </div>
                      </div>
                      <div class="pro-box-info">
                        <div class="item-info">
                          <div class="info-inner">
                            <div class="item-title">
                              <h4> <a title="Product Title Here" href="single_product.html">Product Title Here </a></h4>
                            </div>
                            <div class="item-content">
                              <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                              <div class="item-price">
                                <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="box-hover">
                          <div class="product-item-actions">
                            <div class="pro-actions">
                              <button onclick="location.href='shopping_cart.html'" class="action add-to-cart" type="button" title="Add to Cart"> <span>Add to Cart</span> </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div> -->
                 <!--   <?php
                 
                    $query="SELECT*FROM allin LIMIT 0,4;";
                    $result=$db->select($query);
                    if($result){
                      while($row=$result->fetch_assoc()){
                  ?>
                 <div class="product-item col-md-3 col-sm-6">
                    <div class="item-inner">
                      <div class="product-thumbnail">
                        <div class="icon-new-label new-left">new</div>
                        <div class="box-hover">

                         <div class="add-to-links" data-role="add-to-links"> <a href="index.php?wishid=<?php echo $row['pid'] ?>" class="action add-to-wishlist" title="Add to Wishlist"></a> <a href="index.php?compareid=<?php echo $row['pid'] ?>" class="action add-to-compare" title="Add to Compare"></a> </div>
                        </div>
                        <div class="slider-items-products">
                          <div id="pro1-slider" class="product-flexslider hidden-buttons">
                            <div class="slider-items slider-width-col6"> 
                             <?php 
                              $pid=$row['pid'];
                             $query="SELECT*FROM productcolor WHERE pid=$pid " ;
                             $result2=$db->select($query);
                             if($result2){
                              while ($row2=$result2->fetch_assoc()) {
                              
                              
                             
                             ?>
                              
                              <a href="single_product.php?pid=<?php echo $row['pid'] ?> & brand=<?php echo $row['brand'] ?> & categories=<?php echo $row['categories'] ?>" class="product-item-photo"> <img class="product-image-photo" src="images/products/<?php echo $row2['image'];?>" alt=""></a>
                                <?php }}?>
                               </div>
                          </div>
                        </div>
                      </div>
                      <div class="pro-box-info">
                        <div class="item-info">
                          <div class="info-inner">
                            <div class="item-title">
                              <h4> <a title="<?php echo $row['ptitle']; ?>" href="single_product.php?pid=<?php echo $row['pid'] ?> & brand=<?php echo $row['brand'] ?> & categories=<?php echo $row['categories'] ?>"><?php echo $row['ptitle']?></a></h4>
                            </div>
                            <div class="item-content">
                                         <div class="rating"><?php
                  $pid=$row['pid'];
                  $query1="SELECT*FROM review WHERE pid=$pid ";
                  $result1=$db->select($query1);
                  $count=mysqli_num_rows($result1);
                  if($count>0) {
                   $row1=$result1->fetch_assoc();
                   if($row1['quality']==5){
                    ?>
                    <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>&nbsp; <span>(<?php echo $count;?> Reviews)</span>
                    <?php } elseif($row1['quality']==4){
                    ?>
                     <i class="fa fa-star-o"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>&nbsp; <span>(<?php echo $count;?> Reviews)</span>
                     <?php } elseif($row1['quality']==3){
                    ?>
                     <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>&nbsp; <span>(<?php echo $count;?> Reviews)</span>
                     <?php } elseif($row1['quality']==2){
                    ?>
                     <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>&nbsp; <span>(<?php echo $count;?> Reviews)</span>

                  <?php }  else{  ?>
                     <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star"></i>&nbsp; <span>(<?php echo $count;?> Reviews)</span>
               <?php

                  }} else{ ?>
                     <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i>&nbsp; <span>(0 Reviews)</span>


                  <?php } ?> </div>
                              <div class="item-price">
                                <div class="price-box">
                                  <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> <?php echo $row['amount']?> </span> </p>
                                  <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> <?php echo$row['regularp'] ?> </span> </p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="box-hover">
                          <div class="product-item-actions">
                            <div class="pro-actions">
                              <button onclick="location.href='single_product.php?pid=<?php echo $row['pid'] ?> & brand=<?php echo $row['brand'] ?> & categories=<?php echo $row['categories'] ?>'" class="action add-to-cart" type="button" title="Add to Cart"> <span>Add to Cart</span> </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div> 
                  <?php }}?> -->
                  <?php
                 
                    $query="SELECT*FROM allin";
                    $result=$db->select($query);
                    if($result){
                      while($row=$result->fetch_assoc()){
                  ?>
                  <div class="product-item col-md-3 col-sm-6">
                    <div class="item-inner">
                      <div class="product-thumbnail">
                        <div class="box-hover">
                         <!-- <div class="btn-quickview"> <a href="?pid=<?php echo $row['pid'] ?>" data-toggle="modal" data-target="#modal-quickview"><i class="fa fa-search-plus" aria-hidden="true"></i> Quick View</a> </div> -->
                          <div class="add-to-links" data-role="add-to-links"> <a href="index.php?wishid=<?php echo $row['pid'] ?>" class="action add-to-wishlist" title="Add to Wishlist"></a> <a href="index.php?compareid=<?php echo $row['pid'] ?>" class="action add-to-compare" title="Add to Compare"></a> </div>
                        </div>
                        <a href="single_product.php?pid=<?php echo $row['pid'] ?> & brand=<?php echo $row['brand'] ?> & categories=<?php echo $row['categories'] ?> "> <img class="product-image-photo" src="images/products/<?php echo $row['image'] ?>" alt=""></a> </div>
                      <div class="pro-box-info">
                        <div class="item-info">
                          <div class="info-inner">
                            <div class="item-title">
                              <h4> <a title="<?php echo$row['ptitle'] ?>" href="single_product.php?pid=<?php echo $row['pid'] ?> & brand=<?php echo $row['brand'] ?> & categories=<?php echo $row['categories'] ?>"><?php echo $row['ptitle'] ?></a></h4>
                            </div>
                            <div class="item-content">
                                          <div class="rating"><?php
                  $pid=$row['pid'];
                  $query1="SELECT*FROM review WHERE pid=$pid ";
                  $result1=$db->select($query1);
                  $count=mysqli_num_rows($result1);
                  if($count>0) {
                   $row1=$result1->fetch_assoc();
                   if($row1['quality']==5){
                    ?>
                    <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>&nbsp; <span>(<?php echo $count;?> Reviews)</span>
                    <?php } elseif($row1['quality']==4){
                    ?>
                     <i class="fa fa-star-o"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>&nbsp; <span>(<?php echo $count;?> Reviews)</span>
                     <?php } elseif($row1['quality']==3){
                    ?>
                     <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>&nbsp; <span>(<?php echo $count;?> Reviews)</span>
                     <?php } elseif($row1['quality']==2){
                    ?>
                     <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>&nbsp; <span>(<?php echo $count;?> Reviews)</span>

                  <?php }  else{  ?>
                     <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star"></i>&nbsp; <span>(<?php echo $count;?> Reviews)</span>
               <?php

                  }} else{ ?>
                     <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i>&nbsp; <span>(0 Reviews)</span>


                  <?php } ?> </div>
                              <div class="item-price">
                                <div class="price-box">
                                  <p class="special-price"> <span class="price-label">Special Price</span> <span class="price">Taka-<?php echo $row['amount'] ?> </span> </p>
                                  <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> <?php echo $row['regularp'] ?> </span> </p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="box-hover">
                          <div class="product-item-actions">
                            <div class="pro-actions">
                              <button onclick="location.href='single_product.php?pid=<?php echo $row['pid'] ?> & brand=<?php echo $row['brand'] ?> & categories=<?php echo $row['categories'] ?>'" class="action add-to-cart" type="button" title="Add to Cart"> <span>Add to Cart</span> </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php }}?>

                 
                  
                </div>

                <div class="tab-pane fade" id="women">
                      <?php
                    $query="SELECT*FROM allin WHERE categories='Women'";
                    $result=$db->select($query);
                    if($result){
                      while($row=$result->fetch_assoc()){
                  ?>
                  <div class="product-item col-md-3 col-sm-6">
                    <div class="item-inner">
                      <div class="product-thumbnail">
                        <div class="box-hover">

                         <div class="add-to-links" data-role="add-to-links"> <a href="index.php?wishid=<?php echo $row['pid'] ?>" class="action add-to-wishlist" title="Add to Wishlist"></a> <a href="index.php?compareid=<?php echo $row['pid'] ?>" class="action add-to-compare" title="Add to Compare"></a> </div>
                        </div>
                         <a href="single_product.php?pid=<?php echo $row['pid'] ?> & brand=<?php echo $row['brand'] ?> & categories=<?php echo $row['categories'] ?> "> <img class="product-image-photo" src="images/products/<?php echo $row['image'] ?>" alt=""></a> </div>
                      <div class="pro-box-info">
                        <div class="item-info">
                          <div class="info-inner">
                            <div class="item-title">
                              <h4> <a title="<?php echo$row['ptitle'] ?>" href="single_product.php?pid=<?php echo $row['pid'] ?> & brand=<?php echo $row['brand'] ?> & categories=<?php echo $row['categories'] ?>"><?php echo $row['ptitle'] ?></a></h4>
                            </div>
                            <div class="item-content">
                                         <div class="rating"><?php
                  $pid=$row['pid'];
                  $query1="SELECT*FROM review WHERE pid=$pid ";
                  $result1=$db->select($query1);
                  $count=mysqli_num_rows($result1);
                  if($count>0) {
                   $row1=$result1->fetch_assoc();
                   if($row1['quality']==5){
                    ?>
                    <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>&nbsp; <span>(<?php echo $count;?> Reviews)</span>
                    <?php } elseif($row1['quality']==4){
                    ?>
                     <i class="fa fa-star-o"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>&nbsp; <span>(<?php echo $count;?> Reviews)</span>
                     <?php } elseif($row1['quality']==3){
                    ?>
                     <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>&nbsp; <span>(<?php echo $count;?> Reviews)</span>
                     <?php } elseif($row1['quality']==2){
                    ?>
                     <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>&nbsp; <span>(<?php echo $count;?> Reviews)</span>

                  <?php }  else{  ?>
                     <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star"></i>&nbsp; <span>(<?php echo $count;?> Reviews)</span>
               <?php

                  }} else{ ?>
                     <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i>&nbsp; <span>(0 Reviews)</span>


                  <?php } ?> </div>
                              <div class="item-price">
                                <div class="price-box">
                                  <p class="special-price"> <span class="price-label">Special Price</span> <span class="price">Tk<?php echo $row['amount'] ?> </span> </p>
                                  <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price">Tk<?php echo $row['regularp'] ?> </span> </p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="box-hover">
                          <div class="product-item-actions">
                            <div class="pro-actions">
                              <button onclick="location.href='single_product.php?pid=<?php echo $row['pid'] ?> & brand=<?php echo $row['brand'] ?> & categories=<?php echo $row['categories'] ?>'" class="action add-to-cart" type="button" title="Add to Cart"> <span>Add to Cart</span> </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php }}?>
                 
                </div>
                <div class="tab-pane fade" id="men">
                   <?php
                    $query="SELECT*FROM allin WHERE categories='Men'";
                    $result=$db->select($query);
                    if($result){
                      while($row=$result->fetch_assoc()){
                  ?>
                  <div class="product-item col-md-3 col-sm-6">
                    <div class="item-inner">
                      <div class="product-thumbnail">
                        <div class="box-hover">
                         
                          <div class="add-to-links" data-role="add-to-links"> <a href="index.php?wishid=<?php echo $row['pid'] ?>" class="action add-to-wishlist" title="Add to Wishlist"></a> <a href="index.php?compareid=<?php echo $row['pid'] ?>" class="action add-to-compare" title="Add to Compare"></a> </div>
                        </div>
                         <a href="single_product.php?pid=<?php echo $row['pid'] ?> & brand=<?php echo $row['brand'] ?> & categories=<?php echo $row['categories'] ?> "> <img class="product-image-photo" src="images/products/<?php echo $row['image'] ?>" alt=""></a> </div>
                      <div class="pro-box-info">
                        <div class="item-info">
                          <div class="info-inner">
                            <div class="item-title">
                              <h4> <a title="Product Title Here" href="s<?php echo $row['ptitle'] ?>"><?php echo $row['ptitle'] ?></a></h4>
                            </div>
                            <div class="item-content">
                             Tk<?php echo $row['amount'] ?>
                              <div class="item-price">
                                <div class="price-box">
                                  <p class="special-price"> <span class="price-label">Special Price</span> <span class="price">Taka-<?php echo $row['amount'] ?> </span> </p>
                                  <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"><?php echo $row['regularp'] ?> </span> </p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="box-hover">
                          <div class="product-item-actions">
                            <div class="pro-actions">
                        <button onclick="location.href='single_product.php?pid=<?php echo $row['pid'] ?> & brand=<?php echo $row['brand'] ?> & categories=<?php echo $row['categories'] ?>'" class="action add-to-cart" type="button" title="Add to Cart"> <span>Add to Cart</span> </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php }}?>
                 
                </div>
                <div class="tab-pane fade" id="Electronics">
                      <?php
                    $query="SELECT*FROM allin WHERE categories='Electronics'";
                    $result=$db->select($query);
                    if($result){
                      while($row=$result->fetch_assoc()){
                  ?>
                  <div class="product-item col-md-3 col-sm-6">
                    <div class="item-inner">
                      <div class="product-thumbnail">
                        <div class="box-hover">
                         
                          <div class="add-to-links" data-role="add-to-links"> <a href="index.php?wishid=<?php echo $row['pid'] ?>" class="action add-to-wishlist" title="Add to Wishlist"></a> <a href="index.php?compareid=<?php echo $row['pid'] ?>" class="action add-to-compare" title="Add to Compare"></a> </div>
                        </div>
                         <a href="single_product.php?pid=<?php echo $row['pid'] ?> & brand=<?php echo $row['brand'] ?> & categories=<?php echo $row['categories'] ?> "> <img class="product-image-photo" src="images/products/<?php echo $row['image'] ?>" alt=""></a> </div>
                      <div class="pro-box-info">
                        <div class="item-info">
                          <div class="info-inner">
                            <div class="item-title">
                              <h4> <a title="Product Title Here" href="s<?php echo $row['ptitle'] ?>"><?php echo $row['ptitle'] ?></a></h4>
                            </div>
                            <div class="item-content">
                             Tk<?php echo $row['amount'] ?>
                              <div class="item-price">
                                <div class="price-box">
                                  <p class="special-price"> <span class="price-label">Special Price</span> <span class="price">Taka-<?php echo $row['amount'] ?> </span> </p>
                                  <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"><?php echo $row['regularp'] ?> </span> </p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="box-hover">
                          <div class="product-item-actions">
                            <div class="pro-actions">
                        <button onclick="location.href='single_product.php?pid=<?php echo $row['pid'] ?> & brand=<?php echo $row['brand'] ?> & categories=<?php echo $row['categories'] ?>'" class="action add-to-cart" type="button" title="Add to Cart"> <span>Add to Cart</span> </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php }}?>
                  </div>
                 
              </div>
            </div>
            
            <!-- prom banner-->
            <div class="jtv-promotion">
              <div class="container">
                <div class="row">
                  <div class="col-md-4 col-sm-5 col-xs-12">
                    <div class="add-banner wow animated fadeInUp animated"> <a href="#"><img src="images/home-banner4.jpg" alt="banner"></a> </div>
                  </div>
                  <div class="col-md-8 col-sm-7 col-xs-12">
                    <div class="wrap">
                      <div class="wow animated fadeInRight animated">
                        <div class="box jtv-custom">
                          <div class="box-content">
                            <div class="promotion-center">
                              <p class="text_medium">Limited Time Only</p>
                              <div class="text_large">
                                <div class="theme-color">45% off</div>
                                Flash Sale</div>
                              <p class="text_small">Fashion for all outerwear, shirt &amp; accessories</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
     </div>
        <!-- recomandation for you-->
         <!-- new arrivals-->
     <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="related-product-area">
          <div class="title_block">
            <h3 class="products_title">Recomandations For You</h3>
          </div>
          <div class="related-products-pro">
            <div class="slider-items-products">
              <div id="related-product-slider" class="product-flexslider hidden-buttons">
                <div class="slider-items slider-width-col4">
                                    <?php 
               $query="SELECT*FROM allin WHERE type='Featured ' ";
               $result=$db->select($query);
               if($result){
                 while($row=$result->fetch_assoc()){
               
               ?>

                  <div class="product-item">
                    <div class="item-inner">
                      <div class="product-thumbnail">
                        <div class="icon-new-label sale-left">New</div>
                        <div class="box-hover">

                       <div class="add-to-links" data-role="add-to-links"> <a href="index.php?wishid=<?php echo $row['pid'] ?>" class="action add-to-wishlist" title="Add to Wishlist"></a> <a href="index.php?compareid=<?php echo $row['pid'] ?>" class="action add-to-compare" title="Add to Compare"></a> </div>
                        </div>
                        <a href="single_product.php?pid=<?php echo $row['pid'] ?> & brand=<?php echo $row['brand'] ?> & categories=<?php echo $row['categories'] ?> "> <img class="product-image-photo" src="images/products/<?php echo $row['image'] ?>" alt=""></a> </div>
                      <div class="pro-box-info">
                        <div class="item-info">
                          <div class="info-inner">
                            <div class="item-title"> <h4><a title="<?php echo$row['ptitle'] ?>" href="single_product.php?pid=<?php echo $row['pid'] ?> & brand=<?php echo $row['brand'] ?> & categories=<?php echo $row['categories'] ?>"><?php echo $row['ptitle']?> </a></h4> </div>
                            <div class="item-content">
                                                              <div class="rating"><?php
                  $pid=$row['pid'];
                  $query1="SELECT*FROM review WHERE pid=$pid ";
                  $result1=$db->select($query1);
                  $count=mysqli_num_rows($result1);
                  if($count>0) {
                   $row1=$result1->fetch_assoc();
                   if($row1['quality']==5){
                    ?>
                    <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>&nbsp; <span>(<?php echo $count;?> Reviews)</span>
                    <?php } elseif($row1['quality']==4){
                    ?>
                     <i class="fa fa-star-o"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>&nbsp; <span>(<?php echo $count;?> Reviews)</span>
                     <?php } elseif($row1['quality']==3){
                    ?>
                     <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>&nbsp; <span>(<?php echo $count;?> Reviews)</span>
                     <?php } elseif($row1['quality']==2){
                    ?>
                     <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>&nbsp; <span>(<?php echo $count;?> Reviews)</span>

                  <?php }  else{  ?>
                     <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star"></i>&nbsp; <span>(<?php echo $count;?> Reviews)</span>
               <?php

                  }} else{ ?>
                     <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i>&nbsp; <span>(0 Reviews)</span>


                  <?php } ?> </div>
                              <div class="item-price">
                                <div class="price-box"> <span class="regular-price"> <span class="price"><?php echo $row['amount']?></span> </span> </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="box-hover">
                          <div class="product-item-actions">
                            <div class="pro-actions">
                              <button onclick="location.href='single_product.php?pid=<?php echo $row['pid'] ?> & brand=<?php echo $row['brand'] ?> & categories=<?php echo $row['categories'] ?>'" class="action add-to-cart" type="button" title="Add to Cart"> <span>Add to Cart</span> </button>
                            </div>
                            
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php }} ?>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


         <!-- Featured Products -->
          
        
        <!-- Latest news start -->
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="title_block">
                <h3 class="products_title">Top Categories This Month</h3>
              </div>
            </div>
            <div class="latest-post">


               <?php 
               $query="SELECT*FROM allin WHERE categories='Men' AND type='Special' ORDER BY pid DESC ";
               $result=$db->select($query);
                while($row=$result->fetch_assoc()){
               ?>
               <div class="col-sm-12 col-md-4 " style="margin-bottom:16px;">
              
                <div class="jtv-post-inner">
                  <div class="feature-post images-hover"> <a href="single_post.php?blogid=<?php echo $row['pid'] ?> & categories=<?php echo$row['categories']; ?> & brand=<?php echo$row['brand']?> "><img style="max-width:100%;max-height:200px;" src="images/products/<?php echo $row['image'];?>" alt="<?php echo $row['ptitle'];?>"></a>
                    <div class="overlay"></div>
                  </div>
                  <div class="jtv-content-post">
                    <h4 class="title-post"> <a href="single_post.php?blogid=<?php echo $row['pid'] ?> & categories=<?php echo$row['categories']; ?> & brand=<?php echo$row['brand']?> "><?php echo $row['ptitle'] ?></a> </h4>
                    
                       <a href="#"><?php echo $row['time1'] ; ?></a> 
                    
                    
                    <div class="jtv-entry-post excerpt">
                      <h5><?php echo $row['Overview']; ?></h5>
                    </div>
                    <div class="read-more"><a href="single_post.php?blogid=<?php echo $row['pid'] ?> & categories=<?php echo$row['categories']; ?> & brand=<?php echo$row['brand']?> "><i class="fa fa-caret-right"></i> Read More</a></div>
                  </div>
                </div>
          
            </div>
              <?php }?>

                   <?php 
               $query="SELECT*FROM allin WHERE categories='Women' AND type='Special' ORDER BY pid DESC ";
               $result=$db->select($query);
                while($row=$result->fetch_assoc()){
               ?>
               <div class="col-sm-12 col-md-4 " style="margin-bottom:16px;">
              
                <div class="jtv-post-inner">
                  <div class="feature-post images-hover"> <a href="single_post.php?blogid=<?php echo $row['pid'] ?> & categories=<?php echo$row['categories']; ?> & brand=<?php echo$row['brand']?> "><img style="max-width:100%;max-height:200px;" src="images/products/<?php echo $row['image'];?>" alt="<?php echo $row['ptitle'];?>"></a>
                    <div class="overlay"></div>
                  </div>
                  <div class="jtv-content-post">
                    <h4 class="title-post"> <a href="single_post.php?blogid=<?php echo $row['pid'] ?> & categories=<?php echo$row['categories']; ?> & brand=<?php echo$row['brand']?> "><?php echo $row['ptitle'] ?></a> </h4>
                    
                       <a href="#"><?php echo $row['time1'] ; ?></a> 
                    
                    
                    <div class="jtv-entry-post excerpt">
                      <h5><?php echo $row['Overview']; ?></h5>
                    </div>
                    <div class="read-more"><a href="single_post.php?blogid=<?php echo $row['pid'] ?> & categories=<?php echo$row['categories']; ?> & brand=<?php echo$row['brand']?> "><i class="fa fa-caret-right"></i> Read More</a></div>
                  </div>
                </div>
          
            </div>
              <?php }?>
              

            </div>
          </div>
        </div>
        
        <!-- Offer banner -->
        <div class="container">
          <div class="row">
            <div class="offer-add">
              <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="jtv-banner-box banner-inner">
                  <div class="image"> <a class="jtv-banner-opacity" href="#"><img src="images/top-banner5.jpg" alt=""></a> </div>
                  <div class="jtv-content-text">
                    <h3 class="title">Buy 2 items</h3>
                    <span class="sub-title">get one for free!</span><a href="#" class="button">Shop now!</a> </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-3 col-xs-12">
                <div class="jtv-banner-box banner-inner">
                  <div class="image"> <a class="jtv-banner-opacity" href="#"><img src="images/top-banner3.jpg" alt=""></a> </div>
                  <div class="jtv-content-text hidden">
                    <h3 class="title">New Arrival</h3>
                  </div>
                </div>
                <div class="jtv-banner-box banner-inner">
                  <div class="image "> <a class="jtv-banner-opacity" href="#"><img src="images/top-banner4.jpg" alt=""></a> </div>
                  <div class="jtv-content-text">
                    <h3 class="title">shoes</h3>
                  </div>
                </div>
              </div>
              <div class="col-md-5 col-sm-5 col-xs-12">
                <div class="jtv-banner-box">
                  <div class="image"> <a class="jtv-banner-opacity" href="#"><img src="images/top-banner2.jpg" alt=""></a> </div>
                  <div class="jtv-content-text">
                    <h3 class="title">perfect light </h3>
                    <span class="sub-title">on brand-new models</span> <a href="#" class="button">Buy Now</a> </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- our clients Slider -->
  <?php 
include('segment/footer.php');
  ?>
  
  <!-- End Footer -->
  
 
  <!--Newsletter Popup Start -->
 <!-- <div id="myModal" class="modal fade">
    <div class="modal-dialog newsletter-popup">
      <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <div class="modal-body">
          <h2 class="modal-title">Top Fashion</h2>
          <form id="newsletter-form" method="post" action="#">
            <div class="content-subscribe">
              <div class="form-subscribe-header">
                <label>Register now to get updates on discount & coupons</label>
              </div>
              <div class="input-box">
                <input type="text" class="input-text newsletter-subscribe" title="Sign up for our newsletter" name="email" placeholder="Enter your email address">
              </div>
              <div class="actions">
                <button class="button-subscribe" title="Subscribe" type="submit">Subscribe</button>
              </div>
            </div>
          </form>
          <div class="subscribe-bottom">
            <input name="notshowpopup" id="notshowpopup" type="checkbox">
            Don’t show this popup again </div>
        </div>
      </div>
    </div>
  </div> -->
  <!--End of Newsletter Popup-->
  
  
<!-- <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
    <a class="a2a_button_facebook"></a>
    <a class="a2a_button_twitter"></a>
     
    <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
</div>

<script>
var a2a_config = a2a_config || {};
a2a_config.linkname = 'okkkkkkkkk';
a2a_config.linkurl = 'http://localhost/onlineshop/index.php';
</script>

<script async src="https://static.addtoany.com/menu/page.js"></script>
 -->


</body>

<!-- Mirrored from htmlmystore.justthemevalley.com/fancy/version2/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Feb 2020 06:06:27 GMT -->
</html>
