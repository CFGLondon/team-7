<?php
    session_start();
    
    if (isset($_SESSION['loggedinUser'])) {
        session_destroy();
    } else {
        $data['error'] = "No session found!";
    }    

 echo json_encode($data);
?>