<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
    <title>Registration</title>    

   <!-- Custom CSS -->
    <link href="css/business-frontpage.css" rel="stylesheet">
    <link href="css/navbar.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <script src="js/jquery.js"></script>
    <script src="js/nav.js"></script>
    
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

<body>
    <?php include 'navbar.php'; ?>

    <header class="business-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!--<h1 class="tagline">Route 21</h1>-->
                </div>
            </div>
        </div>
    </header>    
    
	<form method="get" action="#"  id="register">
        <center><h1>Registration</h1></center>
		<hr>
		<br>
		<b>First name: </b>
		<input type="text" name="firstName" placeholder="John" class="form-control" required><br>
		<b>Last name: </b>
		<input type="text" name="lastName" placeholder="Smith" class="form-control" required><br>
		
		<b>Date of birth: </b>
		<input type="date" name="DOB" class="form-control" required><br>
		
		<b>Password:</b>
		<input type="password" name="password" class="form-control" required><br>
		
		<b>Confirm Password:</b>
		<input type="password" name="password2" class="form-control" required><br>
		
		<b>Postcode:</b>
		<input type="text" name="postcode" placeholder="SM4 4GF" class="form-control" required><br>
		
		<b>Email:</b>
		<input type="text" name="email" placeholder="Johnsmith@gmail.com" class="form-control" required><br>
		
		<div id="avatar"> 
			<b>Avatar: </b>
			<div id="avDesc">Upload a profile picture:</div>
			<img src="profile-img-placeholder.gif"></img>
			<input type="text" name="avatar" class="form-control"><br>
			<input type="submit" name="submitPicture" value="upload" class="btn"> 
		</div>
		<span>Phone number:</span>
		<input type="text" name="phone" placeholder="07890123456" class="form-control"><br>
		
		<input type="submit" name="register" value="Register" class="btn">
	</form>
	<?php
		$first = $_GET['firstName'];
		$last = $_GET['lastName'];
		$DOB = $_GET['DOB'];
		$passOne = $_GET['password'];
		$passTwo = $_GET['password2'];
		$email = $_GET['email'];
		$postcode = $_GET['postcode'];
		
		if ($passOne == $passTwo && $passOne != null) {
			include "connect.php";			
			$query = "INSERT INTO user (first_name, last_name, password, email, date_of_birth, postcode)VALUES ('$first', '$last', '$passOne', '$email', '$DOB', '$postcode')";
			mysqli_query($conn, $query);
			include "disconnect.php";
		} else if ($passOne != null) {
			echo "<script>alert(\"Passwords do not match\")</script>";
		}
	?>
    
    <script src="js/bootstrap.min.js"></script>

</body>
</html>
