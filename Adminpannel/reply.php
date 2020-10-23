<?php 

if($_GET['postid'])
  $id=$_GET['postid'];

?>





<?php include("Segment/Header.php");?>
        <div class="col-md-10 ">
       <div class="col-md-12 sidebarright">

            
          <div class="hedaing">





            <h2>Reply</h2>

<?php
  if(isset($_POST['submit'])){
      $To=$_POST['name'];
        $from=$_POST['from'];
          $subject=$_POST['subject'];
            $comment=$_POST['comment'];

      $result=mail ($To, $subject, $comment, $from);
       if($result){
       echo"<span class='alert alert-success'>message Successfully Send!</span>";
      }

    else{
              echo"<span class='alert alert-success'>message Not Send!</span>";
    
       }
     }

 ?>

          </div>








     <div class="block">  

                         <?php    
                        $query="SELECT*FROM contact WHERE id='$id' ";
                       $post=$db->select($query);
                      if($post){
               
                         while ($result=$post->fetch_assoc()) {

                            ?>     
                         <form action="reply.php?postid= $id" method="post">
            
                    <table class="form">
                    
                      
                        <tr>
                            <td>
                                <label>To</label>
                            </td>
                            <td>
                                  <input type="text" name="name" readonly value="<?php echo $result['email'];?>">
                            </td>
                        </tr>
                         <tr>
                            <td>
                                <label>From</label>
                            </td>
                            <td>
                                  <input type="text" name="from" >
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label>Subject</label>
                            </td>
                            <td>
                                  <input type="text" name="subject" >
                            </td>
                        </tr>
                         <tr>
                            <td>
                                <label>Comment</label>
                            </td>
                            <td>
                               <textarea class="tinymce" name="comment">  </textarea>
                            </td>
                        </tr>
                         
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