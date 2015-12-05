<?php
$conn = mysqli_connect('127.0.0.1', 'root', 'code4code');

if (isset($conn) == false) {
	echo "<p>Didn't connect<p>";
}
?>