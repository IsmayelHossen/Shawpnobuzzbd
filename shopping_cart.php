<?php 
include('segment/header.php');

?>
<?php 
$sid=Session::get('sid');
if(isset($_POST['Coupon'])){
 $ccode=$_POST['ccode'];
 $cvalue=$_POST['cvalue'];
  if($ccode==$cvalue){
    $query="UPDATE cart SET ccode='$cvalue'  WHERE sid='$sid' ";
    $result=$db->update($query);

     echo'<script>swal({
  title: "Good job!",
  text: "You Are So Lucky.You got 20% discount for all products",
  icon: "success",
})</script>';
  }
  else{
     echo'<script>swal({
  title: "Opps!",
  text: "Sorry Coupon Code is not Vaild",
  icon: "error",
})</script>';
  }
 }
?>
<?php 
$sid=Session::get("sid");
if(isset($_GET['delcart'])){
      $delcart=$_GET['delcart'];
      $query="DELETE FROM cart WHERE cartid=$delcart AND sid='$sid' ";
      $delete=$db->delete($query);

}
?>
 
  <?php
  
if(isset($_POST['updatequntity'])){
    $quntity=$_POST['quntity'];
    $cartid=$_POST['cartid'];
     $pid=$_POST['pid'];
     $sid=Session::get("sid");
    $quntity1=mysqli_real_escape_string($db->link,$quntity);
    $cartid=mysqli_real_escape_string($db->link,$cartid);
     $pid=mysqli_real_escape_string($db->link,$pid);
     if($quntity<=0){
          echo"<script>window.location='shopping_cart.php'</script>";
     }
     else{
      $queryq="SELECT*FROM allin WHERE pid=$pid";
  $resultq=$db->select($queryq);
  $qty=$resultq->fetch_assoc();
  $qty1=$qty["Availability"];
  if($qty['Availability']<$quntity1){
       echo'<script type="text/javascript">
            swal({
  title: "Sorry You Cannnot Buy More Than Availability",
  text: "Thanks",
  icon: "error",
  button: "Ok!",
});
            </script>';
  }
  else{
    $updatecart="UPDATE cart SET quntity=$quntity1 WHERE sid='$sid' AND pid=$pid";
    $updatecart_result=$db->update($updatecart);
    $updatecart="UPDATE order_cancel SET quntity=$quntity1 WHERE sid='$$sid' AND pid=$pid";
    $updatecart_result=$db->update($updatecart);
}
}
}

   ?>
  <!-- Main Container -->
  <section class="main-container col1-layout">
    <div class="main container">
      <div class="col-main">
        <div class="cart">
          
          <div class="page-content page-order"><div class="page-title">
            <h2>Shopping Cart</h2>
          </div>
            
            
            <div class="order-detail-content">
              <div class="table-responsive">
                <table class="table table-bordered cart_summary">
                  <thead>
                    <tr>
                      <th class="cart_product">Product</th>
                      <th>Description</th>
                    
                      <th class="text-center">Unit price</th>
                      <th class="text-center">Qty</th>
                      <th class="text-center">Total</th> 
                      <th class="action"><i class="fa fa-trash-o"></i></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $all_total=0;
                    //$email=Session::get("email");
                     $sid=Session::get("sid");
                
                    $query="SELECT*FROM cart WHERE sid='$sid' AND NOT order1=1 ";
                    $result=$db->select($query);
                    $count=mysqli_num_rows($result);
                    if($count>=1){
                      while($row=$result->fetch_assoc()){
                  ?>
                    <tr>
                      <?php 
                       $colorcode=$row['colorcode'];
                        $query="SELECT*FROM productcolor WHERE colorcode='$colorcode' ";
                        $resultcolor=$db->select($query);
                        $countcolor=mysqli_num_rows($resultcolor);
                        if($countcolor==1){
                        $rowcolor=$resultcolor->fetch_assoc();
                      ?>
                      <td class="cart_product"><a href="#"><img src="images/products/<?php echo$rowcolor['image'] ?>" alt="Product"></a></td>
                      <?php } else{?>
                        <td class="cart_product"><a href="#"><img src="images/products/<?php echo$row['image'] ?>" alt="Product"></a></td>
                        <?php }?>
                      
                      <td class="cart_description"><p class="product-name"><a href="#"><?php echo $row['pname'];?> </a></p>
                        <small>
                             <?php 
                       $colorcode=$row['colorcode'];
                        $query="SELECT*FROM productcolor WHERE colorcode='$colorcode' ";
                        $resultcolor=$db->select($query);
                        $countcolor=mysqli_num_rows($resultcolor);
                        if($countcolor==1){
                        $rowcolor=$resultcolor->fetch_assoc();
                      ?>
                          <a href="#">Color Code:<?php echo$row['colorcode'];?></a>
                          <?php } else{ echo""; }?>
                               
                            

                        </small><br>
                        <small>
                           <?php 
                       $pid=$row['pid'];
                       $size=$row['size'];
                        $query="SELECT*FROM size WHERE pid='$pid' AND size1='$size' ";
                        $resultcolor=$db->select($query);
                        $countcolor=mysqli_num_rows($resultcolor);
                        if($countcolor==1){
                        $rowcolor=$resultcolor->fetch_assoc();
                      ?>
                          <a href="#">Size :<?php echo$row['size'];?></a>
                         <?php } else{ echo"";}?>
                        </small></td>
                     
                      <td class="price"><span><?php echo $row['price'];?></span></td>
                      <td class="qty">
                        <form action="" method="post" class="form-inline">
                        <input class="form-control input-sm" type="number" name="quntity" value="<?php echo $row['quntity'];?>">
                        <input class="form-control input-sm" type="hidden" name="cartid" value="<?php echo $row['cartid'];?>">
                           <input class="form-control input-sm" type="hidden" name="pid" value="<?php echo $row['pid'];?>">
                        <input type="submit"  class="btn btn-primary" name="updatequntity" value="Update">
                        </form>
                    </td>
                      <td class="price"><span>Tk-<?php
                          $total=$row['quntity']*$row['price'];
                          $all_total=$total+$all_total;
                       echo$total;?></span>
                      </td>
                      <td class="action"><a onclick="return confirm('Are You Sure Want To Delete?')" href="?delcart=<?php echo$row['cartid']; ?>"><i class="icon-close"></i></a></td>
                    </tr>
                    <?php }}else{
                      echo"<script>window:location='index.php';</script>";
                    }

                      ?>

                    
                  </tbody>
            <!-- <tfoot>
                    <tr class="first last">
                      <td colspan="50" class="a-right last"><button type="button" title="Continue Shopping" onclick="setLocation('index.php')"></button>
                        <button type="submit" name="update_cart_action" value="update_qty" title="Update Cart" class="button btn-update"><span>Update Cart</span></button>
                        <button type="submit" name="update_cart_action" value="empty_cart" title="Clear Cart" class="button btn-empty" id="empty_cart_button"><span>Clear Cart</span></button></td>
                    </tr>
                  </tfoot> -->
                </table>
                <a href="index.php"><img style="max-width:160px" src="images/shop.png"></a>
                
              </div>
              
            </div>
            
            <div class="cart-collaterals row">
            
            <div class="col-sm-6">
              <div class="discount">
                <h3>Discount Codes</h3>
                <style type="text/css">
