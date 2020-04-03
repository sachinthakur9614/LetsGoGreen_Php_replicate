<?php
 include('../config.php');

 include('nav.php');
 


 
$dbselect = mysqli_select_db($con,$db);
if(!$dbselect)
{
  echo "Database Not Selected";
}  


echo $_SESSION['email']."email is";
$email =$_SESSION['email'];
$sql="SELECT id FROM `registrations` WHERE `email`='$email'";




$treeDescription = $_POST['tree_description'];
$tree_image =$_POST['tree_image'];
$treename = $_POST['tree_name'];
$lifetime = $_POST['life_time'];
 


$result = @mysqli_query($con,$sql);
  
  if($result->num_rows == 1 ) 
  {

      $login_row =@mysqli_fetch_assoc($result);
  


    
     
$userid  =$login_row['id'];


 echo   $_SESSION["id"]."is the id";


 $sql1 ="INSERT INTO `tree_catalog`( `tree_description`, `tree_image`, `tree_name`, `life-time`, `user_id`) VALUES ('$treeDescription','$tree_image' ,'$treename','$lifetime','$userid')";
 @mysqli_query($con,$sql1);
 
 header('Location:plant.php?register=0');


}
          
       
      else {
      
        echo "Password or email is incorrect";
       }
  
  


















include('footer.php');

?>
