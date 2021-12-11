<?php
	require 'connect.php';
	$query = $conn->query("SELECT * FROM `login` WHERE `customer_id` = '$_SESSION[customer_id]'") or die(mysqli_error());
	$fetch = $query->fetch_array();
	$name = $fetch['user_name'];
?>