<?php
    session_start();

	if(isset($_POST['email'])){
		if(isset($_POST['password'])){
			include '../connect.php';
			$data = array();
			$email = mysqli_real_escape_string($conn, $_POST['email']);
			$password = mysqli_real_escape_string($conn, $_POST['password']);
			
			$query = "SELECT user_id, email, password FROM user WHERE email = '" . $email . "' AND password = '" . $password . "'";
			$userrow = mysqli_query($conn, $query); //Execute query.
			$row = $userrow->fetch_assoc();
            
            if(mysqli_num_rows($userrow) > 0){
                $_SESSION['loggedinUser'] = $row['user_id'];
                $_SESSION['begin'] = time();
                $_SESSION['expire'] = $_SESSION['begin'] + (3600);
                
			} else {
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