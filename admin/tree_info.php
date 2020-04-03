
<?php

include('../config.php');

 include('nav.php');


$dbselect = mysqli_select_db($con,$db);
if(!$dbselect)
{
  echo "Database Not Selected";
}  
 
 $email =$_SESSION['email'];
$sql="SELECT id FROM `registration` WHERE `email`='$email'";


$result = @mysqli_query($con,$sql);
  
  if($result->num_rows == 1 ) 
  {

      $login_row =@mysqli_fetch_assoc($result);
  


    
     
$userid  =$login_row['id'];

}

$treename  = $_POST['treename'];
$treedescription = $_POST['treedescription'];
$treeage = $_POST['treeage'];
$treeenv = $_POST['treeenv'];
$treeimage = $_POST['treeimage'];



if(isset($_POST['submit']))
{

$treename  = $_POST['treename'];
$treedescription = $_POST['treedescription'];
$treeage = $_POST['treeage'];
$treeenv = $_POST['treeenv'];
$treeimage = $_POST['treeimage'];



if($treedescription ==''){

 $error ="Tree Description  field is empty";

}

if($treeage ==''){

 $error ="Tree age  field is empty";

}
if($treeenv ==''){

 $error ="Tree  Environment  field is empty";

}
 if($error=='')
 {


	 $sql = "INSERT INTO `tree_type`( `tree_name`, `tree_description`, `tree_age`, `env_effect`, `tree_image`, `user_id`) VALUES ('$treename','$treedescription','$treeage','$treeenv','$treeimage','$userid')";
	@mysqli_query($con,$sql);
	header('Location:nav.php');


}
else{
	header('Location:nav.php?error=$error');

}	
}




// treename,treedescription,treeage,treeenv,treeimage
?>
