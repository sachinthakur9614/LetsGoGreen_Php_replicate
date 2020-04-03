<?php



include('header.php');
echo "<br><br>";
include('config.php');


?>



<div class="container">
        <div class="row">
                <div class="col-md-6">
                   <center> <h3> Admin Login</h3></center>
                        <form method="POST" action="admin_login.php">
                            <div class="form-group">  
                             <label for="exampleInputEmail1">Email/username</label>
                                        <input type="email" required name='email'class="form-control  " id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email/username">
                                       </div>

                                       
                                      <div class="form-group">
                                            <label for="exampleInputPassword1">Password</label>
                                            <input type="password" name='password' class="form-control" id="exampleInputPassword1" placeholder="Password">
                                            <small id="emailHelp" class="form-text text-muted"><a href="forgot_password.php">Forgot password</a></small>
                                       
                                        </div>
                        <br>
                                      
                               <input type="submit" name="login"  value=submit class="btn btn-primary">
                            
                                 
                        </form>
                        </div>

</div>

</div>
