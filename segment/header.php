
<?php 
 include('database/Connection.php');
  include('database/Session.php');
  Session::init();
   $sid=session_id();
   Session::set('sid',$sid);
  $db=new Database();

?>
<!DOCTYPE html>
<html lang="en">
<head>
<!-- Basic page needs -->
<meta charset="utf-8">
<!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <![endif]-->
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Shawpobuzzbd</title>
<meta name="description" content="Online shop,Shawpobuzzbd">
<meta name="keywords" content="Online Shop,Shawpobuzzbd"/>

<!-- Mobile specific metas  -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--sweet alert -->
<script src="js/sweetalert.js"></script>

<!-- Favicon  -->
  <link rel = "icon" href =  
"images/logofi.png" 
        type = "image/x-icon"> 



<script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=5ea0156d737a8c001282a1e1&product=inline-share-buttons" async="async"></script>

<link rel="stylesheet" href="style.css">
<!-- jquery js --> 
<!-- JS --> 

<!-- jquery js --> 
<script type="text/javascript" src="js/jquery.min.js"></script> 

<!-- bootstrap js --> 
<script type="text/javascript" src="js/bootstrap.min.js"></script> 

<!-- Mean Menu js --> 
<script type="text/javascript" src="js/jquery.meanmenu.min.js"></script> 

<!-- owl.carousel.min js --> 
<script type="text/javascript" src="js/owl.carousel.min.js"></script> 

<!-- bxslider js --> 
<script type="text/javascript" src="js/jquery.bxslider.js"></script> 

<!--jquery-ui.min js --> 
<script type="text/javascript" src="js/jquery-ui.js"></script> 

<!-- wow JS --> 
<script type="text/javascript" src="js/wow.min.js"></script> 

<!-- flexslider js --> 
<script type="text/javascript" src="js/jquery.flexslider.js"></script> 

<!-- mobile menu JS --> 
<script type="text/javascript" src="js/jtv-mobile-menu.js"></script> 
<!-- main js --> 
<script type="text/javascript" src="js/main.js"></script> 
<script type="text/javascript" src="js/main2.js"></script> 

<!-- nivo slider js --> 
<script type="text/javascript" src="js/jquery.nivo.slider.js"></script> 

<!--cloud-zoom js --> 
<script type="text/javascript" src="js/cloud-zoom.js"></script>


<!-- Hot Deals Timer 1--> 
<script type="text/javascript">
      var dthen1 = new Date("5/08/20 11:59:00 PM");
      start = "03/08/20 03:02:11 AM";
      start_date = Date.parse(start);
      var dnow1 = new Date(start_date);
      if(CountStepper>0)
          ddiff= new Date((dnow1)-(dthen1));
      else
          ddiff = new Date((dthen1)-(dnow1));
      gsecs1 = Math.floor(ddiff.valueOf()/1000);
      
      var iid1 = "countbox_1";
      CountBack_slider(gsecs1,"countbox_1", 1);
  </script>
<style type="text/css">
@media(max-width:700px){
  #st-2.st-right {
  right: 0px;
  margin-top: 128px;
}
.main-menu ul li a {
  color: #333333;
  display: inline-block;
  font-size: 14px;
  padding-left:8px;
  padding-right:8px;
  text-transform: uppercase;
  font-weight: 600;
  
  text-transform: uppercase;
  transition: all 0.3s ease 0s;
  position: relative;
  font-family: "Roboto Condensed", sans-serif;
}
}

</style>

</head>
 <?php  if(isset($_GET['logout']) && $_GET['logout']=="logout"){
  Session::destroy();

 }
                               
                               
?>
<body class="shop_grid_page">
<!--[if lt IE 8]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <![endif]--> 


