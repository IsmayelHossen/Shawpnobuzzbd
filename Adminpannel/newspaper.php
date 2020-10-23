
<?php include("Segment/Header.php");?>
<?php
  $email =Session::get("email");
    $name =Session::get("name");
    $cat=Session::get("elc");



if(isset($_POST['submit'])){
      $postid=$_POST['postid'];
      $postd=$_POST['postd'];

        $postt=$_POST['postt'];
         $postt=str_replace("'", "\'", $postt);
          $postd=str_replace("'", "\'", $postd);
        
         $intnat=$_POST['intnat'];
         $country=$_POST['country'];
        $district=$_POST['district'];
         $categories=$_POST['categories'];
         $topnormal=$_POST['topnormal'];
         $date1=date('d/m/y');

       
       
        

                          

                                   


        foreach($_FILES['upload_images']['name'] as $key=>$val){
                                 
                                 
$upload_dir = "C:/xampp/htdocs/newspaper/public/images/";
$upload_file = $upload_dir.$_FILES['upload_images']['name'][$key];
$upload_dir1="public/images/";
$filename =$upload_dir1.$_FILES['upload_images']['name'][$key];
 


if(move_uploaded_file($_FILES['upload_images']['tmp_name'][$key],$upload_file)){

           
        $query="INSERT into pimages(image,pid)VALUES('$filename','$postid') ";
          $result=$db->insert($query);
         
      }
    }
     
        $query="INSERT INTO newspaper(postid,postt,postdetails,int_nat,country,district,image,categories,topnormal,date1) VALUES('$postid','$postt','$postd','$intnat','$country','$district','$filename','$categories','$topnormal','$date1')";
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
                          <label>Post Id</label>
                          <input type="number" name="postid" class="form-control" required="" style="display: inline-block;" placeholder="<?php 
                           $query="SELECT*FROM newspaper";
                           $result=$db->select($query);
                           $totalp=mysqli_num_rows($result);
                          echo $totalp; ?>">
                          
                        </div>
                           <div class="form-group">
                          <label>Post Title</label>
                         <input type="text" name="postt" class="form-control" required="">
                          
                        </div>
                         <div class="form-group">
                          <label>Post Details</label>
                          
                          <textarea type="text" name="postd" class="form-control" required=""></textarea>
                        </div>
                         <div class="form-group">
                          <label>International/National</label>
                          <input type="text" name="intnat" class="form-control" required="">
                          
                        </div>
                         <div class="form-group">
                          <label>Country</label>
                          <input type="text" name="country" class="form-control" required="">
                          
                        </div>
                         <div class="form-group">
                          <label>District</label>
                          <input type="text" name="district" class="form-control" >
                          
                        </div>
                            <div class="form-group">
                          
                           <select name="categories" class="form-control">
                            <option value="national">National</option>
                            <option value="sports">Sports</option>
                            <option value="international">International</option>
                            <option value="politics">Politics</option>
                            <option value="crime">Crime</option>
                            <option value="entairtainment">Entairtainment</option>

                          </select>
                         
                          
                        </div>
                        <div class="form-group">
                          <label>topnews/normal</label>
                          
                          <select name="topnormal" class="form-control">
                            <option value="top">Top News</option>
                            <option value="leftnews">Left News</option>
                            <option value="rightnews">Right News</option>
                            <option value="topbottom">Top Bottom</option>
                            <option value="normal">normal</option>
                            <option value="FooterAT">Footer Above Top</option>

                          </select>
                          
                        </div>


                            
                        
                        
                         <div class="form-group">
                          <label >Select Photo(Maximum<span class="badge">5</span>)</label>

                               <input type="file" name="upload_images[]" id="image_file" multiple style="display: inline-block;"  required="">
                        
                         

                        </div>
                        
                        
                        <input type="submit" name="submit" value="submit" class="form-control btn btn-primary">
                      </form>
                   
                        
</div>
</div>
<?php include("Segment/Footer.php");?>
