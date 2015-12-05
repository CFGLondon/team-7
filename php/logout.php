<?php
    session_start();
    
    if (isset($_SESSION['loggedinUser'])) {
        session_destroy();
        $_SESSION = array();
        
    } else {
        $data['error'] = "No session found!";
    }    

    echo json_encode($data);
?>