
<?php include_once("/../database/Session.php"); 
  
 
?>
<?php include("database/Connection.php");?>

<?php include("database/Formet.php"); ?>

<?php 
class login{
	private $fm;
	private $db;
	 public function __construct(){
	 	$this->db=new Database();
	 	$this->fm=new Format();
	 }
	  public function checklogin( $email1, $password1){
	  	if(empty($email1)||empty($password1)){
	  		 $msg="<span class='alert alert-danger'>Filed Must Not Be Empty</span>";
	  		 return $msg;
	  		 
	  	}
	  	 else{
	  	 	   $query="SELECT*FROM user WHERE email='$email1' AND password='$password1'";
	  	 	   $result=$this->db->select($query);
	  	 	     $row=$result->fetch_assoc();
	  	 	     if( $row['status']==1){
	  	 	     	 $msg="<span class='alert alert-danger'>Sorry You Are illegable</span>";
	  		         return $msg;
	  	 	     }
	  	 	   elseif( $row){
	  	 	   	  
	  	 	   	 Session::checklogin();
	  	 	   	    Session::set("login",true);
	  	 	   	    Session::set("email",$row['email']);
	  	 	   	       Session::set("name",$row['name']);
	  	 	   	      Session::set("password",$row['password']);
	  	 	   	      header("Location:useraccount.php");

	  	 	   }
	  	 	    else{
	  	 	    	 $msg="<span class='alert alert-danger'>Email Or Password Not Matched</span>";
	  		         return $msg;

	  	 	    }
	  	 }

	  }

}
?>