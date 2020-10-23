<?php 

if($_GET['postid'])
  $id=$_GET['postid'];
?>





<?php include("Segment/Header.php");?>
        <div class="col-md-10 ">
       <div class="col-md-12 sidebarright">

            
          <div class="hedaing">

            <h2> Edit Slide</h2>
          </div>
  
<?php if(isset($_POST['submit'])){
    $file_name = $_FILES['image']['name'];
   $heading=$_POST['heading'];
    $description=$_POST['description'];
   

     

        $query = "UPDATE main_slide
         SET  image='$file_name', heading='$heading',description='$description' WHERE id= '$id' ";
        $result = $db->update($query);
        if($result){
            echo'<div class="alert alert-success">
  <strong>Success!</strong> Data Successfully Updated.
</div>
';
        }
        else{
          
              echo"<span>Sorry Something is wrong</span>";
        }
       }





    


?>













     <div class="block">  

                         <?php    
                        $query="SELECT*FROM main_slide WHERE id='$id' ";
                       $post=$db->select($query);
                      if($post){
               
                         while ($result=$post->fetch_assoc()) {

                            ?>     
                         
                 <form action="editslide.php?postid=<?php echo $id?>" method="post" enctype="multipart/form-data">
                    <table class="form">
                      <tr>
                          <td ><img src="../img/<?php echo$result['image'];?> "style="width:100px;height:100px;" >
                              <input type="file" name="image">
                          </td>
                      </tr>
                      
                        <tr>
                            <td>
                                <label>Heading</label>
                            </td>
                            <td>
                                <input type="text"  name="heading" value="<?php echo $result['heading'];?>" class="medium" />
                            </td>
                        </tr>
                     
                    
                           <tr>
                            <td style="vertical-align: top; padding-top: 9px;">
                                <label> Description</label>
                            </td>
                            <td>
                       <textarea class="tinymce" name="description"> <?php echo $result['description'];?> </textarea>
                            </td>
                        </tr>

                        <tr>
                            <td></td>
                            <td>
                                <input type="submit" name="submit" Value="Update" class="btn btn-success" />
                            </td>
                        </tr>

                    </table>
                   
                    </form>
                        <?php } }?>
                    
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