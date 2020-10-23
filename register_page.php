<?php 
include('segment/header.php');
?>
  <script type="text/javascript">
   function validateForm() {
  var name = document.forms["myForm"]["name"].value;
  var email = document.forms["myForm"]["email"].value;
   var password = document.forms["myForm"]["password"].value;
  var repassword = document.forms["myForm"]["repassword"].value;
  var phone = document.forms["myForm"]["phone"].value;

  if (name == "") {
    swal({
  title: "Name Field Must Not Be Empty!",
  icon: "warning",
  button: "Ok!",
});
    return false;
  }
  if (email == "") {
        swal({
  title: "Email Field Must Not Be Empty!",
  icon: "warning",
  button: "Ok!",
});
    return false;
  }
    if (password == "") {
            swal({
  title: "Password Field Must Not Be Empty!",
  icon: "warning",
  button: "Ok!",
});
    return false;
  }
    if (repassword == "") {
                swal({
  title: "Confirm Password Field Must Not Be Empty!",
  icon: "warning",
  button: "Ok!",
});
    return false;
  }
    if (phone == "") {
               swal({
  title: "Phone Field Must Not Be Empty!",
  icon: "warning",
  button: "Ok!",
});
    return false;
  }
} 
</script>
<?php
if(isset($_POST['register'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $repassword=$_POST['repassword'];
  $phone=$_POST['phone'];
    $name=mysqli_real_escape_string($db->link,$name);
     // $address=mysqli_real_escape_string($this->db->link,$address);
    //  $city=mysqli_real_escape_string($this->db->link,$city);
      $email=mysqli_real_escape_string($db->link,$email);
      $phone=mysqli_real_escape_string($db->link,$phone);
      $password=mysqli_real_escape_string($db->link,$password);
      $repassword=mysqli_real_escape_string($db->link,$repassword);
      $query="SELECT*FROM customer WHERE phone='$phone'";
      
      $result1=$db->select($query);
        $count1=mysqli_num_rows($result1);
       $query="SELECT*FROM customer WHERE email='$email'";
      
      $result=$db->select($query);
        $count=mysqli_num_rows($result);
      if($count>=1){
       
        echo' <script>swal({
  title: "This email is already exists!",
  icon: "warning",
  button: "Ok!",
});</script>
';
      }
      elseif($count1>=1){
                echo' <script> swal({
  title: "This Phone is already exists!",
  icon: "warning",
  button: "Ok!",
}); </script>
';

      }
 elseif($password !=$repassword){
                  echo' <script>swal({
  title: "This Password Not match!",
  icon: "warning",
  button: "Ok!",
});</script>
';
 }
  else{
        $query="INSERT INTO customer(fname,email,phone,password) VALUES('$name','$email','$phone','$password')";
         $result=$db->insert($query);
         if($result){
        
            
               echo"<script>window:location='account_page.php'</script>";
            
          
          exit();
         }
      }
            
}
 ?>
  <div class="breadcrumbs">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <ul>
            <li class="home"> <a title="Go to Home Page" href="index.php">Home</a><span>&raquo;</span></li>
            <li><strong>New Customer</strong></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Breadcrumbs End --> 
  
  <!-- Main Container -->
  <section class="main-container col1-layout">
    <div class="main container">
      <div class="page-content">

        <div class="account-login">

          <div class="box-authentication new-customer-box Account Page ">
           
          <div class="register">

            <style type="text/css">
              .form-group {
  margin-bottom: 0px;
}
            </style>
         
            <form name="myForm" method="post" action="" onsubmit="return validateForm()">
                <div class="row">
                  <div class="col-xs-12">
                    <div class="check-title">
                      <h4>Create your <span style="color:red">Shawpnobuzzbd</span> Account</h4>
                    </div>
                    <div id="regmsg"></div>
                  </div>
            
                  <div class="form-group ">
                    <label class="text-center"> Name:</label>
                    <div class="input-text">
                      <input type="text" name="name" id="name" class="form-control">
                    </div>
                  </div>
                
                  <div class="form-group">
                    <label>Email:</label>
                    <div class="input-text">
                      <input type="email" name="email" id="email" class="form-control">
                    </div>
                  </div>
                   <div class="form-group">
                    <label>Password:</label>
                    <div class="input-text">
                      <input type="password" name="password" id="password" class="form-control">
                    </div>
                  </div>
                   <div class="form-group">
                    <label>Re Password:</label>
                    <div class="input-text">
                      <input type="password" name="repassword" id="repassword" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Phone:</label>
                    <div class="input-text">
                      <input type="text" name="phone" id="phone" class="form-control" pattern="01[3|4|6|7|8|9][0-9]{8}"> 
                    </div>
                  </div>
                  <div class="form-group">
                   
                    <div class="form-group">
                      <button class="button" type="submit" name="register"><i class="fa fa-user"></i>&nbsp; <span>Register</span></button>
                    </div>
                  </div>
                </div>
              </form>
               <div><span style="font-size:16px;font-family: italic;font-weight: 700;">Already  Have An Account??</span><a class="btn btn-info" href="account_page.php" style="padding: 7px 8px;margin: 0 auto;display: block;width:84px;float: right;">Sing in</a></div>
          </div>
            </div>
              
          <script type="text/javascript">
                
              </script>
       
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

<!-- Mirrored from htmlmystore.justthemevalley.com/fancy/version2/register_page.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Feb 2020 06:06:40 GMT -->
</html>