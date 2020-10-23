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
              
            
        
      <!-- main container -->
      <div class="home-tab">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12"> 
              <!-- Home Tabs  -->

              <div class="tab-info">
                <h3 class="new-product-title pull-left">Products category</h3>
                <ul class="nav home-nav-tabs home-product-tabs">
                  <!-- <li class="active"><a href="#all" data-toggle="tab" aria-expanded="false">All</a></li> -->
               <!--    <li> <a href="#women" data-toggle="tab" aria-expanded="false">Women</a> </li>
                  <li> <a href="#men" data-toggle="tab" aria-expanded="false">Men</a> </li>
                  <li> <a href="#kids" data-toggle="tab" aria-expanded="false">Kids</a> </li> -->
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
                         <?php
                 
                    $query="SELECT*FROM allin WHERE categories='Covid'";
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

                
                  </div>
                 
              </div>
            </div>
            

  
<!-- <div class="a2a_kit a2a_kit_size_32 a2a_default_style"> -->
<!--     <a class="a2a_button_facebook"></a>
    <a class="a2a_button_twitter"></a>
     
    <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
</div>

<script>
var a2a_config = a2a_config || {};
a2a_config.linkname = 'okkkkkkkkk';
a2a_config.linkurl = 'http://localhost/onlineshop/index.php';
</script>

<script async src="https://static.addtoany.com/menu/page.js"></script>
</div>
</div>
</div>
</div>
</div> -->
  <?php 
include('segment/footer.php');
  ?>

</body>

<!-- Mirrored from htmlmystore.justthemevalley.com/fancy/version2/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Feb 2020 06:06:27 GMT -->
</html>
