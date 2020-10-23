
<?php include("Segment/Header.php");?>
<?php
  $email =Session::get("email");
    $name =Session::get("name");
    $cat=Session::get("elc");

if(isset($_POST['submitcolor'])){
          $pid=$_POST['pid'];

                   foreach($_FILES['upload_images']['name'] as $key=>$val){
                                 
                                 
$upload_dir = "../images/products/";
$upload_file = $upload_dir.$_FILES['upload_images']['name'][$key];
$filename = $_FILES['upload_images']['name'][$key];
 


if(move_uploaded_file($_FILES['upload_images']['tmp_name'][$key],$upload_file)){

           $colorcode=rand(0,1000000);
           $count=count($_FILES['upload_images']['name']);
        
        $query="INSERT into productcolor(image,pid,colorcode)VALUES('$filename','$pid','$colorcode') ";
          $result=$db->insert($query);

                       if($result){
                         $msg="<span class='alert alert-success'> Successfully Inserted Color Image";
                  echo $msg;
            }
            else{
               $msg="<span class='alert alert-danger'>Your Ads Not Post</span>";
                  echo $msg;

            }

        }

}
}       

if(isset($_POST['submit'])){
      $categories=$_POST['categories'];
        $pname=$_POST['pname'];
         $bname=$_POST['bname'];
         $brand=$_POST['brand'];
         $rprice=$_POST['rprice'];
        $price=$_POST['price'];
        $Availability=$_POST['Availability'];
        $Overview=$_POST['Overview'];
        $pid=$_POST['pid'];
        $type=$_POST['type'];
       
        

                          
                          $length=$_FILES['upload_images'];
                                 $count1=count( $length);
                               
                                   


        foreach($_FILES['upload_images']['name'] as $key=>$val){
                                 
                                 
$upload_dir = "../images/products/";
$upload_file = $upload_dir.$_FILES['upload_images']['name'][$key];
$filename = $_FILES['upload_images']['name'][$key];
 


if(move_uploaded_file($_FILES['upload_images']['tmp_name'][$key],$upload_file)){

           
        $query="INSERT into pimages(image,pid)VALUES('$filename','$pid') ";
          $result=$db->insert($query);
         
      }
    }
     
            $query="INSERT INTO allin(categories,ptitle,amount,Availability,Overview,pid,image,brand,type,regularp,brandn) VALUES('$categories','$pname','$price','$Availability','$Overview','$pid','$filename','$brand','$type','$rprice','$bname')";
            $result=$db->insert( $query);
            if($result){
                         $msg="<span class='alert alert-success'>Your Ads Successfully Inserted!</span>";
                  echo $msg;
            }
            else{
               $msg="<span class='alert alert-danger'>Your Ads Not Post</span>";
                  echo $msg;

            }


  
 

}
?>


           <div class="col-md-10 ">
       <div class="col-md-12 sidebarright">
        
          <div class="hedaing">

            <h2>Add Products</h2>
            <?php if(isset($msg)){
              echo $msg;}?>
          </div>

         <form action="" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                          <label>Categories</label>
                          <select name="categories" id="select" class="form-control" required="" style="display: inline-block;">
                           
                    <option value="Electronics">Electronics</option></select>
                        </div>
                         <div class="form-group">
                          <label>Categories Products</label>
                          <select name="brand" id="select" class="form-control" required="" style="display: inline-block;">
                           

                        <option value="Mobiles">Mobiles</option>
                         <option value="Laptop">Laptop</option>
                         <option value="Head Phone">Head Phone</option>
                         <option value="Pendrive">Pendrive</option>
                          <option value="KeyBoard">KeyBoard</option>
                          <option value="Cameras">Cameras</option>
                           <option value="Mouse">Mouse</option>
                           <option value="Ear Phone">Ear Phone</option>
                           <option value="SoundBox">SoundBox</option>
                          </select>
                           </div>
                          <div class="form-group">
                          <label>Brand Name</label>
                          <select name="bname" id="select" class="form-control" required="" style="display: inline-block;">
                           

                        <option value="Samsung">Samsung(M)</option>
                         <option value="Oppo">Oppo(M)</option>
                         <option value="Sony">Sony(H)</option>
                         <option value="Atech">Atech(H,Mouse)</option>
                          <option value="Waton">Waton(M,P)</option>
                          <option value="Twinmous">Twinmous(P)</option>
                        <option value="Walton">Walton(P)</option>
                        <option value="Canon">Canon(C)</option>
                        <option value=" ">blank</option>
                        

                          </select>
                           </div>
                           <div class="form-group">
                          <label>Product Name</label>
                          <input type="text" name="pname" class="form-control" required="">
                          
                        </div>

                             <div class="form-group">
                          <label>Type</label>
                          <select name="type" id="select" class="form-control" required="" style="display: inline-block;">
                           
                <option value="Featured">Featured </option>
                 <option value="Special">Special</option>
                 <option value="Normal">Normal</option>
             </select>
                        </div>
                         
                        <div class="form-group">
                          <label>Special Price</label>
                          <input type="text" name="price" class="form-control" required="">
                          
                        </div>
                          <div class="form-group">
                          <label> Regular Price</label>
                          <input type="text" name="rprice" class="form-control" required="">
                          
                        </div>
                        <div class="form-group">
                          <label>Availability</label>
                          <input type="number" name="Availability" class="form-control" required="">
                          
                        </div>
                        
                         <div class="form-group">
                          <label>Overview</label>
                          <textarea type="text" name="Overview" class="form-control" required=""></textarea>
                        
                        </div>
                         <div class="form-group">
                          <label >Select Photo(Maximum<span class="badge">5</span>)</label>

                               <input type="file" name="upload_images[]" id="image_file" multiple style="display: inline-block;" >
                        
                         

                        </div>
                         <div class="form-group">
                          <label>Product Id</label>
                          <input type="number" name="pid" class="form-control" required="" style="display: inline-block;" placeholder="<?php 
                           $query="SELECT*FROM allin";
                           $result=$db->select($query);
                           $totalp=mysqli_num_rows($result);
                          echo $totalp+100; ?>">
                          
                        </div>
                        
                        <input type="submit" name="submit" value="submit" class="form-control btn btn-primary">
                      </form>
                        <h2>Same product different color image</h2>
                               <form action="" method="post" enctype="multipart/form-data">

                           
                  

                           

                                                 <div class="form-group">
                          <label >Select Photo(Maximum<span class="badge">5</span>)</label>

                               <input type="file" name="upload_images[]" id="image_file" multiple style="display: inline-block;" >
                        
                         

                        </div>
                         <div class="form-group">
                          <label>Product Id</label>
                          <input type="number" name="pid" class="form-control" required="" style="display: inline-block;" placeholder="<?php 
                           $query="SELECT*FROM allin ORDER BY pid DESC";
                           $result=$db->select($query);
                           $row=$result->fetch_assoc();
                           $totalp=mysqli_num_rows($result);
                          echo $row['pid']; 
                          echo ",".$totalp;
                          ?>">
                          
                        </div>
                        
                        <input type="submit" name="submitcolor" value="submit" class="form-control btn btn-primary">
                      </form>

                                          <h2>Size Of Product</h2>
                               <form action="" method="post" enctype="multipart/form-data">

                           
                  

                           

                                                 <div class="form-group">
                          <label >Size of products</label>

                               <input type="rext" name="size" class="form-control" >
                        
                         

                        </div>
                         <div class="form-group">
                          <label>Product Id</label>
                          <input type="number" name="pid" class="form-control" required="" style="display: inline-block;" placeholder="<?php 
                           $query="SELECT*FROM allin ORDER BY pid DESC";
                           $result=$db->select($query);
                           $row=$result->fetch_assoc();
                           $totalp=mysqli_num_rows($result);
                          echo $row['pid']; 
                          echo ",".$totalp;
                          ?>">
                          
                        </div>
                        
                        <input type="submit" name="submitsize" value="submit" class="form-control btn btn-primary">
                      </form>
                  
    </div>              
</div>
</div>
<?php include("Segment/Footer.php");?>