<div id="page"> 
 
  <!-- Header -->
  <?php
                     $login=Session::get("login");
                     if($login==true){?>
  <header id="header">
    <div class="header-container">
      <div class="header-top">
        <div class="container">
          <div class="row">
            <div class="col-md-5 col-sm-5 col-xs-6 hidden-xs">
              <div class="slider-items-products">
                <div id="offer-slider" class="product-flexslider hidden-buttons">
                  <div class="slider-items slider-width-col4">
                    <div class="offer-content-text">
                      <p><i class="pe-7s-plane"></i> Free Shipping for Orders Over <span>Taka-3000</span></p>
                    </div>
                    <div class="offer-content-text">
                      <p><i class="pe-7s-like2"></i> Only the <span>Best Quality</span> and brands</p>
                    </div>
                    <div class="offer-content-text">
                      <p><i class="pe-7s-gift"></i> Free Gift after every <span>10 order</span></p>
                    </div>
                    <div class="offer-content-text">
                      <p><i class="pe-7s-refresh-2"></i> 100% Money Back <span>Guarantee</span>.</p>
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>
           
                   
                       <!-- top links -->
            <div class="headerlinkmenu col-md-7 col-sm-7 col-xs-12"> 
              <!-- Default Welcome Message -->
              <div class="welcome-msg hidden-xs">Welcome <?php 
              echo Session::get("email");
              ?> </div>
              <ul class="links">
               
       
             
                
                
              </ul>
              <div class="language-currency-wrapper pull-right">
                <div class="inner-cl">
                  <div class="block block-language form-language">
                    <div class="lg-cur"> <span> <span class="lg-fr">Account</span> <i class="fa fa-angle-down"></i> </span> </div>
                    <ul>
                      <li> <a href="profile.php"><span>Profile</span> </a> </li>
                      <li> <a href="profile.php"><span>My Order</span> </a> </li>
                      <li> <li><a href="?logout=logout">Logout</a></li> </li>
                     
                    </ul>
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
<?php } ?>
                  
     


      <div class="container">
        <div class="row"> 
          <!-- Header Logo -->
          <div class="col-xs-12 col-lg-4 col-md-3 col-sm-3">
            <div class="logo" style="text-transform: uppercase;font-weight: 700;font-size:26px;"><a title="Shawpobuzzbd" href="index.php">
              <img src="images/logofi.png" alt="Shawpobuzzbd" style="width:90px;margin-top:-30px;">
            </a> </div>
          </div>
          <div class="col-xs-12 col-lg-6 col-sm-5 col-md-6 col-md-5 "> 

            <!-- Search -->
            <div class="mobile-search">
              <p style="display:inline-block;padding-right:20px"><i class="fa fa-phone fa-lg"></i>&nbsp;&nbsp;01952-152883</p>
              <h5 style="display: inline-block;float:right;">Message</h5>
            </div>
            <div style="padding-top:25px;padding-bottom:4px;">
             <!-- <div id="category1"></div> -->
            
       <div class="">
  <style type="text/css">
form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 80%;
  background: #f1f1f1;
}

form.example button {
  float: left;
  width: 20%;
  padding: 10px;
  background: #219368;
  color: #fff;
  font-size: 17px;
  border: 1px solid #2dae7e;
  border-left: none;
  cursor: pointer;
}
form.example button:hover {
  background:#2dae7e;
}

form.example::after {
  content: "";
  clear: both;
  display: table;
}
</style>

              <form class="example" action="searchca.php" method="post">
  <input type="text" placeholder="Search.." name="search" required="">
  <button type="submit" name="searchca"><i class="fa fa-search"></i></button>
