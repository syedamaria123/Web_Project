<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" href="css/style.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
   <title>
      
   </title>
</head>
<body>
<?php include 'menu.php'; ?>

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

</body>
</html>