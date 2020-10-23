<?php include('registrationquery.php');
  $ob=new Query();
?>

<?php 
if($_SERVER["REQUEST_METHOD"]=="POST"){
	
	$category=$_POST['category'];

	//$remember=$_POST['remember'];
	
	$result2=$ob->category($category);
	
	

}

?>