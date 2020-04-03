<?php
 include('../config.php');

 include('nav.php');
 


$server = "localhost";
$user ="root";
$pass ="";
$db = "letsgogreen";

$conn = mysqli_connect($server, $user, $pass, $db);
// Check connection


$dbselect = mysqli_select_db($conn,$db);
if(!$dbselect)
{
  echo "Database Not Selected";
}  
 
$dbselect = mysqli_select_db($conn,$db);
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
 


$result = @mysqli_query($conn,$sql);
  
  if($result->num_rows == 1 ) 
  {

      $login_row =@mysqli_fetch_assoc($result);
  


    
     
$userid  =$login_row['id'];


 echo   $userid."is the id";


 $sql1 ="INSERT INTO `tree_catalog`( `tree_description`, `tree_image`, `tree_name`, `life-time`, `user_id`) VALUES ('$treeDescription','$tree_image' ,'$treename','$lifetime','$userid')";
 @mysqli_query($conn,$sql1);

 header('Location:plant.php?register=0');


}
        
  


















include('footer.php');

?>
