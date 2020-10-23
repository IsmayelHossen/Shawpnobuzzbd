<?php 
include('segment/header.php');
?>
<script type="text/javascript">
   function validateForm() {
  var x = document.forms["myForm"]["email"].value;
  var y = document.forms["myForm"]["password"].value;
  if (x == "") {
    alert("Name Field Must Not Be Empty");
    return false;
  }
  if (y == "") {
    alert("Password Field Must Not Be Empty");
    return false;
  }
} 
</script>
  <?php 
      if (isset($_POST['submit'])) {
        $sid=Session::get('sid');
        $email=$_POST['email'];
        $password=$_POST['password'];
            $email=mysqli_real_escape_string($db->link,$email);
      $password=mysqli_real_escape_string($db->link,$password);
       
        if(empty($email) || empty($password)){
      $msg="<div class='alert alert-danger'>Field Must Not Be Empty!</div>";
        }
         else{

                  $query="SELECT*FROM customer WHERE email='$email' AND password='$password'";
                   $result=$db->select($query);
                    if($row=$result->fetch_assoc()){
                      $email=$row['email'];
                      $password=$row['password'];
                       Session::set("login",true);
                       Session::set("name",$row['fname']);
                       Session::set("email",$row['email']);
                       Session::set("phone",$row['phone']);
                       date_default_timezone_set('Asia/Dhaka');
                  
               $date1=date("d/m/Y h:a");
               $date1=date("d/m/Y h:a");
                 Session::set("time",$date1);
                 $queryud="UPDATE cart set email='$email' WHERE sid='$sid'";
                 $resultu=$db->update($queryud);
                     /*if(isset($remember)) {
                         setcookie ("email",$email,time()+ (10 * 365 * 24 * 60 * 60));
                        setcookie ("password",$password,time()+ (10 * 365 * 24 * 60 * 60));
                         } 
                         else {
                      
                       setcookie ("email"," ");
                        setcookie ("password"," ");
                    }   */
                       echo"<script>window.location='checkout.php';</script>";
                    }
                     else{
                      $msg="<div class='alert alert-danger'>Email Or Password Wrong</div>";
                    

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
            <li><strong>My Account</strong></li>
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
          <div class="box-authentication" >
            <h4>Login your <span style="color:red">Shawpnobuzzbd</span> Account</h4>
            <h5 id="logmsg"><?php if(isset($msg)){
              echo $msg;
            }?></h5>
                     <form name="myForm" method="post" action="" onsubmit="return validateForm()">
                       <div class="form-group ">
                <label for="email" class="text-center">Email address</label>
               
                <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?php if(isset($_COOKIE["email"])) { echo $_COOKIE["email"]; } ?>">
              </div>
              <div class="form-group ">
                <label for="pwd">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>">
              </div>
             <!-- <div class="form-group form-check animated rollIn">
                <label class="form-check-label">
             <input name="remember" class="form-check-input" type="checkbox" <?php if(isset($_COOKIE["password"])) { ?> checked <?php } ?> /> Remember me
                </label> 
              </div> -->
               <div class="form-group">

              <button type="submit" class="btn btn-success  " name="submit" >Log In</button>
            </div>
            <div class="form-group">
            <a href="#" style="float: right;margin-top: -36px;">Forget Password?</a>
            </div>
            </form>
             <div><span style="font-size:16px;font-family: italic;font-weight: 700;">New member? Register here?</span><a class="btn btn-info" href="register_page.php" style="padding: 7px 8px;margin: 0 auto;display: block;width:84px;float: right;">Sing Up</a></div>
          </div>

        </div>
      </div>
    </div>
  </section>
  <!-- Main Container End --> 
 <!-- our clients Slider -->
  <?php 
include('segment/footer.php');
  ?>



</body>

<!-- Mirrored from htmlmystore.justthemevalley.com/fancy/version2/account_page.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Feb 2020 06:06:40 GMT -->
</html>