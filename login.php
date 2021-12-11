<?php
	if(ISSET ($_POST['login'])){
		$username = $_POST['uname'];
		$password = $_POST['psw'];
		$query = $conn->query("SELECT * FROM `login` WHERE `user_name` = '$username' && `password` = '$password'") 
		or die(mysqli_error());
		$fetch = $query->fetch_array();
		$row = $query->num_rows;
		
		if($row > 0){
			session_start();
			$_SESSION['customer_id'] = $fetch['customer_id'];
			header('location:booking.php');
			echo "<script>alert('well come!!')</script>";
		}else{
			echo "<center><labe style = 'color:red;'>Invalid username or password</label></center>";
		}
	}
?>
