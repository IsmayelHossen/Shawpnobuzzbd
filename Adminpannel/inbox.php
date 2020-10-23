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
                             <th>Order Date</th>
                             <th>Confirm Date</th>
                             <th>Quntity</th>

                             <th>Grand Total</th>
                             <th>Phone </th>
                           <th>Email</th>

                             <th>Delete</th>
                            
                             
                        </tr>
                    </thead>
                    <tbody>
          <?php    
            $query="SELECT*FROM customer_order WHERE status=1 ";
            $Category=$db->select($query);
            if($Category){
                $i=0;
                while ($result=$Category->fetch_assoc()) {
                     $i++;
                      
                  
                 ?>

                        <tr class="odd gradeX">
                            <td><?php echo$i ?></td>
                            <td><?php echo $result['date3'];?></td>
              <td><?php echo $result['confirmd'];?></td>
              <td><?php echo $result['quntity'];?></td>
              <td><?php echo$result['grandtotal']?></td>
               <td><?php echo $result['mobile'];?></td>
                <td><?php echo $result['email'];?></td>




              

             


      <td><a onclick="return confirm('Are You Sure Want To Delete?')" href="?">Delete</a></td>
       
               
     
          
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


