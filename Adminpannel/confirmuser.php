
<?php include("Segment/Header.php");?>
<?php 
if(isset($_POST['qynupdate'])){
 $quntityupdate=$_POST['updateqyn'];
 $pid=$_POST['pid'];
 $query="UPDATE allin SET Availability=$quntityupdate WHERE pid=$pid";
 $updateqyn=$db->update($query);
 if($updateqyn){
   echo"update Successfully";
 }

}
?>

 <?php
                   if(isset($_GET["confirmcancel"]))
                   {
                      $date=$_GET["confirmcancel"];

                   
                     $query="UPDATE customer_order SET status='2' WHERE date3='$date'";
                     $result=$db->update($query);
                     if($result){
                      echo"<script>alert('Successfully Order Cancel')</script>";
                      echo"<script>window:location='userlist.php'</script>";
                     }
                     else{
                       echo"Data not Update";
                     }

                      }


                  ?>
                     <?php
                   if(isset($_GET["confirmActive"]))
                   {
                      $sid=$_GET["confirmActive"];

                   date_default_timezone_set('Asia/Dhaka');
        
                   $date1=date("d/m/Y h:i:sa");
                     $query="UPDATE customer_order SET status='1' ,confirmd='$date1' WHERE sid='$sid'";
                     $result=$db->update($query);
                     if($result){
                      echo"<script>alert('Successfully Order Confirmed')</script>";
                      echo"<script>window:location='userlist.php'</script>";
                     }
                     else{
                       echo"Data not Update";
                     }

                      }


                  ?>
           <div class="col-md-10 ">
       <div class="col-md-12 sidebarright">
        
          <div class="hedaing">

            <h2>Confirmed Order Details</h2>
          </div>


                  <section>
                    <div class="container">
                      <div class="row">
                        <div class="col-md-6 col-sm-12">
                                   <?php
                        if(isset($_GET['confirmuseremail'])){
         $confirmuseremail=$_GET['confirmuseremail'];
         Session::set("confirmuseremail",$confirmuseremail);

      }
                    $email=Session::get("confirmuseremail");
                    $query="SELECT*FROM customer WHERE email='$email' ";
                    $result=$db->select($query);
                    $count=mysqli_num_rows($result);
                    if($count>=1){
                      while($row=$result->fetch_assoc()){

                  ?>
                  <h3>Name:<?php echo$row['fname'] ?></h3>
                  <h3>Contact</h3>
                 <ol>
                   <li>Email:<?php echo$row['email'] ?></li>
                   <li>Mobile:<?php echo$row['phone'] ?></li>
                 </ol>
                  
                  <h3> Address </h3>
                    <ol>
                      <li>Region:<?php echo$row['region'] ?></li>
                      <li>City:<?php echo$row['city'] ?></li>
                      <li>Address:<?php echo$row['address'] ?></li>
                    </ol>
                 
                  <?php }}?>
                          
                        </div>

                        <div class="col-md-6 col-sm-12">
                          <h4 style="">Billing Address</h4>
                                   <?php
                        if(isset($_GET['confirmuseremail'])){
         $confirmuseremail=$_GET['confirmuseremail'];
         Session::set("confirmuseremail",$confirmuseremail);

      }
                    $email=Session::get("confirmuseremail");
                    $query="SELECT*FROM customer WHERE email='$email'";
                    $result=$db->select($query);
                    $count=mysqli_num_rows($result);
                    if($count>=1){
                      while($row=$result->fetch_assoc()){

                  ?>
                  <h3>Name:<?php echo$row['sname'] ?></h3>
                  <h3>Contact</h3>
                 <ol>
                   
                   <li>Mobile:<?php echo$row['sphone'] ?></li>
                 </ol>
                  
                  <h3> Address </h3>
                    <ol>
                      
                      <li>City:<?php echo$row['scity'] ?></li>
                      <li>Address:<?php echo$row['saddress'] ?></li>
                    </ol>
                 
                  <?php }}?>
                          
                        </div>
                      </div>
                    </div>
                  </section>

                  <section>
                    <div class="container">
                      <div class="row">
                        <div class="col-sm-12 col-md-12">
                          <div class="productview">
                            <style type="text/css">
                              .table tr ,td {
   border: 1px solid;
  /* border: coral; */
  border-collapse: collapse;
}
                            </style>
                            <table class="table">
    <thead>
      <tr>
        <th>No.</th>
        <th>Pid</th>
        <th>Product</th>
        <th>Price</th>
        <th>Quntity</th>
        <th>Image</th>
        <th>Total</th>
        <th>Reduce Quntity</th>
        
        
      </tr>
    </thead>
    <tbody>
      <?php
      if(isset($_GET['confirmuser'])){
         $confirmuser=$_GET['confirmuser'];
         Session::set("confirmuser",$confirmuser);
         $email=Session::get("confirmuseremail");

      }
      $mul=1;
      $grand=0; 
      $i=0;
    
      $query="SELECT*FROM cart WHERE email='$email' AND sid='$confirmuser' ";
      $result=$db->select($query);
       if($result){
         while ($row=$result->fetch_assoc()) {
          $i++;
        
       

       ?>
      <tr>
        <td><?php echo$i;?></td>
       <td><?php echo $row['pid'];?>

        <td><?php echo $row['pname'];?>
          
                     <?php 
                       $colorcode=$row['colorcode'];
                        $query="SELECT*FROM productcolor WHERE colorcode='$colorcode' ";
                        $resultcolor=$db->select($query);
                        $countcolor=mysqli_num_rows($resultcolor);
                        if($countcolor==1){
                        $rowcolor=$resultcolor->fetch_assoc();
                    
                      ?>
          <span>Color:<?php echo $rowcolor['colorcode']?></span><br>
          <?php } ?>
          <?php 
                       $size=$row['size'];
                        $query="SELECT*FROM size WHERE size1='$size' ";
                        $resultcolor=$db->select($query);
                        $countcolor=mysqli_num_rows($resultcolor);
                        if($countcolor==1){
                        $rowsize=$resultcolor->fetch_assoc();
                    
                      ?>
         
          <span>Size:<?php echo$rowsize['size1'] ?></span>
          <?php } ?>
        </td>
        <td><?php echo $row['price'];?></td>
        <td><?php echo $row['quntity'];?></td>
        <td>
          <?php 
                       $colorcode=$row['colorcode'];
                        $query="SELECT*FROM productcolor WHERE colorcode='$colorcode' ";
                        $resultcolor=$db->select($query);
                        $countcolor=mysqli_num_rows($resultcolor);
                        if($countcolor==1){
                        $rowcolor=$resultcolor->fetch_assoc();
                    
                      ?>
          <img width="50px;" src="../images/products/<?php echo $rowcolor['image'];?>">
          <?php } else{ ?>
                   <img width="50px;" src="../images/products/<?php echo $row['image'];?>">
            <?php }?>
        </td>
        <td> 
           <?php 
            echo $row['price']*$row['quntity'];

             $mul=$row['price']*$row['quntity'];
             $grand=$mul+$grand;

           
           ?>
      </td>
      <td><!-- Button to Open the Modal -->
        <?php  $rand=rand(1,10000);
        ?>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal<?php echo $rand ?>">
  Open modal
</button>

<!-- The Modal -->
<div class="modal" id="myModal<?php echo $rand ?>" style="color:black">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Update Quntity</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
              <h3>    <?php echo $row['pname'];?></h3>
                 <h3> Product Id:   <?php echo $row['pid'];?></h3>
        <?php 
         $pid=$row['pid'];
             $query="SELECT*FROM allin WHERE pid='$pid'";
             $resultavai=$db->select($query);
          
              $rowavi=$resultavai->fetch_assoc();
        ?>
        
        <?php 
         $availability=$rowavi['Availability']-$row['quntity'];
         echo "Availability".$rowavi['Availability']."<br>";
         echo "Order".$row['quntity']."<br>";

         echo "In stack:". $availability;
        ?>
        <form method="post" action="">
          <input type="hidden" name="updateqyn" value="<?php echo $availability;?>">
          <input type="hidden" name="pid" value="<?php echo $row['pid'];?>">

          <input type="submit" name="qynupdate" value="Update">
          
        </form>

      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div></td>
      
      </tr>
      <?php }}?>
      <tr>
        <td colspan="6" style="text-align: right;">Grand Total(10% vat):<?php echo ($grand*.1)+$grand; ?></td>
        
      </tr>
      <tr>
        <td colspan="6" style="text-align:center;"><a class="btn btn-success" onclick="return confirm('Are You Sure Delivery The Products?')" href="?confirmActive=<?php echo Session::get("confirmuser")?>">Clear Delivery</a><a class="btn btn-danger" onclick="return confirm('Are You Sure Cancel The Delivery Products?')" href="?confirmcancel=<?php echo Session::get("confirmuser")?>">Cancel Delivery</a></td>
      </tr>
    </tbody>
  </table></div>
                        </div>
                      </div>
                    </div>
                  </section>
</div>
</div>
</div>
<?php include("Segment/Footer.php");?>
