<?php 
// 
include('nav.php');

?>



<div class="container">
     <center><h1> Add Tree Information</h1></center>
        <hr class="bg-primary">
        <br><br>
	<div  class="row shadow-lg p-3 mb-5 bg-white rounded  border-info">

		<div class="col-md-6">
            <br>    
			<form  method="POST" action="tree_info.php">
				<div class="form-group">
                	<h6>Tree  Name<sup>* &nbsp;</sup></h6>

                     <input type="text" required="" name="treename"class="form-control col-md-10 " id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tree name">
                </div>
                <div class="form-group">
                    <h6>Tree Description<sup>* &nbsp;</sup></h6>
                	
                     <textarea required="" name="treedescription" class="form-control col-md-10 "  id="exampleInputEmail1" aria-describedby="emailHelp">
                     </textarea>
                </div><div class="form-group">
                	<h6>Tree age<sup>* &nbsp;</sup></h6>
                        
                     <input type="number" required="" name="treeage"class="form-control col-md-10 " id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tree Age">
                </div>
                <div class="form-group">

                 <h6>Tree  Environment effects<sup>* &nbsp;</sup></h6>
                   
                     <textarea required="" name="treeenv" class="form-control col-md-10 "  id="exampleInputEmail1" aria-describedby="emailHelp">
                     </textarea>
                </div>
                <div class="form-group">

                	<h6>Tree Images <sup>* &nbsp;</sup></h6>
                     <input type="file"  required="" name="treeimage"class="form-control col-md-10 " id="exampleInputEmail1" aria-describedby="emailHelp" >
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