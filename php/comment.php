<?php
    session_start();
    if(
	if(isset($_POST['commentBox'])){
			include '../connect.php';
			$data = array();
			$comment = mysqli_real_escape_string($conn, $_POST['comment']);
			
		      $comments = mysqli_real_escape_string($conn, $_POST['comment']);
            
            $query = "INSERT INTO comments (user_id, comment) VALUES ('". $_SESSION['loggedinUser'] ."', '". $comments ."')";
			$userrow = mysqli_query($conn, $query); //Execute query.
			$row = $userrow->fetch_assoc();
            
            
        
		} else {
            $data['error'] = "No Comment";
        }
 echo json_e
