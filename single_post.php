<?php 
include('segment/header.php');
?>


<?php
$email=Session::get("email");
$name=Session::get("name");
$login=Session::get("login");
  if(isset($_POST['submitcomment'])){
    if($login==true){
       echo"";
    }
    else{
       echo"<script>window:location='account_page.php'</script>";
    }
    error_reporting(0);
     $pid=$_GET['blogid'];
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
             if(isset($_GET['categories']) && isset($_GET['brand']) && isset($_GET['blogid'])){
              $categories=$_GET['categories'];
              $brand=$_GET['brand'];
              $pid=$_GET['blogid'];
            
              Session::set("categories",$categories);
              Session::set("brand",$brand);
              Session::set("pid",$pid);


             }
          ?>
  <div class="breadcrumbs">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <?php
            $categories=Session::get("categories");
           $brand=Session::get("brand");
           $pid=Session::get("pid");
           if($categories=='Elctronics'){?>
                                    <ul>
            <li class="home"> <a title="Go to Home Page" href="index.php">Home</a><span>&raquo;</span></li>
            <li class=""> <a title="Go to Home Page" href="electronics.php">Elctronics</a><span>&raquo;</span></li>
            <li><strong><a title="Go to Home Page" href="electronics.php?electronics=$brand"><?php echo$brand ?> </a></strong></li>
          </ul>

          <?php } elseif($categories=='Men'){ ?>
                      <ul>
            <li class="home"> <a title="Go to Home Page" href="index.php">Home</a><span>&raquo;</span></li>
            <li class=""> <a title="Go to Home Page" href="shop_gridm.php">Men</a><span>&raquo;</span></li>
            <li><strong><a title="Go to Home Page" href="shop_gridm.php?men=$brand"><?php echo$brand ?> </a></strong></li>
          </ul>
            <?php } else{ ?>
                       <ul>
            <li class="home"> <a title="Go to Home Page" href="index.php">Home</a><span>&raquo;</span></li>
            <li class=""> <a title="Go to Home Page" href="shop_grid.php">Women</a><span>&raquo;</span></li>
            <li><strong><a title="Go to Home Page" href="shop_grid.php?women=$brand"><?php echo$brand ?> </a></strong></li>
          </ul>

              <?php }?>
        </div>
      </div>
    </div>
  </div>
  <!-- Main Container -->
  <section class="blog_post">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-9">
         
          <?php 
           $categories=Session::get("categories");
           $brand=Session::get("brand");
           $pid=Session::get("pid");
           $query="SELECT*FROM allin WHERE categories='$categories' AND pid='$pid' ";
           $result=$db->select($query);
           while($row=$result->fetch_assoc()){

 

          ?>
          <div class="entry-detail">
            <div class="page-title">
              <h1><?php echo $row['brandn']?> &raquo; <?php echo $row['ptitle']?></h1>
            </div>
            <div class="entry-photo">
               <figure><a href="single_product.php?pid=<?php echo $row['pid'] ?> & brand=<?php echo $row['brand'] ?> & categories=<?php echo $row['categories'] ?> "> <img class="" src="images/products/<?php echo $row['image'] ?>" alt=""></a>
             </figure>
            </div>
            <div class="entry-meta-data"> <span class="author"> <i class="fa fa-user"></i>&nbsp; by: <a href="#">Admin</a></span> <span class="cat"> <i class="fa fa-folder"></i>&nbsp; <a href="#">News, </a> <a href="#">Promotions</a> </span> <span class="comment-count"> <i class="fa fa-comment"></i>&nbsp; 3 </span> <span class="date"><i class="fa fa-calendar">&nbsp;</i>&nbsp; <?php echo$row['time1'] ?></span>
              <div class="rating" style="float:none;"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i>&nbsp; <span>(5 votes)</span></div>
            </div>
            <div class="content-text clearfix">
              
              <blockquote> <?php echo$row['ptitle'] ?></blockquote>
             
            </div>
            <div class="entry-tags"> <span>Tags:</span> <a href="#">beauty,</a> <a href="#">medicine,</a> <a href="#">health</a> </div>
          </div>
          <?php }?>
          <!-- Related Posts -->
          <div class="single-box">
            <div class="title_block">
              <h2>Related Posts</h2>
            </div>
            <div class="slider-items-products">
              <div id="related-posts" class="product-flexslider hidden-buttons">
                <div class="slider-items slider-width-col4 fadeInUp">
                            <?php 
           $categories=Session::get("categories");
           $brand=Session::get("brand");
           $pid=Session::get("pid");
           $query="SELECT*FROM allin WHERE categories='$categories' AND type='Special' AND NOT pid='$pid' ";
           $result1=$db->select($query);
           while($row1=$result1->fetch_assoc()){

 

          ?>
                  <div class="product-item">
                    <article class="entry">
                      <div class="entry-thumb"> <a href="single_post.php?blogid=<?php echo $row1['pid'] ?> & categories=<?php echo$row1['categories']; ?> & brand=<?php echo$row1['brand']?>"> <img src="images/products/<?php echo$row1['image'];?>" alt="Blog"> </a> </div>
                      <div class="entry-info">
                        <h3 class="entry-title"><a href="single_post.php?blogid=<?php echo $row1['pid'] ?> & categories=<?php echo$row1['categories']; ?> & brand=<?php echo$row1['brand']?>"><?php echo$row1['ptitle'] ?></a></h3>
                        <div class="entry-meta-data"> <span class="comment-count"> <i class="fa fa-comment-o">&nbsp;</i> 1 </span> <span class="date"> <i class="fa fa-calendar">&nbsp;</i> <?php echo$row1['time1']; ?> </span> </div>
                        <div class="entry-more"> <a href="single_post.php?blogid=<?php echo $row1['pid'] ?> & categories=<?php echo$row1['categories']; ?> & brand=<?php echo$row1['brand']?>">Read more</a> </div>
                      </div>
                    </article>
                  </div>

                  <?php } ?>

                </div>
              </div>
            </div>
          </div>
          <!-- ./Related Posts --> 
          <!-- Comment -->
          <div class="single-box">
            <div class="title_block">
              <h2 class="">Comments</h2>
            </div>
            <div class="review-ratting">
                            <?php 
                             $pid=$_GET['blogid'];
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
          <div class="single-box comment-box">
          
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
          <!-- ./Comment --> 
        </div>
        <!-- right colunm -->
        <aside class="sidebar col-xs-12 col-sm-3"> 
          <!-- Blog category -->
          <div class="block blog-module">
            <div class="sidebar-bar-title">
              <h3>Best Selling Categories</h3>
            </div>
            <div class="block_content"> 
              <!-- layered -->
              <div class="layered layered-category">
                <div class="layered-content">
                  <ul class="tree-menu">
                    <li><a href="electronics.php"><i class="fa fa-angle-right"></i>&nbsp; Electronics</a></li>
                    <li><i class="fa fa-angle-right"></i>&nbsp; <a href="shop_grid.php">Women</a></li>
                    <li><i class="fa fa-angle-right"></i>&nbsp; <a href="shop_gridm">Men</a></li>
                    
                  </ul>
                </div>
              </div>
              <!-- ./layered --> 
            </div>
          </div>
          <!-- ./blog category  --> 
          <!-- Popular Posts -->
          <div class="block blog-module">
            <div class="sidebar-bar-title">
              <h3>Popular Products</h3>
            </div>
            <div class="block_content"> 
              <!-- layered -->
              <div class="layered">
                <div class="layered-content">
                  <ul class="blog-list-sidebar">
                    <?php
                      $query="SELECT*FROM allin WHERE type='Special' ";
                      $result=$db->select($query);
                      while($row=$result->fetch_assoc()){
                      
                    ?>
                    <li>
                      <div class="post-thumb"> <a href="single_product.php?pid=<?php echo $row['pid'] ?> & categories=<?php echo$row['categories']; ?> & brand=<?php echo$row['brand']?>"><img src="images/products/<?php echo $row['image']?>" alt="Blog"></a> </div>
                      <div class="post-info">
                        <h5 class="entry_title"><a href="#"><?php echo $row['ptitle']?></a></h5>
                        <div class="post-meta"> <span class="date"><i class="fa fa-calendar"></i> 2014-08-05</span> <span class="comment-count"> <i class="fa fa-comment-o"></i> 3 </span> </div>
                      </div>
                    </li>
                    <?php }?>

                  </ul>
                </div>
              </div>
              <!-- ./layered --> 
            </div>
          </div>
          <!-- ./Popular Posts --> 
          
          <!-- Recent Comments -->
          <div class="block blog-module">
            <div class="sidebar-bar-title">
              <h3>Recent Comments</h3>
            </div>
            <div class="block_content"> 
              <!-- layered -->
              <div class="layered">
                <div class="layered-content">
                  <ul class="recent-comment-list">
                                                <?php 
                             
                             $query="SELECT*FROM review ORDER BY id desc LIMIt 3 ";
                              $result=$db->select($query);
                              $count=mysqli_num_rows($result);
                                if($count>0){
                                  while($row=$result->fetch_assoc()){
                                    $pid=$row['pid'];
                                  
                                
                            ?>

                    <li>
                       <?php 
                         $query="SELECT*FROM allin WHERE pid='$pid'";
                         $result1=$db->select($query);
                         $row1=$result1->fetch_assoc();
                       ?>
                      <h5><a href="#"><?php echo$row1['ptitle']; ?></a></h5>
                      <h5><a href="#"><img style="width:70px;" src="images/products/<?php echo$row1['image']; ?>"></a></h5>
                        
                      <div class="comment"> "<?php echo $row['comment'];?>..." </div>
                      <div class="author">Posted by <a href="#"><?php echo$row['name'] ;?></a><p><?php echo $row['date1']; ?></p></div>
                    </li>
                    <?php }}?>
                   
                  </ul>
                </div>
              </div>
              <!-- ./layered --> 
            </div>
          </div>
          <!-- ./Recent Comments --> 
          <!-- tags -->

          
          <!-- ./tags --> 
          <!-- Banner -->
          <div class="single-img-add sidebar-add-slider">
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
          <!-- ./Banner --> 
        </aside>
        <!-- ./right colunm --> 
      </div>
    </div>
  </section>
  <!-- Main Container End --> 
  <!-- our clients Slider -->
 
  <!-- our client Slider -->
 <!-- our clients Slider -->
  <?php 
include('segment/footer.php');
  ?>
  
  <!-- End Footer -->
  

</body>

<!-- Mirrored from htmlmystore.justthemevalley.com/fancy/version2/single_post.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Feb 2020 06:07:56 GMT -->
</html>