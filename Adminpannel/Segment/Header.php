
<?php 
  include_once'../database/Session2.php';
   Session::checkSession();
?>
  
<?php
    
   
     include_once '../database/Connection.php';
      include_once '../database/Formet.php';
      $db = new Database();
      $fm=new Format();
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <title>Shawpnobuzzbd</title>
    <link rel="icon"  href="images/ictlogo.jpg">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="boot/css/bootstrap.css">
  <script src="boot/js/bootstrap.js"></script>
  <script src="boot/js/npm.js"></script>
  <script src="boot/js/bootstrap.min.js"></script>

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>





  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="css1/style.css">
 
   

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  
    <!--[if IE 6]><link rel="stylesheet" type="text/css" href="css/ie6.css" media="screen" /><![endif]-->
    <!--[if IE 7]><link rel="stylesheet" type="text/css" href="css/ie.css" media="screen" /><![endif]-->
  
    <!-- BEGIN: load jquery -->
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/jquery-ui/jquery.ui.core.min.js"></script>
    <script src="js/jquery-ui/jquery.ui.widget.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.ui.accordion.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.effects.core.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.effects.slide.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.ui.mouse.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.ui.sortable.min.js" type="text/javascript"></script>
    <script src="js/table/jquery.dataTables.min.js" type="text/javascript"></script>
    <!-- END: load jquery -->
    <script type="text/javascript" src="js/table/table.js"></script>
    <script src="js/setup.js" type="text/javascript"></script>
    <script type="text/javascript">

        $(document).ready(function () {
            setupLeftMenu();

            $('.datatable').dataTable();
      setSidebarHeight();


        });
    </script>



</head>
<body>
<div class="head">
<div class="container-fluid">
   <div class="row head1">

  <div class="col-sm-4">
    <div class="img1">
  
  </div>
  </div>

<div class="col-sm-8">
 
  </div>
 


 
</div> 

</div>
</div>

  <div class="nav">

<nav class="navbar navbar-inverse ">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navleft">

       <?php  if(isset($_GET['action']) && $_GET['action']=="logout")
                               Session::destroy();

                        ?>
        <li class="active"><a href="home.php"><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>Shawpnobuzzbd</a></li>
      
        <li><a href="Orderlist.php"><span class="glyphicon glyphicon-list"></span>OrderList </a></li>
           <li><a href="inbox.php"><span class="glyphicon glyphicon-list"></span>Inbox<span class="badge">
               <?php 
                   $query="SELECT*FROM adminmsg";
                   $result=$db->select($query);
                   $count=mysqli_num_rows($result);
                   echo  $count;
                
               ?>
            </span>
           

            </a></li>
              <li><a href="message.php"><span class="glyphicon glyphicon-list"></span>Message</a></li>

      </ul>
     
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Admin</a></li>
         <li><a href="?action=logout">Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
</div>



<div class="sidebar">
  <div class="container-fluid">
    <div class="row">
  <div class="col-md-2 ">
     <div class="col-md-12 sidebarleft">
   <style type="text/css">
     .list-group-item {
  position: relative;
  display: block;
  padding: 10px 15px;
  margin-bottom: -1px;
  background-color: #0d1017;
  border: 1px solid #0f0e1c;

}
.btn {
  display: inline-block;
  /* padding: 6px 12px; */
  margin-bottom: 24px;
  padding: 5px 30px;
}
.btn-primary {
  color: #fff;
  background-color: #151617;
  border-color: #181b1e;
}
.btn-primary:hover {
  color: #fff;
  background-color: #151617;
  border-color: #16181a;
}
.btn-primary.active.focus, .btn-primary.active:focus, .btn-primary.active:hover, .btn-primary:active.focus, .btn-primary:active:focus, .btn-primary:active:hover, .open > .dropdown-toggle.btn-primary.focus, .open > .dropdown-toggle.btn-primary:focus, .open > .dropdown-toggle.btn-primary:hover {
  color: #fff;
  background-color: #141617;
  border-color: #122b40;
}
.dropdown-menu {
  position: absolute;
  top: 100%;
  left: 0;
  z-index: 1000;
  display: none;
  float: left;
  min-width: 160px;
  padding: 5px 0;
  margin: 2px 0 0;
  font-size: 14px;
  text-align: left;
  list-style: none;
  background-color: #0e0e13;
  background-clip: padding-box;
  border: 1px solid #ccc;
  border: 1px solid rgba(0,0,0,.15);
  border-radius: 4px;
  -webkit-box-shadow: 0 6px 12px rgba(0,0,0,.175);
  box-shadow: 0 6px 12px rgba(0,0,0,.175);
  color: #ddd;
}
.navbar {
  position: relative;
  min-height: 50px;
  margin-bottom: 21px;
  border:none;
  /* border: 1px solid transparent; */
}
.navbar {
  border-radius: 0px;
  box-shadow: 0px 1px 2px 1px #393c40;
}
   </style>
    
        <h4>Site Opation</h4>
   
 <ul class="list-group">
  <li class="list-group-item">
    
    <div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Add Product
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="addall.php">Add All Categories </a></li>
    <li><a href="newspaper.php">Newspaper</a></li>
    <li><a href="#">JavaScript</a></li>
  </ul>
</div> 
  </li>
  </ul> 
 <ul class="nav flex-column">
    <li class="nav-item">
      <a class="nav-link" href="products.php">Products</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="man.php">Add Man product</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="women.php">Add Women product</a>
    </li>
    <li class="nav-item">
      <a class="nav-link " href="electronics.php">Add Electronics Product</a>
    </li>
       <li class="nav-item">
      <a class="nav-link " href="covid.php">Add Covid Products</a>
    </li>
  </ul>
   
 </div>
</div>

