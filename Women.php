<!--header -->

<?php 
include('segment/header.php');
error_reporting(0);
?>

 <?php 
$email=Session::get("email");
if(isset($_GET['comparedel'])){
  $del=$_GET['comparedel'];
  $query="DELETE FROM compare WHERE email='$email' AND pid=$del";
  $result=$db->delete($query);
  if($result){
     echo '<script type="text/javascript">
            swal({   
              title: "Delete Successfully",   


                 });
            </script>';
  }
}

 ?>
  <!-- header end -->
<?php 
if(isset($_GET['women'])){
     $brand=$_GET['women'];

 ?> 
   <div class="breadcrumbs">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <ul>
            <li class="home"> <a title="Go to Home Page" href="index.php">Home</a><span>&raquo;</span></li>
            <li class=""> <a title="Go to Home Page" href="Women.php">Women</a><span>&raquo;</span></li>
            <li><strong><a title="Go to Home Page" href="Women.php?women=<?php echo$brand ?>"><?php echo$brand ?> </a></strong></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Breadcrumbs End --> 
  <!-- Main Container -->
  <div class="main-container col2-left-layout">
    <div class="container">
    
      <div class="row">
        <div class="col-main col-sm-9 col-xs-12 col-sm-push-3">
          
          <div class="shop-inner">
            <div class="page-title">
              <h2><?php echo $brand;?></h2>
            </div>
            <div class="category-description">
             <div class="slider-items-products">
                <div id="category-slider" class="product-flexslider hidden-buttons">
                  <div class="slider-items slider-width-col4">
            <a href="#"><img src="images/cat-img2.jpg" alt="banner"></a>
            <a href="#"><img src="images/cat-img1.jpg" alt="banner"></a>
            </div></div></div>
            
            </div>
            <div class="toolbar">
              <div class="view-mode">
                <ul>
                  <li class="active"> <a href="shop_grid.php"> <i class="fa fa-th-large"></i> </a> </li>
                  <li> <a href="shop_listw.php"> <i class="fa fa-th-list"></i> </a> </li>
                </ul>
              </div>
              <div class="sorter">
                <div class="short-by">
                  <label>Sort By:</label>
                  <form action="" method="post">
                  <select name="select" id="select">
                    
                     <option value="DESC">High To Low</option>
                    <option value="ASC">Low To High</option>
                    <?php 
                      $query="SELECT DISTINCT brandn FROM allin WHERE brand='$brand'";
                      $resultb=$db->select($query);
                      while($rowb=$resultb->fetch_assoc()){
                    ?>
                    <option value="<?php echo$rowb['brandn']?>"><?php echo$rowb['brandn']?></option>
                    <?php } ?>
                  </select>
                  
                  <input class="btn" type="submit" name="Jewellery12" value="View">
                </form>
                </div>
               
              </div>
            </div>
            <div class="product-grid-area">
              <ul class="products-grid">
                <?php 
                   if(isset($_POST['Jewellery12'])){
                   $select=$_POST['select'];
                   

                
                     if($select=='ASC'){
                    $query="SELECT*FROM allin WHERE categories='Women' AND brand='$brand' ORDER BY amount ASC  ";
                    $result=$db->select($query);
                  }
                  elseif($select=='DESC'){
                    $query="SELECT*FROM allin WHERE categories='Women' AND brand='$brand' ORDER BY amount DESC  ";
                           $result=$db->select($query);
                           
                  }
                  else{
                         $query="SELECT*FROM allin WHERE categories='Women' AND brand='$brand' AND brandn='$select' ";
                           $result=$db->select($query);
                  }
                    
                    if($result){
                       while($row=$result->fetch_assoc()){
                    
                  ?>
                <li class="item col-lg-4 col-md-4 col-sm-6 col-xs-12">
                  <div class="product-item">
                    <div class="item-inner">
                      <div class="product-thumbnail">
                        <div class="box-hover">
                     
                     <div class="add-to-links" data-role="add-to-links"> <a href="index.php?wishid=<?php echo $row['pid'] ?>" class="action add-to-wishlist" title="Add to Wishlist"></a> <a href="index.php?compareid=<?php echo $row['pid'] ?>" class="action add-to-compare" title="Add to Compare"></a> </div>
                        </div>
                        <a href="single_product.php?pid=<?php echo $row['pid'] ?>" class="product-item-photo"> <img class="product-image-photo" src="images/products/<?php echo $row['image'] ?>" alt=""></a> </div>
                      <div class="pro-box-info">
                        <div class="item-info">
                          <div class="info-inner">
                            <div class="item-title"> <h4><a title="<?php echo $row['ptitle'] ?>" href="single_product.php?pid=<?php echo $row['pid'] ?>"><?php  echo $row['ptitle'];?> </a></h4> </div>
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
                                  <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"><?php  echo $row['amount'];?></span> </p>
                                  <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"><?php echo $row['regularp'] ?> </span> </p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="box-hover">
                          <div class="product-item-actions">
                            <div class="pro-actions">
                              <button onclick="location.href='shopping_cart.php?pid=<?php echo $row['pid'] ?>'" class="action add-to-cart" type="button" title="Add to Cart"> <span>Add to Cart</span> </button>
                            </div>
                            
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <?php }}?>

              <?php }else{?>
                 <?php 
                   if(!isset($_GET['page'])){
                      $page=1;
                    }
                    else{
                      $page=$_GET['page'];
                    }
                    if($page<=1){
                      $start=0;
                    }
                    else{
                      $start=($page*12)-12;
                      error_reporting(0);
                    }

                    $query="SELECT*FROM allin WHERE categories='Women' AND brand='$brand' LIMIT $start,12 ";
                    $result=$db->select($query);
                    if($result){
                       while($row=$result->fetch_assoc()){
                    
                  ?>
                <li class="item col-lg-4 col-md-4 col-sm-6 col-xs-12">
                  <div class="product-item">
                    <div class="item-inner">
                      <div class="product-thumbnail">
                        <div class="box-hover">
                     
                     <div class="add-to-links" data-role="add-to-links"> <a href="index.php?wishid=<?php echo $row['pid'] ?>" class="action add-to-wishlist" title="Add to Wishlist"></a> <a href="index.php?compareid=<?php echo $row['pid'] ?>" class="action add-to-compare" title="Add to Compare"></a> </div>
                        </div>
                        <a href="single_product.php?pid=<?php echo $row['pid'] ?>" class="product-item-photo"> <img class="product-image-photo" src="images/products/<?php echo $row['image'] ?>" alt=""></a> </div>
                      <div class="pro-box-info">
                        <div class="item-info">
                          <div class="info-inner">
                            <div class="item-title"> <h4><a title="<?php  echo $row['ptitle'];?>" href="single_product.php?pid=<?php  echo $row['pid'];?>"><?php  echo $row['ptitle'];?> </a></h4> </div>
                            <div class="item-content">
                              <div class="rating"> <?php
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
                                  <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"><?php  echo $row['amount'];?></span> </p>
                                  <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> <?php echo $row['regularp'] ?> </span> </p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="box-hover">
                          <div class="product-item-actions">
                            <div class="pro-actions">
                              <button onclick="location.href='single_product.php?pid=<?php echo $row["pid"] ?>'" class="action add-to-cart" type="button" title="Add to Cart"> <span>Add to Cart</span> </button>
                            </div>
                            
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <?php }}?>

             <!--Jewellery end -->
             <?php }?>
              </ul>
            </div>
            <div class="container ">
   
              <div class="pagination-area ">

                                <?php 
                   if(isset($_POST['Jewellery12'])){ ?>

                 <ul >
                

              

                
               
              </ul>

                    <?php } else{ ?>

                 <ul >
                
      
                   <?php 

                
            if($page>1){



                    ?>
                 
                   


              <li>  <a class="btn" href="?page=<?php echo$page-1 ?> & electronics= <?php echo$brand ?>">Previous</a></li>
               <?php }?>

               <?php 
                  $query="SELECT*FROM allin WHERE categories='Women' AND brand='$brand' ";
                  $result=$db->select($query);
               $count=mysqli_num_rows($result);
            

            $tol=ceil( $count/12);
            
            

                if($page<=$tol){
                  if($page==$tol){ ?>
                <li> <a class="btn"  disabled>Next</a></li>
            <?php } else{?>
                 
             <li> <a class="btn" href="?page=<?php echo$page+1 ?> & electronics=<?php echo$brand ?>">Next</a></li>
              <?php } }?>

                
               
              </ul>
                   
                  <?php }?>
                    

                   
              
      

                    

        
            </div>
                        
            </div>
          </div>
        </div>
                <aside class="sidebar col-sm-3 col-xs-12 col-sm-pull-9">
         
          <div class="block shop-by-side">
            <div class="sidebar-bar-title">
              <h3>Shop By</h3>
            </div>
            <div class="block-content">
              <p class="block-subtitle">Shopping Options</p>
              <div class="layered-Category">
                <h2 class="saider-bar-title">Categories</h2>
                <div class="layered-content">
                           <ul class="check-box-list">
                            <?php 
                               $query="SELECT DISTINCT brand FROM allin WHERE categories='Women'";
                               $resultab=$db->select($query);
                               while($rowab=$resultab->fetch_assoc()){
                            ?>
                      <li>
                      
                      <label for="jtv1"> <span class="button"></span> <a href="?women=<?php echo$rowab['brand'] ?>"><?php
                       $ibrand=$rowab['brand'];
                       echo$rowab['brand'] ?></a> <span class="count">(
                         <?php $query="SELECT*FROM allin WHERE categories='Women' AND brand='$ibrand' ";
                               $result=$db->select($query);
                               $count=mysqli_num_rows($result);
                               echo $count;
                          ?>
                      )</span> </label>
                    </li>
                    <?php }?>
                  </ul>
                </div>
              </div>
              
          
          <div class="block sidebar-cart">
            <div class="sidebar-bar-title">
              <h3>My Cart</h3>
            </div>
                           <?php 
              $email=Session::get("email");
              $date1=Session::get("time");
             $query="SELECT*FROM cart WHERE email='$email' AND date2='$date1' AND NOT order1=1";
               $result=$db->select($query);
               $count=mysqli_num_rows($result);
              
               
              
              ?>
            <div class="block-content">
              <p class="amount">There are <a href="shopping_cart.php"><?php echo$count; ?> items</a> in your cart.</p>
              <ul>
                               <?php 
                             $sum=0;
               while($row=$result->fetch_assoc()){
               
              ?>
                <li class="item"> <a href="shopping_cart.php" title="Sample Product" class="product-image"><img src="images/products/<?php echo$row['image'] ?>" alt="Sample Product "></a>
                  <div class="product-details">
                    <div class="access"> <a href="#" title="Remove This Item" class="remove-cart"><i class="icon-close"></i></a></div>
                    <p class="product-name"> <a href="shopping_cart.html"></a> <?php echo$row['pname'] ;?></p>
                    <strong><?php echo$row['quntity'] ;?></strong> x <span class="price"><?php 
                     $sum=$sum+$row['quntity']*$row['price'];
                    echo$row['price'] ;?></span> </div>
                </li>
                <?php }?>
                
              </ul>
              <div class="summary">
                <p class="subtotal"> <span class="label">Cart Subtotal:</span> <span class="price"><?php echo$sum;?></span> </p>
              </div>
              <div class="">
                 <a  href="checkout.php"><img style="max-width:200px;" src="images/check.png"></a>
              </div>
            </div>
          </div>
          <div class="block compare">
            <div class="sidebar-bar-title">
              <h3>Compare Products (
                <?php 
              $email=Session::get("email");
              
             $query="SELECT*FROM compare WHERE email='$email' AND categories='Women' ";
               $result=$db->select($query);
               $count=mysqli_num_rows($result);
              
               echo $count;
              
              ?>
              )</h3>
            </div>
            <div class="block-content">

              <ol id="compare-items">

                               <?php 
                             $sum=0;
               while($row=$result->fetch_assoc()){
               
              ?>
                <li class="item"> <a onclick="return confirm('Are You Sure Want To Delete?')" href="?comparedel=<?php echo$row['pid'] ?>" title="Rem?comparedel=<?php echo$row['pid'] ?>ove This Item" class="remove-cart"><i class="icon-close"></i></a> <a href="compare.php" class="product-name"><i class="fa fa-angle-right"></i>&nbsp; <?php echo$row['pname'] ?></a> </li>
                <?php }?>

              </ol>
              <div class="ajax-checkout">
                <a href="compare.php" class="custombtn btn-danger">Compare</a>
               
              </div>
            </div>
          </div>
          <div class="single-img-add sidebar-add-slider ">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel"> 
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
              </ol>
              
              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
                <div class="item active"> <img src="images/add-slide1.jpg" alt="slide1">
                  <div class="carousel-caption">
                    <h3><a href="single_product.html" title=" Sample Product">Sale Up to 50% off</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <a href="#" class="info">shopping Now</a> </div>
                </div>
                <div class="item"> <img src="images/add-slide2.jpg" alt="slide2">
                  <div class="carousel-caption">
                    <h3><a href="single_product.html" title=" Sample Product">Fancywatch Collection</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <a href="#" class="info">All Collection</a> </div>
                </div>
                <div class="item"> <img src="images/add-slide3.jpg" alt="slide3">
                  <div class="carousel-caption">
                    <h3><a href="single_product.html" title=" Sample Product">Summer Sale</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  </div>
                </div>
              </div>
              
              <!-- Controls --> 
              <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
          </div>
          <div class="block special-product">
            <div class="sidebar-bar-title">
              <h3>Special Products</h3>
            </div>
            <div class="block-content">
              <ul>
                <?php 
                $query="SELECT*FROM allin WHERE categories='Women' AND type='Special' AND brand='$brand' ";
                 $result=$db->select($query);
                 if($result){
                  while($row=$result->fetch_assoc()){
                 ?>
                <li class="item">
                  <div class="products-block-left"> <a href="single_product.php?pid=<?php echo $row['pid']; ?>" title="Sample Product" class="product-image"><img class="product-image-photo" src="images/products/<?php echo$row['image'] ;?>" alt="Sample Product "></a></div>
                  <div class="products-block-right">
                    <p class="product-name"> <a href="single_product.php?pid=<?php echo$row['pid'] ?>"><?php echo $row['ptitle']; ?></a> </p>
                    <span class="price"><?php echo $row['amount']; ?></span>
                    <div class="rating"> 

                       <?php
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


                  <?php } ?>


                     </div>
                  </div>
                </li>
                <?php }}?>

              </ul>
          </div>
          </div>
         
        </aside>
      </div>
    </div>
  </div>


  <!-- Main Container End --> 
 
      </div>
    </div>
  </div>
