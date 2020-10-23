
<?php   $msg="";?>
<?php 
     include('../database/Session2.php');
     
    
    ?>
    <?php include("../database/Formet.php");
      $fm=new Format();
     ?>

   
    <?php include('../database/Connection.php'); 
        $ob=new Database();
    ?>

    <?php 

      if(isset($_POST['submit'])){

        $email=$_POST['email'];
         $password=$_POST['userpass'];


        $email=$fm->validation($email);
        $password=$fm->validation($password);
       $email=mysqli_real_escape_string($ob->link,$email);
      $password=mysqli_real_escape_string($ob->link,$password);
       
   
    
  
        if(empty($email)||empty($password)){
           $msg="<div class='alert alert-danger'><span>Field Must Not Be Empety!</span></div>";

        }
        else{
             $query="SELECT*FROM admin WHERE email='$email' AND password='$password' ";
              $result=$ob->select($query);
              if( $row=$result->fetch_assoc()){
                Session::init();
                  Session::set("login",true);
                  //Session::set("email",$row['email']);
                  echo"<script>window:location='home.php'</script>";
              }
              else{
                 $msg="<div class='alert alert-danger'><span>Password Or User Name Wrong!</span></div>";

              }

        }

      }



    ?>
    
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <style type="text/css">
   .login {
  margin: 0 auto;
  max-width: 386px;
  background: #e0e3e3;
  padding: 9px 11px;
  top: 0;
  top: 200px;
  margin-top: 116px;
  border: 1px solid #c3c9ce;
  border-radius: 1px 2px 2px 1px #456;
  box-shadow: 2px 2px 2px 2px #e2e5e8;
}
body {
  margin: 0;
  font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5;
  color: #212529;
  text-align: left;
  background-color: #dfe7e8;
}
  </style>
</head>
<body>

<div class="container">
  <div class="login">
  <h2 style="text-align:center;">Admin Login</h2>
  <form action="" method="post">
      <span>
      <?php echo$msg;?>
    </span>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="userpass">
    </div>
     <button type="submit" class="btn btn-primary" name="submit">Submit</button>
  </form>
</div>
</div>

</body>
</html>
<!-- 
 <!DOCTYPE html>
 <html>
 <head>
   <title>Admin Login</title>
   <link rel="stylesheet" type="text/css" href="boot/css/bootstrap.css">
   <link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <body>
  <div class="panel panel-body panelcustom">
  <div class="well ">
  <form action="login.php" method="post">
    <div class="text-center"><span class="glyphicon glyphicon-user"></span>LOG IN</div>
    <span>
      <?php echo$msg;?>
    </span>
    <div class="form-group">
      <label>Email</label>
      <input type="text" name="email" class="form-control" placeholder="Enter Email...">
    </div>
     <div class="form-group">
      <label>Password</label>
      <input type="text" name="userpass" class="form-control"  placeholder="WritePassword...">
    </div>
     <div class="form-group">
      <label></label>
      <input type="submit" name="submit" class="btn btn-primary" value="submit">
    </div>
    <div class="well forgetp" ><a href="forgetpass.php"class="btn btn-danger pull-right">forget password?</a></div>
  </form>
</div>
</div>
 
 </body>
 </html> -->