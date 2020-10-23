
<?php include("database/Connection.php");?>

<?php include("database/Formet.php"); ?>
<?php 
class user{
	private $fm;
	private $db;
	 public function __construct(){
	 	$this->db=new Database();
	 	$this->fm=new Format();
	 	}
	 	  public function alldata_user($email){
	 	  	  $query="SELECT*FROM user WHERE email='$email'  ";
	 	  	  $result=$this->db->select($query);
	 	  	  return $result;
	 	  }
	 	  public function Update_user_details($data, $email, $uploaded_image){
             $name=$data['name'];
               $phone=$data['phone'];
                 $email=$data['email'];
                   $address=$data['address'];
                     $image= $uploaded_image;
                  
                   
                   if(empty($name)){
                   	  $query="UPDATE user SET  phone='$phone',email='$email',image='$image',address='$address' WHERE email='$email'";
                   	  $result=$this->db->update($query);
                   	  if($result){
                   	  	   $msg='<span class="alert alert-success">Information Updated Successfully</span>';
                   	  	   return $msg;
                   	  }

                   }
                   elseif(empty($phone)){
                   	 $query="UPDATE user SET  name='$name',email='$email',image='$image',address='$address' WHERE email='$email'";
                      $result=$this->db->update($query);
                      if($result){
                           $msg='<span class="alert alert-success">Information Updated Successfully</span>';
                           return $msg;
                      }


                   }
                    elseif(empty($email)){
                   $query="UPDATE user SET  phone='$phone',name='$name',image='$image',address='$address' WHERE email='$email'";
                   	  $result=$this->db->update($query);
                   	  if($result){
                   	  	   $msg='<span class="alert alert-success">Information Updated Successfully</span>';
                   	  	   return $msg;
                   	  }

                   }
                    elseif(empty( $address)){
                    $query="UPDATE user SET  phone='$phone',name='$name',image='$image',email='$email' WHERE email='$email'";
                   	  $result=$this->db->update($query);
                   	  if($result){
                   	  	   $msg='<span class="alert alert-success">Information Updated Successfully</span>';
                   	  	   return $msg;
                   	  }

                   }
                    elseif(empty($image)){
                   $query="UPDATE user SET  phone='$phone',email='$email',address='$address',name='$name' WHERE email='$email'";
                   	  $result=$this->db->update($query);
                   	  if($result){
                   	  	   $msg='<span class="alert alert-success">Information Updated Successfully</span>';
                   	  	   return $msg;
                   	  }

                   }
                   
                       else{
                   $query="UPDATE user SET  phone='$phone',email='$email',name='$name',image='$image', address='$address' WHERE email='$email'";
                   	  $result=$this->db->update($query);
                   	  if($result){
                   	  	   $msg='<span class="alert alert-success">Information Updated Successfully</span>';
                   	  	   return $msg;
                   	  }

                   }
                   


                 
	 	  }
        public function edit_result( $id){
          $query="SELECT*FROM ads WHERE no='$id'";
          $result=$this->db->select($query);
          return $result;
        }
         public function modify_user( $email){
          $query="SELECT*FROM ads WHERE email='$email'";
          $result=$this->db->select($query);
          return $result;
        }

         public function delete_ads($delete){
          $query="DELETE FROM ads WHERE no='$delete '";
           $result=$this->db->delete( $query);
            return  $result;
      }
      public function Update_ads_details($data, $email, $uploaded_image,$id,$image_id){
        $catagory=$data['catagory'];
        $product=$data['device'];
        $image=$uploaded_image;
       
        if(empty($catagory)){
          

            $query="UPDATE ads SET device='$product',image='$image' WHERE email='$email'AND no='$id'";
        $result=$this->db->update($query);
           return $result;

        }
        elseif(empty($product)){
           $query="UPDATE ads SET catagory='$catagory',image='$image' WHERE email='$email'AND no='$id'";
        $result=$this->db->update($query);
           return $result;


        }
        elseif(empty($image)){
            $query="UPDATE ads SET catagory='$catagory', device='$product' WHERE email='$email'AND no='$id'";
        $result=$this->db->update($query);
           return $result;

        }
        else{

              $query="UPDATE ads SET catagory='$catagory', device='$product',image='$image'  WHERE email='$email'AND no='$id'";
        $result=$this->db->update($query);
           return $result;

        }
      


      }
      //adminmessage

        public function delete_msg($delete, $email,$image){

              $query="INSERT INTO adminmsg(product_id,email,image,date1) VALUES('$delete','$email','$image',now())";
              $result=$this->db->insert($query);


        }


      

      
	 }
	 ?>