<!--Clothing start -->
 

  <!-- clothing end women main start-->
 <?php } else{?> 
     <div class="breadcrumbs">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <ul>
            <li class="home"> <a title="Go to Home Page" href="index.php">Home</a><span>&raquo;</span></li>
            <li class=""> <a title="Go to Home Page" href="Women.php">Women</a><span>&raquo;</span></li>
            
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Breadcrumbs End --> 
  <!-- Main Container -->
  <div class="main-container col2-left-layout">
    <div class="container">
    
      <div class="row">
        <div class="col-main col-sm-9 col-xs-12 col-sm-push-3">
          
          <div class="shop-inner">
            <div class="page-title">
              <h2>All Products</h2>
            </div>
            <div class="category-description">
             <div class="slider-items-products">
                <div id="category-slider" class="product-flexslider hidden-buttons">
                  <div class="slider-items slider-width-col4">
            <a href="#"><img src="images/cat-img2.jpg" alt="banner"></a>
            <a href="#"><img src="images/cat-img1.jpg" alt="banner"></a>
            </div></div></div>
            
            </div>
            <div class="toolbar">
              <div class="view-mode">
                <ul>
                  <li class="active"> <a href="shop_grid.php"> <i class="fa fa-th-large"></i> </a> </li>
                  <li> <a href="shop_listw.php"> <i class="fa fa-th-list"></i> </a> </li>
                </ul>
              </div>
              <div class="sorter">
                <div class="short-by">
                  <label>Sort By:</label>
                  <form action="" method="post">
                  <select name="select" id="select">
                      <option disabled=""></option>
                     <option value="DESC">High To Low</option>
                    <option value="ASC">Low To High</option>
                    
                    
                  </select>
                  
                  <input class="btn" type="submit" name="allwomen" value="View">
                </form>
                </div>
               
              </div>
            </div>
            <div class="product-grid-area">
              <ul class="products-grid">
                <?php 
                   if(isset($_POST['allwomen'])){
                   $select=$_POST['select'];
                   

                
                     if($select=='ASC'){
                    $query="SELECT*FROM allin WHERE categories='Women'  ORDER BY amount ASC  ";
                    $result=$db->select($query);
                  }
                  else{
                    $query="SELECT*FROM allin WHERE categories='Women' ORDER BY amount DESC  ";
                           $result=$db->select($query);
                           
                  }
                 
                    
                    if($result){
                       while($row=$result->fetch_assoc()){
                    
                  ?>
                <li class="item col-lg-4 col-md-4 col-sm-6 col-xs-12">
                  <div class="product-item">
                    <div class="item-inner">
                      <div class="product-thumbnail">
                        <div class="box-hover">
                     
                     <div class="add-to-links" data-role="add-to-links"> <a href="index.php?wishid=<?php echo $row['pid'] ?>" class="action add-to-wishlist" title="Add to Wishlist"></a> <a href="index.php?compareid=<?php echo $row['pid'] ?>" class="action add-to-compare" title="Add to Compare"></a> </div>
                        </div>
                        <a href="single_product.php?pid=<?php echo $row['pid'] ?>" class="product-item-photo"> <img class="product-image-photo" src="images/products/<?php echo $row['image'] ?>" alt=""></a> </div>
                      <div class="pro-box-info">
                        <div class="item-info">
                          <div class="info-inner">
                            <div class="item-title"> <h4><a title="<?php  echo $row['ptitle'];?>" href="single_product.php?pid=<?php  echo $row['pid'];?>"><?php  echo $row['ptitle'];?> </a></h4> </div>
                            <div class="item-content">
                              <div class="rating"> 
                                                                  <?php
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


                        <?php } ?>
                                    
                               </div>
                              <div class="item-price">
                                <div class="price-box">
                                  <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"><?php  echo $row['amount'];?></span> </p>
                                  <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> <?php echo $row['regularp']; ?> </span> </p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="box-hover">
                          <div class="product-item-actions">
                            <div class="pro-actions">
                              <button onclick="location.href='single_product.php?pid=<?php echo $row["pid"]; ?>'" class="action add-to-cart" type="button" title="Add to Cart"> <span>Add to Cart</span> </button>
                            </div>
                            
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <?php }}?>

              <?php }else{?>
                 <?php 
                   if(!isset($_GET['page'])){
                      $page=1;
                    }
                    else{
                      $page=$_GET['page'];
                    }
                    if($page<=1){
                      $start=0;
                    }
                    else{
                      $start=($page*12)-12;
                      error_reporting(0);
                    }

                    $query="SELECT*FROM allin WHERE categories='Women' LIMIT $start,12 ";
                    $result=$db->select($query);
                    if($result){
                       while($row=$result->fetch_assoc()){
                    
                  ?>
                <li class="item col-lg-4 col-md-4 col-sm-6 col-xs-12">
                  <div class="product-item">
                    <div class="item-inner">
                      <div class="product-thumbnail">
                        <div class="box-hover">
                     
                     <div class="add-to-links" data-role="add-to-links"> <a href="index.php?wishid=<?php echo $row['pid'] ?>" class="action add-to-wishlist" title="Add to Wishlist"></a> <a href="index.php?compareid=<?php echo $row['pid'] ?>" class="action add-to-compare" title="Add to Compare"></a> </div>
                        </div>
                        <a href="single_product.php?pid=<?php echo $row['pid'] ?>" class="product-item-photo"> <img class="product-image-photo" src="images/products/<?php echo $row['image'] ?>" alt=""></a> </div>
                      <div class="pro-box-info">
                        <div class="item-info">
                          <div class="info-inner">
                            <div class="item-title"> <h4><a title="<?php  echo $row['ptitle'];?>" href="single_product.php?pid=<?php  echo $row['pid'];?>"><?php  echo $row['ptitle'];?> </a></h4> </div>
                            <div class="item-content">
                              <div class="rating"> 

                    <?php
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


                  <?php } ?>
                               </div>
                              <div class="item-price">
                                <div class="price-box">
                                  <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"><?php  echo $row['amount'];?></span> </p>
                                  <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> <?php  echo $row['regularp'];?> </span> </p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="box-hover">
                          <div class="product-item-actions">
                            <div class="pro-actions">
                              <button onclick="location.href='single_product.php'" class="action add-to-cart" type="button" title="Add to Cart"> <span>Add to Cart</span> </button>
                            </div>
                            
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <?php }}?>

             <!--Jewellery end -->
             <?php }?>
              </ul>
            </div>
            <div class="container ">
   
              <div class="pagination-area ">

                                <?php 
                   if(isset($_POST['allwomen'])){ ?>

                 <ul >
                

              

                
               
              </ul>

                    <?php } else{ ?>

                 <ul >
                
      
                   <?php 

                
            if($page>1){



                    ?>
                 
                   


              <li>  <a class="btn" href="?page=<?php echo$page-1 ?>">Previous</a></li>
               <?php }?>

               <?php 
                  $query="SELECT*FROM allin WHERE categories='Women'  ";
                  $result=$db->select($query);
               $count=mysqli_num_rows($result);
            

            $tol=ceil( $count/12);
            
            

                if($page<=$tol){
                  if($page==$tol){ ?>
                <li> <a class="btn"  disabled>Next</a></li>
            <?php } else{?>
                 
             <li> <a class="btn" href="?page=<?php echo$page+1 ?>">Next</a></li>
              <?php } }?>

                
               
              </ul>
                   
                  <?php }?>
                    

                   
              
      

                    

        
            </div>
                        
            </div>
          </div>
        </div>
                <aside class="sidebar col-sm-3 col-xs-12 col-sm-pull-9">
         
          <div class="block shop-by-side">
            <div class="sidebar-bar-title">
              <h3>Shop By</h3>
            </div>
            <div class="block-content">
              <p class="block-subtitle">Shopping Options</p>
              <div class="layered-Category">
                <h2 class="saider-bar-title">Categories</h2>
                <div class="layered-content">
                                            <ul class="check-box-list">
                            <?php 
                               $query="SELECT DISTINCT brand FROM allin WHERE categories='Women'";
                               $resultab=$db->select($query);
                               while($rowab=$resultab->fetch_assoc()){
                            ?>
                      <li>
                      
                      <label for="jtv1"> <span class="button"></span> <a href="?women=<?php echo$rowab['brand'] ?>"><?php
                       $ibrand=$rowab['brand'];
                       echo$rowab['brand'] ?></a> <span class="count">(
                         <?php $query="SELECT*FROM allin WHERE categories='Women' AND brand='$ibrand' ";
                               $result=$db->select($query);
                               $count=mysqli_num_rows($result);
                               echo $count;
                          ?>
                      )</span> </label>
                    </li>
                    <?php }?>
                  </ul>
                </div>
              </div>
              
            
          <div class="block sidebar-cart">
            <div class="sidebar-bar-title">
              <h3>My Cart</h3>
            </div>
                           <?php 
              $email=Session::get("email");
              $date1=Session::get("time");
             $query="SELECT*FROM cart WHERE email='$email' AND date2='$date1' AND NOT order1=1";
               $result=$db->select($query);
               $count=mysqli_num_rows($result);
              
               
              
              ?>
            <div class="block-content">
              <p class="amount">There are <a href="shopping_cart.php"><?php echo$count; ?> items</a> in your cart.</p>
              <ul>
                               <?php 
                             $sum=0;
               while($row=$result->fetch_assoc()){
               
              ?>
                <li class="item"> <a href="shopping_cart.php" title="Sample Product" class="product-image"><img src="images/products/<?php echo$row['image'] ?>" alt="Sample Product "></a>
                  <div class="product-details">
                    <div class="access"> <a href="#" title="Remove This Item" class="remove-cart"><i class="icon-close"></i></a></div>
                    <p class="product-name"> <a href="shopping_cart.html"></a> <?php echo$row['pname'] ;?></p>
                    <strong><?php echo$row['quntity'] ;?></strong> x <span class="price"><?php 
                     $sum=$sum+$row['quntity']*$row['price'];
                    echo$row['price'] ;?></span> </div>
                </li>
                <?php }?>
                
              </ul>
              <div class="summary">
                <p class="subtotal"> <span class="label">Cart Subtotal:</span> <span class="price"><?php echo$sum;?></span> </p>
              </div>
              <div class="">
                 <a  href="checkout.php"><img style="max-width:200px;" src="images/check.png"></a>
              </div>
            </div>
          </div>
          <div class="block compare">
            <div class="sidebar-bar-title">
              <h3>Compare Products (
                <?php 
              $email=Session::get("email");
              
             $query="SELECT*FROM compare WHERE email='$email' AND categories='Women' ";
               $result=$db->select($query);
               $count=mysqli_num_rows($result);
              
               echo $count;
              
              ?>
              )</h3>
            </div>
            <div class="block-content">

              <ol id="compare-items">

                               <?php 
                             $sum=0;
               while($row=$result->fetch_assoc()){
               
              ?>
                <li class="item"> <a onclick="return confirm('Are You Sure Want To Delete?')" href="?comparedel=<?php echo$row['pid'] ?>" title="Rem?comparedel=<?php echo$row['pid'] ?>ove This Item" class="remove-cart"><i class="icon-close"></i></a> <a href="compare.php" class="product-name"><i class="fa fa-angle-right"></i>&nbsp; <?php echo$row['pname'] ?></a> </li>
                <?php }?>

              </ol>
              <div class="ajax-checkout">
                <a href="compare.php" class="custombtn btn-danger">Compare</a>
               
              </div>
            </div>
          </div>
          <div class="single-img-add sidebar-add-slider ">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel"> 
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
              </ol>
              
              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
                <div class="item active"> <img src="images/add-slide1.jpg" alt="slide1">
                  <div class="carousel-caption">
                    <h3><a href="single_product.html" title=" Sample Product">Sale Up to 50% off</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <a href="#" class="info">shopping Now</a> </div>
                </div>
                <div class="item"> <img src="images/add-slide2.jpg" alt="slide2">
                  <div class="carousel-caption">
                    <h3><a href="single_product.html" title=" Sample Product">Fancywatch Collection</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <a href="#" class="info">All Collection</a> </div>
                </div>
                <div class="item"> <img src="images/add-slide3.jpg" alt="slide3">
                  <div class="carousel-caption">
                    <h3><a href="single_product.html" title=" Sample Product">Summer Sale</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  </div>
                </div>
              </div>
              
              <!-- Controls --> 
              <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
          </div>
          <div class="block special-product">
            <div class="sidebar-bar-title">
              <h3>Special Products</h3>
            </div>
            <div class="block-content">
              <ul>
                <?php 
                $query="SELECT*FROM allin WHERE categories='Women' AND type='Special' ";
                 $result=$db->select($query);
                 if($result){
                  while($row=$result->fetch_assoc()){
                 ?>
                <li class="item">
                  <div class="products-block-left"> <a href="single_product.php?pid=<?php echo $row['pid']; ?>" title="Sample Product" class="product-image"><img class="product-image-photo" src="images/products/<?php echo$row['image'] ;?>" alt="Sample Product "></a></div>
                  <div class="products-block-right">
                    <p class="product-name"> <a href="single_product.php?pid=<?php echo$row['pid'] ?>"><?php echo $row['ptitle']; ?></a> </p>
                    <span class="price"><?php echo $row['amount']; ?></span>
                    <div class="rating"> 

                       <?php
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


                  <?php } ?>


                     </div>
                  </div>
                </li>
                <?php }}?>

              </ul>
            
          </div>
         
        </aside>
      </div>
    </div>
  </div>


  <!-- Main Container End --> 
 
      </div>
    </div>
  </div>

  <?php }?>


  
  <!-- our clients Slider -->
  <?php 
include('segment/footer.php');
  ?>
  
  <!-- End Footer -->
  
  
   
  
  



</body>


</html>
