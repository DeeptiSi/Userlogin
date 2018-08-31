<?php  include('php_code.php'); ?>

<html>
<head>
    <title>Add Data</title>
</head>
 
<body>
<?php
$un=''; 
if(isset($_POST['save'])) {    
    $name = $_POST['name'];
    echo $name;        
    // checking empty fields
         
        if(empty($name)) {
            echo "<font color='red'>Subject Name field is empty.</font><br/>";
        }
        else 
	{ 
        // if all the fields are filled (not empty)             	$un=$_SESSION['username'];
	echo $un;        
//insert data to database
	$usid=mysqli_query($db,"select * from users where username='$un'");	
	$sid=mysqli_fetch_array($usid);
	$uid=$sid[0];		
	echo $uid;
	mysqli_query($db, "INSERT INTO subjects (sname,login_id) VALUES ('$name','$uid')"); 
	$_SESSION['message'] = "Data saved"; 
//	header('location: index.php');
        //display success message
        echo "<font color='green'>Data added successfully.";
    }
}
?>
</body>
</html>

