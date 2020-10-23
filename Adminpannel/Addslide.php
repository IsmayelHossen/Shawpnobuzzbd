
<?php include("Segment/Header.php");?>
         <div class="col-md-10 ">
       <div class="col-md-12 sidebarright">
          <div class="hedaing">
             <h2>Add Slides</h2>
          </div>
 
               

 <?php
               

     if(isset($_POST['submit'])){

    
     $permited  = array('jpg', 'jpeg', 'png', 'gif');
       $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_temp = $_FILES['image']['tmp_name'];
      $div = explode('.', $file_name);
    $file_ext = strtolower(end($div));
    $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
    $uploaded_image = "../img/".$unique_image;
    move_uploaded_file($file_temp, $uploaded_image);
      $heading=$_POST['heading'];

      $description=$_POST['description'];
     
         
   
   
        
        
        
    
    $query = "INSERT INTO  main_slide(image,heading,description) VALUES('$uploaded_image','$heading','$description')";
    $inserted_rows = $db->insert($query);
    if ($inserted_rows) {
     echo "<span class='success'>Member Inserted Successfully.</span>";
    }else {
     echo "<span class='error'>Member Not Inserted !</span>";
    }
    


   }
 
   
     
    ?>

     <form action="Addslide.php" method="post" enctype="multipart/form-data">
                  
                          <div class="form-group">
                      
                                <label>Choose Image</label>
                           
                                <input type="file"  name="image" placeholder="Browse image... 
                       class="form-control" >
                        </div>
                            <div class="form-group " >
                           
                                <label>Heading</label>
                           
                            <input type="text" name="heading" class="form-control">
                               </div>
                       
                              <div class="form-group " style="vertical-align: top; padding-top: 9px;">
                           
                                <label>Description</label>
                           
                                <textarea class="tinymce" name="description"></textarea>
                               </div>

                     
                    
                          <div>
                                <input type="submit" name="submit" Value="Save" class="btn btn-primary" />
                            </div>
                        
                  
                    </form>
                </div>
            </div>
        </div>



<!-- Load TinyMCE -->
    <script src="js/tiny-mce/jquery.tinymce.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            setupTinyMCE();
            setDatePicker('date-picker');
            $('input[type="checkbox"]').fancybutton();
            $('input[type="radio"]').fancybutton();
        });
    </script>


         </div>
             

    
  </div>
</div>
</div>
<?php include("Segment/Footer.php");?>


