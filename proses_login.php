<?php 
session_start(); 
include "koneksi.php";

if (isset($_POST['user']) && isset($_POST['pass'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$user = validate($_POST['user']);
	$pass = validate($_POST['pass']);

	if (empty($user)) {
		header("Location: login.php?error=Gagal Login ! Silahkan Masukkan Data dengan Benar");
	    exit();
	}else if(empty($pass)){
        header("Location: login.php?error=Gagal Login ! Silahkan Masukkan Data dengan Benar ");
	    exit();
	}else{
		$sql = "SELECT * FROM users WHERE user_name='$user' AND password='$pass'";

		$result = mysqli_query($koneksi, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['user_name'] === $user && $row['password'] === $pass) {
            	$_SESSION['user_name'] = $row['user_name'];
            	$_SESSION['name'] = $row['name'];
            	$_SESSION['id'] = $row['id'];
            	header("Location: index.php");
		        exit();
            }else{
				header("Location: login.php?error=Incorect User name or password");
		        exit();
			}
		}else{
			header("Location: login.php?error=Incorect User name or password");
	        exit();
		}
	}
	
}else{
	header("Location: login.php");
	exit();
}