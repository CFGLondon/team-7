<?php
    session_start();
    if(
	if(isset($_POST['commentBox'])){
			include '../connect.php';
			$data = array();
			$comment = mysqli_real_escape_string($conn, $_POST['comment']);
            
            if($_SESSION['loggedinUser'] == null){
                echo "<script>alert(\"Passwords do not match\")</script>";
            } else {
            include "connect.php";			
			$query = "INSERT INTO comments (user_id, comment)VALUES ('$comment', '$_SESSION['loggedinUser']')";
			mysqli_query($conn, $query);
			include "disconnect.php";
            }
            
        
		} else {
            $data['error'] = "No Comment";
        }
 echo json_e
