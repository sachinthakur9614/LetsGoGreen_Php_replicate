
<?php


include('header.php');
include('config.php');

?>

<br><br>
<br><br>
 
<div class="container">
    
        <div class="row">
            <div class="col-md-3">
                </div>
        
<div class="col-md-6">
        <center> <h3>Change Your Password</h3></center>
<form action="forget.php" method="post">

        <div class=" form group">
                <label>Email address</label>
                           <input type="email" class="form-control col-md-10 " id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email address">
                           <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                         </div>

                         <div class=" form group">
                                <label>New password</label>
                                           <input type="password" class="form-control col-md-10 " id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter New password">
                                           <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                         </div>

                                         <div class=" form group">
                                                <label>Confirm password</label>
                                                           <input type="password" class="form-control col-md-10 " id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Confirm New Password">
                                                           <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                                         </div>
                                                         <br>
                                        <input type="Submit" value=Submit id="forget" class="btn btn-primary">
 </form>

</div><div class="col-md-3"></div>
</div>
</div>
<br>





<?php 
 include('footer.php');
 ?>