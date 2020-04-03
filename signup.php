

<?php



include('header.php');
echo "<br><br>";



?>



<div class="container">
        <div class="row">
                <div class="col-md-6">
                  <?php 

                  if(!empty($_GET['error'])==1)
                  { ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Your email or password is wrong! </strong> 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
                    
                <?php  }?>
               

               

                   <center> <h3>Login</h3></center>
                        <form method="POST" name="login_form" action="login.php" >
                            <div class="form-group">  
                             <label for="exampleInputEmail1">Email/username</label>
                                        <input type="email" id="email" name="email"    class="form-control "  aria-describedby="emailHelp" placeholder="Enter email/username">
                                       </div>

                                       
                                      <div class="form-group">
                                            <label for="exampleInputPassword1">Password</label>
                                            <input type="password" name='password' class="form-control" required=""  id="exampleInputPassword1" placeholder="Password">
                                            <small id="emailHelp" class="form-text text-muted"><a href="forgot_password.php">Forgot password</a></small>
                                       
                                        </div>
                        <br>
                                      
                               <input type="submit" name="login"  value=submit class="btn btn-primary">
                            
                                 
                        </form>
                        </div>

                <div class="col-md-6">
                  
        <?php
                  if(!empty($_GET['register'])==1)
                  { ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Registration is Successfull </strong> 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
                    
                <?php  }?>
        <?php
                  if(!empty($_GET['register'])==0)
                  { ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Registration is unsuccessfull try again! </strong> 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
                    
                <?php  }?>
        


<center> <h3>Registration</h3></center>
<form  method="POST" action="register.php" name="myform" >
                <div class="form-group">
                   <label>First name</label>
                  <input type="text"  name="firstname"  class="form-control col-md-10 " id="firstname" aria-describedby="emailHelp" " placeholder="Enter First Name" required="">
                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
               </div>

                 <div class=" form group">
                  <label>Last name</label>
                    <input type="text" name="lastname" class="form-control col-md-10 " id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Last Name" required="" >
                 </div>

                 <div class="form-group">
                  <label>Email adress</label>
                <input type="email" name="email"class="form-control col-md-10 " id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email address"  required="" >
                 </div>
                  <div class="form-group">
                    <label>password</label>
                   <input type="password"name="password" class="form-control col-md-10 " id="exampleInputEmail1" aria-describedby="emailHelp" minlength="6"n placeholder="Enter password" required=""  >
                    </div>
 
                     <div class="form-group">
              <label>confirm-password</label>
             <input type="password"name="confirmpassword" class="form-control col-md-10 " id="exampleInputEmail1" minlength="6" aria-describedby="emailHelp" placeholder="confirm password" required="">
                   </div>
              <div class="form-group">
             <label>mobile</label>
            <input type="text"name="mobile" maxlength="10" class="form-control col-md-10 " id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="enter mobile number" required="" >
             </div>

              

             <div class="form-group">
                <label>User type</label><br>
                     <select  class="form-control" required=""  name="usertype">
                                  <option  value="">Select User Type</option>
                                 
                                  <option value="Contributor">Contributor</option>
                                  
                                  </select>
                                
               </div>

                  <br>
              <input type="submit" name="submit" class="btn btn-primary" value="Submit">
 
          </form>
    </div>                                           
      </div>
                                                                                                              




</div>

</div>

<?php 
 include('footer.php');
 ?>