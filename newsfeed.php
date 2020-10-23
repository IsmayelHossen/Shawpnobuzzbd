<?php 
include('segment/header.php');
?>
 <?php 
  if(isset($_POST['submit'])){
      $name=Session::get("name");
      $email=Session::get("email");
        $pname=$_POST['pname'];
        $text1=$_POST['text'];
        $text2=$text1;
        $date1=date('Y-m-d');
        $text2=str_replace("'", "\'", $text2);
        $pname=mysqli_real_escape_string($db->link,$pname);
        $text2=mysqli_real_escape_string($db->link,$text2);

    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_temp = $_FILES['image']['tmp_name'];

   
    $uploaded_image="images/newsfeed/".$file_name;

    move_uploaded_file($file_temp, $uploaded_image);
    if(empty($pname) || empty($text2)){
         echo '<script type="text/javascript">
            swal({   
   title: "Field Must Not Be Empty",   
      


});
            </script>';
    }
    else{
        $query="INSERT INTO newsfeed(pname,text1,date1,email,name,image) VALUES('$pname','$text2','$date1','$email','$name',' $uploaded_image')";
         $result=$db->insert($query);
         if($result){
             echo '<script type="text/javascript">
            swal({   
            title: "Successfully You Have Done Your Post",   
      


                });
            </script>';

         }
    }

  }

 ?>
  
  <!-- Main Container -->
  
  <section class="blog_post">
    <div class="container"> 
      <style type="text/css">
    .file{
    padding: 10px;
    background:#5fb0ab; 
    display:inline-block;
    color: #fff;
    text-align:right;
     }
     .photo{
    padding: 10px;
    background:#2dc187; 
  
    color: #fff;
      text-align:right;
     }
          .photo1{
    padding: 10px;
    background:#2dc187; 
  
    color: #fff;
      text-align:right;
     }
input[type="submit"] {
    padding: 10px;
    background:#41969d; 
    display:inline-block;
    color: #fff;
      text-align:right;
}


input[type="file"] {
    display: none;
}

  </style>
      <!-- row -->
      <div class="row"> 
        
        <!-- Center colunm-->
        <div class="col-xs-12 col-sm-12" id="center_column">
          <div class="center_column">
            <div class="page-title">
              <h2>PostS</h2>
            </div>

            <div class="col-xs-12 col-sm-12">
              <?php 
               $login=Session::get("login");
              if($login==true){
              ?>
              <div  class="newsfeed">
            <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group" style="margin-bottom: 1px;">
            
            
              <textarea name="pname"  style="padding-top:20px;font-family:Times;margin-bottom:3px;" class="form-control" colspan="5" rows="1" placeholder="Which Product You Have Baught From EasyShop "></textarea>
               <textarea name="text"  style="padding-top:20px;font-family:Times" class="form-control" colspan="5" rows="5" placeholder="Write Your Feeling About Our Products Which You Have Received Just Now"></textarea>
            </div>
            <label class="photo"> Add Photo
           <input type="file" size="60" name="image" >
           </label> 
           
         <input type="submit"  name="submit" value="Post">
        
          </form> 
        </div>
        <?php }?>
            </div>
            <ul class="blog-posts" >
              <?php 
                $query="SELECT*FROM newsfeed";
                $result=$db->select($query);
                while($row=$result->fetch_assoc()){

              ?>
              <li class="post-item">
                <article class="entry">
                  <div class="row">
                    <div class="col-sm-5">
                      <div class="entry-thumb"> <a href="single_post.html">
                        <figure><img style="margin-top:20px;" src="<?php echo$row['image'] ?>" alt="Blog"></figure>
                        </a> </div>
                    </div>
                    <div class="col-sm-7" style="margin-top:20px;">
                      <h3 class="entry-title"><a href="single_post.html"><?php echo$row['pname'] ?></a></h3>
                      <div class="entry-meta-data"> <span class="author"> <i class="fa fa-user"></i>&nbsp; by: <a href="#"><?php echo$row['name']; ?></a></span> <span class="cat"> <i class="fa fa-folder"></i> <span class="date"><i class="fa fa-calendar"></i>&nbsp; <?php echo $row['date1'] ?></span> </div>
                      <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i>&nbsp; <span>(5 votes)</span></div>
                      <div class="entry-excerpt"><?php echo$row['text1']; ?></div>
                      <a href="#" class="button read-more">Read more&nbsp; <i class="fa fa-angle-double-right"></i></a> </div>
                  </div>
                </article>
              </li>
              <?php }?>
             
            </ul>
            <div class="sortPagiBar">
              <div class="pagination-area " style="visibility: visible;">
                <ul>
                  <li><a class="active" href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- ./ Center colunm --> 
        <!-- Right colunm -->
       
        <!-- ./right colunm --> 
      </div>
      <!-- ./row--> 
    </div>
  </section>
  <!-- Main Container End --> 
   <!-- our clients Slider -->
  
  <!-- our clients Slider -->
  <?php 
include('segment/footer.php');
  ?>
  
  <!-- End Footer -->
  
  
   
  

</body>

<!-- Mirrored from htmlmystore.justthemevalley.com/fancy/version2/blog_right_sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Feb 2020 06:07:51 GMT -->
</html>