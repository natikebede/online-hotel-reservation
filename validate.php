<?php 
	session_start();
	if(!ISSET($_SESSION['customer_id'])){
		header("location:home.php");
	}