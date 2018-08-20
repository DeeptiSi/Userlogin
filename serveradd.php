<?php session_start(); ?>
 
<?php
if(!isset($_SESSION['valid'])) {
    header('Location: index.php');
}
?>
 
<html>
<head>
    <title>Add Data</title>
</head>
 
<body>
<?php
//including the database connection file
$db = mysqli_connect('localhost', 'root', '','registration');
 
if(isset($_POST['save'])) {    
    $name = $_POST['name'];
    $loginId = $_SESSION['id'];
        
    // checking empty fields
    if(empty($name)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }
        
      else { 
        // if all the fields are filled (not empty) 
            echo $loginId;
        //insert data to database    
        $result = mysqli_query($mysqli, "INSERT INTO subjects(name,login_id) VALUES('$name',$loginId)");
        
        //display success message
        echo "<font color='green'>Data added successfully.";
        echo "<br/><a href='view.php'>View Result</a>";
    }
}
	$usid=mysqli_query($db,"select id from users where username='$username'");	
	$name = "";

	$id = 0;
	$update = false;

	if (isset($_POST['save'])) {
		$name = $_POST['name'];
		echo $usid;
		mysqli_query($db, "INSERT INTO subjects (sname,login_id) VALUES ('$name',$usid)"); 
		$_SESSION['message'] = "Data saved"; 
		header('location: index.php');
	}
	else {
  		array_push($errors, "Wrong username/password combination");
  	}
  


	
?>
</body>
</html>

