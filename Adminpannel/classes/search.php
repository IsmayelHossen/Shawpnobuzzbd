
<?php include("database/Connection.php");?>

<?php include("database/Formet.php"); ?>
<?php 
class ads{
	private $fm;
	private $db;
	 public function __construct(){
	 	$this->db=new Database();
	 	$this->fm=new Format();
	 }
	  public function Search_result($search){
 
        $query="SELECT ads.*,user.phone,user.address FROM ads INNER JOIN user ON ads.email=user.email WHERE   device LIKE'%$search%' OR brand LIKE'%$search%'";
	     	  $result=$this->db->select( $query);
	     	  if($result->num_rows > 0){


	     	  return $result;
	     	}
	     	 else{
	     	 	   header("Location:error.php");
	     	 }

	  }
	}
