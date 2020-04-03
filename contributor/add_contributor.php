<?php 
// 
include('nav.php');

?>


<div class="container">
     <center><h1> Contribute Sapling</h1></center>
        <hr class="bg-primary">
        <br><br>
	<div  class="row shadow-lg p-3 mb-5 bg-white rounded  border-info">

		<div class="col-md-6">
            <br>    
			<form  method="POST" action="contributor.php">
				<div class="form-group">
                	<h6>Sapling Count<sup>* &nbsp;</sup></h6>

                     <input type="number" required="" name="sapcount"class="form-control col-md-10 " id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Sapling Count">
                </div>
                <div class="form-group">
                    <h6>Tree Name<sup>* &nbsp;</sup></h6>
                	  <input type="text" name="treename"  required="" name="sapcount"class="form-control col-md-10 " id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tree name">

                    
                </div><div class="form-group">
                	<h6>Address Line 1<sup>* &nbsp;</sup></h6>
                        
                     <input type="text" required="" name="addline1"class="form-control col-md-10 " id="exampleInputEmail1" placeholder="Address Line 1" aria-describedby="emailHelp" >
                </div>
                <div class="form-group">

                 <h6>Address Line 2<sup>* &nbsp;</sup></h6>
                   
                   <input type="text" required="" name="addline2" class="form-control col-md-10 "  id="exampleInputEmail1" placeholder="Address Line 2" aria-describedby="emailHelp">
                     
                </div>
                <div class="form-group">

                	<h6>State <sup>* &nbsp;</sup></h6>
                     <input type="text"  required="" name="state"class="form-control col-md-10 " id="exampleInputEmail1" placeholder="State" aria-describedby="emailHelp" >
                </div>
                <div class="form-group">

                    <h6>Pincode <sup>* &nbsp;</sup></h6>
                     <input type="number"   maxlength="6"   required="" placeholder="Pincode" name="pincode"class="form-control col-md-10 "   id="exampleInputEmail1" aria-describedby="emailHelp" >
                </div>
                <div class="form-group">


                    <input type="submit" name="submit" value="Submit" class="btn btn-primary" >



		</div>
    </form>
</div>


	</div>
	



</div>



<?php 

include 'footer.php';
?>