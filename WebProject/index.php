<!DOCTYPE html>
<html>
<head>
		<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
</head>
<body>
	
	<?php include ('menu.php');
	?>

<section>
<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/Beach.jpg" alt="Beach" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Beach</h3>
        <p>Unwind, relax, and let the beach be your escape.</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/mountain.jpg" alt="Mountain" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Mountain</h3>
        <p>Elevate your spirit, conquer new heights in the mountains.</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/river.jpg" alt="river" width="1100" height="500">
      <div class="carousel-caption">
        <h3>River</h3>
        <p>Flow with nature's beauty, explore the wonders of rivers.</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
</section>


<section>
		<div class="container py-5">
			<div class="py-5">
				<h2 class="text-center">Travel Dairies</h2>
			</div>
			<div class="row justify-content-center">

				<?php
				require 'servicesConfig.php';

				$query = "SELECT * FROM tours";
				$query_run = mysqli_query($connection, $query);
				$check_tour = mysqli_num_rows($query_run)>0;

				if($check_tour)
				{
					while($row = mysqli_fetch_array($query_run))
					{
						?>
						<div class="col-md-8 col-lg-6 col-xl-4 text-center">
							<div class="card text-black">
								<img src="images/<?php echo $row['t_Image']; ?>" class="card-img-top" alt="Tour Images">
								<div class="card-body";?>
									<div class="text-center">
										<h4 class="card-title" > <?php echo $row['t_Name']; ?> </h4>
									</div>
									<div>
										<div>
											<span><a class="btn btn-info" href="tour_details.php?t_ID=<?php echo $row['t_ID']; ?>">View More</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<?php
					}	
				}
				else
				{
					echo "No Tours found";
				}
				?>
			</div>
		</div>
	</section>

	<section class="my-5">
		<div class="py-5">
			<h2 class="text-center">Gallery</h2>
		</div>

		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-12">
					<img src="images/Im10.jpg" class="img-fluid pb-4" >
				</div>
				<div class="col-lg-4 col-md-4 col-12">
					<img src="images/Im9.jpg" class="img-fluid pb-4" >
				</div>
				<div class="col-lg-4 col-md-4 col-12">
					<img src="images/Im8.jpg" class="img-fluid pb-4" >
				</div>
				<div class="col-lg-4 col-md-4 col-12">
					<img src="images/Im7.jpg" class="img-fluid pb-4" >
				</div>
				<div class="col-lg-4 col-md-4 col-12">
					<img src="images/Im6.jpg" class="img-fluid pb-4" >
				</div>
				<div class="col-lg-4 col-md-4 col-12">
					<img src="images/Im5.jpg" class="img-fluid pb-4" >
				</div>
			</div>
		</div>
	</section>

	<section class="my-5">
	<div class="py-5">
		<h2 class="text-center">About Us</h2>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-12">
				<img src="images/tourism.jpg" class="img-fluid aboutimg">
			</div>
			<div class="col-lg-6 col-md-6 col-12">
				<h2 class="display-4">We are a Tour Diary</h2>
				<p class="py-5"> Just a Mile Away is a captivating tour diary website with a unique mission to bring the world's hidden gems within reach. As avid travelers ourselves, we understand that some of the most remarkable experiences lie just a mile away from our everyday lives. Our platform is dedicated to uncovering these hidden treasures and sharing them with curious adventurers around the globe. Through vivid storytelling, stunning visuals, and firsthand accounts, Just a Mile Away invites travelers to embark on virtual journeys, discovering the fascinating history, breathtaking landscapes, and vibrant cultures that exist right on their doorstep. Our mission is to inspire a sense of wanderlust, encouraging individuals to explore the world around them, one mile at a time. Whether it's a hidden waterfall, a charming café, or an off-the-beaten-path hiking trail, Just a Mile Away invites you to embark on a thrilling adventure right in your own neighborhood.</p>
			</div>
		</div>
	</div>
</section>

	<section class="my-5">
		<div class="py-5">
				<h2 class="text-center">Contact Us</h2>
		</div>
		<div class="w-50 m-auto">
			<form action="userinfo.php" method="post">
				<div class="form-group">
					<label>Username:</label>
					<input type="text" name="user" autocomplete="off" class="form-control">
				</div>

				<div class="form-group">
					<label>Email ID:</label>
					<input type="text" name="email" autocomplete="off" class="form-control">
				</div>

				<div class="form-group">
					<label>Mobile No:</label>
					<input type="text" name="mobile" autocomplete="off" class="form-control">
				</div>

				<div class="form-group">
					<label>Comment</label>
					<textarea class="form-control" name="comment"></textarea>
				</div>
					<button type="submit" class="btn btn-success">Submit</button>
			</form>
		</div>
	</section>

	
<?php include ('footer.php');
	?>



  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>