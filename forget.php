<?php
  include('config.php');
  $dbselect=mysqli_select_db($con,$db);

if(!$dbselect)
{
  echo"database bot selected";

}


if(isset($_POST['forget']))
{

$email = $_POST['email'];
$password = $_POST['password'];
$conpassword = $_POST['conpassword'];
 if(password == $conpassword){

 

$sql = "UPDATE Customers SET `password` = '$password' WHERE `email` = '$email;"

$login_result = @mysqli_query($sql);




 }

}

?>