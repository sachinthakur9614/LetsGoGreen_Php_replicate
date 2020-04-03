<!DOCTYPE html>
<html>
<head>

<?php
include('../config.php');

session_start();

// echo "hey babys".$_SESSION["email"];








?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
	<title> signup</title>
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-light bg-dark text-white">
  <a class="navbar-brand  text-white" href="sidebar.php"><img src="../img/logo.png" height="50" width="50" />LetsGoGreen</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse  mr-auto   " id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link  text-white" href="dashboard.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link  text-white" href="catalog.php">Catalog</a>
      </li>

      <li class="nav-item">
        <a class="nav-link  text-white" href="plant.php">Plant Tree</a>
      </li>
      <li class="nav-item">
        <a class="nav-link  text-white" href="profile.php"> <?php  echo $_SESSION['email'];  ?></a>
      </li>
      <li class="nav-item">
        <a class="nav-link  text-white" href="../logout.php" tabindex="-1" aria-disabled="true"> Logout</a>
      </li>
      
    </ul>
  </div>
</nav>


<br>
<br>
<?php
// 
// include('sidebar.php')

?>