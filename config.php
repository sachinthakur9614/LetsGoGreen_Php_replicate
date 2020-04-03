
<?php
$server = "localhost";
$user ="root";
$pass ="";
$db = "letsgogreen";
$con = @mysqli_connect($server,$user);
if(!$con)
{
  echo "Not Connected";

}


?>
