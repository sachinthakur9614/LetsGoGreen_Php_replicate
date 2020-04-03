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

  
  if($email=='dhruv@gmail.com' && $password =='123456')
  {
  
      
        session_start();
      $_SESSION["email"] = $email;

      setcookie('email',$email,time()+60*5);
            
      $_SESSION['email'] = $email;

      header('Location:admin/dashboard.php');


        


    }

      

}

      
          
       
      else {
      
        echo "Password or email is incorrect";
       }
  
  
  
  
  ?>