<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.10/css/jquery.dataTables.css">
	<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.10/js/jquery.dataTables.js"></script>

    <title>Register as a new user</title>

    <!-- Bootstrap -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src = "https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src = "https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
    <style>
       
		.table-hover tbody tr:hover td, .table-hover tbody tr:hover th {
		background-color: #eeeeea;
		}
		
		#search { 
			width: 300px;
			height: 50px;
			margin: auto;
		
		}
		#register {
			margin: auto;
			height: 400px;
			width: 345px;
		}
		
		
		hr {
			width: 300px;

		}
		
		#avatar  {
			height: 200px;
			width: 345px;
		}
		
    </style>
</head>

<body >
    
	 <!-- Navigation -->
	<nav class="navbar navbar-inverse" role="navigation">
		<div class="container">
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		</div>
		<!-- /.navbar-collapse -->
		</div>
		<!-- /.container -->
	</nav>	
	
	<form method="get" action="#"  id="register">
		<h1>Register for Route 21 </h1>
		<hr>
		<br>
		<b>First name: </b>
		<input type="text" name="firstName" placeholder="Name" class="form-control" required><br>
		<b>Last name: </b>
		<input type="text" name="lastName" placeholder="Name" class="form-control" required><br>
		
		<b>Date of birth: </b>
		<input type="date" name="DOB" class="form-control" required><br>
		
		<b>Password:</b>
		<input type="password" name="password" placeholder="password" class="form-control" required><br>
		
		<b>confirm password:</b>
		<input type="password" name="password2" placeholder="confirm password" class="form-control" required><br>
		
		<b> postcode: </b>
		<input type="text" name="postcode" placeholder="phone number" class="form-control" required><br>
		
		<b>Email: </b>
		<input type="text" name="email" placeholder="email" class="form-control" required><br>
		
		<div id="avatar"> 
			<b>Avatar: </b>
			<div id="avDesc"> upload a profile picture for others to see on route21 </div>
			<img src="profile-img-placeholder.gif"> </img>
			<input type="text" name="avatar" placeholder="avatar" class="form-control"><br>
			<input type="submit" name="submitPicture" value="upload" class="btn"> 
		</div>
		<span>Phone number:</span>
		<input type="text" name="phone" placeholder="phone number" class="form-control"><br>
		
	
		<input type="submit" name="register" value="register" class="btn">
	</form>
	<?php
		$first = $_GET['firstName'];
		$last = $_GET['lastName'];
		$DOB = $_GET['DOB'];
		$passOne = $_GET['password'];
		$passTwo = $_GET['password2'];
		$email = $_GET['email'];
		$postcode = $_GET[''];
		
		if ($passOne == $passTwo && $passOne != null) {
			echo "<script>alert(\"Passwords do match\")</script>";
		} else if ($passOne != null) {
			echo "<script>alert(\"Passwords do not match\")</script>";
		}
	?>

</body>
</html>
