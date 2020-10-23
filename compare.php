<?php 
include('segment/header.php');
?>
<?php 
$login=Session::get("login");
if($login==true){
  echo"";
}
else{
   echo "<script>window:location='account_page.php';</script>";
}
?>
 <?php 
$email=Session::get("email");
if(isset($_GET['comparedel'])){
  $del=$_GET['comparedel'];
  $query="DELETE FROM compare WHERE email='$email' AND pid=$del";
  $result=$db->delete($query);
}

 ?>
 <?php 
   if(isset($_GET['compareid'])){
       $pid=$_GET['compareid'];
       $email=Session::get("email");
       $query="SELECT*FROM allin WHERE pid=$pid ";
       $result=$db->select($query)->fetch_assoc();
       $image=$result['image'];
       $price=$result['amount'];
       $pname=$result['ptitle'];
       $desc=$result['Overview'];
       $availability=$result['Availability'];
       $categories=$result['categories'];
        $size=$result['size'];
         $color=$result['color'];


      
       $query1="INSERT INTO compare(pid,image,pname,price,des,email,availability,categories,size,color) VALUES('$pid','$image','$pname','$price','$desc','$email','$availability','$categories','$size','$color') ";
       $result=$db->insert($query1);
       if($result){
        echo"<script>window:location='compare.php '</script>";

       
     }

   }

 ?>

 
   <!-- Breadcrumbs -->
  
  <div class="breadcrumbs">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <ul>
            <li class="home"> <a title="Go to Home Page" href="index.html">Home</a><span>&raquo;</span></li>
           
            <li><strong>Compare</strong></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Breadcrumbs End --> 
 <!-- Main Container --> 
  <section class="main-container col1-layout">
    <div class="main container">
      <div class="col-main">
        <div class="compare-list">
          <div class="page-title">
            <h2>Compare Products</h2>
          </div>
          <div class="table-responsive">
   
              <table class="table table-bordered table-compare">
                <th>Id</th>
                <th>Product Name</th>
                <th>Image</th>
                <th>Rating</th>
                <th>Price</th>
                <th>Description</th>
                <th>Availability</th>
             
                <th>Add To Cart</th>
                <th>Action</th>
                 <?php 
                 $i=0;
                   $email=Session::get("email");
                   $query="SELECT*FROM compare WHERE email='$email' ";
                   $result=$db->select($query);
                   $count=mysqli_num_rows($result);
                   if($count>=1){
                      while($row=$result->fetch_assoc()){
                      $i++;
                      
                 
                 ?> 
                
                <tr>
                  <td><?php echo$i?></td>
                  <td><?php 
                     
                  echo$row['pname']?></td>
                  <td><img style="max-width:170px" src="images/products/<?php echo$row['image']?>"></td>
                  <td><div class="rating">
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

                      
                 </div></td>
                  <td><?php echo$row['price']?></td>
                  <td><?php echo$row['des']?></td>
                  <td><?php echo$row['availability']?></td>
                                  <th><a class="custombtn btn-primary" href="single_product.php?pid=<?php echo$row['pid']; ?> "> Add to Cart</a></th>
                  <td><a class="custombtn btn-danger" onclick="return confirm('Are You Sure Want To Delete?')" href="compare.php?comparedel=<?php echo $row['pid']; ?>">Remove</a></td>
                  
                 
                  
                  
                </tr>
                <?php }} else{
                      echo"<script>window:location='index.php'</script>";
                  }
                  ?>
                
                
              </table>
    
          </div>
        </div>
      </div>
    </div>
  </section>
 
   <!-- our clients Slider -->
  
 <!-- our clients Slider -->
  <?php 
include('segment/footer.php');
  ?>
  
  <!-- End Footer -->
  
 
  
  

<!-- End Footer --> 



</body>

<!-- Mirrored from htmlmystore.justthemevalley.com/fancy/version2/compare.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Feb 2020 06:06:40 GMT -->
</html>

