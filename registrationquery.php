<?php include("database/Connection.php");
 include("database/Session.php");
 Session::init();

 
?>




<?php 
class Query{
	private $fm;
	private $db;
	 public function __construct(){
	 	$this->db=new Database();
	 	
	 }
	

	   public function Registration($fname,$email,$phone,$password,$repassword){
	   	$fname=mysqli_real_escape_string($this->db->link,$fname);
	   //	$address=mysqli_real_escape_string($this->db->link,$address);
	  // 	$city=mysqli_real_escape_string($this->db->link,$city);
	   	$email=mysqli_real_escape_string($this->db->link,$email);
	   	$phone=mysqli_real_escape_string($this->db->link,$phone);
	   	$password=mysqli_real_escape_string($this->db->link,$password);
	   	$repassword=mysqli_real_escape_string($this->db->link,$repassword);
        $phone = preg_replace("/[^0-9]/", '', $phone);
        $phone=strlen($phone);
	   	$query="SELECT*FROM customer WHERE email='$email'";

	   	$result=$this->db->select($query);
	   		$count=mysqli_num_rows($result);
	   	if($count>=1){
	   		echo'<div class="alert alert-danger alert-dismissible">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  This Email Already Exists.
</div>';
	   		exit();
	   	}
				   	
				   	elseif($phone<11){
				   		
				   			
				   	 echo'<div class="alert alert-danger alert-dismissible">
				   		
			  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			  Please Give Valid Phone Number.
			</div>';
				   		exit();
				   	}


						   	elseif($password !=$repassword){

		           echo'<div class="alert alert-danger alert-dismissible">
		  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		  Password Not Match!
		</div>';
			   		exit();
			   	}
				   	
	   	else{
	   		$query="INSERT INTO customer(fname,email,phone,password) VALUES('$fname','$email','$phone','$password')";
	   		 $result=$this->db->insert($query);
	   		 if($result){
	   		
	   		 	  
	   		 	  	 echo"<script>window:location='account_page.php'</script>";
	   		 	  
	   		 	
	   		 	exit();
	   		 }
	   	}

	   }

	   public function login($email,$password){

	   	/* 	$password=mysqli_real_escape_string($this->db->link,$password);
	   	 	 $email=mysqli_real_escape_string($this->db->link,$email);
	   	 	 if($email =='' ||$password =='' ){
	   	 	 	echo"<div class='alert alert-danger'>Field Must Not Be Empty</div>";
	   	 	 	
	   	 	 }
	   	 	 else{
	   	 	 $query="SELECT*FROM customer WHERE email='$email' AND password='$password'";
	   	 	 $result=$this->db->select($query);
	   	 	  if($row=$result->fetch_assoc()){
	   	 	  	 Session::set("login",true);
	   	 	  	 Session::set("name",$row['fname']);
	   	 	  	 Session::set("email",$row['email']);
	   	 	  	 Session::set("phone",$row['phone']);
	   	 	  	 date_default_timezone_set('Asia/Dhaka');
        
     $date1=date("d/m/Y h:a");
     $date1=date("d/m/Y h:a");
       Session::set("time",$date1);
	   	 	  /*	 if(!empty($remember)) {
               setcookie ("email",$row['email'],time()+ (10 * 365 * 24 * 60 * 60));
                setcookie ("password",$row['password'],time()+ (10 * 365 * 24 * 60 * 60));
               } 
               else {
            
             setcookie ("email","");
              setcookie ("password","");
          }  
	   	 	  	 echo"<script>window.location='profile.php';</script>";
	   	 	  }
	   	 	   else{
	   	 	   	echo"<div class='alert alert-danger'>Email Or Password Wrong</div>";
	   	 	 	exit();

	   	 	   }
	   	 	} */

	   }