</form>               
                       <!-- End Search --> 
          </div>
        </div>
      </div>
          <div class="col-lg-2 col-sm-3 col-xs-12 top-cart"> 
            <!-- Begin shopping cart trigger  -->
            <div id="shopping-cart-trigger"> <a href="#0" class="cart-icon" title="Shopping Cart" data-toggle="modal" data-target="#modal-cart"> <i class="fa fa-shopping-bag"></i> <span class="cart-num show" id="show">
             
             
               
             <script type="text/javascript">
                $(document).ready(function(){
                
                   setInterval(function(){
                    $(".show").load('cartitem.php');
                   

                   },100);
                
                   
                });
             </script>
        
              
            </span> </a> </div>
            <!-- End shopping cart trigger --> 
             <?php
                     $login=Session::get("login");
                     if($login==true){?>
            <a href="compare.php" class="top-my-account"><i class="fa fa-signal" aria-hidden="true"><span class="cart-num show1" id="show">
             
              <?php 

              $email=Session::get("email");
            
              $query="SELECT*FROM wishlist WHERE email='$email' ";
               $result=$db->select($query);
               $count=mysqli_num_rows($result);
               
               echo $count;
              ?>
        
              
            </span></i></a>
        <a href="wishlist.php" class="top-compare"><i class="fa fa-heart-o"><span class="cart-num show2" id="show" style="left:90px;">
             
             
               <?php 

              $email=Session::get("email");
            
              $query="SELECT*FROM compare WHERE email='$email' ";
               $result=$db->select($query);
               $count=mysqli_num_rows($result);
               echo $count;
              ?>
            
        
              
            </span></i></a>
        <?php } else{?>
          <a href="account_page.php" class="top-my-account"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
        <a href="account_page.php" class="top-compare"><i class="fa fa-signal"></i></a>
          <?php }?>
         </div>
        </div>
      </div>
    </div>
    
  <nav> 
      <!-- Start Menu Area -->
      <div class="menu-area">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="main-menu">
              <!--  <div class="mm-toggle-wrap hidden-lg hidden-md hidden-sm">
                  <div class="mm-toggle"> <i class="fa fa-align-justify"></i><span class="mm-label">Menu</span> </div>
                </div> -->
                <ul class="hidden-xs">
                  <!--mobile -->
                  
                  <!-- mobile-->


                  <li class="custom-menu"><a href="index.php">Home</a>
                   <!-- <ul class="dropdown">
                      <li><a href="index.php">Home Version 1</a></li>
                      <li><a href="index.php">Home Version 2</a></li>
                      <li><a href="index.php">Home Version 3</a></li></ul> -->
                  </li>
                  <li class="megamenu  "><a href="Women.php">Women</a>
                    <div class="mega-menu">
                      <div class="menu-block menu-block-center">
                        <div class="menu-block-1">
                                                        <?php 
                              $query="SELECT DISTINCT brand,brandn FROM allin WHERE categories='Women'";
                              $result=$db->select($query);
                              while($rowm=$result->fetch_assoc()){
                            ?>
                          <ul>
                            <li> <a class="mega-title" href="Women.php?women=<?php echo $rowm['brand']?>"><?php echo $rowm['brand']?></a></li>
                            <li> <a href="Women.php?women=<?php echo $rowm['brand']?>"><?php echo $rowm['brandn']?></a></li>
                           
                          </ul>
                          <?php }?>


                        </div>
                        <div class="menu-block-3 hidden-sm">
                          <div class="mega-menu-img"> <a href="Women.php"><img src="images/products/toshorsilk.jpg" alt="Bannar 1" width="100px"></a> </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="megamenu"><a href="Men.php">Men</a>
                    <div class="mega-menu">
                      <div class="menu-block menu-block-center">
                        <div class="menu-block">
                            <?php $query="SELECT DISTINCT brand,brandn FROM allin WHERE categories='Men'";
                              $result=$db->select($query);
                              while($rowm=$result->fetch_assoc()){
                            ?>
                          <ul>
                            <li> <a class="mega-title" href="Men.php?men=<?php echo $rowm['brand']?>"><?php echo $rowm['brand']?><span class="menu-item-tag menu-item-tag-hot">hot</span></a></li>
                            <li> <a href="Men.php?men=<?php echo $rowm['brand']?>"><?php echo $rowm['brandn']?></a></li>
                           
                          </ul>
                          <?php }?>

                          <div class="mega-menu-img"><a href="#"><img src="images/products/cs1.jpg" alt="Bannar 1" width="100px"></a> </div>
                         
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="megamenu"><a href="Electronics.php">Electronics</a>
                    <div class="mega-menu">
                      <div class="menu-block menu-block-center">
                        <div class="menu-block-1">
                          <?php 
                              $query="SELECT DISTINCT brand,brandn FROM allin WHERE categories='Electronics'";
                              $result=$db->select($query);
                              while($rowm=$result->fetch_assoc()){
                            ?>
                          <ul>
                            <li> <a class="mega-title" href="Electronics.php?electronics=<?php echo $rowm['brand']?>"><?php echo $rowm['brand']?><span class="menu-item-tag menu-item-tag-hot">hot</span></a></li>
                            <li> <a href="Electronics.php?electronics=<?php echo $rowm['brand']?>"><?php echo $rowm['brandn']?></a></li>
                           
                          </ul>
                          <?php }?>

                        </div>
                        <div class="menu-block-3 hidden-sm">
                          <div class="mega-menu-img"> <a href="shop_grid.php"><img src="images/menu-img4.jpg" alt="Bannar 1"></a> </div>
                        </div>
                      </div>
                    </div>
                  </li>
                
                 <li><a href="giftcard.php">Gift Cards</a></li>
                 <li><a href="covid.php">Covid 19</a></li>
                    <li class="megamenu"><a href="about_us.php">About Us</a>
                    
                  </li>
                  <li><a href="contact_us.php">Contact</a></li>
                   <li><a href="faq.php">Faq</a></li>
                </ul>
                <span class="phone hidden-xs hidden-sm"><i class="fa fa-phone fa-lg"></i> 01952-152883</span> <a href="newsfeed.php" class="buy-theme">
                
                </a>
                       <ul class="hidden-lg hidden-md hidden-sm">
              <li> <a href="index.php">Home</a> </li>

                                <li>
                  <a href="Men.php">Men</a>
                </li>
                <li>
                  <a href="Women.php">Women</a>
                </li>
                <li>
                  <a href="Electronics.php">Elctronics</a>
                </li>
                   <li>
                  <a href="Electronics.php">Gift Card</a>
                </li>
                   <li>
                  <a href="covid.php">Covid 19</a>
                </li>
                
                
                   <li>
                  <a href="faq.php">Faq</a>
                </li>




                </ul>
                 </div>
            </div>
          </div>
        </div>
      </div>
    </nav> </header>
  <!-- end header --> 
 