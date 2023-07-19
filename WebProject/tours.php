<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
	<title></title>
</head>
<body>
	<?php include 'menu.php'; 
	?>
	

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

	<?php include ('footer.php');
	?>
</body>
</html>