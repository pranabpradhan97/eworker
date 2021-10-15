<!DOCTYPE html>
<html>
<head>
	<title>e-Worker</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  body{
  	background-image: url(gwd.png);
  	background-size:     cover;                      /* <------ */
    background-repeat:   no-repeat;
     
  }

  		.navbar{
  			margin-bottom:0;
  			border-radius: 0;
  			background-color: #5E4485;
  			color: #fff;
  			padding: 1% 0;
  			
  			font-size:1.2em;
  			border: 0;

  		}

  		.navbar-brand{
  			float:left;
  			min-height: 55px;
  			padding:0 15px 5px;
  		}
  		.navbar-inverse .navbar-nav .active a, .navbar-inverse .navbar-nav .active a:focus, .navbar-inverse .navbar-nav .active a:hover
  		{
  			color:#fff;
  			background-color: #5e4484;

  		}
  		.navbar-inverse .navbar-nav li a{
  			color:#d5d5d5;
  		}
  		.carousel-caption{
  			top:50%;
  			transform: trnslateY(-50%);
  			text-transform: uppercase;
  		}

  		.btn{
  			font-size:18px;
  			color:#fff;
  			padding:12px 22px;
  			background-color:#5e4485;
  			border: 2px solid #fff;
  		}

  		@media(max-width:600px){
  			.carousel-caption{
  			display:none;}
  			#icon{
  				max-width: 150px;
  			}
  			h2{
  				font-size:1.7em;

  			}
  		}

  		#icon{
  			max-width: 200px;
  			margin:1% auto;
  		}

  		.container{
  			margin:4% auto;
  		}

  		footer{
  			width:100%;
  			background-color: #5e4485;
  			padding:3%;
  			color:#fff;
  		}
  </style>
</head>
<body>
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="#" class="navbar-brand"><img src="1132.jpg"></a></div>

				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav navbar-right">
						<li class="active"><a href="#">Home</a></li>
						<li><a href="#" class=" dropdown-toggle" data-toggle="dropdown">Register</a>
							<div class="dropdown-menu">
    							<a class="dropdown-item" href="workerregistration.php" style="color:black;">Worker</a>
    							<a class="dropdown-item" href="user.php" style="color: black;">User</a>
   									 
 							 </div>
							</li>

							<li><a href="#" class=" dropdown-toggle" data-toggle="dropdown">Login</a>
							<div class="dropdown-menu">
    							<a class="dropdown-item" href="workerlogin.php" style="color:black;">Worker Login</a>
    							<a class="dropdown-item" href="userlogin.php" style="color: black;">User Login</a>
   									 
 							 </div>
							</li>

						<li><a href="#">About</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
					
				</div>
			</div>
		</div>
	</nav>





<footer class="container-fluid text-center navbar-fixed-bottom" style="height: 170px;" >
		<div class="row">
			<div class="col-sm-4">
				<h3>Contact Us</h3></br>
				<h4>Our contact and address</h4>
			</div>
		</div>
	</footer>
</body>
</html>
