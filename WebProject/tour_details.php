<!DOCTYPE html>
<html>
<head>
		<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
	<style >
		.card-body{
        white-space: normal;
  }
	</style>
</head>
<body>
	<?php
require 'servicesConfig.php';

$query = "SELECT * FROM tours where t_ID='$_GET[t_ID]'";
$query_run = mysqli_query($connection, $query);
$check_tour = mysqli_num_rows($query_run)>0;

if($check_tour)
{
	while($row = mysqli_fetch_array($query_run))
	{
		?>
		<div class="card mx-auto" style="width: 50%;">
			<div class="card text-black">
				<img src="images/<?php echo $row['t_Image']; ?>" class="card-img-top" alt="Tour Images">
				<div class="card-body";?>
					<div class="text-center">
						<h4 class="card-title" > <?php echo $row['t_Name']; ?> </h4>
					</div>
					<div>
						<div>
							<p class="card-text text-center"> 
								<?php echo $row['t_Description']; ?>
							</p>
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


</body>
</html>