<?php include('registrationquery.php');
  $ob=new Query();
?>
<?php 
if(isset($_POST['fname'])){
	$fname=$_POST['fname'];
	//$address=$_POST['address'];
	//$city=$_POST['city'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$password=$_POST['password'];
	$repassword=$_POST['repassword'];
	$result=$ob->Registration($fname,$email,$phone,$password,$repassword);
	
	

}

?>





 