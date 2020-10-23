<?php include("Segment/Header.php");?>
          <div class="col-md-10 ">
       <div class="col-md-12 sidebarright">
          <div class="hedaing">
             <h2>Add New User</h2>
          </div>
            <?php
     $db = new Database();

     if($_SERVER["REQUEST_METHOD"] == "POST"){
      $username=$_POST['name'];
       $pass=$_POST['pass'];
        $role=$_POST['role'];
        $email=$_POST['email'];
        $details=$_POST['details'];
        if(empty( $username)|| empty( $pass)|| empty( $role)|| empty( $email) ||empty( $details)){
           echo"Filed must not be empety";

        }
     
      else{ 
           $query="SELECT*FROM users WHERE  email='$email' limit 1 ";
            $Category=$db->select($query);
            if($Category){
              
                 echo "<span style='color:red;font-size:18px;'>This email is already Exists !!</span>";
              }
            
        
            
           
          

           else{
       $query = "INSERT INTO users(username,Password,rule,email,details) values('$username',' $pass',' $role','$email','$details')";
        $result = $db->insert($query);
        if($result){
        
            echo"<span>data successfully inserted</span>";
        }
        else{
              echo"<span>Sorry Something is wrong</span>";
        }
       }
     }
   }
    ?>


      <form action="Adduser.php" method="post">
                    <table class="form">					
                        <tr>
                          <td><label>Username</label></td>
                            <td>
                                <input type="text" name="name" />
                            </td>
                        </tr>
                         <tr>
                          <td><label>Password</label></td>
                            <td>
                                <input type="text" name="pass" />
                            </td>
                        </tr>
                         <tr>
                          <td><label>Role</label></td>
                            <td>
                               <select id="select" name="role">
                                   <option value="1">Admin</option>
                                   <option value="2">AUthor</option>
                                   <option value="3">Editor</option>
                               </select>
                            </td>
                        </tr>


                         <tr>
                          <td><label>Email</label></td>
                            <td>
                                <input type="text" name="email" />
                            </td>
                        </tr>

                         <tr>
                          <td><label>Details</label></td>
                            <td>
                                <input type="text" name="details" />
                            </td>
                        </tr>
					               	<tr>            
                          <td></td>
                            <td>
                                <input type="submit" name="submit" Value="Create" />
                            </td>
                        </tr>
                    </table>
                    </form>

                    
         </div>
             

    </div>
  </div>
</div>
<?php include("Segment/Footer.php");?>
              