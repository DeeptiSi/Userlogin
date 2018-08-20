<?php 
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'registration');

	// initialize variables
	$name = "";
	$un=$_SESSION['username'];
	echo $un;
	$usid=mysqli_query($db,"select id from users where username='$un'"); 
	$update = false;

	if (isset($_POST['save'])) {
	echo $un;

		$name = $_POST['name'];
		$uid=mysqli_query($db, "INSERT INTO subjects (sname,login_id) VALUES ('$name',$uid)"); 
		$_SESSION['message'] = "Data saved"; 
		header('location: index.php');
	}

// ...