input.input-text, select, textarea {
  background-color: #fff;
  border: 1px #b5acac solid;
  padding: 8px 10px;
  outline: none;
  color: black;
}
                </style>
                <form  action="shopping_cart.php" method="post">
                  <label for="coupon_code">Enter your coupon code if you have one.</label>
                  <input type="hidden"   name="cvalue" value="Yes">
                  <input type="text" class="input-text fullwidth" id="coupon_code" name="ccode" >
                  <input type="submit" class="btn btn-danger button coupon " name="Coupon"  value="Apply Coupon">
                </form>
              
              </div>
            </div>
            <div class="totals col-sm-6">
              <h3>Shopping Cart Total</h3>
              <div class="inner">
                <table id="shopping-cart-totals-table" class="table shopping-cart-table-total">
                  <colgroup>
                  <col>
                  <col width="1">
                  </colgroup>
                  <tbody>
                    <tr>
                      <td style="" class="a-left" colspan="1"> Subtotal </td>
                      <td style="" class="a-right"><span class="price">Tk-<?php echo$all_total;?></span></td>
                    </tr>
                   
                  </tbody>
                  <tfoot>
                   
                  </tfoot>
                  
                </table>
                <ul class="checkout">
                  <li>
                    <?php
                     $login=Session::get("login");
                     if($login==true){?>
                    <a  href="checkout.php"><img style="max-width:200px;" src="images/check.png"></a>
                    <?php } else{ ?>
                      <a  href="account_page.php"><img style="max-width:200px;" src="images/check.png"></a>
                      <?php }?>
                  </li>
                  <br>
                  
                  <br>
                </ul>
              </div>
              <!--inner--> 
              
            </div>
          </div>
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
<!-- mobile menu -->

 
</body>

<!-- Mirrored from htmlmystore.justthemevalley.com/fancy/version2/shopping_cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Feb 2020 06:06:59 GMT -->
</html>