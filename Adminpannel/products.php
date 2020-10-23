<?php include("Segment/Header.php");?>
          <div class="col-md-10 ">
       <div class="container">
       
            <h4 class="Welcomeh4">All Products</h4>
            <div class="row">
            	<div class="col-md-12 col-sm-12">
            		
            		 <div class="homecol4">
            		 	  <div class="block">        
                    <table  class="table  display datatable" id="example">
                    <thead>
                        <tr>
                            <th>Id</th>
                             <th>Brand</th>
                             <th>Brand Name</th>
                             <th>Product Name</th>
                             <th>Image</th>  
                             <th>Quntity</th>
                             <th>Price</th>
                           

                             <th>Delete</th>
                            
                             
                        </tr>
                    </thead>
                    <tbody>
          <?php    
            $query="SELECT*FROM allin";
            $Category=$db->select($query);
            if($Category){
                $i=0;
                while ($result=$Category->fetch_assoc()) {
                     $i++;
                      
                  
                 ?>

                        <tr class="odd gradeX">
                            <td><?php echo$i ?></td>
                            <td><?php echo $result['brand'];?></td>
              <td><?php echo $result['brandn'];?></td>
              <td><?php echo $result['ptitle'];
                    $pid=$result['pid'];
                    $query="SELECT*FROM productcolor WHERE pid='$pid'";
                    $result1=$db->select($query);
                    while($row1=$result1->fetch_assoc()){
                      echo"<br>Color Code:". $row1['colorcode'];
                    }
                                        $pid=$result['pid'];
                    $query="SELECT*FROM size WHERE pid='$pid'";
                    $result1=$db->select($query);
                    while($row1=$result1->fetch_assoc()){
                      echo"<br>Size:". $row1['size1'];
                    }
              ?></td>
              <td><img width="50px;" src="../images/products/<?php echo $result['image'];?>"></td>

              <td><?php 
              if($result['Availability']==0){
                 echo"<span style='color:red'>Stock Out</span>";
              }
               else{
                echo $result['Availability'];
               }
              ?></td>
               <td><?php echo $result['amount'];?></td>


              

             


      <td><a onclick="return confirm('Are You Sure Want To Delete?')" href="products.php?pid=<?php echo$result['pid']; ?>">Delete</a></td>
       
               
     
          
                        </tr>
                        <?php }}?>
                    

                    
                        
                    </tbody>
                </table>
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


          </div>
           
       

         </div>
             

    
  
</div>
</div>
<?php include("Segment/Footer.php");?>


