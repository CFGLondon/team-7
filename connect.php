<?php
$conn = mysqli_connect('127.0.0.1', 'root', 'code4good');
mysqli_select_db($conn, 'Route21');

if (!$conn) {
	die("Connection failed: ".mysqli_connect_error());
}
echo "Connected";
?>