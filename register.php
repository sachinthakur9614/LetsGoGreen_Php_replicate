
<?php

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
    


    $firstname = $_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $confirmpassword=$_POST['confirmpassword'];
    $mobile=$_POST['mobile'];
    $profileimage=$_POST['profileimage'];
    $usertype = $_POST['usertype'];

    $error = "";
    if(!empty($_POST['firstname']))
    {
       $firstname = $_POST['firstname'];

    }
    else {

      $error ='First name field is empty';
    }

    if(!empty($_POST['lastname']))
    {
       $lastname=$_POST['lastname'];

    }
    else {

      $error ='Last name field is empty';
    }
    if(!empty($_POST['email']))
    {
      $email=$_POST['email'];
      
       
    }
    else {

      $error ='Email  field is empty';
    }

    if(!empty($_POST['password']))
    {
       

        $password=$_POST['password'];

    }
    else {

      $error ='Password field is empty';
    }
 
    
        
    if(!empty($_POST['confirmpassword']))
    {
       $confirmpassword=$_POST['confirmpassword'];

        
    }
    else {

      $error =' Confirm Password field is empty';
    }



    if(!empty($_POST['mobile']))
    {
        $mobile=$_POST['mobile'];
    }
    else {

      $error ='Mobile field is empty';
    }
  
    if(!empty($_POST['usertype']))
    {
       $usertype = $_POST['usertype'];
      

        
    }
    else {

      $error =' User type field is empty';
    }


      $sql = "INSERT INTO `registrations`(`first_name`, `last_name`, `email`, `password`, `mobile`, `usertype`) VALUES ('$firstname','$lastname','$email','$password','$mobile','$usertype')";

      
        // $sql = "INSERT INTO `registrations` ( `first_name`, `last_name`, `email`, `password`, `mobile`,`usertype`) VALUES ('$firstname','$lastname','$email','$password','$mobile',$usertype)";

      // echo $firstname." is this";

        // $login_result = @mysqli_query($conn,$sql);

  //     @mysqli_query($con,$sql);
  // header('Location:nav.php');

      if(mysqli_query($conn,$sql)){


        echo "Records inserted successfully.";
        session_start();
      
       
      
       setcookie('email',$email,time()+60*2);
             
       $_SESSION['email'] = $email;
      
          header('Location:signup.php?register=1');


      } else{
// header('Location:tree_catalog.php');

      header('Location:signup.php?register=0');
          // echo "ERROR: Could not able to execute $sql. " .$error;
      }


        // echo $login_result;
          
      
          
    
            
      
            
      
         
        


    // echo " Registration succesfull";

?>