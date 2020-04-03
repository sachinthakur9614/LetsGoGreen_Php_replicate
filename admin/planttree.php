
<?php
 include('../config.php');

 include('nav.php');
 


 
$dbselect = mysqli_select_db($con,$db);
if(!$dbselect)
{
  echo "Database Not Selected";
}  


// echo $_SESSION['email']."email is";
$email =$_SESSION['email'];
$sql="SELECT id FROM `registration` WHERE `email`='$email'";




// $treeDescription = $_POST['tree_description'];
$first =$_POST['first'];
$second = $_POST['second'];
$final = $_POST['final'];
 


$result = @mysqli_query($con,$sql);
  
  if($result->num_rows == 1 ) 
  {

      $login_row =@mysqli_fetch_assoc($result);
  


    
     
$userid  =$login_row['id'];


//  echo   $_SESSION["id"]."is the id";


 

 $sql1 ="INSERT INTO `tree_planted`( `first`, `second`, `final`, `user_id`)  VALUES ('$first','$second' ,'$final','$userid')";
 @mysqli_query($con,$sql1);


  header('Location:dashboard.php');


}
          
       
      else {
      
        echo "information is wrong";
       }
  
  


















include('footer.php');

?>
