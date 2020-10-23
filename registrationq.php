<?php include('registrationquery.php');
  $ob=new Query();
  error_reporting(0);
?>

 <?php 
  
  if(isset($_POST['name'])){
   $name=$_POST['name'];
   $address=$_POST['address'];
   $city=$_POST['city'];
   $phone=$_POST['phone'];
   $password=$_POST['password'];
   $region=$_POST['region'];
   $email=$_POST['email'];
   
     $updateprofile=$ob->profileupdate($name,$address,$city,$phone,$password,$region,$email);
 }
   ?>
 <?php 
  
  if(isset($_POST['sname'])){
   $sname=$_POST['sname'];
   $saddress=$_POST['saddress'];
   $scity=$_POST['scity'];
   $sphone=$_POST['sphone'];
    
     $updateshipping=$ob->shippingupdate($sname,$saddress,$scity,$sphone);
 }
   ?>
   <?php 
  
  if(isset($_POST['cancelproduct'])){
   $cancelproduct=$_POST['cancelproduct'];
       
     $productcancel=$ob->cancelproductlist($cancelproduct);
 }
   ?>
