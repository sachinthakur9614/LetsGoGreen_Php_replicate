<?php 
// 
include('nav.php');

?>



<div class="container">
    < <hr class="bg-info col-md-8">

<style>
  p {
    padding-top: 10px;
  }
</style>


<?php




 
$dbselect = mysqli_select_db($con,$db);
if(!$dbselect)
{
  echo "Database Not Selected";
}  


// echo $_SESSION['email']."email is";
$email =$_SESSION['email'];
$sql="SELECT id,first_name,last_name, email,mobile FROM `registration` WHERE `email`='$email'";

$result = @mysqli_query($con,$sql);
  
  if($result->num_rows == 1 ) 
  {

      $login_row =@mysqli_fetch_assoc($result);
  


    
     
$userid  =$login_row['id'];

  


?>

<div class="container col-md-10">
  <div class="card border border-info ">
    <!--style="width: 18rem;">-->
    <div class="card-body">
      <h2 class="card-title text-center">Profile</h2>
      <hr class="bg-info col-md-8">
      <!-- <h6 class="card-subtitle mb-2 text-muted">Helps to organise event</h6> -->
      <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-2">
          <p class="card-text">
            User Name
          </p>
        </div>

        <div class="col-md-8">
          <p class="card-text">
            : <?php echo $_SESSION['email'];?>
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-2">
          <p class="card-text">
            First Name
          </p>
        </div>
        <div class="col-md-8">
          <p class="card-text">
            :  <?php  echo  $login_row['first_name']; ?>
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-2">
          <p class="card-text">
            Last Name
          </p>
        </div>
        <div class="col-md-8">
          <p class="card-text">


            : <?php  echo  $login_row['last_name']; ?>
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-2">
          <p class="card-text">
            Email
          </p>
        </div>
        <div class="col-md-8">
          <p class="card-text">
            :<?php  echo  $login_row['email']; ?>
          </p>
        </div>



      </div>


      <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-2">
          <p class="card-text">
         Mobile 
          </p>
        </div>
        <div class="col-md-8">
          <p class="card-text">
            :<?php  echo  $login_row['mobile'];  }?>
          </p>
        </div>



      </div>


      <hr class="bg-info col-md-8">
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-3">

<!-- Edit  button  of your  profile  -->
          <!-- <a href="" class="btn btn-dark btn-outline-info text-light">Edit Profile</a> -->
        </div>
        <div class="col-md-3">
          <!-- <a href="" class="btn btn-dark btn-outline-info text-light">Get PDF</a> -->
        </div>
        <div class="col-md-3">
          <!-- <a href="" class="btn btn-dark btn-outline-info text-light">Delete Profile</a> -->
        </div>
        <div class="col-md-1"></div>
      </div>
    </div>
  </div>
</div>
<hr class="bg-info col-md-8">
</div>
<br><br>


</div>
