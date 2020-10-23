<?php 
include('segment/header.php');
?>
<script>
  function validateForm() {
  var name = document.forms["myForm"]["name"].value;
  var email = document.forms["myForm"]["email"].value;
   var phone = document.forms["myForm"]["phone"].value;
  var message = document.forms["myForm"]["message"].value;
 

  if (name == "") {
    swal({
  title: "Name Field Must Not Be Empty!",
  icon: "warning",
  button: "Ok!",
});
    return false;
  }
  if (email == "") {
        swal({
  title: "Email Field Must Not Be Empty!",
  icon: "warning",
  button: "Ok!",
});
    return false;
  }
    if (phone == "") {
            swal({
  title: "Phone Field Must Not Be Empty!",
  icon: "warning",
  button: "Ok!",
});
    return false;
  }
    if (message == "") {
                swal({
  title: "Confirm Password Field Must Not Be Empty!",
  icon: "warning",
  button: "Ok!",
});
    return false;
  }

} 
</script>
<?php
if(isset($_POST['messages'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $message=$_POST['message'];
    $name=mysqli_real_escape_string($db->link,$name);
     // $address=mysqli_real_escape_string($this->db->link,$address);
    //  $city=mysqli_real_escape_string($this->db->link,$city);
      $email=mysqli_real_escape_string($db->link,$email);
      $phone=mysqli_real_escape_string($db->link,$phone);
      $message=mysqli_real_escape_string($db->link,$message);
     
      $query="SELECT*FROM contact_msg WHERE phone='$phone'";
      
      $result1=$db->select($query);
        $count1=mysqli_num_rows($result1);
       $query="SELECT*FROM contact_msg WHERE email='$email'";
      
      $result=$db->select($query);
        $count=mysqli_num_rows($result);
      if($count>=1){
       
        echo' <script>swal({
  title: "This email is already exists!",
  icon: "warning",
  button: "Ok!",
});</script>
';
      }
      elseif($count1>=1){
                echo' <script> swal({
  title: "This Phone is already exists!",
  icon: "warning",
  button: "Ok!",
}); </script>
';

      }

  else{
        $query="INSERT INTO contact_msg(name,email,phone,comment) VALUES('$name','$email','$phone','$message')";
         $result=$db->insert($query);
         if($result){
        
            
                echo' <script> swal({
  title: "Thanks to being with us",
  icon: "success",
  button: "Ok!",
}); </script>
';
            
          
        
         }
      }
            
}
 ?>
     <!-- Breadcrumbs -->
  
  <div class="breadcrumbs">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <ul>
            <li class="home"> <a title="Go to Home Page" href="index.html">Home</a><span>&raquo;</span></li>
           
            <li><strong>Contact Us</strong></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Breadcrumbs End --> 

  <!-- Main Container -->
  <section class="main-container col1-layout">
    <div class="main container">
      <div class="row">
        <section class="col-main col-sm-12">
          
          <div id="contact" class="page-content page-contact">
          <div class="page-title">
            <h2>Contact Us</h2>
          </div>
            <div id="message-box-conact">We're available for new projects</div>
            <div class="row">
              <div class="col-xs-12 col-sm-6" id="contact_form_map">
                <h3 class="page-subheading">Let's get in touch</h3>
                <p>Lorem ipsum dolor sit amet onsectetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor dapibus eget. Mauris tincidunt aliquam lectus sed vestibulum. Vestibulum bibendum suscipit mattis.</p>
                <br/>
                <ul>
                  <li>Praesent nec tincidunt turpis.</li>
                  <li>Aliquam et nisi risus.&nbsp;Cras ut varius ante.</li>
                  <li>Ut congue gravida dolor, vitae viverra dolor.</li>
                </ul>
                <br/>
                <ul class="store_info">
                  <li><i class="fa fa-home"></i>Online EasyShop Sector-6,Uttara,Dhaka</li>
                  <li><i class="fa fa-phone"></i><span>+8801952152883</span></li>
                  <li><i class="fa fa-fax"></i><span>+39 0035 356 765</span></li>
                  <li><i class="fa fa-envelope"></i>Email: <span><a href="ismayelhossen123@.com">ismayelhossen123@gmail.com</a></span></li>
                </ul>
              </div>
              <div class="col-sm-6">
                <h3 class="page-subheading">Make an enquiry</h3>
                <div class="contact-form-box">
                    <form name="myForm" method="post" action="" onsubmit="return validateForm()">
                  <div class="form-selector">
                    <label>Name</label>
                    <input type="text" class="form-control input-sm" name="name" id="name" />
                  </div>
                  <div class="form-selector">
                    <label>Email</label>
                    <input type="email" class="form-control input-sm" name="email" id="email" />
                  </div>
                  <div class="form-selector">
                    <label>Phone</label>
                    <input type="number" class="form-control input-sm" name="phone" id="phone" pattern="01[3|4|5|6|7|8|9][0-9]{8}" />
                  </div>
                  <div class="form-selector">
                    <label>Message</label>
                    <textarea class="form-control input-sm" rows="10" id="message" name="message"></textarea>
                  </div>
                  <div class="form-selector">
                    <button class="button" type="submit" name="messages"><i class="fa fa-send"></i>&nbsp; <span>Send Message</span></button>
                    &nbsp; <a href="#" class="button">Clear</a> </div>
                </div>
                  </form>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </section>
  <!-- Main Container End -->
   <!-- our clients Slider -->
  
 <!-- our clients Slider -->
  <?php 
include('segment/footer.php');
  ?>
  
  <!-- End Footer -->
  
  
   
  

</body>

<!-- Mirrored from htmlmystore.justthemevalley.com/fancy/version2/contact_us.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Feb 2020 06:07:36 GMT -->
</html>