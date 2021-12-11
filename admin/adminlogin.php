<?php
	if(ISSET ($_POST['login'])){
		$username = $_POST['uname'];
		$password = $_POST['psw'];
		$query = $conn->query("SELECT * FROM `admin` WHERE `user_name` = '$username' && `password` = '$password'") or die(mysqli_error());
		$fetch = $query->fetch_array();
		$row = $query->num_rows;
		
		if($row > 0){
			session_start();
			$_SESSION['admin_id'] = $fetch['admin_id'];
			header('location:reserve.php');
		}else{
			echo "<center><labe style = 'color:red;'>Invalid username or password</label></center>";
		}
	}
?>