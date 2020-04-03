<?php 

 include('nav.php');

 ?>
 <div class="container">
  <center><h3>Add tree info</h3></center>
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
                    <!-- <center> <h3>Add tree info</h3></center> -->
                    <form  method="POST" action="plantdata.php">
                                    <div class="form-group">

                                    <div class="form-group">
                                      <h6>Tree name<sup>* &nbsp;</sup></h6>

                                            
                                                          <input type="varchar" name="tree_name"class="form-control col-md-10 " id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter tree name">
                                                          <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                                        </div>
                                          <h6>Tree description<sup>* &nbsp;</sup></h6>

                                          
                                       <textarea   name="tree_description" class="form-control col-md-10 " id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tree description"></textarea>
                                        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                      </div>

                                    <div class=" form group">
                                       <h6>Tree image<sup>* &nbsp;</sup></h6>


                                       
                                                 <input type="file" name="tree_image" class="form-control col-md-10 " id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tree image">
                                                 <!-- <smal id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                    </div>

                                    <div class="form-group">
                                    <h6>Life Time<sup>* &nbsp;</sup></h6>
                                      
                                   <input type="text"name="life_time" class="form-control col-md-10 " id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter life cycless">
                                   </div>
                              <input type="submit" value=submit class="btn btn-primary">
                     </form>
                </div>

                <div class="col-md-6">
                    <a class=" btn btn-info" href="catalog.php"> Show Trees</a>
                </div>
                                          </div>
                                     </div>