<link rel="stylesheet" type="text/css" href="css1/style.css">

<?php include("Segment/Header.php");?>
         <div class="col-md-10 ">
       <div class="col-md-12 sidebarright">
          <div class="hedaing">
             <h2></h2>
          </div>

              
                <div class="userlist" style="background: #234051;padding: 6px 8px;color:#ddd">

                <div class="block">        
                    <table  class="table  display datatable" id="example" style="color:#ddd">
					<thead>
						<tr>
						                  	<th>Id</th>
						                  	<th>Quntity</th>
                             <th>Email</th>
                             <th>Mobile</th>

						              	<th>Grand Total</th>
                            <th>Payment</th>
                            <th>Admin Status</th>
                           
                            <th>Date</th>
                            <th>Details</th>
                            
                             
						</tr>
					</thead>
					<tbody>
          <?php    
            $query="SELECT*FROM customer_order WHERE NOT status=1";
            $Category=$db->select($query);
            if($Category){
            	$i=0;
            	while ($result=$Category->fetch_assoc()) {
                     $i++;
                      
                  
            	 ?>

						<tr class="odd gradeX">
							<td><?php echo$i ?></td>
							<td><?php echo $result['quntity'];?></td>
              <td><?php echo $result['email'];?></td>
              <td><?php echo $result['mobile'];?></td>
              <td><?php echo $result['grandtotal'];?></td>
              <td><?php 
                  echo $result['payment'];
                             


              ?></td>
              
               <td>
                   <?php
                              if($result['status']=='2'){
                                echo"<p style='color:red'>Canceled By Admin</p>";
                             }
                              else {
                               echo"<p style='color:#ff0404'>Not Confirm</p>"; 
                             }


                  
                    ?>

               </td>
              <td><?php echo $result['date1'];?></td>


      <td><a href="confirmuser.php?confirmuser=<?php echo $result['sid']?> & confirmuseremail=<?php echo $result['email']?>">Details</a></td>
       
               
     
          
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
<?php include("Segment/Footer.php");?>
              