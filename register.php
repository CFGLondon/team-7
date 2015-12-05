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
			height: 400px;
			width: 345px;
		}
		
		
		hr {
			width: 300px;

		}
		
    </style>
</head>

<body style="padding-top: 70px;">
    <nav class="navbar navbar-default  navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="navbar-header">
                    <a class="navbar-brand" href="">Home</a>
                </div>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="">Profile<span class="sr-only">(current)</span></a>
                    </li>
					

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

	
	<form action="post" id="register">
		<h1>Register for Route 21 </h1>
		<hr>
		<br>
		<span>First name: </span>
		<input type="text" name="firstName" placeholder="Name" class="form-control"><br>
		<span>Last name: </span>
		<input type="text" name="lastName" placeholder="Name" class="form-control"><br>
		
		<span>Date of birth: </span>
		<input type="text" name="DOB" placeholder="date of birth" class="form-control"><br>
		
		<span>Password:</span>
		<input type="text" name="password" placeholder="password" class="form-control"><br>
		
		<span>confirm password:</span>
		<input type="text" name="password2" placeholder="confirm password" class="form-control"><br>
		
		<span>postcode:</span>
		<input type="text" name="postcode" placeholder="phone number" class="form-control"><br>
		
		<span>Email: </span>
		<input type="text" name="email" placeholder="email" class="form-control"><br>
		
		
		<span>avatar: </span>
		<img src="profile-img-placeholder.gif"> </img>
		<input type="text" name="avatar" placeholder="avatar" class="form-control"><br>
		
		
		<!-- not really a field going to get from previous page -->
		<span>type: </span>
		<input type="text" name="type" placeholder="type" class="form-control"><br>		
	
		
		<span>Phone number:</span>
		<input type="text" name="phone" placeholder="phone number" class="form-control"><br>
		
	
		<input type="submit" name="register" value="register" class="btn">
	</form>
	
	<?php 
	
		if(isset($_POST["firstName"])) && isset($_POST["lastName"]) && isset($_POST["DOB"]) && isset($_POST["password"]) && isset($_POST["password2"]) && isset($_POST["postcode"]) && isset($_POST["email"]) && isset($_POST["phone"])) {
			$firstName = $_POST["firstName"];
			$lastName = $_POST["lastName"];
			$DOB = $_POST["DOB"];
			$password = $_POST["password"];
			$password2 = $_POST["password2"];
			$postcode = $_POST["postcode"];
			$email = $_POST["email"];
			$phone = $_POST["phone"];
			
			var_dump($phone);
			
			
			
				
	
		}
		
		$stmt = "Insert into users()"
			
	?>
</body>
</html>
