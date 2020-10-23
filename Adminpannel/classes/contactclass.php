<?php include("database/Connection.php");?>

<?php include("database/Formet.php"); ?>
<?php 
class Contact{
	private $fm;
	private $db;
	 public function __construct(){
	 	$this->db=new Database();
	 	$this->fm=new Format();
	 }

	  public function contact_msg($data){
	  	  $name=$data['name'];
	  	  $email=$data['email'];
	  	  $msg=$data['msg'];
	  	  if(empty( $name)||empty( $email)||empty($msg)){
	  	  	  $ms="<span class='alert alert-danger' style='font-family:'Acme';>Filed Must Not Be Empty</span>";
	  	  	  return $ms;
	  	  }
	  	  else{
	  	  	     $query="INSERT INTO contact_msg(name,email,comment,date1) VALUES('$name','$email','$msg',now())";
	  	  	     $result=$this->db->insert($query);
	  	  	     if( $result){
	  	  	     	     $ms="<span class='alert alert-success' style='font-family:'Acme';>Your Message Successfully Sent.</span>";
	  	  	  return $ms;

	  	  	     }
	  	  	      else{

	  	  	      	$ms="<span class='alert alert-danger' style='font-family:'Acme';>Your Message Not Send.</span>";
	  	  	  return $ms;
	  	  	      }

	  	  }

	  }
	}