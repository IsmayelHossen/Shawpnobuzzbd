<?php include("Segment/Header.php");?>
          <div class="col-md-10 ">
       <div class="container">
       
            <h4 class="Welcomeh4">Welcome to Home page</h4>
            <div class="row">
                <h3 class="homesummary">Today:<?php echo date("d/m/Y");?></h3>
            	<div class="col-md-4 col-sm-12">
            		
            		 <div class="homecol4">
            		 	<h3>Today Total Visitors <br><span></span></h3>
                         <?php 
                         $date1=date("d/m/Y");
                         $sum=0;
                           $query="SELECT*FROM customer_order WHERE date2='$date1' AND NOT payment='Confirm Please' ";
                           $result=$db->select($query);
                           while ($row=$result->fetch_assoc()) {
                             $sum=$row['quntity']+$sum;
                             Session::set("month",$row['date4']);

                           }
                            echo $sum;
                        ?>
            		 </div>
            	</div>

            	  <div class="col-md-4 col-sm-12">
            		
            		 <div class="homecol4">
            		 	<h3>Total Customers</h3>
                        <?php 
                         $date1=date("d/m/Y");
                           $query="SELECT*FROM customer_order WHERE date2='$date1' ";
                           $result=$db->select($query);
                           $count=mysqli_num_rows($result);
                           echo $count;
                        ?>
            		 </div>
            	</div>
            	  <div class="col-md-4 col-sm-12">
            		
            		 <div class="homecol4">
            		 	<h3>Total Earn </h3>
                         <?php 
                         $date1=date("d/m/Y");
                         $sum=0;
                           $query="SELECT*FROM customer_order WHERE date2='$date1' AND NOT payment='Confirm Please' ";
                           $result=$db->select($query);
                           while ($row=$result->fetch_assoc()) {
                             $sum=$row['grandtotal']+$sum;

                           }
                            echo $sum;
                        ?>
            		 </div>
            	</div>
            </div>

               

                <div class="row">
                <div class="col-md-12 col-sm-12">
                    <h3 class="homesummary">All Summery</h3>
                     <div class="homecol4">
                          <div class="block">        
                    <table  class="table  display datatable" id="example">
                    <thead>
                        <tr>
                            <th>Id</th>
                             <th>Phone</th>
                             <th>Quntity</th>
                             <th>Grand Total</th>
                             <th>Order Date</th>
                              <th>Confirm Date</th>
                                                   

                                                      
                             
                        </tr>
                    </thead>
                    <tbody>
          <?php    
            $query="SELECT*FROM customer_order WHERE status=1 ";
            $Category=$db->select($query);
            if($Category){
                $i=0;
                $quntity=0;
                $grandtotal=0;
                while ($result=$Category->fetch_assoc()) {
                     $i++;
                      
                  
                 ?>

                        <tr class="odd gradeX">
                            <td><?php echo$i ?></td>
                            <td><?php echo $result['mobile'];?></td>
              <td><?php 
                $quntity=$result['quntity']+$quntity;
               $grandtotal=$result['grandtotal']+$grandtotal;
              echo $result['quntity'];?></td>
              <td><?php echo $result['grandtotal'];?></td>
             
               <td><?php echo $result['date1'];?></td>

               <td><?php echo $result['confirmd'];?></td>


                         
       
               
     
          
                        </tr>
                         <?php }?>
                
                        <?php }?>
                    

                    
                        
                    </tbody>
                </table>
                <?php echo $quntity; ?>
                               
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


