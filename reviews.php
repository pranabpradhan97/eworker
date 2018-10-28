<?php
	/*
	include 'review.php';
	$con=mysqli_connect("localhost","root","","eworker");

	if(isset($_POST['button']))
	{
		$review=$_REQUEST["review"];
		mysqli_query($con,"insert into userregistration (review) values($review);");
		echo "user review registration successful";

		}


*/

?>



<!DOCTYPE html>
<html>
<head>
	<title>review</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<style type="text/css">
		.form-group {
			margin-top: 100px;
		}
	</style>
</head>
<body>
	<form method="post">
		<div class="form-group margin-below">
                    <input type="text" class="form-control" name="review" 
                           placeholder="write review">
                </div>
                <button name="button" class="btn btn-success">Post</button>
	</form>

</body>
</html>