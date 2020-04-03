<?php 

 include('nav.php');

 ?>


<div class="container">
        <div class="row">
               
<div class="table-responsive content-bg">

<center>
<h3> Planted Trees</h3>


</center>
<hr class='bg-info'>
         <table id="product-table" class=" table table-responsive table-striped    table-dark  table-bordered tablesorter">

        <thead class="success  bg-secondary">
        <tr class="primary">
          <th width="20%" >Sl No.</th>
          <th width="20%" scope="col">Tree Name</th>
          <th width="20%" scope="col">Tree Description</th>
          <th width="40%" scope="col">Tree images</th>
        
          
        </tr>
      </thead>

      <tbody>


	<?php 
          $event_sql = "SELECT * FROM tree_catalog ";//" ORDER BY edate DESC";
       
$event_result = $con->query($event_sql);
    if($event_result->num_rows > 0) {
      $count=0;
      while($sponsor_row = $event_result->fetch_assoc())
      { ?>
       <tr class="active  bg-secondary black text-black" >
       <td class="warning bg-secondary  text-white" valign="middle"><?php echo $count+1; ?></td>
       <td  class="warning" valign="middle"><?php echo $sponsor_row['courseId']; ?></td>
       <td  class="warning"warning="middle"><?php echo $sponsor_row['coursename']; ?></td>
       <td  class="warning" valign="middle"><?php echo $sponsor_row['class'];} ?></td>
      
      </tr>


<?php 
}
?>

        </div>
</div>
                                