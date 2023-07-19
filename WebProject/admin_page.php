<?php
	require 'servicesConfig.php';

if(isset($_POST['add_tour'])){

   $tour_name = $_POST['tour_name'];
   $tour_description = $_POST['tour_description'];
   $tour_image = $_FILES['tour_image']['name'];
   $tour_image_tmp_name = $_FILES['tour_image']['tmp_name'];
   $tour_image_folder = 'images/'.$tour_image;

   if(empty($tour_name) || empty($tour_description) || empty($tour_image)){
      $message[] = 'please fill out all';
   }else{
      $query = "insert into tours(t_Name, t_Description, t_Image) values('$tour_name', '$tour_description', '$tour_image')";
      $upload = mysqli_query($connection,$query);
      if($upload){
         move_uploaded_file($tour_image_tmp_name, $tour_image_folder);
         $message[] = 'new tour added successfully';
      }else{
         $message[] = 'could not add the tour';
      }
   }

};

if(isset($_GET['delete'])){
   $t_ID = $_GET['delete'];
   mysqli_query($connection, "delete from tours where t_ID ='$t_ID'");
   header('location:admin_page.php');
};

?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
   <title>admin page</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <style type="text/css">
   		@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap');

   		:root{
   			--green:#27ae60;
   			--black:#333;
   			--white:#fff;
   			--bg-color:#eee;
   			--box-shadow:0 .5rem 1rem rgba(0,0,0,.1);
   			--border:.1rem solid var(--black);
   		}

   		*{
   			font-family: 'Poppins', sans-serif;
   			margin:0; padding:0;
   			box-sizing: border-box;
   			outline: none; border:none;
   			text-decoration: none;
   			text-transform: capitalize;
   		}

   		html{
   			font-size: 62.5%;
   			overflow-x: hidden;
   		}

   		.btn{
   			display: block;
   			width: 100%;
   			cursor: pointer;
   			border-radius: .5rem;
   			margin-top: 1rem;
   			font-size: 1.7rem;
   			padding:1rem 3rem;
   			background: var(--green);
   			color:var(--white);
   			text-align: center;
   		}

   		.btn:hover{
   			background: var(--black);
   		}

   		.message{
   			display: block;
   			background: var(--bg-color);
   			padding:1.5rem 1rem;
   			font-size: 2rem;
   			color:var(--black);
   			margin-bottom: 2rem;
   			text-align: center;
   		}

   		.container{
   			max-width: 1200px;
   			padding:2rem;
   			margin:0 auto;
   		}

   		.admin-tour-form-container.centered{
   			display: flex;
   			align-items: center;
   			justify-content: center;
   			min-height: 100vh;

   		}

   		.admin-tour-form-container form{
   			max-width: 50rem;
   			margin:0 auto;
   			padding:2rem;
   			border-radius: .5rem;
   			background: var(--bg-color);
   		}

   		.admin-tour-form-container form h3{
   			text-transform: uppercase;
   			color:var(--black);
   			margin-bottom: 1rem;
   			text-align: center;
   			font-size: 2.5rem;
   		}

   		.admin-tour-form-container form .box{
   			width: 100%;
   			border-radius: .5rem;
   			padding:1.2rem 1.5rem;
   			font-size: 1.7rem;
   			margin:1rem 0;
   			background: var(--white);
   			text-transform: none;
   		}

   		.tour-display{
   			margin:2rem 0;
   		}

   		.tour-display .tour-display-table{
   			width: 100%;
   			text-align: center;
   		}

   		.tour-display .tour-display-table thead{
   			background: var(--bg-color);
   		}

   		.tour-display .tour-display-table th{
   			padding:1rem;
   			font-size: 2rem;
   		}


   		.tour-display .tour-display-table td{
   			padding:1rem;
   			font-size: 2rem;
   			border-bottom: var(--border);
   		}

   		.tour-display .tour-display-table .btn:first-child{
   			margin-top: 0;
   		}

   		.tour-display .tour-display-table .btn:last-child{
   			background: crimson;
   		}

   		.tour-display .tour-display-table .btn:last-child:hover{
   			background: var(--black);
   		}
   	</style>

</head>
<body>

<section>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">Just A Mile Away</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="topnav-right">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="login.php">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>

<?php

if(isset($message)){
   foreach($message as $message){
      echo '<span class="message">'.$message.'</span>';
   }
}

?>
   
<div class="container">

   <div class="admin-tour-form-container">

      <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
         <h3>add a new tour</h3>
         <input type="text" placeholder="enter name" name="tour_name" class="box">
         <input type="text" placeholder="enter description" name="tour_description" class="box">
         <input type="file" accept="image/png, image/jpeg, image/jpg" name="tour_image" class="box">
         <input type="submit" class="btn" name="add_tour" value="add tour">
      </form>

   </div>

   <?php
   $select = mysqli_query($connection, "select * from tours");
   ?>
   <div class="tour-display">
      <table class="tour-display-table">
         <thead>
         <tr>
            <th>tour image</th>
            <th>tour name</th>
            <th>tour price</th>
            <th>action</th>
         </tr>
         </thead>
         <?php while($row = mysqli_fetch_assoc($select)){ ?>
	         <tr>
	            <td><img src="images/<?php echo $row['t_Image']; ?>" height="100" alt=""></td>
	            <td><?php echo $row['t_Name']; ?></td>
	            <td><?php echo $row['t_Description']; ?></td>
	            <td>
	               <a href="admin_page.php?delete=<?php echo $row['t_ID']; ?>" class="btn"> <i class="fas fa-trash"></i> delete </a>
	            </td>
	         </tr>
      	 <?php } ?>
      </table>
   </div>

</div>


</body>
</html>