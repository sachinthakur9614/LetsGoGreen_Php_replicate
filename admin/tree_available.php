<?php 

 include('nav.php');

 ?>



 <div  class="container">

 	<center><h3>Tree Available Locations</h3></center>
        <hr class="bg-primary">
        <br><br>
	<div class="row  shadow-lg p-3 mb-5 bg-white rounded">

		<div class="col-md-6">

<?php
                  if(!empty($_GET['register'])==0)
                  { ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Plant Tree added successfully! </strong> 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
                    
                <?php  }?>
			<form  method="POST" action="locations.php">

				<div class="form-group">
					<h6>Address Line 1<sup>* &nbsp;</sup></h6>

                     <input type="text" required="" name="addline1"class="form-control col-md-10 " id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Address Line 1">
                </div>
					<div class="form-group">
					<h6>Address Line 2<sup>* &nbsp;</sup></h6>

                     <input type="text" required="" name="addline2"class="form-control col-md-10 " id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Address Line 2">
                </div>
					<div class="form-group">
					<h6>District<sup>* &nbsp;</sup></h6>

                     <input type="text" required="" name="district"class="form-control col-md-10 " id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="District">
                </div>
					<div class="form-group">
					<h6>State<sup>* &nbsp;</sup></h6>

                     <input type="text" required="" name="state"class="form-control col-md-10 " id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="State">
                </div>
					<div class="form-group">
					<h6>Pincode<sup>* &nbsp;</sup></h6>

                     <input type="number" required="" maxlength="6" name="pincode"class="form-control col-md-10 " id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="pincode">
                </div>

                <div class="form-group">
					

                     <input type="submit"  class="btn btn-primary"  name="submit" maxlength="6"  value="Submit"  id="exampleInputEmail1" aria-describedby="emailHelp" >
                </div>


					
				</div>
				


			</form>

		</div>
	</div> 	



 </div>



 <br><br><br>

 <?php 

 include 'footer.php';

 ?>