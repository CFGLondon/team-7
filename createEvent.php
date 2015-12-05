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
	
	<form method="post" action="#"  id="register">
		<h1> Create an event </h1>
		<hr>
		<br>
		<b>Event Name: </b>
		<input type="text" name="eventName" placeholder="Name" class="form-control"><br>
		<b>Date: </b>
		<input type="text" name="date" placeholder="Name" class="form-control"><br>
		
		<b>Location: </b>
		
		<input type="text" name="location" placeholder="date of birth" class="form-control"><br>
		<b>Description:</b>
		<input type="test" name="description" placeholder="description" class="form-control"><br>
		
		<input type="submit" name="createEvent" value="create event" class="btn">
	</form>
	
	
	<? 
		include 'connect.php';
				
	
		if(isset($_POST["createEvent"]))  {
			if(!empty($_POST["eventName"]) && !empty($_POST["date"]) && !empty($_POST["location"]) && !empty($_POST["description"])) {
				
		
				$eventName = $_POST["eventName"];
				$date = $_POST["date"];
				$location = $_POST["location"];
				$desc = $_POST["description"];
				
				$stmnt = "INSERT INTO events VALUES(null, \"$eventName\", \"$date\", \"$location\", \"$desc\", null, null, '1')"; 
			
				$result = mysqli_query($conn, $stmnt);
				
				if($result != false) {
					
					echo "success";
				} else {
					
					echo "failed";
				}
			}
		}
		mysqli_close($conn);
	
	?> 

</body>
</html>
