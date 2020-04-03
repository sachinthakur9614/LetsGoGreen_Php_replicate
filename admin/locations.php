
<?php 
// 
include('nav.php');

?>



<?php

$server = "localhost:3306";
$user ="root";
$pass ="";
$db = "letsgogreen";

$con = mysqli_connect($server, $user, $pass, $db);
// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


	$addline1 = $_POST['addline1'];
	$addline2 = $_POST['addline2'];
	$district = $_POST['district'];
	$state = $_POST['state'];
	$pincode = $_POST['pincode'];




if($addline1 ==''){

 $error ="Address  Line 1field is empty";

}

if($addline2 ==''){

 $error ="Address Line 2 field is empty";

}
if($district ==''){

 $error =" District field is empty";

}

if($state ==''){

 $error =" State field is empty";

}


if($pincode ==''){

 $error =" Pincode  field is empty";

}










if(isset($_POST['submit']))
{

$addline1  = $_POST['addline1'];
$addline2= $_POST['addline2'];
$district = $_POST['district'];
$pincode = $_POST['pincode'];
$state = $_POST['state'];




if($addline1 ==''){

 $error ="Address  Line 1field is empty";

}

if($addline2 ==''){

 $error ="Address Line 2 field is empty";

}
if($district ==''){

 $error =" District field is empty";

}

if($state ==''){

 $error =" State field is empty";

}


if($pincode ==''){

 $error =" Pincode  field is empty";

}



 if($error=='')
 {


	 $sql = "INSERT INTO `tree_location` (`add_line1`, `add_line2`, `distt`, `state`, `pincode`)  VALUES ('$addline1','$addline2','$district','$state','$pincode')";
	@mysqli_query($con,$sql);
	header('Location:tree_available.php?register=0');


}
else{
	header('Location:nav.php?error=$error');

}	
}









?>

