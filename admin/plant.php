<?php 

 include('nav.php');

 ?>

 </div>



 <div class="container pull-right">

        <div class="row">
             
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
                    <center> <h3>Add tree info</h3></center>
                    <form  method="POST" action="plantdata.php">
                                    <div class="form-group">

                                    <div class="form-group">
                                               <label>Tree name</label>
                                                          <input type="varchar" name="tree_name"class="form-control col-md-10 " id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter tree name">
                                                          <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                                        </div>
                                          <label>Tree description</label>
                                       <textarea   name="tree_description" class="form-control col-md-10 " id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tree description"></textarea>
                                        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                      </div>

                                    <div class=" form group">
                                        <label>Tree image</label>
                                                 <input type="file" name="tree_image" class="form-control col-md-10 " id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tree image">
                                                 <!-- <smal id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                    </div>

                                          
                                                        <div class="form-group">
                                                        <label>Life Time</label>
                                                                   <input type="text"name="life_time" class="form-control col-md-10 " id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter life cycless">
                                                                   <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                                                 </div>
                                                                 <input type="submit" value=submit class="btn btn-primary">
                     </form>
                </div>

                <div class="col-md-6">
                    <a class=" btn btn-info" href="catalog.php"> Show Trees</a>
                </div>
                                          </div>
                                     </div>