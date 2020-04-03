
<?php

include('../config.php');

 include('nav.php');


$dbselect = mysqli_select_db($con,$db);
if(!$dbselect)
{
  echo "Database Not Selected";
}  
 
 $email =$_SESSION['email'];
$sql="SELECT id FROM `registrations` WHERE `email`='$email'";


$result = @mysqli_query($con,$sql);
  
  if($result->num_rows == 1 ) 
  {

      $login_row =@mysqli_fetch_assoc($result);
  


    
     
$userid  =$login_row['id'];

}


if(isset($_POST['submit']))
{

$sapcount = $_POST['sapcount'];
$treename = $_POST['treename'];
$addline1 = $_POST['addline1'];
$addline2 = $_POST['addline2'];
$state = $_POST['state'];
$pincode = $_POST['pincode'];


if($state ==''){
	$error = "State Field is empty";
}


if($pincode ==''){
	$error = "Pincode Field is empty";
}



if($sapcount ==''){

 $error ="Sapling Count  field is empty";

}

if($treename ==''){

 $error ="Tree name  field is empty";

}
if($addline1 ==''){

 $error ="Address Line 1   field is empty";

}


if($addline2==''){

 $error ="Address Line 2   field is empty";

}

 if($error=='')
 {


$sql ="INSERT INTO `contributor`(`sapling_count`, `tree_name`, `add_line1`, `add_line2`, `state`, `pincode`, `user_id`) VALUES ('$sapcount','$treename','$addline1','$add_line2','$state','$pincode','$userid')";

	 // $sql = "INSERT INTO `tree_type`( `tree_name`, `tree_description`, `tree_age`, `env_effect`, `tree_image`, `user_id`) VALUES ('$treename','$treedescription','$treeage','$treeenv','$treeimage','$userid')";
	@mysqli_query($con,$sql);

	header('Location:show_contributor.php');


}
else{
	header('Location:nav.php?error=$error');

}	
}




// treename,treedescription,treeage,treeenv,treeimage
?>
