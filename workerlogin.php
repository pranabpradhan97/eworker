<?php
session_start();
	if(isset($_SESSION['email']))
	{

	}

	if(isset($_REQUEST["login"]))
	{
			$con=mysqli_connect("localhost","root","","eworker");
			$email=mysqli_real_escape_string($con,$_POST["email"]);
			$password=mysqli_real_escape_string($con,$_POST["password"]);
			$password=md5($password);
			$result=mysqli_query($con,"SELECT * from workeregistration where email='$email' and password='$password'");

			if($arr=mysqli_fetch_array($result))
			{
				$_SESSION["email"]=$email;
				header('location:workerdetailschange.php');


			}
			else
			{
				echo "Invalid Details";
			}


	}




?>








<html>
<head>

	<title>eWorker</title>

	<!-- Bootstrap CSS CDN -->
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom CSS -->
	<!--<link rel="stylesheet" type="text/css" href="css/style.css"> -->
	<style type="text/css">
		@import url('https://fonts.googleapis.com/css?family=Raleway:300');
@import url('https://fonts.googleapis.com/css?family=Quicksand');

*{
	margin: 0;
	padding: 0;
	text-decoration: none;
}
body{
	background-color: white;
}

.background{

  position: absolute;
  display: block;
  top: 0;
  left: 0;
  z-index: 0;


}

.heading_h1{
	color: #00a4e4;
	font-family: 'Raleway', sans-serif;
	margin-top: 65px;
	margin-bottom: 20px;
}

.heading_h1 .sub_h1{
	color: #13293d;
	font-weight: bolder;
}

.loginContainer{
	background-color: #12d3f6;
	height: 300px;
	border-radius: 10px;
	padding-top: 100px;
	font-family: 'Quicksand', sans-serif;
}

input[type="text"]{
    border-radius:30px;
    -moz-border-radius:30px;
    -webkit-border-radius:30px;
}

input[type="text"]:focus{
	border: 2px solid #ffa400;
}

input[type="password"]{
    border-radius:30px;
    -moz-border-radius:30px;
    -webkit-border-radius:30px;
}

input[type="password"]:focus{
	border: 2px solid #ffa400;
}

.login_btn{
	background-color: #ffa400;
	border: 1px solid #ffa400;
	border-radius: 10px;
	color: #fff;
	padding: 5px 50px;
	font-size: 18px;
	margin-bottom: 5px;
	transition: .9s all;
}

.login_btn:hover{
	background-color: #00a4e4;
	border:1px solid #00a4e4;
	border-radius: 50px;
}

.forgotLink a{
	text-decoration: none;
	color: #d2d2d2;
}

.signupLink{
	color: #808080;
}

.signupLink a{
	text-decoration: none;
	color: #00a4e4;
}

	</style>

</head>
<body>

<div class="container mainContent">
	<h1 class="text-center heading_h1">	WORKER <span class="sub_h1"> Login </span></h1>
	<canvas class="background"></canvas>
	<div class="row">
		<div class="col-md-6 col-md-offset-3 col-xs-6 col-xs-offset-3 loginContainer">
			<form method="post" action="workerlogin.php">
				
				

				
				<div class="col-md-8 col-md-offset-2 col-xs-8 col-xs-offset-2  form-group">
					<input  type="email" name="email" placeholder="Email" class="form-control" style="border-radius: 20px;" required=""/>
				</div>

				<div class="col-md-8 col-md-offset-2 col-xs-8 col-xs-offset-2  form-group">
					<input type="password" name="password" placeholder="Password" class="form-control" required="" />
				</div>

				
				


				

				

				<div class="col-md-8 col-md-offset-2 col-xs-8 col-xs-offset-2  form-group" align="center">
					<button class="login_btn" name="login">Login</button>
					
				</div>
			</form>

			
		</div>
	</div>
</div>
<script type="text/javascript" src="script.js"></script>


	<!-- jQuery CDN -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Bootstrap JS CDN -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body><script src="https://cdnjs.cloudflare.com/ajax/libs/particlesjs/2.2.2/particles.min.js"></script>
</html>