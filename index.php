
<?php



include('header.php');

include('config.php');


?>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" >
      <div class="carousel-item active" data-interval="5000" >
          <div class="carousel-caption d-none d-md-block"; >
          <h1>Plant a tree and plant a hope for future</h1>
          <p>...</p>
      </div>
        <img src="https://i.imgur.com/8wwvsnH.jpg" class="d-block w-100" height="500" alt="...">
      </div>
      <div class="carousel-item" data-interval="5000">
          <div class="carousel-caption d-none d-md-block">
          <h1>See the forest for the trees</h1>
          <p>...</p>
      </div>
        <img src="https://wallpaperaccess.com/full/30084.jpg"class="d-block w-100" height="500" alt="...">
</div>
      <div class="carousel-item" data-interval="5000">
          <div class="carousel-caption d-none d-md-block">
              <h1>Let the green be seen</h1>
              <p>...</p>
            </div>
        <img src="https://www.bestfunforall.com/better/imgs/Green%20Forest%20HD%20wallpaper%20%2016.jpg" class="d-block w-100" height="500" alt="...">
      </div> -->
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <hr>

  
<?php




$dbselect = mysqli_select_db($con,$db);
if(!$dbselect)
{
  echo "Database Not Selected";
}  

?>


  <div class="container">
      <div class="row">
              <div class="col-md-8">
                  <p> Trees play an important role in an ecosystem by maintaining ecological balance and equilibrium. Trees hold the soil in which they grow. As a result the fertile top soil is held securely; otherwise it may get drained or washed away in water such as during rains and floods. Trees are the natural habitat for many wildlife species that includes mammals, birds, reptiles and insects. Trees play a vital role in climate. A micro-habitat formed by planting trees can create a green and natural area, and a micro-climate that is healthy for all the life forms, including man, that inhabit the area.</p>
       
</div>
<div class="col-md-4">
 <img src="img/img4.jpg">  
</div>
  </div>
  <hr>
  <div class="row">
      <div class="card-deck">
          <div class="card">
            <img src="https://stylesatlife.com/wp-content/uploads/2016/08/1.Banyan-tree.png" class="card-img-top" alt="..." height="200px">
            <div class="card-body">
              <h5 class="card-title">Banyan Trees</h5>
              <p class="card-text">banyan trees are mostly seen in different regions of the country and are the national tree of India that grows in a special type of soil. The oldest Banyan tree is present in Kolkata. This huge type of tree has extensive branches in order to provide support to it, having height more than 21 m. </p>
              <p class="card-text"><small class="text-muted"></small></p>
            </div>
          </div>
          <div class="card">
            <img src="https://stylesatlife.com/wp-content/uploads/2016/08/8.-Mahagony.png" class="card-img-top" alt="..." height="200px">
            <div class="card-body">
              <h5 class="card-title"> Indian Rosewood</h5>
              <p class="card-text">The rosewood is a kind of tree alternate rows up to an altitude of about 25 m and has a diameter of about 3 m. This rosewood is a deciduous tree which grows straight. Flowers are of white and pink colours. The fruit is brown coloured and is of very dry and hard. Crown part is oval in shape.</p>
              <p class="card-text"><small class="text-muted"></small></p>
            </div>
          </div>
          <div class="card">
            <img src="https://stylesatlife.com/wp-content/uploads/2016/08/16.-The-maple-tree.png" class="card-img-top" alt="..." height="200px">
            <div class="card-body">
              <h5 class="card-title">The Maple Tree</h5>
              <p class="card-text">Maple is a common type of shrub. There are as many as 125 species of maple trees which are present in nature. The main types of maple trees are sugar maple, red maple, silver maple, Japanese maple, Norway maple and paperbark maple. The trees are deciduous trees which mean they lose their leaves in each fall but some are there that do not shed the leaves. Canadian flag depicts a maple leaf on it.</p>
              <p class="card-text"><small class="text-muted"></small></p>
            </div>
          </div>
        </div>
  </div>

</div>
  <?php 
 include('footer.php');
 ?>