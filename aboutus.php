

<?php



include('header.php');

include('config.php');


?>
<br>
<hr class="bg-info col-md-8">
<section id="aboutus">
	<div class="container col-md-10">
	
		<div class="text-center">
			<h1>Lets Go Green </h1>
			<hr class="bg-info col-md-8">
		</div>
		<div class="row shadow p-3 mb-5 bg-white rounded">
			<div class="col-md-8">
				<div class="media">
					<div class="media-body">
						<h5 class="mt-0 mb-1">Trees play an important role in an ecosystem by maintaining ecological balance and equilibrium. Trees hold the soil in which they grow. As a result the fertile top soil is held securely; otherwise it may get drained or washed away in water such as during rains and floods. Trees are the natural habitat for many wildlife species that includes mammals, birds, reptiles and insects. Trees play a vital role in climate. A micro-habitat formed by planting trees can create a green and natural area, and a micro-climate that is healthy for all the life forms, including man, that inhabit the area.


</h5>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<img class="border border-info rounded-circle" src="img/logo.png" height="300"
					width="300">
			</div>
		</div>
	</div>

</section>

<section>
	<div class="container col-md-10">
		<div class="text-center">
			<h1>Our Team </h1>
			<hr class="bg-info col-md-8">
		</div>
		<div class="row shadow p-3 mb-5 bg-white rounded">
		
			<div class="col-md-6 ">
				<div class="well well-sm">
					<div class="media">
						<a class="thumbnail pull-left" href="#">
							<img class="border border-info rounded-circle" src="ad.jpeg" height="100"
								width="100">
							<div class="col-md-1"></div>
						</a>
						<div class="media-body" style="margin-left: 1em;">
							<h4 class="media-heading"><span class="label label-info">Adarsh Thakur <span>
										 </span> </h4>
							<p><span class="label label-info"></span> <span
									class="label label-warning">Developer</span></p>
							<button class=" btn ">
								<a class=" bg-dark btn btn-outline-info" href="www.linkedin.com">
									LinkedIn </a> </button>
							<button class=" btn ">
								<a class=" bg-dark btn btn-outline-info" href="www.facebook.com">
									Facebook </a> </button>
							<button class=" btn ">
								<a class=" bg-dark btn btn-outline-info" href="www.twitter.com">
									Twitter </a> </button>
						</div>
					</div>
				</div>
				<hr class="bg-info col-md-6">
			</div>
			<div class="col-md-6 ">
				<div class="well well-sm">
					<div class="media">
						<a class="thumbnail pull-left" href="#">
							<img class="border border-info rounded-circle" src="ak.jpeg" height="100"
								width="100">
							<div class="col-md-1"></div>
						</a>
						<div class="media-body" style="margin-left: 1em;">
							<h4 class="media-heading"><span class="label label-info">Akshat Negi <span>
										 </span> </h4>
							<p><span class="label label-info"></span> <span
									class="label label-warning">Developer</span></p>
							<button class=" btn ">
								<a class=" bg-dark btn btn-outline-info" href="www.linkedin.com">
									LinkedIn </a> </button>
							<button class=" btn ">
								<a class=" bg-dark btn btn-outline-info" href="www.facebook.com">
									Facebook </a> </button>
							<button class=" btn ">
								<a class=" bg-dark btn btn-outline-info" href="www.twitter.com">
									Twitter </a> </button>
						</div>
					</div>
				</div>
				<hr class="bg-info col-md-6">
			</div><div class="col-md-6 ">
				<div class="well well-sm">
					<div class="media">
						<a class="thumbnail pull-left" href="#">
							<img class="border border-info rounded-circle" src="dh.jpeg" height="100"
								width="100">
							<div class="col-md-1"></div>
						</a>
						<div class="media-body" style="margin-left: 1em;">
							<h4 class="media-heading"><span class="label label-info">Dhruv Thakur <span>
										 </span> </h4>
							<p><span class="label label-info"></span> <span
									class="label label-warning">Developer</span></p>
							<button class=" btn ">
								<a class=" bg-dark btn btn-outline-info" href="www.linkedin.com">
									LinkedIn </a> </button>
							<button class=" btn ">
								<a class=" bg-dark btn btn-outline-info" href="www.facebook.com">
									Facebook </a> </button>
							<button class=" btn ">
								<a class=" bg-dark btn btn-outline-info" href="www.twitter.com">
									Twitter </a> </button>
						</div>
					</div>
				</div>
				<hr class="bg-info col-md-6">
			</div>
			<div class="col-md-6 ">
			</div>
		</div>
</section>

<section>
	<div class="container col-md-10">
		<div class="text-center">
			<h1>Our Services</h1>
			<hr class="bg-info col-md-8">
		</div>
		<div class="row shadow p-3 mb-5 bg-white rounded">
			<div class="col-md-6 ">
				
				<ul class="list-group list-group-flush">
                    <li class="list-group-item text-center"> Donate money</li>
                    
                    <li class="list-group-item text-center"> Plant Trees</li>
                    <li class="list-group-item text-center"> Save Enviornment</li>
                    <li class="list-group-item text-center"> Volunteer ships</li>
                    <li class="list-group-item text-center"> Contribute Sapling</li>
                    <li class="list-group-item text-center"> Become Community member  </li>
                   
				</ul>
				
			</div>
			<div class="col-md-6 ">
				<h3 class="text-center">Contact Us</h3>
				<hr class="bg-info col-md-8">
				<form method="POST" action="{% url 'contact' %}">
					
					<div class="form-group">
						<label for="Password">Name:</label>
						<input type="text" class="form-control btn-outline-info" name="name" id="name"
							aria-describedby="emailHelp" placeholder="Enter Name">
					</div>
					<div class="form-group">
						<label for="email">Email: </label>
						<input type="email" class="form-control btn-outline-info" id="email" name="email"
							aria-describedby="emailHelp" placeholder="Enter Email Please">
					</div>
					<div class="form-group">
						<label for="email">Subject: </label>
						<input type="text" class="form-control btn-outline-info" id="email" name="subject"
							aria-describedby="emailHelp" placeholder="Enter Email Please">
					</div>
					<div class="form-group">
						<label for="Password">Mobile:</label>
						<input type="text" class="form-control btn-outline-info" name='mobile' id="name"
							aria-describedby="emailHelp" placeholder="Enter Name">
					</div>
					<div class="form-group">
						<label for="Password">Message: </label>
						<textarea name="message" class="form-control border-info">
				    </textarea>
					</div>
					<div class="form-group">
						<input type="submit" class="btn btn-outline-info bg-dark" id="password"
							aria-describedby="emailHelp" value="Submit">
						<!--Add buttons to initiate auth sequence and sign out--> <br>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
