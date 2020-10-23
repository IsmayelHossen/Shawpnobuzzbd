

<?php include("Segment/Header.php");?>
<link rel="stylesheet" type="text/css" href="css1/style.css">
  <?php 
           error_reporting(0);

                 if($_GET['delid']){

                    $id=$_GET['delid'];
                      $query="DELETE FROM adminmsg WHERE id='$id' ";
                      $result=$db->delete($query);
                      if($result){
                          echo"Message Deleted Successfully.";
                      }
                 }


             ?>




                <div class="adminmsg">
                <div class="hedaing">

                  <h2>Client Message</h2>
                  </div>
               
                 
               <div class="table-responsive"> 
           <table class="table table-scripted">  
          <thead>
            <tr >
              <th>No.</th>
              <th>Name</th>
                <th>Email</th>
              <th>Comment</th>
               <th>Date</th>
               <th>Action</th>
             
            
            </tr>
          </thead>
             <?php    
            $query="SELECT*FROM contact_msg; ";
            $Category=$db->select($query);
            if($Category){
              $i=0;
              while ($result=$Category->fetch_assoc()) {
                $i++; ?>
            <tr>
              <td><?php echo$result['id'];?></td>
               
                 <td><?php echo$result['name'];?></td>
               <td><?php echo$result['email'];?></td>
                  <td><?php echo$result['comment'];?></td>
                
                             <td><?php echo$result['date1'];?></td>

            
            
              
              <td><a onclick='return confirm("Are You Sure To Delete?")' href="?delid=<?php echo $result['id']?>">Delete</a> </td>
            </tr>
              <?php }}?>
          
          </tbody>


           </div>
         
        
                  

                

         
           
  </table>
</div>
</div>

 </div>





<script type="text/javascript">
        $(document).ready(function () {
            setupLeftMenu();
            $('.datatable').dataTable();
      setSidebarHeight();
        });
    </script>
         </div>

             

    
  </div>
</div>
<div>
  
<?php include("Segment/Footer.php");?>
