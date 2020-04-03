


<?php 

 include('nav.php');

 ?>






<div class="container">
	<center><h3> Dash board</h3></center>
        <hr class="bg-primary">
        <br><br>


	<div class="row col-md-12 shadow-lg p-3 mb-5 bg-white rounded">

		<div class="col-md-4 ">
			<div class="card" style="width: 18rem;">
			  <div class="card-body">
			    <h5 class="card-title">Add Tree Catalog</h5>
			    <p class="card-text"> We add the trees to our portal so that we can provide </p>
			    <a href="plant.php" class="btn btn-primary">Add Tree Catalog </a>
			  </div>
			</div>
		</div>

		
		<div class="col-md-4">
			<div class="card" style="width: 18rem;">
			  <div class="card-body">
			    <h5 class="card-title">Tree  Catalog</h5>
			    <p class="card-text">Showing the list of trees provided by user Logged in</p>
			    <a href="catalog.php" class="btn btn-primary">Tree  Catalog</a>
			  </div>
			</div>
		</div>  
		<div class="col-md-4 ">
			<div class="card" style="width: 18rem;">
			  <div class="card-body">
			    <h5 class="card-title">Plant Tree</h5>
			    <p class="card-text"> Provide information of trees user will plant </p>
			    <a href="plant_tree.php" class="btn btn-primary">Plant Tree</a>
			  </div>
			</div>
		</div>
		<br>
	</div>
	<div class="row col-md-12 shadow-lg p-3 mb-5 bg-white rounded">

		<div class="col-md-4 ">
			<div class="card" style="width: 18rem;">
			 
			  <div class="card-body">
			    <h5 class="card-title">Plantedt Trees</h5>
			    <p class="card-text">Showing information of trees user have planted</p>
			    <a href="show_planted.php" class="btn btn-primary">Plantedt Trees</a>
			  </div>
			</div>
		</div>

		
		<div class="col-md-4">
			<div class="card" style="width: 18rem;">
			 
			  <div class="card-body">
			    <h5 class="card-title">Profile</h5>
			    <p class="card-text">User Profile information where user is able to see his/her info</p>
			    <a href="profile.php" class="btn btn-primary">Profile</a>
			  </div>
			</div>
		</div>  
		<div class="col-md-4 ">
			<div class="card" style="width: 18rem;">
			    <div class="card-body">
			    <h5 class="card-title">Available Location </h5>
			    <p class="card-text">Available Location where users can plant trees</p>
			    <a href="show_locations.php" class="btn btn-primary">Show Locations</a>
			  </div>
			</div>
		</div>
			<br>
	</div>
	</div>




	</div>





</div>
</div>





<?php 


include 'footer.php';
?>