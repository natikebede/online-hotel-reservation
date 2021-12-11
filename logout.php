<?php
	session_start();
	session_unset(customer_id);
	header("location:home.php");
?>