<?php 

 include('nav.php');

 ?>
 <div class="container">


<center><h3> Planted Trees</h3></center>
        <hr class="bg-primary">
        <br><br>


        <div class="row  shadow-lg p-3 mb-5 bg-white rounded">

        <div class="col-md-12">
       

<br>
<br>

<div class="table-responsive content-bg">

        <table id="product-table" class="table table-hover table-dark">
        <thead>
        <tr>
          <th>Sl No.</th>
          <th>First Image</th>
          <th>Second Image</th>
          <th>Last Image</th>
          <th>User id</th>
         
        </tr>
      </thead>

      <tbody>

<?php

$server = "localhost:3306";
$user ="root";
$pass ="";
$db = "letsgogreen";

$conn = mysqli_connect($server, $user, $pass, $db);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
    // SELECT * FROM `registration`
  $sql = "SELECT * FROM tree_planted";
    $result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    $count=1;
    $usertype='Contributor';
    while($row = mysqli_fetch_assoc($result)) {
      //  echo "id: " . $row["first_name"]. "<br>";
      

    echo "<tr scope='row'><td valign='middle'>".($count++)."</td>"; 
  
  echo "<td valign='middle'><img src='".$row['first']."' alt='".$row['first']."' height='30px;' /></td>";
  echo "<td valign='middle'><img src='".$row['second']."' alt='".$row['second']."' height='30px;' /></td>";
  echo "<td valign='middle'><img src='".$row['final']."' alt='".$row['final']."' height='30px;' /></td>";
  echo "<td valign='middle'>".$row['user_id']."</td>";  
  echo "</tr>";

    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>


</tbody>
</table>

</div>

       </div>
     </div>
   </div>
   
   <br>
   <br>
  <?php 

 include 'footer.php';
  ?>