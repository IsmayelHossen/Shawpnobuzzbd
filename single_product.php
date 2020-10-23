<!--header start -->
<?php 
  include("segment/header.php");
  error_reporting(0);


?>


  <!-- end header --> 
 
  <!-- header end -->
<?php
$email=Session::get("email");
$name=Session::get("name");
  if(isset($_POST['submitcomment'])){
    error_reporting(0);
     $pid=$_GET['pid'];
    $quality=$_POST['a'];
    $price=$_POST['b'];
    $comment=$_POST['comment'];
    $quality=mysqli_real_escape_string($db->link,$quality);
    $price=mysqli_real_escape_string($db->link,$price);
    $comment=mysqli_real_escape_string($db->link,$comment);
    $comment=str_replace("'", "\'", $comment);
    if(empty($quality) || empty($price) ||empty($comment)){
       echo '<script type="text/javascript">
            swal({   
     title: "Field Must Not Be Empty",      
     

         });
            </script>';
    }
    else{
      $date1=date('d/m/y');
       $query="INSERT INTO review(pid,name,email,quality,price,comment,date1) VALUES('$pid','$name','$email','$quality','$price','$comment','$date1')";
       $result=$db->insert($query);


    }
  }


 ?>
  
  <?php 

  
   $pid=$_GET['pid'];

  if(isset($_POST['select'])){
    $quntity=$_POST['quntity'];
    $colorcode=$_POST['color'];
    $size=$_POST['size'];
    $quntity1=mysqli_real_escape_string($db->link,$quntity);
    $pid=mysqli_real_escape_string($db->link,$pid);
     //$sid=session_id();
     
      $query="SELECT*FROM allin WHERE pid=$pid";
    $result=$db->select($query)->fetch_assoc();
     $ptitle=$result['ptitle'];
     $categories=$result['categories'];
     $amount=$result['amount'];
     $image=$result['image'];
     $brand=$result['brand'];
     date_default_timezone_set('Asia/Dhaka');
        
     $date1=date("d/m/Y h:a");
     $sid=Session::get('sid');
      $check="SELECT*FROM cart WHERE pid=$pid AND sid='$sid' AND NOT order1=1 ";
      $checkr=$db->select($check);
       $count=mysqli_num_rows($checkr);
      if($count>=1){
         echo '<script type="text/javascript">
            swal({
  title: "Product Already Added To Cart Or Purchase(see Order List From Account)!",
  text: "Thanks",
  icon: "error",
  button: "Ok!",
});
            </script>';
      }
      else{
         
         date_default_timezone_set('Asia/Dhaka');
        
  $date1=date("d/m/Y h:a");
  $date=date("d/m/Y");
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
        $date1=date("d/m/Y h:a");
       //Session::set("time",$date1);
                
        // $time=Session::get("time");
        // $email=Session::get("email");
        //  $query="SELECT*FROM customer_order WHERE date3='$time' AND email='$email' ";
        //  $result=$db->select($query);
        //  $count=mysqli_num_rows($result);
        //  if($count>0){
        //    echo'<script type="text/javascript">
        //             swal({
        //   title: "You Already Purchase Items from our easyshop.Please wait for 1 hour to buy more products Or Cancel the order you have done just now!",
        //   text: "Thanks",
        //   icon: "error",
        //   button: "Ok!",
        // });
        //             </script>';
        //  } else{
          

     $queryin="INSERT INTO cart(pid,email,pname,price,quntity,image,date1,date2,colorcode,size,brand,sid,categories) VALUES('$pid','$email','$ptitle','$amount','$quntity1','$image','$date','$date1','$colorcode','$size','$brand','$sid','$categories')";
     $resultins=$db->insert($queryin);
     $queryin="INSERT INTO order_cancel(pid,email,pname,price,quntity,image,date1,date2,colorcode,size,sid) VALUES('$pid','$email','$ptitle','$amount','$quntity1','$image','$date','$date1','$colorcode','$size','$sid')";
     $resultins=$db->insert($queryin);
     if($resultins){
      
        echo "<script>window.location='shopping_cart.php';</script>";
        
     
     }
   // }
 }
}
}



  ?>
  <!-- Breadcrumbs -->
  
  <div class="breadcrumbs">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <ul>
            <?php     if(isset($_GET['categories'])){
              
              ?>
            <li class="home"> <a title="Go to Home Page" href="index.php">Home</a><span>&raquo;</span></li>
            <li class=""> <a title="Go to Home Page" href="<?php echo$_GET['categories'] ?>.php"><?php echo $_GET['categories']?></a><span>&raquo;</span></li>
              <li><strong><a href="<?php echo$_GET['categories'] ?>.php?<?php echo$_GET['categories'] ?>=<?php echo $_GET['brand']; ?>"><?php echo $_GET['brand'] ?> </a></strong></li>
              <?php }?>
            

          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Breadcrumbs End --> 
  <!-- Main Container -->
  <?php 
 if(isset($_GET['pid'])){
  $pid=$_GET['pid'];
    $query="SELECT*FROM allin WHERE pid=$pid";
                    $result=$db->select($query);
                    if($result){
                      while($row=$result->fetch_assoc()){
 

  ?>
  <div class="main-container col1-layout">
    <div class="container">
      <div class="row">
        <div class="col-main">
          <div class="product-view-area">
            <div class="product-big-image col-xs-12 col-sm-5 col-lg-5 col-md-5">
              <div class="icon-sale-label sale-left">Sale</div>
            
             <!--s -->
             <div class="large-image"> <a href="images/products/<?php echo$row['image']; ?>" class="cloud-zoom" id="zoom1" rel="useWrapper: false, adjustY:0, adjustX:20"> <img class="zoom-img" src="images/products/<?php echo$row['image']; ?>" alt="products"> </a> </div>
            <div class="slider-items-products col-md-12">
              <div id="thumbnail-slider" class="product-flexslider hidden-buttons product-thumbnail">
                <div class="slider-items slider-width-col3">
                  <script>
                $(document).ready(function(){
                  $('[data-toggle="tooltip"]').tooltip();
                });
                </script>
                   <?php 
 
              $pid=$_GET['pid'];
                $query1="SELECT*FROM pimages WHERE pid=$pid";
                                $result1=$db->select($query1);
                    if($result1){
                      while($row1=$result1->fetch_assoc()){
 

  ?>
                  <div class="thumbnail-items"><a href='images/products/<?php echo$row1['image']; ?>' class='cloud-zoom-gallery' rel="useZoom: 'zoom1', smallImage: 'images/products/<?php echo$row1['image']; ?>' "><img src="images/products/<?php echo$row1['image']; ?>" alt = "Thumbnail 2"/></a></div>
                  <?php }}?>
                </div>
              </div>
            </div>
              
             <!--end -->
               


              
              <!-- end: more-images --> 
              
            </div>
            <div class="col-xs-12 col-sm-7 col-lg-7 col-md-7 product-details-area">
              <?php if(isset($msg)){
                echo $msg;
              }
                ?>
              <div class="product-name">
                <h1><?php 
                   Session::set("categories",$row['categories']);
                   Session::set("ptitle",$row['ptitle']);
                    Session::set("brand",$row['brand']);
                    Session::set("type",$row['type']);
                   Session::set("pid",$row['pid']);


                echo$row['ptitle'];?></h1>
              </div>
              <div class="price-box">
                <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> Taka-<?php echo $row['amount']?> </span> </p>
                <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"><?php echo$row['regularp'] ?></span> </p>
              </div>
              <div class="ratings">
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
                <p class="rating-links"> <a href="#"><?php echo$countrv; ?> </a> <span class="separator">|</span> <a href="#" >Add Your Review</a> </p>

                <p class=" in-stock pull-right" style="font-size: 20px;font-family: times">Availability:
                 <?php 
                  if($row['Availability']==0){
                    echo"<span style='color:red'>Out Of Stock</span>";
                    
                  } else{
                    echo $row['Availability'];
                  }
                ?>
                  </p>
              </div>
              <div class="short-description">
                <h4>Quick Overview</h4>
               <p><?php echo $row['Overview']?></p>
              </div>
               <form action="" method="post" >

              <div class="product-color-size-area">
                <!-- colo & size -->
                   <?php 

 
              $pid=$_GET['pid'];
                $query1="SELECT*FROM productcolor WHERE pid=$pid";
                  $result2=$db->select($query1);
                  $countproductcolor=mysqli_num_rows($result2);
                    if($countproductcolor>1){
                      
 

                     ?>
                <div class="color-area">
                  <h2 class="saider-bar-title">Color</h2>
                  <div class="color">
                    <ul>
                       
                      <?php
                     $pid=$_GET['pid'];
                $query1="SELECT*FROM productcolor WHERE pid=$pid";
                  $result3=$db->select($query1);
                    while($rowcolor=$result3->fetch_assoc()){

                       ?>
                     <li><input type="radio" name="color" value="<?php echo$rowcolor['colorcode'] ;?>" required="" ><span style="padding-top:3px"><img style="max-width:30px;" src="images/products/<?php echo$rowcolor['image'] ;?>"></span></li>

                     <?php }?>
                      

                    </ul>
                  </div>
                </div>
                <?php }?>
                <?php 

 
              $pid=$_GET['pid'];
                $query1="SELECT*FROM size WHERE pid=$pid";
                  $result4=$db->select($query1);
                  $countproductsize=mysqli_num_rows($result4);
                    if($countproductsize>1){
                      
 

                     ?>

                <div class="size-area">
                  <h2 class="saider-bar-title">Size</h2>
                  <div class="size">
                    <ul>
                         <?php 

 
              $pid=$_GET['pid'];
                $query1="SELECT*FROM size WHERE pid=$pid";
                                $result5=$db->select($query1);
                    if($result5){
                      while($rowsize=$result5->fetch_assoc()){
 

                     ?>
                      <li><input type="radio" name="size" value="<?php echo$rowsize['size1'] ?>" required=""><?php echo $rowsize['size1']; ?></li>
                       <?php }}?>
                     
                     
                    </ul>
                  </div>
                </div>
                <?php }?>
              </div>
              <!-- color & size end -->
              <div class="product-variation">
               
                  <div class="cart-plus-minus">
                    <label for="qty">Quantity:</label>
                    <div class="numbers-row">
                      <div onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 0 ) result.value--;return false;" class="dec qtybutton"><i class="fa fa-minus">&nbsp;</i></div>
                      <input type="text" class="qty" title="Qty" value="1" maxlength="12" id="qty" name="quntity">
                      <div onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;" class="inc qtybutton"><i class="fa fa-plus">&nbsp;</i></div>
                    </div>
                  </div>
                   <?php 
                  if($row['Availability']==0){
                     ?>
                     <button class="button pro-add-to-cart" title="Add to Cart" disabled="" ><span><i class="fa fa-shopping-cart"></i> Out Of Stock</span></button>
                    
               <?php   } else{ ?>
                
                  
                
                  <button class="button pro-add-to-cart" title="Add to Cart" type="submit" name="select"><span><i class="fa fa-shopping-cart"></i> Add to Cart</span></button>
                  <?php }?>
                </form>
              </div>
              <div class="product-cart-option">
                <ul>
                  <li><a href="index.php?wishid=<?php echo $row['pid'] ?>"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a></li>
                  <li><a href="index.php?compareid=<?php echo $row['pid'] ?>"><i class="fa fa-retweet"></i><span>Add to Compare</span></a></li>
                  <li><a href="#"><i class="fa fa-envelope"></i><span>Share</span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <?php }}};?>
        <div class="product-overview-tab">
          <div class="container">
            <div class="row">
              <div class="col-xs-12">
                <div class="product-tab-inner">
                  <ul id="product-detail-tab" class="nav nav-tabs product-tabs">
                    <li class="active"> <a href="#description" data-toggle="tab"> Description </a> </li>
                    <li> <a href="#reviews" data-toggle="tab">Reviews</a> </li>
                    
                  </ul>
                  <div id="productTabContent" class="tab-content">
                    <div class="tab-pane fade in active" id="description">
                      <div class="std">
                          <?php 

 
              $pid=$_GET['pid'];
               $query="SELECT*FROM allin WHERE pid=$pid";
               $description=$db->select($query);
                $dresult=$description->fetch_assoc();

              ?>
               <div class="row">
                <div class="col-md-6">
                  <h4>Categories:<?php echo$dresult['categories'] ?></h4>
                     <p>type:<?php echo$dresult['type'] ?></p>
                      <p>Brand:<?php echo$dresult['brand'] ?></p>

                      <p>Product:<?php echo$dresult['ptitle'] ?></p>

                </div>
               <div class="col-md-6">
                 
                      <p>About-<?php echo$dresult['Overview'] ?></p>
               </div>

               </div>
                      </div>
                    </div>
                    <div id="reviews" class="tab-pane fade">
                      <div class="col-sm-5 col-lg-5 col-md-5">
                        <div class="reviews-content-left">
                         
                          <div class="review-ratting">
                            <?php 
                             $pid=$_GET['pid'];
                             $query="SELECT*FROM review Where pid='$pid' ";
                              $result=$db->select($query);
                              $count=mysqli_num_rows($result);
                                if($count>0){
                                  while($row=$result->fetch_assoc()){
                                
                            ?>
                            <p><a href="#"><?php echo$row['name']; ?></a></p>
                            <table>
                              <tbody>
                                <tr>
                                  <th>Price</th>
                                  <td><div class="rating"> 
                                   <?php if($row['price']==1){?>

                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                     <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <?php }elseif($row['price']==2){?> 
                                      <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                     <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                     <?php }elseif($row['price']==3){?> 
                                        <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                     <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                     <?php }elseif($row['price']==4){?> 
                                     <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                     <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <?php }else{?>
                                      <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                     <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                      <?php }?>
                                     </div></td>
                                </tr>
                                <tr>
                                  <th>Quality</th>
                                  <td><div class="rating">  <?php if($row['quality']==1){?>

                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                     <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <?php }elseif($row['quality']==2){?> 
                                         <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                     <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                     <?php }elseif($row['quality']==3){?> 
                                        <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                     <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                     <?php }elseif($row['quality']==4){?> 
                                     <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                     <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <?php }else{?>
                                      <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                     <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                      <?php }?> </div></td>
                                </tr>
                              </tbody>
                            </table>
                            <p class="author"> <?php echo$row['comment']; ?><small> (Posted on <?php echo$row['date1'] ?>)</small> </p>
                            <?php }} else{?>
                              <h3 style="font-family:'Roboto Condensed', sans-serif;padding-top: 15px;color: #18ae5a;font-weight: 600;">Drop Your First Review Here.Thanks</h3>
                              <?php }?>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-7 col-lg-7 col-md-7">
                        <div class="reviews-content-right">
                          <h2>Write Your Own Review</h2>
                          <form action="" method="post">
                            <h4>How do you rate this product?<em>*</em></h4>
                            <div class="table-responsive reviews-table">
                              <table class="table table-striped">
                                <tbody>
                                  <tr>
                                    <th></th>
                                    <th>1 star</th>
                                    <th>2 stars</th>
                                    <th>3 stars</th>
                                    <th>4 stars</th>
                                    <th>5 stars</th>
                                  </tr>
                                  <tr>
                                    <td>Quality</td>
                                   
                                    <td><input  type="radio" name="a" value="1"></td>
                                    <td><input  type="radio" name="a" value="2"></td>
                                    <td><input  type="radio" name="a" value="3"></td>
                                    <td><input  type="radio" name="a" value="4"></td>
                                    <td><input  type="radio" name="a" value="5"></td>
                                   
                                  </tr>
                                  <tr>
                                    <td>Price</td>
                                    <td><input  type="radio" name="b" value="1"></td>
                                    <td><input  type="radio" name="b" value="2"></td>
                                    <td><input  type="radio" name="b" value="3"></td>
                                    <td><input  type="radio" name="b" value="4"></td>
                                    <td><input  type="radio" name="b" value="5"></td>
                                  </tr>
                                  
                                </tbody>
                              </table>
                            </div>
                            <div class="form-area">
                             
                             
                              <div class="form-group">
                                <label>Comment <em>*</em></label>
                                <textarea colspan="5" name="comment" class="form-control" rows="5"> </textarea>
                              </div>
                              <div class="buttons-set">
                                <button class="button submit" title="Submit Review" type="submit" name="submitcomment"><span><i class="fa fa-thumbs-up"></i> &nbsp;Review</span></button>
                              </div>
                            </div>
                          </form>
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
  
  <!-- Main Container End --> 
  
  <!-- Related Product Slider -->
  
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="related-product-area">
          <div class="title_block">
             <?php 
                  $categories=Session::get("categories");
                  $ptitle=Session::get("ptitle");
                  $type=Session::get("type");
                   $pid=Session::get("pid");
                   $query="SELECT*FROM allin  WHERE categories='$categories' AND ptitle='$ptitle' AND type='$type' AND NOT pid=$pid ";
                   $result=$db->select($query);
                   $count12=mysqli_num_rows($result);
                   if($count12>0){
                                      
                  ?>
            <h3 class="products_title">Related Products</h3>
            <?php }?>
          </div>
          <div class="related-products-pro">
            <div class="slider-items-products">
              <div id="related-product-slider" class="product-flexslider hidden-buttons">
                <div class="slider-items slider-width-col4">
                  <?php 
                  $categories=Session::get("categories");
                  $ptitle=Session::get("ptitle");
                  $type=Session::get("type");
                   $pid=Session::get("pid");
                   $query="SELECT*FROM allin  WHERE categories='$categories' AND ptitle='$ptitle' AND type='$type' AND NOT pid=$pid ";
                   $result=$db->select($query);
                   if($result){
                     while($row=$result->fetch_assoc()){
                   
                  ?>
                  <div class="product-item">
                    <div class="item-inner">
                      <div class="product-thumbnail">
                        <div class="icon-sale-label sale-left">Sale</div>
                        <div class="box-hover">
                     
                       <div class="add-to-links" data-role="add-to-links"> <a href="index.php?wishid=<?php echo $row['pid'] ?>" class="action add-to-wishlist" title="Add to Wishlist"></a> <a href="index.php?compareid=<?php echo $row['pid'] ?>" class="action add-to-compare" title="Add to Compare"></a> </div>
                        </div>
                       <a href="single_product.php?pid=<?php echo $row['pid'] ?> & brand=<?php echo $row['brand'] ?> & categories=<?php echo $row['categories'] ?> "> <img class="product-image-photo" src="images/products/<?php echo $row['image'] ?>" alt=""></a></div>
                      <div class="pro-box-info">
                        <div class="item-info">
                          <div class="info-inner">
                            <div class="item-title"> <h4><a title="Ipsums Dolors Untra" href=""><?php echo $row['ptitle']?></a></h4> </div>
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
  <!-- Related Product Slider End --> 
  
  <!-- Upsell Product Slider -->
  <section class="upsell-product-area">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="title_block">
                      <?php 
                  $categories=Session::get("categories");
                  $ptitle=Session::get("ptitle");
                  $brand=Session::get("brand");
                  $type=Session::get("type");
                   $pid=Session::get("pid");
                   $query="SELECT*FROM allin  WHERE categories='$categories' AND brand='$brand' AND type='$type' AND NOT pid=$pid  ORDER BY pid DESC  limit 0,6 ";
                   $result=$db->select($query);
                   $count=mysqli_num_rows($result);
                   if($count>0){
                    
                   
                  ?>
            <h3 class="products_title"><?php echo Session::get("type"); ?> Products</h3>
            <?php } ?>
          </div>
          <div class="slider-items-products">
            <div id="upsell-product-slider" class="product-flexslider hidden-buttons">
              <div class="slider-items slider-width-col4">
      
                
                

                <?php 
                  $categories=Session::get("categories");
                  $ptitle=Session::get("ptitle");
                  $brand=Session::get("brand");
                  $type=Session::get("type");
                   $pid=Session::get("pid");
                   $query="SELECT*FROM allin  WHERE categories='$categories' AND brand='$brand' AND type='$type' AND NOT pid=$pid  ORDER BY pid DESC  limit 0,6 ";
                   $result=$db->select($query);
                   if($result){
                     while($row=$result->fetch_assoc()){
                   
                  ?>
                <div class="product-item">
                  <div class="item-inner">
                    <div class="product-thumbnail">
                      <div class="icon-sale-label sale-left">Sale</div>
                      <div class="box-hover">
                     
                      <div class="add-to-links" data-role="add-to-links"> <a href="index.php?wishid=<?php echo $row['pid'] ?>" class="action add-to-wishlist" title="Add to Wishlist"></a> <a href="index.php?compareid=<?php echo $row['pid'] ?>" class="action add-to-compare" title="Add to Compare"></a> </div>
                        </div>
                        <a href="single_product.php?pid=<?php echo $row['pid'] ?> & brand=<?php echo $row['brand'] ?> & categories=<?php echo $row['categories'] ?> "> <img class="product-image-photo" src="images/products/<?php echo $row['image'] ?>" alt=""></a></div>
                    <div class="pro-box-info">
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title"> <h4><a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a></h4> </div>
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
                </div>
                <?php }}?>
                
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Upsell Product Slider End --> 

  <!-- our clients Slider -->
  <!-- our clients Slider -->
  
 <!-- our clients Slider -->
  <?php 
include('segment/footer.php');
  ?>
  
  <!-- End Footer -->
  
 


<!-- End Footer --> 



</body>

<!-- Mirrored from htmlmystore.justthemevalley.com/fancy/version2/single_product.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Feb 2020 06:07:16 GMT -->
</html>