<?php

$con = mysqli_connect('localhost', 'root');

if($con){
	echo"Connection Successful";
}
else{
	echo"No Connection";
}

mysqli_select_db($con, 'userinfo');


$UserName = $_POST['user'];
$Email = $_POST['email'];
$Mobile = $_POST['mobile'];
$Comment = $_POST['comment'];

$query = "insert into userinfodata (UserName, Email, Mobile, Comment)
values('$UserName', '$Email', '$Mobile', '$Comment')";




mysqli_query($con, $query);

header('location:index.php');

?>