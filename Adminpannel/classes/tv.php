<?php include("/../database/Connection.php");?>

<?php include("/../database/Formet.php"); ?>

<?php 
class tv{
	private $fm;
	private $db;
	 public function __construct(){
	 	$this->db=new Database();
	 	$this->fm=new Format();
	 }
	   public function all_tvb(){
	   	$query="SELECT*FROM tv WHERE id BETWEEN 1 AND 16";
	   	$result=$this->db->select($query);
	   	return $result;
	   }
	    public function all_tvk(){
	   	$query="SELECT*FROM tv WHERE id BETWEEN 17 AND 19";
	   	$result=$this->db->select($query);
	   	return $result;
	   }
	    public function all_tvi(){
	   	$query="SELECT*FROM tv WHERE id BETWEEN 20 AND 23";
	   	$result=$this->db->select($query);
	   	return $result;
	   }
	    public function all_tve(){
	   	$query="SELECT*FROM tv WHERE id BETWEEN 24 AND 26";
	   	$result=$this->db->select($query);
	   	return $result;
	   }
	    public function col_urlb( $id){
	    	$query="SELECT*FROM tv WHERE id='$id'";
	    	$result=$this->db->select($query);
	    	return $result;
	    }
	   
	}