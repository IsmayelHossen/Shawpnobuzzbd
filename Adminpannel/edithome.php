


<?php 
  if(isset($_GET['postid']))
 {
   $id=$_GET['postid'];

 }
 error_reporting(0);

?>









<?php include("Segment/Header.php");?>
        <div class="col-md-10 ">
       <div class="col-md-12 sidebarright">

            
          <div class="hedaing">

            <h2> Edit Home</h2>
          </div>
  
                   <?php         

     if($_SERVER['REQUEST_METHOD'] == "POST"){
      $heading=$_POST['heading'];
       $heading_description=$_POST['heading_description'];
        $title=$_POST['title'];
         $title_description=$_POST['title_description'];
        





        $query = "UPDATE home
         SET  heading='$heading', heading_description='$heading_description',title='$title',title_description='$title_description' where id= ' $id' ";
        $result = $db->update($query);
        if($result){
            echo"<span>Update successfully</span>";
        }
        else{
          
              echo"<span>Sorry Something is wrong</span>";
        }
       }
    ?>
          
               




                <div class="block">  

                         <?php    
                        $query="SELECT*FROM home WHERE id='$id'";
                       $post=$db->select($query);
                      if($post){
               
                         while ($result1=$post->fetch_assoc()) {

                            ?>     
                         
                 <form action="edithome.php?postid=<?php echo $id?>" method="post" enctype="multipart/form-data">
                    <table class="form">
                      
                        <tr>
                            <td>
                                <label>Heading</label>
                            </td>
                            <td>
                                <input type="text"  name="heading" value="<?php echo $result1['heading'];?>" class="medium" />
                            </td>
                        </tr>
                     
                    
                           <tr>
                            <td style="vertical-align: top; padding-top: 9px;">
                                <label>Heading Description</label>
                            </td>
                            <td>
                       <textarea class="tinymce" name="heading_description"> <?php echo $result1['heading_description'];?> </textarea>
                            </td>
                        </tr>


                         <tr>
                            <td>
                                <label>Title</label>
                            </td>
                            <td>
                                <input type="text" name="title"  value="<?php echo $result1['title'];?>" />
                            </td>
                        </tr>
                        
                           <tr>
                            <td style="vertical-align: top; padding-top: 9px;">
                                <label>Title Description</label>
                            </td>
                            <td>
                       <textarea class="tinymce" name="title_description"> <?php echo $result1['title_description'];?> </textarea>
                            </td>
                        </tr>
					            	<tr>
                            <td></td>
                            <td>
                                <input type="submit" name="submit" Value="Update" />
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
<?php include("Segment/Footer.php");?>
