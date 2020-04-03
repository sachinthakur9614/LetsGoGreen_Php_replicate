<?php
  include('config.php');
  $dbselect=mysqli_select_db($con,$db);

if(!$dbselect)
{
  echo"database bot selected";

}



if(isset($_POST['login'])){

 $email=$_POST['email'];
 $password=$_POST['password'];

  $sql="SELECT email, password FROM `registrations` WHERE `email`='$email' AND `password`='$password' ";
  $login_result = @mysqli_query($con,$sql);
  
  
  
  
  
  if($con->query($sql) == TRUE) 
  
  {

      $login_row =@mysqli_fetch_assoc($login_result);
    
    echo "login row".$login_row;



      if ($login_row!='')
      {
          session_start();
        
        $_SESSION["email"] = $login_row['email'];

        setcookie('email',$email,time()+60*1);
              
        $_SESSION['email'] = $email;

          

      $_SESSION['email'] = $login_row['email']; 
        echo $_SESSION['email'];

        header('Location:contributor/dashboard.php');
     

      }
      else{
        $error = "User is not registered";
        // echo 'User is not registered';


        

        header('Location:signup.php?error=1');
      }




      }
          
       
      else { 
        
       
        echo "Password or email is incorrect";
       }
  
  
  }
  
  ?>