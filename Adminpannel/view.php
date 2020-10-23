<?php 

if($_GET['postid'])
  $id=$_GET['postid'];
?>





<?php include("Segment/Header.php");?>
        <div class="col-md-10 ">
       <div class="col-md-12 sidebarright">

            
          <div class="hedaing">

            <h2>View</h2>
          </div>

<?php
  if(isset($_POST['submit'])){
    echo"<script>window.location='inbox.php' ;</script>";
  }

 ?>











     <div class="block">  

                         <?php    
                        $query="SELECT*FROM contact WHERE id='$id' ";
                       $post=$db->select($query);
                      if($post){
               
                         while ($result=$post->fetch_assoc()) {

                            ?>     
                         <form action="view.php" method="post">
            
                    <table class="form">
                    
                      
                        <tr>
                            <td>
                                <label>Name</label>
                            </td>
                            <td>
                                <input type="text" name=""  value="<?php echo $result['name'];?>">  
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Email</label>
                            </td>
                            <td>
                                  <input type="text" name=""  value="<?php echo $result['email'];?>">
                            </td>
                        </tr>
                         <tr>
                            <td>
                                <label>Comment</label>
                            </td>
                            <td>
                          <textarea style="width: 300px;height:200px;" name="comment" form="usrform"><?php echo $result['comment'];?></textarea>
                            </td>
                        </tr>
                         <tr>
                          <td>date</td>
                          <td>  <input type="text" name=""  value="<?php echo $result['date'];?>"></td>
                        </tr>
                        <tr>
                          <td></td>
                          <td><input type="submit" name="submit" value="submit" class="btn btn-primary"></td>
                        </tr>
                    
                          
                    </table>
                   
                         <?php } }?>
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