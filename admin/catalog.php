


<?php 

include('nav.php');

?>


<div class=" container">
    <h3 class=" text-center"> Tree Information</h3>
    <hr class="btn-dark  " >


    <div class="row shadow-lg p-3 mb-5 bg-white rounded">

<br><br><br><br>
  <table id="product-table" class="table table-hover table-dark">
<br><br><br>
        <thead>
          <br><br><br>
        <tr>
          <th>Sl No.</th>
          <th>Tree Name</th>
          <th>Tree Images</th>
          <th>Tree Description</th>
          <th>Life time</th>
          
         
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
  $sql = "SELECT * FROM tree_catalog";
    $result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    $count=1;
    $usertype='Contributor';
    while($row = mysqli_fetch_assoc($result)) {
      //  echo "id: " . $row["first_name"]. "<br>";
      




    echo "<tr scope='row'><td valign='middle'>".$count++."</td>"; 
     
  echo "<td valign='middle'>".$row['tree_name']."</td>";
  echo "<td valign='middle'>".$row['tree_image']."</td>";
  echo "<td valign='middle'>".$row['tree_description']."</td>";
  echo "<td valign='middle'>".$row['life-time']."</td>";
  // echo "<td valign='middle'>". $usertype."</td>";  
    echo "</tr>";



      // echo "<div class='col-md-4'>";
      // echo "<div class='card' style='width: 18rem;''>";
      // echo "<img src='".$row['tree_image']."' class='card-img-top' alt='tree_ images'>";

      // echo " <p class='card-text'>".$row['tree_name']."</p> ";


      // echo " <div class='card-body'><h5>".$row['tree_description']."</h5>";

      // echo " <a href='#'' class='card-link'>".$row['life-time']."</a> ";
      
      // echo "</div> <br>
      // <br> </div> </div>";


    }
} else {
    echo " <h4>0 results</h4>";
}

mysqli_close($conn);

  ?>


</tbody>
</table>
</div>
</div>

<br><br>



<?php

include ('footer.php');

?>
