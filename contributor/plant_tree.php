<?php 

 include('nav.php');

 ?>


<div class="container">
        <div class="row">
                <div class="col-md-6">
                
                <?php   if(!empty($_GET['error'])==1)
                  { ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Information is wrong </strong> 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
                    
                <?php  }?>
                    <center> <h3>Plant a tree</h3></center>
                    <form  method="POST" action="planttree.php">
                                    <div class="form-group">

                                    <div class="form-group">
                                               <label>Tree  First Image</label>
                                                    <input type="file" name="first"class="form-control col-md-10 " id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter tree name">
                                                      <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                        </div>

                                    <div class="form-group">

                                          <label>Tree Second Image</label>
                                          <input type="file" name="second"class="form-control col-md-10 " id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter tree name">
                                                      
                                     
                                   </div>

                                    <div class=" form group">
                                        <label>Tree  Final  image </label>
                                                 <input type="file" name="final" class="form-control col-md-10 " id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tree image">
                                                 <!-- <smal id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                    </div>

                                          
                                    <div class=" form group">   
                                        <br><br>           
                                        <input type="submit" value=submit class="btn btn-primary">
                                    </div>
                     </form>
                </div>
        </div>
</div>
                                