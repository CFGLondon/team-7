<?php
$conn = mysqli_connect('127.0.0.1', 'root', 'code4good', 'Route21');

if (!$conn) {
	die("Connection failed: ".mysqli_connect_error());
}
echo "Connected";
?>