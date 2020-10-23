
 <?php 
 include('database/Connection.php');
  include('database/Session.php');
  Session::init();
 
  $db=new Database();
              $email=Session::get("email");
              date_default_timezone_set('Asia/Dhaka');
        
               $date1=date("d/m/Y h:a");
              $query="SELECT*FROM cart WHERE email='$email' AND date2='$date1' AND NOT order1=1 ";
               $result=$db->select($query);
               $count=0;
               while($row=$result->fetch_assoc()){
                $count=$row['quntity']+$count;


               }
               echo $count;
              ?>