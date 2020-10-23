

<link rel="stylesheet" type="text/css" href="css1/style.css">




<?php include("Segment/Header.php");?>
           <div class="col-md-10 ">
       <div class="col-md-12 sidebarright">
        
          <div class="hedaing">

            <h2>Stuff Members</h2>
          </div>
                  <?php
                   if(isset($_GET["delid"]))
                   {
                      $id=$_GET["delid"];

                   
                     $query="DELETE FROM main_slide WHERE id='$id'";
                     $result=$db->delete($query);
                     if($result){
                      echo"Deleted Successfully";
                     }
                     else{
                       echo"Data not delete";
                     }

                      }


                  ?> 


                  <div class="table-responsive"> 
                   <table class="table table-scripted">  
          <thead>
            <tr >
              <th>No.</th>
              <th>image</th>
              <th>Heading</th>
              <th>Description</th>
              <th>Action</th>
            
            </tr>
          </thead>
          <tbody>


             <?php    
            $query="SELECT*FROM main_slide";
            $Category=$db->select($query);
            if($Category){
              $i=0;
              while ($result=$Category->fetch_assoc()) {
                $i++; ?>
            <tr>
              <td><?php echo$result['id'];?></td>
               
              <td ><img src="../img/<?php echo$result['image'];?> "style="width:100px;height:100px;" ></td>
               <td><?php echo$result['heading'];?></td>
                   <td><?php echo$result['description'];?></td>


            
            
              
              <td><a href="editslide.php?postid=<?php echo $result['id']?>">Edit</a> || <a onclick="return confirm('Are you want to delete?')" href="?delid=<?php echo $result['id']?>">Delete</a></td>
            </tr>
              <?php }}?>
          
          </tbody>
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
</div>
<?php include("Segment/Footer.php");?>
