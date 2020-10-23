

<?php   $msg="";?>
<?php 
     include('database/Session2.php');
     
    
    ?>
    <?php include("database/Formet.php");
      $fm=new Format();
     ?>

   
    <?php include('database/Connection.php'); 
        $ob=new Database();
    ?>

    <?php 

      if(isset($_POST['submit'])){

        $email=$_POST['email'];
         $password=$_POST['password'];

        $email=mysqli_real_escape_string($ob->link,$email);
         $password=mysqli_real_escape_string($ob->link,$password);

        $email=$fm->validation($email);
        $password=$fm->validation($password);
       
   
    
  
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
    <meta charset="utf-8">
    <title>Metrica - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description">
    <meta content="" name="author">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <!-- App css -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/jquery-ui.min.css" rel="stylesheet">
    <link href="../assets/css/icons.min.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/metisMenu.min.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/app.min.css" rel="stylesheet" type="text/css">
</head>

<body class="account-body accountbg">
    <!-- Log In page -->
    <div class="container">
        <div class="row vh-100 d-flex justify-content-center">
            <div class="col-12 align-self-center">
                <div class="">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-5 mx-auto">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="media mb-3">
                                            <a href="analytics/analytics-index.html" class="logo logo-admin"><img src="../assets/images/logo-sm.png" height="40" alt="logo" class="auth-logo"></a>
                                            <div class="media-body align-self-center text-truncate ml-2">
                                                <h4 class="mt-0 mb-1 font-weight-semibold text-dark font-18">EasyShop Admin Login</h4>
                                                
                                            </div>
                                            <!--end media-body-->
                                        </div>
                                        <form class="form-horizontal auth-form my-4" action="" method="post">
                                            <div class="form-group">
                                                <?php 
                                                    if(isset($msg)){
                                                        echo$msg;
                                                    }
                                                ?>
                                            </div>
                                            <div class="form-group">
                                                <label for="username">Email</label>
                                                <div class="input-group mb-3">
                                                    <input type="email" class="form-control" name="email" placeholder="Enter email">
                                                </div>
                                            </div>
                                            <!--end form-group-->
                                            <div class="form-group">
                                                <label for="userpassword">Password</label>
                                                <div class="input-group mb-3">
                                                    <input type="password" class="form-control" name="password" placeholder="Enter password">
                                                </div>
                                            </div>
                                            <!--end form-group-->
                                            <div class="form-group row mt-4">
                                                <div class="col-sm-6">
                                                    <div class="custom-control custom-switch switch-success">
                                                        <input type="checkbox" class="custom-control-input" id="customSwitchSuccess">
                                                        <label class="custom-control-label text-muted" for="customSwitchSuccess">Remember me</label>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-sm-6 text-right"><a href="auth-recover-pw.html" class="text-muted font-13"><i class="dripicons-lock"></i> Forgot password?</a></div>
                                                <!--end col-->
                                            </div>
                                            <!--end form-group-->
                                            <div class="form-group mb-0 row">
                                                <div class="col-12 mt-2">
                                                    <button class="btn btn-primary btn-block waves-effect waves-light" type="submit" name="submit">Log In <i class="fas fa-sign-in-alt ml-1"></i></button>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end form-group-->
                                        </form>
                                        <!--end form-->
                                        <div class="m-3 text-center text-muted">
                                            <p class="">Don't have an account ? <a href="register.php" class="text-primary ml-2">Free Resister</a></p>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                    <!--end card-body-->
                </div>
                <!--end card-->
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
    <!-- End Log In page -->
    <!-- jQuery  -->
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/jquery-ui.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/metismenu.min.js"></script>
    <script src="../assets/js/waves.js"></script>
    <script src="../assets/js/feather.min.js"></script>
    <script src="../assets/js/jquery.slimscroll.min.js"></script>
    <!-- App js -->
    <script src="../assets/js/app.js"></script>
</body>

</html>