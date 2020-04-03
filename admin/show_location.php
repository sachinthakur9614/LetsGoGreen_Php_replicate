<?php 
// 
include('nav.php');
?>





<br><br>
<div class="container">

<div class="row shadow-lg p-3 mb-5 bg-white rounded">
	<div class="col-md-12">
 <center><h3> Users Profile</h3></center>
        <hr class="bg-primary">
        <br><br>




<div class="table-responsive content-bg">

        <table id="product-table" class="table table-hover table-dark">
        <thead>
        <tr>
          <th>Sl No.</th>
          <th> Address Line 1</th>
          <th>Address Line 2</th>
          <th>District</th>
          <th>State</th>
          <th>Pincode</th>
          

         
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
	$sql = "SELECT * FROM tree_location";
    $result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    $count=1;
    $usertype='Contributor';
    while($row = mysqli_fetch_assoc($result)) {
      //  echo "id: " . $row["first_name"]. "<br>";
    	

    echo "<tr scope='row'><td valign='middle'>".$count++."</td>"; 
    echo "<td valign='middle'>".$row['add_line1']."</td>"; 
 	echo "<td valign='middle'>".$row['add_line2']."</td>";
 	echo "<td valign='middle'>".$row['distt']."</td>";
	echo "<td valign='middle'>".$row['state']."</td>";
	echo "<td valign='middle'>".$row['pincode']."</td>";
	
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


</div></div>

<br><br>
<br><br>
<br><br>

<?php 

include ('footer.php');
?>