	   public function order($order){
	   	if($order=='ASC'){
	   	 $query="SELECT*FROM allin WHERE categories='Women' ORDER BY amount DESC";
	   	 	 $result=$this->db->select($query);
	   	 	 while($row=$result->fetch_assoc()){
             //echo $row['ptitle'];

	   	 	  ?>
	   	 	  <li class="item col-lg-4 col-md-4 col-sm-6 col-xs-12">
                  <div class="product-item">
                    <div class="item-inner">
                      <div class="product-thumbnail">
                        <div class="box-hover">
                      <div class="btn-quickview"> <a href="#" data-toggle="modal" data-target="#modal-quickview"><i class="fa fa-search-plus" aria-hidden="true"></i> Quick View</a> </div>
                     <div class="add-to-links" data-role="add-to-links"> <a href="index.php?wishid=<?php echo $row['pid'] ?>" class="action add-to-wishlist" title="Add to Wishlist"></a> <a href="index.php?compareid=<?php echo $row['pid'] ?>" class="action add-to-compare" title="Add to Compare"></a> </div>
                        </div>
                        <a href="single_product.php?pid=<?php echo $row['pid'] ?>" class="product-item-photo"> <img class="product-image-photo" src="images/products/<?php echo $row['image'] ?>" alt=""></a> </div>
                      <div class="pro-box-info">
                        <div class="item-info">
                          <div class="info-inner">
                            <div class="item-title"> <h4><a title="Ipsums Dolors Untra" href="single_product.html"><?php echo $row['ptitle']; ?></a></h4> </div>
                            <div class="item-content">
                              <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                              <div class="item-price">
                                <div class="price-box">
                                  <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> <?php echo $row['amount'] ?> </span> </p>
                                  <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $299.00 </span> </p>
                                </div>
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
                </li>
	   	 	 
	   	 <?php	}}
	   	 	else{
	   	 			   	 $query="SELECT*FROM allin WHERE categories='Women' ORDER BY amount ASC";
	   	 	 $result=$this->db->select($query);
 while($row=$result->fetch_assoc()){  ?>
 	 <li class="item col-lg-4 col-md-4 col-sm-6 col-xs-12">
                  <div class="product-item">
                    <div class="item-inner">
                      <div class="product-thumbnail">
                        <div class="box-hover">
                      <div class="btn-quickview"> <a href="#" data-toggle="modal" data-target="#modal-quickview"><i class="fa fa-search-plus" aria-hidden="true"></i> Quick View</a> </div>
                     <div class="add-to-links" data-role="add-to-links"> <a href="index.php?wishid=<?php echo $row['pid'] ?>" class="action add-to-wishlist" title="Add to Wishlist"></a> <a href="index.php?compareid=<?php echo $row['pid'] ?>" class="action add-to-compare" title="Add to Compare"></a> </div>
                        </div>
                        <a href="single_product.php?pid=<?php echo $row['pid'] ?>" class="product-item-photo"> <img class="product-image-photo" src="images/products/<?php echo $row['image'] ?>" alt=""></a> </div>
                      <div class="pro-box-info">
                        <div class="item-info">
                          <div class="info-inner">
                            <div class="item-title"> <h4><a title="Ipsums Dolors Untra" href="single_product.html"><?php echo $row['ptitle']; ?></a></h4> </div>
                            <div class="item-content">
                              <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                              <div class="item-price">
                                <div class="price-box">
                                  <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> <?php echo $row['amount'] ?> </span> </p>
                                  <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $299.00 </span> </p>
                                </div>
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
                </li>
             
<?php
	   	 	 }
	   	 	}

	   }

	   public function profileupdate($name,$address,$city,$phone,$password,$region,$email){

         $query="UPDATE customer SET fname='$name',address='$address',city='$city',phone='$phone', password='$password', region='$region' WHERE email='$email'";
       $result=$this->db->update($query);
       if($result){
     echo' <div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Successfully Update!</strong> 
  </div> ';
  exit();
  }
  else{
      echo' <div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Nothing Update!</strong> 
  </div> ';
  exit();

  }

	   }

	  public function shippingupdate($sname,$saddress,$scity,$sphone){
          $email=Session::get("email");
	  	  $query="UPDATE customer SET sname='$sname',saddress='$saddress',scity='$scity',sphone='$sphone' WHERE email='$email'";
       $result=$this->db->update($query);
       if($result){
     echo' <div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Successfully Update!</strong> 
  </div> ';
  exit();
  }
  else{
      echo' <div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Nothing Update!</strong> 
  </div> ';
  exit();

  }

	  } 

	  public function cancelproductlist($cancelproduct){

	  	$email=Session::get("email");
    $query="DELETE FROM order_cancel WHERE id=$cancelproduct AND email='$email' ";
       $result=$this->db->update($query);
       if($result){
     echo' <div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Successfully Deleted!.....</strong> 
  </div> ';
  exit();
  }
  else{
      echo' <div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Something Wrong!</strong> 
  </div> ';
  exit();

  }

	  }
    public function category($category){
      if($category=='Men'){
        echo"<script>window:location='Men.php'</script>";
        echo"m";
        
      }
      elseif($category=='Electronics'){
       // echo"<script>window:location='Women.php'</script>";
                echo"E";
        
      }
       else{
       // echo"<script>window:location='Electronics.php'</script>";
                echo"W";;
                header("Location:Women.php");
        
      }
    }
	}