<?php

	if(isset($_POST['log_email'])){ //If there's data in the username field...
		if(isset($_POST['log_password'])){ //If there's data in the password field...
		
			include '../connect.php'; //Open DB connection.
			$data = array();
			$email = mysqli_real_escape_string($conn, $_POST['log_email']); //Set username as user input in username field.
			$password = mysqli_real_escape_string($conn, md5($_POST['log_password'])); //Set password as md5 encrypted user input in password field.
			$errorMessage = null;
			
			//Query to select username and password from accounts table that are equal to the username and password inputted by user.
			$query = "SELECT email, password FROM users WHERE email = '" . $email . "'" . " AND password = '" . $password . "'";
			$userrow = mysqli_query($conn, $query); //Execute query.
            echo($query);
			
			//If the username and password given by the user exist in the database, set a loggedin session with their username, 
			//a session for when they logged in, and a session for when their loggedin session will time out.
			//Also add a log to the log file, also specifying which user logged in and timestamp, and redirect user to the index/home page.
			if(mysqli_num_rows($userrow) > 0){
					
				$_SESSION['loggedinUser'] = $email;
				$_SESSION['begin'] = time();
				$_SESSION['expire'] = $_SESSION['begin'] + (3600); //expire login session after an hour.
					
					
				//Uses the writeMessage function from phpFuncts.php to write a message to the logfile.
				$message = " has LOGGED IN.";
				writeLog($message);
					
				header("location: http://google.co.uk");
                
			} else {
				//If there were no matching rows, then notify user that the login was unsuccessful.
				$data['error'] = "Login unsuccessful.";
			}
		} else {
            $data['error'] = "No password";
        }
	} else {
            $data['error'] = "No username.";
    }

 echo json_encode($data);
?>