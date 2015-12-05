<?php
	$id = $_POST['opId'];
	
	$query = "SELECT * FROM opportunities WHERE opportunity_id = '$id'";
	$result = mysqli_query($conn, $query);
?>