 $(document).ready(function(){
                         $("#reg").on('click',function(){
                            var fname=$("#fname").val();
                            // var address=$("#address").val();
                            // var city=$("#city").val();
                             var email=$("#email").val();
                             var phone=$("#phone").val();
                             var password=$("#password").val();
                             var repassword=$("#repassword").val();

                             if(fname != ''){

                             $.ajax({

                               url:"regq.php",
                               method:"POST",
                               data:{fname:fname,email:email,phone:phone,password:password,repassword:repassword},
                               dataType:"text",
                               success:function(data){
                                $('#regmsg').fadeIn();
                                  $('#regmsg').html(data);
                                  
                               }

                             });
                             return false;

                              }

                         });
                                
  //login                       
                          $("#login").on('click',function(){
                            var email=$("#email").val();
                             var password=$("#password").val();
                              var remember=$("#remember").val();

                             if(email != '' && password != ''){

                             $.ajax({

                               url:"registrationq.php",
                               method:"POST",
                               data:{email:email,password:password,remember:remember},
                               dataType:"text",
                               success:function(data){
                                $('#logmsg').fadeIn();
                                  $('#logmsg').html(data);
                                  
                               }

                             });
                             return false;

                              }

                         }); 
                          //profile update
                           $("#updateprofile").on('click',function(){
                            var name=$("#name").val();
                            var city=$("#city").val();
                            var address=$("#address").val();
                            var region=$("#region").val();
                            var email=$("#email").val();
                             var password=$("#password").val();
                              var phone=$("#phone").val();

                             if(email != '' && password != ''){

                             $.ajax({

                               url:"registrationq.php",
                               method:"POST",
                               data:{name:name,city:city,address:address,region:region,email:email,password:password,phone:phone},
                               dataType:"text",
                               success:function(data){
                                $('#updatep').fadeIn();
                                  $('#updatep').html(data);
                                  
                               }

                             });
                             return false;

                              }

                         }); 

                    //update shipping address       
                  $("#Shippingupdate").on('click',function(){
                            var sname=$("#sname").val();
                            var scity=$("#scity").val();
                            var saddress=$("#saddress").val();
                           var sphone=$("#sphone").val();

                             if(sname != '' && scity != ''){

                             $.ajax({

                               url:"registrationq.php",
                               method:"POST",
                               data:{sname:sname,scity:scity,saddress:saddress,sphone:sphone},
                               dataType:"text",
                               success:function(data){
                                $('#Updateshipping').fadeIn();
                                  $('#Updateshipping').html(data);
                                  
                               }

                             });
                             return false;

                              }

                         }); 

                                      //update shipping address       
                  $("#cancelproductlist").on('click',function(){
                            var cancelproduct=$("#canelproduct").val();
                            

                             if(cancelproduct != ''){

                             $.ajax({

                               url:"registrationq.php",
                               method:"POST",
                               data:{cancelproduct:cancelproduct},
                               dataType:"text",
                               success:function(data){
                                $('#cancelproductlist1').fadeIn();
                                  $('#cancelproductlist1').html(data);
                                  
                               }

                             });
                             return false;

                              }

                         }); 


 
                          //product ase desc


                             $("#select1").on('click',function(){
                            var order=$("#select").val();
                             

                             if(order != ''){

                             $.ajax({

                               url:"womenquery.php",
                               method:"POST",
                               data:{order:order},
                               
                               success:function(data){

                              
                                  $('#women').html(data);
                                 header('Location:shop_grid.php?womenphl=1');
                                  
                               }

                             });
                             return false;

                              }

                         }); 

                             //categories
                              $("#category").click(function(){
                            var category=$("#category").val();
                             

                             if(category != ''){

                             $.ajax({

                               url:"womenquery.php",
                               method:"POST",
                               data:{category:category},

                               
                               success:function(data){

                                  setTimeout(function(){
                         $('#category1').html(data);
                            },1000); 
                              
                                 
                                 //header('Location:shop_grid.php?womenphl=1');
                                  
                               }

                             });
                             return false;

                              }

                         }); 
                       });