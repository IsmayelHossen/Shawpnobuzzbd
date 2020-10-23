<?php 
include('segment/header.php');
 $date=date("d/m/Y h:i:sa");
  $date1=date("d/m/Y");
   $date2=Session::get("time");
  
?>

 <!-- Main Container -->
  <div class="main-container col1-layout">
    <div class="container">
      <div class="row">
        <div class="col-main col-sm-12 col-xs-12">
          <div class="shop-inner">
            <div class="page-title">
              <h2> Search Result</h2>
            </div>
        
            <div class="product-grid-area">
              <ul class="products-grid">
            <?php 
            if(isset($_POST['searchca'])){

            	 $search=$_POST['search'];
            	
            	 $query="SELECT*FROM allin WHERE ptitle LIKE '%$search%' OR brand LIKE '%$search%' OR brandn LIKE '%$search%'";
            	 $result=$db->select($query);
            	 $count=mysqli_num_rows($result);
            	 if($count>0){
            	 	while($row=$result->fetch_assoc()){
            
            ?>
                
                <!-- b2 -->
                <li class="item col-lg-3 col-md-4 col-sm-6 col-xs-12">
                  <div class="product-item">
                    <div class="item-inner">
                      <div class="product-thumbnail">
                        <div class="box-hover">
                     
                            <div class="add-to-links" data-role="add-to-links"> <a href="index.php?wishid=<?php echo $row['pid'] ?>" class="action add-to-wishlist" title="Add to Wishlist"></a> <a href="index.php?compareid=<?php echo $row['pid'] ?>" class="action add-to-compare" title="Add to Compare"></a> </div>
                        </div>
                        <a href="single_product.php?pid=<?php echo $row['pid'] ?> & brand=<?php echo $row['brand'] ?> & categories=<?php echo $row['categories'] ?> "> <img class="product-image-photo" src="images/products/<?php echo $row['image'] ?>" alt=""></a> </div>
                     
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
                <?php }}else{?>
                <div>
                	<h2 style="text-align:center;color:red">No related data found</h2>
                </div>
                <?php }}?>
                <!-- .b2 --> 
                
                <!-- c2 -->

       
              </ul>
            </div>
           
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Main Container End --> 

  <?php 
include('segment/footer.php');
  ?>