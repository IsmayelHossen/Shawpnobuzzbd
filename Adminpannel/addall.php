
<?php include("Segment/Header.php");?>
<?php

if(isset($_POST['submit'])){
  $category=$_POST['select'];
  if($category=='Electronics'){
    Session::set("elc",$category);
      echo"<script>window:location='electronics.php'</script>";

    //header("Location:electronic.php");
    exit();
  }
  elseif($category=='Man'){
     Session::set("man",$category);
       echo"<script>window:location='man.php'</script>";
      //header("Location:beauty.php");
       exit();

  }
   elseif($category=='Women'){
     Session::set("women",$category);
      echo"<script>window:location='women.php'</script>";

    // header("Location:beauty.php");
     
       exit();

  }
  elseif($category=='covid'){
     Session::set("edu",$category);
      echo"<script>window:location='covid.php'</script>";
     //header("Location:education.php");
     
       exit();

  }
  else{
      Session::set("veh",$category);
       echo"<script>window:location='vehicles.php'</script>";

    // header("Location:vehicles.php");
     
       exit();

  }
 
}
  
?>
           <div class="col-md-10 ">
       <div class="col-md-12 sidebarright">
        
          <div class="hedaing">

            <h2>Select Items to add</h2>
          </div>

         <form action="" method="post">
                        <div class="form-group">
                          <label>Select Catagory</label>
                          <select name="select" id="select" class="form-control">
                           

                <option value="Man">Man</option>
                <option value="Women">Women</option>
                <option value="Electronics">Electronics</option>
                 <option value="covid">Covid</option>

             </select>
                        </div>
                         
                        <input type="submit" name="submit" value="submit" class="btn btn-primary">
                      </form>
                  
</div>
</div>
<?php include("Segment/Footer.php");?>
